<?php
/* Smarty version 3.1.33, created on 2019-07-21 16:15:02
  from 'C:\xampp\htdocs\rbs\presentation\templates\menteeform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d348f864ed2f6_56910673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e520b32b4e6208cbf3d5af961c3faf0d52719d82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rbs\\presentation\\templates\\menteeform.tpl',
      1 => 1563725693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d348f864ed2f6_56910673 (Smarty_Internal_Template $_smarty_tpl) {
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
            <h6 class="Heading text-center py-2 ">Mentee Form</h6>
            <form action="#">
              <div class="form-group">
                <label for="name">Name:</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  placeholder="Enter Name"
                  name="name"
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
              <!-- <div class="form-group">
                <label for="experience">Year of Experience:</label>
                <input
                  type="number"
                  class="form-control"
                  id="experience"
                  placeholder="Enter catagory"
                  name="experience"
                  required
                />
              </div> -->

              <div class="form-group">
                <label for="contact">Contact:</label>
                <input
                  type="text"
                  class="form-control"
                  id="contact"
                  placeholder="Enter contact"
                  name="contact"
                  required
                />
              </div>
              <div class="form-group">
                <label for="address">Address:</label>
                <input
                  type="text"
                  class="form-control"
                  id="address"
                  placeholder="Flat number, Near xyz, abc building, street etc..."
                  name="address"
                  required
                />
              </div>
              <div class="form-group ">
                <label for="inputState">State:</label>
                <select id="inputState" class="form-control">
                  <option selected>Select State</option>
                  <option>DELHI</option>
                  <option>HARYANA</option>
                  <option>MADHYA PRADESH</option>
                  <option>KARNATAKA</option>
                  <option>MAHARASHTA</option>
                </select>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputState">City:</label>
                  <select id="inputState" class="form-control">
                    <option selected>Select City</option>
                    <option>INDORE</option>
                    <option>DELHI</option>
                    <option>GURGAON</option>
                  </select>
                </div>
                <!-- <div class="form-group">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity" />
              </div> -->
                <div class="form-group col-md-6">
                  <label for="inputZip">Zip:</label>
                  <input type="text" class="form-control" id="inputZip" />
                </div>
              </div>
              <div class="form-group form-check">
                <label class="form-check-label">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    name="remember"
                    required
                  />
                  Term & Condition
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">
                    Check this checkbox to continue.
                  </div>
                </label>
              </div>
              <div class="text-center">
                <a
                  href="?menteeprofile=true"
                  type="submit"
                  class="text-center btn  witBtn px-3"
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
  </body>
</html>
<?php }
}
