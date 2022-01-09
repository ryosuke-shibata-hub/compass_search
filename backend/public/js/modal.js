$(function () {
  $('.open-btn').click(function () {
    $('#overlay, .modal_window').fadeIn();
    $('html').css('overflow-y','hidden');
  });
  $('.close_button').click(function () {
    $('#overlay, .modal_window').fadeOut();
    $('html').css('overflow-y','scroll');
  });
});
