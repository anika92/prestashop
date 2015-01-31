<?php /* Smarty version Smarty-3.1.14, created on 2015-01-31 14:23:13
         compiled from "/home/action/workspace/www/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111505739954cce5510759a1-35909765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a4ff900d99de4c1cb136378bbf7f0b638b1faa8' => 
    array (
      0 => '/home/action/workspace/www/admin/themes/default/template/content.tpl',
      1 => 1395076664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111505739954cce5510759a1-35909765',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54cce551081974_26522403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cce551081974_26522403')) {function content_54cce551081974_26522403($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>