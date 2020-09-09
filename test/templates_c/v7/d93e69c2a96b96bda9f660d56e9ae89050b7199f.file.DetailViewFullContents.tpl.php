<?php /* Smarty version Smarty-3.1.7, created on 2020-09-08 22:03:41
         compiled from "C:\inetpub\wwwroot\vtigercrm\includes\runtime/../../layouts/v7\modules\Users\DetailViewFullContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17467846095f57ffbd5d5110-44417193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd93e69c2a96b96bda9f660d56e9ae89050b7199f' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Users\\DetailViewFullContents.tpl',
      1 => 1599209267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17467846095f57ffbd5d5110-44417193',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_MODEL' => 0,
    'NAME_FIELDS' => 0,
    'MODULE_NAME' => 0,
    'RECORD_STRUCTURE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5f57ffbd5ded0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f57ffbd5ded0')) {function content_5f57ffbd5ded0($_smarty_tpl) {?>



<?php $_smarty_tpl->tpl_vars['NAME_FIELDS'] = new Smarty_variable(array('first_name','last_name'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value){?><?php $_smarty_tpl->tpl_vars['NAME_FIELDS'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getNameFields(), null, 0);?><?php }?><form id="detailView" data-name-fields='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['NAME_FIELDS']->value);?>
' method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('DetailViewBlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0);?>
</form>
<?php }} ?>