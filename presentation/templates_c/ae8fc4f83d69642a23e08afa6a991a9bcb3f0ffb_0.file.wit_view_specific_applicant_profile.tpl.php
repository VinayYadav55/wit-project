<?php
/* Smarty version 3.1.33, created on 2019-10-09 07:31:34
  from '/home2/labiknmy/public_html/womenintech/presentation/templates/wit_view_specific_applicant_profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9d8cd6d55200_18800403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae8fc4f83d69642a23e08afa6a991a9bcb3f0ffb' => 
    array (
      0 => '/home2/labiknmy/public_html/womenintech/presentation/templates/wit_view_specific_applicant_profile.tpl',
      1 => 1570438286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9d8cd6d55200_18800403 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/labiknmy/public_html/womenintech/presentation/smarty_plugins/function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),1=>array('file'=>'/home2/labiknmy/public_html/womenintech/libs/smarty/plugins/function.counter.php','function'=>'smarty_function_counter',),));
echo smarty_function_load_presentation_object(array('filename'=>'jobCandidateList','assign'=>'obj'),$_smarty_tpl);?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="<?php echo base_url();?>
/images/wit-favicon.ico" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.css"
      integrity="sha256-sOzekWI0idT6INhELxtD6PppBzQpW7L8cGjCa4h7WsM="
      crossorigin="anonymous"
    /> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css"
    integrity="sha256-PIRVsaP4JdV/TIf1FR8UHy4TFh+LiRqeclYXvCPBeiw=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>
/styles/normalize.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>
/styles/stylesheet.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>
/styles/job_portal_styles.css?v=<?php echo jsversion();?>
" />
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard_two.css?v=<?php echo jsversion();?>
" rel="stylesheet" />

  <title>WiT | APPLICANT DETAILS | DASHBOARD</title>
</head>

<body>
     <input type="hidden" baseUrl=<?php echo base_url();?>
 class="baseUrl">
  <header class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled">
    <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
      data-target="#sidebar">
      <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
    </a>
    <a class="logo" href="<?php echo base_url();?>
"><img src="<?php echo base_url();?>
/images/witlogo-dashboard-logo.jpeg" width="100" height="60" /></a>
    <button class="navbar-toggler navbar-icon waves-effect waves-light" type="button" data-toggle="collapse"
      data-target="#navbarNav"></button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav navbar-toolbar ml-auto">
         <li><div class="logout nav-link  waves-effect waves-light">LOGOUT
        </div></li>
      </ul>
    </div>
  </header>
  <div id="sidebar" class="sidenav sidenav-fixed expand-lg" style="border-right:1px solid gray;">
    <div class="mt-5 pt-5 pl-3">
      <nav class="nav flex-column nav-pills">
        <a class="nav-link active" href="<?php echo base_url();?>
/dashboard">Dashboard</a>
      </nav>
    </div>
  </div>
  <div class="docs-content-wrapper" style="background-color:#f2dcdc;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 bg-white" style="position: sticky; top:64px; z-index:200;">
          <h2 class="text-center py-1">
            Detailed View of Application
          </h2>
        </div>
        

          <div class="col-sm-12 p-4 stylingLists">
            <?php $_smarty_tpl->_assignInScope('candidateDetail', $_smarty_tpl->tpl_vars['obj']->value->applicantDetails);?>

            <div class="col-sm-12 p-4 stylingLists">
              <div class="bg-white my-2 p-4" style="border:#bbbbbb 1px solid">
                <h4 class="text-capitalize"><?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['last_name'];?>
</h4>
                <p><?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['resident_address'];?>
</p>
                <h6>Skills</h6>
                <p><?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['skill_set'];?>
</p>
              </div>
              <div class="bg-white my-2 p-4" style="border:#bbbbbb 1px solid">
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

                        <li class="py-1">
                          <strong>
                            <?php echo $_smarty_tpl->tpl_vars['aa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['class'];?>

                            (<?php echo $_smarty_tpl->tpl_vars['aa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['passingYear'];?>
)</strong>
                        </li>

                        <li class="py-1">
                          <?php echo $_smarty_tpl->tpl_vars['aa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['schoolName'];?>

                        </li>
                        <li class="py-1">CGPA/Percentage: <?php echo $_smarty_tpl->tpl_vars['aa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['percentage'];?>
</li>
                        <hr>
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
                        <?php if ($_smarty_tpl->tpl_vars['bb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['course'] != '') {?>
                        <li class="py-1">
                          <strong><?php echo $_smarty_tpl->tpl_vars['bb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['course'];?>
(<?php echo $_smarty_tpl->tpl_vars['aa']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Year_of_Complition'];?>
)</strong>
                        </li>
                        <li class="py-1">
                          <?php echo $_smarty_tpl->tpl_vars['bb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['collegeName'];?>

                        </li>
                        <li class="py-1">
                          Percentage/ CGPA/ GPA: <?php echo $_smarty_tpl->tpl_vars['bb']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['percentage'];?>

                        </li>
                        <hr>
                        <?php }?>
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

                      <li class="py-1"><strong>Project-<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</strong></li>
                        <?php if ($_smarty_tpl->tpl_vars['previousProject']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['project_title']) {?>
                      <li class="py-1 text-capitalize"><strong><?php echo $_smarty_tpl->tpl_vars['previousProject']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['project_title'];?>

                          (<?php echo $_smarty_tpl->tpl_vars['previousProject']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['year_of_completion'];?>
)</strong>
                      </li>
                      <li class="py-1"><?php echo $_smarty_tpl->tpl_vars['previousProject']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['project_description'];?>
</li>
                      <hr>
                       <?php } else { ?>N/A
                  <?php }?>
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
                             <?php if ($_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['designantion'] != '') {?>
                      <li class="py-1 text-capitalize"><strong><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
-<?php echo $_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['designantion'];?>
 (<?php echo $_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['join_date'];?>

                          -<?php echo $_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['end_date'];?>
)</strong></li>
                      <li class="py-1 text-capitalize"><?php echo $_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['organization'];?>
</li>
                      <li class="py-1"><?php echo $_smarty_tpl->tpl_vars['previousJobs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['description'];?>
</li>
                      <hr>
                      <?php } else { ?>
                       N/A
                      <?php }?>
                      <?php
}
}
?>
                    </ul>
                  </div>
                  <div class="col-2"><b>Currently Working:</b></div>
                  <div class="col-10">
                      <?php if ($_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_name'] != '') {?>
                    <ul>
                      <li class="py-1"><b> Company Name</b></li>
                      <li class="py-1">
                        <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_name'];?>

                      </li>
                      <li class="py-1"><b> Desginantion</b></li>
                      <li class="py-1">
                        <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_designation'];?>

                      </li>
                    <!--  <li class="py-1"><b> Join Date</b></li>
                      <li class="py-1">
                        <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_company_joinee_date'];?>

                      </li>-->
                      <li class="py-1"><b> About The Job</b></li>
                      <li class="py-1">
                        <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['current_job_descripton'];?>

                      </li>
                    </ul>
                     <?php } else { ?>
                <ul>
                  <li class="text-danger">Not Working</li>
                </ul>
                <?php }?>
                  </div>
                  <div class="col-2"><b>Contact Details:</b></div>
                  <div class="col-10">
                    <ul>
                      <li class="py-1">Email id:<?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['contact_email'];?>
</li>
                      <li class="py-1">Contact: <?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['contact_phone_no'];?>
</li>
                    </ul>
                  </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['candidateDetail']->value['resume_link']) {?>
                  <div class="col-sm-4 offset-sm-4 text-center text-white">
                <a class="text-white py-2 px-5 my-2 witBtn"
                  href="<?php echo base_url();?>
/<?php echo $_smarty_tpl->tpl_vars['candidateDetail']->value['resume_link'];?>
" download>Download
                  Resume</a>
              </div>
              <?php }?>
              </div>
            </div>
          </div>
      </div>
    </div>

 
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"><?php echo '</script'; ?>
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
 src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"
      integrity="sha256-kQ6DQtOnXtjGYnAEMZQjpsioC75ND0K9I8MyjtdLCyk=" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/smoothscroll.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      $(document).ready(function () {
        $('#example').DataTable();
      });
    <?php echo '</script'; ?>
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
           $('.logout').on('click', function() {
    var baseUrl = $('.baseUrl').attr('baseUrl');

    $.ajax({
      url: 'index.php?wit=true',
      dataType: 'json',
      type: 'post',
      data: {
        logOut: true
      },
      success: function(response) {
        window.location = baseUrl + '' + '/wit';
      }
    });
  });
      });
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
/js/wit_admin_login.js?v=<?php echo jsversion();?>
"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
