<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title>Addons | Wanted 7</title>
    <?php
		include("common/metalinks.php");
	?>
    <link href="css/vendor-css/form-wizard.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <style>
      .data-widget-icon {
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 40px;
        color: #6a89d7;
      }
     .faq-tabs .nav-link {
      text-align: center;
      padding: 1.8rem 1rem;
      background-color: #fff;
      border: 1px solid #ccc;
     
      }
      .faq-tabs .nav-link:hover {
      }
      .faq-tabs .nav-link.active {
        color: #fe4d2e;
        border-color: #fe4d2e;
        background-color: #fff;
      }
      .faq-tabs .nav-link.active i {
        color: #fe4d2e !important;
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
	  .faq-tabs .nav-link.active {
			color:black;
			border-color: #7c1ab5;
			background-color: #fff;
		}
	.faq-tabs .nav-link.active i {
			color: #fff !important;
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
               
              </div>
            </div>
            <!-- BEGIN: Page content-->
            <div>
              <div class="col-md-12 col-xs-12 ">
                <div class="card card-fullheight" style="border:1px solid #7c1ab5">
					<div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">PLEASE CHOOSE ADDITIONAL FEATURES</h5>
						<!-- <div class="card-actions"><a class="card-collapse" style="color:#fff;"><i class="ti-angle-down"></i></a></div> -->
					</div>
				    <div class="card-body">
                    <form class="circle-steps wizard clearfix" id="form-wizard" action="javascript:;" novalidate="novalidate" role="application">
                      <div class="steps clearfix">
                        <ul role="tablist">
                          <li role="tab"  aria-disabled="false" aria-selected="true">
                            <a id="form-wizard-t-0" href="store_type.php" aria-controls="form-wizard-p-0">
                              <span class="current-info audible">current step: 
                              </span>
                              <span class="step-number">1
                              </span> Step 1
                            </a>
                          </li>
                          <li role="tab"  class="disabled" aria-disabled="true">
                            <a id="form-wizard-t-1" href="create_store.php" aria-controls="form-wizard-p-1">
                              <span class="step-number">2
                              </span> Step 2
                            </a>
                          </li>
                          <li role="tab" class="disabled" aria-disabled="true">
                            <a id="form-wizard-t-2" href="document_verification.php" aria-controls="form-wizard-p-2">
                              <span class="step-number">3
                              </span> Step 3
                            </a>
                          </li>
                          <li role="tab" class="first current" class="disabled last" aria-disabled="true">
                            <a id="form-wizard-t-3" href="addons.php" aria-controls="form-wizard-p-3">
                              <span class="step-number">4
                              </span> Step 4
                            </a>
                          </li>
						   <li role="tab" class="disabled last" aria-disabled="true">
                            <a id="form-wizard-t-4" href="pickup_delivery.php" aria-controls="form-wizard-p-4">
                              <span class="step-number">5
                              </span> Step 5
                            </a>
                          </li>
                        </ul>
                      </div>
                    </form>
                  </div>
                  <div class="card-body">
                    
                    
                    <div class="col-lg-12">
						<!--<div class="alert alert-success has-icon" role="alert"><i class="la la-check alert-icon"></i> Success!</div>
						<div class="alert alert-danger has-icon" role="alert"><i class="la la-info-circle alert-icon"></i> Failed!</div>-->

						
							
							<form>
							<div class="card-body">
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">Title of the Property</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter Property Title" required="">
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">Type</dt>
									<div class="col-sm-8">
										<select class="selectpicker form-control">
											<option selected disabled>Choose Category</option>
											<option>Meeting Room</option>
											<option>Coworking Space</option>
											<option>Private Office</option>
											<option>Training Room</option>
											<option>Business Centre</option>
											<option>Coworking Cafes</option>
										</select>
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">Capacity</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter Capacity" required="">
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">Price</dt>
									<div class="col-sm-2">
										<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="" required="">
										<span>Daily</span>
									</div>
									<div class="col-sm-2">
										<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="" required="">
										<span>Monthly</span>
									</div>
									<div class="col-sm-2">
										<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="" required="">
										<span>Quaterly</span>
									</div>
									<div class="col-sm-2">
										<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="" required="">
										<span>Yearly</span>
									</div>
								</div>				
								<button class="btn btn-primary clr" style="float:right;margin-right:10px;" type="button"> Save </button>
								<button class="btn btn-default" type="reset" style="float:right;margin-right:10px;"> Clear </button>
							  </div>
							</form>
						
					  </div>
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
