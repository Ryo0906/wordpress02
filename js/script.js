$(function() {
  'use strict';

  $('#hamburger').on('click', function() {
    $('body').toggleClass('open');
  });

  $('.faq-content h2').on('click', function() {
    $(this).next('p').not(':animated').slideToggle({
      start: function() {
        $(this).css('display', 'flex');
      }
    });
  });

  $('#pagetop').on('click', function() {
    $('html, body').not(':animated').animate({scrollTop: 0}, 600);
  });
});
