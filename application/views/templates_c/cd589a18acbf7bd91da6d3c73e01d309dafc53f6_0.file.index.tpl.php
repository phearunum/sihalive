<?php
/* Smarty version 3.1.29, created on 2018-01-16 07:25:21
  from "/Applications/XAMPP/xamppfiles/htdocs/application/views/MainPage/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a5d9ad1528997_12387447',
  'file_dependency' => 
  array (
    'cd589a18acbf7bd91da6d3c73e01d309dafc53f6' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/application/views/MainPage/index.tpl',
      1 => 1515992414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5d9ad1528997_12387447 ($_smarty_tpl) {
?>
<!-- Page Content-->
<main class="page-content" >
<!-- Swiper variant 3-->
<section class="bg-gray-darker">
  <div class="swiper-variant-1">
	<div data-slide-effect="fade" data-min-height="600px" class="swiper-container swiper-slider">
	  <div class="swiper-wrapper">
		<div data-slide-bg="images/home-slide-3-1920x800.jpg" class="swiper-slide">
		  <div class="swiper-slide-caption slide-caption-2 text-center">
			<div class="shell">
			  <div class="range range-sm-center">
				<div class="cell-sm-11 cell-lg-9">
				  <h5 data-caption-animate="fadeInUpSmall" data-caption-delay="100" class="text-italic font-secondary text-white">Your Favourite</h5>
				  <h2 data-caption-animate="fadeInUpSmall" data-caption-delay="400" class="text-uppercase text-white offset-top-0">Food delivery service</h2>
				  <p data-caption-animate="fadeInUpSmall" data-caption-delay="700" class="text-white offset-top-18">Welcome to Food Delivery, a place where you can order your favorite restaurant dishes, drinks, and desserts at affordable price. We are glad to offer you the best food in the area to everyone.</p><a href="#" data-caption-animate="fadeInUpSmall" data-caption-delay="1000" class="btn btn-secondary btn-md btn-shape-circle offset-top-20">order online</a>
				</div>
			  </div>
			</div>
		  </div>
		</div>
		<div data-slide-bg="images/home-slide-4-1920x800.jpg" class="swiper-slide">
		  <div class="swiper-slide-caption slide-caption-2 text-center">
			<div class="shell">
			  <div class="range range-sm-center">
				<div class="cell-sm-10 cell-lg-8">
				  <h5 data-caption-animate="fadeInUpSmall" data-caption-delay="100" class="text-italic font-secondary text-white">Affordable Organic Food</h5>
				  <h2 data-caption-animate="fadeInUpSmall" data-caption-delay="400" class="text-uppercase text-white offset-top-0">Healthy Breakfasts</h2>
				  <p data-caption-animate="fadeInUpSmall" data-caption-delay="700" class="text-white offset-top-18">Looking for fresh and tasty breakfasts and lunches? At Food Delivery, you can order any kind of morning snack from local restaurants at reasonable prices without any extra charges.</p><a href="#" data-caption-animate="fadeInUpSmall" data-caption-delay="1000" class="btn btn-secondary btn-md btn-shape-circle offset-top-20">order online</a>
				</div>
			  </div>
			</div>
		  </div>
		</div>
		<div data-slide-bg="images/home-slide-2-1920x800.jpg" class="swiper-slide">
		  <div class="swiper-slide-caption slide-caption-2 text-center">
			<div class="shell">
			  <div class="range range-sm-center">
				<div class="cell-sm-10 cell-lg-8">
				  <h5 data-caption-animate="fadeInUpSmall" data-caption-delay="100" class="text-italic font-secondary text-white">A Variety of Dishes</h5>
				  <h2 data-caption-animate="fadeInUpSmall" data-caption-delay="400" class="text-uppercase text-white offset-top-0">pizzas and seafood</h2>
				  <p data-caption-animate="fadeInUpSmall" data-caption-delay="700" class="text-white offset-top-18">In our menu you can find lots of tasty and interesting dishes, including pizzas of all kinds. We also offer a wide range of seafood dishes, even if you are just looking for an affordable snack.</p><a href="#" data-caption-animate="fadeInUpSmall" data-caption-delay="1000" class="btn btn-secondary btn-md btn-shape-circle offset-top-20">order online</a>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  <!-- Swiper Navigation-->
	  <div class="swiper-pagination-wrap">
		<div class="swiper-pagination"></div>
	  </div>
	</div>
  </div>
</section>
<section class="section-50 section-sm-top-90 section-sm-bottom-100 bg-image-6">
  <div class="shell text-center">
	<h3>Our Menu</h3>
	<div class="range range-xs-center">
		<?php
$_from = $_smarty_tpl->tpl_vars['category']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$__foreach_row_0_saved_key = isset($_smarty_tpl->tpl_vars['index']) ? $_smarty_tpl->tpl_vars['index'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['index'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
			<div class="cell-sm-6 cell-md-4  offset-top-50">
				<div class="menu-variant-1">
					<a href="/Menu?ca_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['ca_id'];?>
">
						<img src="images/category-<?php echo $_smarty_tpl->tpl_vars['row']->value['ca_id'];?>
-310X260.png" alt="" width="310" height="260" class="img-responsive reveal-inline-block"/>
					</a>
					<div class="caption">
						<h5 class="title">
							<a href="/Menu?ca_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['ca_id'];?>
" class="link-white"><?php echo $_smarty_tpl->tpl_vars['row']->value['ca_name'];?>
</a>
						</h5>
					</div>
				</div>
			</div>	</a>
		<?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
if ($__foreach_row_0_saved_key) {
$_smarty_tpl->tpl_vars['index'] = $__foreach_row_0_saved_key;
}
?>
	</div>
  </div>
</section>
</main><?php }
}
