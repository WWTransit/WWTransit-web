import Collapse from 'bootstrap/js/dist/collapse';
import 'bootstrap/js/dist/modal';
import 'bootstrap/js/dist/tab';

document.querySelectorAll('#main-navigation .nav-link').forEach((link) => {
    link.addEventListener('click', () => {
        const navigation = document.getElementById('main-navigation');
        const toggle = document.querySelector('.navbar-toggler');

        if (navigation?.classList.contains('show') && toggle?.getClientRects().length) {
            Collapse.getOrCreateInstance(navigation).hide();
        }
    });
});
