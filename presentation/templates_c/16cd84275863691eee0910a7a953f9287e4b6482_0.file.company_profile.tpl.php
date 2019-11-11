<?php
/* Smarty version 3.1.33, created on 2019-10-23 11:27:19
  from 'C:\xampp\htdocs\womenintech\presentation\templates\company_profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db01cf7de08f2_35618108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16cd84275863691eee0910a7a953f9287e4b6482' => 
    array (
      0 => 'C:\\xampp\\htdocs\\womenintech\\presentation\\templates\\company_profile.tpl',
      1 => 1571822082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db01cf7de08f2_35618108 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\womenintech\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),1=>array('file'=>'C:\\xampp\\htdocs\\womenintech\\libs\\smarty\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
echo smarty_function_load_presentation_object(array('filename'=>'vipanan_admin','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('company', $_smarty_tpl->tpl_vars['obj']->value->companyDetail);
$_smarty_tpl->_assignInScope('companySessionDetail', $_SESSION['companySession']);?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="<?php echo base_url();?>
/images/wit-favicon.ico" type="image/x-icon">
  <title>DASHBOARD | EDIT PROFILE</title>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard_two.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
  <link href="<?php echo base_url();?>
/styles/employeer_dashboard.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
</head>

<body>
  <div class="loader"></div>
  <input type="hidden" company_id=<?php echo $_smarty_tpl->tpl_vars['company']->value['id'];?>
 class="companyId">
  <input type="hidden" class="baseUrl" baseUrl=<?php echo base_url();?>
/job_portal_dashboard> <header
    class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled">
  <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
    data-target="#sidebar">
    <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
  </a>
  <a class="logo" href="<?php echo base_url();?>
"><img src="<?php echo base_url();?>
/images/witlogo-dashboard-logo.jpeg" width="100"
      height="60" /></a>
  <button class="navbar-toggler navbar-icon waves-effect waves-light" type="button" data-toggle="collapse"
    data-target="#navbarNav"></button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav navbar-nav navbar-toolbar ml-auto">
      <li class="text-white mr-md-3 p-2 waves-effect waves-light"
        style="color: #E94161 !important; border: #E94161 1px solid">
        <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['companySessionDetail']->value['company_name']);?>

      </li>
      <li>
        <div class="dropDownMain btn-group">
          <button type="button " class="btn rounded-circle dropdown-toggle"
            style="color: #E94161 !important; border: #E94161 1px solid" data-toggle="dropdown" data-display="static"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-tie" style="font-size: 20px;"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-right dropDownMainContent mb-5">
            <h6 class="dropdown-header"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['companySessionDetail']->value['company_name']);?>
</h6>
            <h6 class="dropdown-header">
              <?php echo $_smarty_tpl->tpl_vars['companySessionDetail']->value['email_id'];?>

            </h6>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item" type="button">
              <a href='<?php echo base_url();?>
/edit/company_id=<?php echo $_smarty_tpl->tpl_vars['companySessionDetail']->value['id'];?>
'> Edit Profile</a>
            </button>
            <button class="dropdown-item" type="button">
              <a href='<?php echo base_url();?>
/changepassword'>Change Password</a>
            </button>
            <button class="dropdown-item logOutBtn">
              <a href=""> Logout</a>
            </button>
          </div>
        </div>
  </div>
  </li>
  </ul>
  </div>
  </header>
  <div id="sidebar" class="sidenav sidenav-fixed expand-lg" style="border-right:1px solid gray;">

    <div class="userImg pt-5 mt-3 text-center" style="box-shadow: 1px 1px 1px 1px gray;">
      <div class="speakerImgDiv text-center">
        <div class="imageContainerSpeaker text-center">
          <img src="<?php echo base_url();?>
/<?php echo $_smarty_tpl->tpl_vars['companySessionDetail']->value['company_logo'];?>
" class="main-image-speaker" alt="" />
        </div>
      </div>
    </div>
    <div class="mt-3  pl-3">
      <nav class="nav flex-column nav-pills">
        <a class="nav-link active" href="<?php echo base_url();?>
/job_portal_dashboard">Dashboard</a>
        <a class="nav-link" href="<?php echo base_url();?>
/post_jobs">Post Jobs</a>
      </nav>
    </div>
  </div>

  <div class="docs-content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="container">
            <div class="row">
              <div class="col-sm-2"></div>
              <div class="col-sm-8">
                <div class="row">
                  <div class="col-sm-12 py-4">
                    <form>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="fname">First Name<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="fname" placeholder="fname"
                            value="<?php echo ucfirst($_smarty_tpl->tpl_vars['company']->value['first_name']);?>
" />
                        </div>
                        <div class="form-group col-md-6">
                          <label for="lname">Last Name<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="lname" placeholder="lname"
                            value="<?php echo ucfirst($_smarty_tpl->tpl_vars['company']->value['last_name']);?>
" />
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-sm-6">
                          <label for="inputEmail4">Email<span class="text-danger">*</span></label>
                          <input type="email" class="form-control" id="inputEmail4" placeholder="Email"
                            value="<?php echo ucfirst($_smarty_tpl->tpl_vars['company']->value['email_id']);?>
" />
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputState">Contact<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="contactNo" placeholder="enter contact"
                            value="<?php echo ucfirst($_smarty_tpl->tpl_vars['company']->value['mobile_no']);?>
" />
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-sm-6">
                          <label for="designation">Designation<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="designation" placeholder="designation"
                            value="<?php echo ucfirst($_smarty_tpl->tpl_vars['company']->value['designation']);?>
" />
                        </div>


                        <div class="form-group col-sm-6">
                          <label for="inputAddress">Alternate Email<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="alternateEmail" placeholder="alternate email"
                            value="<?php echo ucfirst($_smarty_tpl->tpl_vars['company']->value['alternate_email_address']);?>
" />
                        </div>

                      </div>
                      <div class="form-group">
                        <label for="organizationnname">Organization Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="organizationnname" placeholder="organization name"
                          value="<?php echo ucfirst($_smarty_tpl->tpl_vars['company']->value['company_name']);?>
" />
                      </div>
                      <div class="form-group">
                        <label for="comment">Organization Description<span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="3" id="orgDesc"><?php echo $_smarty_tpl->tpl_vars['company']->value['company_description'];?>
</textarea>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-sm-6">
                          <label for="organizationgstnumber">GST Number<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="organizationgstnumber" placeholder="gst number"
                            value="<?php echo ucfirst($_smarty_tpl->tpl_vars['company']->value['gst_number']);?>
" />
                        </div>
                        <div class="form-group col-sm-6">
                          <label for="organizationnumber">Office Number<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="organizationnumber"
                            placeholder="organization number" value="<?php echo ucfirst($_smarty_tpl->tpl_vars['company']->value['office_no']);?>
" />
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="organizationaddress">Organization Address<span class="text-danger">*</span></label>
                        <textarea class="form-control" id="organizationaddress"
                          rows="2"><?php echo ucfirst($_smarty_tpl->tpl_vars['company']->value['office_address']);?>
</textarea>
                      </div>
                      <div class="form-row">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="state">State<span class="text-danger">*</span></label>
                            <select class="form-control orgstate" id="countrySelect" size="1"
                              onchange="makeSubmenu(this.value)" required>
                              <option value="" disabled selected>Choose State</option>
                              <option value="West_Bengal" <?php if ('West_Bengal' == $_smarty_tpl->tpl_vars['state']->value) {?>selected<?php }?>>West Bengal </option>
                                <option value="Andhra_Pradesh" <?php if ('Andhra_Pradesh' == $_smarty_tpl->tpl_vars['company']->value['state']) {?>selected<?php }?>>Andhra
                                Pradesh</option> <option value="Chandigarh"
                                <?php if ('Chandigarh' == $_smarty_tpl->tpl_vars['company']->value['state']) {?>selected<?php }?>>Chandigarh </option> <option value="Goa"
                                <?php if ('Goa' == $_smarty_tpl->tpl_vars['company']->value['state']) {?>selected<?php }?>>Goa </option> <option value="Delhi"
                                <?php if ('Delhi' == $_smarty_tpl->tpl_vars['company']->value['state']) {?>selected<?php }?>>Delhi </option> <option value="Haryana"
                                <?php if ('Haryana' == $_smarty_tpl->tpl_vars['company']->value['state']) {?>selected<?php }?>>Haryana </option> <option value="Karnataka"
                                <?php if ('Karnataka' == $_smarty_tpl->tpl_vars['company']->value['state']) {?>selected<?php }?>>Karnataka </option> <option
                                value="Madhya_Pradesh" <?php if ('Madhya_Pradesh' == $_smarty_tpl->tpl_vars['company']->value['state']) {?>selected<?php }?>>Madhya Pradesh
                                </option> <option value="Maharashtra"
                                <?php if ('Maharashtra' == $_smarty_tpl->tpl_vars['company']->value['state']) {?>selected<?php }?>>Maharashtra </option> <option
                                value="Tamil_Nadu" <?php if ('Tamil_Nadu' == $_smarty_tpl->tpl_vars['company']->value['state']) {?>selected<?php }?>>Tamil Nadu</option>
                                <option value="Uttar_Pradesh" <?php if ('Uttar_Pradesh' == $_smarty_tpl->tpl_vars['company']->value['state']) {?>selected<?php }?>>Uttar
                                Pradesh</option> <option value="Telangana"
                                <?php if ('Telangana' == $_smarty_tpl->tpl_vars['company']->value['state']) {?>selected<?php }?>>Telangana </option> </select> </div>
                                </div> <div class="col-sm-4">
                                <div class="form-group">
                                  <label for="city">City<span class="text-danger">*</span></label>
                                  <select class="form-control orgcity" id="citySelect" required>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['company']->value['city'];?>
"
                                      <?php if ('$company.city' == $_smarty_tpl->tpl_vars['company']->value['city']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['company']->value['city'];?>
 </option>
                                      </select> </div> </div> <div class="col-sm-4">
                                      <div class="form-group">
                                        <label for="zip">Zip<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control orgpin" id="zip"
                                          value="<?php echo $_smarty_tpl->tpl_vars['company']->value['pin_code'];?>
" required />
                                      </div>
                                </div>
                          </div>
                          <div type="submit" class="btn witBtn px-5 mt-3 updateCompanyDetails">
                            Update
                          </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-sm-2"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/sweetalert2@8"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/promise-polyfill"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
/js/employeer_profile_edit.js?v=<?php echo jsversion();?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/js/smoothscroll.js?v=<?php echo jsversion();?>
"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 type="text/javascript">
    $(window).on('load resize', function () {
      if ($(this).outerWidth() < 992) {
        //768
        $('body')
          .removeClass('sidebar-collapsed')
          .addClass('drawer-sidebar');
      } else {
        $('body').removeClass('drawer-sidebar');
      }
    });

    $(function () {
      $('.js-sidebar-toggler').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        if ($('body').hasClass('drawer-sidebar')) {
          $('#sidebar').backdrop();
        } else {
          $('body').toggleClass('sidebar-collapsed');
        }
      });

      var scroll = new SmoothScroll('a[href*="#"][scroll-href]');

      $('select.md-select').formSelect();
    });
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    $('#customFile').on('change', function () {
      var fileName = $(this)
        .val()
        .replace('C:\\fakepath\\', ' ');
      $(this)
        .next('.custom-file-label')
        .html(fileName);
    });
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    var citiesByState = {
      "Andaman and Nicobar Islands": ["Port Blair*"],
      "Andhra Pradesh": ["Adoni", "Amalapuram", "Anakapalle", "Anantapur", "Bapatla", "Bheemunipatnam", "Bhimavaram", "Bobbili", "Chilakaluripet", "Chirala", "Chittoor", "Dharmavaram", "Eluru", "Gooty", "Gudivada", "Gudur", "Guntakal", "Guntur", "Hindupur", "Jaggaiahpet", "Jammalamadugu", "Kadapa", "Kadiri", "Kakinada", "Kandukur", "Kavali", "Kovvur", "Kurnool", "Macherla", "Machilipatnam", "Madanapalle", "Mandapeta", "Markapur", "Nagari", "Naidupet", "Nandyal", "Narasapuram", "Narasaraopet", "Narsipatnam", "Nellore", "Nidadavole", "Nuzvid", "Ongole", "Palacole", "Palasa Kasibugga", "Parvathipuram", "Pedana", "Peddapuram", "Pithapuram", "Ponnur", "Proddatur", "Punganur", "Puttur", "Rajahmundry", "Rajam", "Rajampet", "Ramachandrapuram", "Rayachoti", "Rayadurg", "Renigunta", "Repalle", "Salur", "Samalkot", "Sattenapalle", "Srikakulam", "Srikalahasti", "Srisailam Project (Right Flank Colony) Township", "Sullurpeta", "Tadepalligudem", "Tadpatri", "Tanuku", "Tenali", "Tirupati", "Tiruvuru", "Tuni", "Uravakonda", "Venkatagiri", "Vijayawada", "Vinukonda", "Visakhapatnam", "Vizianagaram", "Yemmiganur", "Yerraguntla"],
      // ******************
      "Arunachal Pradesh": ["Naharlagun", "Pasighat"],
      // **************
      "Assam": ["Barpeta", "Bongaigaon City", "Dhubri", "Dibrugarh", "Diphu", "Goalpara", "Guwahati", "Jorhat", "Karimganj", "Lanka", "Lumding", "Mangaldoi", "Mankachar", "Margherita", "Mariani", "Marigaon", "Nagaon", "Nalbari", "North Lakhimpur", "Rangia", "Sibsagar", "Silapathar", "Silchar", "Tezpur", "Tinsukia"],
      // ******************
      "Bihar": ["Araria", "Arrah", "Arwal", "Asarganj", "Aurangabad", "Bagaha", "Barh", "Begusarai", "Bettiah", "Bhabua", "Bhagalpur", "Buxar", "Chhapra", "Darbhanga", "Dehri-on-Sone", "Dumraon", "Forbesganj", "Gaya", "Gopalganj", "Hajipur", "Jamalpur", "Jamui", "Jehanabad", "Katihar", "Kishanganj", "Lakhisarai", "Lalganj", "Madhepura", "Madhubani", "Maharajganj", "Mahnar Bazar", "Makhdumpur", "Maner", "Manihari", "Marhaura", "Masaurhi", "Mirganj", "Mokameh", "Motihari", "Motipur", "Munger", "Murliganj", "Muzaffarpur", "Narkatiaganj", "Naugachhia", "Nawada", "Nokha", "Patna*", "Piro", "Purnia", "Rafiganj", "Rajgir", "Ramnagar", "Raxaul Bazar", "Revelganj", "Rosera", "Saharsa", "Samastipur", "Sasaram", "Sheikhpura", "Sheohar", "Sherghati", "Silao", "Sitamarhi", "Siwan", "Sonepur", "Sugauli", "Sultanganj", "Supaul", "Warisaliganj"],
      // ***************
      "Chandigarh": ["Chandigarh"],
      // ***
      "Chhattisgarh": ["Ambikapur", "Bhatapara", "Bhilai Nagar", "Bilaspur", "Chirmiri", "Dalli-Rajhara", "Dhamtari", "Durg", "Jagdalpur", "Korba", "Mahasamund", "Manendragarh", "Mungeli", "Naila Janjgir", "Raigarh", "Raipur*", "Rajnandgaon", "Sakti", "Tilda Newra"],
      // ****************
      "Dadra and Nagar Haveli": ["Silvassa*"],
      // ************
      "Delhi": ["Delhi", "New Delhi"],
      // ***********
      "Goa": ["Mapusa", "Margao", "Marmagao", "Panaji"],
      // **********
      "Gujarat": ["Adalaj", "Ahmedabad", "Amreli", "Anand", "Anjar", "Ankleshwar", "Bharuch", "Bhavnagar", "Bhuj", "Chhapra", "Deesa", "Dhoraji", "Godhra", "Jamnagar", "Kadi", "Kapadvanj", "Keshod", "Khambhat", "Lathi", "Limbdi", "Lunawada", "Mahesana", "Mahuva", "Manavadar", "Mandvi", "Mangrol", "Mansa", "Mahemdabad", "Modasa", "Morvi", "Nadiad", "Navsari", "Padra", "Palanpur", "Palitana", "Pardi", "Patan", "Petlad", "Porbandar", "Radhanpur", "Rajkot", "Rajpipla", "Rajula", "Ranavav", "Rapar", "Salaya", "Sanand", "Savarkundla", "Sidhpur", "Sihor", "Songadh", "Surat", "Talaja", "Thangadh", "Tharad", "Umbergaon", "Umreth", "Una", "Unjha", "Upleta", "Vadnagar", "Vadodara", "Valsad", "Vapi", "Vapi", "Veraval", "Vijapur", "Viramgam", "Visnagar", "Vyara", "Wadhwan", "Wankaner"],
      // ************
      "Haryana": ["Bahadurgarh", "Bhiwani", "Charkhi Dadri", "Faridabad", "Fatehabad", "Gohana", "Gurgaon", "Hansi", "Hisar", "Jind", "Kaithal", "Karnal", "Ladwa", "Mahendragarh", "Mandi Dabwali", "Narnaul", "Narwana", "Palwal", "Panchkula", "Panipat", "Pehowa", "Pinjore", "Rania", "Ratia", "Rewari", "Rohtak", "Safidon", "Samalkha", "Sarsod", "Shahbad", "Sirsa", "Sohna", "Sonipat", "Taraori", "Thanesar", "Tohana", "Yamunanagar"],
      // ***************
      "Himachal Pradesh": ["Mandi", "Nahan", "Palampur", "Shimla*", "Solan", "Sundarnagar"],
      // ************
      "Jammu and Kashmir": ["Anantnag", "Baramula", "Jammu", "Kathua", "Punch", "Rajauri", "Sopore", "Srinagar*", "Udhampur"],
      // ******************

      "Jharkhand": ["Adityapur", "Bokaro Steel City", "Chaibasa", "Chatra", "Chirkunda", "Medininagar (Daltonganj)", "Deoghar", "Dhanbad", "Dumka", "Giridih", "Gumia", "Hazaribag", "Jamshedpur", "Jhumri Tilaiya", "Lohardaga", "Madhupur", "Mihijam", "Musabani", "Pakaur", "Patratu", "Phusro", "Ramgarh", "Ranchi*", "Sahibganj", "Saunda", "Simdega", "Tenu dam-cum-Kathhara"],
      // *************
      "Karnataka": ["Adyar", "Afzalpur", "Arsikere", "Athni", "Bengaluru", "Belagavi", "Ballari", "Chikkamagaluru", "Davanagere", "Gokak", "Hubli-Dharwad", "Karwar", "Kolar", "Lakshmeshwar", "Lingsugur", "Maddur", "Madhugiri", "Madikeri", "Magadi", "Mahalingapura", "Malavalli", "Malur", "Mandya", "Mangaluru", "Manvi", "Mudalagi", "Mudabidri", "Muddebihal", "Mudhol", "Mulbagal", "Mundargi", "Nanjangud", "Nargund", "Navalgund", "Nelamangala", "Pavagada", "Piriyapatna", "Puttur", "Rabkavi Banhatti", "Raayachuru", "Ranebennuru", "Ramanagaram", "Ramdurg", "Ranibennur", "Robertson Pet", "Ron", "Sadalagi", "Sagara", "Sakaleshapura", "Sindagi", "Sanduru", "Sankeshwara", "Saundatti-Yellamma", "Savanur", "Sedam", "Shahabad", "Shahpur", "Shiggaon", "Shikaripur", "Shivamogga", "Surapura", "Shrirangapattana", "Sidlaghatta", "Sindhagi", "Sindhnur", "Sira", "Sirsi", "Siruguppa", "Srinivaspur", "Tarikere", "Tekkalakote", "Terdal", "Talikota", "Tiptur", "Tumkur", "Udupi", "Vijayapura", "Wadi", "Yadgir"],

      // ****************
      // "Karnatka": ["Mysore", "Bangalore", "Mangalore"],

      // ***********
      "Kerala": ["Adoor", "Alappuzha", "Attingal", "Chalakudy", "Changanassery", "Cherthala", "Chittur-Thathamangalam", "Guruvayoor", "Kanhangad", "Kannur", "Kasaragod", "Kayamkulam", "Kochi", "Kodungallur", "Kollam", "Kottayam", "Kozhikode", "Kunnamkulam", "Malappuram", "Mattannur", "Mavelikkara", "Mavoor", "Muvattupuzha", "Nedumangad", "Neyyattinkara", "Nilambur", "Ottappalam", "Palai", "Palakkad", "Panamattom", "Panniyannur", "Pappinisseri", "Paravoor", "Pathanamthitta", "Peringathur", "Perinthalmanna", "Perumbavoor", "Ponnani", "Punalur", "Puthuppally", "Koyilandy", "Shoranur", "Taliparamba", "Thiruvalla", "Thiruvananthapuram", "Thodupuzha", "Thrissur", "Tirur", "Vaikom", "Varkala", "Vatakara"],
      // **************

      "Madhya_Pradesh": ["Alirajpur", "Ashok Nagar", "Balaghat", "Bhopal", "Ganjbasoda", "Gwalior", "Indore", "Itarsi", "Jabalpur", "Lahar", "Maharajpur", "Mahidpur", "Maihar", "Malaj Khand", "Manasa", "Manawar", "Mandideep", "Mandla", "Mandsaur", "Mauganj", "Mhow Cantonment", "Mhowgaon", "Morena", "Multai", "Mundi", "Murwara (Katni)", "Nagda", "Nainpur", "Narsinghgarh", "Narsinghgarh", "Neemuch", "Nepanagar", "Niwari", "Nowgong", "Nowrozabad (Khodargama)", "Pachore", "Pali", "Panagar", "Pandhurna", "Panna", "Pasan", "Pipariya", "Pithampur", "Porsa", "Prithvipur", "Raghogarh-Vijaypur", "Rahatgarh", "Raisen", "Rajgarh", "Ratlam", "Rau", "Rehli", "Rewa", "Sabalgarh", "Sagar", "Sanawad", "Sarangpur", "Sarni", "Satna", "Sausar", "Sehore", "Sendhwa", "Seoni", "Seoni-Malwa", "Shahdol", "Shajapur", "Shamgarh", "Sheopur", "Shivpuri", "Shujalpur", "Sidhi", "Sihora", "Singrauli", "Sironj", "Sohagpur", "Tarana", "Tikamgarh", "Ujjain", "Umaria", "Vidisha", "Vijaypur", "Wara Seoni"],
      // ***************
      "Maharashtra": ["Ahmednagar", "Akola", "Akot", "Amalner", "Ambejogai", "Amravati", "Anjangaon", "Arvi", "Aurangabad", "Bhiwandi", "Dhule", "Kalyan-Dombivali", "Ichalkaranji", "Kalyan-Dombivali", "Karjat", "Latur", "Loha", "Lonar", "Lonavla", "Mahad", "Malegaon", "Malkapur", "Mangalvedhe", "Mangrulpir", "Manjlegaon", "Manmad", "Manwath", "Mehkar", "Mhaswad", "Mira-Bhayandar", "Morshi", "Mukhed", "Mul", "Mumbai", "Greater Mumbai", "Murtijapur", "Nagpur", "Nanded-Waghala", "Nandgaon", "Nandura", "Nandurbar", "Narkhed", "Nashik", "Navi Mumbai", "Nawapur", "Nilanga", "Osmanabad", "Ozar", "Pachora", "Paithan", "Palghar", "Pandharkaoda", "Pandharpur", "Panvel", "Parbhani", "Parli", "Partur", "Pathardi", "Pathri", "Patur", "Pauni", "Pen", "Phaltan", "Pulgaon", "Pune", "Purna", "Pusad", "Rahuri", "Rajura", "Ramtek", "Ratnagiri", "Raver", "Risod", "Sailu", "Sangamner", "Sangli", "Sangole", "Sasvad", "Satana", "Satara", "Savner", "Sawantwadi", "Shahade", "Shegaon", "Shendurjana", "Shirdi", "Shirpur-Warwade", "Shirur", "Shrigonda", "Shrirampur", "Sillod", "Sinnar", "Solapur", "Soyagaon", "Talegaon Dabhade", "Talode", "Tasgaon", "Thane", "Tirora", "Tuljapur", "Tumsar", "Uchgaon", "Udgir", "Umarga", "Umarkhed", "Umred", "Uran", "Uran Islampur", "Vadgaon Kasba", "Vaijapur", "Vasai-Virar", "Vita", "Wadgaon Road", "Wai", "Wani", "Wardha", "Warora", "Warud", "Washim", "Yavatmal", "Yawal", "Yevla"],
      // *************

      "Manipur": ["Imphal", "Lilong", "Mayang Imphal", "Thoubal"],
      // *************
      "Meghalaya": ["Nongstoin", "Shillong", "Tura"],
      // ************
      "Mizoram": ["Aizawl", "Lunglei", "Saiha"],

      // *************
      "Nagaland": ["Dimapur", "Kohima", "Mokokchung", "Tuensang", "Wokha", "Zunheboto"],
      // ***********
      "Odisha": ["Balangir", "Baleshwar Town", "Barbil", "Bargarh", "Baripada Town", "Bhadrak", "Bhawanipatna", "Bhubaneswar", "Brahmapur", "Byasanagar", "Cuttack", "Dhenkanal", "Jatani", "Jharsuguda", "Kendrapara", "Kendujhar", "Malkangiri", "Nabarangapur", "Paradip", "Parlakhemundi", "Pattamundai", "Phulabani", "Puri", "Rairangpur", "Rajagangapur", "Raurkela", "Rayagada", "Sambalpur", "Soro", "Sunabeda", "Sundargarh", "Talcher", "Tarbha", "Titlagarh"],
      // ****************
      "Puducherry": ["Karaikal", "Mahe", "Pondicherry", "Yanam"],

      // ************
      "Punjab": ["Amritsar", "Barnala", "Batala", "Bathinda", "Dhuri", "Faridkot", "Fazilka", "Firozpur", "Firozpur Cantt.", "Gobindgarh", "Gurdaspur", "Hoshiarpur", "Jagraon", "Jalandhar Cantt.", "Jalandhar", "Kapurthala", "Khanna", "Kharar", "Kot Kapura", "Longowal", "Ludhiana", "Malerkotla", "Malout", "Mansa", "Moga", "Mohali", "Morinda, India", "Mukerian", "Muktsar", "Nabha", "Nakodar", "Nangal", "Nawanshahr", "Pathankot", "Patiala", "Pattran", "Patti", "Phagwara", "Phillaur", "Qadian", "Raikot", "Rajpura", "Rampura Phul", "Rupnagar", "Samana", "Sangrur", "Sirhind Fatehgarh Sahib", "Sujanpur", "Sunam", "Talwara", "Tarn Taran", "Urmar Tanda", "Zira", "Zirakpur"],

      // ************
      "Rajasthan": ["Ajmer", "Alwar", "Bikaner", "Bharatpur", "Bhilwara", "Jaipur*", "Jodhpur", "Lachhmangarh", "Ladnu", "Lakheri", "Lalsot", "Losal", "Makrana", "Malpura", "Mandalgarh", "Mandawa", "Mangrol", "Merta City", "Mount Abu", "Nadbai", "Nagar", "Nagaur", "Nasirabad", "Nathdwara", "Neem-Ka-Thana", "Nimbahera", "Nohar", "Nokha", "Pali", "Phalodi", "Phulera", "Pilani", "Pilibanga", "Pindwara", "Pipar City", "Prantij", "Pratapgarh", "Raisinghnagar", "Rajakhera", "Rajaldesar", "Rajgarh (Alwar)", "Rajgarh (Churu)", "Rajsamand", "Ramganj Mandi", "Ramngarh", "Ratangarh", "Rawatbhata", "Rawatsar", "Reengus", "Sadri", "Sadulshahar", "Sadulpur", "Sagwara", "Sambhar", "Sanchore", "Sangaria", "Sardarshahar", "Sawai Madhopur", "Shahpura", "Shahpura", "Sheoganj", "Sikar", "Sirohi", "Sojat", "Sri Madhopur", "Sujangarh", "Sumerpur", "Suratgarh", "Taranagar", "Todabhim", "Todaraisingh", "Tonk", "Udaipur", "Udaipurwati", "Vijainagar, Ajmer"],

      // ***************

      "Tamil_Nadu": ["Arakkonam", "Aruppukkottai", "Chennai", "Coimbatore", "Erode", "Gobichettipalayam", "Kancheepuram", "Karur", "Lalgudi", "Madurai", "Manachanallur", "Nagapattinam", "Nagercoil", "Namagiripettai", "Namakkal", "Nandivaram-Guduvancheri", "Nanjikottai", "Natham", "Nellikuppam", "Neyveli (TS)", "O Valley", "Oddanchatram", "P.N.Patti", "Pacode", "Padmanabhapuram", "Palani", "Palladam", "Pallapatti", "Pallikonda", "Panagudi", "Panruti", "Paramakudi", "Parangipettai", "Pattukkottai", "Perambalur", "Peravurani", "Periyakulam", "Periyasemur", "Pernampattu", "Pollachi", "Polur", "Ponneri", "Pudukkottai", "Pudupattinam", "Puliyankudi", "Punjaipugalur", "Ranipet", "Rajapalayam", "Ramanathapuram", "Rameshwaram", "Rasipuram", "Salem", "Sankarankoil", "Sankari", "Sathyamangalam", "Sattur", "Shenkottai", "Sholavandan", "Sholingur", "Sirkali", "Sivaganga", "Sivagiri", "Sivakasi", "Srivilliputhur", "Surandai", "Suriyampalayam", "Tenkasi", "Thammampatti", "Thanjavur", "Tharamangalam", "Tharangambadi", "Theni Allinagaram", "Thirumangalam", "Thirupuvanam", "Thiruthuraipoondi", "Thiruvallur", "Thiruvarur", "Thuraiyur", "Tindivanam", "Tiruchendur", "Tiruchengode", "Tiruchirappalli", "Tirukalukundram", "Tirukkoyilur", "Tirunelveli", "Tirupathur", "Tirupathur", "Tiruppur", "Tiruttani", "Tiruvannamalai", "Tiruvethipuram", "Tittakudi", "Udhagamandalam", "Udumalaipettai", "Unnamalaikadai", "Usilampatti", "Uthamapalayam", "Uthiramerur", "Vadakkuvalliyur", "Vadalur", "Vadipatti", "Valparai", "Vandavasi", "Vaniyambadi", "Vedaranyam", "Vellakoil", "Vellore", "Vikramasingapuram", "Viluppuram", "Virudhachalam", "Virudhunagar", "Viswanatham"],


      "Telangana": ["Adilabad", "Bellampalle", "Bhadrachalam", "Bhainsa", "Bhongir", "Bodhan", "Farooqnagar", "Gadwal", "Hyderabad", "Jagtial", "Jangaon", "Kagaznagar", "Kamareddy", "Karimnagar", "Khammam", "Koratla", "Kothagudem", "Kyathampalle", "Mahbubnagar", "Mancherial", "Mandamarri", "Manuguru", "Medak", "Miryalaguda", "Nagarkurnool", "Narayanpet", "Nirmal", "Nizamabad", "Palwancha", "Ramagundam", "Sadasivpet", "Sangareddy", "Siddipet", "Sircilla", "Suryapet", "Tandur", "Vikarabad", "Wanaparthy", "Warangal", "Yellandu"],

      "Tripura": ["Agartala", "Belonia", "Dharmanagar", "Kailasahar", "Khowai", "Pratapgarh", "Udaipur"],


      "Uttar_Pradesh": ["Achhnera", "Agra", "Aligarh", "Allahabad", "Amroha", "Azamgarh", "Bahraich", "Chandausi", "Etawah", "Firozabad", "Fatehpur Sikri", "Hapur", "Hardoi", "Jhansi", "Kalpi", "Kanpur", "Khair", "Laharpur", "Lakhimpur", "Lal Gopalganj Nindaura", "Lalitpur", "Lalganj", "Lar", "Loni", "Lucknow*", "Mathura", "Meerut", "Modinagar", "Moradabad", "Nagina", "Najibabad", "Nakur", "Nanpara", "Naraura", "Naugawan Sadat", "Nautanwa", "Nawabganj", "Nehtaur", "Niwai", "Noida", "Noorpur", "Obra", "Orai", "Padrauna", "Palia Kalan", "Parasi", "Phulpur", "Pihani", "Pilibhit", "Pilkhuwa", "Powayan", "Pukhrayan", "Puranpur", "Purquazi", "Purwa", "Rae Bareli", "Rampur", "Rampur Maniharan", "Rampur Maniharan", "Rasra", "Rath", "Renukoot", "Reoti", "Robertsganj", "Rudauli", "Rudrapur", "Sadabad", "Safipur", "Saharanpur", "Sahaspur", "Sahaswan", "Sahawar", "Sahjanwa", "Saidpur", "Sambhal", "Samdhan", "Samthar", "Sandi", "Sandila", "Sardhana", "Seohara", "Shahabad, Hardoi", "Shahabad, Rampur", "Shahganj", "Shahjahanpur", "Shamli", "Shamsabad, Agra", "Shamsabad, Farrukhabad", "Sherkot", "Shikarpur, Bulandshahr", "Shikohabad", "Shishgarh", "Siana", "Sikanderpur", "Sikandra Rao", "Sikandrabad", "Sirsaganj", "Sirsi", "Sitapur", "Soron", "Suar", "Sultanpur", "Sumerpur", "Tanda", "Thakurdwara", "Thana Bhawan", "Tilhar", "Tirwaganj", "Tulsipur", "Tundla", "Ujhani", "Unnao", "Utraula", "Varanasi", "Vrindavan", "Warhapur", "Zaidpur", "Zamania"],

      // **************
      "Uttarakhand": ["Bageshwar", "Dehradun", "Haldwani-cum-Kathgodam", "Hardwar", "Kashipur", "Manglaur", "Mussoorie", "Nagla", "Nainital", "Pauri", "Pithoragarh", "Ramnagar", "Rishikesh", "Roorkee", "Rudrapur", "Sitarganj", "Srinagar", "Tehri"],
      // ***************
      "West_Bengal": ["Adra", "Alipurduar", "Arambagh", "Asansol", "Baharampur", "Balurghat", "Bankura", "Darjiling", "English Bazar", "Gangarampur", "Habra", "Hugli-Chinsurah", "Jalpaiguri", "Jhargram", "Kalimpong", "Kharagpur", "Kolkata", "Mainaguri", "Malda", "Mathabhanga", "Medinipur", "Memari", "Monoharpur", "Murshidabad", "Nabadwip", "Naihati", "Panchla", "Pandua", "Paschim Punropara", "Purulia", "Raghunathpur", "Raghunathganj", "Raiganj", "Rampurhat", "Ranaghat", "Sainthia", "Santipur", "Siliguri", "Sonamukhi", "Srirampore", "Suri", "Taki", "Tamluk", "Tarakeswar"]
    };
    function makeSubmenu(value) {
      if (value.length == 0)
        document.getElementById('citySelect').innerHTML = '<option></option>';
      else {
        var citiesOptions = '';
        for (cityId in citiesByState[value]) {
          citiesOptions +=
            '<option>' + citiesByState[value][cityId] + '</option>';
        }
        document.getElementById('citySelect').innerHTML = citiesOptions;
      }
    }  
  <?php echo '</script'; ?>
>
</body>

</html><?php }
}
