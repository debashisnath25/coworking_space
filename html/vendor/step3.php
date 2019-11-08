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
      .faq-tabs .nav-link {
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
            <div class="page-heading" style="margin-left:13px;">
              <div class="page-breadcrumb">
			  	<h1 class="page-title page-title-sep">General</h1>
              </div>
            </div>
            <!-- BEGIN: Page content-->
            <div>
             <div class="row">
                <?php include ('common/step_sidebar.php');?>
                <div class="col-md-9 col-xs-12 ">
                <div class="card card-fullheight" style="border:1px solid #7c1ab5">
					<div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">Additional Features</h5>
						<!-- <div class="card-actions"><a class="card-collapse" style="color:#fff;"><i class="ti-angle-down"></i></a></div> -->
					</div>
				   
                  <div class="card-body">
                    
                    
                    <div class="col-lg-12">
						<!--<div class="alert alert-success has-icon" role="alert"><i class="la la-check alert-icon"></i> Success!</div>
						<div class="alert alert-danger has-icon" role="alert"><i class="la la-info-circle alert-icon"></i> Failed!</div>-->

						
							
							<form>
							<div class="card-body">
									<div class="row">
										<div class="col-md-4 check-list">
											<h5 class="box-title">Choose your facilities</h5>
										</div>
									</div>
								
									<div class="row">
										<div class="col-md-3 check-list">
											
											<label class="checkbox checkbox-primary"><input type="checkbox"><span>AC with power backup</span></label>
											<label class="checkbox checkbox-primary"><input type="checkbox"><span>Free tea/Coffee</span></label>
											<label class="checkbox checkbox-primary"><input type="checkbox"><span>Car Parking*</span></label>
											<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Whiteboard</span></label>
											<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Speaker</span></label>
										</div>
										<div class="col-md-3 check-list">
											
											<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Free WiFi</span></label>
											<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Cafeteria</span></label>
											<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Reception</span></label>
											<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Video Conferencing</span></label>
											<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Podium</span></label>
											
										</div>
										<div class="col-md-3 check-list">
											<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Clean Toilets</span></label>
											<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Lounge</span></label>
											<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Mailing Address</span></label>
											<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Flipboard</span></label>
											<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>24x7</span></label>
										</div>
										<div class="col-md-3 check-list">
											<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Functional Workspace</span></label>
											<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Meeting Room</span></label>
											<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Projector</span></label>
											<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Microphone</span></label>
											<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Night Shift</span></label>
										</div>
								   </div>
								   <a class="btn btn-warning btn-cons" style="color: white;float:left;margin-top:15px;" href="step2.php">BACK</a>
									<a class="btn btn-success btn-cons" style="color: white;float:right;margin-top:15px;" href="step4.php">NEXT</a>
							  </div>
							 
							</form>
						
					  </div>
                  </div>
                </div>
                <div class="card card-default hd_card">
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

    <?php
		include("common/scripts.php");
	?>
   
    <script src="js/vendor-js/jquery.validate.min.js">
    </script>
    <script src="js/vendor-js/jquery.steps.min.js">
    </script>
  </body>
</html>
