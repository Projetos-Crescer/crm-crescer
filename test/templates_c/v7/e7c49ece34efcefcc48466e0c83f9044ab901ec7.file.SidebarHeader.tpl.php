<?php /* Smarty version Smarty-3.1.7, created on 2020-09-08 22:04:53
         compiled from "C:\inetpub\wwwroot\vtigercrm\includes\runtime/../../layouts/v7\modules\Settings\ExtensionStore\partials\SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10658428565f5800057c2511-35482501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7c49ece34efcefcc48466e0c83f9044ab901ec7' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Settings\\ExtensionStore\\partials\\SidebarHeader.tpl',
      1 => 1599209267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10658428565f5800057c2511-35482501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SELECTED_MENU_CATEGORY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5f5800057cbbe',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f5800057cbbe')) {function content_5f5800057cbbe($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['APP_IMAGE_MAP'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppIcons(), null, 0);?>
<div class="col-sm-12 col-xs-12 app-indicator-icon-container extensionstore app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
"> 
    <div class="row" title="<?php echo vtranslate('LBL_EXTENSION_STORE','Settings:ExtensionStore');?>
"> 
        <span class="app-indicator-icon cursorPointer fa fa-shopping-cart"></span> 
    </div>
</div>
  
<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>