<?php /* Smarty version Smarty-3.1.14, created on 2015-01-31 14:23:18
         compiled from "/home/action/workspace/www/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206914519254cce5560f2a36-14194151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '775db4a6eba133e50d1d6fa1293e4c4e544246aa' => 
    array (
      0 => '/home/action/workspace/www/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl',
      1 => 1395076664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206914519254cce5560f2a36-14194151',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'id_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54cce5560ffcd9_32145871',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cce5560ffcd9_32145871')) {function content_54cce5560ffcd9_32145871($_smarty_tpl) {?>


<span style="width:20px; margin-right:5px;">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&submitAction=generateInvoicePDF&id_order_invoice=<?php echo $_smarty_tpl->tpl_vars['id_invoice']->value;?>
"><img src="../img/admin/tab-invoice.gif" alt="invoice" /></a>
</span><?php }} ?>