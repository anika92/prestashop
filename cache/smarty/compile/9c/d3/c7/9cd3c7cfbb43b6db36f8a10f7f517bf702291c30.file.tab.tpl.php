<?php /* Smarty version Smarty-3.1.14, created on 2015-01-31 14:23:33
         compiled from "/home/action/workspace/www/themes/default-bootstrap/modules/blockbestsellers/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39994472154cce565a26271-67610570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cd3c7cfbb43b6db36f8a10f7f517bf702291c30' => 
    array (
      0 => '/home/action/workspace/www/themes/default-bootstrap/modules/blockbestsellers/tab.tpl',
      1 => 1395076666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39994472154cce565a26271-67610570',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54cce565a35b94_86866678',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cce565a35b94_86866678')) {function content_54cce565a35b94_86866678($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/action/workspace/www/tools/smarty/plugins/function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#blockbestsellers" class="blockbestsellers"><?php echo smartyTranslate(array('s'=>'Best Sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</a></li><?php }} ?>