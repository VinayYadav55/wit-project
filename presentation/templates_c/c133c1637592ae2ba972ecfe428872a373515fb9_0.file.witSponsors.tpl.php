<?php
/* Smarty version 3.1.33, created on 2019-07-22 11:09:03
  from 'C:\xampp\htdocs\rbs\presentation\templates\witSponsors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d35994f7d23d2_74170639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c133c1637592ae2ba972ecfe428872a373515fb9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rbs\\presentation\\templates\\witSponsors.tpl',
      1 => 1563725924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d35994f7d23d2_74170639 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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

    <link rel="stylesheet" type="text/css" href="styles/home.css" />

    <title>Home|WiT</title>
  </head>
  <body>
    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container">
      <div class="row">
        <div class="col-sm-12 py-5">
          <h1 class="text-center Heading">WiT SPONSORS</h1>
          <hr />
        </div>
      </div>
      <div class="row py-5">
        <div class="col-sm-4">
          <div class="card py-auto" style=" border:none;">
            <img
              class="card-img-top"
              src="images/ibm.png"
              alt="ibm"
              width="120"
              height="120"
            />
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card" style="border:none;">
            <img
              class="card-img-top"
              src="images/rbs.png"
              alt="RBS"
              width="120"
              height="120"
            />
          </div>
        </div>

        <div class="col-sm-4">
          <div class="card" style="border:none;">
            <img
              class="card-img-top"
              src="images/jcpenney.png"
              alt="jcpenney"
              width="120"
              height="120"
            />
          </div>
        </div>
      </div>
      <div class="row py-5">
        <div class="col-sm-4">
          <div class="card" style="border:none;">
            <img
              class="card-img-top"
              src="images/sapient.png"
              alt="sapient"
              width="120"
              height="120"
            />
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card" style="border:none;">
            <img
              class="card-img-top"
              src="images/spencerstuart.png"
              alt="spencerstuart"
              width="120"
              height="120"
            />
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
