<?php /* Smarty version Smarty-3.1.14, created on 2015-01-31 14:23:13
         compiled from "/home/action/workspace/www/admin/themes/default/template/controllers/stats/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49563748454cce551bba058-68874394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e7491210a8870c1ec9c62e2aa562952ad3b2bc0' => 
    array (
      0 => '/home/action/workspace/www/admin/themes/default/template/controllers/stats/calendar.tpl',
      1 => 1395076664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49563748454cce551bba058-68874394',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54cce551bbe6b7_89454294',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cce551bbe6b7_89454294')) {function content_54cce551bbe6b7_89454294($_smarty_tpl) {?>

<div id="statsContainer" class="col-lg-9">
	<?php echo $_smarty_tpl->getSubTemplate ("../../form_date_range_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>