$(document).ready(function() {

  $(window).on('load resize', function() {
    if ($(this).outerWidth() < 992) {
      //768
      $('body')
        .removeClass('sidebar-collapsed')
        .addClass('drawer-sidebar');
    } else {
      $('body').removeClass('drawer-sidebar');
    }
  });

    $('.js-sidebar-toggler').click(function(e) {
      e.preventDefault();
      e.stopPropagation();
      if ($('body').hasClass('drawer-sidebar')) {
        $('#sidebar').backdrop();
      } else {
        $('body').toggleClass('sidebar-collapsed');
      }
    });

    $('select.md-select').formSelect();

  var pathname = window.location.pathname;
  
  if(pathname === "/womenintech/user_view_profile"){
    $('.usrviewprofile').addClass('activateClr');
  }
  if(pathname === "/womenintech/user_dashboard"){
    $('.usrdash').addClass('activateClr');
  }
  if(pathname === "/womenintech/applied_jobs"){
    $('.usrappliedjob').addClass('activateClr');
  }
  if(pathname === "/womenintech/user_edit_profile"){
    $('.usreditprofile').addClass('activateClr');
  }
  if(pathname === "/womenintech/uploadResume"){
    $('.usreditprofile').addClass('activateClr');
  }
  if(pathname === "/womenintech/mentors_profile"){
    $('.usrmentor').addClass('activateClr');
  }
  if(pathname === "/womenintech/mentors_detailed_profile"){
    $('.usrmentor').addClass('activateClr');
  }
  if(pathname === "/womenintech/mentee_list"){
    $('.mentee').addClass('activateClr');
  }
  if(pathname === "/womenintech/mentor_dashboard"){
    $('.mendash').addClass('activateClr');
  }if(pathname === "/womenintech/messages"){
    $('.messages').addClass('activateClr');
  }
  
  
  pathname = pathname.split("/");
  if(pathname[2] === "job_details"){
    $('.usrappliedjob').addClass('activateClr');
  }
 
  $('.logOutBtn').on('click', function() {
    var baseUrl = $('.baseUrl').attr('baseUrl');

    $.ajax({
      url: 'index.php?login',
      dataType: 'json',
      type: 'post',
      data: {
        logOut: true
      },
      success: function(response) {
        window.location = baseUrl;
      }
    });
  });

  $('#customFile').on('change', function() {
    //get the file name
    // var fileName = $(this).val();
    // var fileName = $(this).val();
    var fileName = $(this)
      .val()
      .replace('C:\\fakepath\\', ' ');
    //replace the "Choose a file" label
    $(this)
      .next('.custom-file-label')
      .html(fileName);
  });

});
