<?php
/* Smarty version 3.1.29, created on 2018-01-16 10:20:30
  from "/Applications/XAMPP/xamppfiles/htdocs/application/views/Frontend/css.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a5dc3de6e4ea9_42334699',
  'file_dependency' => 
  array (
    'e10f55d230091c609d512b842e675d247f16249b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/application/views/Frontend/css.tpl',
      1 => 1516094427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5dc3de6e4ea9_42334699 ($_smarty_tpl) {
?>


<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Changa+One:400,400i%7CGrand+Hotel%7CLato:300,400,400italic,700">
<link rel="stylesheet" href="/css/style.min.css">
<link rel="stylesheet" href="/css/main.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<?php if ($_smarty_tpl->tpl_vars['cssArray']->value) {?>
	<?php
$_from = $_smarty_tpl->tpl_vars['cssArray']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_file_0_saved_item = isset($_smarty_tpl->tpl_vars['file']) ? $_smarty_tpl->tpl_vars['file'] : false;
$_smarty_tpl->tpl_vars['file'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['file']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
$__foreach_file_0_saved_local_item = $_smarty_tpl->tpl_vars['file'];
?>
		<link rel="stylesheet" href="css/file">
	<?php
$_smarty_tpl->tpl_vars['file'] = $__foreach_file_0_saved_local_item;
}
if ($__foreach_file_0_saved_item) {
$_smarty_tpl->tpl_vars['file'] = $__foreach_file_0_saved_item;
}
}
}
}
