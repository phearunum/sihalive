<?php
/* Smarty version 3.1.29, created on 2018-01-16 10:47:53
  from "/Users/admin/Desktop/sihalive/application/views/Frontend/js.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a5dca492066c4_27804839',
  'file_dependency' => 
  array (
    '7da39f3f5ff375db9631684b5d760f6f25f24af4' => 
    array (
      0 => '/Users/admin/Desktop/sihalive/application/views/Frontend/js.tpl',
      1 => 1515992414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Frontend/js_var.tpl' => 1,
  ),
),false)) {
function content_5a5dca492066c4_27804839 ($_smarty_tpl) {
?>
<!-- jQuery -->
<?php echo '<script'; ?>
>
	var mymap;
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/js/core.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/js/script.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="//cdn.bootcss.com/socket.io/1.3.7/socket.io.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-cookies.min.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript" src="/js/main.js"><?php echo '</script'; ?>
>


<?php if ($_smarty_tpl->tpl_vars['jsArray']->value) {?>
	<?php
$_from = $_smarty_tpl->tpl_vars['jsArray']->value;
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
		<?php echo '<script'; ?>
 src="/js/<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
"><?php echo '</script'; ?>
>
	<?php
$_smarty_tpl->tpl_vars['file'] = $__foreach_file_0_saved_local_item;
}
if ($__foreach_file_0_saved_item) {
$_smarty_tpl->tpl_vars['file'] = $__foreach_file_0_saved_item;
}
}
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Frontend/js_var.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="dialog" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['website_alert_title'];?>
">
  <p></p>
</div>

<?php }
}
