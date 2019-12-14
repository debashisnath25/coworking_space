<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title>Plans & Subscriptions | Bundesk
    </title>
    <?php
		include("common/metalinks.php");
	?>
    <!-- PAGE LEVEL VENDORS-->
  
    <link href="css/vendor-css/datatables.min.css" rel="stylesheet" />
	<link href="css/vendor-css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <!-- THEME STYLES-->


    <!-- PAGE LEVEL STYLES-->
    <style>
	.card-title{
		padding:30px;
		border-bottom:1px solid #ccc;
		text-align:center;
	 }
	 .card-body{
		text-align:center;
	 }
	 .card-footer{
		text-align:center;
	 }
	 .bg-purple-300{
		color:#fff;
	 }
	 /*pricing plan css*/
	 .pricing-plan {
		text-align: center;
		background-color: #fff;
		border: 1px solid rgba(0, 0, 0, .1);
		padding: 0;
		margin-bottom: 30px;
	  }
	 .pricing-plan:not(.active) {
			border-top: 3px solid #d3d6d8;
	 }
.pricing-price {
		display: flex;
		justify-content: center;
		align-items: baseline;
}
.pricing-price sup {
		font-size: 60%;
		margin-right: 2px;
}
.pricing-features .not-available {
		color: #b4bcc8;
		text-decoration: line-through;
}
.pricing-plan.active {
		box-shadow: 0 5px 20px #d6dee4;
		z-index: 2;
		transform: scale(1.05);
}
sup {
		font-size: 60%;
		margin-right: 2px;
}
    </style>
  </head>
  <body>
    <div class="page-wrapper">
      <div class="content-wrapper">
        <!-- BEGIN: Sidebar-->
		<?php
			include("common/sidebar.php");
		?>
        <!-- END: Sidebar-->
        <!-- BEGIN: Content-->
        <div class="content-area">
          <!-- BEGIN: Header-->
          <?php
			include("common/header.php");
		  ?>
          <!-- END: Header-->
          <div class="page-content fade-in-up">
		  	<!-- BEGIN: Page heading-->
			<div class="page-heading">
			  <div class="page-breadcrumb">
				<h1 class="page-title"><a href="dashboard.php">Dashboard</a> &gt; Plans & Subscriptions
				</h1>
			  </div>
			</div>
			<!-- BEGIN: Page content-->
            <div>
			<div class="row">
				<div class="col-lg-12">
					<div class="ex-box">
						<p>Pick a plan to use when your free trial ends</p>
					</div>
				</div>
			</div>
             <div class="row">
			  	<div class="col-lg-12">
				  <div class="row">
					<div class="col-lg-4">
					  <div class="card card-fullheight">
						<div class="card-title bg-purple-300">
							<h5><span class="semi-bold">Basic</span> Plan
							</h5>
							<h1><i class="fas fa-rupee-sign"></i> 500</h1>
							<h6>PER MONTH</h6>
						</div>
						<div class="card-body">
							<p><strong>1,000</strong> Leads</p>
							<p>Free Setup</p>
							<p><strong>Email/SMS</strong> Notifications</p>
							<p><strong>Payment Gateway</strong> Integration</p>
							<p>Integrated Logistics-Single Provider</p>
							<p>Reports & Analytics</p>
							<p>Blog</p>
						</div>
						<div class="card-footer">
							<button class="btn btn-default btn-block btn-cons"> Selected </button>
						</div>
					  </div>
					</div>
					<div class="col-lg-4">
					  <div class="card card-fullheight">
						<div class="card-title bg-purple-300">
							<h5><span class="semi-bold">Advance
							</span> Plan
						  </h5>
						  <h1><i class="fas fa-rupee-sign"></i> 2,000</h1>
						  <h6>PER MONTH</h6>
						</div>
						<div class="card-body">
							<p><strong>2,000</strong> Leads</p>
							<p>Free Setup</p>
							<p><strong>Email/SMS</strong> Notifications</p>
							<p><strong>Payment Gateway</strong> Integration</p>
							<p>Integrated Logistics-Single Provider</p>
							<p>Reports & Analytics</p>
							<p>Blog</p>
						</div>
						<div class="card-footer">
							<button class="btn btn-primary btn-block btn-cons">Upgrade</button>
						</div>
					  </div>
					</div>
					<div class="col-lg-4">
					  <div class="card card-fullheight">
						<div class="card-title bg-purple-300">
							<h5><span class="semi-bold">Professional</span> Plan
							</h5>
							<h1><i class="fas fa-rupee-sign"></i> 5,000</h1>
							<h6>PER MONTH</h6>
						</div>
						<div class="card-body">
							<p><strong>5,000</strong> Leads</p>
							<p>Free Setup</p>
							<p><strong>Email/SMS</strong> Notifications</p>
							<p><strong>Payment Gateway</strong> Integration</p>
							<p>Integrated Logistics-Single Provider</p>
							<p>Reports & Analytics</p>
							<p>Blog</p>
						</div>
						<div class="card-footer">
							<button class="btn btn-primary btn-block btn-cons">Upgrade</button>
						</div>
					  </div>
					</div>
				  </div> 
				</div>

              </div>
            </div>
            <!-- END: Page content-->
          </div>
          <!-- BEGIN: Footer-->
		<?php
			include("common/footer.php");
		  ?>
          <!-- END: Footer-->
        </div>
        <!-- END: Content-->
      </div>
    </div>
    <!-- BEGIN: Search form-->
	 <?php
		include("common/scripts.php");
	?>
  </body>
</html>
