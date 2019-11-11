<?php
/* Smarty version 3.1.33, created on 2019-07-31 13:46:54
  from 'C:\xampp\htdocs\sanjeev\presentation\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d417faeb6c308_54961120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44dcfbde3ed3373a9016afbecb6cb031bbc27346' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sanjeev\\presentation\\templates\\login.tpl',
      1 => 1564573612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d417faeb6c308_54961120 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\sanjeev\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"loginRegistration",'assign'=>"obj"),$_smarty_tpl);?>

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
     <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/libs/jquery/jquery.min.js"><?php echo '</script'; ?>
>  
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"
    />
    <link rel="stylesheet" type="text/css" href="styles/login.css" />
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
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
    <?php echo '<script'; ?>

      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
    ><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="libs/font-awesome/css/all.min.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="js/login.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/loginRegister.js"><?php echo '</script'; ?>
>
    <title>WIT|Login</title>
  </head>
  <body>
    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container-fluid px-0">
      <div
        class="container-fluid imageBackgroundLogin bg-blue mh-100"
        style="background-image: url(images/women.jpg);"
      >
        <div class="overlay"></div>
        <div class="row">
          <div class="col-md-1"></div>
          <div class=" col-md-5 justify-content-center mt-md-3 py-5 ">
            <!-- <h1 class="text-center">WHO WE ARE</h1> -->
            <p
              class="mt-md-3  text-justify px-5"
              style="color: white !important;"
            >
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
          <div class="col-md-4  justify-content-center mb-md-5 py-5 ">
            <div class="container  bg-dark text-white py-3 loginCard">
              <div class="container-fluid py-0 px-0">
                <div class="container logincontainer">
                  <form class="form-horizontal" action="">
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email"
                        >Email:</label
                      >
                      <div class="col-sm-10">
                        <input
                          type="email"
                          class="form-control"
                          id="email"
                          placeholder="Enter email"
                          name="email"
                        />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="pwd"
                        >Password:</label
                      >
                      <div class="col-sm-10">
                        <input
                          type="password"
                          class="form-control"
                          id="pwd"
                          placeholder="Enter password"
                          name="pwd"
                        />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                          <label
                            ><input type="checkbox" name="remember" /> Remember
                            me</label
                          >
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row col-md-12">
                        <div class="col-md-4 col-lg-3 px-0">
                          <button class="btn btn-md loginBtn">
                            LogIn
                          </button>
                        </div>
                        <div class="col-md-2 col-lg-3 px-0 text-center">
                          OR
                        </div>
                        <div class="col-md-4 col-lg-3 px-0">
                          <button class="btn btn-md linkedinBtn">
                            Linkedin
                          </button>
                        </div>
                      </div>
                      <div class="row col-md-12">
                        <div class="col-md-4 col-lg-3 px-0">
                          <div class="btn btn-md forgotBtn">
                            <a href="<?php echo base_url();?>
/forgotPass">Forgot Password</a>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                    <div class="container-fluid justify-content-center">
                      <p>
                        Don't have account yet?
                        <span class="text-primary newAccount">Create New</span>
                      </p>
                    </div>
                  </form>
                </div>
                <div class="container signupcontainer">
                  <div class="d-flex flex-column"></div>
                </div>
              </div>
            </div>
            <div class="container-fluid  bg-dark text-white py-3 signUpCard">
              <div class="container-fluid py-0 px-0">
                <div class="container logincontainer">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label class="control-label col-sm-6" for="firstName"
                        >First Name:</label
                      >
                      <div class="col-sm-10">
                        <input
                          type="text"
                          class="form-control"
                          id="firstName"
                          placeholder="Firstname"
                          name="email"
                        />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-6" for="lastName"
                        >Last Name:</label
                      >
                      <div class="col-sm-10">
                        <input
                          type="text"
                          class="form-control"
                          id="lastName"
                          placeholder="Lastname"
                          name="email"
                        />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-6" for="email"
                        >Email:</label
                      >
                      <div class="col-sm-10">
                        <input
                          type="email"
                          class="form-control"
                          id="emailSignUp"
                          placeholder="Email"
                          name="email"
                        />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-6" for="phone"
                        >Phone:</label
                      >
                      <div class="col-sm-10">
                        <input
                          type="phone"
                          class="form-control"
                          id="phone"
                          placeholder="Phone"
                          name="email"
                        />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-sm-6">
                        <label class="control-label col-sm-6" for="gender"
                          >GENDER:</label
                        >
                        <div class="col-sm-6">
                          <select
                            class="form-control"
                            id="exampleFormControlSelect1"
                          >
                            <option>Male</option>
                            <option>FeMale</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group col-sm-6">
                        <label class="control-label col-sm-10" for="joineetype"
                          >Want To Join As:</label
                        >
                        <div class="col-sm-6">
                          <select
                            class="form-control"
                            id="exampleFormControlSelect2"
                          >
                            <option>Mentor</option>
                            <option>Volunteer</option>
                            <option>Career</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="pwd"
                        >Password:</label
                      >
                      <div class="col-sm-10">
                        <input
                          type="password"
                          class="form-control"
                          id="pwdSignup"
                          placeholder="Password"
                          name="pwd"
                        />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                          <label
                            ><input type="checkbox" name="remember" /> Remember
                            me</label
                          >
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row justify-content-center">
                        <div class="col-md-4 col-lg-3 px-0">
                          <div class="btn btn-md signUpBtn">
                            SignUp
                          </div>
                        </div>
                        <div class="col-md-2 col-lg-3 px-0 text-center">
                          OR
                        </div>
                        <div class=" col-md-4 col-lg-3 px-0">
                          <button class="btn btn-md linkedinBtn">
                            Linkedin
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="container-fluid justify-content-center">
                      <p>
                        Don't have account yet?
                        <span class="text-primary newAccount">Create New</span>
                      </p>
                    </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
  </body>
</html>
<?php }
}
