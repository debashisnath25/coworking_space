<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title>Additional Features | Bundesk</title>
    <?php
		include("common/metalinks.php");
	?>
    <link href="css/vendor-css/form-wizard.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <style>
      .dt-buttons {
	  	padding-bottom:15px;
	  }
     .form-control-lg {
	     border-radius: 4px !important;
	 }
	 .input-group-text {
	 	font-size: 20px !important;
		color: #000000 !important;
	 }
	 .btn-light-solid[aria-expanded="true"]{
	  	background-color: #e4e6f0 !important;
		color: #495057 !important;
		border-color: #7c1ab5 !important;
		outline: 0 !important;
		box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 0 0.2rem rgba(41,73,239,.25) !important;
	  }
	  .btn-light-solid{
	    background-color: #f4f5f9;
		border-color: #f4f5f9;
	  }

	 .faq-tabs .nav-link {
      height: 70px;
	  width: 228px;
      border: 1px dashed;
      margin-bottom: 1rem;
      background-color: #fff;
      box-shadow: 0 1px 15px 1px rgba(62,57,107,.07);
	  margin-right:15px;
	  text-align: center;
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
	  .nav-pills {
	    padding-left: 32px;
		padding-top: 15px;
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
			  	<h1 class="page-title page-title-sep">Additional Features</h1>
              </div>
            </div>
            <!-- BEGIN: Page content-->
            <div>
             <div class="row">
                <?php include ('common/product_header.php');?>
                <div class="col-md-12 col-xs-12 ">
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
