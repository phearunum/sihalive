<?php
/* Smarty version 3.1.29, created on 2018-01-16 08:48:39
  from "/Applications/XAMPP/xamppfiles/htdocs/application/views/Frontend/breadcrumbs.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a5dae57a1f975_99846859',
  'file_dependency' => 
  array (
    '7113ff512d1096f4e35cbd840ec202a287eef430' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/application/views/Frontend/breadcrumbs.tpl',
      1 => 1515992414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5dae57a1f975_99846859 ($_smarty_tpl) {
?>
<section  ng-controller="breadcrumbsCtrl" class="text-center section-34 section-sm-60 section-md-top-100 section-md-bottom-105 bg-image bg-image-breadcrumbs">
  <div class="shell shell-fluid">
	<div class="range range-condensed">
	  <div class="cell-xs-12 cell-xl-preffix-1 cell-xl-11">
		<p class="h3 text-white" ng-bind="breadcrumbs[1]" ></p>
		<ul class="breadcrumbs-custom offset-top-10">
		  <li ><a href="/"><?php echo $_smarty_tpl->tpl_vars['language']->value['nav_home'];?>
</a></li>
		  <li class="active" ng-if="breadcrumbs[1]">
			<span ng-if="breadcrumbs.length ==2" ng-bind="breadcrumbs[1]" ></span>
			<a ng-if="breadcrumbs.length >2" href="/{{breadcrumbs[1]}}" ng-bind="breadcrumbs[1]"></a>
		  </li>
		  <li class="active" ng-if="breadcrumbs[2]" ng-bind="breadcrumbs[2]"></li>
		</ul>
	  </div>
	</div>
  </div>
</section>
<?php }
}
