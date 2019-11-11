// $(document).ready(function() {
//   $('.newAccount').on('click', function() {
//     $('.loginCard').hide();
//     $('.signUpCard').show();
//   });
//   $('.doLogin').on('click', function() {
//     $('.loginCard').show();
//     $('.signUpCard').hide();
//   });
// });

$(document).ready(function() {
  $('.signupPagePop').click(function() {
    $('.loginPagePop').removeClass('loginBtnActiveStyle');
    $('.signupPagePop').addClass('loginBtnActiveStyle');
    $('.loginPage').slideUp(500);
    $('.signupPage').slideDown(500);
      window.scrollTo(0, 0);
  });
  $('.loginPagePop').click(function() {
    $('.signupPagePop').removeClass('loginBtnActiveStyle');
    $('.loginPagePop').addClass('loginBtnActiveStyle');
    $('.loginPage').slideDown(500);
    $('.signupPage').slideUp(500);
     window.scrollTo(0, 0);
  });
   $('#checkBoxID').click(function() {
    $('#buttonID').attr('disabled', !this.checked);
  });
});
