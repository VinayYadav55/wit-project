{assign var = 'userSessionDetail' value=$smarty.session.userDetails}
<!DOCTYPE html>
<html lang="en">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147066526-1"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){
     dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-147066526-1');
</script>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta property="og:womenintech" content="womenintech" />
  <meta property="og:title" content="Women In Technology"/>
  <meta property="og:description" content="Women Career Science Technology"/>
  <meta property="og:image" content="{base_url()}/images/witlogo-logo-dashboard.png">
  <meta property="og:url" content="http://womenintech.co.in/">
  <meta property="og:type" content="website"/>
  <link rel="shortcut icon" href="{base_url()}/images/wit-favicon.ico" type="image/x-icon">
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/fontawesome.min.css" integrity="sha256-0mlw4Ae1j9eDzZTzLuw5X9fBCL9nAehrtVyKfIstZQA=" crossorigin="anonymous" />
  <link rel="stylesheet" href="{base_url()}/libs/font-awesome/css/all.min.css" />
  <link type="text/css" href="{base_url()}/styles/home.css" rel="stylesheet" />
  <link href="{base_url()}/styles/wit_job_dashboard_home.css" rel="stylesheet" />
  <link href="{base_url()}/styles/wit_job_dashboard_two_home.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{base_url()}/styles/slick.css" />
  <link rel="stylesheet" type="text/css" href="{base_url()}/styles/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="{base_url()}/styles/newsinsites.css" />
  <script src="libs/jquery/jquery.min.js"></script>
  <title>WiT | HOME</title>
</head>

