<?php
/* Smarty version 3.1.33, created on 2019-08-04 16:56:43
  from 'C:\xampp\htdocs\sanjeev\presentation\templates\job_title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d46f22b783342_40486837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '065087ce4778a96e5f113437289c309c6db22250' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sanjeev\\presentation\\templates\\job_title.tpl',
      1 => 1564930571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d46f22b783342_40486837 (Smarty_Internal_Template $_smarty_tpl) {
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
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"
    /> -->
   
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
/styles/job_title.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous"
    />
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/29bef62cc9.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
/libs/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
/js/jobApply.js"><?php echo '</script'; ?>
>
    <title>Home|WIT</title>
  </head>
  <body>
    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container-fluid bg-light p-0">
      <input type="hidden" class="applicant_id" value="1">
      <div class="column bg-white p-0">
        <div class="col-md-12 py-2 jobTitleCont">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 text-center">
              <p class="postName" job_id="16">Senior Team Manager</p>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 text-center">
              <div class="row">
                <button
                  class="registerButton"
                  data-toggle="modal"
                  data-target="#myModal"
                >
                  Register
                </button>
                <button class="applyButton ml-5">Apply</button>
              </div>
            </div>
          </div>
          <!-- The Modal -->
          <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-md">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Register Form</h4>
                  <button type="button" class="close" data-dismiss="modal">
                    &times;
                  </button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <div class="container-fluid">
                    <!-- <div class="container"> -->
                    <div class="row">
                      <!-- <div class="col-md-2"></div> -->
                      <div class="col-md-12">
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
                          <div class="form-group">
                            <label for="contact">Password:</label>
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
                            <label for="contact">Contact:</label>
                            <input
                              type="text"
                              class="form-control"
                              id="contact"
                              placeholder="enter contact number"
                              name="contact"
                              required
                            />
                          </div>
                          <div
                            class="g-recaptcha form-group"
                            data-sitekey="6LdZfLAUAAAAAINb8k9mD2M0A6nShj8SmEoqJ1Sb"
                          ></div>
                          <div class="text-center">
                            <a
                              href="#!"
                              type="submit"
                              class="text-center btn  witBtn px-3"
                            >
                              Submit
                            </a>
                          </div>
                        </form>
                      </div>
                      <!-- <div class="col-md-4"></div> -->
                    </div>
                  </div>
                </div>
                <!-- </div> -->

                <!-- Modal footer -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container mb-3">
        <div class="row my-3 bg-white">
          <div class="col-md-10">
            <div class="row">
              <div class="col-md-2">
                <img
                  class=""
                  src="images/mentor.jpg"
                  height="100px"
                  width="100px"
                />
              </div>
              <div class="col-md-10">
                <div class="companyName py-2"><h4>Cargil</h4></div>
                <ul class="p-0 m-0 jobDescList">
                  <li><i class="fas fa-map-marker"></i> Bangalore/Bengaluru</li>
                  <li>
                    Merck Group, Electronics City Phase 1, Electronic City,
                    Karnataka, Bengaluru, Karnataka - 560100 India
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-2 p-0">
            <div class="column">
              <div class="col-md-12 p-0">
                <p class="postedDate">POSTED ON - 10 July 2019</p>
              </div>
              <div class="col-md-12 p-0">
                <button class="btn btn-block totalApplicant">
                  10 Applicants
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="row my-3 ">
          <div class="col-sm-7 col-md-7 col-lg-7 bg-white p-0 ">
            <div class="column">
              <div class="col-md-12">
                <h4>Job Description</h4>
              </div>
              <hr />
              <div class="col-md-12">
                <ul>
                  <li>
                    Accountable for planning and execution of the Global
                    Infrastructure Project Portfolio investment
                  </li>

                  <li style="list-style: none;">
                    <strong> Strategic Impact</strong>
                  </li>

                  <li>
                    Ensure successful planning and execution of the Global
                    Infrastructure Project Portfolio investment
                  </li>

                  <li>
                    Ensure infrastructure investment is clearly communicated and
                    directed to high priority areas
                  </li>

                  <li>Ensure projects meet financial targets</li>

                  <li>Improve quality and speed of project execution</li>

                  <li style="list-style: none;">
                    <h5>Stakeholder Management:</h5>
                  </li>

                  The individual will interact very closely with Technical IPT
                  leads within IT-I, and will also interact closely with the
                  business partners from IT-PMO, Controlling, and Procurement
                  organizations.

                  <li style="list-style:none"><h6>Who are you:</h6></li>

                  <li style="list-style: none;"><h5>EDUCATION</h5></li>

                  <li>University degree. MBA/Finance preferred.</li>

                  <li style="list-style: none;"><h5>WORK EXPERIENCE</h5></li>

                  <li>
                    Strong financial background. Experience managing
                    infrastructure project investment in a complex multi-sector,
                    multi-ERP, multi-legal entity environment.
                  </li>

                  <li>
                    Hands-on experience with Project Portfolio management
                    systems (e.g. PPMC)
                  </li>

                  <li>
                    Experience with financial reporting processes and controls
                  </li>

                  <li>
                    Project management experience in a complex matrix
                    environment in a global organization
                  </li>

                  <li>
                    Experience leading cross-functional process improvement
                    initiatives
                  </li>

                  <li style="list-style: none;"><h6>Competency Skills</h6></li>

                  <li>Ability to execute</li>

                  <li>Deep financial planning knowledge</li>

                  <li>
                    Excellent communication, interpersonal and relationship
                    management skills. Ability to drive consensus / set mutually
                    agreeable goals.
                  </li>

                  <li>
                    Clear understanding of industry standard IT infrastructure
                    platforms, terminology, and leading providers, including
                    Network, Telecommunications, Cloud, Datacenter, Server &
                    Storage
                  </li>

                  <li>
                    Ability to break complex problems into manageable tasks
                  </li>

                  <li>
                    Strong analytical skills and ability to think strategically
                  </li>

                  <li>Excellent organizational and time management skills</li>

                  <li>English language proficient</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-1 col-sm-1 col-lg-1"></div>
          <div class="col-sm-4 col-md-4 col-lg-4 bg-white">
            <div class="column">
              <div class="col-md-12">
                <h4>Job Type</h4>
                <hr />
                <div class=""><img src="" /><span>Full Time</span></div>
              </div>

              <div class="col-md-12">
                <p class="criteriaHeading">Functional Area</p>
                <p class="criteria">Accounting/Finance/Tax/CS/Audit</p>
              </div>
              <hr />
              <div class="col-md-12">
                <p class="criteriaHeading">Industry</p>
                <p class="criteria">Accounting/Finance/Tax/CS/Audit</p>
              </div>
              <hr />
              <div class="col-md-12">
                <p class="criteriaHeading">Education Required</p>
                <p class="criteria">Accounting/Finance/Tax/CS/Audit</p>
              </div>
              <hr />
              <div class="col-md-12">
                <p class="criteriaHeading">Experience Required</p>
                <p class="criteria">Accounting/Finance/Tax/CS/Audit</p>
              </div>
              <hr />
              <div class="col-md-12">
                <p class="criteriaHeading">Skills Required</p>
                <p class="criteria">Accounting/Finance/Tax/CS/Audit</p>
              </div>
              <hr />
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php echo '<script'; ?>

      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"
    ><?php echo '</script'; ?>
>
    <!-- <?php echo '<script'; ?>

      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ><?php echo '</script'; ?>
> -->
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
 src="https://www.google.com/recaptcha/api.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      $(document).ready(function() {
        $('#myModal').modal('handleUpdate');
      });
    <?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
