{load_presentation_object filename="loginRegistration" assign="obj"}
<!DOCTYPE html>
<html lang="en">

<head>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147066526-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-147066526-1');
  </script>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="{base_url()}/images/wit-favicon.ico" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{base_url()}/styles/parsley.css?v={jsversion()}" />
  <link rel="stylesheet" type="text/css" href="{base_url()}/styles/login.css?v={jsversion()}" />
  <title>WiT | LOGIN</title>
</head>

<body>
  {include file='header.tpl'}
  <div class="loader"></div>
  <div class="loginTopStyles">
    <div class="bgimg-loginpage mt-5">
      <div class="container-fluid mainContainer">
        <div class="row">
          <div class="col-sm-6 pt-5 text-center loginSignupTxt">
            <div class="container" style="background-color: rgba(0, 0, 0, 0.1); height: 100%;">
              <div class="row">
                <div class="col-sm-8 offset-sm-2">
                  <p class="mt-md-3 loginTxt">
                    WomenInTech (WiT) is an endeavor which aims to reach out to
                    women across age-groups schools, colleges, women starting their
                    careers, working women, women restarting their careers, stay at
                    home moms and others to help them realize their careers in
                    science, technology, engineering and mathematics thereby building a more inclusive ecosystem.
                  </p>
                </div>
              </div>
            </div>

          </div>
          <div class="col-sm-6 pt-5" id="lsec">
            <div class="container">
              <div class="row">
                <div class="col-sm-8 offset-sm-2 loginSignupBtns">
                  <div class="row">
                    <div class="col-sm-6 p-0 ">
                      <div class="pl-1">
                        <button
                          class="loginPagePop btn btn-block loginBtnActiveStyle loginBtnStyles btn-login">Login</button>
                      </div>
                    </div>
                    <div class="col-sm-6 p-0">
                      <div class="pr-1">
                        <button class="signupPagePop btn btn-signup btn-block signupBtnStyles">Sign Up</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 offset-sm-2 loginPage">
                <div class="p-4 loginsignupPageStyles">
                  <h5 class="text-center signuppageTxt">Login</h5>
                  <div class="form-group">
                    <label class="control-label" for="email">Email<span class="text-danger">*</span></label>
                    <input type="text" class="form-control email" id="email" name="email" placeholder="Enter your email"
                      data-parsley-type="email" data-parsley-trigger="keyup" required />
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="pwd">Password<span class="text-danger">*</span></label>
                    <input type="password" class="form-control pwd" id="pwd" name="pwd"
                      placeholder="Enter your password" required />
                  </div>
                  <div class="text-right">
                    <a href="{base_url()}/forgotPass" class="forgotTxt">Forgot Password</a>
                  </div>
                  <div class="form-group py-1">
                    <button type="submit" class="btn  btn-block loginBtn userLogin">
                      Login
                    </button>
                  </div>
                  <div class="container-fluid justify-content-center">
                    <p class="text-white">
                      Don't have account yet?
                      <a class="text-success signupPagePop">Create New</a>
                    </p>
                  </div>
                </div>

                <p class="loginPageText text-white my-5 my-sm-0 p-5 text-center">
                  WomenInTech (WiT) is an endeavor which aims to reach out to
                  women across age-groups schools, colleges, women starting their
                  careers, working women, women restarting their careers, stay at
                  home moms and others to help them realize their careers in
                  science, technology, engineering and mathematics thereby building a more inclusive ecosystem.
                </p>

              </div>
              <div class="col-sm-8 offset-sm-2 signupPage" style="display:none;">
                <div class="p-4 loginsignupPageStyles">
                  <h5 class="text-center signuppageTxt">Signup</h5>
                  <div class="form-row">
                    <div class="form-group col-sm-6">
                      <label class="control-label " for="firstName">First Name<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="firstName" placeholder="First Name" name="fname"
                        data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" required
                        style="text-transform:capitalize;" />
                    </div>
                    <div class="form-group col-sm-6">
                      <label class="control-label " for="lastName">Last Name<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="lname"
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
                    <div class="input-group ">
                    <div class="input-group-prepend">
                    <span class="input-group-text">+91</span></div>
                    <input type="phone" class="form-control" id="phone" placeholder="Phone" name="phone" minlength="10" maxlength="10"
                      data-parsley-type="digits" data-parsley-trigger="keyup" required />
                  </div>
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
                        <option>Candidate</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label " for="pwd">Password<span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="pwdSignup" placeholder="Password" name="pwd"
                      data-parsley-minlength="8" data-parsley-uppercase="1" data-parsley-lowercase="1"
                      data-parsley-number="1" data-parsley-special="1" data-parsley-trigger="keyup" required />
                  </div>
                    <div class="form-group form-check">
                    <label class="form-check-label fontsForTerms" style="vertical-align: middle;">
                      <input class="form-check-input" type="checkbox" class="iconsForsidebar" name="remember" id="checkBoxID" required> Yes, I have read and agree to the WiT’s terms of use,  privacy policy and <a href="" data-toggle="modal" data-target="#myModal"
                        style="text-decoration: underline;">candidate privacy notice</a>
                    </label>
                  </div>
                  <div class="form-group py-2">
                    <button class="btn btn-md signUpBtn" id="buttonID" disabled>
                      Sign Up
                    </button>
                  </div>
                  <div class="container-fluid justify-content-center">
                    <p class="text-white">
                      Already have an account?
                      <a class="text-success loginPagePop">Login!</a>
                    </p>
                  </div>
                </div>
                
                
                
                
                 <!-- The Modal -->
              <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-body">
                      <div class="container-fluid py-3" style="font-size: 0.7rem; letter-spacing: 0.05rem;">
                        <div class="row">
                          <div class="col-sm-12">
                              <h5 class="text-center">Candidate Privacy Notice</h5>
                            <div class="p-2">
                              Please allow up to 10 minutes to complete your application ensuring you complete all
                              information and questions accurately. There is no ability to go back to amend any part of
                              your application - once you move on to the next step selecting the back button will cancel
                              your application and you will need to re-start. ( Pls check if this is true in the case of
                              WiT process)
                            </div>
                            <div class="p-2">
                              The next step will require you to upload your CV to support your application, please
                              ensure you have one available before you continue.
                            </div>


                            <div class="p-2">
                              Based on the information below, if you wish to withdraw your consent at any time, please
                              contact us at,<br> <a
                                href="https://mail.google.com/mail/?view=cm&fs=1&to=info@womenintech.co.in"
                                target="_blank">
                                <i class="far fa-envelope" style="font-size:14px;"></i> info@womenintech.co.in</a>
                            </div>

                            <div class="p-2">
                              WiT and its affiliate organisations value the diversity of workforce. By filling out this
                              application form you may reveal special categories of information about yourself (e.g.
                              racial or ethnic origin, disability, gender etc) which we may use for diversity monitoring
                              practices.
                            </div>


                            <div class="p-2">
                              In order to collect and process special categories of information for this purpose, we
                              (and our trusted partners /affiliates require your explicit consent.
                            </div>

                            <div class="p-2">
                              Please check the relevant box to indicate whether or not you consent to us processing
                              special categories of information for the purpose of diversity monitoring. If you choose
                              not to provide your consent you may instead proceed with the application form and choose
                              the option ‘prefer not to disclose’ for these questions.
                              <ol>
                                <li>I have read and agree to WiT Growth Summit terms of use, privacy policy and
                                  candidate privacy notice and I acknowledge and agree that they may transfer the
                                  information I have supplied to countries both within and outside the country for the
                                  purposes of processing my application. </li>
                                <li>
                                  I would like to receive emails with relevant job opportunities and other
                                  recruitment related information from WiT , its partner organisations or any of its
                                  subsidiary companies.
                                </li>
                                <li>
                                  I CONSENT to WiT , its partners and affiliate organisations for processing special
                                  categories of information for the purposes of diversity monitoring practices.
                                </li>
                              </ol>
                            </div>


                            <div class="p-2">
                              <h5 class=""><b>Diversity Details</b></h5>
                              We value diversity and so do our partner /participating organisations and are committed to
                              creating a working environment that is inclusive to all. In order to attract and retain
                              talent and enable employees to reach their full potential we need to embrace people's
                              differences, whether they are related to physical characteristics, such as gender, race,
                              age or disability, or related to their sexual preferences, beliefs and opinions. It's
                              important to our success that we recruit the best people from the widest available pool of
                              talent.
                            </div>
                            <div class="p-2">
                              To help us please answer all questions. By completing these questions you may reveal
                              special categories of information about yourself (e.g. racial or ethnic origin,
                              disability, gender etc ).
                            </div>
                            <div class="p-2">
                              If you haven’t consented to the capture of this information at the start of your
                              application, choose the ‘prefer not to disclose’ option for each question. All answers
                              remain strictly confidential, do not form part of your application and will not be visible
                              to anyone throughout the recruitment process.
                            </div>
                            <div class="p-2">
                              If you require particular adjustments to support your application, such as any building
                              access requirements, please contact us at <br>
                              <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info@womenintech.co.in"
                                target="_blank">
                                <i class="far fa-envelope" style="font-size:14px;"></i> info@womenintech.co.in</a> for
                              further information
                              on how we can make the recruitment process as comfortable as possible for you.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  </div>
  {include file='footer.tpl'}
</body>

<script src="{base_url()}/js/vipanan_admin.js?v={jsversion()}"></script>
<script src="{base_url()}/js/login.js?v={jsversion()}"></script>
<script src="{base_url()}/libs/parsley/parsley.min.js?v={jsversion()}"></script>

</html>