<body>
  <input type="hidden" baseUrl={base_url()} class="baseUrl">
  <div class="container-fluid p-0 headerVisibleFirst"
    style="position: fixed; top:0;z-index: 1000; background-color: #1e3262;">
    <div class="row no-gutters">
      <div class="col-sm-3 m-0  py-2  text-center d-none d-sm-block ">
        <div class="input-group littlesearch loginSection searchBarMobile" style="position: relative;margin: auto;">
          <input type="search" class="form-control radiusZero loginSection text-center " placeholder="Search..."
            style="position: relative;" />
          <span class="bg-white text-dark px-4" style="border-top-right-radius: 10rem !important;
          border-bottom-right-radius: 10rem !important;"><i class="fas fa-search searchIcon py-2"></i></span>
        </div>
      </div>
      <div class="col-sm-3"></div>
      <div class="col-sm-4 col-12 py-2 text-center">
        <a href="{base_url()}/contactUs" class="loginSection mt-3 mr-5 pl-5 pl-sm-0 mr-sm-0 text-white">Contact
          Us</a>&nbsp;&nbsp;
        {if $userSessionDetail.id}
        <a href="{base_url()}/user_dashboard" class="loginSection mt-3">Dashboard</a> &nbsp; &nbsp;
        <a href="{base_url()}" class="loginSection logOutBtn mt-3">Logout</a>
        {else}
        <span class="dropdownMainButton dropdownlogin">
          <a class="text-white loginSection px-3">
            Login
          </a>
          <div class="dropdownmenucontent dropdownContent">
            <a href="{base_url()}/login#loginSignupSection"
              class="loginSection dropdown-item bothLogin loginSection mt-3">Login</a>
            <a href="{base_url()}/employer" class="loginSection dropdown-item bothLogin loginSection mt-3">Employer
              Login</a>
          </div>
        </span>
        {/if}
      </div>
      <div class="col-sm-2 col-12 pt-2 text-center d-none d-sm-block">
        <a href="https://www.facebook.com/womenintechindiaofficial/" class="socialLogo"
          target="_blank"><i class="fab fa-facebook-square socialLogo"></i></a>
        &nbsp;
        <a href="https://www.instagram.com/womenintechindia/" class="socialLogo" target="_blank"><i class="fab fa-instagram socialLogo"></i></a>&nbsp;
        <a href="https://www.linkedin.com/company/womenintech-india/people/?viewAsMember=true" class="socialLogo" target="_blank"><i class="fab fa-linkedin socialLogo"></i></a>&nbsp;&nbsp;<a
          href="https://twitter.com/WomenInTech_IN" class="socialLogo" target="_blank"><i
            class="fab fa-twitter"></i></a>
      </div>
    </div>
  </div>

  <div id="sidebar" class="sidenav sidenav-fixed expand-lg">
    <div class="mt-4 h-100 ">
      <a href="{base_url()}/wit_growth_summit_2019"> <img src="{base_url()}/images/home_event_banner.png"
          class="img-fluid" alt=""></a>
    </div>
  </div>

  <!-- ******************************************************* -->
  <div class="docs-content-wrapper">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-12 divForMainHeaderMenu p-0 bg-white ">
          <div class="container-fluid p-0 headerVisiblesecond">
            <div class="row no-gutters">
              <div class="col-sm-2 bg-white">
                <a href="{base_url()}" class="mx-4">
                  <img src="{base_url()}/images/witlogo-logo.png" class="mx-4 my-2" width="100" height="60"
                    alt="" /></a>
              </div>
              <div class="col-sm-7 mainMenuDiv">
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
                          <div class="dropdown mainMenuDivSub">
                            <a href="{base_url()}/about" class="dropbtn nav-item nav-link mr-5">ABOUT
                            </a>
                            <div class="dropdown-content">
                              <a href="{base_url()}/who_we_are">WHO WE ARE</a>
                              <a href="{base_url()}/what_we_do">WHAT WE DO</a>
                              <a href="{base_url()}/our_members">MEMBERS</a>
                            </div>
                          </div>
                          <div class="dropdown mainMenuDivSub">
                            <a class="dropbtn nav-item nav-link mr-5" href="{base_url()}/wit_work_stream">WiT
                              WORKSTREAMS</a>
                            <div class="dropdown-content">
                              <a href="{base_url()}/school_colleges">SCHOOLS & COLLEGES</a>
                              <a href="{base_url()}/scholarship">SCHOLARSHIPS</a>
                              <a href="{base_url()}/mentoring">MENTORING</a>
                              <a href="{base_url()}/secondcareers">SECOND CAREERS</a>
                            </div>
                          </div>
                          <div class="dropdown mainMenuDivSub">
                            <a class="nav-item nav-link mr-5" href="{base_url()}/events_and_rewards">EVENTS
                              &
                              AWARDS</a>
                            <div class="dropdown-content">
                              <a href="{base_url()}/upcomingEvents">UPCOMING EVENTS</a>
                              <a href="{base_url()}/past_events_awards">PAST EVENTS & AWARDS</a>
                            </div>
                          </div>
                          <div class="dropdown mainMenuDivSub">
                            <a class="nav-item nav-link mr-5" href="{base_url()}/news_and_insites">NEWS &
                              INSIGHT</a>
                            <div class="dropdown-content">
                              <a href="{base_url()}/witInMedia">WiT IN MEDIA</a>
                              <a href="{base_url()}/blogs">BLOGS</a>
                              <a href="{base_url()}/viewsFromTheWorld">VIEWS FROM THE WORLD</a>
                              <a href="{base_url()}/witSponsors">WiT SPONSORS</a>
                              <a href="{base_url()}/did_you_know">DID YOU KNOW</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </nav>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 border text-center blockForBtn">
                <a href="{base_url()}/job_portal" class="btn witBtn mt-4 homeBtnStyle">Search
                  Job</a> &nbsp;
                <a href="{base_url()}/login" class="btn witBtn mt-4 homeBtnStyle">Join WiT</a>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid headerVisibleThird bg-white"
          style="position: fixed !important;top:2.7rem !important; z-index: 100;">
          <div class="row">
            <div class="col-4 py-1">
              <a href="{base_url()}"> <img src="{base_url()}/images/witlogo-logo.png" width="80" height="50" alt=""></a>
            </div>
            <div class="col-8 py-1">
              <span class="mt-3"><a href="{base_url()}/job_portal" class="searchjobTopTab">Search Jobs</a></span>
              <span class="mt-3" style="margin-left: 100px;"><i class="fas fa-bars mt-3 menuTab"
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
                        <div class="col-8"><a href="{base_url()}/about" class="text-white menubarOptions">ABOUT</a>
                        </div>
                        <div class="col-2"><i class="far fa-plus-square aboutMain p-1 plusBtnMobileMenu"
                            style="color: aqua;"></i>
                        </div>
                      </div>
                      <div class="aboutContainer">
                        <div class="py-1"><a href="{base_url()}/who_we_are"
                            class="text-white fontStyle menubarOptions">WHAT
                            WE DO</a></div>
                        <div class="py-1"><a href="{base_url()}/what_we_do"
                            class="text-white fontStyle menubarOptions">WHO
                            WE
                            ARE</a></div>
                        <div class="py-1"><a href="{base_url()}/our_members"
                            class="text-white fontStyle menubarOptions">MEMBERS
                          </a></div>
                      </div>
                    </div>
                    <div class="text-white mt-4">
                      <div class="row">
                        <div class="col-8"><a href="{base_url()}/wit_work_stream" class="text-white menubarOptions">WiT
                            WORK
                            STREAM</a></div>
                        <div class="col-2">
                          <i class="far fa-plus-square streamMain p-1 plusBtnMobileMenu" style="color: aqua;"></i>
                        </div>
                      </div>
                      <div class="workStreamContainer">
                        <div class="py-1"><a href="{base_url()}/school_colleges"
                            class="text-white fontStyle menubarOptions">SCHOOLS &
                            COLLEGES</a></div>
                        <div class="py-1"><a href="{base_url()}/scholarship"
                            class="text-white fontStyle menubarOptions">SCHOLARSHIPS</a>
                        </div>
                        <div class="py-1"><a href="{base_url()}/mentoring"
                            class="text-white fontStyle menubarOptions">MENTORING</a></div>
                        <div class="py-1"><a href="{base_url()}/secondcareers"
                            class="text-white fontStyle menubarOptions">SECOND CAREERS</a>
                        </div>
                      </div>
                    </div>
                    <div class="text-white mt-4">
                      <div class="row">
                        <div class="col-8"><a href="{base_url()}/events_and_rewards"
                            class="text-white menubarOptions">EVENTS
                            & AWARDS</a>
                        </div>
                        <div class="col-2">
                          <i class="far fa-plus-square eventsandawards p-1 plusBtnMobileMenu" style="color: aqua;"></i>
                        </div>
                      </div>
                      <div class="eventsandawardsContent">
                        <div class="py-1"><a href="{base_url()}/upcomingEvents"
                            class="text-white fontStyle menubarOptions">UPCOMING
                            EVENTS</a></div>
                        <div class="py-1"><a href="{base_url()}/past_events_awards"
                            class="text-white fontStyle menubarOptions">PAST EVENTS &
                            AWARDS</a></div>
                      </div>
                    </div>
                    <div class="text-white mt-4">
                      <div class="row">
                        <div class="col-8"><a href="{base_url()}/news_and_insites"
                            class="text-white menubarOptions">NEWS
                            &
                            INSITES</a></div>
                        <div class="col-2">
                          <i class="far fa-plus-square newandinsites p-1 plusBtnMobileMenu" style="color: aqua;"></i>
                        </div>
                      </div>
                      <div class="newandinsitesContent">
                        <div class="py-1"><a href="{base_url()}/witInMedia"
                            class="text-white fontStyle menubarOptions">WiT
                            IN
                            MEDIA</a>
                        </div>
                        <div class="py-1"><a href="{base_url()}/blogs"
                            class="text-white fontStyle menubarOptions">BLOGS</a>
                        </div>
                        <div class="py-1"><a href="{base_url()}/viewsFromTheWorld"
                            class="text-white fontStyle menubarOptions">VIEWS FROM THE
                            WORLD</a></div>
                        <div class="py-1"><a href="{base_url()}/witSponsors"
                            class="text-white fontStyle menubarOptions">WiT
                            SPONSORS</a>
                        </div>
                        <div class="py-1"><a href="{base_url()}/did_you_know"
                            class="text-white fontStyle menubarOptions">DID
                            YOU KNOW</a>
                        </div>
                      </div>
                    </div>
                    <div class="text-white mt-4">
                      <div class="row">
                        <div class="col-12 pb-4"><a href="{base_url()}/job_portal"
                            class="text-white menubarOptions">SEARCH
                            JOB</a></div>
                        <div class="col-12"><a href="{base_url()}" class="text-white menubarOptions">JOIN WiT</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="col-sm-12 p-0 mainHeroSections">
          <video autoplay muted loop id="myVideo" class="mainVideos">
            <source src="{base_url()}/images/techvideo_rbswit.mp4" type="video/mp4">
          </video>
          <div class="overlayImg">
            <a href="{base_url()}/login" class="btn btn-primary px-4 py-2 ml-5  joinbtn d-block d-sm-none">JOIN WiT</a>
            </p>
          </div>
          <div class="sliderDiv">
            <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon sociaLogo "
              data-target="#sidebar">
              <i class="fas fa-chevron-right iconsForsidebar rightIconforSidebar"></i>
            </a>
            <p class="text-center heroTxt"> WomenInTech (WiT) is an endeavor which aims to reach out to
              women across age-groups Schools, Colleges, women starting their
              careers, working women, women restarting their careers, stay at
              home moms and others to help them realize their careers in
              science, technology, engineering and mathematics thereby building a more inclusive ecosystem.<br><br><br>
              <a href="{base_url()}/login" class="btn btn-primary px-4 py-2  joinbtn">JOIN WiT</a></p>
          </div>
        </div> -->
        <div class="col-sm-12 p-0 mainHeroSections">
          <div class="overlayImg"></div>
          <video class="myVideo" width="100%" height="100%" loop muted autoplay>
            <source src="{base_url()}/images/techvideo_rbswit.mp4" type="video/mp4">
          </video>
          <a href="{base_url()}/login" class="btn btn-primary px-4 py-2 ml-5  joinbtn d-block d-sm-none">JOIN WiT</a>
          <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon sociaLogo "
            data-target="#sidebar">
            <i class="fas fa-chevron-right iconsForsidebar rightIconforSidebar"></i>
          </a>
          <p class="text-center heroTxt"> WomenInTech (WiT) is an endeavor which aims to reach out to
            women across age-groups Schools, Colleges, women starting their
            careers, working women, women restarting their careers, stay at
            home moms and others to help them realize their careers in
            science, technology, engineering and mathematics thereby building a more inclusive ecosystem.<br><br><br>
            <a href="{base_url()}/login" class="btn btn-primary px-4 py-2  joinbtn">JOIN WiT</a></p>
          <!-- </p> -->
          <!-- <div class="sliderDiv">
            <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon sociaLogo "
              data-target="#sidebar">
              <i class="fas fa-chevron-right iconsForsidebar rightIconforSidebar"></i>
            </a>
            <p class="text-center heroTxt"> WomenInTech (WiT) is an endeavor which aims to reach out to
              women across age-groups Schools, Colleges, women starting their
              careers, working women, women restarting their careers, stay at
              home moms and others to help them realize their careers in
              science, technology, engineering and mathematics thereby building a more inclusive ecosystem.<br><br><br>
              <a href="{base_url()}/login" class="btn btn-primary px-4 py-2  joinbtn">JOIN WiT</a></p>
          </div> -->
        </div>
        <div class="col-sm-12 p-0 bg-white pt-5 forMobileHeroContent">
          <p class="text-center"> WomenInTech (WiT) is an endeavor which aims to reach out to
            women across age-groups Schools, Colleges, women starting their
            careers, working women, women restarting their careers, stay at
            home moms and others to help them realize their careers in
            science, technology, engineering and mathematics thereby building a more inclusive ecosystem.
            <hr>
        </div>
        <div class="col-sm-12 p-0 bg-white pt-5">
          <div class="container-fluid py-5 mt-0 mt-sm-5">
            <div class="row ">
              <div class="col-sm-12  text-center">
                <div class="row no-gutters">
                  <div
                    class="col-lg-3 col-md-6 col-sm-6 col-12 text-center wow  bounceInUp mt-4 mt-lg-4 mt-md-4 mt-sm-4">
                    <div class="card  newsForDiv cardWidthStyle">
                      <img class="card-img-top h-100 d-block cardImgSolution"
                        src="images/final_images/original_schools_colleges_rbs_wit.png" alt="Card image" />
                      <div class="card-body">
                        <h6 class="card-title">SCHOOLS & COLLEGES</h6>
                        <p class="card-text cardTxtBound">
                          Technology is everywhere and it is imperative that young
                          girls are not just encouraged to aspire for careers in
                          STEM, but are also provided the right exposure and
                          means to achieve it. WiT is one such space for these
                          girls.
                        </p>
                        <a href="{base_url()}/school_colleges" class="btn btn-block witBtn">View More</a>
                      </div>
                    </div>
                  </div>
                  <div
                    class="col-lg-3 col-md-6 col-sm-6 col-12 text-center wow  bounceInUp mt-4 mt-lg-4 mt-md-4 mt-sm-4">
                    <div class="card  newsForDiv cardWidthStyle">
                      <img class="card-img-top h-100 d-block cardImgSolution"
                        src="images/final_images/scholarships_rbs_wit.png" alt="Card image" />
                      <div class="card-body">
                        <h6 class="card-title">SCHOLARSHIPS</h6>
                        <p class="card-text cardTxtBound">
                          WiT aims to provide Scholarships and financial support
                          to meritorious and deserving girls to pursue education
                          in STEM.
                        </p>
                        <a href="{base_url()}/scholarship" class="btn btn-block witBtn">View More</a>
                      </div>
                    </div>
                  </div>
                  <div
                    class="col-lg-3 col-md-6 col-sm-6 col-12 text-center  wow  bounceInUp mt-4 mt-lg-4 mt-md-4 mt-sm-4">
                    <div class="card  newsForDiv cardWidthStyle">
                      <img class="card-img-top h-100 d-block cardImgSolution"
                        src="images/final_images/rbs_wit_mentoring_home_page.jpg" alt="Card image" />
                      <div class="card-body">
                        <h6 class="card-title">MENTORING</h6>
                        <p class="card-text cardTxtBound">
                          WiT aims to help women working in technology as well as
                          women in other career paths looking to shift to tech
                          based roles. Also, while working in a male dominated
                          industry, a support more accessible for women working in STEM and looking for shifting to STEM
                          careers.
                        </p>
                        <a href="{base_url()}/mentoring" class="btn  btn-block witBtn ">View More</a>
                      </div>
                    </div>
                  </div>
                  <div
                    class="col-lg-3 col-md-6 col-sm-6 col-12 text-center wow  bounceInUp mt-4 mt-lg-4 mt-md-4 mt-sm-4">
                    <div class="card newsForDiv cardWidthStyle">
                      <img class="card-img-top h-100 d-block cardImgSolution"
                        src="images/final_images/rbs_wit_second_career_home_page.jpg" alt="Card image" />
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
                        <a href="{base_url()}/secondcareers" class="btn btn-block witBtn text-center">View More</a>
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
                          <img src="{base_url()}/images/event_partner_logo/rbs.png"
                            class="card-img-top sponsorsStyles d-block img-fluid " alt="" />
                        </div>
                      </div>
                      <div class="slide p-2">
                        <div class="img-div-fix-sponsor-home ">
                          <img src="{base_url()}/images/event_partner_logo/amazon.png"
                            class="card-img-top sponsorsStyles d-block img-fluid" alt="" />
                        </div>
                      </div>
                      <div class="slide p-2">
                        <div class="img-div-fix-sponsor-home ">
                          <img src="{base_url()}/images/event_partner_logo/ibm.png"
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
                            class="card-img-top sponsorsStyles d-block img-fluid " alt="" />
                        </div>
                      </div>
                      <div class="slide p-2">
                        <div class="img-div-fix-sponsor-home ">
                          <img src="images/event_partner_logo/ashoka.png"
                            class="card-img-top sponsorsStyles d-block img-fluid " alt="" />
                        </div>
                      </div>
                      <div class="slide p-2">
                        <div class="img-div-fix-sponsor-home ">
                          <img src="images/event_partner_logo/anz_home.png"
                            class="card-img-top sponsorsStyles d-block img-fluid " alt="" />
                        </div>
                      </div>
                      <div class="slide p-2">
                        <div class="img-div-fix-sponsor-home ">
                          <img src="images/event_partner_logo/master.png"
                            class="card-img-top sponsorsStyles d-block img-fluid " alt="" />
                        </div>
                      </div>
                      <div class="slide p-2">
                        <div class="img-div-fix-sponsor-home ">
                          <img src="images/event_partner_logo/timeless.png"
                            class="card-img-top sponsorsStyles d-block img-fluid " alt="" />
                        </div>
                      </div>
                      <div class="slide p-2">
                        <div class="img-div-fix-sponsor-home ">
                          <img src="images/event_partner_logo/ukindia_home.png"
                            class="card-img-top sponsorsStyles d-block img-fluid " alt="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-12 bg-white">
          <div class="container">
            <div class="container">
              <div class="row">
                <div class="col-sm-12 py-4">
                  <h4 class="text-center">OUR TEAM</h4>
                  <hr class="w-25">
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                  <div class="speakerImgDivHome">
                    <div class="imageContainerSpeakerHome">
                      <img src="{base_url()}/images/anuranjita_kumar.jpg" class="main-image-speakerHome rounded-circle"
                        alt="" />
                    </div>
                  </div>
                  <div class="details">
                    <h6 class="text-center pt-2">Anuranjita Kumar</h6>
                    <p class="text-center">
                      Chairperson, WomenInTech
                    </p>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="speakerImgDivHome">
                    <div class="imageContainerSpeakerHome">
                      <img src="{base_url()}/images/founder1.jpeg" class="main-image-speakerHome rounded-circle"
                        alt="" />
                    </div>
                  </div>
                  <div class="details">
                    <h6 class="text-center pt-2">Sameer Mathur</h6>
                    <p class="text-center">
                      Lead, WomenInTech
                    </p>
                  </div>
                </div>
                <div class="col-sm-2"></div>
              </div>
              <div class="row my-5">
                <div class="col-sm-3">
                  <div class="speakerImgDivHome">
                    <div class="imageContainerSpeakerHome">
                      <img src="{base_url()}/images/rajesh_jogi_head_risk_hub_india.jpg"
                        class="main-image-speakerHome rounded-circle" alt="" />
                    </div>
                  </div>
                  <div class="details">
                    <h6 class="text-center pt-2">Rajesh Jogi</h6>
                    <p class="text-center">
                      Chief Risk Officer, RBS, India
                    </p>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="speakerImgDivHome">
                    <div class="imageContainerSpeakerHome">
                      <img src="{base_url()}/images/neeraj_goyal.jpg" class="main-image-speakerHome rounded-circle"
                        alt="" />
                    </div>
                  </div>
                  <div class="details">
                    <h6 class="text-center pt-2">Neeraj Goyal</h6>
                    <p class="text-center">
                      Head of Technology- India RBS
                    </p>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="speakerImgDivHome">
                    <div class="imageContainerSpeakerHome">
                      <img src="{base_url()}/images/chaitnya_srinivas.png" class="main-image-speakerHome rounded-circle"
                        alt="" />
                    </div>
                  </div>
                  <div class="details">
                    <h6 class="text-center pt-2">Chaitanya Srinivas</h6>
                    <p class="text-center">
                      VP HR & HR Head IBM India South Asia at IBM
                    </p>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="speakerImgDivHome">
                    <div class="imageContainerSpeakerHome">
                      <img src="{base_url()}/images/sukanya_misra_rbs_member_new.jpg"
                        class="main-image-speakerHome rounded-circle" alt="" />
                    </div>
                  </div>
                  <div class="details">
                    <h6 class="text-center pt-2">Sukanya Mishra</h6>
                    <p class="text-center">
                      Senior Vice President, India Technology Hub, Mastercard
                    </p>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="speakerImgDivHome">
                    <div class="imageContainerSpeakerHome">
                      <img src="{base_url()}/images/Manikandan Thangarathnam.jpeg"
                        class="main-image-speakerHome rounded-circle" alt="" />
                    </div>
                  </div>
                  <div class="details">
                    <h6 class="text-center pt-2">Manikandan Thangarathnam</h6>
                    <p class="text-center">
                      Director Engineering at Amazon
                    </p>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="speakerImgDivHome">
                    <div class="imageContainerSpeakerHome">
                      <img src="{base_url()}/images/sareena_singh_test.jpeg"
                        class="main-image-speakerHome rounded-circle" alt="" />
                    </div>
                  </div>
                  <div class="details">
                    <h6 class="text-center pt-2">Sareena Singh</h6>
                    <p class="text-center">
                      Global Head - Controls Testing & Monitoring
                      RHI Head - Fin Crime Testing & Model Risk
                    </p>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="speakerImgDivHome">
                    <div class="imageContainerSpeakerHome">
                      <img src="{base_url()}/images/sapna_aggrawal_rbs_wit_member.jpg"
                        class="main-image-speakerHome rounded-circle" alt="" />
                    </div>
                  </div>
                  <div class="details">
                    <h6 class="text-center pt-2">Sapna Aggarwal</h6>
                    <p class="text-center">
                      Vice President, Talent Acquisition, RBS
                    </p>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="speakerImgDivHome">
                    <div class="imageContainerSpeakerHome">
                      <img src="{base_url()}/images/Deepika_Kamboj_rbs_wit_member.jpg"
                        class="main-image-speakerHome rounded-circle" alt="" />
                    </div>
                  </div>
                  <div class="details">
                    <h6 class="text-center pt-2">Deepika Kamboj</h6>
                    <p class="text-center">
                      HR Consultant, RBS
                    </p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          {include file = "footer.tpl"}
        </div>
        <div class="overlay-popup">
          <div class="container-fluid popUpImage">
            <button class="cutBtn">X</button>
            <div class="row">
              <div class="col-sm-10 offset-sm-1 animated  bounceIn">
                <img src="{base_url()}/images/rbs_wit_growth_summit_event_banner_new.jpg" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js"></script>
  <script type="text/javascript" src="{base_url()}/js/home.js"></script>
  <script src="{base_url()}/js/smoothscroll.js"></script>
  <script type="text/javascript">

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


  </script>
  <script>
    $(document).ready(function () {
      $('.cutBtn').click(function () {
        $('body').removeClass('sidebar-collapsed');
      });
      $('body').addClass('sidebar-collapsed');

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
      $('.dropdownlogin').click(function () {
        $('.dropdownContent').slideToggle();
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
      $('.rightIconforSidebar').click(function () {
        $(this).toggleClass('iconsForsidebarNext')
      });

      if (navigator.userAgent.match(/Trident\/7\./)) { // if IE
        $('body').on("mousewheel", function () {
          // remove default behavior
          event.preventDefault();

          //scroll without smoothing
          var wheelDelta = event.wheelDelta;
          var currentScrollPosition = window.pageYOffset;
          window.scrollTo(0, currentScrollPosition - wheelDelta);
        });
      }
    })

  </script>
  <script type="text/javascript" src="{base_url()}/js/slick.min.js"></script>
  <script src="{base_url()}/js/newsinsitesslick.js"></script>
</body>

</html>