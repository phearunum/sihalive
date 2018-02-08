<?php
/* Smarty version 3.1.29, created on 2018-01-17 18:34:46
  from "/Users/admin/Desktop/sihalive/application/views/Login/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a5f89369d0061_12320804',
  'file_dependency' => 
  array (
    'd4f3f331b6cd737aafe33b0ebe6aa7b328d5a140' => 
    array (
      0 => '/Users/admin/Desktop/sihalive/application/views/Login/index.tpl',
      1 => 1515992414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Frontend/breadcrumbs.tpl' => 1,
  ),
),false)) {
function content_5a5f89369d0061_12320804 ($_smarty_tpl) {
?>
<!-- Page Content-->
<?php echo '<script'; ?>
>
	var url_back ='<?php echo $_GET['back'];?>
';
<?php echo '</script'; ?>
>
<main class="page-content" ng-controller="loginCtrl" ng-model="back" ng-init="back='<?php echo $_GET['back'];?>
'">
	<!-- Breadcrumbs & Page title-->
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Frontend/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<!-- Buttons-->
	<section class="bg-white text-center section-50 section-sm-100">
	  <div class="shell">
		<div class="range range-xs-center">
		  <div class="cell-sm-8 cell-lg-6">
			<div class="responsive-tabs responsive-tabs-modern responsive-tabs-modern-mod-1 responsive-tabs-horizontal">
			  <ul class="resp-tabs-list">
				<li>Login</li>
				<li>Registration</li>
			  </ul>
			  <div class="resp-tabs-container">
				<div>
					<div class="group-sm">
						<a id="FBloginBtn"  class="btn btn-facebook btn-icon btn-icon-left">
							<span class="icon icon-lg fa-facebook"></span>
							<span>Facebook</span>
						</a>
					</div>
				  <div class="divider-custom offset-top-30">
					<p class="small text-uppercase">Or</p>
				  </div>
				  <!-- RD Mailform-->
				  <form class="rd-mailform form-register text-center offset-top-20" id="Loginfrm">
					<div class="form-group">
					  <label for="contact-name" class="form-label form-label-outside">Username or E-mail</label>
					  <input id="contact-name" type="text" name="username_email" data-constraints="@Required" class="form-control">
					</div>
					<div class="form-group">
					  <label for="contact-email" class="form-label form-label-outside">Password</label>
					  <input id="contact-email" type="password" name="u_passwd" data-constraints="@Required" class="form-control">
					</div>
					<div class="offset-top-50">
					  <button type="submit" ng-click="doLogin()" class="btn btn-primary btn-fullwidth btn-shadow">Enter</button>
					</div>
				  </form>
				</div>
				<div >
					<div class="group-sm">
						<a href="#" class="btn btn-facebook btn-icon btn-icon-left"  id="fbReg">
							<span class="icon icon-xs fa-facebook"></span>
							<span>Facebook</span>
						</a>
						
						</div>
				  <div class="divider-custom offset-top-30">
					<p class="small text-uppercase">Or</p>
				  </div>
				  <!-- RD Mailform-->
				  <form class="rd-mailform form-register text-center offset-top-20">
					<div class="form-group">
						<label for="register-form-name" class="form-label form-label-outside">USERNAME</label>
						<input id="register-form-name" ng-blur="UserIsExist(name)" maxlength="20"   ng-model="name" type="text" name="u_name" data-constraints="@Required" class="form-control">
						<span  ng-show="username_isexist" class="small text-uppercase" style="color:red;" ><?php echo $_smarty_tpl->tpl_vars['language']->value['register_form_username_isexist'];?>
</span>
					</div>
					<div class="form-group">
						<label for="register-form-email" class="form-label form-label-outside">E-mail</label>
						<input id="register-form-email" ng-blur="EmailIsExist(email.text)" ng-model="email.text" type="email" name="u_email" data-constraints="@Required @Email" class="form-control">
						<span  ng-show="email_isexist" class="small text-uppercase" style="color:red;" ><?php echo $_smarty_tpl->tpl_vars['language']->value['register_form_email_isexist'];?>
</span>
					</div>
					<div class="form-group">
					  <label for="register-form-password" class="form-label form-label-outside">Password</label>
					  <input id="register-form-password"  maxlength="12" ng-model="u_passwd" type="password" name="u_passwd" data-constraints="@Required" class="form-control">
					</div>
					<div class="form-group">
					  <label for="register-form-password-confirm" class="form-label form-label-outside">Confirm Password</label>
					  <input id="register-form-password-confirm" maxlength="12" ng-model="u_passwd_confirm" type="password" name="u_passwd_confirm" data-constraints="@Required" class="form-control">
					</div>
					<div class="offset-top-50">
					  <button type="submit" ng-click="register($event);" class="btn btn-primary btn-fullwidth btn-shadow">Register</button>
					</div>
				  </form>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</section>

</main><?php }
}
