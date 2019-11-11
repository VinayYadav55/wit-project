<?php
/* Smarty version 3.1.33, created on 2019-07-01 10:39:24
  from 'C:\xampp\htdocs\rbswit\presentation\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d19e2dcb96400_79395004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c27f893271d84afc59586168d588b0c8aec7a4e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rbswit\\presentation\\templates\\header.tpl',
      1 => 1561977055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d19e2dcb96400_79395004 (Smarty_Internal_Template $_smarty_tpl) {
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
      <header class="my-2">
        <div class="container">
          <!--Social handles-->
          <!-- <div class="row">
            <div id="social-icons">
              <a href="#"><img src="images/fblogo.png"/></a>
              <a href="#"><img src="images/instagram.png"/></a>
              <a href="#"><img src="images/linkedin.png"/></a>
            </div>
          </div> -->

          <div class="row ">
            <div class="col-12 p-0 m-0">
              <a href="" class="float-right m-1"
                ><img src="images/fblogo.png" width="30" height="30" alt=""
              /></a>
              <a href="" class="float-right m-1"
                ><img src="images/instagram.png" width="30" height="30" alt=""
              /></a>
              <a href="" class="float-right m-1"
                ><img src="images/linkedin.png" width="30" height="30" alt=""
              /></a>
            </div>
          </div>
          <!-- <div class="row">
            <div class="col-md-6">
              <div class="col-md-6">
                <div class="logoImage">
                  <a href="/rbswit">
                    <img
                      src="images/witlogo3.png"
                      height="150"
                      width="250"
                      alt="womenintech"
                    />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="display-table">
                <div class="table-cell">
                  <div class="button-section ">
                    <a href="?login=true" class="button "
                      >Member Login <i class="fas fa-lock ml-2"></i
                    ></a>
                    <input
                      type="text"
                      name="searchoursite"
                      placeholder="Search our site"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <div class="row no-gutters">
            <div class="col-sm-6 p-0 m-0">
              <div class="my-2">
                <a href="/rbswit">
                  <img src="images/witlogo3.png" width="250" height="150" alt=""
                /></a>
              </div>
            </div>
            <div class="col-sm-6 pt-5">
              <div class="row p-5 ">
                <div class="col-12 col-sm-6 pr-2  ">
                  <a
                    href="?login=true"
                    class="colorBtn1 pl-4 pr-4 py-2 float-right "
                  >
                    MEMBER LOGIN &nbsp; <i class="fas fa-lock"></i
                  ></a>
                </div>
                <div class=" col-12 col-sm-6 p-0 ">
                  <div class="input-group littlesearch float-left radiusZero">
                    <input
                      type="text"
                      class="form-control radiusZero"
                      placeholder="Search"
                    />
                    <!-- <div class="input-group-append">
                      <button class="btn colorBtn1" type="submit">
                        <i class="fas fa-search"></i>
                      </button>
                    </div> -->
                  </div>
                </div>
              </div>
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
                  >WIT WORKSTREAMS</a
                >
                <div class="dropdown-content">
                  <a href="?school_colleges=true">SCHOOLS & COLLAGES</a>
                  <a href="?scholarship=true">SCHOLARSHIPS</a>
                  <a href="?mentoring=true">MENTORING</a>
                  <a href="?secondcareers=true">SECOND CAREERS</a>
                </div>
              </div>
              <div class="dropdown">
                <a
                  class="nav-item nav-link w-15 mr-md-5 ml-lg-0"
                  href="?events_and_rewards=true"
                  >EVENTS & REWARDS</a
                >
                <div class="dropdown-content">
                  <a href="?upcomingEvents=true">UPCOMING EVENTS</a>
                  <a href="?events_awards_sponsorship=true"
                    >EVENTS&AWARDS SPONSORSHIP OPPURTUNITY</a
                  >
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
                  <a href="?witInMedia=true">WIT IN MEDIA</a>
                  <a href="?blogs=true">BLOGS</a>
                  <a href="?viewsFromTheWorld=true">VIEWS FROM THE WORLD</a>
                  <a href="?witSponsors=true">WIT SPONSORS</a>
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
