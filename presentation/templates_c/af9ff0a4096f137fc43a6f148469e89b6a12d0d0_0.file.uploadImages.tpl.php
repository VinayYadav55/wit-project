<?php
/* Smarty version 3.1.33, created on 2019-08-04 13:53:41
  from 'C:\xampp\htdocs\sanjeev\presentation\templates\uploadImages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d46c7457aabf7_58457732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af9ff0a4096f137fc43a6f148469e89b6a12d0d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sanjeev\\presentation\\templates\\uploadImages.tpl',
      1 => 1564919618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d46c7457aabf7_58457732 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\sanjeev\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'uploadImages','assign'=>'obj'),$_smarty_tpl);?>

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
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.css"
      integrity="sha256-sOzekWI0idT6INhELxtD6PppBzQpW7L8cGjCa4h7WsM="
      crossorigin="anonymous"
    /> -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css"
      integrity="sha256-PIRVsaP4JdV/TIf1FR8UHy4TFh+LiRqeclYXvCPBeiw="
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"
    />
    
    <link rel="stylesheet" href="<?php echo base_url();?>
/styles/job_portal_styles.css" />
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/libs/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
/js/job_portal_dashboard.js"><?php echo '</script'; ?>
>
    <title>WIT|PORTAL|DASHBOARD</title>
    <style type="text/css">
      form {
          width: 30%;
          margin: 100px auto;
          padding: 30px;
          border: 1px solid #555;
        }
        input {
          width: 100%;
          border: 1px solid #f1e1e1;
          display: block;
          padding: 5px 10px;
        }
        button {
          border: none;
          padding: 10px;
          border-radius: 5px;
        }
        table {
          width: 60%;
          border-collapse: collapse;
          margin: 100px auto;
        }
        th,
        td {
          height: 50px;
          vertical-align: center;
          border: 1px solid black;
        }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form action="<?php echo base_url();?>
/uploadImage" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile[]" multiple=""> <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div>
  </body>
</html>
<?php }
}
