<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\InvalidStateException;

class DiscordAuthController extends Controller
{
    public function redirect(): RedirectResponse
    {
        return Socialite::driver('discord')
            ->setScopes(['identify'])
            ->withConsent()
            ->redirect();
    }

    public function callback(Request $request): Response
    {
        if ($request->has('error')) {
            $request->session()->forget('state');

            return response('De aanmelding via Discord is geannuleerd of geweigerd.', 400)
                ->header('Content-Type', 'text/plain; charset=UTF-8');
        }

        try {
            Socialite::driver('discord')->user();
        } catch (InvalidStateException) {
            return response('De aanmelding is verlopen of ongeldig. Start opnieuw via /auth/discord.', 400)
                ->header('Content-Type', 'text/plain; charset=UTF-8');
        } catch (GuzzleException) {
            return response('De aanmelding via Discord kon niet worden voltooid. Probeer het opnieuw.', 502)
                ->header('Content-Type', 'text/plain; charset=UTF-8');
        }

        return response('Discord heeft je identiteit bevestigd. Je bent nog niet ingelogd bij WWTransit.')
            ->header('Content-Type', 'text/plain; charset=UTF-8');
    }
}
