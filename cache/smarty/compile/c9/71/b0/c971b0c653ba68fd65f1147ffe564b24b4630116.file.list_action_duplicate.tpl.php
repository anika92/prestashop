<?php /* Smarty version Smarty-3.1.14, created on 2015-01-31 14:23:29
         compiled from "/home/action/workspace/www/admin/themes/default/template/helpers/list/list_action_duplicate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71048333954cce561aa7c64-60064955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c971b0c653ba68fd65f1147ffe564b24b4630116' => 
    array (
      0 => '/home/action/workspace/www/admin/themes/default/template/helpers/list/list_action_duplicate.tpl',
      1 => 1395076664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71048333954cce561aa7c64-60064955',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'confirm' => 0,
    'location_ok' => 0,
    'location_ko' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54cce561ab7bf0_51751942',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cce561ab7bf0_51751942')) {function content_54cce561ab7bf0_51751942($_smarty_tpl) {?>
<a href="#" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')) document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ok']->value;?>
'; else document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ko']->value;?>
'; return false;">
	<i class="icon-copy"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>