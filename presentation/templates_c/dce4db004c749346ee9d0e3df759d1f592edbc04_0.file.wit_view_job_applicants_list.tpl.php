<?php
/* Smarty version 3.1.33, created on 2019-11-06 18:34:03
  from 'C:\xampp\htdocs\womenintech\presentation\templates\wit_view_job_applicants_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc3040b7ecf81_88095522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dce4db004c749346ee9d0e3df759d1f592edbc04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\womenintech\\presentation\\templates\\wit_view_job_applicants_list.tpl',
      1 => 1571749561,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc3040b7ecf81_88095522 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\womenintech\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'jobCandidateList','assign'=>'obj'),$_smarty_tpl);?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="<?php echo base_url();?>
/images/wit-favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css"
    integrity="sha256-PIRVsaP4JdV/TIf1FR8UHy4TFh+LiRqeclYXvCPBeiw=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css" />
  <link rel="stylesheet" href="styles/normalize.css" />
  <link rel="stylesheet" href="styles/stylesheet.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>
/styles/job_portal_styles.css?v=<?php echo jsversion();?>
" />
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
  <link href="<?php echo base_url();?>
/styles/wit_job_dashboard_two.css?v=<?php echo jsversion();?>
" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url();?>
/styles/datatablesStyles.css?v=<?php echo jsversion();?>
">
  <title>WiT | COMPANY JOBS APPLICANTS LIST</title>
</head>

<body>
  <input type="hidden" baseUrl=<?php echo base_url();?>
 class="baseUrl">
  <header class="navbar navbar-expand-lg navbar-dark fixed-top navbar-scrolling header scrolled">
    <a href="javascript:;" class="sidebar-toggler js-sidebar-toggler navbar-icon waves-effect waves-light"
      data-target="#sidebar">
      <i class="fas fa-bars" style="color:#E94161; font-size:25px;"></i>
    </a>
    <a class="logo bg-white" href=<?php echo base_url();?>
><img src="<?php echo base_url();?>
/images/witlogo-dashboard-logo.jpeg" width="100"
        height="60" tyle="max-width:100%; height:auto;
                alt=" wit-logo" /></a>
    <button class="navbar-toggler navbar-icon waves-effect waves-light" type="button" data-toggle="collapse"
      data-target="#navbarNav"></button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav navbar-toolbar ml-auto">

        <li>
          <div class="logout nav-link  waves-effect waves-light">LOGOUT
          </div>
        </li>

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
      <div class="row p-4">
        <div class="col-sm-12 my-2 bg-white"
          style="position: sticky; top:64px; z-index: 200;border: 1px solid #b4aeae;">
          <h4 class="py-2">Number of applications</h4>
        </div>
        <div class="col-sm-12 witViewList">
          <div class="hiddenTableForList">
            <div class="tale-responsive">

              <table class="table table-sm table-striped d-none" id="applicantData">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Date</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Contact Email</th>
                    <th scope="col">Contact Phone</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Martial Status</th>
                    <th scope="col">Permanent Address</th>
                    <th scope="col">Prefer City</th>
                    <th scope="col">Prefer Job Type</th>
                    <th scope="col">Functional Area</th>
                    <th scope="col">Industry Type</th>
                    <th scope="col">Experience</th>
                    <th scope="col">Residence Address</th>
                    <th scope="col">10th Details</th>
                    <th scope="col">12th Details</th>
                    <th scope="col">Graduation Details</th>
                    <th scope="col">Post Graduation Details</th>
                    <th scope="col">Other Education Details</th>
                    <th scope="col">Skills</th>
                    <th scope="col">Previous Project1 Details</th>
                    <th scope="col">Previous Project2 Details</th>
                    <th scope="col">Previous Project3 Details</th>
                    <th scope="col">Current Compamny Details</th>
                    <th scope="col">Previous Job1 Details</th>
                    <th scope="col">Previous Job2 Details</th>
                    <th scope="col">Previous Job3 Details</th>

                  </tr>
                </thead>
                <tbody>

                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj']->value->candidateList, 'list');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
?>


                  <tr>
                    <th scope="row"><?php echo $_smarty_tpl->tpl_vars['list']->value['applicant_id'];?>
</th>
                    <th scope="row"><?php echo $_smarty_tpl->tpl_vars['list']->value['posted_date'];?>
</th>
                    <td class="text-capitalize">
                      <?php echo $_smarty_tpl->tpl_vars['list']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['list']->value['last_name'];?>

                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['list']->value['contact_email'];?>
</td>
                    <td>
                      <?php echo $_smarty_tpl->tpl_vars['list']->value['contact_phone_no'];?>

                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['list']->value['date_of_Birth'];?>
</td>
                    <td><?php if ($_smarty_tpl->tpl_vars['list']->value['martial_status'] == '') {?>N/A<?php } else {
echo $_smarty_tpl->tpl_vars['list']->value['martial_status'];
}?></td>

                    <td><?php if ($_smarty_tpl->tpl_vars['list']->value['permanent_address'] == '') {?>N/A <?php } else {
echo $_smarty_tpl->tpl_vars['list']->value['permanent_address'];
}?></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['list']->value['prefered_city'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['list']->value['prefered_job_types'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['list']->value['functional_area'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['list']->value['industry_type'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['list']->value['experience'];?>
</td>
                    <td><?php if ($_smarty_tpl->tpl_vars['list']->value['resident_address'] == '') {?>N/A <?php } else {
echo $_smarty_tpl->tpl_vars['list']->value['resident_address'];
}?></td>
                    <td><?php if ($_smarty_tpl->tpl_vars['list']->value['10th_class_details'] == ",,,") {?> N/A
                      <?php } else {
echo $_smarty_tpl->tpl_vars['list']->value['10th_class_details'];?>
 <?php }?></td>


                    <td><?php if ($_smarty_tpl->tpl_vars['list']->value['12th_class_details'] == ",,,") {?> N/A
                      <?php } else {
echo $_smarty_tpl->tpl_vars['list']->value['12th_class_details'];
}?></td>

                    <td><?php if ($_smarty_tpl->tpl_vars['list']->value['graduation_details']['collegeName'] == '') {?>N/A<?php } else {
echo $_smarty_tpl->tpl_vars['list']->value['graduation_details']['collegeName'];?>
,<?php echo $_smarty_tpl->tpl_vars['list']->value['graduation_details']['course'];?>
,
                      <?php echo $_smarty_tpl->tpl_vars['list']->value['graduation_details']['Specilization'];?>
,
                      <?php echo $_smarty_tpl->tpl_vars['list']->value['graduation_details']['Year_of_Complition'];?>
,
                      <?php echo $_smarty_tpl->tpl_vars['list']->value['graduation_details']['percentage'];
}?></td>



                    <td><?php if ($_smarty_tpl->tpl_vars['list']->value['post_graduation_details']['collegeName'] == '') {?>N/A<?php } else {
echo $_smarty_tpl->tpl_vars['list']->value['post_graduation_details']['collegeName'];?>
,<?php echo $_smarty_tpl->tpl_vars['list']->value['post_graduation_details']['course'];?>
,
                      <?php echo $_smarty_tpl->tpl_vars['list']->value['post_graduation_details']['Specilization'];?>
,
                      <?php echo $_smarty_tpl->tpl_vars['list']->value['post_graduation_details']['Year_of_Complition'];?>
,
                      <?php echo $_smarty_tpl->tpl_vars['list']->value['post_graduation_details']['percentage'];
}?></td>

                    <td><?php if ($_smarty_tpl->tpl_vars['list']->value['additional_education_details'] == ",,,,") {?> N/A
                      <?php } else {
echo $_smarty_tpl->tpl_vars['list']->value['additional_education_details'];?>
 <?php }?></td>
                    <td><?php if ($_smarty_tpl->tpl_vars['list']->value['skill_set'] == '') {?>N/A<?php } else {
echo $_smarty_tpl->tpl_vars['list']->value['skill_set'];
}?></td>

                    <td><?php if ($_smarty_tpl->tpl_vars['list']->value['previous_project1_details'] == ',,') {?>N/A<?php } else {
echo $_smarty_tpl->tpl_vars['list']->value['previous_project1_details'];
}?></td>

                    <td><?php if ($_smarty_tpl->tpl_vars['list']->value['previous_project2_details'] == ',,') {?>N/A<?php } else {
echo $_smarty_tpl->tpl_vars['list']->value['previous_project2_details'];
}?></td>

                    <td><?php if ($_smarty_tpl->tpl_vars['list']->value['previous_project2_details'] == ',,') {?>N/A<?php } else {
echo $_smarty_tpl->tpl_vars['list']->value['previous_project3_details'];
}?></td>


                    <td><?php if ($_smarty_tpl->tpl_vars['list']->value['current_company_name'] == '') {?>N/A<?php } else {
echo $_smarty_tpl->tpl_vars['list']->value['current_company_name'];?>
,
                      <?php echo $_smarty_tpl->tpl_vars['list']->value['current_salary'];?>
,
                      <?php echo $_smarty_tpl->tpl_vars['list']->value['current_designation'];?>
,
                      <?php echo $_smarty_tpl->tpl_vars['list']->value['current_company_joinee_date'];?>
,
                      <?php echo $_smarty_tpl->tpl_vars['list']->value['current_job_descripton'];
}?></td>

                    <td><?php if ($_smarty_tpl->tpl_vars['list']->value['previous_job1'] == ',,,,') {?>N/A<?php } else {
echo $_smarty_tpl->tpl_vars['list']->value['previous_job1'];
}?></td>


                    <td><?php if ($_smarty_tpl->tpl_vars['list']->value['previous_job2'] == ',,,,') {?>N/A<?php } else {
echo $_smarty_tpl->tpl_vars['list']->value['previous_job2'];
}?></td>


                    <td><?php if ($_smarty_tpl->tpl_vars['list']->value['previous_job3'] == ',,,,') {?>N/A<?php } else {
echo $_smarty_tpl->tpl_vars['list']->value['previous_job3'];
}?></td>




                  </tr>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj']->value->candidateList, 'list');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
?>
        <div class="col-sm-12 p-4 my-2 bg-white" style="border: 1px solid #b4aeae;">
          <h4><?php echo ucfirst($_smarty_tpl->tpl_vars['list']->value['first_name']);?>
 <?php echo ucfirst($_smarty_tpl->tpl_vars['list']->value['last_name']);?>
</h4>
          <p><?php echo ucfirst($_smarty_tpl->tpl_vars['list']->value['permanent_address']);?>
</p>
          <h6>Education:</h6>

          <?php if ($_smarty_tpl->tpl_vars['list']->value['post_graduation_details']['course'] !== '' || $_smarty_tpl->tpl_vars['list']->value['post_graduation_details']['collegeName'] !== '') {?>
          <p>
            <?php echo $_smarty_tpl->tpl_vars['list']->value['post_graduation_details']['course'];?>
(<?php echo $_smarty_tpl->tpl_vars['list']->value['post_graduation_details']['Year_of_Complition'];?>
),
            <?php echo $_smarty_tpl->tpl_vars['list']->value['post_graduation_details']['collegeName'];?>

          </p>
          <?php } elseif ($_smarty_tpl->tpl_vars['list']->value['graduation_details']['course'] !== '' || $_smarty_tpl->tpl_vars['list']->value['graduation_details']['collegeName'] !== '') {?>
          <p>
            <?php echo $_smarty_tpl->tpl_vars['list']->value['graduation_details']['course'];?>
(<?php echo $_smarty_tpl->tpl_vars['list']->value['graduation_details']['Year_of_Complition'];?>
),
            <?php echo $_smarty_tpl->tpl_vars['list']->value['graduation_details']['collegeName'];?>

          </p>
          <?php } else { ?><p class="mb-3">N/A</p>
          <?php }?>
          <h6>Skills</h6>
          <p><?php echo $_smarty_tpl->tpl_vars['list']->value['skill_set'];?>
</p>
          <a href="<?php echo base_url();?>
/applicant_profile/candidate_id=<?php echo $_smarty_tpl->tpl_vars['list']->value['applicant_id'];?>
" class="btn btn-sm witBtn">View Full
            Application</a>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
 src="<?php echo base_url();?>
/js/smoothscroll.js?v=<?php echo jsversion();?>
"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
>
    $(document).ready(function () {
      $('.js-example-basic-multiple').select2({
        tags: true,
        tokenSeparators: [',', ' '],
        placeholder: 'Enter Required Qualification',
        allowClear: true
      });
      $('.skills-required-for-job').select2({
        tags: true,
        tokenSeparators: [',', ' '],
        placeholder: 'Enter Required Skills',
        allowClear: true
      });
      $('.functional-area').select2({
        tags: true,
        tokenSeparators: [',', ' '],
        placeholder: 'Enter Required functional Area',
        allowClear: true
      });
      $('.industry-type').select2({
        tags: true,
        tokenSeparators: [',', ' '],
        placeholder: 'Enter Required Industry Type',
        allowClear: true
      });

      $('.job-location').select2({
        placeholder: 'Enter job location'
      });

      $('.js-example-basic-single').select2({
        placeholder: 'Enter Required Experience'
      });
    });
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js
  "><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    $(document).ready(function () {
      $('#applicantData').DataTable({
        dom: 'B',
        buttons: [
          {
            extend: 'csv',
            title: function () {
              return "Company Jobs Applicants List";
            }
          },
          {
            extend: 'excel',
            title: function () {
              return "Company Jobs Applicants List";
            }
          }
        ],
        responsive: true
      });
    });
  <?php echo '</script'; ?>
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
      $('.logout').on('click', function () {
        var baseUrl = $('.baseUrl').attr('baseUrl');

        $.ajax({
          url: 'index.php?wit=true',
          dataType: 'json',
          type: 'post',
          data: {
            logOut: true
          },
          success: function (response) {
            window.location = baseUrl + '' + '/wit';
          }
        });
      });
    });
  <?php echo '</script'; ?>
>
</body>

</html><?php }
}
