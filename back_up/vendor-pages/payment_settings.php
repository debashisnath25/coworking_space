<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title>Payment Settings | Wanted 7
    </title>
    <?php
		include("common/metalinks.php");
	?>
    <link href="css/vendor-css/form-wizard.css" rel="stylesheet" />
	<style>.faq-tabs .nav-link {
      min-width: 100px;
      padding: 1rem;
      border: 1px dashed;
      margin-bottom: 1rem;
      background-color: #fff;
      box-shadow: 0 1px 1px 1px rgba(62,57,107,.07);
      }
      .faq-tabs .nav-link.active {
        color: #fff;
        border-color: #7c1ab5;
        background-color: #7c1ab5;
      }
      .faq-tabs .nav-link.active .faq-item-text {
        color: rgba(255,255,255,.5)!important;
      }
      .faq-tabs .nav-link.active i {
        color: #fff !important;
      }
      .faq-list>li {
        padding: .75rem 0;
      }
      .faq-list>li>a {
        display: block;
        position: relative;
        color: inherit;
        font-weight: 500;
        font-size: 16px;
      }
      .faq-list>li>a:after {
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        font-family: 'themify';
        content: "\e61a";
        speak: none;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
      }
      .faq-list>li>a[aria-expanded=true] {
        color: #2949ef;
      }
      .faq-list>li>a[aria-expanded=true]:after {
        content: "\e622";
      }
      .faq-answer {
        padding: 1rem 0;
        margin-top: 1rem;
        color: #6c757d;
      }
	 .dt-buttons {
		padding-bottom: 15px;
		margin-bottom: -50px;
	  }
	  
    </style>
    <!-- PAGE LEVEL STYLES-->
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
            <!-- BEGIN: Page content-->
            <div class="row">
			   <!-- settings sidebar start-->
				<?php include ('common/settings_sidebar.php');?>
				<!-- settings sidebar Ends-->
              <div class="col-md-9 col-xs-9" style="padding:0px;">
			  	<div class="page-heading" style="padding-left:17px;padding-right:17px;">
				  <div class="page-breadcrumb">
					<h1 class="page-title">Payment Method Settings
					</h1>
				  </div>
				</div>
                <div class="card " style="border:1px solid #7c1ab5">
                  <div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">Payment Method Settings</h5>
					</div>
				  <div class="card-body">
					<div class="form-group mb-4 row">
						<dt class="col-sm-4" style="padding-top:10px;">Account No*:</dt>
						<div class="col-sm-6">
							<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter Account No" required="">
						</div>
					</div>
					<div class="form-group mb-4 row">
						<dt class="col-sm-4" style="padding-top:10px;">Account Name*:</dt>
						<div class="col-sm-6">
							<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter Account Name" required="">
						</div>
					</div>
					<div class="form-group mb-4 row">
						<dt class="col-sm-4" style="padding-top:10px;">Bank Name*:</dt>
						<div class="col-sm-6">
							<input class="form-control form-control-solid" id="validationCustom03" type="number" placeholder="Enter Bank Name" required="">
						</div>
					</div>
					<div class="form-group mb-4 row">
						<dt class="col-sm-4" style="padding-top:10px;">IFSC Code*:</dt>
						<div class="col-sm-6">
							<input class="form-control form-control-solid" id="validationCustom03" type="number" placeholder="Enter IFSC Code" required="">
						</div>
					</div>
					<p class="pull-left">Provide your account (fields with * are required)</p>
				  </div>
				  <div class="card-footer">
					<button class="btn btn-primary" type="submit">Add Account</button>
					<button class="btn btn-default" type="reset">Clear</button>
				  </div>
                </div>
                <div class="card card-default hd_card">
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
    <?php
		include("common/extra.php");
	?>
    <?php
		include("common/scripts.php");
	?>
    <script src="js/vendor-js/jquery.validate.min.js">
    </script>
    <script src="js/vendor-js/jquery.steps.min.js">
    </script>
  </body>
</html>
