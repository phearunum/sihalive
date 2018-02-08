<?php
/* Smarty version 3.1.29, created on 2018-01-16 07:25:21
  from "/Applications/XAMPP/xamppfiles/htdocs/application/views/Frontend/js_var.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a5d9ad154a037_08465950',
  'file_dependency' => 
  array (
    '685b4a45504b21ec9c82cafd12de3ad704fe3877' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/application/views/Frontend/js_var.tpl',
      1 => 1515992414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5d9ad154a037_08465950 ($_smarty_tpl) {
echo '<script'; ?>
>
	<?php
$_from = $_smarty_tpl->tpl_vars['language_js_ary']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_0_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_0_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_0_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
	var <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 ="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"
	<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_local_item;
}
if ($__foreach_value_0_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_item;
}
if ($__foreach_value_0_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_value_0_saved_key;
}
?>
	var fbAppId = "<?php echo $_smarty_tpl->tpl_vars['fb_app_id']->value;?>
";
	var  __nav =new Array();
	__nav['Home'] = '<?php echo $_smarty_tpl->tpl_vars['language']->value['nav_home'];?>
';
	__nav['Menu'] = '<?php echo $_smarty_tpl->tpl_vars['language']->value['nav_menu'];?>
';
	__nav['Contacts'] = '<?php echo $_smarty_tpl->tpl_vars['language']->value['nav_contact'];?>
';
	__nav['Login'] = '<?php echo $_smarty_tpl->tpl_vars['language']->value['nav_login'];?>
';
<?php echo '</script'; ?>
><?php }
}
