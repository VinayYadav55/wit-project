<?php
/* Smarty version 3.1.33, created on 2019-07-26 18:30:25
  from 'C:\xampp\htdocs\sanjeev\presentation\templates\past_specific_event.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3b2aa1056793_48388849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e90707975d9bf68175dc94b51031ee25fae4874' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sanjeev\\presentation\\templates\\past_specific_event.tpl',
      1 => 1564158621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d3b2aa1056793_48388849 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\sanjeev\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'pastSpecificEvent','assign'=>'obj'),$_smarty_tpl);?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/pastevent.css" />

    <title>Home|WIT</title>
  </head>
  <body>
    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container-fluid my-3">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="subHeading text-center">
              Tamil Nadu Chapter Launch, Hosted by Amazon <br />
              (Date- 5th April, 2019)
            </h1>
            <hr class="hrlines" />
          </div>
          <div class="col-sm-12">
            <p class="text-justify px-5">
              Amazon India facilitated the launch of the Tamil Nadu chapter of
              the WomenInTech (WiT) forum on 5th April, 2019. The forum brings
              together technology companies, industry experts, NGOs, Government,
              and academia across Tamil Nadu to formulate interventions and
              programs aimed at encouraging participation of women in STEM
              education as well as careers in the fields of Engineering and
              Technology. The vision for Tamil Nadu’s chapter is to be a channel
              for the industry’s effort to nurture women talent in technology
              throughout different stages of their career. To drive this vision,
              the chapter will contribute towards the following four levers:
            </p>
            <p class="px-5">
              <strong>Early Engagement</strong> Technology awareness sessions
              with regular learning opportunities
            </p>
            <p class="px-5">
              <strong>Scholarship Program</strong> Identify and support
              potential future women engineers through code challenges and fund
              their education
            </p>
            <p class="px-5">
              <strong>Mentor Network</strong> Create a peer network of mentor
              support from senior tech leaders
            </p>
            <p class="px-5">
              <strong>Career Restarts</strong> Exploration based engagement with
              mentor support for women who are restarting their careers
            </p>
          </div>

          <div class="col-md-12">
            <h1 class="text-center text-white subHeading">
              Gallery
            </h1>
            <div class="responsive">
              <?php $_smarty_tpl->_assignInScope('imagesPath', $_smarty_tpl->tpl_vars['obj']->value->eventDetails[0]);?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj']->value->eventDetails[0], 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['image']->value, 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
              <div class="slide p-2">
                <div class="card">
                  <div class="img-div-fix">
                    <a href="" data-toggle="modal" data-target="#myModal">
                      <img
                        class="card-img-top img-fluid"
                        src=<?php echo base_url();?>
/<?php echo $_smarty_tpl->tpl_vars['img']->value['image_url'];?>

                        alt="Card image"
                    /></a>
                  </div>
                </div>
              </div>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
             
            </div>
          </div>

          <div class="col-sm-12 text-center my-3">
            <a
              href=""
              class="btn witBtn px-3"
              data-toggle="modal"
              data-target="#myModal"
              >VIEW GALLERY</a
            >
          </div>
          <div class="col-sm-12 py-5">
            <h1 class="subHeading text-center">Our Speakers</h1>
            <div class="row my-5">
              <div class="col-sm-3">
                <div class="card">
                  <div class="img-div-fix-news-speaker">
                    <img
                      class="card-img-top img-fluid"
                      src="images/speaker.jpg"
                      alt="Card image"
                    />
                  </div>
                  <div class="card-body">
                    <h6
                      class="card-title  m-0 p-0"
                      style="color: #1e3262 !important"
                    >
                      Alison Rose
                    </h6>
                    <p class="card-text  m-0 text-center">
                      Deputy CEO, NatWest Holdings CEO, Commercial & Private
                      Banking
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="img-div-fix-news-speaker">
                    <img
                      class="card-img-top img-fluid"
                      src="images/Deepti-varma-amazon-event-speaker.jpg"
                      alt="deepti-varma-amazon-chief"
                    />
                  </div>
                  <div class="card-body">
                    <h6
                      class="card-title  m-0 p-0"
                      style="color: #1e3262 !important"
                    >
                      Deepti Varma
                    </h6>
                    <p class="card-text  m-0  text-center">
                      Director HR of Amazon India
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="img-div-fix-news-speaker">
                    <img
                      class="card-img-top img-fluid"
                      src="images/Gautami-tadmalla-amazon-event.jpg"
                      alt="Card image"
                    />
                  </div>
                  <div class="card-body">
                    <h6
                      class="card-title  m-0 p-0"
                      style="color: #1e3262 !important"
                    >
                      Gautami Tadimalla
                    </h6>
                    <p class="card-text  m-0  text-center">
                      Actor, Survivor, TEDx Speaker
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="img-div-fix-news-speaker">
                    <img
                      class="card-img-top img-fluid"
                      src="images/Anuranjhita-kumar_rbswit_founder.jpg"
                      alt="Card image"
                    />
                  </div>
                  <div class="card-body">
                    <h6
                      class="card-title  m-0 p-0"
                      style="color: #1e3262 !important"
                    >
                      Anuranjitha Kumar
                    </h6>
                    <p class="card-text  m-0  text-center">
                      CHRO, RBS International Hubs & Chairperson of WiT
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row my-5">
              <div class="col-sm-3">
                <div class="card">
                  <div class="img-div-fix-news-speaker">
                    <img
                      class="card-img-top img-fluid"
                      src="images/Prof-MK-Surappa-anna-university.jpg"
                      alt="Card image"
                    />
                  </div>
                  <div class="card-body">
                    <h6
                      class="card-title  m-0 p-0"
                      style="color: #1e3262 !important"
                    >
                      Prof. M. K. Surappa
                    </h6>
                    <p class="card-text  m-0 text-center">
                      Vice Chancellor Anna University
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="img-div-fix-news-speaker">
                    <img
                      class="card-img-top img-fluid"
                      src="images/kanwal kaul.jpeg"
                      alt="Card image"
                    />
                  </div>
                  <div class="card-body">
                    <h6
                      class="card-title  m-0 p-0"
                      style="color: #1e3262 !important"
                    >
                      Kanwal Kaul
                    </h6>
                    <p class="card-text  m-0  text-center">
                      Deputy CEO, NatWest Holdings CEO, Commercial & Private
                      Banking
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="img-div-fix-news-speaker">
                    <img
                      class="card-img-top img-fluid"
                      src="images/mariazeenajohnson.jpg"
                      alt="Card image"
                    />
                  </div>
                  <div class="card-body">
                    <h6
                      class="card-title  m-0 p-0"
                      style="color: #1e3262 !important"
                    >
                      Mariazeena Johnson
                    </h6>
                    <p class="card-text  m-0  text-center">
                      Chancellor at Sathyabhama University
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="img-div-fix-news-speaker">
                      <img
                        class="card-img-top img-fluid"
                        src="images/S Malarvizhi.jpg"
                        alt="Card image"
                      />
                    </div>
                  </div>
                  <div class="card-body">
                    <h6
                      class="card-title  m-0 p-0"
                      style="color: #1e3262 !important"
                    >
                      S. Malarvizhi
                    </h6>
                    <p class="card-text  m-0  text-center">
                      Chairperson & Managing trustee at Shree Krishna
                      Institution
                    </p>
                  </div>
                </div>
              </div>
              <div class="row my-5">
                <div class="col-sm-3">
                  <div class="card">
                    <div class="img-div-fix-news-speaker">
                      <img
                        class="card-img-top img-fluid"
                        src="images/DR.SANDHYA.jpg"
                        alt="Card image"
                      />
                    </div>
                    <div class="card-body">
                      <h6
                        class="card-title  m-0 p-0"
                        style="color: #1e3262 !important"
                      >
                        Sandhya Pentareddy
                      </h6>
                      <p class="card-text  m-0 text-center">
                        Excutive Director at VIT University
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card">
                    <div class="img-div-fix-news-speaker">
                      <img
                        class="card-img-top img-fluid"
                        src="images/Lakshmi-Ramakrishnan.jpg"
                        alt="Card image"
                      />
                    </div>
                    <div class="card-body">
                      <h6
                        class="card-title  m-0 p-0"
                        style="color: #1e3262 !important"
                      >
                        Lakshmi Ramkrishnan
                      </h6>
                      <p class="card-text  m-0  text-center">
                        Deputy CEO, NatWest Holdings CEO, Commercial & Private
                        Banking
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card">
                    <div class="img-div-fix-news-speaker">
                      <img
                        class="card-img-top img-fluid"
                        src="images/Manikandan Thangarathnam.jpeg"
                        alt="Card image"
                      />
                    </div>
                    <div class="card-body">
                      <h6
                        class="card-title  m-0 p-0"
                        style="color: #1e3262 !important"
                      >
                        Mani Thangarathnam
                      </h6>
                      <p class="card-text  m-0  text-center">
                        Director Engineer at Amazon
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card">
                    <div class="img-div-fix-news-speaker">
                      <img
                        class="card-img-top img-fluid"
                        src="images/Senthil_Kanthaswamy.jpeg"
                        alt="Card image"
                      />
                    </div>
                    <div class="card-body">
                      <h6
                        class="card-title  m-0 p-0"
                        style="color: #1e3262 !important"
                      >
                        Senthil Kanthaswamy
                      </h6>
                      <p class="card-text  m-0  text-center">
                        Director , Product Management at Fresh Works
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 pasteventOutline">
          <h1 class="display-4  text-center">GALLERY</h1>
          <hr class="hrlines" />
          <div class="row">
            <div
              class="col-sm-3 text-center"
              style="height: 90vh; overflow-y:scroll"
              id="stylScroll"
            >
              <div class="img-thumbnail1 img-thumb">
                <img
                  id="home"
                  class=" gallery"
                  src="images/amazonevent.JPG"
                  alt=""
                />
              </div>
              <div class="img-thumbnail1 img-thumb">
                <img class=" gallery" src="images/amazonevent1.JPG" alt="" />
              </div>
              <div class="img-thumbnail1 img-thumb">
                <img class=" gallery" src="images/amazonevent2.JPG" alt="" />
              </div>
              <div class="img-thumbnail1 img-thumb">
                <img class=" gallery" src="images/speaker.jpg" alt="" />
              </div>
              <div class="img-thumbnail1 img-thumb">
                <img class=" gallery" src="images/speaker1.jpg" alt="" />
              </div>
              <div class="img-thumbnail1 img-thumb">
                <img class=" gallery " src="images/speaker2.jpg" alt="" />
              </div>
              <div class="img-thumbnail1 img-thumb">
                <img class=" gallery" src="images/speaker3.jpg" alt="" />
              </div>
              <div class="img-thumbnail1 img-thumb">
                <img class=" gallery" src="images/speaker.jpg" alt="" />
              </div>
              <div class="img-thumbnail1 img-thumb">
                <img class=" gallery" src="images/speaker3.jpg" alt="" />
              </div>
              <div class="img-thumbnail1 img-thumb">
                <img class=" gallery" src="images/speaker.jpg" alt="" />
              </div>
              <div class="img-thumbnail1 img-thumb">
                <img class=" gallery" src="images/speaker.jpg" alt="" />
              </div>
              <div class="img-thumbnail1 img-thumb">
                <img class=" gallery" src="images/speaker3.jpg" alt="" />
              </div>
              <div class="img-thumbnail1 img-thumb ">
                <img class=" gallery" src="images/speaker1.jpg" alt="" />
              </div>
              <div class="img-thumbnail1 img-thumb">
                <img class=" gallery" src="images/speaker.jpg" alt="" />
              </div>
            </div>
            <div class="col-sm-9">
              <div class="main-div">
                <img class="gallery-img" src="images/speaker.jpg" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <div class="modal fade" id="myModal" style="overflow: hidden; ">
      <div class="modal-dialog modal-xl">
        <div
          class="modal-content popupModalimg"
          style="border: none !important"
        >
          <!-- Modal Header -->
          <!-- <div class="modal-header p-0 m-0"> -->
          <!-- <h1 class="modal-title">Modal Heading</h1> -->
          <!-- <a class="close btn btn-sm " data-dismiss="modal"> -->
          <!-- close &times; -->
          <!-- </a> -->
          <!-- </div> -->
          <!-- <a class="witBtn4" data-dismiss="modal">
            &times;
          </a> -->
          <a
            href="#close"
            title="Close"
            data-dismiss="modal"
            class="close"
            style="z-index: 1"
            >X</a
          >
          <!-- Modal body -->
          <div class="modal-body" style="background-color:#282525;">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-12">
                  <div class="row">
                    <div
                      class="col-sm-3 text-center"
                      style="height: 90vh; overflow-y:scroll"
                      id="stylScroll"
                    >
                      <div class="img-thumbnail1 img-thumb">
                        <img
                          id="home"
                          class=" gallery"
                          src="images/amazonevent.jpg"
                          alt=""
                        />
                      </div>
                      <div class="img-thumbnail1 img-thumb">
                        <img
                          class=" gallery"
                          src="images/amazon-event-tamilnadu-award.jpg"
                          alt=""
                        />
                      </div>
                      <div class="img-thumbnail1 img-thumb">
                        <img
                          class=" gallery"
                          src="images/rbs_wit_event.jfif"
                          alt=""
                        />
                      </div>
                      <div class="img-thumbnail1 img-thumb">
                        <img class=" gallery" src="images/speaker.jpg" alt="" />
                      </div>
                      <div class="img-thumbnail1 img-thumb">
                        <img
                          class=" gallery"
                          src="images/speaker1.jpg"
                          alt=""
                        />
                      </div>
                      <div class="img-thumbnail1 img-thumb">
                        <img
                          class=" gallery "
                          src="images/speaker2.jpg"
                          alt=""
                        />
                      </div>
                      <div class="img-thumbnail1 img-thumb">
                        <img
                          class=" gallery"
                          src="images/speaker3.jpg"
                          alt=""
                        />
                      </div>
                      <div class="img-thumbnail1 img-thumb">
                        <img class=" gallery" src="images/speaker.jpg" alt="" />
                      </div>
                      <div class="img-thumbnail1 img-thumb">
                        <img
                          class=" gallery"
                          src="images/speaker3.jpg"
                          alt=""
                        />
                      </div>
                      <div class="img-thumbnail1 img-thumb">
                        <img class=" gallery" src="images/speaker.jpg" alt="" />
                      </div>
                      <div class="img-thumbnail1 img-thumb">
                        <img class=" gallery" src="images/speaker.jpg" alt="" />
                      </div>
                      <div class="img-thumbnail1 img-thumb">
                        <img
                          class=" gallery"
                          src="images/speaker3.jpg"
                          alt=""
                        />
                      </div>
                      <div class="img-thumbnail1 img-thumb ">
                        <img
                          class=" gallery"
                          src="images/speaker1.jpg"
                          alt=""
                        />
                      </div>
                      <div class="img-thumbnail1 img-thumb">
                        <img class="gallery" src="images/speaker.jpg" alt="" />
                      </div>
                    </div>
                    <div class="col-sm-9">
                      <div class="main-div">
                        <img class="gallery-img" src="images/amazonevent.jpg" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal footer -->
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">
              Close
            </button>
          </div> -->
        </div>
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
      src="//code.jquery.com/jquery-1.11.0.min.js"
    ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>

      type="text/javascript"
      src="//code.jquery.com/jquery-migrate-1.2.1.min.js"
    ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
/js/slick.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/js/newsinsitesslick.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      $(document).ready(function() {
        $('.gallery').click(function() {
          var src = $(this).attr('src');
          $('.gallery-img').attr('src', src);
        });
      });

      $('img.gallery').on('click', function() {
        $('img.gallery').removeClass('active_images');
        $(this).addClass('active_images');
      });

      //Home button active on page load
      $(document).ready(function() {
        $('#home.gallery').addClass('active_images');
      });
    <?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
