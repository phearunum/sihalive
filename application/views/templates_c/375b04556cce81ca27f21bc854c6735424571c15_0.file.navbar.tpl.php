<?php
/* Smarty version 3.1.29, created on 2018-01-23 12:21:09
  from "/Users/admin/Desktop/sihalive/application/views/Frontend/navbar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a671aa534d5e2_57745065',
  'file_dependency' => 
  array (
    '375b04556cce81ca27f21bc854c6735424571c15' => 
    array (
      0 => '/Users/admin/Desktop/sihalive/application/views/Frontend/navbar.tpl',
      1 => 1516706463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a671aa534d5e2_57745065 ($_smarty_tpl) {
?>
<div class="rd-navbar-wrap rd-navbar-default"  ng-controller="navCtrl" >
  <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="100px" data-lg-stick-up-offset="150px" class="rd-navbar">
	<div class="shell shell-fluid">
	  <div class="rd-navbar-inner">
		<div class="rd-navbar-nav-wrap-outer"> 
		  <div class="rd-navbar-aside">
			<div class="rd-navbar-aside-content">
			  <!-- RD Navbar Panel-->
			  <div class="rd-navbar-panel rd-navbar-aside-left">
				<!-- RD Navbar Toggle-->
				<button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
				<div class="cart-right-top" >
					<a href="/ShopCart/" class="link link-shop link-default">
						<span class="icon icon-sm mdi mdi-cart-outline"  ></span>
						<span >(</span>
						<span class="label-inline big text-white cartnums"   ng-model="cartnums" ng-change="change()" ng-bind = "cartnums"></span>
						<span >)</span>
					</a>
				</div>
				<!-- RD Navbar Brand-->
					<a href="/" class="rd-navbar-brand brand" >
						<div class="brand-logo" >
							<img src="/images/brand-232x49.png"  style="margin-top:6px;" alt="" width="232" height="49"/>
						</div>
					</a>
			  </div>
			  <div class="rd-navbar-aside-right">
				<!-- RD Navbar Aside-->
				<ul class="list-links list-inline text-left">
				  <li>
					<div class="unit unit-horizontal unit-middle unit-spacing-xs">
					  <div class="unit-left"><span class="icon icon-circle icon-gray-dark icon-xxs mdi mdi-phone text-middle"></span></div>
					  <div class="unit-body">
						<address class="contact-info">
							<a href="callto:#" class="link-default link-xs"><?php echo $_smarty_tpl->tpl_vars['website']->value['phone'];?>
</a>
							<span class="reveal-block text-base link-xs"><?php echo $_smarty_tpl->tpl_vars['language']->value['text_open_hour'];?>
</span>
						</address>
					  </div>
					</div>
				  </li>
				</ul>
			  </div>
			</div>
		  </div>
		</div>
		<!-- RD Navbar Nav-->
		<div class="rd-navbar-nav-wrap" >
		  <!-- RD Navbar Shop-->
		  <div class="rd-navbar-shop">
			<a href="/ShopCart/" class="link link-shop link-default">
			  <span class="big text-gray-light">Cart</span>
			  <span class="icon icon-sm mdi mdi-cart-outline" ></span>
			  <span class="label-inline big text-white cartnums"  ng-model="cartnums" ng-change="change()" ng-bind = "cartnums"></span>
			</a>
		  </div>
		  <!-- RD Navbar Nav-->
		  <ul class="rd-navbar-nav">
			<li>
				<a href="/"><?php echo $_smarty_tpl->tpl_vars['language']->value['nav_home'];?>
</a>
			</li>		
			<li>
				<a href="/Contacts"><?php echo $_smarty_tpl->tpl_vars['language']->value['nav_contact'];?>
</a>
			</li>
			<li><a href="#"><?php echo $_smarty_tpl->tpl_vars['language']->value['nav_menu'];?>
</a>
			  <!-- RD Navbar Dropdown-->
			  <ul class="rd-navbar-dropdown menu-img-wrap">
				<?php
$_from = $_smarty_tpl->tpl_vars['category']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
					<li class="menu-img">
						<a href="/Menu?ca_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['ca_id'];?>
">
							<img src="/images/menu-food-<?php echo sprintf("%02d",$_smarty_tpl->tpl_vars['row']->value['ca_id']);?>
.png" alt="" width="88" height="60">
							<span><?php echo $_smarty_tpl->tpl_vars['row']->value['ca_name'];?>
</span>
						</a>
					</li>
				<?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
			  </ul>
			</li>
			
			<li  ng-show="islogin" >
				<a href="#"><?php echo $_smarty_tpl->tpl_vars['language']->value['nav_user'];?>
</a>
				<!-- RD Navbar Dropdown-->
				<ul class="rd-navbar-dropdown">
					<li>
						<a href="/Food/orderList">orderlist</a>
					</li>
					<li>
						<a href="/User/Profile">Profile</a>
					</li>
					<li>
						<a ng-click="logout()">logout</a>
					</li>
				</ul>
			</li>
			<li  ng-show="islogin == false">
				<a href="/Login/"><?php echo $_smarty_tpl->tpl_vars['language']->value['nav_login'];?>
</a>
			</li>
		  </ul>
		  <div class="rd-navbar-aside-right">
			<ul class="list-links list-inline text-left">
			  <li>
				<div class="unit unit-horizontal unit-middle unit-spacing-xs">
				  <div class="unit-left"><span class="icon icon-circle icon-gray-dark icon-xxs mdi mdi-phone text-middle"></span></div>
				  <div class="unit-body">
					<address class="contact-info"><a href="callto:#" class="link-default link-xs"><?php echo $_smarty_tpl->tpl_vars['website']->value['phone'];?>
</a><span class="reveal-block text-base link-xs">Mon – Sat: 9:00–18:00</span></address>
				  </div>
				</div>
			  </li>
			  <li>
				<ul class="list-inline list-inline-sm">
				  <li><a href="" class="link-silver-light"><span class="icon icon-sm-mod-1 fa fa-facebook"></span></a></li>
				</ul>
			  </li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>
  </nav>
</div><?php }
}
