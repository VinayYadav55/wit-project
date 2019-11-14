<?php
/* Smarty version 3.1.33, created on 2019-11-12 13:20:39
  from 'C:\xampp\htdocs\womenintech\presentation\templates\mentee_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcaa397d838f0_04370405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db2a7bba36603b70ca668f318f97bd21a3573629' => 
    array (
      0 => 'C:\\xampp\\htdocs\\womenintech\\presentation\\templates\\mentee_list.tpl',
      1 => 1573561109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:dashheader.tpl' => 1,
    'file:followers.tpl' => 1,
  ),
),false)) {
function content_5dcaa397d838f0_04370405 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\womenintech\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>'userDashboard','assign'=>'obj'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('userSessionDetail', $_SESSION['userDetails']);
$_smarty_tpl->_assignInScope('candidateDetail', $_smarty_tpl->tpl_vars['obj']->value->applicantDetails);?>

<?php $_smarty_tpl->_subTemplateRender('file:dashheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
/js/menteelist.js?v=<?php echo jsversion();?>
"><?php echo '</script'; ?>
>
<div class="docs-content-wrapper">
        <div class="container mt-2">
            <div class="row">
                <div class="col-sm-8">
                <ul class="nav nav-pills mb-3  py-2 px-5 someStyleinList" id="pills-tab" role="tablist" style="position: sticky;top: 64px;z-index: 1;">
                        <li class="nav-item someStyleinListone">
                          <a class="nav-link active someStyleinListtwo requests" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">New Request</a>
                        </li>
                        <li class="nav-item someStyleinListone">
                                <a class="nav-link someStyleinListtwo followers" id="pills-Mentee-tab" data-toggle="pill" href="#pills-Mentee" role="tab" aria-controls="pills-Mentee" aria-selected="false">Your Mentee</a>
                              </li>
                      </ul>
                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">    <h6 class="text-success text-center" id="newmentor" >New Request</h6>
                            <div class="requestList">
                                <?php $_smarty_tpl->_subTemplateRender('file:followers.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </div>
                            
                            
                </div>


                            <div class="tab-pane fade" id="pills-Mentee" role="tabpanel" aria-labelledby="pills-Mentee-tab"><h6 class="text-success text-center">Your Mentee</h6>

                            </div>
                      </div>
                      <div class="newRequest">
                          
                      </div>
        </div>
        <div class="col-sm-4 border border-secondary">
                <div class="container" style="position: sticky;top: 112px;">
                        <div class="row">
                            <div class="col-sm-12" style="overflow-y: scroll;height: 550px;">
                                <h5 class="text-success text-center py-3">News Feed</h5>
                                <hr>
                                <h5 class="text-success text-center py-3">News Feed</h5>
                                <hr>  <h5 class="text-success text-center py-3">News Feed</h5>
                                <hr>  <h5 class="text-success text-center py-3">News Feed</h5>
                                <hr>  <h5 class="text-success text-center py-3">News Feed</h5>
                                <hr>  <h5 class="text-success text-center py-3">News Feed</h5>
                                <hr>  <h5 class="text-success text-center py-3">News Feed</h5>
                                <hr>  <h5 class="text-success text-center py-3">News Feed</h5>
                                <hr>  <h5 class="text-success text-center py-3">News Feed</h5>
                                <hr>
                            </div>
                        </div>
                    </div>
        </div>
        </div>
     </div>
    </div>
    <?php echo '<script'; ?>
>
    $(document).ready(function(){
        $('.followUnfollow').mouseenter(function(){
            $(this).html('Unfollow');
        });
        $('.followUnfollow').mouseleave(function(){
            $(this).html('Following').append(' <i class="far fa-check-circle"></i>');
        });
    });
    <?php echo '</script'; ?>
><?php }
}
