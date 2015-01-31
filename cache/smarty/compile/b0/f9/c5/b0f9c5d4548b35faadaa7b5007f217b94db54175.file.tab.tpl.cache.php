<?php /* Smarty version Smarty-3.1.14, created on 2015-01-31 20:29:20
         compiled from "/home/action/workspace/www/themes/default-bootstrap/modules/blocknewproducts/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178394871954cce6c08a3265-11771455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0f9c5d4548b35faadaa7b5007f217b94db54175' => 
    array (
      0 => '/home/action/workspace/www/themes/default-bootstrap/modules/blocknewproducts/tab.tpl',
      1 => 1395076666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178394871954cce6c08a3265-11771455',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54cce6c08b5a87_71329408',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cce6c08b5a87_71329408')) {function content_54cce6c08b5a87_71329408($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/action/workspace/www/tools/smarty/plugins/function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#blocknewproducts" class="blocknewproducts"><?php echo smartyTranslate(array('s'=>'New arrivals','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</a></li><?php }} ?>