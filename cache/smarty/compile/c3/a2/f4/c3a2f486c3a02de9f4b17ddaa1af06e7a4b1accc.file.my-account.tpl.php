<?php /* Smarty version Smarty-3.1.14, created on 2015-01-31 14:23:34
         compiled from "/home/action/workspace/www/themes/default-bootstrap/modules/mailalerts/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41967917354cce5660cd9e4-64575184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3a2f486c3a02de9f4b17ddaa1af06e7a4b1accc' => 
    array (
      0 => '/home/action/workspace/www/themes/default-bootstrap/modules/mailalerts/views/templates/hook/my-account.tpl',
      1 => 1395076666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41967917354cce5660cd9e4-64575184',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54cce5660e0166_31848739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cce5660e0166_31848739')) {function content_54cce5660e0166_31848739($_smarty_tpl) {?>

<li class="mailalerts">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
" rel="nofollow">
    	<i class="icon-envelope"></i>
		<span><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
</span>
	</a>
</li>
<?php }} ?>