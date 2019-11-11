<?php
/* Smarty version 3.1.33, created on 2019-09-13 09:00:36
  from '/home2/labiknmy/public_html/womenintech/presentation/templates/mentoring.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7b5ab4e307a0_08072715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24af753a8c7760f3f734fd036df3538203c7f5d0' => 
    array (
      0 => '/home2/labiknmy/public_html/womenintech/presentation/templates/mentoring.tpl',
      1 => 1568275415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d7b5ab4e307a0_08072715 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
  <?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=UA-147066526-1"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-147066526-1');
  <?php echo '</script'; ?>
>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href="<?php echo base_url();?>
/images/wit-favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/mentoring.css?v=<?php echo jsversion();?>
" />

  <title>WiT | MENTORING</title>
</head>

<body>
  <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="mentoringTopStyles">
    <div class="container-fluid bgimg-for-mentoring">
      <div class="container py-3">
        <div class="row py-5">
          <div class="col-sm-12 py-5 my-5">
            <h1 class="Heading text-center py-5" style="color: white !important;">MENTORING</h1>
            <hr />
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid my-4 my-sm-0">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="p-0 p-sm-5 text-center mentoringMainAbout">
              WiT aims to help women working in technology as well as women in other career paths looking to shift to
              tech based roles. Also, while working in a male dominated industry, a support more accessible for women
              working in STEM and looking for shifting to STEM careers.
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid right2leftGrad">
      <div class="container">
        <div class="row pt-5">
          <div class="col-md-12">
            <h4 class="text-center subHeading">Our Journey</h4>
            <hr class="w-25">
            <div class="p-0 p-sm-5 text-center mentoringJourney">
              Mentoring encourages individual growth and development. WiT helps
              make a real difference in helping females to progress their career
              through Connecting, inspiring and guiding. Whether it’s a specific
              professional goal or personal development, Mentors act as a
              catalyst to help them achieve both. In 2018, WiT On-boarded 100+
              corporate India’s best Technology leaders as Mentors. We partnered
              with Project PUTHRI and Avtar group to create career
              intentionality among the underprivileged girl students. The
              mentors went through rigorous training programs and preparation program to
              mentor the girl students. WiT Mentors are mentoring more than
              13000 girl students across Indian rural schools to encourage them
              to pursue STEM education.
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- second part -->

    <div class="container-fluid my-5 py-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-md-3 ">
            <!-- href="?mentorform=true" -->
            <a data-toggle="modal" data-target="#myModal" class="btn btn-block witBtn">BECOME A
              MENTOR</a>
            <div class="modal fade" id="myModal">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <!-- <div class="modal-header">
                  <h4 class="modal-title">Modal Heading</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div> -->

                  <!-- Modal body -->
                  <div class="modal-body">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-sm-12 py-5 my-5 text-center">
                          <h4 class="text-primary">Coming Soon</h4>
                        </div>
                      </div>
                    </div>

                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>

                </div>
              </div>
            </div>

          </div>
          <div class="col-sm-2"></div>
          <div class="col-md-3 mt-4 mt-sm-0">
            <!-- href="?menteeform=true" -->
            <a data-toggle="modal" data-target="#myModal" class="btn btn-block witBtn">BECOME A
              MENTEE</a>
          </div>
          <div class="col-sm-2"></div>
        </div>
      </div>
    </div>
  </div>
  <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>

</html><?php }
}
