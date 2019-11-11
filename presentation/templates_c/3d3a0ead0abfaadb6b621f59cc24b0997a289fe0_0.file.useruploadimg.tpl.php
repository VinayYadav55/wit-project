<?php
/* Smarty version 3.1.33, created on 2019-11-04 08:28:12
  from 'C:\xampp\htdocs\womenintech\presentation\templates\useruploadimg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbfd30cd63159_79735795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d3a0ead0abfaadb6b621f59cc24b0997a289fe0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\womenintech\\presentation\\templates\\useruploadimg.tpl',
      1 => 1572852392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbfd30cd63159_79735795 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\womenintech\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'userDashboard','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('userSessionDetail', $_SESSION['userDetails']);
$_smarty_tpl->_assignInScope('candidateDetail', $_smarty_tpl->tpl_vars['obj']->value->applicantDetails);?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>upload image</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css">


  <link rel="stylesheet" href="https://unpkg.com/filepond/dist/filepond.min.css">
  <style>
  /**
 * FilePond Custom Styles
 */
.filepond--drop-label {
	color: #4c4e53;
}

.filepond--label-action {
	text-decoration-color: #babdc0;
}

.filepond--panel-root {
	border-radius: 2em;
	background-color: #edf0f4;
	height: 1em;
}

.filepond--item-panel {
	background-color: #595e68;
}

.filepond--drip-blob {
	background-color: #7f8a9a;
}

.mainImageUpload{
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  
  z-index: 1;

  
}
.overlayimageUpload{
  position: fixed;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  background-color:  rgba(0, 0, 0, 0.3);
}
.cutBtnn{
  position: fixed;
  top: 5%;
  right: 5%;
  z-index: 1;
  background-color: transparent;
  color: black;
  border: 1px solid black;
  border-radius: 50%;
  padding: 2px 10px 2px 10px;
}


  </style>
</head>
<body>
  <!--
The classic file input element we'll enhance to a file pond
-->
<div class="overlayimageUpload"></div>
<button class="cutBtnn">X</button>
<div class="container-fluid mainImageUpload">
  <div class="row">
    <div class="col-sm-4 offset-sm-4">
        <form action="" method="post">
            <input type="file" 
            class="filepond"
            name="filepond"
            multiple
            data-max-file-size="3MB"
            data-max-files="3" />
            </form>
      </div>
  </div>
</div>
<!-- file upload itself is disabled in this pen -->
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="https://unpkg.com/jquery-filepond/filepond.jquery.js"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="https://unpkg.com/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.min.js"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.min.js"><?php echo '</script'; ?>
>


  <?php echo '<script'; ?>
 src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.min.js"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="https://unpkg.com/filepond/dist/filepond.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
  /*
We want to preview images, so we need to register the Image Preview plugin
*/
FilePond.registerPlugin(
	
	// encodes the file as base64 data
  FilePondPluginFileEncode,
	
	// validates the size of the file
	FilePondPluginFileValidateSize,
	
	// corrects mobile image orientation
	FilePondPluginImageExifOrientation,
	
	// previews dropped images
  FilePondPluginImagePreview
);

// Select the file input and use create() to turn it into a pond
FilePond.create(
	document.querySelector('input')
);
$('.cutBtnn').click(function(){
  window.close();
});
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
