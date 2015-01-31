<?php /* Smarty version Smarty-3.1.14, created on 2015-01-31 14:23:23
         compiled from "/home/action/workspace/www/admin/themes/default/template/controllers/addons_catalog/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176759012454cce55b034514-44171432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87ec5986b8a1eb47290ec0b03325cd930e20be94' => 
    array (
      0 => '/home/action/workspace/www/admin/themes/default/template/controllers/addons_catalog/content.tpl',
      1 => 1395076664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176759012454cce55b034514-44171432',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_addons_content' => 0,
    'addons_content' => 0,
    'iso_lang' => 0,
    'iso_currency' => 0,
    'iso_country' => 0,
    'parent_domain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54cce55b04aae6_07961245',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cce55b04aae6_07961245')) {function content_54cce55b04aae6_07961245($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['display_addons_content']->value){?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php }else{ ?>
	<iframe frameborder="no" class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }?>
<?php }} ?>