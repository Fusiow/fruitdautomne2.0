<?php /* Smarty version Smarty-3.1.19, created on 2016-12-19 16:16:48
         compiled from "C:\wamp64\www\fruitdautomne\modules\welcome\views\contents\end.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67095857f9e0c41c88-00159291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff8b918c0deba42e1139d02dbc899ba0c148e956' => 
    array (
      0 => 'C:\\wamp64\\www\\fruitdautomne\\modules\\welcome\\views\\contents\\end.tpl',
      1 => 1479911924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67095857f9e0c41c88-00159291',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5857f9e0c74919_78709551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5857f9e0c74919_78709551')) {function content_5857f9e0c74919_78709551($_smarty_tpl) {?>

<div id="onboarding-welcome" class="modal-header">
  <button class="onboarding-button-next pull-right close" type="button">&times;</button>
  <h2 class="text-center text-md-center"><?php echo smartyTranslate(array('s'=>'Over to you!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</h2>
  <p class="text-center text-md-center">
    <?php echo smartyTranslate(array('s'=>'You\'ve seen the essential, but there\'s a lot more to explore.','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
<br />
    <?php echo smartyTranslate(array('s'=>'Some ressources can help you go further:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

  </p>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 text-center text-md-center">
        <a class="final-link" href="http://doc.prestashop.com/display/PS16/Getting+Started" target="_blank">
          <i class="material-icons">import_contacts</i><br />
          <?php echo smartyTranslate(array('s'=>'Starter Guide','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

        </a>
      </div>
      <div class="col-md-6 text-center text-md-center">
        <a class="final-link" href="https://www.prestashop.com/forums/" target="_blank">
          <i class="material-icons">forum</i><br />
          <?php echo smartyTranslate(array('s'=>'Forum','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

        </a>
      </div>
      <div class="col-md-6 text-center text-md-center">
        <a class="final-link" href="https://www.prestashop.com/en/training-prestashop" target="_blank">
          <i class="material-icons">school</i><br />
          <?php echo smartyTranslate(array('s'=>'Training','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

        </a>
      </div>
      <div class="col-md-6 text-center text-md-center">
        <a class="final-link" href="https://www.youtube.com/user/prestashop" target="_blank">
          <i class="material-icons">videocam</i><br />
          <?php echo smartyTranslate(array('s'=>'Video tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

        </a>
      </div>
    </div>
  </div>
  <br />
  <div class="text-center text-md-center">
      <button class="btn btn-primary onboarding-button-next"><?php echo smartyTranslate(array('s'=>'I\'m ready','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
  </div>
</div>
<?php }} ?>
