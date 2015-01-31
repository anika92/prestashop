<?php /* Smarty version Smarty-3.1.14, created on 2015-01-31 14:23:29
         compiled from "/home/action/workspace/www/admin/themes/default/template/helpers/list/list_action_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28406745054cce561abbac9-66566851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b06b06c796b46b5389fb313c4641c06cc1e9d163' => 
    array (
      0 => '/home/action/workspace/www/admin/themes/default/template/helpers/list/list_action_details.tpl',
      1 => 1395076664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28406745054cce561abbac9-66566851',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'params' => 0,
    'id' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54cce561acc809_14487009',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cce561acc809_14487009')) {function content_54cce561acc809_14487009($_smarty_tpl) {?>

<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" id="details_<?php echo $_smarty_tpl->tpl_vars['params']->value['action'];?>
_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="">
	<i class="icon-eye-open"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>