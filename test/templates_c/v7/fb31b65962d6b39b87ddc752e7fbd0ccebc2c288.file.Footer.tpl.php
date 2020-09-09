<?php /* Smarty version Smarty-3.1.7, created on 2020-09-09 14:46:11
         compiled from "C:\inetpub\wwwroot\vtigercrm\includes\runtime/../../layouts/v7\modules\Vtiger\Footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4652367775f57f7b6c43494-79228738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb31b65962d6b39b87ddc752e7fbd0ccebc2c288' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\Footer.tpl',
      1 => 1599662769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4652367775f57f7b6c43494-79228738',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5f57f7b6c508d',
  'variables' => 
  array (
    'LANGUAGE_STRINGS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f57f7b6c508d')) {function content_5f57f7b6c508d($_smarty_tpl) {?>

<footer class="app-footer">
	<p>
		Crescer SCI - <?php echo date('Y');?>
&nbsp;&nbsp;
	</p>
</footer>
</div>
<div id='overlayPage'>
	<!-- arrow is added to point arrow to the clicked element (Ex:- TaskManagement), 
	any one can use this by adding "show" class to it -->
	<div class='arrow'></div>
	<div class='data'>
	</div>
</div>
<div id='helpPageOverlay'></div>
<div id="js_strings" class="hide noprint"><?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['LANGUAGE_STRINGS']->value);?>
</div>
<div class="modal myModal fade"></div>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('JSResources.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>

</html><?php }} ?>