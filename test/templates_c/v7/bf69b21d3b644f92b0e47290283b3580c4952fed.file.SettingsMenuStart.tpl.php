<?php /* Smarty version Smarty-3.1.7, created on 2020-09-08 22:04:53
         compiled from "C:\inetpub\wwwroot\vtigercrm\includes\runtime/../../layouts/v7\modules\Settings\ExtensionStore\SettingsMenuStart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13985640195f580005764520-01380666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf69b21d3b644f92b0e47290283b3580c4952fed' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Settings\\ExtensionStore\\SettingsMenuStart.tpl',
      1 => 1599209267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13985640195f580005764520-01380666',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5f58000577e78',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f58000577e78')) {function content_5f58000577e78($_smarty_tpl) {?>


<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="container-fluid app-nav">
	<div class="row">
		<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/SidebarHeader.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModuleHeader.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
</nav>    

<div class="main-container clearfix">
	<div class=" ExtensionscontentsDiv contentsDiv"><?php }} ?>