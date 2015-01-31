<?php /* Smarty version Smarty-3.1.14, created on 2015-01-31 14:23:28
         compiled from "/home/action/workspace/www/admin/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132819505554cce560e72545-60222192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff9d2863ddf93ddcbe2334e9b44c90f352de0db4' => 
    array (
      0 => '/home/action/workspace/www/admin/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1395076664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132819505554cce560e72545-60222192',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54cce560e7cc12_54768182',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cce560e7cc12_54768182')) {function content_54cce560e7cc12_54768182($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-eye-open"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>