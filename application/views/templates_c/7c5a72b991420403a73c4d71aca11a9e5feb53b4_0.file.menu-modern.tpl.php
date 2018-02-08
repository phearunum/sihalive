<?php
/* Smarty version 3.1.29, created on 2018-01-16 08:48:39
  from "/Applications/XAMPP/xamppfiles/htdocs/application/views/Menu/menu-modern.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a5dae57a16507_01392114',
  'file_dependency' => 
  array (
    '7c5a72b991420403a73c4d71aca11a9e5feb53b4' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/application/views/Menu/menu-modern.tpl',
      1 => 1515992414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Frontend/breadcrumbs.tpl' => 1,
  ),
),false)) {
function content_5a5dae57a16507_01392114 ($_smarty_tpl) {
?>
<!-- Page Content-->
<main class="page-content">
<!-- Breadcrumbs & Page title-->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Frontend/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="section-50 section-sm-100">
  <div class="shell isotope-wrap">
	<div class="range range-sm-center">
	  <div class="cell-xs-12" ng-controller="categoryCtrl">
		<div class="cell-box">
		  <ul class="isotope-filters-responsive">
			<li>
			  <p>Choose your category:</p>
			</li>
			<li class="block-top-level">
			  <!-- Isotope Filters-->
			  <button data-custom-toggle="#isotope-1" data-custom-toggle-disable-on-blur="true" class="isotope-filters-toggle btn btn-primary-lighter btn-shape-circle">Filter<span class="caret"></span></button>
			  <div id="isotope-1" class="isotope-filters isotope-filters-buttons">
				<ul class="inline-list"  >
					<?php
$_from = $_smarty_tpl->tpl_vars['categorys']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_category_0_saved_item = isset($_smarty_tpl->tpl_vars['category']) ? $_smarty_tpl->tpl_vars['category'] : false;
$_smarty_tpl->tpl_vars['category'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['category']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
$__foreach_category_0_saved_local_item = $_smarty_tpl->tpl_vars['category'];
?>
						<li>
							<a data-isotope-filter="Category <?php echo $_smarty_tpl->tpl_vars['category']->value['ca_id'];?>
" data-isotope-group="gallery" href="#" class="btn-shape-circle btn"><?php echo $_smarty_tpl->tpl_vars['category']->value['ca_name'];?>
</a>
						</li>
					<?php
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_0_saved_local_item;
}
if ($__foreach_category_0_saved_item) {
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_0_saved_item;
}
?>
				</ul>
			  </div>
			</li>
		  </ul>
		</div>
	  </div>
	  <div class="cell-xs-12 offset-top-40" ng-controller="productPageCtrl" >
		<!-- Isotope Content-->
		<div data-isotope-layout="fitRows" data-isotope-group="gallery" data-photo-swipe-gallery="gallery" class="row isotope isotope-menu">
		  <?php
$_from = $_smarty_tpl->tpl_vars['foods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_food_1_saved_item = isset($_smarty_tpl->tpl_vars['food']) ? $_smarty_tpl->tpl_vars['food'] : false;
$_smarty_tpl->tpl_vars['food'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['food']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['food']->value) {
$_smarty_tpl->tpl_vars['food']->_loop = true;
$__foreach_food_1_saved_local_item = $_smarty_tpl->tpl_vars['food'];
?>
		  <div data-filter="Category <?php echo $_smarty_tpl->tpl_vars['food']->value['ca_id'];?>
" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
			<div class="thumbnail-menu-modern">
			  <figure>
				
				<img src="https://fakeimg.pl/310x260/" alt="" width="310" height="260" class="img-responsive"/>
			  </figure>
			  <div class="caption">
				<h5><a href="menu-single.html" class="link link-default"><?php echo $_smarty_tpl->tpl_vars['food']->value['f_name'];?>
</a></h5>
				<p class="text-italic"><?php echo $_smarty_tpl->tpl_vars['food']->value['f_description'];?>
</p>
				<p class="price"><?php echo $_smarty_tpl->tpl_vars['food']->value['f_large_price'];?>
</p>
			
				<a href="/Menu/food/<?php echo $_smarty_tpl->tpl_vars['food']->value['f_id'];?>
" class="btn btn-shape-circle btn-primary offset-top-15 btn btn-primary btn-shadow btn-shape-circle btn-xs"><?php echo $_smarty_tpl->tpl_vars['food_language_ary']->value['food_menu_check_food'];?>
</a>
				<a href="" ng-click="click(<?php echo $_smarty_tpl->tpl_vars['food']->value['f_id'];?>
, '1','<?php echo $_smarty_tpl->tpl_vars['food']->value['f_large_price'];?>
' ,'<?php echo $_smarty_tpl->tpl_vars['food']->value['f_name'];?>
');$event.stopPropagation();" class="btn btn-shape-circle btn-primary offset-top-15 btn btn-primary btn-shadow btn-shape-circle btn-xs"><?php echo $_smarty_tpl->tpl_vars['food_language_ary']->value['food_menu_addcar'];?>
</a>
				
			  </div>
			</div>
		  </div>
		  <?php
$_smarty_tpl->tpl_vars['food'] = $__foreach_food_1_saved_local_item;
}
if ($__foreach_food_1_saved_item) {
$_smarty_tpl->tpl_vars['food'] = $__foreach_food_1_saved_item;
}
?>
		</div>
	  </div>
	</div>
  </div>
</section>
<section class="bg-image-11 context-dark">
  <div class="shell section-80 section-sm-130">
	<div class="range range-xs-center range-lg-bottom">
	  <div class="cell-md-9">
		<div class="group-sm">
		  <h3 class="text-baseline">Fast Delivery</h3>
		  <div class="group-sm offset-top-15 offset-lg-top-0">
			<hr class="hr divider-xs bg-primary text-top veil reveal-lg-inline-block">
			<p class="text-white big offset-lg-top-0 text-top">Enjoy our free, fast, and reliable delivery service.</p>
		  </div>
		</div>
	  </div>
	  <div class="cell-lg-3"><a href="shop-single.html" class="btn btn-shape-circle btn-white-outline btn-min-width-md">order online</a></div>
	</div>
  </div>
</section>
</main>
<?php }
}
