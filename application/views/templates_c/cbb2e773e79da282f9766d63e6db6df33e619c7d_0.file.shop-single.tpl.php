<?php
/* Smarty version 3.1.29, created on 2018-01-19 17:38:16
  from "/Users/admin/Desktop/sihalive/application/views/Menu/shop-single.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a621ef8e4e1c1_67931881',
  'file_dependency' => 
  array (
    'cbb2e773e79da282f9766d63e6db6df33e619c7d' => 
    array (
      0 => '/Users/admin/Desktop/sihalive/application/views/Menu/shop-single.tpl',
      1 => 1515992414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Frontend/breadcrumbs.tpl' => 1,
  ),
),false)) {
function content_5a621ef8e4e1c1_67931881 ($_smarty_tpl) {
?>
      <main class="page-content" ng-controller="productPageCtrl">
        <!-- Breadcrumbs & Page title-->
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Frontend/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <section class="section-50 section-sm-100">
          <div class="shell">
            <div class="range range-xs-center">
              <div class="cell-sm-6 text-lg-left">
				<div class="item">
					<img src="/images/product-01-542x448.png" alt="" width="542" height="420"/>
				</div>
              </div>
              <div class="cell-sm-6 cell-lg-5 text-sm-left offset-top-60 offset-sm-top-30">
                <div class="reveal-xs-flex range-xs-middle range-xs-center range-sm-left">
                  <h4 class="font-default" ><?php echo $_smarty_tpl->tpl_vars['food']->value['f_name'];?>
</h4>
                  <div class="inset-xs-left-50 offset-top-0">
                    <div class="team-member-position team-member-position-primary">
						<span class="big text-italic text-middle">Hot</span>
					</div>
                  </div>
                </div>
                <div class="offset-top-15">
                  <p ><?php echo $_smarty_tpl->tpl_vars['food']->value['f_description'];?>
</p>
                </div>
                <div class="offset-top-15">
					<div class="group-sm">
						<div class="fb-share-button" 
							data-href="<?php echo $_smarty_tpl->tpl_vars['website']->value['domain'];?>
/Menu/food/<?php echo $_smarty_tpl->tpl_vars['food']->value['f_id'];?>
" 
							data-layout="button_count">
						</div>
					</div>
                </div>
                <hr class="offset-top-30 veil reveal-sm-block">
                <div class="offset-top-30">
                  <div class="responsive-tabs responsive-tabs-shop responsive-tabs-horizontal">
                    <ul class="resp-tabs-list">
						<li>
							<span class="price">$</span>
							<span class="price selectedprice"><?php echo $_smarty_tpl->tpl_vars['food']->value['f_large_price'];?>
</span>
						</li>
                    </ul>
                  </div>
                </div>
                <div class="offset-top-45" >
                  <div class="group-sm">
                    <div class="stepper-type-1">
                      <input type="number" id="order_num" data-zeros="true"   value="1" min="1" max="20" readonly class="form-control">
                    </div>
					<a ng-click="click(<?php echo $_smarty_tpl->tpl_vars['f_id']->value;?>
,'na','<?php echo $_smarty_tpl->tpl_vars['food']->value['f_large_price'];?>
' ,'<?php echo $_smarty_tpl->tpl_vars['food']->value['f_name'];?>
');$event.stopPropagation();" class="text-top btn btn-primary btn-shape-circle btn-shadow  btn-min-width-sm">
						<span><?php echo $_smarty_tpl->tpl_vars['food_language_ary']->value['food_menu_addcar'];?>
</span>
					</a>	
					<a href="/ShopCart/" class="text-top btn btn-primary btn-shadow  btn-shape-circle btn-min-width-lg">
						<span><?php echo $_smarty_tpl->tpl_vars['food_language_ary']->value['food_menu_check'];?>
</span>
					</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="text-left">
          <div class="responsive-tabs responsive-tabs-horizontal responsive-tabs-horizontal-background">
            <ul class="resp-tabs-list shell">
              <li>Delivery</li>
            </ul>
            <div class="resp-tabs-container">
              <div>
                <p class="text-base">Here you can read some details about a nifty little lifecycle of your order's journey from the time you place your order to your new treasures arriving at your doorstep. At first, you choose the product you like. Then you put into your shopping cart and pass the checkout process in a few clicks. Our store offers several payment and delivery methods, so after placing your order, you'll have an opportunity to choose which one is the most convenient for you.</p>
              </div>
            </div>
          </div>
        </section>
      </main><?php }
}
