<?php
    $page = basename(substr($_SERVER['PHP_SELF'],0,strrpos($_SERVER['PHP_SELF'],'.'))); // get file name from url and strip extension
?>
		  <div class="page-sidebar custom-scroll" id="sidebar">
          <div class="sidebar-header center text-center" style="background:#3a1f47;margin:10px;border-radius:8px;padding:5px 5px;">
            <a class="sidebar-brand center text-center" href="index.html">
              <img src="images/vendor-images/rect_white.png" alt="logo" data-src="images/vendor-images/rect_white.png" data-src-retina="images/vendor-images/rect_white.png" height="47">
            </a>
            <a class="sidebar-brand-mini" href="index.html">
              <img src="images/vendor-images/fav_white.png" alt="logo" data-src="images/vendor-images/fav_white.png" data-src-retina="images/vendor-images/fav_white.png" height="25">
            </a>
          </div>
          <ul class="sidebar-menu metismenu">
            <li class="heading">
              <span>DASHBOARD
              </span>
            </li>
            <li class="<?php echo (($page == 'dashboard' || $page == 'store_type' || $page == 'create_store' || $page == 'document_verification' || $page == 'addons' || $page == 'pickup_delivery' || $page == 'payment_setup')?'mm-active':'')?>">
              <a href="dashboard.php">
                <i class="sidebar-item-icon ft-home">
                </i>
                <span class="nav-label">Dashboard
                </span>
              </a>
            </li>
            <li class="heading">
              <span>YOUR BUSINESS
              </span>
            </li>
            <li class="<?php echo (($page == 'products' || $page == 'add_products' || $page == 'attributes' || $page == 'options' || $page == 'products_shipping' || $page == 'product_preview' || $page == 'add_category' || $page == 'add_subcategory')?'mm-active':'')?>">
              <a href="products.php">
                <i class="sidebar-item-icon ft-gift">
                </i>
                <span class="nav-label">Products
                </span>
                <!-- <i class="arrow la la-angle-right">
</i> -->
              </a>
            </li>
            <li class="<?php echo (($page == 'orders' || $page == 'marked_pickup' || $page == 'ready_pickup' || $page == 'outfor_delivery' || $page == 'deliverd' || $page == 'coustomer_cancelled' || $page == 'vendor_cancelled' || $page == 'returns' ||$page == 'exceptions_order')?'mm-active':'')?>">
              <a href="orders.php">
                <i class="sidebar-item-icon ft-layers">
                </i>
                <span class="nav-label">Orders
                </span> 
              </a>
            </li>
            <!--<li>
              <a href="javascript:;">
                <i class="sidebar-item-icon ft-user">
                </i>
                <span class="nav-label">Coustomers
                </span>  
              </a>
            </li>-->
            <li class="<?php echo (($page == 'discount' || $page == 'discount_details')?'mm-active':'')?>">
              <a href="discount.php">
                <i class="sidebar-item-icon ft-percent">
                </i>
                <span class="nav-label">Discount
                </span>
              </a>
            </li>
			<li class="<?php echo (($page == 'coupon' || $page == 'coupon_details')?'mm-active':'')?>">
              <a href="coupon.php">
                <i class="sidebar-item-icon fas fa-tags">
                </i>
                <span class="nav-label">Coupons
                </span>
              </a>
            </li>
            <li class="<?php echo (($page == 'payment')?'mm-active':'')?>">
              <a href="payment.php">
                <i class="sidebar-item-icon ft-credit-card">
                </i>
                <span class="nav-label">Payments
                </span>
              </a>
            </li>
            <li class="heading">
              <span>YOUR STORE
              </span>
            </li>

            <li class="<?php echo (($page == 'profile_settings')?'mm-active':'')?>">
              <a href="profile_settings.php">
                <i class="sidebar-item-icon ft-shopping-bag">
                </i>
                <span class="nav-label">Store
                </span>
              </a>
            </li>

            <li class="<?php echo (($page == 'review')?'mm-active':'')?>">
              <a href="review.php">
                <i class="sidebar-item-icon ft-star">
                </i>
                <span class="nav-label">Rating & Reviews
                </span>
              </a>
            </li>
            <li class="heading">
              <span>VENDOR TOOLS
              </span>
            </li>
            <li class="<?php echo (($page == 'reports')?'mm-active':'')?>">
              <a href="reports.php">
                <i class="sidebar-item-icon ft-target">
                </i>
                <span class="nav-label">Report
                </span>
              </a>
            </li>
            <li class="heading">
              <span>ACCOUNT & BILLING
              </span>
            </li>

            <li class="<?php echo (($page == 'plans_and_subscriptions')?'mm-active':'')?>">
              <a href="plans_and_subscriptions.php">
                <i class="sidebar-item-icon ft-dollar-sign">
                </i>
                <span class="nav-label">Plans & Subscriptions
                </span>
              </a>
            </li>

            <li class="<?php echo (($page == 'profile')?'mm-active':'')?>">
              <a href="profile.php">
                <i class="sidebar-item-icon ft-lock">
                </i>
                <span class="nav-label">Profile
                </span>
              </a>
            </li>
            <li class="<?php echo (($page == 'settings' || $page == 'tax_settings' || $page == 'mail_settings' || $page == 'invoice_settings' || $page == 'payment_settings')?'mm-active':'')?>">
			  <a href="settings.php">
			  	<i class="sidebar-item-icon ft-sliders">
                </i>
				<span class="nav-label">Settings
				</span>
				<span class="arrow">
				</span>
			  </a>
			
			</li>
          </ul>
        </div>
      