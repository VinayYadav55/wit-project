<?php
/* Smarty version 3.1.33, created on 2019-08-07 12:32:23
  from 'C:\xampp\htdocs\djdfbf\sanjeev\presentation\templates\all_listed_jobs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d4aa8b723ebd5_28589668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '931e2a5f84a9cc17b81d5e354e2606d381ead61a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\presentation\\templates\\all_listed_jobs.tpl',
      1 => 1565173938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4aa8b723ebd5_28589668 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
?>
 <?php echo smarty_function_load_presentation_object(array('filename'=>'jobPortal','assign'=>'obj'),$_smarty_tpl);?>

 <div>abc</div>
  <div class="row">
    <div class="col-md-2">
      <img
        class=""
        src="images/mentor.jpg"
        height="100px"
        width="100px"
      />
    </div>
    <div class="col-md-10">
      <div>
        <a href="<?php echo base_url();?>
/job_title/job_id=1" class="jobTitle">Senior Team manager</a>
      </div>
      <div class="companyName py-2">Cargil</div>
      <ul class="nav">
        <li class="nav-item listBorder pr-2">
          <i class="fas fa-map-marker"></i> Bangalore/Bengaluru
        </li>
        <li class="nav-item listBorder pr-2">
          &nbsp; <i class="fas fa-briefcase"></i> 7-10 years
        </li>
      </ul>
    </div>
  </div>
  <hr /><?php }
}
