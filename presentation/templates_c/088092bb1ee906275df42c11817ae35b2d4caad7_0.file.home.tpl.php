<?php
/* Smarty version 3.1.33, created on 2019-07-22 11:19:02
  from 'C:\xampp\htdocs\rbs\presentation\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d359ba604ab95_42478638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '088092bb1ee906275df42c11817ae35b2d4caad7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rbs\\presentation\\templates\\home.tpl',
      1 => 1563794322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d359ba604ab95_42478638 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="styles/home.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"
    />

    <link rel="stylesheet" href="libs/font-awesome/css/all.min.css" />

    <title>Home|WIT</title>
  </head>
  <body>
    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container-fluid heroImage p-0 m-0">
      <div class="sliderDiv">
        <div class="overlay"></div>
        <a href="?login=true" class="btn btn-primary px-4 py-2  joinbtn"
          >JOIN THE COMMUNITY</a
        >
      </div>
    </div>
    <div class="container-fluid ">
      <div class="row">
        <div class="col-sm-12">
          <div class="column">
            <div class="col-md-12">
              <p class="mt-md-3 text-center p-5">
                WomenInTech (WiT) is an endeavor which aims to reach out to
                women across age-groups- Schools, Colleges, women starting their
                careers, working women, women restarting their careers, stay at
                home moms and others- and help realize their careers in
                technology thereby making the Technology ecosystem more inclusive.
                
              </p>
              <hr style="width: 50%;" class="py-3" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-9">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="row">
                <div
                  class="col-md-3 col-sm-6 col-lg-3 wow bounceInUp text-center"
                >
                  <div class="card text-center styleCard newsForDiv">
                    <div>
                      <!-- <div class="overlay"></div> -->
                      <img
                        class="card-img-top"
                        src="images/school_college.jpg"
                        alt="Card image"
                        style="width:100%"
                      />
                    </div>
                    <div class="card-body">
                      <h6 class="card-title">SCHOOL & COLLEGE</h6>
                      <p class="card-text cardTxtBound">
                        Schools and Colleges Content- Technology is everywhere
                        and it is imperative that young girls are not just
                        encouraged to aspire for career in tech, but are also
                        provided the right exposure and means to achieve it. WiT
                        is one such space for these girls.
                      </p>
                      <a
                        href="?school_colleges=true"
                        class="btn btn-block witBtn"
                        >View More</a
                      >
                    </div>
                  </div>
                </div>
                <div class="col-md-3   col-sm-6 col-lg-3 wow  bounceInUp">
                  <div class="card  newsForDiv ">
                    <img
                      class="card-img-top"
                      src="images/scholarship.jpg"
                      alt="Card image"
                      style="width:100%"
                    />
                    <div class="card-body">
                      <h6 class="card-title">SCHOLARSHIP</h6>
                      <p class="card-text cardTxtBound">
                        WiT aims to provide Scholarships and financial support
                        to meritorious and deserving girls to pursue education
                        in STEM.
                      </p>
                      <a href="?scholarship=true" class="btn btn-block witBtn"
                        >View More</a
                      >
                    </div>
                  </div>
                </div>
                <div class="col-md-3  col-sm-6 col-lg-3  wow  bounceInUp">
                  <div class="card  newsForDiv">
                    <img
                      class="card-img-top"
                      src="images/mentor3.jpg"
                      alt="Card image"
                      style="width:100%"
                    />
                    <div class="card-body">
                      <h6 class="card-title">MENTORING</h6>
                      <p class="card-text cardTxtBound">
                        WiT aims to help women working in technology as well as
                        women in other career paths looking to shift to tech
                        based roles. Also, while working in a male dominated
                        industry, a support system of peers and mentors becomes
                        essential and the community at WiT makes this support
                        more accessible.
                      </p>
                      <a href="?mentoring=true" class="btn  btn-block witBtn "
                        >View More</a
                      >
                    </div>
                  </div>
                </div>
                <div class="col-md-3  col-sm-6 col-lg-3 wow  bounceInUp ">
                  <div class="card  newsForDiv">
                    <img
                      class="card-img-top"
                      src="images/women2.jpg"
                      alt="Card image"
                      style="width:100%"
                    />
                    <div class="card-body text-center">
                      <h6 class="card-title">SECOND CARRER</h6>
                      <p class="card-text cardTxtBound">
                        There needs to be a simple way for women who’ve taken a
                        break from their careers to quickly reskill themselves
                        in the latest technology areas and rejoin the workforce.
                        WiT intends to focus on individual skills and
                        competencies to help such women forge a career by
                        bridging the gap.
                      </p>
                      <a
                        href="?secondcareers=true"
                        class="btn btn-block witBtn text-center"
                        >View More</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="row">
            <div class="col-sm-12 latestEvents">
              <p>
                <b
                  >Upcoming Events
                  <hr
                /></b>
              </p>
              <marquee
                width="100%"
                direction="up"
                height="80%"
                scrollamount="3"
                onmouseover="this.stop()"
                onmouseout="this.start()"
              >
                <div
                  class="container-fluid singleEventdiv"
                  style="border-left: 3px solid red"
                >
                  <p class="date">Thu May 25,2019</p>
                  <a href="">Board Meeting</a>
                  <p class="meetingtype">Company Internal Meeting</p>
                </div>
                <hr />
                <div
                  class="container-fluid singleEventdiv"
                  style="border-left: 3px solid green"
                >
                  <p class="date">Thu May 25,2019</p>
                  <a href="">Board Meeting</a>
                  <p class="meetingtype">Company Internal Meeting</p>
                </div>
                <hr />
                <div
                  class="container-fluid singleEventdiv"
                  style="border-left: 3px solid blue"
                >
                  <p class="date">Thu May 25,2019</p>
                  <a href="">Board Meeting</a>
                  <p class="meetingtype ">Company Internal Meeting</p>
                </div>
                <hr />
                <div
                  class="container-fluid singleEventdiv"
                  style="border-left: 3px solid yellow"
                >
                  <p class="date">Thu May 25,2019</p>
                  <a href="">Board Meeting</a>
                  <p class="meetingtype">Company Internal Meeting</p>
                </div>
                <hr />
                <div
                  class="container-fluid singleEventdiv"
                  style="border-left: 3px solid magenta"
                >
                  <p class="date">Thu May 25,2019</p>
                  <a href="">Board Meeting</a>
                  <p class="meetingtype">Company Internal Meeting</p>
                </div>
                <hr />
              </marquee>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="partner" class="py-5">
      <div class="container-fluid wow bounceInRight">
        <h2>WiT PARTNER ORGANISATIONS</h2>
        <p class="text-muted mb-5">
          At WiT, we have a fast growing global network of senior professionals,
          experts and leaders in a wide variety of industries.
        </p>
        <marquee>
          <div class="row text-center">
            <div class="col-2">
              <img
                src="images/spencerstuart.png"
                class="img-fluid partners-images"
                width="100"
                height="100"
              />
            </div>
            <div class="col-2">
              <img
                src="images/ibm.png"
                class="img-fluid partners-images"
                width="100"
                height="100"
              />
            </div>
            <div class="col-2">
              <img
                src="images/jcpenney.png"
                class="img-fluid partners-images"
                width="100"
                height="100"
              />
            </div>
            <div class="col-2">
              <img
                src="images/rbs.png"
                class="img-fluid partners-images"
                width="100"
                height="100"
              />
            </div>
            <div class="col-2">
              <img
                src="images/sapient.png"
                class="img-fluid partners-images"
                width="100"
                height="100"
              />
            </div>
            <div class="col-2">
              <img
                src="images/spencerstuart.png"
                class="img-fluid partners-images"
                width="100"
                height="100"
              />
            </div>
          </div>
        </marquee>
      </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
    <?php echo '<script'; ?>
 type="text/javascript" src="js/home.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
