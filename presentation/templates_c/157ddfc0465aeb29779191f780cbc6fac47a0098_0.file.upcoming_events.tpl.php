<?php
/* Smarty version 3.1.33, created on 2019-07-16 15:35:51
  from 'C:\xampp\htdocs\rbs\presentation\templates\upcoming_events.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2dd2b7921211_41985911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '157ddfc0465aeb29779191f780cbc6fac47a0098' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rbs\\presentation\\templates\\upcoming_events.tpl',
      1 => 1563283290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d2dd2b7921211_41985911 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\rbs\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'upcomingEvents','assign'=>'obj'),$_smarty_tpl);?>

<!DOCTYPE html>
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
    <link rel="stylesheet" type="text/css" href="styles/upcomingevents.css" />

    <title>Upcoming Events</title>
  </head>
  <body>
    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
  </body>
</html>
<?php }
}
