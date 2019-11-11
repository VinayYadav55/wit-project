<?php
/* Smarty version 3.1.33, created on 2019-07-21 16:14:56
  from 'C:\xampp\htdocs\rbs\presentation\templates\mentorform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d348f807419a6_22762644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30185ff75209cf9154dee04a2c464b02c34e943b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rbs\\presentation\\templates\\mentorform.tpl',
      1 => 1563725659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d348f807419a6_22762644 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" type="text/css" href="styles/mentoring.css" />

    <title>Home|WIT</title>
    <style>
      .btnn {
        background-color: #e52b50 !important;
        color: white !important;
      }
    </style>
  </head>
  <body>
    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container-fluid">
      <div class="container">
        <div class="row my-5 ">
          <div class="col-md-2"></div>
          <div class="col-md-6" style="bacground-color: #f6f6f6">
            <h6 class="text-center Heading py-2">Mentor Form</h6>
            <form action="#">
              <div class="form-group">
                <label for="uname">Name:</label>
                <input
                  type="text"
                  class="form-control"
                  id="uname"
                  placeholder="Enter Name"
                  name="uname"
                  required
                />
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  placeholder="Enter Email"
                  name="email"
                  required
                />
              </div>
              <!-- // <div class="form-group">
              //   <label for="catagory">Category:</label>
              //   <input
              //     type="text"
              //     class="form-control"
              //     id="catagory"
              //     placeholder="Enter catagory"
              //     name="catagory"
              //     required
              //   />
              // </div> -->
              <div class="form-group">
                  <label for="experience">Year of experience:</label>
                  <select id="experience" class="form-control">
                    <option selected>Select</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                  </select>
                </div>

              <div class="form-group">
                <label for="pwd">Contact:</label>
                <input
                  type="text"
                  class="form-control"
                  id="contact"
                  placeholder="Enter Contact"
                  name="contact"
                  required
                />
              </div>
              <div class="form-group form-check">
                <label class="form-check-label">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    name="remember"
                    required
                  />
                  Term & Condition.
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">
                    Check this checkbox to continue.
                  </div>
                </label>
              </div>
              <div class="text-center">
                <a
                  href="?mentorprofile=true"
                  type="submit"
                  class="text-center btn witBtn px-3"
                >
                  Submit
                </a>
              </div>
            </form>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
    </div>
    <!-- second part -->

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