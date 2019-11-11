<?php
/* Smarty version 3.1.33, created on 2019-08-11 15:18:42
  from 'C:\xampp\htdocs\djdfbf\sanjeev\presentation\templates\vipanan_view_specific_applicant_profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5015b28a9468_11664812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ab98bd86516acf387585a95a2b9f48efff73a1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\presentation\\templates\\vipanan_view_specific_applicant_profile.tpl',
      1 => 1565529519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5015b28a9468_11664812 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),1=>array('file'=>'C:\\xampp\\htdocs\\djdfbf\\sanjeev\\libs\\smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
echo smarty_function_load_presentation_object(array('filename'=>'jobCandidateList','assign'=>'obj'),$_smarty_tpl);?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
     <link rel="shortcut icon" href="images/wit-favicon.ico" type="image/x-icon">
    <title>RBS|Dashbaord</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
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
    <link href="<?php echo base_url();?>
/styles/wit_job_dashboard.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>
/styles/wit_job_dashboard_two.css" rel="stylesheet" />
  </head>
  <body>
    <header
      class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled"
    >
      <a
        href="javascript:;"
        class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
        data-target="#sidebar"
      >
        <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
      </a>
      <a class="logo" href="#">WiT</a>
      <button
        class="navbar-toggler navbar-icon waves-effect waves-light"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
      ></button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav navbar-toolbar ml-auto">
          <li>
            <a href="#" class="nav-link waves-effect waves-light"
              >TheVipananCompany WiT Dashboard</a
            >
          </li>
<li>
          <div class="btn-group">
            <button
              type="button "
              class="btn rounded-circle dropdown-toggle btn-primary"
              data-toggle="dropdown"
              data-display="static"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i
                class="fas fa-user-tie"
                style="font-size: 20px; color:white;"
              ></i>
            </button>
            <div
              class="dropdown-menu dropdown-menu-right dropdown-menu-lg-right"
            >
              <h6 class="dropdown-header">TheVipananCompany</h6>
              <h6 class="dropdown-header">
                vipanan_rbs_wit_panel
              </h6>
              <div class="dropdown-divider"></div>
              <div class="dropdown-divider"></div>
              <button class="dropdown-item" type="button">
                Logout
              </button>
            </div>
          </div>
          </li>
          <!--  <li>
            <a href="#" class="nav-link waves-effect waves-light">Help</a>
          </li>
          <li>
            <a href="#" class="nav-link waves-effect waves-light">Forum</a>
          </li>
          <li>
            <a href="#" class="nav-link waves-effect waves-light">Services</a>
          </li>
          <li>
            <a href="#" class="nav-link waves-effect waves-light">Contact</a>
          </li> -->
        </ul>
      </div>
    </header>
    <div
      id="sidebar"
      class="sidenav sidenav-fixed expand-lg"
      style="border-right:1px solid gray;"
    >
      <div class="mt-5 pt-5 pl-3">
        <nav class="nav flex-column nav-pills">
          <a class="nav-link  active" href="<?php echo base_url();?>
/vipanan"
            >Dashboard</a
          >
          <a class="nav-link " href="<?php echo base_url();?>
/vipanan_add_companies"
            >Add Companies</a
          >
          <a class="nav-link " href="#!"
            >All Jobs</a
          ><a class="nav-link " href="#!"
            >All Applicants</a
          >
        </nav>
      </div>
    </div>

    <!-- ******************************************************* -->
    <div class="docs-content-wrapper border border-dark">
         <div class="container-fluid">
        <div class="row">
          <div
            class="col-sm-12 bg-light"
            style="position: sticky; top:64px; z-index:200;"
          >
            <h4 class="">
              Detailed View of Application
            </h4>
          </div>
          <div class="col-sm-12">
            <?php $_smarty_tpl->_assignInScope('candidateDetail', $_smarty_tpl->tpl_vars['obj']->value->applicantDetails);?>
         
          <div class="col-sm-12">
            <div class="bg-light my-2 " style="border:#8080802b 1px solid">
              <h4><?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['last_name'];?>
</h4>
              <p><?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['resident_address'];?>
</p>
              <h6>Skills</h6>
              <p><?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['skill_set'];?>
</p>
            </div>
            <div class="bg-light my-2" style="border:#8080802b 1px solid">
              <h5>Resume</h5>
              <div class="row">
                <div class="col-2">
                  <b>Education</b>
                </div>
                <div class="col-10">
                  <div>
                    <ul>
                      <?php $_smarty_tpl->_assignInScope('aa', $_smarty_tpl->tpl_vars['candidateDetail']->value['educationDetails']);?>
                      
                       <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['aa']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_start = min(0, $__section_i_0_loop);
$__section_i_0_total = min(($__section_i_0_loop - $__section_i_0_start), 2);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = $__section_i_0_start; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                      
                      <li>
                        <strong>
                          <?php echo $_smarty_tpl->tpl_vars['aa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['class'];?>

                          (<?php echo $_smarty_tpl->tpl_vars['aa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['passingYear'];?>
)</strong
                        >
                      </li>
                
                      <li>
                        <?php echo $_smarty_tpl->tpl_vars['aa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['schoolName'];?>

                      </li>
                      <li>CGPA/Percentage:<?php echo $_smarty_tpl->tpl_vars['aa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['percentage'];?>
</li>
                      <?php
}
}
?>
                    </ul>

                    <ul>
                      <?php $_smarty_tpl->_assignInScope('bb', $_smarty_tpl->tpl_vars['candidateDetail']->value['educationDetails']);?>
                      <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['aa']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_start = min(2, $__section_i_1_loop);
$__section_i_1_total = min(($__section_i_1_loop - $__section_i_1_start), 3);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = $__section_i_1_start; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                      <li>
                        <strong><?php echo $_smarty_tpl->tpl_vars['bb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['course'];?>
(<?php echo $_smarty_tpl->tpl_vars['aa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Year_of_Complition'];?>
)</strong>
                      </li>
                      <li>
                        <?php echo $_smarty_tpl->tpl_vars['bb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['collegeName'];?>

                      </li>
                      <li>
                        Percentage/ CGPA/ GPA:<?php echo $_smarty_tpl->tpl_vars['bb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Percentage']/'CGPA'/'GPA';?>

                      </li>
                      <?php
}
}
?>
                    </ul>

                  </div>
                  
                </div>
                <div class="col-2"><b>Previous Project:</b></div>
                <div class="col-10">
                  <ul>
                     <?php $_smarty_tpl->_assignInScope('previousProject', $_smarty_tpl->tpl_vars['candidateDetail']->value['projectDetails']);?>
                      <?php echo smarty_function_counter(array('start'=>0,'print'=>false),$_smarty_tpl);?>

                      <?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['previousProject']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                       
                       <li><strong>Project-<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</strong></li>
                    <li><strong><?php echo $_smarty_tpl->tpl_vars['previousProject']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['project_title'];?>
 (<?php echo $_smarty_tpl->tpl_vars['previousProject']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['project_title'];?>
)</strong></li>
                    <li><?php echo $_smarty_tpl->tpl_vars['previousProject']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['project_description'];?>
</li>
                     <?php
}
}
?>
                  </ul>

                  </ul>
                </div>
                <div class="col-2"><b>Previous Jobs:</b></div>
                <div class="col-10">
                  <ul>
                    <?php $_smarty_tpl->_assignInScope('previousJobs', $_smarty_tpl->tpl_vars['candidateDetail']->value['previousJobDetails']);?>
                      <?php echo smarty_function_counter(array('start'=>0,'print'=>false),$_smarty_tpl);?>

                     
                      <?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['previousJobs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                       
                       <li><strong><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</strong></li>
                    <li><strong><?php echo $_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['designantion'];?>
 (<?php echo $_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['join_date'];?>
 -<?php echo $_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['end_date'];?>
)</strong></li>
                    <li><?php echo $_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['organization'];?>
</li>
                    <li><?php echo $_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['description'];?>
</li>
                     <?php
}
}
?>
                  </ul>
                </div>
                <div class="col-2"><b>Currently Working:</b></div>
                <div class="col-10">
                  <ul>
                    <li><b> Company Name-</b></li>
                    <li>
                      <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_name'];?>

                    </li>
                    <li><b> Desginantion-</b></li>
                    <li>
                      <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_designation'];?>

                    </li>
                    <li><b> Join Date-</b></li>
                    <li>
                      <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date'];?>

                    </li>
                    <li><b> About The Job-</b></li>
                    <li>
                      <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_job_descripton'];?>

                    </li>
                  </ul>
                </div>
                <div class="col-2"><b>Contact Details</b></div>
                <div class="col-10">
                  <ul>
                    <li>Email id:<?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['contact_email'];?>
</li>
                    <li>Contact: <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['contact_phone_no'];?>
</li>
                  </ul>
                </div>
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
            <a href="#">Wit</a>
            <a href="#">Wit</a>
            <a href="#">Wit</a>
            <a href="#">Wit</a>
            <a href="#">Wit</a>
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
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
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
    <?php echo '<script'; ?>
 src="js/smoothscroll.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
      $(window).on('load resize', function() {
        if ($(this).outerWidth() < 992) {
          //768
          $('body')
            .removeClass('sidebar-collapsed')
            .addClass('drawer-sidebar');
        } else {
          $('body').removeClass('drawer-sidebar');
        }
      });

      $(function() {
        $('.js-sidebar-toggler').click(function(e) {
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
 src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      $(document).ready(function() {
        $('#example').DataTable();
      });
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      $('#customFile').on('change', function() {
        var fileName = $(this)
          .val()
          .replace('C:\\fakepath\\', ' ');
        $(this)
          .next('.custom-file-label')
          .html(fileName);
      });
    <?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
