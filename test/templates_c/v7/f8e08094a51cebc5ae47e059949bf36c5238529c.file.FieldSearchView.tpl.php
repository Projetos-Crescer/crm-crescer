<?php /* Smarty version Smarty-3.1.7, created on 2020-09-09 00:03:09
         compiled from "C:\inetpub\wwwroot\vtigercrm\includes\runtime/../../layouts/v7\modules\Vtiger\uitypes\FieldSearchView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:828055685f581bbd1e27d1-32452558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8e08094a51cebc5ae47e059949bf36c5238529c' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\uitypes\\FieldSearchView.tpl',
      1 => 1599209267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '828055685f581bbd1e27d1-32452558',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'SEARCH_INFO' => 0,
    'FIELD_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5f581bbd1e8f0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f581bbd1e8f0')) {function content_5f581bbd1e8f0($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()), null, 0);?><div class=""><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" class="listSearchContributor inputElement" value="<?php echo $_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue'];?>
" data-field-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType();?>
" data-fieldinfo='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
'/></div><?php }} ?>