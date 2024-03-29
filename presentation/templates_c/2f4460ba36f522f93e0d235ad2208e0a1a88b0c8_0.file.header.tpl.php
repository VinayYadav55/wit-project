<?php
/* Smarty version 3.1.33, created on 2019-08-29 11:32:33
  from 'C:\xampp\htdocs\vipananwebtest\presentation\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d679bb1b65709_35289887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f4460ba36f522f93e0d235ad2208e0a1a88b0c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vipananwebtest\\presentation\\templates\\header.tpl',
      1 => 1567071150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d679bb1b65709_35289887 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('userSessionDetail', $_SESSION['userDetails']);?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/libs/jquery/jquery.min.js"><?php echo '</script'; ?>
>
  <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/home.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />

  <link rel="stylesheet" href="<?php echo base_url();?>
/libs/font-awesome/css/all.min.css" />
  <link type="text/css" href="<?php echo base_url();?>
/styles/home.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard_home.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard_two_home.css" rel="stylesheet" />
</head>

<body>
  <input type="hidden" baseUrl=<?php echo base_url();?>
 class="baseUrl">
  <div class="container-fluid p-0" style="position: sticky;top:0;z-index: 1000; background-color: #1e3262;">
    <div class="row no-gutters">
      <div class="col-sm-5 py-2">
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-5 m-0 p-0 text-center ">
            <div class="input-group littlesearch loginSection">
              <i class="fas fa-search searchIcon py-2"></i>
              <input type="text" class="form-control radiusZero loginSection text-center " placeholder="Search" />
            </div>
          </div>
          <div class="col-sm-6 "></div>
        </div>
      </div>

      <div class="col-sm-5 py-2  text-right ">
        <?php if ($_smarty_tpl->tpl_vars['userSessionDetail']->value['id']) {?>
        <a href="<?php echo base_url();?>
/user_dashboard" class="loginSection mt-3">Dashboard</a> &nbsp; &nbsp;&nbsp;
        <a href="<?php echo base_url();?>
" class="logOutBtn mt-3">Logout</a>
        <?php } else { ?>
        <a href="<?php echo base_url();?>
/login#loginSignupSection" class="loginSection mt-3">LOGIN</a>
        <?php }?>
        &nbsp;&nbsp;
        <a href="<?php echo base_url();?>
/contactUs" class=" mt-3 text-white">ContactUs</a>
      </div>
      <div class="col-12 col-sm-1 pt-2 text-right">
        <a href="https://www.facebook.com/Women-in-Tech-WIT-India-738646329806688/" class="socialLogo"
          target="_blank"><i class="fab fa-facebook-square socialLogo"></i></a>
        &nbsp;
        <a href="" class="socialLogo" target="_blank"><i class="fab fa-instagram socialLogo"></i></a>&nbsp;
        <a href="" class="socialLogo" target="_blank"><i class="fab fa-linkedin socialLogo"></i></a>
      </div>

    </div>
  </div>
  <div class="container-fluid">
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
            <div class="col-sm-7" style="transform: skew(35deg);">
              <div class="row" style="height: 100%;">
                <div class="col-sm-12 bg-light">
                  <nav class="navbar navbar-expand-lg navbar-light mt-3 navContainer">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                      data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                      aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                      <div class="navbar-nav ">
                        <div class="dropdown" style="    transform: skew(-35deg);">
                          <a href="<?php echo base_url();?>
/about" class="dropbtn nav-item nav-link mr-5">ABOUT
                          </a>
                          <div class="dropdown-content">
                            <a href="<?php echo base_url();?>
/who_we_are">WHO WE ARE</a>
                            <a href="<?php echo base_url();?>
/what_we_do">WHAT WE DO</a>
                            <a href="<?php echo base_url();?>
/board_of_directors">FOUNDER MEMBERS</a>
                          </div>
                        </div>
                        <div class="dropdown" style="z-index:100;    transform: skew(-35deg);">
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
                        <div class="dropdown" style=" transform: skew(-35deg);">
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
                        <div class="dropdown " style=" transform: skew(-35deg);">
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
/job_portal" class="btn witBtn mt-4">Search Job</a></div>
                <div class="col-sm-5"> <a href="" class="btn witBtn mt-4">Join Volunteer</a></div>
                <div class="col-sm-1"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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
