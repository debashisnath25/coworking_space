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
              <span>Leads
              </span>
            </li>
            <li class="<?php echo (($page == 'referred_leads')?'mm-active':'')?>">
              <a href="referred_leads.php">
                <i class="sidebar-item-icon fa fa-user-plus">
                </i>
                <span class="nav-label">Referred Leads
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
            <li class="<?php echo (($page == 'discount_details')?'mm-active':'')?>">
              <a href="accepted_leads.php">
                <i class="sidebar-item-icon fa fa-check">
                </i>
                <span class="nav-label">Accepted Leads
                </span>
              </a>
            </li>
			<li class="<?php echo (($page == 'coupon_details')?'mm-active':'')?>">
              <a href="rejected_leads.php">
                <i class="sidebar-item-icon fa fa-ban">
                </i>
                <span class="nav-label">Rejected Leads
                </span>
              </a>
            </li>
            <li class="<?php echo (($page == 'completed_leads')?'mm-active':'')?>">
              <a href="completed_leads.php">
                <i class="sidebar-item-icon fa fa-check-square">
                </i>
                <span class="nav-label">Completed Leads
                </span>
              </a>
            </li>
			
			<li class="heading">
              <span>YOUR OFFICE SPACE
              </span>
            </li>
            <li class="<?php echo (($page == 'office_space' || $page == 'step1' || $page == 'step2' || $page == 'step3' || $page == 'step4' || $page == 'step5')?'mm-active':'')?>">
              <a href="office_space.php">
                <i class="sidebar-item-icon ft-gift">
                </i>
                <span class="nav-label">Office Space
                </span>
                <!-- <i class="arrow la la-angle-right"></i> -->
              </a>
            </li>
            <li class="<?php echo (($page == 'bookings')?'mm-active':'')?>">
              <a href="bookings.php">
                <i class="sidebar-item-icon ft-layers">
                </i>
                <span class="nav-label">Bookings
                </span> 
              </a>
            </li>
			<li class="<?php echo (($page == 'discount_coupon' || $page == 'coupon_details' || $page == 'discount_details')?'mm-active':'')?>">
              <a href="discount_coupon.php">
                <i class="sidebar-item-icon fas fa-tags">
                </i>
                <span class="nav-label">Discounts & Coupon
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
            <li class="<?php echo (($page == 'review')?'mm-active':'')?>">
              <a href="review.php">
                <i class="sidebar-item-icon ft-star">
                </i>
                <span class="nav-label">Rating & Reviews
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

            <li class="<?php echo (($page == 'profile_general_settings' || $page == 'profile_payment_settings' || $page == 'profile_mail_settings')?'mm-active':'')?>">
              <a href="profile_general_settings.php">
                <i class="sidebar-item-icon ft-lock">
                </i>
                <span class="nav-label">Profile
                </span>
              </a>
            </li>
            <li class="<?php echo (($page == 'settings')?'mm-active':'')?>">
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
      