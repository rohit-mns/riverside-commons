(function (Drupal, once) {
  Drupal.behaviors.riversideNavigation = {
    attach(context) {
      once('mobile-nav', '.menu-toggle', context).forEach((button) => {
        const nav = document.querySelector('.site-nav');

        button.addEventListener('click', () => {
          const expanded = button.getAttribute('aria-expanded') === 'true';

          button.setAttribute('aria-expanded', !expanded);
          nav.classList.toggle('is-open');
        });

        document.addEventListener('keydown', (event) => {
          if (event.key === 'Escape') {
            nav.classList.remove('is-open');
            button.setAttribute('aria-expanded', 'false');
            button.focus();
          }
        });
      });
    },
  };
})(Drupal, once);