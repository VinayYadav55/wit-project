<?php
/* Smarty version 3.1.33, created on 2019-11-06 10:48:44
  from 'C:\xampp\htdocs\womenintech\presentation\templates\resumeUpload.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc296fce05f61_23060145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cee5ce126a5a1fb54b378bb279c2ffb000b6323' => 
    array (
      0 => 'C:\\xampp\\htdocs\\womenintech\\presentation\\templates\\resumeUpload.tpl',
      1 => 1573033528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:dashheader.tpl' => 1,
    'file:dashfooter.tpl' => 1,
  ),
),false)) {
function content_5dc296fce05f61_23060145 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:dashheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="docs-content-wrapper">
    <div class="container-fluid">
      <div class="container">
        <div class="row py-5 my-5">
          <div class="col-sm-4 offset-sm-4 py-5 my-5 bg-light " style="border: 1px solid #c5c5c5;">
            <form action="<?php echo base_url();?>
/resumeUploaded" method="post" enctype="multipart/form-data">
              <h4 class="py-4">UPDATE RESUME</h4>
              <div class="form-group">
                <input type="file" name="myfile[]" multiple="" class="form-control-file border" required> <br>
              </div>
              <button type="submit" class="btn btn-primary" name="save">Upload</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $_smarty_tpl->_subTemplateRender('file:dashfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
