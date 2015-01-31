<?php /* Smarty version Smarty-3.1.14, created on 2015-01-31 14:23:44
         compiled from "/home/action/workspace/www/themes/default-bootstrap/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19145459154cce570bf2e39-73272537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e9edc084dca78a92ea2ea9eb6cc78aef10848d2' => 
    array (
      0 => '/home/action/workspace/www/themes/default-bootstrap/category-count.tpl',
      1 => 1395076666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19145459154cce570bf2e39-73272537',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54cce570c1be27_34322734',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cce570c1be27_34322734')) {function content_54cce570c1be27_34322734($_smarty_tpl) {?>
<span class="heading-counter"><?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?><?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>
<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?><?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span><?php }} ?>