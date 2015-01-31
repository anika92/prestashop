<?php /* Smarty version Smarty-3.1.14, created on 2015-01-31 14:23:20
         compiled from "/home/action/workspace/www/admin/themes/default/template/controllers/themes/helpers/view/importtheme_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60425353954cce558eb58d1-78508531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f74d5033961f786a2fd9078383c0626fcbf706af' => 
    array (
      0 => '/home/action/workspace/www/admin/themes/default/template/controllers/themes/helpers/view/importtheme_view.tpl',
      1 => 1395076664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60425353954cce558eb58d1-78508531',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'add_new_theme_label' => 0,
    'add_new_theme_href' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54cce558ebfdc2_52253362',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cce558ebfdc2_52253362')) {function content_54cce558ebfdc2_52253362($_smarty_tpl) {?>
<div class="panel">
    <h3>
        <i class="icon-picture"></i><?php echo $_smarty_tpl->tpl_vars['add_new_theme_label']->value;?>

    </h3>
    <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['add_new_theme_href']->value;?>
"><i class="icon-plus"></i> <?php echo $_smarty_tpl->tpl_vars['add_new_theme_label']->value;?>
</a>
</div>
<?php }} ?>