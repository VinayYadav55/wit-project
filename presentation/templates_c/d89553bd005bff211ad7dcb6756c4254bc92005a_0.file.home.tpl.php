<?php
/* Smarty version 3.1.33, created on 2019-08-31 11:38:04
  from '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d6a5c1c9fc702_09560750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd89553bd005bff211ad7dcb6756c4254bc92005a' => 
    array (
      0 => '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/home.tpl',
      1 => 1567251454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d6a5c1c9fc702_09560750 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('userSessionDetail', $_SESSION['userDetails']);?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href="<?php echo base_url();?>
/images/wit-favicon.ico" type="image/x-icon" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <?php echo '<script'; ?>
 src="libs/jquery/jquery.min.js"><?php echo '</script'; ?>
>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />

  <link rel="stylesheet" href="<?php echo base_url();?>
/libs/font-awesome/css/all.min.css" />
  <link type="text/css" href="<?php echo base_url();?>
/styles/home.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard_home.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard_two_home.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/slick.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/newsinsites.css" />
  <title>Home|WIT</title>
</head>

<body>
  <input type="hidden" baseUrl=<?php echo base_url();?>
 class="baseUrl">
  <div class="container-fluid p-0" style="position: fixed;top:0;z-index: 1000; background-color: #1e3262;">
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
/login#loginSignupSection" class="loginSection mt-3">Login</a>
        <?php }?>
        &nbsp;&nbsp;
        <a href="<?php echo base_url();?>
/contactUs" class="loginSection mt-3 text-white">Contact Us</a>
      </div>
      <div class="col-12 col-sm-1 pt-2 text-right">
        <a href="https://www.facebook.com/Women-in-Tech-WIT-India-738646329806688/" class="socialLogo"
          target="_blank"><i class="fab fa-facebook-square socialLogo"></i></a>
        &nbsp;
        <a href="" class="socialLogo" target="_blank"><i class="fab fa-instagram socialLogo"></i></a>&nbsp;
        <a href="" class="socialLogo" target="_blank"><i class="fab fa-linkedin socialLogo"></i></a>
      </div>
      <!--  <div class="col-sm-1 pt-2 pl-4">
      <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon socialLogo "
          data-target="#sidebar">
          <i class="fas fa-bars" style="color:#E94161; font-size:15px;"></i>
        </a>
        </div>-->

    </div>
  </div>

  <div id="sidebar" class="sidenav sidenav-fixed expand-lg">
    <div class="mt-4 h-100 ">
     <a href="<?php echo base_url();?>
/wit_growth_summit_2019"> <img src="<?php echo base_url();?>
/images/home_event_banner.png" class="img-fluid" alt=""></a>
    </div>
  </div>

  <!-- ******************************************************* -->
  <div class="docs-content-wrapper">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-sm-12 p-0 bg-white" style="position: sticky!important;position: -webkit-sticky!important; top:40px !important; z-index: 100;">
          <div class="container-fluid p-0">
            <div class="row no-gutters">
              <div class="col-sm-2 bg-white">
                <a href="<?php echo base_url();?>
" class="mx-4">
                  <img src="<?php echo base_url();?>
/images/witlogo-logo.png" class="mx-4 my-2" width="100" height="60"
                    alt="" /></a>
              </div>
               <div class="col-sm-7" style="transform: skew(35deg); -webkit-transform: skew(35deg);">
                <div class="row" style="height: 100%;">
                  <div class="col-sm-12" style="background-color:#eaf3f8 !important;">
                    <nav class="navbar navbar-expand-lg navbar-light mt-3 navContainer">
                      <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                          <div class="dropdown" style="transform: skew(-35deg); -webkit-transform: skew(-35deg);">
                            <a href="<?php echo base_url();?>
/about" class="dropbtn nav-item nav-link mr-5">ABOUT
                            </a>
                            <div class="dropdown-content">
                              <a href="<?php echo base_url();?>
/who_we_are">WHO WE ARE</a>
                              <a href="<?php echo base_url();?>
/what_we_do">WHAT WE DO</a>
                              <a href="<?php echo base_url();?>
/board_of_directors">MEMBERS</a>
                            </div>
                          </div>
                          <div class="dropdown" style="z-index:100;transform: skew(-35deg); -webkit-transform: skew(-35deg);">
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
/job_portal" class="btn witBtn mt-4 homeBtnStyle">Search Job</a></div>
                  <div class="col-sm-5"> <a href="<?php echo base_url();?>
/school_colleges" class="btn witBtn mt-4 homeBtnStyle">Join WiT</a></div>
                  <div class="col-sm-1"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 p-0" style="margin-top: 2.5rem !important;">
          <video autoplay muted loop id="myVideo">
            <source src="<?php echo base_url();?>
/images/techvideo_rbswit.mp4" type="video/mp4">
          </video>
          <div class="overlayImg"></div>
          <div class="sliderDiv">
               <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon sociaLogo "
              data-target="#sidebar">
              <i class="fas fa-chevron-right iconsForsidebar rightIconforSidebar"></i>
            </a>
            <!-- <div class="content"> -->
            <p class="text-center heroTxt"> WomenInTech (WiT) is an endeavor which aims to reach out to
              women across age-groups Schools, Colleges, women starting their
              careers, working women, women restarting their careers, stay at
              home moms and others to help them  realize their careers in
              science, technology, engineering and mathematics thereby building a more inclusive ecosystem.<br><br><br>
              <a href="<?php echo base_url();?>
/login" class="btn btn-primary px-4 py-2  joinbtn">JOIN WiT</a></p>
            <!-- </div> -->
          </div>
          <!-- <div class="content">
            <p class="text-center heroTxt"> WomenInTech (WiT) is an endeavor which aims to reach out to
              women across<br>age-groups- Schools, Colleges, women starting their
              careers, working women, women restarting their careers, stay at
              home moms and others- and help realize their careers in
              technology thereby making the Technology ecosystem more
              inclusive.<br><br><br>
              <a href="<?php echo base_url();?>
/login" class="btn btn-primary px-4 py-2  joinbtn">JOIN WiT</a></p>
          </div> -->
        </div>

        <!-- <video width="100%" height="100%" autoplay loop style="z-index: -1;position: relative;">
            <source src="<?php echo base_url();?>
/images/techvideo_rbs.mp4" type="video/mp4">
          </video> -->
        <!-- <video autoplay muted loop id="myVideo" height="100vh">
            <source src="<?php echo base_url();?>
/images/techvideo_rbs.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
          </video>
          <div class="content heroImage"> -->
        <!-- <div class="sliderDiv"> -->
        <!-- <img src="images/final_images/wit_rbs_hero_image_women_in_technology.png" class="img-fluid" alt=""> -->
        <!-- <h1>Heading</h1>
              <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu
                recteque
                expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei. Id qui
                nemore latine molestiae, ad mutat oblique delicatissimi pro.</p>
              <button id="myBtn" onclick="myFunction()">Pause</button> -->
        <!-- </div> -->


        <!-- <div class="sliderDiv"> -->
        <!-- <div class="overlay"></div> -->
        <!-- <video width="100%" height="100%" autoplay loop>
                  <source src="<?php echo base_url();?>
/images/techvideo_rbs.mp4" type="video/mp4">
                </video> -->

        <!-- <p class="text-center" style="position: absolute !important;
                  top: 55% !important;
                  font-size: 1.3rem !important;
                  padding: 10px 150px 10px 150px !important;
                  color: white !important;
                  word-spacing: 7px !important;
                  font-family: inherit !important;
                  font-weight: 100 !important;
                  background-color: rgba(0, 0, 0, 0.19);
                            
              "> WomenInTech (WiT) is an endeavor which aims to reach out to
                  women across age-groups- Schools, Colleges, women starting their
                  careers, working women, women restarting their careers, stay at
                  home moms and others- and help realize their careers in
                  technology thereby making the Technology ecosystem more
                  inclusive.</p>
                <a href="<?php echo base_url();?>
/login" class="btn btn-primary px-4 py-2  joinbtn">JOIN THE COMMUNITY</a> -->

        <!-- </div> -->
        <div class="col-sm-12 p-0 bg-white pt-5">
          <div class="container-fluid py-5 mt-5">
            <div class="row ">
              <div class="col-sm-12  text-center">
                <div class="row no-gutters">
                  <div class="col-lg-3 col-md-6 col-sm-6  text-center mx-auto px-auto wow bounceInUp text-center "
                    style="text-align: center !important;">
                    <div class="card text-center newsForDiv" style="width: 18rem; text-align: center; margin-left: 0.5rem;
                             max-width: 100%; height: auto;">
                      <div>
                        <img class="card-img-top h-100 d-block"
                          src="images/final_images/original_schools_colleges_rbs_wit.png" alt="Card image"
                          style="width:100%" />
                      </div>
                      <div class="card-body">
                        <h6 class="card-title">SCHOOLS & COLLEGES</h6>
                        <p class="card-text cardTxtBound">
                          Technology is everywhere and it is imperative that young
                          girls are not just encouraged to aspire for careers in
                          STEM, but are also provided the right exposure and
                          means to achieve it. WiT is one such space for these
                          girls.
                        </p>
                        <a href="<?php echo base_url();?>
/school_colleges" class="btn btn-block witBtn">View More</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 text-center wow  bounceInUp mt-4 mt-sm-0 ">
                    <div class="card  newsForDiv "
                      style="width: 18rem; margin-left: 0.5rem; max-width: 100%; height: auto;">
                      <img class="card-img-top h-100 d-block" src="images/final_images/scholarships_rbs_wit.png"
                        alt="Card image" style="width:100%" />
                      <div class="card-body">
                        <h6 class="card-title">SCHOLARSHIPS</h6>
                        <p class="card-text cardTxtBound">
                          WiT aims to provide Scholarships and financial support
                          to meritorious and deserving girls to pursue education
                          in STEM.
                        </p>
                        <a href="<?php echo base_url();?>
/scholarship" class="btn btn-block witBtn">View More</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 text-center  wow  bounceInUp mt-4 mt-sm-0">
                    <div class="card  newsForDiv"
                      style="width: 18rem;  margin-left: 0.5rem; max-width: 100%; height: auto;">
                      <img class="card-img-top h-100 d-block" src="images/final_images/rbs_wit_mentoring_home_page.jpg"
                        alt="Card image" style="width:100%" />
                      <div class="card-body">
                        <h6 class="card-title">MENTORING</h6>
                        <p class="card-text cardTxtBound">
                          WiT aims to help women working in technology as well as
                          women in other career paths looking to shift to tech
                          based roles. Also, while working in a male dominated
                          industry, a support more accessible for women working in STEM and looking for shifting to STEM careers.
                        </p>
                        <a href="<?php echo base_url();?>
/mentoring" class="btn  btn-block witBtn ">View More</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 text-center wow  bounceInUp mt-4 mt-sm-0">
                    <div class="card newsForDiv"
                      style="width: 18rem; margin-left: 0.5rem; max-width: 100%; height: auto;">
                      <img class="card-img-top h-100 d-block" src="images/final_images/rbs_wit_second_career_home_page.jpg"
                        alt="Card image" style="width:100%" />
                      <div class="card-body text-center">
                        <h6 class="card-title">SECOND CAREERS</h6>
                        <p class="card-text cardTxtBound">
                          There needs to be a simple way for women who’ve taken a
                          break from their careers to quickly reskill themselves
                          in the latest technology areas and rejoin the
                          workforce. WiT intends to focus on individual skills and
                          competencies to help such women forge a career by
                          bridging the gap.
                        </p>
                        <a href="<?php echo base_url();?>
/secondcareers" class="btn btn-block witBtn text-center">View More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 py-5 bg-white">
          <div class="bgigg mt-5">
            <div class="container-fluid p-5">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <h2 class="text-center ">WiT PARTNER ORGANISATIONS</h2>
                    <p class=" mb-5  text-center">
                      At WiT, we have a fast growing global network of senior professionals,
                      experts and leaders in a wide variety of industries.
                    </p>
                    <div class="responsivehome">
                      <div class="slide p-2">
                        <div class="img-div-fix-sponsor-home">
                          <img src="<?php echo base_url();?>
/images/event_partner_logo/rbs.png"
                            class="card-img-top sponsorsStyles d-block img-fluid " alt="" />
                        </div>
                      </div>
                      <div class="slide p-2">
                        <div class="img-div-fix-sponsor-home ">
                          <img src="<?php echo base_url();?>
/images/event_partner_logo/amazon.png"
                            class="card-img-top sponsorsStyles d-block img-fluid" alt="" />
                        </div>
                      </div>
                      <div class="slide p-2">
                        <div class="img-div-fix-sponsor-home ">
                          <img src="<?php echo base_url();?>
/images/event_partner_logo/ibm.png"
                            class="card-img-top sponsorsStyles d-block img-fluid" alt="" />
                        </div>
                      </div>
                      <div class="slide p-2">
                        <div class="img-div-fix-sponsor-home ">
                          <img src="images/event_partner_logo/tata.png"
                            class="card-img-top sponsorsStyles d-block img-fluid " alt="" />
                        </div>
                      </div>
                      <div class="slide p-2">
                        <div class="img-div-fix-sponsor-home ">
                          <img src="images/event_partner_logo/sapient_home.png"
                            class="card-img-top sponsorsStyles d-block img-fluid " alt="" />
                        </div>
                      </div>
                      <div class="slide p-2">
                        <div class="img-div-fix-sponsor-home ">
                          <img src="images/event_partner_logo/deloitte.png"
                            class="card-img-top sponsorsStyles d-block img-fluid " alt="" />
                        </div>
                      </div>
                      <div class="slide p-2">
                        <div class="img-div-fix-sponsor-home ">
                          <img src="images/event_partner_logo/jcpenney.png"
                            class="card-img-top sponsorsStyles d-block img-fluid " alt="" />
                        </div>
                      </div>
                      <div class="slide p-2">
                        <div class="img-div-fix-sponsor-home ">
                          <img src="images/event_partner_logo/volvo_home.png"
                            class="card-img-top sponsorsStyles d-block img-fluid " alt="" />
                        </div>
                      </div>
                      <div class="slide p-2">
                        <div class="img-div-fix-sponsor-home ">
                          <img src="images/event_partner_logo/literacy.png"
                            class="card-img-top sponsorsStylestwo d-block img-fluid " alt="" />
                        </div>
                      </div>
                      <div class="slide p-2">
                        <div class="img-div-fix-sponsor-home ">
                          <img src="images/event_partner_logo/ashoka.png"
                            class="card-img-top sponsorsStylestwo d-block img-fluid " alt="" />
                        </div>
                      </div>
                      <div class="slide p-2">
                        <div class="img-div-fix-sponsor-home ">
                          <img src="images/event_partner_logo/anz_home.png"
                            class="card-img-top sponsorsStylestwo d-block img-fluid " alt="" />
                        </div>
                      </div>
                      <div class="slide p-2">
                        <div class="img-div-fix-sponsor-home ">
                          <img src="images/event_partner_logo/master.png"
                            class="card-img-top sponsorsStylestwo d-block img-fluid " alt="" />
                        </div>
                      </div>
                      <div class="slide p-2">
                        <div class="img-div-fix-sponsor-home ">
                          <img src="images/event_partner_logo/timeless.png"
                            class="card-img-top sponsorsStylestwo d-block img-fluid " alt="" />
                        </div>
                      </div>
                      <div class="slide p-2">
                        <div class="img-div-fix-sponsor-home ">
                          <img src="images/event_partner_logo/ukindia_home.png"
                            class="card-img-top sponsorsStylestwo d-block img-fluid " alt="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div id="partner" class="py-5">
            <div class="container-fluid wow bounceInRight">
              <h2>WiT PARTNER ORGANISATIONS</h2>
              <p class="text-muted mb-5">
                At WiT, we have a fast growing global network of senior professionals,
                experts and leaders in a wide variety of industries.
              </p>
              <marquee>
                <div class="row text-center no-gutters">
                  <div class="col-2">
                    <img src="images/spencerstuart.png" class="img-fluid partners-images" width="100" height="100" />
                  </div>
                  <div class="col-2">
                    <img src="images/ibm.png" class="img-fluid partners-images" width="100" height="100" />
                  </div>
                  <div class="col-2">
                    <img src="images/jcpenney.png" class="img-fluid partners-images" width="100" height="100" />
                  </div>
                  <div class="col-2">
                    <img src="images/rbs.png" class="img-fluid partners-images" width="100" height="100" />
                  </div>
                  <div class="col-2">
                    <img src="images/sapient.png" class="img-fluid partners-images" width="100" height="100" />
                  </div>
                  <div class="col-2">
                    <img src="images/spencerstuart.png" class="img-fluid partners-images" width="100" height="100" />
                  </div>
                </div>
              </marquee>
            </div>
          </div> -->

        <div class="col-sm-12">
          <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="overlay-popup">
          <div class="container-fluid popUpImage">
            <button class="cutBtn">X</button>
            <div class="row">
              <div class="col-sm-10 offset-sm-1 animated  bounceIn">
                <img src="<?php echo base_url();?>
/images/rbs_wit_growth_summit_event_banner_new.jpg" class="img-fluid" alt="">
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
 src="https://cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
/js/home.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/js/smoothscroll.js"><?php echo '</script'; ?>
>
   <?php echo '<script'; ?>
 type="text/javascript">

    $(window).on('load resize', function () {
      if ($(this).outerWidth() < 992) {
        //768
        $('body')
          .removeClass('sidebar-collapsed')
          .addClass('drawer-sidebar');
      } else {
        $('body').removeClass('drawer-sidebar');
      }
    });
    $(function () {
      $('.js-sidebar-toggler').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        if ($('body').hasClass('drawer-sidebar')) {
          $('#sidebar').backdrop();
        } else {
          $('body').toggleClass('sidebar-collapsed');
        }
      });
      var scroll = new SmoothScroll('a[href*="#"][scroll-href]');
      $('select.md-select').formSelect();
    });
      // $('body').removeClass('sidebar-collapsed');


  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    $(document).ready(function () {
      $('.cutBtn').click(function () {
        $('body').removeClass('sidebar-collapsed');
      });
      $('body').addClass('sidebar-collapsed');
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
      $('.rightIconforSidebar').click(function () {
        $(this).toggleClass('iconsForsidebarNext')
      });
    })

  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
/js/slick.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/js/newsinsitesslick.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
