<?php /* Smarty version Smarty-3.1.14, created on 2015-01-31 14:23:30
         compiled from "/home/action/workspace/www/themes/default-bootstrap/product-list-colors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192660056054cce562af39d0-60941429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3593c70a6c076f733c6721cc06b8b9b74253a3bc' => 
    array (
      0 => '/home/action/workspace/www/themes/default-bootstrap/product-list-colors.tpl',
      1 => 1395076666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192660056054cce562af39d0-60941429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'colors_list' => 0,
    'color' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54cce562b162c1_50037101',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cce562b162c1_50037101')) {function content_54cce562b162c1_50037101($_smarty_tpl) {?>

<ul class="color_to_pick_list clearfix">
	<?php  $_smarty_tpl->tpl_vars['color'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['color']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colors_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['color']->key => $_smarty_tpl->tpl_vars['color']->value){
$_smarty_tpl->tpl_vars['color']->_loop = true;
?>
		<li>
			<a
			href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['color']->value['id_product'],null,null,null,null,null,$_smarty_tpl->tpl_vars['color']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8', true);?>
"
			id="color_<?php echo intval($_smarty_tpl->tpl_vars['color']->value['id_product_attribute']);?>
"
			class="color_pick"
			style="background: <?php echo $_smarty_tpl->tpl_vars['color']->value['color'];?>
;">
			</a>
		</li>
	<?php } ?>
</ul><?php }} ?>