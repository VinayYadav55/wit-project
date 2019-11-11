<?php
/* Smarty version 3.1.33, created on 2019-08-29 11:20:24
  from 'C:\xampp\htdocs\vipananwebtest\presentation\templates\upcoming_events.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d6798d8461696_24743662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8daa320a9b60858d1e5c520f5d0cafaa4dc8723' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vipananwebtest\\presentation\\templates\\upcoming_events.tpl',
      1 => 1567070010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d6798d8461696_24743662 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vipananwebtest\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="images/wit-favicon.ico" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="styles/upcomingevents.css" />

  <title>Upcoming Events</title>
</head>

<body>
  <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   <div style="margin-top: 75px !important;">
  <div class="container-fluid bg-img-for-events-page">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 py-5">
          <h1 class="text-center Heading py-5 text-white">Upcoming Events</h1>
          <hr style="background-color: white;" />
        </div>
      </div>
    </div>

    <div class="container-fluid  pb-5 mb-5">
      <div class="container">
        <div class="row">
          <div
            class="col-sm-12  mt-5 p-5 colRadius bg-white newsForDiv border border-warning border-top-0 border-right-0 border-bottom-0 ">
            <div class="row ">
              <div class="col-md-4 col-12">
                <img src="images/wit_event_sep_2019.png" alt="" style="height: auto; width:100%;" />
              </div>
              <div class="py-2 py-sm-0 col-md-8">
                <h1 class=" text-center subHeading mb-3 mt-3">
                  WomenInTech(WiT) Growth Summit <br />
                  (Date- 24th Sep, 2019)
                </h1>
                <hr />
                <p class="aboutTxtBound">
                  WomenInTech Growth Summit is one of a kind platform curated with a focus on women in STEM. The
                  Platform is the perfect opportunity for organisations to meet with talented women in the field of
                  STEM.
                </p>
                <p>Delegates can grow their network and meet STEM experts from the industry to expand their knowledge
                </p>
                <a href="<?php echo base_url();?>
/wit_growth_summit_2019" class="btn witBtn float-right bigBtn px-3">
                  FIND MORE</a>
              </div>
            </div>
          </div>
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
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"><?php echo '</script'; ?>
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
</body>

</html>

































<!-- // ******************************************************************* -->
<!-- <?php echo smarty_function_load_presentation_object(array('filename'=>'upcomingEvents','assign'=>'obj'),$_smarty_tpl);?>

<!DOCTYPE html>
<html lang="en">
  <head> -->
<!-- Required meta tags -->
<!-- <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    /> -->

<!-- Bootstrap CSS -->
<!-- <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="styles/upcomingevents.css" />

    <title>Upcoming Events</title>
  </head>
  <body>
    
    <div class="container-fluid eventsContainer">
      <p class="subHeading justify-content-center">UPCOMING EVENTS</p>
      <div class="container-fluid cont">
        <div class="column">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj']->value->upcomingEvents, 'eventDetails');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['eventDetails']->value) {
?>
          <div class="col-md-12 singleEventContainer">
            <div class="row">
              <div class="col-md-2 p-0">
                <div class="imageContainer">
                  <img src="images/mentor.jpg" class="img-fluid eventImage" />
                </div>
              </div>
              <div class="col-md-10 pr-0">
                <div class="column">
                  <div class="col-md-12">
                    <div class="eventName">
                      <a href="#"><?php echo $_smarty_tpl->tpl_vars['eventDetails']->value['event_name'];?>
</a>
                    </div>
                    <div class="eventType">
                      <p class="eventText"><?php echo $_smarty_tpl->tpl_vars['eventDetails']->value['event_type'];?>
</p>
                      <div class="eventDescription">
                        <?php echo $_smarty_tpl->tpl_vars['eventDetails']->value['event_description'];?>

                      </div>
                      <div class="eventDate">
                        DATE: <span><?php echo $_smarty_tpl->tpl_vars['eventDetails']->value['event_date'];?>
</span>
                      </div>
                      <div class="startTime">
                        START TIME:<span><?php echo $_smarty_tpl->tpl_vars['eventDetails']->value['event_time'];?>
</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 pr-0">
                    <div class="row">
                      <div class="col-md-10"></div>
                      <div class="col-md-2 px-0">
                        <div class="col-md-12 col-sm-12 col-lg-12 px-0">
                          <button
                            class="findOutMoreBtn btn  btn-md btn-sm btn-lg"
                          >
                            FIND OUT MORE
                            <span class="rightArrow"></span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>
    </div> -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <?php echo '<script'; ?>

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
  </body>
</html> --><?php }
}
