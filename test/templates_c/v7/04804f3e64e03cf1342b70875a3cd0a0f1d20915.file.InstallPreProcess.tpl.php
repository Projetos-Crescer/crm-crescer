<?php /* Smarty version Smarty-3.1.7, created on 2020-09-08 22:10:00
         compiled from "C:\inetpub\wwwroot\vtigercrm\includes\runtime/../../layouts/v7\modules\Install\InstallPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11135094485f57f328460d06-16649165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04804f3e64e03cf1342b70875a3cd0a0f1d20915' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Install\\InstallPreProcess.tpl',
      1 => 1599209267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11135094485f57f328460d06-16649165',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5f57f328470ba',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f57f328470ba')) {function content_5f57f328470ba($_smarty_tpl) {?>

<input type="hidden" id="module" value="Install" />
<input type="hidden" id="view" value="Index" />
<div class="container-fluid page-container">
	<div class="row">
		<div class="col-sm-6">
			<div class="logo">
				<img src="<?php echo vimage_path('logo.png');?>
"/>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="head pull-right">
				<h3><?php echo vtranslate('LBL_INSTALLATION_WIZARD','Install');?>
</h3>
			</div>
		</div>
	</div>
<?php }} ?>