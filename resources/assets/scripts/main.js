// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());


window.WebFontConfig = {
      google: { 
        families: [ 'Barlow:400,700:latin','Barlow+Condensed:400,700:latin','Playfair+Display:400:latin' ],
      },
};
(function() {
      var wf = document.createElement('script');
      wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
})();

(function($) {
  $('.wpcf7-radio').each(function(){
    $(this).find('.wpcf7-list-item').each(function(){
      $(this).addClass('custom-control custom-radio').find('input').each(function(){
        $(this).addClass('custom-control-input');
      });
    }).find('.wpcf7-list-item-label').each(function(){
      $(this).addClass('custom-control-label')
    });
  });
  $('.wpcf7-list-item').click(function(){
    $(this).find('input').prop('checked', true);
  });
})(jQuery);

(function($) {
  document.addEventListener( 'wpcf7mailsent', function() {
    $([document.documentElement, document.body]).animate({
      scrollTop: $('div.registration').offset().top,
    }, 500);
    $('form.wpcf7-form').hide(500);
    $('p.success-msg').show(500);
  }, false );
})(jQuery);

(function($) {
  $('#button__register--header').click(function(){
    $([document.documentElement, document.body]).animate({
      scrollTop: $('div.registration').offset().top,
    }, 1000);
  });
})(jQuery);

(function($) {
  $('.navbar-toggler').click(function(){
    $('html, body').animate({ 
      scrollTop: 0,
    }, 100);
    $('header.menu').fadeIn(350); 
    $('body').addClass('no-scroll');
  });

  $('.menu-toggler').click(function(){
    $('header.menu').fadeOut(350);
    $('body').removeClass('no-scroll');
  });
})(jQuery);