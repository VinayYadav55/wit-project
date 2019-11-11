<?php
/* Smarty version 3.1.33, created on 2019-07-21 13:32:03
  from 'C:\xampp\htdocs\rbs\presentation\templates\contactUs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d346953c6d312_32876009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6bf1dba1ce69b7f2dc2e7baa1959b08e14cc87e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rbs\\presentation\\templates\\contactUs.tpl',
      1 => 1563644749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d346953c6d312_32876009 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" type="text/css" href="styles/contact.css" />

    <title>WIT|ContactUs</title>
  </head>
  <body>
    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container-fluid">
      <div class="container">
        <div class="row my-5 no-gutters ">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <h6 class="Heading text-center py-3">CONTACT US</h6>
            <form action="#" method="POST">
              <div class="form-group ">
                <label for="uname">First Name:</label>
                <input
                  type="text"
                  class="form-control"
                  id="uname"
                  placeholder="Enter FirstName"
                  name="uname"
                  required
                />
              </div>
              <div class="form-group">
                <label for="lname">Last Name:</label>
                <input
                  type="text"
                  class="form-control"
                  id="lname"
                  placeholder="Enter Lastname"
                  name="lname"
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

              <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input
                  type="number"
                  class="form-control"
                  id="phone"
                  placeholder="Enter phone"
                  name="phone"
                  required
                />
              </div>

              <div class="form-group">
                <label for="pwd">Company Name:</label>
                <input
                  type="text"
                  class="form-control"
                  id="company"
                  placeholder="Enter company name"
                  name="company"
                  required
                />
              </div>
              <div class="form-group">
                <label for="sel1">Reason of Enquiry</label>
                <select class="form-control" id="sel1">
                  <option selected="true" disabled="disabled"> Select</option>
                  <option>Mentoring</option>
                  <option>Sponsership</option>
                  <option>Carrer</option>
                  <option>School & Colleges</option>
                  <option>Others</option>
                </select>
              </div>

              <div class="form-group">
                <label for="comment">Your Message:</label>
                <textarea class="form-control" rows="5" id="comment"></textarea>
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
                <a href="#" type="submit" class="text-center btn  witBtn px-3">
                  SUBMIT
                </a>
              </div>
            </form>
          </div>
          <div class="col-md-3"></div>
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
