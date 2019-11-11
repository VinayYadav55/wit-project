<?php
/* Smarty version 3.1.33, created on 2019-11-06 13:47:31
  from 'C:\xampp\htdocs\womenintech\presentation\templates\second_careers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc2c0e31290d1_95459320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e0c3756e2ce2aa53a4e2002b1a5cd9b5bfe006e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\womenintech\\presentation\\templates\\second_careers.tpl',
      1 => 1568276302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dc2c0e31290d1_95459320 (Smarty_Internal_Template $_smarty_tpl) {
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
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="<?php echo base_url();?>
/images/wit-favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/second_carrer.css?v=<?php echo jsversion();?>
" />
  <title>WiT | SECOND CAREER WiT WORKSTREAM</title>
</head>

<body>
  <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="secondCareerTopStyles">
    <div class="container-fluid bgimg-for-secondcareer">
      <div class="container py-3">
        <div class="row py-5">
          <div class="col-sm-12 py-5 my-5 text-center mt-5 mt-sm-0">
            <h1 class="text-center Heading py-5 mt-5 mt-sm-0">SECOND CAREER</h1>
            <hr class="hrlines" />
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid my-4 my-sm-0">
      <div class="container">
        <div class="row ">
          <div class="col-sm-12 justify-content-center text-center">
            <div class="p-0 p-sm-5  text-center secondCarrerAbout">
              There needs to be a simple way for women who’ve taken a break from
              their careers to quickly reskill themselves in the latest
              technology areas and rejoin the workforce. WiT intends to focus on
              individual skills and competencies to help such women forge a
              career by bridging the gap.
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid left2rightGrad my-5 my-sm-0">
      <div class="container">
        <div class="row p-0 p-sm-4">
          <div class="col-sm-12 justify-content-center text-center">
            <h4 class="text-center subHeading">Our Journey</h4>
            <hr class="w-25">
            <div class="p-0 p-sm-5  text-center"
              style="font-size:18px; word-spacing:2px;line-height:2rem;    font-family: sans-serif;">
              It is not an easy journey to return to workforce after a career
              break. From feeling outdated to loosing your network, women face a
              massive loss of confidence. Second careers work-stream thrives to
              enable women to accelerate their careers in technology by
              connecting them to the right jobs and mentors and help them
              upskill/re-skill themselves. In 2018, WiT released a common
              returnee program framework with defined policies and processes
              formed by amalgamation of best practices from the industry to all
              affiliate organisations for implementation. We also partnered with
              JobsforHer for Career fairs across the country for women returning
              to work.
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container py-5">
      <div class="row ">
        <div class="col-sm-12 text-center">
          <a href="<?php echo base_url();?>
/job_portal" class="btn witBtn px-3">SEARCH JOBS</a>
        </div>
      </div>
    </div>
  </div>
  <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>

</html><?php }
}
