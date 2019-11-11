<?php
/* Smarty version 3.1.33, created on 2019-08-22 07:36:36
  from 'C:\xampp\htdocs\djdfbf\sanjeev\presentation\templates\company_profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5e29e4a76436_48882569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50322008e394d32e90d5f78f84b6b3b2ac1588f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\presentation\\templates\\company_profile.tpl',
      1 => 1566452193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5e29e4a76436_48882569 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),1=>array('file'=>'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\libs\\smarty\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
echo smarty_function_load_presentation_object(array('filename'=>'vipanan_admin','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('company', $_smarty_tpl->tpl_vars['obj']->value->companyDetail);
$_smarty_tpl->_assignInScope('companySessionDetail', $_SESSION['companySession']);?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>RBS|Dashbaord</title>
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
/styles/wit_job_dashboard.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard_two.css" rel="stylesheet" />

</head>

<body>
  <input type="hidden" company_id=<?php echo $_smarty_tpl->tpl_vars['company']->value['id'];?>
 class="companyId">
  <header class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled">
    <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
      data-target="#sidebar">
      <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
    </a>
    <a class="logo" href="#">WiT</a>
    <button class="navbar-toggler navbar-icon waves-effect waves-light" type="button" data-toggle="collapse"
      data-target="#navbarNav"></button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav navbar-toolbar ml-auto">
        <li class="text-white mr-md-3">
          <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['companySessionDetail']->value['company_name']);?>

        </li>
        <li>
          <div class="btn-group">
            <button type="button " class="btn rounded-circle dropdown-toggle btn-primary" data-toggle="dropdown"
              data-display="static" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user-tie" style="font-size: 20px;"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-right">
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
              <div class="dropdown-divider"></div>
              <div class="logOutBtn pl-4">
                <a href=""> Logout</a>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </header>
  <div id="sidebar" class="sidenav sidenav-fixed expand-lg" style="border-right:1px solid gray;">
    <div class="mt-5 pt-5 pl-3">
      <nav class="nav flex-column nav-pills">
        <a class="nav-link  active " href="<?php echo base_url();?>
/job_portal_dashboard/company_id=<?php echo $_smarty_tpl->tpl_vars['company']->value['id'];?>
">Dashboard</a>
        <a class="nav-link" href="<?php echo base_url();?>
/post_jobs">Post Jobs</a>
      </nav>
    </div>
  </div>

  <!-- ******************************************************* -->
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
                          <label for="fname">FirstName</label>
                          <input type="text" class="form-control" id="fname" placeholder="fname"
                            value="<?php echo ucfirst($_smarty_tpl->tpl_vars['company']->value['first_name']);?>
" />
                        </div>
                        <div class="form-group col-md-6">
                          <label for="lname">LastName</label>
                          <input type="text" class="form-control" id="lname" placeholder="lname"
                            value="<?php echo ucfirst($_smarty_tpl->tpl_vars['company']->value['last_name']);?>
" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email"
                          value="<?php echo ucfirst($_smarty_tpl->tpl_vars['company']->value['email_id']);?>
" />
                      </div>
                      <div class="form-group">
                        <label for="designation">Designation</label>
                        <input type="text" class="form-control" id="designation" placeholder="designation"
                          value="<?php echo ucfirst($_smarty_tpl->tpl_vars['company']->value['designation']);?>
" />
                      </div>

                      <div class="form-row">
                        <div class="form-group col-sm-6">
                          <label for="inputAddress">Alternate Email</label>
                          <input type="text" class="form-control" id="alternateEmail" placeholder="alternate email"
                            value="<?php echo ucfirst($_smarty_tpl->tpl_vars['company']->value['alternate_email_address']);?>
" />
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputState">Contact</label>
                          <input type="text" class="form-control" id="contactNo" placeholder="enter contact"
                            value="<?php echo ucfirst($_smarty_tpl->tpl_vars['company']->value['mobile_no']);?>
" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="organizationnname">Organization Name</label>
                        <input type="text" class="form-control" id="organizationnname" placeholder="organization name"
                          value="<?php echo ucfirst($_smarty_tpl->tpl_vars['company']->value['company_name']);?>
" />
                      </div>
                      <div class="form-group">
                        <label for="comment">Organization Description</label>
                        <textarea class="form-control" rows="3" id="orgDesc"><?php echo $_smarty_tpl->tpl_vars['company']->value['company_description'];?>
</textarea>
                      </div>
                      <div class="form-group">
                        <label for="organizationgstnumber">GST Number</label>
                        <input type="text" class="form-control" id="organizationgstnumber"
                          placeholder="organizationnumber" value="<?php echo ucfirst($_smarty_tpl->tpl_vars['company']->value['gst_number']);?>
" />
                      </div>
                      <div class="form-row">
                        <div class="form-group col-sm-6">
                          <label for="organizationnumber">Office Number</label>
                          <input type="text" class="form-control" id="organizationnumber"
                            placeholder="organization number" value="<?php echo ucfirst($_smarty_tpl->tpl_vars['company']->value['office_no']);?>
" />
                        </div>
                        <div class="form-group col-sm-6">
                          <label for="organizationnumber">Organization Logo</label>
                          <div class="custom-file">
                            <input type="file" accept=".pdf ,.docx, .doc" class="custom-file-input" id="customFile" />
                            <label class="custom-file-label" for="customFile">Choose file</label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="organizationaddress">Organization Address</label>
                        <input type="text" class="form-control" id="organizationaddress"
                          placeholder="organizationaddress" value="<?php echo ucfirst($_smarty_tpl->tpl_vars['company']->value['office_address']);?>
" />
                      </div>

                      <div class="form-row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="sel1">Country</label>
                            <select class="form-control" id="countySel" size="1">
                              <option value="" selected="true" disabled="disabled">Select Country</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="sel1">State</label>
                            <select class="form-control" id="stateSel" size="1">
                              <option value="" selected="true" disabled="disabled">Select State</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="sel1">City</label>
                            <select class="form-control" id="citySel" size="1">
                              <option value="" selected="true" disabled="disabled">Select City</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="sel1">Zip</label>
                            <select class="form-control" id="zipSel" size="1">
                              <option value="" selected="true" disabled="disabled">Select Zip</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div type="submit" class="btn btn-primary updateCompanyDetails">
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

  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6"></div>
        <div class="col-lg-7 col-md-6"></div>
      </div>
      <div class="d-flex justify-content-center">
        <div class="footer-links">
          <a href="#">Wit</a>
        </div>
      </div>
      <div class="text-center font-14 pb-5">
        ©Copyright 2019 - TheVipananCompany. All Rights Reserved.
      </div>
    </div>
  </footer>

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
 type="text/javascript" src="<?php echo base_url();?>
/js/employeer_profile_edit.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/js/smoothscroll.js"><?php echo '</script'; ?>
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
 src="<?php echo base_url();?>
/libs/statecity.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
