<?php
/* Smarty version 3.1.29, created on 2018-01-17 18:43:52
  from "/Users/admin/Desktop/sihalive/application/views/Contacts/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a5f8b5856b853_47940809',
  'file_dependency' => 
  array (
    '21e010d855d5bd06ecc9037c447304aa6972fd3e' => 
    array (
      0 => '/Users/admin/Desktop/sihalive/application/views/Contacts/index.tpl',
      1 => 1515992414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Frontend/breadcrumbs.tpl' => 1,
  ),
),false)) {
function content_5a5f8b5856b853_47940809 ($_smarty_tpl) {
?>
<main class="page-content"  ng-controller="contactsCtrl">
<!-- Breadcrumbs & Page title-->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Frontend/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="text-center text-sm-left section-50 section-sm-top-100 section-sm-bottom-100">
  <div class="shell">
	<div class="range range-xs-center">
	  <div class="cell-md-8">
		<h4 class="font-default text-center"><?php echo $_smarty_tpl->tpl_vars['language']->value['text_contacts'];?>
</h4>
		
		<!-- RD Mailform-->
		<form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="rd-mailform form-contact-line text-left offset-top-35">
		  <div class="form-inline-flex">
			<div class="form-group">
			  <label for="contact-name" class="form-label form-label-outside"><?php echo $_smarty_tpl->tpl_vars['language']->value['text_name'];?>
</label>
			  <input id="contact-name" ng-model="co_name" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['text_enter_name'];?>
" name="name" data-constraints="@Required" class="form-control">
			</div>
			<div class="form-group">
			  <label for="contact-phone" class="form-label form-label-outside"><?php echo $_smarty_tpl->tpl_vars['language']->value['text_phone'];?>
</label>
			  <input id="contact-phone" ng-model="co_phone" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['text_enter_phone'];?>
" name="phone" data-constraints="@Numeric @Required" class="form-control">
			</div>
		  </div>
		  <div class="form-group offset-top-15">
			<label for="message" class="form-label form-label-outside"><?php echo $_smarty_tpl->tpl_vars['language']->value['text_your_message'];?>
</label>
			<textarea id="message" ng-model="co_message" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['text_enter_your_message'];?>
" name="message" data-constraints="@Required" class="form-control"></textarea>
		  </div>
		  <div class="offset-top-15">
			<div class="form-inline-flex">
			  <div class="form-group">
				<label for="contact-email-2" class="form-label form-label-outside"><?php echo $_smarty_tpl->tpl_vars['language']->value['text']['email'];?>
</label>
				<input id="contact-email-2"  ng-model="co_email" type="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['text_enter_email'];?>
" name="email" data-constraints="@Email @Required" class="form-control">
			  </div>
			  <div class="form-group">
				<button type="submit" ng-click="send();$event.preventDefault();" class="btn btn-primary btn-fullwidth"><?php echo $_smarty_tpl->tpl_vars['language']->value['button_text_send'];?>
</button>
			  </div>
			</div>
		  </div>
		</form>
	  </div>
	  <div class="cell-md-4 offset-top-50 offset-md-top-0 text-left">
		<aside class="inset-lg-left-70">
		  <div class="range">
			<div class="cell-xs-6 cell-md-12">
			  <div class="h6 text-uppercase"><?php echo $_smarty_tpl->tpl_vars['language']->value['text_your_follow_us'];?>
</div>
			  <div class="text-subline offset-top-15"></div>
			  <div class="offset-top-25">
				<ul class="list-inline">
				  <li><a href="<?php echo $_smarty_tpl->tpl_vars['website']->value['fbfanspage'];?>
" class="icon icon-xs link-gray-light fa-facebook"></a></li>
				</ul>
			  </div>
			</div>
			<div class="cell-xs-6 cell-md-12 offset-top-50 offset-xs-top-0 offset-md-top-50">
			  <div class="h6 text-uppercase"><?php echo $_smarty_tpl->tpl_vars['language']->value['text_phone'];?>
</div>
			  <div class="text-subline offset-top-15"></div>
			  <div class="offset-top-25">
				<div class="unit unit-horizontal unit-middle unit-spacing-xs">
				  <div class="unit-left"><span class="icon icon-xs icon-primary text-middle mdi mdi-phone"></span></div>
				  <div class="unit-body"><a href="callto:#" class="link-default"><?php echo $_smarty_tpl->tpl_vars['website']->value['phone'];?>
</a></div>
				</div>
			  </div>
			</div>
			<div class="cell-xs-6 cell-md-12 offset-top-50 offset-xs-top-0 offset-md-top-50">
			  <div class="h6 text-uppercase"><?php echo $_smarty_tpl->tpl_vars['language']->value['text_email'];?>
</div>
			  <div class="text-subline offset-top-15"></div>
			  <div class="offset-top-25">
				<div class="unit unit-horizontal unit-middle unit-spacing-xs">
				  <div class="unit-left">
					<span class="icon icon-xs icon-primary text-middle mdi fa-envelope"></span>
				</div>
				  <div class="unit-body"><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['website']->value['email'];?>
" class="link-default"><?php echo $_smarty_tpl->tpl_vars['website']->value['email'];?>
</a></div>
				</div>
			  </div>
			</div>
		  </div>
		</aside>
	  </div>
	</div>
  </div>
</section>
</main><?php }
}
