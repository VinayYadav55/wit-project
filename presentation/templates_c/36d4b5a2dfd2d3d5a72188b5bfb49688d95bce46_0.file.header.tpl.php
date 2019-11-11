<?php
/* Smarty version 3.1.33, created on 2019-11-11 07:31:37
  from 'C:\xampp\htdocs\womenintech\presentation\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc90049d3d528_88727929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36d4b5a2dfd2d3d5a72188b5bfb49688d95bce46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\womenintech\\presentation\\templates\\header.tpl',
      1 => 1573453886,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc90049d3d528_88727929 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('userSessionDetail', $_SESSION['userDetails']);?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="<?php echo base_url();?>
/images/wit-favicon.ico" type="image/x-icon" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css"
    integrity="sha256-zmfNZmXoNWBMemUOo1XUGFfc0ihGGLYdgtJS3KCr/l0=" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/home.css?v=<?php echo jsversion();?>
" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/slick.css?v=<?php echo jsversion();?>
" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/slick-theme.css?v=<?php echo jsversion();?>
" />
  <link type="text/css" href="<?php echo base_url();?>
/styles/home.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard_home.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard_two_home.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
</head>

<body>
  <input type="hidden" baseUrl=<?php echo base_url();?>
 class="baseUrl">
  <div class="container-fluid p-0 headerVisibleFirst"
    style="position: fixed; top:0;z-index: 1000; background-color: #1e3262;">
    <div class="row no-gutters">
      <div class="col-sm-3 m-0  py-2  text-center searchBarMobile">
        <div class="input-group littlesearch loginSection" style="position: relative;margin: auto; ">
          <input type="search" class="form-control radiusZero loginSection text-center " placeholder="Search..."
            style="position: relative;" />
          <span class="bg-white text-dark px-4" style="border-top-right-radius: 10rem !important;
          border-bottom-right-radius: 10rem !important;"><i class="fas fa-search searchIcon py-2"></i></span>
        </div>
      </div>
      <div class="col-sm-4 ">
      </div>
      <div class="col-sm-3 py-2 text-center">
        <a href="<?php echo base_url();?>
/contactUs" class="loginSection mt-3 mr-5 pl-5 pl-sm-0 mr-sm-0 text-white">Contact
          Us</a>&nbsp;&nbsp;
        <?php if ($_smarty_tpl->tpl_vars['userSessionDetail']->value['id']) {?>
        <a href="<?php echo base_url();?>
/user_dashboard" class="loginSection mt-3">Dashboard</a> &nbsp; &nbsp;
        <a href="<?php echo base_url();?>
" class="loginSection logOutBtn mt-3">Logout</a>
        <?php } else { ?>
        <span class="dropdownMeHit px-3 py-3">
          <a class="loginSection" href="#">
            Login
          </a>
          <div class="dropdownMenuMenu">
            <div class="nav_flyout"></div>
            <a href="<?php echo base_url();?>
/login" class="dropdown-item loginStyle text-white">Login</a>
            <div class="dropdown-divider"></div>
            <a href="<?php echo base_url();?>
/employer" class="dropdown-item loginStyle text-white">Employer
              Login</a>
          </div>
        </span>
        <?php }?>
      </div>
      <div class="col-sm-2 pt-2 text-center d-none d-sm-block">
        <a href="https://www.facebook.com/womenintechindiaofficial/" class="socialLogo" target="_blank"><i
            class="fab fa-facebook-square socialLogo"></i></a>
        &nbsp;
        <a href="https://www.instagram.com/womenintechindia/" class="socialLogo" target="_blank"><i
            class="fab fa-instagram socialLogo"></i></a>&nbsp;
        <a href="https://www.linkedin.com/company/womenintech-india/people/?viewAsMember=true" class="socialLogo"
          target="_blank"><i class="fab fa-linkedin socialLogo"></i></a>&nbsp;&nbsp;<a
          href="https://twitter.com/WomenInTech_IN" class="socialLogo" target="_blank"><i
            class="fab fa-twitter"></i></a>
      </div>
    </div>
  </div>
  <div class="container-fluid headerVisiblesecond">
    <div class="row">
      <div class="col-sm-12 p-0 bg-white" style="position: fixed !important;top:40px !important; z-index: 100;">
        <div class="container-fluid p-0">
          <div class="row no-gutters">
            <div class="col-sm-2 bg-white">
              <a href="<?php echo base_url();?>
" class="mx-4">
                <img src="<?php echo base_url();?>
/images/witlogo-logo.png" class="mx-4 my-2" width="100" height="60" alt="" /></a>
            </div>
            <div class="col-sm-7" style="transform: skew(35deg); -webkit-transform: skew(35deg);">
              <div class="row" style="height: 100%;">
                <div class="col-sm-12" style="background-color: #eaf3f8 !important;">
                  <nav class="navbar navbar-expand-lg navbar-light mt-3 navContainer">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                      data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                      aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                      <div class="navbar-nav ">
                        <div class="dropdown" style="    transform: skew(-35deg); -webkit-transform: skew(-35deg);">
                          <a href="<?php echo base_url();?>
/about" class="dropbtn nav-item nav-link mr-5">ABOUT
                          </a>
                          <div class="dropdown-content">
                            <a href="<?php echo base_url();?>
/who_we_are">WHO WE ARE</a>
                            <a href="<?php echo base_url();?>
/what_we_do">WHAT WE DO</a>
                            <a href="<?php echo base_url();?>
/our_members">MEMBERS</a>
                          </div>
                        </div>
                        <div class="dropdown"
                          style="z-index:100;    transform: skew(-35deg); -webkit-transform: skew(-35deg);">
                          <a class="dropbtn nav-item nav-link mr-5" href="<?php echo base_url();?>
/wit_work_stream">WiT
                            WORKSTREAMS</a>
                          <div class="dropdown-content">
                            <a href="<?php echo base_url();?>
/school_colleges">SCHOOLS & COLLEGES</a>
                            <a href="<?php echo base_url();?>
/scholarship">SCHOLARSHIPS</a>
                            <a href="<?php echo base_url();?>
/mentoring">MENTORING</a>
                            <a href="<?php echo base_url();?>
/secondcareers">SECOND CAREERS</a>
                          </div>
                        </div>
                        <div class="dropdown" style=" transform: skew(-35deg); -webkit-transform: skew(-35deg);">
                          <a class="nav-item nav-link mr-5" href="<?php echo base_url();?>
/events_and_rewards">EVENTS
                            &
                            AWARDS</a>
                          <div class="dropdown-content">
                            <a href="<?php echo base_url();?>
/upcomingEvents">UPCOMING EVENTS</a>
                            <a href="<?php echo base_url();?>
/past_events_awards">PAST EVENTS & AWARDS</a>
                          </div>
                        </div>
                        <div class="dropdown " style=" transform: skew(-35deg); -webkit-transform: skew(-35deg);">
                          <a class="nav-item nav-link mr-5" href="<?php echo base_url();?>
/news_and_insites">NEWS &
                            INSIGHT</a>
                          <div class="dropdown-content">
                            <a href="<?php echo base_url();?>
/witInMedia">WiT IN MEDIA</a>
                            <a href="<?php echo base_url();?>
/blogs">BLOGS</a>
                            <a href="<?php echo base_url();?>
/viewsFromTheWorld">VIEWS FROM THE WORLD</a>
                            <a href="<?php echo base_url();?>
/witSponsors">WiT SPONSORS</a>
                            <a href="<?php echo base_url();?>
/did_you_know">DID YOU KNOW</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="row no-gutters">
                <div class="col-sm-2"></div>
                <div class="col-sm-4"> <a href="<?php echo base_url();?>
/job_portal"
                    class="btn witBtn mt-4 joinWiT homeBtnStyle">Search Jobs</a></div>
                <div class="col-sm-5"> <a href="<?php echo base_url();?>
/login" class="btn witBtn mt-4 joinWiT homeBtnStyle">Join
                    WiT</a></div>
                <div class="col-sm-1"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="container-fluid headerVisibleThird bg-white"
    style="position: fixed !important;top:2.7rem !important; z-index: 100;">
    <div class="row">
      <div class="col-4 py-1">
        <a href="<?php echo base_url();?>
"><img src="<?php echo base_url();?>
/images/witlogo-logo.png" width="100" height="60" alt=""></a>
      </div>
      <div class="col-8 py-1">
        <span class="mt-3" style="padding: 0px 0px 0px 190px;"><i class="fas fa-bars mt-3 menuTab"
            style="color:#E94161; font-size:25px;"></i></span>
        <div class="container-fluid menuTabContent"
          style="position: fixed;top:5.3rem;bottom:0;height:100%;display: none;width: 70%;max-width: 70%;background-image: linear-gradient(45deg, #020272, #E94161);">
          <div class="row">
            <div class="col-sm-12 py-5">

              <div class="col-12">
                <span class="mt-3 text-right"><i class="far fa-window-close mt-3 menuTabSecond"
                    style="color:black; font-size:25px;"></i></span>
              </div>

              <div class="text-white mt-4">
                <div class="row">
                  <div class="col-8"><a href="<?php echo base_url();?>
/about" class="text-white menubarOptions"> ABOUT</a></div>
                  <div class="col-2"><i class="far fa-plus-square aboutMain p-1 plusBtnMobileMenu"
                      style="color: aqua;"></i>
                  </div>
                </div>
                <div class="aboutContainer">
                  <div class="py-1"><a href="<?php echo base_url();?>
/who_we_are" class="text-white fontStyle menubarOptions">WHAT
                      WE DO</a></div>
                  <div class="py-1"><a href="<?php echo base_url();?>
/what_we_do" class="text-white fontStyle menubarOptions">WHO WE
                      ARE</a></div>
                  <div class="py-1"><a href="<?php echo base_url();?>
/board_of_directors"
                      class="text-white fontStyle menubarOptions">MEMBERS
                    </a></div>
                </div>
              </div>
              <div class="text-white mt-4">
                <div class="row">
                  <div class="col-8"><a href="<?php echo base_url();?>
/wit_work_stream" class="text-white menubarOptions">WiT WORK
                      STREAM</a></div>
                  <div class="col-2">
                    <i class="far fa-plus-square streamMain p-1 plusBtnMobileMenu" style="color: aqua;"></i>
                  </div>
                </div>
                <div class="workStreamContainer">
                  <div class="py-1"><a href="<?php echo base_url();?>
/school_colleges"
                      class="text-white fontStyle menubarOptions">SCHOOLS &
                      COLLEGES</a></div>
                  <div class="py-1"><a href="<?php echo base_url();?>
/scholarship"
                      class="text-white fontStyle menubarOptions">SCHOLARSHIPS</a>
                  </div>
                  <div class="py-1"><a href="<?php echo base_url();?>
/mentoring"
                      class="text-white fontStyle menubarOptions">MENTORING</a></div>
                  <div class="py-1"><a href="<?php echo base_url();?>
/secondcareers"
                      class="text-white fontStyle menubarOptions">SECOND CAREERS</a>
                  </div>
                </div>
              </div>
              <div class="text-white mt-4">
                <div class="row">
                  <div class="col-8"><a href="<?php echo base_url();?>
/events_and_rewards" class="text-white menubarOptions">EVENTS
                      & AWARDS</a>
                  </div>
                  <div class="col-2">
                    <i class="far fa-plus-square eventsandawards p-1 plusBtnMobileMenu" style="color: aqua;"></i>
                  </div>
                </div>
                <div class="eventsandawardsContent">
                  <div class="py-1"><a href="<?php echo base_url();?>
/upcomingEvents"
                      class="text-white fontStyle menubarOptions">UPCOMING
                      EVENTS</a></div>
                  <div class="py-1"><a href="<?php echo base_url();?>
/past_events_awards"
                      class="text-white fontStyle menubarOptions">PAST EVENTS &
                      AWARDS</a></div>
                </div>
              </div>
              <div class="text-white mt-4">
                <div class="row">
                  <div class="col-8"><a href="<?php echo base_url();?>
/news_and_insites" class="text-white menubarOptions">NEWS &
                      INSITES</a></div>
                  <div class="col-2">
                    <i class="far fa-plus-square newandinsites p-1 plusBtnMobileMenu" style="color: aqua;"></i>
                  </div>
                </div>
                <div class="newandinsitesContent">
                  <div class="py-1"><a href="<?php echo base_url();?>
/witInMedia" class="text-white fontStyle menubarOptions">WiT IN
                      MEDIA</a>
                  </div>
                  <div class="py-1"><a href="<?php echo base_url();?>
/blogs" class="text-white fontStyle menubarOptions">BLOGS</a>
                  </div>
                  <div class="py-1"><a href="<?php echo base_url();?>
/viewsFromTheWorld"
                      class="text-white fontStyle menubarOptions">VIEWS FROM THE
                      WORLD</a></div>
                  <div class="py-1"><a href="<?php echo base_url();?>
/witSponsors" class="text-white fontStyle menubarOptions">WiT
                      SPONSORS</a>
                  </div>
                  <div class="py-1"><a href="<?php echo base_url();?>
/did_you_know" class="text-white fontStyle menubarOptions">DID
                      YOU KNOW</a>
                  </div>
                </div>
              </div>
              <div class="text-white mt-4">
                <div class="row">
                  <div class="col-12 pb-4"><a href="<?php echo base_url();?>
/job_portal" class="text-white menubarOptions">SEARCH
                      JOB</a></div>
                  <div class="col-12"><a href="<?php echo base_url();?>
" class="text-white menubarOptions">JOIN WiT</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <div class="container-fluid headerVisibleThird bg-white"
    style="position: fixed !important;top:2.7rem !important; z-index: 100;">
    <div class="row">
      <div class="col-4 py-1">
        <a href="<?php echo base_url();?>
"> <img src="<?php echo base_url();?>
/images/witlogo-logo.png" width="80" height="50" alt=""></a>
      </div>
      <div class="col-8 py-1">
        <span class="middleSearchJobsBtn"><a href="<?php echo base_url();?>
/job_portal" class="searchjobTopTab">Search Jobs</a></span>
        <span class="opnerForMenu"><i class="fas fa-bars mt-3 menuTab"
            style="color:#E94161; font-size:25px;"></i></span>
        <div class="container-fluid menuTabContent"
          style="position: fixed;top:2.7rem;bottom:0;height:100%;display: none;width: 70%;max-width: 70%;background-image: linear-gradient(45deg, #020272, #E94161);">
          <div class="row">
            <div class="col-sm-12 py-5">
              <div class="col-12">
                <span class="mt-3 text-right"><i class="far fa-window-close mt-3 menuTabSecond"
                    style="color:black; font-size:25px;"></i></span>
              </div>
              <div class="text-white mt-4">
                <div class="row">
                  <div class="col-8"><a href="<?php echo base_url();?>
/about" class="text-white menubarOptions"> ABOUT</a>
                  </div>
                  <div class="col-2"><i class="far fa-plus-square aboutMain p-1 plusBtnMobileMenu"
                      style="color: aqua;"></i>
                  </div>
                </div>
                <div class="aboutContainer">
                  <div class="py-1"><a href="<?php echo base_url();?>
/what_we_do" class="text-white fontStyle menubarOptions">WHAT
                      WE DO</a></div>
                  <div class="py-1"><a href="<?php echo base_url();?>
/who_we_are" class="text-white fontStyle menubarOptions">WHO
                      WE
                      ARE</a></div>
                  <div class="py-1"><a href="<?php echo base_url();?>
/our_members"
                      class="text-white fontStyle menubarOptions">MEMBERS
                    </a></div>
                </div>
              </div>
              <div class="text-white mt-4">
                <div class="row">
                  <div class="col-8"><a href="<?php echo base_url();?>
/wit_work_stream" class="text-white menubarOptions">WiT
                      WORK
                      STREAM</a></div>
                  <div class="col-2">
                    <i class="far fa-plus-square streamMain p-1 plusBtnMobileMenu" style="color: aqua;"></i>
                  </div>
                </div>
                <div class="workStreamContainer">
                  <div class="py-1"><a href="<?php echo base_url();?>
/school_colleges"
                      class="text-white fontStyle menubarOptions">SCHOOLS &
                      COLLEGES</a></div>
                  <div class="py-1"><a href="<?php echo base_url();?>
/scholarship"
                      class="text-white fontStyle menubarOptions">SCHOLARSHIPS</a>
                  </div>
                  <div class="py-1"><a href="<?php echo base_url();?>
/mentoring"
                      class="text-white fontStyle menubarOptions">MENTORING</a></div>
                  <div class="py-1"><a href="<?php echo base_url();?>
/secondcareers"
                      class="text-white fontStyle menubarOptions">SECOND CAREERS</a>
                  </div>
                </div>
              </div>
              <div class="text-white mt-4">
                <div class="row">
                  <div class="col-8"><a href="<?php echo base_url();?>
/events_and_rewards" class="text-white menubarOptions">EVENTS
                      & AWARDS</a>
                  </div>
                  <div class="col-2">
                    <i class="far fa-plus-square eventsandawards p-1 plusBtnMobileMenu" style="color: aqua;"></i>
                  </div>
                </div>
                <div class="eventsandawardsContent">
                  <div class="py-1"><a href="<?php echo base_url();?>
/upcomingEvents"
                      class="text-white fontStyle menubarOptions">UPCOMING
                      EVENTS</a></div>
                  <div class="py-1"><a href="<?php echo base_url();?>
/past_events_awards"
                      class="text-white fontStyle menubarOptions">PAST EVENTS &
                      AWARDS</a></div>
                </div>
              </div>
              <div class="text-white mt-4">
                <div class="row">
                  <div class="col-8"><a href="<?php echo base_url();?>
/news_and_insites" class="text-white menubarOptions">NEWS
                      &
                      INSITES</a></div>
                  <div class="col-2">
                    <i class="far fa-plus-square newandinsites p-1 plusBtnMobileMenu" style="color: aqua;"></i>
                  </div>
                </div>
                <div class="newandinsitesContent">
                  <div class="py-1"><a href="<?php echo base_url();?>
/witInMedia" class="text-white fontStyle menubarOptions">WiT
                      IN
                      MEDIA</a>
                  </div>
                  <div class="py-1"><a href="<?php echo base_url();?>
/blogs" class="text-white fontStyle menubarOptions">BLOGS</a>
                  </div>
                  <div class="py-1"><a href="<?php echo base_url();?>
/viewsFromTheWorld"
                      class="text-white fontStyle menubarOptions">VIEWS FROM THE
                      WORLD</a></div>
                  <div class="py-1"><a href="<?php echo base_url();?>
/witSponsors" class="text-white fontStyle menubarOptions">WiT
                      SPONSORS</a>
                  </div>
                  <div class="py-1"><a href="<?php echo base_url();?>
/did_you_know" class="text-white fontStyle menubarOptions">DID
                      YOU KNOW</a>
                  </div>
                </div>
              </div>
              <div class="text-white mt-4">
                <div class="row">
                  <div class="col-12 pb-4"><a href="<?php echo base_url();?>
/job_portal" class="text-white menubarOptions">SEARCH
                      JOB</a></div>
                  <div class="col-12"><a href="<?php echo base_url();?>
/login" class="text-white menubarOptions">JOIN WiT</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    $(document).ready(function () {
      $('.dropdownMeHit').mouseenter(function(){
        $('.dropdownMenuMenu').fadeIn();
      });
      $('.dropdownMeHit').mouseleave(function(){
        $('.dropdownMenuMenu').fadeOut();
      });
      $('.dropdownlogin').click(function () {
        $('.dropdownContent').slideToggle();
      });
      $('.menuTab').click(function () {
        $('.menuTabContent').slideToggle();
        $('.menuTabSecond').show();
      });
      $('.menuTabSecond').click(function () {
        $('.menuTabContent').slideUp();
        $('.menuTabSecond').hide();
      });
      $('.aboutMain').click(function () {
        $('.aboutContainer').slideToggle("slow");
        $('.workStreamContainer').slideUp("slow");
        $('.eventsandawardsContent').slideUp("slow");
        $('.newandinsitesContent').slideUp("slow");
      });
      $('.streamMain').click(function () {
        $('.workStreamContainer').slideToggle("slow");
        $('.aboutContainer').slideUp("slow");
        $('.eventsandawardsContent').slideUp("slow");
        $('.newandinsitesContent').slideUp("slow");
      });
      $('.eventsandawards').click(function () {
        $('.eventsandawardsContent').slideToggle("slow");
        $('.aboutContainer').slideUp("slow");
        $('.workStreamContainer').slideUp("slow");
        $('.newandinsitesContent').slideUp("slow");
      });
      $('.newandinsites').click(function () {
        $('.newandinsitesContent').slideToggle("slow");
        $('.aboutContainer').slideUp("slow");
        $('.eventsandawardsContent').slideUp("slow");
        $('.workStreamContainer').slideUp("slow");
      });
      $('.logOutBtn').on('click', function () {
        var baseUrl = $('.baseUrl').attr('baseUrl');
        $.ajax({
          url: 'index.php?login',
          dataType: 'json',
          type: 'post',
          data: {
            logOut: true
          },
          success: function (response) {
            window.location = baseUrl;
          }
        });
      });
    })

  <?php echo '</script'; ?>
>
</body>

</html><?php }
}
