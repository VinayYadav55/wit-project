<?php
/* Smarty version 3.1.33, created on 2019-07-21 13:21:26
  from 'C:\xampp\htdocs\rbs\presentation\templates\mentoring.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3466d6f17c37_46325072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd4910ea235a3f26f40d88e667a372a48375de84' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rbs\\presentation\\templates\\mentoring.tpl',
      1 => 1563715281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d3466d6f17c37_46325072 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" type="text/css" href="styles/mentoring.css" />

    <title>Home|WIT</title>
  </head>
  <body>
    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 py-3">
          <h1 class="Heading text-center">MENTORING</h1>
          <hr />
        </div>
      </div>
    </div>
    <div class="container-fluid  left2rightGrad">
      <div class="container">
        <div class="row pt-5">
          <div class="col-md-6">
            <h1 class="subHeading text-center">About Us</h1>
            <p class="p-5 spacing text-justify">
             WiT aims to help women working in technology as well as women in other career paths looking to shift to tech based roles. Also, while working in a male dominated industry, a support system of peers and mentors becomes essential and the community at WiT makes this support more accessible. 
            </p>
          </div>
          <div class="col-md-6 mb-5">
            <img src="images/women2.jpg" class="img-fluid" />
          </div>
        </div>
      </div>
    </div>
    <!-- second part -->

    <div class="container-fluid mt-5 pt-5 right2leftGrad">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-xl-6">
            <img src="images/womentalking.jpg" class="img-fluid" />
          </div>
          <div class="col-lg-6 col-xl-6">
            <h1 class=" text-center subHeading">Journey</h1>
            <p class="p-5 spacing text-justify">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid my-5 py-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-md-3 ">
            <a href="?mentorform=true" class="btn btn-block witBtn"
              >BECOME MENTOR</a
            >
          </div>
          <div class="col-sm-2"></div>
          <div class="col-md-3 ">
            <a href="?menteeform=true" class="btn btn-block witBtn"
              >BECOME MENTEE</a
            >
          </div>
          <div class="col-sm-2"></div>
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
  </body>
</html>
<?php }
}
