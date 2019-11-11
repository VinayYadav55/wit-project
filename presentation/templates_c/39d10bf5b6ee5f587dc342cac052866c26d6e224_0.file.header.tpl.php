<?php
/* Smarty version 3.1.33, created on 2019-07-22 14:10:00
  from 'C:\xampp\htdocs\rbs\presentation\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d35c3b8742f40_79331884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39d10bf5b6ee5f587dc342cac052866c26d6e224' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rbs\\presentation\\templates\\header.tpl',
      1 => 1563804536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d35c3b8742f40_79331884 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Muli&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="styles/home.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"
    />

    <link rel="stylesheet" href="libs/font-awesome/css/all.min.css" />
    <!-- <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/29bef62cc9.js"><?php echo '</script'; ?>
> -->
  </head>
  <body>
    <div class="container-fluid topheader">
      <header class="">
        <div class="container-fluid">
          <div class="row upperstrip">
            <div class="col-sm-5 py-2">
              <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-5 m-0 p-0 text-center ">
                  <div class="input-group littlesearch loginSection">
                    <i class="fas fa-search searchIcon py-2"></i>
                    <input
                      type="text"
                      class="form-control radiusZero loginSection text-center "
                      placeholder="Search"
                    />
                  </div>
                </div>
                <div class="col-sm-6 "></div>
              </div>
            </div>
            <div class="col-sm-3 py-2 "></div>
            <div class="col-sm-2 py-2  text-center ">
              <a href="?login=true" class="loginSection mt-3">LOGIN</a>
            </div>
            <div class="col-12 col-sm-2  text-center ">
              <a href="https://www.facebook.com/Women-in-Tech-WIT-India-738646329806688/" class="socialLogo" target="_blank"
                ><i class="fab fa-facebook-square socialLogo"></i
              ></a>
              &nbsp;
              <a href="" class="socialLogo" target="_blank"
                ><i class="fab fa-instagram socialLogo"></i></a
              >&nbsp;
              <a href="" class="socialLogo" target="_blank"
                ><i class="fab fa-linkedin socialLogo"></i
              ></a>
            </div>
          </div>
          <div class="row no-gutters">
            <div class="col-sm-12 text-center my-2">
              <a href="/rbs">
                <img src="images/witlogo-logo.png" width="250" height="150" alt=""
              /></a>
            </div>
          </div>
        </div>
      </header>
      <div class="container-fluid navContainer">
        <nav
          class="navbar navbar-expand-lg navbar-light bg-light container-fluid "
        >
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse justify-content-center"
            id="navbarNavAltMarkup"
          >
            <div class="navbar-nav ">
              <div class="dropdown">
                <a
                  href="?about=true"
                  class="dropbtn nav-item nav-link w-15  mr-md-5 ml-lg-0"
                  >ABOUT
                </a>
                <div class="dropdown-content">
                  <a href="?who_we_are=true">WHO WE ARE</a>
                  <a href="?what_we_do=true">WHAT WE DO</a>
                  <a href="?board_of_directors=true">BOARD OF DIRECTORS</a>
                </div>
              </div>
              <div class="dropdown">
                <a
                  class="dropbtn nav-item nav-link w-15  mr-md-5 ml-lg-0"
                  href="?wit_work_stream=true"
                  >WiT WORKSTREAMS</a
                >
                <div class="dropdown-content">
                  <a href="?school_colleges=true">SCHOOLS & COLLEGES</a>
                  <a href="?scholarship=true">SCHOLARSHIPS</a>
                  <a href="?mentoring=true">MENTORING</a>
                  <a href="?secondcareers=true">SECOND CAREERS</a>
                </div>
              </div>
              <div class="dropdown">
                <a
                  class="nav-item nav-link w-15 mr-md-5 ml-lg-0"
                  href="?events_and_rewards=true"
                  >EVENTS & AWARDS</a
                >
                <div class="dropdown-content">
                  <a href="?upcomingEvents=true">UPCOMING EVENTS</a>
                  <a href="?past_events_awards=true">PAST EVENTS&AWARDS</a>
                </div>
              </div>
              <div class="dropdown">
                <a
                  class="nav-item nav-link  w-15 mr-md-5 ml-lg-0"
                  href="?news_and_insites=true"
                  >NEWS & INSIGHT</a
                >
                <div class="dropdown-content">
                  <a href="?witInMedia=true">WiT IN MEDIA</a>
                  <a href="?blogs=true">BLOGS</a>
                  <a href="?viewsFromTheWorld=true">VIEWS FROM THE WORLD</a>
                  <a href="?witSponsors=true">WiT SPONSORS</a>
                  <a href="?did_you_know=true">DID YOU KNOW</a>
                </div>
              </div>
              <a
                class="nav-item nav-link  w-15 mr-md-5 ml-lg-0"
                href="?members=true"
                >MEMBERS</a
              >
              <a
                class="nav-item nav-link  w-45 mr-md-5 ml-lg-0"
                href="?contactUs=true"
                >CONTACT</a
              >
            </div>
          </div>
        </nav>
      </div>
    </div>
    <?php echo '<script'; ?>

      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>

      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>

      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>

      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
    ><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
