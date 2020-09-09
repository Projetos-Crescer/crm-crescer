<?php /* Smarty version Smarty-3.1.7, created on 2020-09-09 00:07:04
         compiled from "C:\inetpub\wwwroot\vtigercrm\includes\runtime/../../layouts/v7\modules\Users\CalendarDetailViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9744042135f581ca83e1516-43151800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6382d20e0db3683b41e12534afb6514809a66c2' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Users\\CalendarDetailViewHeader.tpl',
      1 => 1599209267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9744042135f581ca83e1516-43151800',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_MODEL' => 0,
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5f581ca83e82b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f581ca83e82b')) {function content_5f581ca83e82b($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["MODULE_NAME"] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'), null, 0);?><input id="recordId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
" /><div class="detailViewContainer"><div class="detailViewTitle" id="prefPageHeader"></div><div class="detailViewInfo userPreferences row-fluid"><div class="details col-xs-12"><?php }} ?>