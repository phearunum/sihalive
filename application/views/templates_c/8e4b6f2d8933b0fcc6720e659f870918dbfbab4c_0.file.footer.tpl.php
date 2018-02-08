<?php
/* Smarty version 3.1.29, created on 2018-01-16 07:25:21
  from "/Applications/XAMPP/xamppfiles/htdocs/application/views/Frontend/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a5d9ad1533fb4_55705091',
  'file_dependency' => 
  array (
    '8e4b6f2d8933b0fcc6720e659f870918dbfbab4c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/application/views/Frontend/footer.tpl',
      1 => 1515992414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5d9ad1533fb4_55705091 ($_smarty_tpl) {
?>
<footer class="page-foot text-center text-lg-left footer-light context-dark">
	<section class="section-top-45 section-bottom-40">
	  <div class="shell">
		<div class="range range-xs-center">
		  <div class="cell-sm-6 cell-md-4 cell-lg-6 offset-top-30 offset-top-50 offset-lg-top-0">
			<h5 class="text-italic font-secondary"><?php echo $_smarty_tpl->tpl_vars['language']->value['text_your_follow_us'];?>
</h5>
			<ul class="list-inline offset-top-15">
			  <li><a href="https://www.facebook.com/Sihalive-187813995113064/"><span class="icon icon-sm icon-circle icon-gray icon-social fa-facebook"></span></a></li>
			</ul>
		  </div>
		  <div class="cell-sm-6 cell-md-4 cell-lg-6 offset-top-50 offset-lg-top-0">
			<h5 class="text-italic font-secondary"><?php echo $_smarty_tpl->tpl_vars['language']->value['text_phone'];?>
</h5>
			<div class="unit unit-sm-horizontal unit-sm-top unit-spacing-xs offset-top-15">
			  <div class="unit-left"><span class="icon icon-md-mod-1 icon-default mdi mdi-phone text-middle"></span></div>
			  <div class="unit-body">
				<address class="contact-info">
					<a href="callto:#" class="link-white link-lg"><?php echo $_smarty_tpl->tpl_vars['website']->value['phone'];?>
</a>
				</address>
					<span class="contact-info"><?php echo $_smarty_tpl->tpl_vars['language']->value['text_open_hour'];?>
</span>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</section>
	<section>
	  <div class="shell">
		<hr>
	  </div>
	  <div class="shell section-20">
		<div class="range range-xs-center">
		  <div class="cell-md-5 text-center">
			<p class="copyright">
			  Food Delivery
			  &nbsp;&#169;&nbsp;<span id="copyright-year"></span>&nbsp;<br class="veil-sm"><a href="/MainPage/privacy">Privacy Policy</a>
			</p>
		  </div>
		</div>
	  </div>
	</section>
</footer><?php }
}
