<?php
/* Smarty version 3.1.33, created on 2019-07-26 10:33:26
  from 'C:\xampp\htdocs\sanjeev\presentation\templates\scholarship.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3abad629f719_95081846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bd63066841a5b5622d0a142f0b6dadafeab5fff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sanjeev\\presentation\\templates\\scholarship.tpl',
      1 => 1563930650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d3abad629f719_95081846 (Smarty_Internal_Template $_smarty_tpl) {
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

    <link rel="stylesheet" type="text/css" href="styles/slick.css" />
    <link rel="stylesheet" type="text/css" href="styles/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="styles/scholarship.css" />

    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/29bef62cc9.js"><?php echo '</script'; ?>
>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <title>Home|WIT</title>
  </head>
  <body>
    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 py-5">
          <h1 class="Heading text-center py-2">
            SCHOLARSHIPS
          </h1>
          <hr />
        </div>
      </div>
    </div>
    <div class="container-fluid  left2rightGrad">
      <div class="container">
        <div class="row  pt-5">
          <div class="col-md-12">
            <div class="p-5 text-center"  style="font-size:20px; word-spacing:2px; line-height:2rem; ">
              WiT aims to provide Scholarships and financial support to
              meritorious and deserving girls to pursue education in STEM.
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- second part -->

    <div class="container-fluid mt-5 pt-5 right2leftGrad">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="images/womentalking.jpg" class="img-fluid" />
          </div>
          <div class="col-md-6">
            <h1 class="subHeading text-center ">JOURNEY<span style="font-size:10px;">(Yet to be shared)</span></h1>
            <p class="p-5 spacing text-justify">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- third part -->
    <!-- end -->

    <div class="container-fluid aboutusltr">
      <div class="container">
        <div class="row mt-5 pt-5">
          <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (0) : 0-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
          <div class="col-md-4 mb-5">
            <div class="card img-fluid" style="width:500px">
              <img
                class="card-img-top"
                src="images/singlemen.jpg"
                alt="Card image"
                style="width:100%"
              />
              <div class="card-img-overlay overlayBtn ml-5">
                <a href="#" class="btn btn-sm btn-white profileBtn"
                  >See Profile</a
                >
              </div>
              <div class="card-body pt-2">
                <h4 class="text-center subHeading ">Peter Carry</h4>
                <p class="card-text">
                  Some example text some example text. John Doe is an architect
                  and engineer
                </p>

                <div>
                  <a href="#" class="btn btn-sm witBtn btn-block">DONATE</a>
                </div>
              </div>
            </div>
          </div>
          <?php }
}
?>
        </div>
        <div class="col-sm-4 offset-sm-4  text-center py-5 bg-light">
          <a href="?contactUs=true" class="btn witBtn">For Corporate Donation</a>
        </div>
      </div>
    </div>

     <div class="mt-5">
        <div class="container-fluid p-5 didYouKnowContainer">
          <div class="container">
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <h1 class="text-center subHeading ">DID YOU KNOW</h1>
                <hr />
                <div class="responsive2">
                  <div class="slide p-4">
                    <div class="card chaya ">
                      <div class="card-body cardd">
                        <p class=" feedbacktext ">
                          <i class="fa fa-quote-left left"></i> Women make up
                          <b>40%</b> of the world’s workforce, according to the
                          <b>World Bank.</b> Yet, the technology field is
                          notoriously male-dominated at all levels – Considerably
                          worse than in non-technology industries <br />
                          – As reported by Payscale
                          <i class="fa fa-quote-right right"></i>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="slide p-4">
                    <div class="card chaya">
                      <div class="card-body cardd">
                        <p class=" feedbacktext">
                          <i class="fa fa-quote-left left"></i> Only <b>21%</b> of
                          <b>executives in tech</b> are women – This despite
                          evidence that more women lead to greater
                          <b>innovation</b> and enhanced <b>profitability</b
                          ><i class="fa fa-quote-right right"></i>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="slide p-4">
                    <div class="card chaya">
                      <div class="card-body cardd">
                        <p class=" feedbacktext">
                          <i class="fa fa-quote-left left"></i> The two biggest
                          barriers women say they face in the technology workplace
                          are lack of mentors <b> (48%)</b> and lack of female
                          role models <b>(42%)</b> ,gender bias at workplace,
                          unequal growth opportunities and unequal pay for same
                          <b>skills</b> <i class="fa fa-quote-right right"></i>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="slide p-4">
                    <div class="card chaya ">
                      <div class="card-body cardd">
                        <p class="feedbacktext">
                          <i class="fa fa-quote-left left"></i>
                          <b> 93% girls</b> surveyed in India between
                          <b>12 to 14-years</b> consider Science, Technology,
                          Engineering and Mathematics (STEM) related careers early
                          on. However, <b>38% Indian</b> teenage girls believe
                          that they are <b>‘less likely’</b> to take up STEM
                          because the industry is <b>‘male-dominated’</b> and many
                          others drop out before reaching leadership levels
                          <i class="fa fa-quote-right right"></i>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="slide p-4">
                    <div class="card chaya ">
                      <div class="card-body cardd">
                        <p class="feedbacktext">
                          <i class="fa fa-quote-left left"></i> In the
                          <b>2016–17,</b> colleges approved by the
                          <b>All India Council for Technical Education (AICTE)</b>
                          enrolled <b>717,506</b> undergraduate students –
                          <b>33.7%</b> were female. Women represented
                          <b>28.1%</b> of participants in Bachelor of Engineering
                          and Bachelor of Technology degree (Research 2018; India
                          Under Graduate Education, data as per
                          <b>MHRD</b> 2016-2017)
                          <i class="fa fa-quote-right right"></i>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="slide p-4">
                    <div class="card chaya ">
                      <div class="card-body cardd">
                        <p class="feedbacktext">
                          <i class="fa fa-quote-left left"></i> Indian technology
                          industry has <b>26%</b> women in
                          <b>engineering</b> roles
                          <i class="fa fa-quote-right right"></i>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="slide p-4">
                    <div class="card chaya ">
                      <div class="card-body cardd">
                        <p class="feedbacktext ">
                          <i class="fa fa-quote-left left"></i> Nearly
                          <b>50%</b> women <b>engineers</b> quit technology
                          <i class="fa fa-quote-right right"></i>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="slide p-4">
                    <div class="card chaya ">
                      <div class="card-body cardd">
                        <p class="feedbacktext">
                          <i class="fa fa-quote-left left"></i> Only
                          <b>7%</b> women reach the <b>C-Suite</b> Source:
                          <b> Nasscom Report 2017</b>
                          <i class="fa fa-quote-right right"></i>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="slide p-4">
                    <div class="card chaya ">
                      <div class="card-body cardd">
                        <p class="feedbacktext ">
                          <i class="fa fa-quote-left left"></i>
                          <b>1.5 million</b> IT engineers pass out each year in
                          India through over <b>3400+</b> engineering colleges
                          peppered across the country. Statistics place employable
                          numbers from these graduates at a mere <b>7%</b>.
                          <i class="fa fa-quote-right right"></i>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-2"></div>
            </div>
          </div>
        </div>
      </div>

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
    <?php echo '<script'; ?>

      type="text/javascript"
      src="//code.jquery.com/jquery-1.11.0.min.js"
    ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>

      type="text/javascript"
      src="//code.jquery.com/jquery-migrate-1.2.1.min.js"
    ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/slick.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/newsinsitesslick.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
