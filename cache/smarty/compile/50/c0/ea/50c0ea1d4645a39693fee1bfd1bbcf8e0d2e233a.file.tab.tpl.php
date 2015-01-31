<?php /* Smarty version Smarty-3.1.14, created on 2015-01-31 14:23:34
         compiled from "/home/action/workspace/www/themes/default-bootstrap/modules/homefeatured/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193437566054cce56606d5f1-86576576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50c0ea1d4645a39693fee1bfd1bbcf8e0d2e233a' => 
    array (
      0 => '/home/action/workspace/www/themes/default-bootstrap/modules/homefeatured/tab.tpl',
      1 => 1395076666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193437566054cce56606d5f1-86576576',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54cce56607bd72_31693180',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cce56607bd72_31693180')) {function content_54cce56607bd72_31693180($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/action/workspace/www/tools/smarty/plugins/function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#homefeatured" class="homefeatured"><?php echo smartyTranslate(array('s'=>'Popular','mod'=>'homefeatured'),$_smarty_tpl);?>
</a></li><?php }} ?>