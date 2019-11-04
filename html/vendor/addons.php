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
						   <li role="tab" class="disabled last" aria-disabled="true">
                            <a id="form-wizard-t-5" href="payment_setup.php" aria-controls="form-wizard-p-5">
                              <span class="step-number">6
                              </span> Step 6
                            </a>
                          </li>
                        </ul>
                      </div>
                    </form>
                  </div>
                  <div class="card-body">
                    <div class="flexbox mb-4">
                      <h4 class="mb-0">
                      </h4>
                    </div>
                    
                    <ul class="row nav nav-pills faq-tabs mb-5 " role="tablist" >
                      <li class="nav-item col-lg-4 col-xs-12" onclick="" style="">
                        <a class="nav-link active show" style="background:#f0f0f0;height:200px;" data-toggle="pill" href="#faq-group-1" role="tab" aria-selected="true">
							
                          <h5 class="mb-3 mt-4">Wanted Express Delivery Service
                          </h5>
                          <p class="mb-0">Select this box you are ready to ship your products in a few hours to your Customers in Delhi/Ncr.
                          </p>
                        </a>
                      </li>
                      <li class="nav-item col-lg-4 col-xs-12" onclick="" >
                        <a class="nav-link" style="background:#f0f0f0;height:200px;" data-toggle="pill" href="#faq-group-2" role="tab" aria-selected="false">
                          
                          <h5 class="mb-3 mt-4">Wanted Support
                          </h5>
                          <p class="mb-0">Select this box you are ready to Take some text.
                          </p>
                        </a>
                      </li>
					  <li class="nav-item col-lg-4 col-xs-12" onclick="" >
                        <a class="nav-link" style="background:#f0f0f0;height:200px;" data-toggle="pill" href="#faq-group-2" role="tab" aria-selected="false">
                          
                          <h5 class="mb-3 mt-4">Wanted Assurance Program
                          </h5>
                          <p class="mb-0">Check this box you are ready to Provide your Customers with some text.
                          </p>
                        </a>
                      </li>
                    </ul>
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