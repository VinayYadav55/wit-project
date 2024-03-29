<?php
/* Smarty version 3.1.33, created on 2019-08-30 23:05:13
  from '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d69aba9cdb3b3_99575583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb90512004533c96714c33da113fd9fe6cd50b98' => 
    array (
      0 => '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/login.tpl',
      1 => 1567204799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d69aba9cdb3b3_99575583 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/labiknmy/public_html/vipananwebtest/presentation/smarty_plugins/function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"loginRegistration",'assign'=>"obj"),$_smarty_tpl);?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="images/wit-favicon.ico" type="image/x-icon" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>
/styles/parsley.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/login.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>
/libs/font-awesome/css/all.min.css" />

  <title>WIT|Login</title>
</head>

<body>
  <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="overlay-loader-div">
    <img src="images/pinkloader.gif" width="100" height="100" class="overlay-img-loader" alt="" />
  </div>
  <div style="margin-top:7.7rem !important">
  <div class="bgimg-loginpage mt-5">
    <!-- <div class="overlay-loginpage"></div> -->
    <div class="container-fluid mainContainer"
      style="background-color: rgba(0, 0, 0, 0.5); height: 100%;">
      <div class="row">
        <div class="col-sm-6 pt-5 text-center">
          <div class="container" style="background-color: rgba(0, 0, 0, 0.1); height: 100%;">
            <div class="row">
              <div class="col-sm-8 offset-sm-2">
                <img src="images/witlogo-logo.png" width="200" height="100" alt="">
                <p class="mt-md-3  text-justify" style="color: white !important;">
                  WomenInTech (WiT) is an endeavor which aims to reach out to women
                  across age-groups- Schools, Colleges, women starting their
                  careers, working women, women restarting their careers, stay at
                  home moms and others- and help realize their careers in technology
                  thereby making the Technology ecosystem more inclusive.WomenInTech
                  (WiT) is an endeavor which aims to reach out to women across
                  age-groups- Schools, Colleges, women starting their careers,
                  working women, women restarting their careers, stay at home moms
                  and others- and help realize their careers in technology thereby
                  making the Technology ecosystem more inclusive.
                </p>
              </div>
            </div>
          </div>

        </div>
        <div class="col-sm-6 pt-5" id="lsec">
          <div class="container 
                " style="background-color: rgba(0, 0, 0, 0.1);">
            <div class="row">
              <div class="col-sm-8 offset-sm-2">
                <div class="row">
                  <div class="col-sm-6 p-0 ">
                    <div class="pl-1">
                      <button
                        class="loginPagePop btn btn-block loginBtnActiveStyle loginBtnStyles btn-login">Login</button>
                    </div>
                  </div>
                  <div class="col-sm-6 p-0">
                    <div class="pr-1">
                      <button class="signupPagePop btn btn-signup btn-block signupBtnStyles">Signup</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8 offset-sm-2 loginPage">
              <div class="p-4 loginsignupPageStyles">
                <div class="form-group">
                  <label class="control-label" for="email">Email<span class="text-danger">*</span></label>
                  <input type="text" class="form-control email" id="email" name="email" placeholder="Enter your email"
                    data-parsley-type="email" data-parsley-trigger="keyup" required />
                </div>
                <div class="form-group">
                  <label class="control-label" for="pwd">Password<span class="text-danger">*</span></label>
                  <input type="password" class="form-control pwd" id="pwd" name="pwd" placeholder="Enter your password"
                    required />
                </div>
                <div class="text-right">
                  <a href="<?php echo base_url();?>
/forgotPass" class="">Forgot Password</a>
                </div>
                <div class="form-group py-1">
                  <button type="submit" class="btn  btn-block loginBtn userLogin">
                    LogIn
                  </button>
                </div>
                <div class="container-fluid justify-content-center">
                  <p class="text-white">
                    Don't have account yet?
                    <a class="text-success signupPagePop">Create New</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-8 offset-sm-2 signupPage" style="display:none;">
              <div class="p-4 loginsignupPageStyles">
                <div class="form-row">
                  <div class="form-group col-sm-6">
                    <label class="control-label " for="firstName">First Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="firstName" placeholder="Firstname" name="fname"
                      data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" required
                      style="text-transform:capitalize;" />
                  </div>
                  <div class="form-group col-sm-6">
                    <label class="control-label " for="lastName">Last Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="lastName" placeholder="Lastname" name="lname"
                      data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" required
                      style="text-transform:capitalize;" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label " for="email">Email<span class="text-danger">*</span></label>
                  <input type="email" class="form-control" id="emailSignUp" placeholder="Email" name="email"
                    data-parsley-type="email" data-parsley-trigger="keyup" required />
                </div>
                <div class="form-group">
                  <label class="control-label" for="phone">Phone<span class="text-danger">*</span></label>
                  <input type="phone" class="form-control" id="phone" placeholder="Phone" name="phone" minlength="10"
                    data-parsley-type="digits" data-parsley-trigger="keyup" required />
                </div>
                <div class="form-row">
                  <div class="form-group col-sm-6">
                    <label class="control-label" for="gender">Gender<span class="text-danger">*</span></label>
                    <select class="form-control" id="exampleFormControlSelect1" required>
                      <option value="" selected="true" disabled>Select
                      </option>
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div>

                  <div class="form-group col-sm-6">
                    <label class="control-label" for="joineetype">Want To Join As<span
                        class="text-danger">*</span></label>
                    <select class="form-control" id="exampleFormControlSelect2" required>
                      <option value="" selected="true" disabled>Select
                      </option>
                      <option>Mentor</option>
                      <option>Volunteer</option>
                      <option>Candidates</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label " for="pwd">Password<span class="text-danger">*</span></label>
                  <input type="password" class="form-control" id="pwdSignup" placeholder="Password" name="pwd"
                    data-parsley-minlength="8" data-parsley-uppercase="1" data-parsley-lowercase="1"
                    data-parsley-number="1" data-parsley-special="1" data-parsley-trigger="keyup" required />
                </div>
                <div class="form-group py-2">
                  <button class="btn btn-md signUpBtn">
                    SignUp
                  </button>
                </div>
                <div class="container-fluid justify-content-center">
                  <p class="text-white">
                    Already have an account?
                    <a class="text-success loginPagePop">Login!</a>
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
  </div>
  <!-- <div class="container-fluid p-0 m-0">
    <div class="container-fluid imageBackgroundLogin bg-blue mh-100"
      style="background-image: url('images/wit_website_images/background_image_seven.jpg');">
      <div class="overlay"></div>
      <div class="row">
        <div class="" style="height: 100px; width:100%;"></div>
        <div class="col-md-1"></div>
        <div class="col-md-5 justify-content-center mt-md-3 py-5 ">
          <p class="mt-md-3  text-justify px-5" style="color: white !important;">
            WomenInTech (WiT) is an endeavor which aims to reach out to women
            across age-groups- Schools, Colleges, women starting their
            careers, working women, women restarting their careers, stay at
            home moms and others- and help realize their careers in technology
            thereby making the Technology ecosystem more inclusive.WomenInTech
            (WiT) is an endeavor which aims to reach out to women across
            age-groups- Schools, Colleges, women starting their careers,
            working women, women restarting their careers, stay at home moms
            and others- and help realize their careers in technology thereby
            making the Technology ecosystem more inclusive.
          </p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-4  justify-content-center mb-md-5 py-5">
          <div class=" bg-dark text-white py-3 loginCard">
            <div class="container-fluid py-0 px-0">
              <div class="container logincontainer">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group col-sm-10">
                      <label class="control-label" for="email">Email<span class="text-danger">*</span></label>
                      <input type="text" class="form-control email" id="email" name="email"
                        placeholder="Enter your email" data-parsley-type="email" data-parsley-trigger="keyup"
                        required />
                    </div>
                    <div class="form-group col-sm-10 m-0">
                      <label class="control-label" for="pwd">Password<span class="text-danger">*</span></label>
                      <input type="password" class="form-control pwd" id="pwd" name="pwd"
                        placeholder="Enter your password" required />
                    </div>
                    <div class="col-sm-10  text-right">
                      <a href="<?php echo base_url();?>
/forgotPass" class="">Forgot Password</a>
                    </div>
                    <div class="col-sm-10 py-3">
                      <div class="form-group">
                        <button type="submit" class="btn  btn-block loginBtn userLogin">
                          LogIn
                        </button>
                      </div>
                    </div>
                    <div class="container-fluid justify-content-center">
                      <p>
                        Don't have account yet?
                        <span class="text-primary newAccount">Create New</span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container signupcontainer">
                <div class="d-flex flex-column"></div>
              </div>
            </div>
          </div>
          <div class="container-fluid bg-dark text-white py-3 signUpCard">
            <div class="container-fluid py-0 px-0">
              <div class="container logincontainer">
                <div class="row no-gutters">
                  <div class="col-sm-12">
                    <div class="form-group col-sm-10">
                      <label class="control-label " for="firstName">First Name<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="firstName" placeholder="Firstname" name="fname"
                        data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" required
                        style="text-transform:capitalize;" />
                    </div>
                    <div class="form-group col-sm-10">
                      <label class="control-label " for="lastName">Last Name<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="lastName" placeholder="Lastname" name="lname"
                        data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" required
                        style="text-transform:capitalize;" />
                    </div>
                    <div class="form-group col-sm-10">
                      <label class="control-label " for="email">Email<span class="text-danger">*</span></label>
                      <input type="email" class="form-control" id="emailSignUp" placeholder="Email" name="email"
                        data-parsley-type="email" data-parsley-trigger="keyup" required />
                    </div>
                    <div class="form-group  col-sm-10">
                      <label class="control-label" for="phone">Phone<span class="text-danger">*</span></label>
                      <input type="phone" class="form-control" id="phone" placeholder="Phone" name="phone"
                        minlength="10" data-parsley-type="digits" data-parsley-trigger="keyup" required />
                    </div>
                    <div class="form-group col-sm-10">
                      <label class="control-label" for="gender">Gender<span class="text-danger">*</span></label>
                      <select class="form-control" id="exampleFormControlSelect1" required>
                        <option value="" selected="true" disabled>Select
                        </option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                    </div>

                    <div class="form-group col-sm-10">
                      <label class="control-label" for="joineetype">Want To Join As<span
                          class="text-danger">*</span></label>
                      <select class="form-control" id="exampleFormControlSelect2" required>
                        <option value="" selected="true" disabled>Select
                        </option>
                        <option>Mentor</option>
                        <option>Volunteer</option>
                        <option>Career</option>
                      </select>
                    </div>

                    <div class="form-group col-sm-10">
                      <label class="control-label " for="pwd">Password<span class="text-danger">*</span></label>
                      <input type="password" class="form-control" id="pwdSignup" placeholder="Password" name="pwd"
                        data-parsley-minlength="8" data-parsley-uppercase="1" data-parsley-lowercase="1"
                        data-parsley-number="1" data-parsley-special="1" data-parsley-trigger="keyup" required />
                    </div>
                    <div class="form-group col-sm-10 pt-3">
                      <button class="btn btn-md signUpBtn">
                        SignUp
                      </button>
                    </div>
                    <div class="container-fluid justify-content-center">
                      <p>
                        Already have an account?
                        <span class="text-primary doLogin">Login!</span>
                      </p>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="" style="height: 100px; width:100%;"></div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </div> -->
  </div>
  <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/sweetalert2@8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/promise-polyfill"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
/js/vipanan_admin.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
/js/login.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
/libs/parsley/parsley.min.js"><?php echo '</script'; ?>
>

</html><?php }
}
