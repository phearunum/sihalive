<?php
/* Smarty version 3.1.29, created on 2018-01-16 07:25:21
  from "/Applications/XAMPP/xamppfiles/htdocs/application/views/Frontend/frame.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a5d9ad14e9af3_57482486',
  'file_dependency' => 
  array (
    '7392ed50e53947c498048a97227d580a5851487f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/application/views/Frontend/frame.tpl',
      1 => 1515992414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Frontend/meta.tpl' => 1,
    'file:Frontend/css.tpl' => 1,
    'file:Frontend/navbar.tpl' => 1,
    'file:Frontend/footer.tpl' => 1,
    'file:Frontend/gallery.tpl' => 1,
    'file:Frontend/js.tpl' => 1,
  ),
),false)) {
function content_5a5d9ad14e9af3_57482486 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn" class="wide wow-animation"  ng-app="sihaliveApp">
	<head>
		<!-- Site Title-->
		<title><?php echo $_smarty_tpl->tpl_vars['language']->value['website_name'];?>
-<?php echo $_smarty_tpl->tpl_vars['language']->value['website_title_menu'];?>
</title>
	  <meta name="format-detection" content="telephone=no">
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta charset="utf-8">

		<meta property="og:url"           content="http://food.sihalive.dev.com" />
		<meta property="og:type"          content="website" />
		<meta property="og:title"         content="<?php echo $_smarty_tpl->tpl_vars['language']->value['website_name'];?>
" />
		<meta property="og:description"   content="	11" />
		<meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Frontend/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<!-- Stylesheets-->
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Frontend/css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<!--[if lt IE 10]>
			<div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
			<?php echo '<script'; ?>
 src="js/html5shiv.min.js"><?php echo '</script'; ?>
>
		<![endif]-->
	</head>
	<body ng-controller="bodyCtrl" ng-init="init()">
	<!-- Page-->
    <div class="page text-center" >
      <header class="page-head">
        <!-- RD Navbar-->
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Frontend/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      </header>
      <!-- Page Content-->
	  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

      <!-- Page Footer-->
      <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Frontend/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
    <!-- Global Mailform Output-->
    <div id="form-output-global"  class="snackbars" >
		<p>
			<span id="form-output-global-icon" class="icon text-middle fa icon-xxs"></span>
			<span class="message"></span>
		</p>
	</div>
    <!-- PhotoSwipe Gallery-->
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Frontend/gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php echo '<script'; ?>
>
		var ca_id ="<?php echo $_GET['ca_id'];?>
";
		if(ca_id =="")
		{
			ca_id  = 1;
		}
	<?php echo '</script'; ?>
>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Frontend/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- Java script-->
	<?php echo '<script'; ?>
>
		function changeOrderNum(input)
		{
			var index = $(input).data('index');
			var price = parseFloat($(input).data('price'));
			var order_num = parseInt(input.val());
			$('span[data-index='+index+']').html(price* order_num ).data('subtotal', price* order_num);
			var total = 0;
			$.each($('.subtotal'),function(i,e){
				var subtotal = parseFloat($(e).data('subtotal'),2);
				total+=subtotal ;
				
			})

			$('.total').html(parseFloat(total,2).toFixed(2));
		}
		window.onload=function()
		{	
			if($(document).width()<=1024)
			{
				$('.cartnums').removeClass('text-white').addClass('text-black');
			}
			
			$( window ).resize(function() {
				if($(document).width()<=1024)
				{
					$('.cartnums').removeClass('text-white').addClass('text-black');
				}else
				{
					$('.cartnums').removeClass('text-black').addClass('text-white');
				}
			});
			
			$( "body" ).on( "click", ".stepper-arrow.up", function(e) {	
				var input = $(this).parent().find('input');
				if($(input).hasClass( "ng-valid" ) ==false)
				{
					return false;
				}
				var max   =parseInt(input.attr('max'));
				var val   =parseInt(input.val());
				if(val > max)
				{
					return false;
				}
				input.val(val +1);
				changeOrderNum(input)
			});

			$( "body" ).on( "click", ".stepper-arrow.down", function() {
				var input = $(this).parent().find('input');
				if($(input).hasClass( "ng-valid" ) ==false)
				{
					return false;
				}
				var min   =parseInt(input.attr('min'));
				var val   =parseInt(input.val());
				if(val <= min)
				{
					return false;
				}
				input.val(val -1);
				changeOrderNum(input);
			});
		}
	<?php echo '</script'; ?>
>
	</body>
</html><?php }
}
