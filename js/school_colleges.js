$(document).ready(function() {
  $('.gallery-img').on('mouseover', function() {
    if ($(this).find('.overlay-content')) {
      $(this)
        .children()
        .show();
      $(this)
        .find('.overLayText')
        .show();
      $(this)
        .find('.program')
        .hide();
    }
  });

  $('.gallery-img').on('mouseout', function() {
    if ($(this).find('.overlay-content')) {
      $(this)
        .find('.OverlayBorder')
        .hide();
      $(this)
        .find('.overlay-content')
        .hide();
      $(this)
        .find('.overLayText')
        .hide();
      $(this)
        .find('.program')
        .show();
    }
  });

  $('.feedbackButton').on('click', function() {
    $('.feedbackForm').show();
    $('.bodyOverlay').show();
  });
  $('.bodyOverlay').on('click', function() {
    $('.feedbackForm').hide();
    $('.bodyOverlay').hide();
  });
});
