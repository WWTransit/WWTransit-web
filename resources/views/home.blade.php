<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="WWTransit brengt haltes, actuele vertrektijden, reisplanning en live voertuigen samen. Ontdek de nieuwe open-source OV-applicatie in ontwikkeling.">
        <meta name="theme-color" content="#1c6266">
        <title>WWTransit — Jouw reis. In één overzicht.</title>
        <link rel="icon" type="image/png" href="{{ asset('wwtransit-logo.png') }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <a class="skip-link" href="#inhoud">Naar de inhoud</a>

        <header class="site-header sticky-top">
            <nav class="navbar navbar-expand-lg" aria-label="Hoofdnavigatie">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('home') }}" aria-label="WWTransit, naar de homepage">
                        <img class="brand-logo" src="{{ asset('wwtransit-logo.png') }}" alt="" width="47" height="39">
                        <span class="brand-name">WW<span>Transit</span></span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Menu openen of sluiten">
                        <x-icon name="menu" />
                    </button>
                    <div class="collapse navbar-collapse" id="main-navigation">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item"><a class="nav-link" href="#ontdek">Ontdek WWTransit</a></li>
                            <li class="nav-item"><a class="nav-link" href="#mogelijkheden">Mogelijkheden</a></li>
                            <li class="nav-item"><a class="nav-link" href="#over">Over het project</a></li>
                        </ul>
                        <a class="btn btn-discord" href="{{ route('auth.discord.redirect') }}">
                            <x-icon name="user" /> Verbinden met Discord
                        </a>
                    </div>
                </div>
            </nav>
        </header>

        <main id="inhoud">
            <section class="hero" aria-labelledby="hero-title">
                <div class="container position-relative">
                    <div class="row align-items-center gy-3">
                        <div class="col-md-6 col-lg-5">
                            <span class="eyebrow"><span class="eyebrow-dot" aria-hidden="true"></span> Een nieuwe kijk op onderweg zijn</span>
                            <h1 id="hero-title">Jouw reis.<br>In één <span>overzicht.</span></h1>
                            <p class="hero-copy">Van de halte om de hoek tot je volgende bestemming. WWTransit brengt jouw openbaar vervoer samen, zodat jij verder kunt.</p>
                            <div class="hero-actions">
                                <a class="btn btn-brand" href="#ontdek">Ontdek WWTransit <x-icon name="arrow" /></a>
                                <a class="text-link" href="#mogelijkheden">Wat kun je straks? <x-icon name="arrow" /></a>
                            </div>
                            <p class="hero-note"><x-icon name="code" /> Open source. Gebouwd voor iedereen die reist.</p>
                        </div>
                        <div class="col-md-6 col-lg-7">
                            <div class="network-scene" aria-label="Schematische illustratie van een OV-netwerk, geen actuele kaart" role="img">
                                <span class="map-caption">Alles is verbonden</span>
                                <svg class="network-map" viewBox="0 0 600 370" aria-hidden="true" focusable="false">
                                    <defs>
                                        <pattern id="map-grid" width="22" height="22" patternUnits="userSpaceOnUse"><circle cx="2" cy="2" r="1" fill="#dbe5d7" /></pattern>
                                        <linearGradient id="green-line" x1="0" y1="0" x2="1" y2="1"><stop stop-color="#589b3b" /><stop offset="1" stop-color="#1c6266" /></linearGradient>
                                    </defs>
                                    <rect x="10" y="5" width="580" height="360" rx="35" fill="url(#map-grid)" />
                                    <path class="network-path" d="M27 254H139Q169 254 169 224V100Q169 70 199 70H309Q339 70 339 40V18" stroke="#e2eade" stroke-width="22" />
                                    <path class="network-path" d="M46 145H234Q265 145 265 176V256Q265 286 295 286H557" stroke="#dce8e7" stroke-width="22" />
                                    <path class="network-path" d="M27 254H139Q169 254 169 224V100Q169 70 199 70H309Q339 70 339 40V18" stroke="url(#green-line)" stroke-width="9" />
                                    <path class="network-path" d="M46 145H234Q265 145 265 176V256Q265 286 295 286H557" stroke="#164c71" stroke-width="9" />
                                    <path class="network-path" d="M90 331L320 101Q340 81 368 81H476Q505 81 505 110V192Q505 222 535 222H578" stroke="#20a5bd" stroke-width="7" />
                                    <path class="network-path" d="M339 81V183Q339 213 369 213H420" stroke="#90bb72" stroke-width="5" stroke-dasharray="2 9" />
                                    <g fill="#f8faf7" stroke-width="4">
                                        <circle cx="87" cy="254" r="6" stroke="#589b3b" /><circle cx="169" cy="145" r="10" stroke="#1c6266" />
                                        <circle cx="213" cy="70" r="6" stroke="#589b3b" /><circle cx="339" cy="81" r="10" stroke="#1c6266" />
                                        <circle cx="265" cy="197" r="6" stroke="#164c71" /><circle cx="351" cy="286" r="6" stroke="#164c71" />
                                        <circle cx="456" cy="286" r="6" stroke="#164c71" /><circle cx="505" cy="153" r="6" stroke="#20a5bd" />
                                        <circle cx="135" cy="286" r="6" stroke="#20a5bd" /><circle cx="440" cy="81" r="6" stroke="#20a5bd" />
                                    </g>
                                    <circle cx="169" cy="145" r="22" fill="#589b3b" opacity=".10" />
                                    <text x="105" y="123" class="map-label map-label-large">Jouw vertrekpunt</text>
                                    <text x="345" y="57" class="map-label">De volgende halte</text>
                                    <text x="349" y="315" class="map-label">Nieuwe bestemmingen</text>
                                    <g transform="translate(263 113) rotate(-45)"><rect x="-13" y="-20" width="26" height="40" rx="8" fill="#1c6266" stroke="white" stroke-width="3" /><rect x="-7" y="-13" width="14" height="12" rx="3" fill="#e4f2dc" /><circle cx="-5" cy="10" r="2" fill="white" /><circle cx="5" cy="10" r="2" fill="white" /></g>
                                    <g transform="translate(395 286)"><rect x="-18" y="-12" width="36" height="24" rx="7" fill="#164c71" stroke="white" stroke-width="3" /><path d="M-10-5h7v10h-7Zm13 0h7v10H3Z" fill="#d4eff1" /></g>
                                </svg>
                                <div class="map-chip map-chip-top"><span class="chip-icon"><x-icon name="train" /></span><div><strong>Je volgende verbinding</strong><small>Trein, bus, tram of metro</small></div></div>
                                <div class="map-chip map-chip-bottom"><span class="chip-icon"><x-icon name="pin" /></span><div><strong>Van hier naar overal</strong><small>Je hele reis op één plek</small></div><span class="chip-tag">Op weg <span aria-hidden="true">↗</span></span></div>
                            </div>
                            <div class="mode-strip" aria-label="Vervoermiddelen">
                                <span><x-icon name="train" /> Trein</span><span><x-icon name="bus" /> Bus</span><span><x-icon name="tram" /> Tram</span><span><x-icon name="metro" /> Metro</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="preview-section" id="ontdek" aria-label="Voorproefje van WWTransit">
                <div class="container">
                    <div class="preview-card">
                        <div class="preview-top">
                            <div class="nav nav-tabs preview-tabs" id="preview-tabs" role="tablist" aria-label="Ontdek de functies">
                                <button class="nav-link active" id="planner-tab" data-bs-toggle="tab" data-bs-target="#planner-panel" type="button" role="tab" aria-controls="planner-panel" aria-selected="true"><x-icon name="route" /> Reis plannen</button>
                                <button class="nav-link" id="departures-tab" data-bs-toggle="tab" data-bs-target="#departures-panel" type="button" role="tab" aria-controls="departures-panel" aria-selected="false"><x-icon name="clock" /> Vertrektijden</button>
                                <button class="nav-link" id="vehicles-tab" data-bs-toggle="tab" data-bs-target="#vehicles-panel" type="button" role="tab" aria-controls="vehicles-panel" aria-selected="false"><x-icon name="pin" /> Live voertuigen</button>
                            </div>
                            <span class="preview-badge">Vooruitblik · in ontwikkeling</span>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="planner-panel" role="tabpanel" aria-labelledby="planner-tab" tabindex="0">
                                <div class="row g-3 preview-fields align-items-center">
                                    <div class="col-md-4"><div class="field-box"><span class="field-marker" aria-hidden="true"></span><div><small>Van · voorbeeld</small><strong>Amsterdam Centraal</strong></div></div></div>
                                    <div class="col-md-4"><div class="field-box"><span class="field-marker destination" aria-hidden="true"></span><div><small>Naar · voorbeeld</small><strong>Utrecht Centraal</strong></div></div></div>
                                    <div class="col-md-4"><button type="button" class="btn btn-brand" data-bs-toggle="modal" data-bs-target="#journey-example">Bekijk voorbeeldreis <x-icon name="arrow" /></button></div>
                                </div>
                                <p class="preview-help"><x-icon name="info" /> Dit is een voorproefje. De reisplanner is nog niet aangesloten.</p>
                            </div>
                            <div class="tab-pane fade" id="departures-panel" role="tabpanel" aria-labelledby="departures-tab" tabindex="0">
                                <div class="row g-3 preview-fields align-items-center">
                                    <div class="col-md-4"><div class="field-box"><x-icon name="search" /><div><small>Halte of station · voorbeeld</small><strong>Utrecht Centraal</strong></div></div></div>
                                    <div class="col-md-5"><p class="preview-description">Straks zie je per halte wat er vertrekt, vanaf welk perron en of je verbinding op tijd is.</p></div>
                                    <div class="col-md-3"><a class="btn btn-brand" href="#vertrekbord">Bekijk voorbeeld <x-icon name="arrow" /></a></div>
                                </div>
                                <p class="preview-help"><x-icon name="info" /> Het voorbeeldbord toont fictieve gegevens, geen actuele vertrektijden.</p>
                            </div>
                            <div class="tab-pane fade" id="vehicles-panel" role="tabpanel" aria-labelledby="vehicles-tab" tabindex="0">
                                <div class="row g-3 preview-fields align-items-center">
                                    <div class="col-md-4"><div class="field-box"><x-icon name="pin" /><div><small>Onderweg in beeld</small><strong>Waar is jouw verbinding?</strong></div></div></div>
                                    <div class="col-md-5"><p class="preview-description">Volg straks voertuigen op de kaart en bekijk welke rit ze rijden. Beschikbaarheid hangt af van de databron.</p></div>
                                    <div class="col-md-3"><a class="btn btn-brand" href="#mogelijkheden">Meer ontdekken <x-icon name="arrow" /></a></div>
                                </div>
                                <p class="preview-help"><x-icon name="info" /> De live kaart wordt in een volgende ontwikkelstap toegevoegd.</p>
                            </div>
                        </div>
                    </div>
                    <noscript><p class="preview-help">Schakel JavaScript in om de voorbeeldtabs en voorbeeldreis te openen. Hieronder vind je alle informatie over het project.</p></noscript>
                </div>
            </section>

            <section class="features-section" id="mogelijkheden" aria-labelledby="features-title">
                <div class="container">
                    <div class="row align-items-end section-head gy-3">
                        <div class="col-md-7"><span class="eyebrow">Minder zoeken. Meer onderweg.</span><h2 class="section-heading mb-0" id="features-title">Alles voor je reis.<br>Alle ruimte om te ontdekken.</h2></div>
                        <div class="col-md-5"><p class="section-intro mb-0">Eén plek voor de informatie die ertoe doet.<br class="d-none d-lg-block"> Dit bouwen we voor jouw dagelijkse reis.</p></div>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-6 col-lg-3"><article class="feature-card"><div class="feature-icon"><x-icon name="search" /></div><h3>Vind jouw halte</h3><p>Een station in de stad of die ene bushalte om de hoek. Vind het vertrekpunt dat bij je past.</p><span class="feature-meta">Haltes &amp; stations</span></article></div>
                        <div class="col-sm-6 col-lg-3"><article class="feature-card feature-blue"><div class="feature-icon"><x-icon name="clock" /></div><h3>Weet wat er vertrekt</h3><p>Geplande tijden, vertragingen en uitval bij elkaar. Zodat je weet waar je aan toe bent.</p><span class="feature-meta">Actuele vertrektijden</span></article></div>
                        <div class="col-sm-6 col-lg-3"><article class="feature-card feature-teal"><div class="feature-icon"><x-icon name="route" /></div><h3>Maak je reis compleet</h3><p>Van vertrek tot aankomst, met je overstappen en ritdetails overzichtelijk op één plek.</p><span class="feature-meta">Reisplanning &amp; ritdetails</span></article></div>
                        <div class="col-sm-6 col-lg-3"><article class="feature-card feature-cyan"><div class="feature-icon"><x-icon name="pin" /></div><h3>Volg de beweging</h3><p>Bekijk waar voertuigen rijden. Een blik op de kaart brengt jouw verbinding dichterbij.</p><span class="feature-meta">Live voertuigposities</span></article></div>
                    </div>
                </div>
            </section>

            <section class="journey-section" id="vertrekbord" aria-labelledby="journey-title">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="journey-panel">
                                <div class="board-head"><div><span class="eyebrow">Jouw vertrekbord · voorbeeld</span><h3>Utrecht Centraal</h3></div><x-icon name="train" /></div>
                                <div class="departure-row"><span class="line-badge">IC</span><div class="departure-destination"><strong>Amsterdam Centraal</strong><small>Trein · spoor 5</small></div><div class="departure-time">4 min<small>Op tijd</small></div></div>
                                <div class="departure-row"><span class="line-badge bus">28</span><div class="departure-destination"><strong>Utrecht Science Park</strong><small>Bus · halte C3</small></div><div class="departure-time">7 min<small>Op tijd</small></div></div>
                                <div class="departure-row"><span class="line-badge tram">22</span><div class="departure-destination"><strong>P+R Science Park</strong><small>Tram · halte Centrumzijde</small></div><div class="departure-time">11 min<small>+2 min</small></div></div>
                                <p class="board-note"><x-icon name="info" /> Fictieve voorbeeldgegevens. Niet gebruiken als reisadvies.</p>
                            </div>
                        </div>
                        <div class="col-md-6 journey-copy">
                            <span class="eyebrow">Van even kijken naar lekker reizen</span>
                            <h2 class="section-heading" id="journey-title">Je hoeft niet alles te weten.<br>Alleen waar je heen wilt.</h2>
                            <p class="section-intro">We bouwen WWTransit rond een eenvoudige gedachte: goede reisinformatie geeft rust. Duidelijk, op het juiste moment en zonder omwegen.</p>
                            <ol class="step-list">
                                <li><span class="step-number" aria-hidden="true">01</span><div><strong>Kies je vertrekpunt</strong><p>Zoek een halte of station waar jouw reis begint.</p></div></li>
                                <li><span class="step-number" aria-hidden="true">02</span><div><strong>Bekijk je mogelijkheden</strong><p>Ontdek vertrektijden, verbindingen en ritdetails.</p></div></li>
                                <li><span class="step-number" aria-hidden="true">03</span><div><strong>Ga met overzicht op weg</strong><p>Volg je verbinding en houd veranderingen in beeld.</p></div></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="open-section" id="over" aria-labelledby="open-title">
                <div class="container">
                    <div class="open-banner">
                        <div class="row align-items-center gy-4">
                            <div class="col-lg-8"><span class="eyebrow"><x-icon name="code" /> Open source. Open blik.</span><h2 id="open-title">Gemaakt uit liefde voor onderweg.</h2><p>WWTransit is een onafhankelijk project in ontwikkeling, met een open-source koers. We bouwen stap voor stap aan begrijpelijke OV-informatie, in Nederland en over de grens.</p></div>
                            <div class="col-lg-4 d-flex justify-content-lg-end"><a class="btn" href="{{ route('auth.discord.redirect') }}">Verbind met Discord <x-icon name="arrow" /></a></div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6"><a class="navbar-brand footer-brand m-0" href="{{ route('home') }}"><img class="brand-logo" src="{{ asset('wwtransit-logo.png') }}" alt="" width="33" height="28"><span class="brand-name">WW<span>Transit</span></span></a><p class="footer-description">Jouw openbaar vervoer. Samen in beweging.</p></div>
                    <div class="col-md-6"><nav class="footer-links" aria-label="Footernavigatie"><a href="#mogelijkheden">Mogelijkheden</a><a href="#over">Over WWTransit</a><a href="https://transitous.org/sources/" target="_blank" rel="noopener noreferrer">Transitous-bronnen ↗</a></nav></div>
                </div>
                <div class="footer-bottom"><span>&copy; {{ date('Y') }} WWTransit</span><span>In ontwikkeling · Voorbeelden bevatten geen actuele OV-data</span></div>
            </div>
        </footer>

        <div class="modal fade" id="journey-example" tabindex="-1" aria-labelledby="journey-example-title" aria-describedby="journey-example-description" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header"><h2 class="modal-title" id="journey-example-title">Zo krijgt jouw reis straks overzicht</h2><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Venster sluiten"></button></div>
                    <div class="modal-body">
                        <span class="preview-badge">Voorbeeld · geen actueel reisadvies</span>
                        <div class="example-route"><x-icon name="route" /><span>Amsterdam Centraal <span aria-hidden="true">→</span> Utrecht Centraal</span></div>
                        <p id="journey-example-description" class="section-intro">Hier komen straks je reisopties, overstappen en actuele wijzigingen samen. De verbinding met de reisplanner bouwen we in een volgende stap.</p>
                        <div class="example-detail"><x-icon name="train" /><div><strong class="d-block">Van station naar station</strong>Met vertrek- en aankomsttijd, perroninformatie en de haltes van je rit.</div></div>
                    </div>
                    <div class="modal-footer"><button type="button" class="btn btn-brand" data-bs-dismiss="modal">Verder ontdekken <x-icon name="arrow" /></button></div>
                </div>
            </div>
        </div>
    </body>
</html>
