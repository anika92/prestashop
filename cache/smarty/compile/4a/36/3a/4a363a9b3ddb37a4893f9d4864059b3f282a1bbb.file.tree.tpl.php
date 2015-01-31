<?php /* Smarty version Smarty-3.1.14, created on 2015-01-31 14:23:25
         compiled from "/home/action/workspace/www/admin/themes/default/template/helpers/tree/tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150810837254cce55dac5511-80358223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a363a9b3ddb37a4893f9d4864059b3f282a1bbb' => 
    array (
      0 => '/home/action/workspace/www/admin/themes/default/template/helpers/tree/tree.tpl',
      1 => 1395076664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150810837254cce55dac5511-80358223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'nodes' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54cce55dadb047_84594906',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cce55dadb047_84594906')) {function content_54cce55dadb047_84594906($_smarty_tpl) {?>
<div class="panel">
	<?php if (isset($_smarty_tpl->tpl_vars['header']->value)){?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)){?>
	<ul id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="tree">
		<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

	</ul>
	<?php }?>
</div><?php }} ?>