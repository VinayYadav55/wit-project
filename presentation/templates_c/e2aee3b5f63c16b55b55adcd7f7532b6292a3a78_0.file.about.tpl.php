<?php
/* Smarty version 3.1.33, created on 2019-08-31 01:29:06
  from '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d69cd627a1f10_12667164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2aee3b5f63c16b55b55adcd7f7532b6292a3a78' => 
    array (
      0 => '/home2/labiknmy/public_html/vipananwebtest/presentation/templates/about.tpl',
      1 => 1567214944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d69cd627a1f10_12667164 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <link rel="shortcut icon" href="images/wit-favicon.ico" type="image/x-icon">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="styles/slick.css" />
    <link rel="stylesheet" type="text/css" href="styles/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="styles/about.css" />

    <title>WiT | AboutUS</title>
  </head>
  <body>
    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
    <div class="bgimg ">
          <div class="mt-5">
      <div class="about-overlay"></div>
      <div class="container-fluid mt-5 pt-5">
        <div class="container py-5 mt-5">
          <div class="row my-5">
            <div class="col-sm-12 bg-light  p-5 colRadius">
              <div class="row ">
                <div class="col-sm-4">
                  <img
                    src="images/who_we_are_rbs_wit.jpg"
                    alt=""
                    style="height: auto; width:100%;"
                  />
                </div>
                <div class="py-2 py-sm-0 col-sm-8  ">
                  <h2 class="subHeading pt-0 pt-xs-5">WHO WE ARE</h2>
                  <hr />
                  <p class="aboutTxtBound">
                    Established in 2018, ‘WomenInTech (WiT)’ aims at promoting
                    STEM as a key career choice for women. This forum enables
                    the technology and HR leaders from the industry, NGOs, top
                    rated academicians and independent bodies connect and work
                    together to build awareness and encourage women to pursue
                    careers in STEM.
                  </p>
                  <a
                    href="?who_we_are=true"
                    class="btn witBtn  float-right bigBtn  px-3"
                  >
                    READ MORE</a
                  >
                </div>
              </div>
            </div>

            <div class="col-sm-12 bg-light mt-5 p-5 colRadius">
              <div class="row ">
                <div class="col-sm-4">
                  <img
                    src="images/final_images/what_we_dp_rbs_wit_original.png"
                    alt="" 
                    style="height: auto; width:100%;"
                  />
                </div>
                <div class="py-2 py-sm-0 col-sm-8  ">
                  <h2 class="subHeading pt-0 pt-xs-5">WHAT WE DO</h2>
                  <hr />
                  <p class="aboutTxtBound">
                    From inspiring women to thrive in technology careers,
                    handholding them in the journey from class to boardroom,
                    events and recognitions lie at the core of what we do.
                  </p>
                  <a
                    href="?what_we_do=true"
                    class="btn witBtn  float-right bigBtn  px-3"
                  >
                    READ MORE</a
                  >
                </div>
              </div>
            </div>

            <div class="col-sm-12 bg-light mt-5 p-5 colRadius">
              <div class="row ">
                <div class="col-sm-4">
                  <img
                    src="images/final_images/board_of_director_rbs_wit.png"
                    alt=""
                    style="height: auto; width:100%;"
                  />
                </div>
                <div class="py-5 py-sm-0 col-sm-8  ">
                  <h2 class="subHeading pt-0 pt-xs-5">MEMBERS</h2>
                  <hr />
                  <p class="aboutTxtBound">
                   WomenInTech addresses the need to work collectively as an industry to ensure that workplaces not only promote more women to take up education and careers in technology, but also create a conducive environment for working women to aspire for senior level roles.
                  </p>
                  <a
                    href="<?php echo base_url();?>
/board_of_directors"
                    class="btn witBtn float-right bigBtn  px-3"
                  >
                    READ MORE</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="mt-5">
      <div class="container-fluid bg-white p-5 didYouKnowContainer">
        <div class="container">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <h1 class="text-center subHeading ">DID YOU KNOW</h1>
              <hr />
              <div class="responsive2">
                <div class="slide p-4">
                  <div class="card chaya">
                    <div class="card-body cardd">
                      <p class=" feedbacktext">
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
                      <p class=" feedbacktext  ">
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
                      <p class=" feedbacktext ">
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
                      <p class="feedbacktext ">
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
                      <p class="feedbacktext ">
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
                      <p class="feedbacktext  ">
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
                      <p class="feedbacktext ">
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
