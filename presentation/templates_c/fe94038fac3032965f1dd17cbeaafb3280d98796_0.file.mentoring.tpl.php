<?php
/* Smarty version 3.1.33, created on 2019-08-31 02:50:50
  from '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/mentoring.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d69e08a719ca8_28658272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe94038fac3032965f1dd17cbeaafb3280d98796' => 
    array (
      0 => '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/mentoring.tpl',
      1 => 1567219847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d69e08a719ca8_28658272 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href="images/wit-favicon.ico" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/mentoring.css" />

  <title>Home|WIT</title>
</head>

<body>
  <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   <div style="margin-top: 7.7rem !important;">
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

  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="p-5 text-center"  style="font-size: 20px;
    font-family: sans-serif;
    line-height: 2rem;
    word-spacing:2px;">
            WiT aims to help women working in technology as well as women in other career paths looking to shift to tech based roles. Also, while working in a male dominated industry, a support more accessible for women working in STEM and looking for shifting to STEM careers.
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
          <div class="p-5 text-center" style="font-size:18px; word-spacing:2px;line-height:2rem;    font-family: sans-serif;">
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
        <div class="col-md-3 ">
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

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"><?php echo '</script'; ?>
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
</body>

</html><?php }
}
