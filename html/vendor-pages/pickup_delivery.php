<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title>Delivery Pickup | Wanted 7</title>
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
    </style>
    <style>.faq-tabs .nav-link {
      text-align: center;
      padding: 1.8rem 1rem;
      background-color: #fff;
      border: 1px dashed transparent;
      border:1px solid #ccc !important;
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
	
	  .alert-primary.alert-bordered {
			color: #15267c;
			background-color: #d4dbfc;
			border-color: #2949ef;
		}
		
	  .alert-dark.alert-bordered {
			color: #1b1e21;
			background-color: #f0f1f2;
			border-color: #343a40;
		}
		.faq-tabs .nav-link.active i {
			color: #fff !important;
		}
		.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
			color: #15267c;
			background-color: #d4dbfc;
			border-color: #2949ef;
		}
		.modal-header {
			background: rgb(2,0,36);
			background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(34,1,50,1) 35%, rgba(124,26,181,1) 100%);
			color: #fff;
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
					<h5 class="box-title" style="color:#fff;text-transform:uppercase">Choose Pickup For Delivery Location</h5>
					<!-- <div class="card-actions"><a class="card-collapse" style="color:#fff;"><i class="ti-angle-down"></i></a></div> -->
				</div>
				<div class="card-body">
                    <form class="circle-steps wizard clearfix" id="form-wizard" action="javascript:;" novalidate="novalidate" role="application">
                      <div class="steps clearfix">
                        <ul role="tablist">
                          <li role="tab" class=" disabled" aria-disabled="false" aria-selected="true">
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
                          <li role="tab" class="disabled last" aria-disabled="true">
                            <a id="form-wizard-t-3" href="addons.php" aria-controls="form-wizard-p-3">
                              <span class="step-number">4
                              </span> Step 4
                            </a>
                          </li>
                          <li role="tab" class="first current" aria-disabled="true">
                            <a id="form-wizard-t-4" href="pickup_delivery.php" aria-controls="form-wizard-p-4">
                              <span class="step-number">5
                              </span> Step 5
                            </a>
                          </li>
                          <li role="tab" class=" disabled last" aria-disabled="true">
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
                    <button class="btn btn-primary clr" type="button" style="float:right" data-toggle="modal" data-target="#exampleLargeModaladd">Add Location
                    </button>
                    <h5 class="box-title text-primary">
                    </h5>
                    <ul class="row nav nav-pills  mb-5">
                      <li class="nav-item col-lg-6 pt-3">
                        <a class="nav-link show alert alert-primary alert-bordered active" data-toggle="pill" href="#faq-group-1" role="tab" aria-selected="false" >
							<button class="btn btn-success pull-right " data-toggle="modal" data-target="#exampleLargeModal" style="height:30px;width:30px;"><span class="btn-icon" style="margin-left:-7px;"><i class="ti-pencil"></i></span></button>
							<button class="btn btn-warning pull-right " style="height:30px;width:30px;margin-right:5px;"><span class="btn-icon" style="margin-left:-9px;color:#fff;"><i class="ti-trash"></i></span></button>
							<h5 class="mb-4 articles-list-title d-flex">Store 1
							</h5>
							 <p class=" d-flex align-items-left" href="#">
                              <b>Biltmore Hotel And Suites Santa Clara Hotel
                              </b>
                            </p>
							<p class="d-flex  align-items-left" href="#">
                              2151 Laurewood Road
                            </p>
							 <p class=" d-flex align-items-center" href="#">
                              Santa Clara,CA 95054-2754
                            </p>
							<p class=" d-flex align-items-center" href="#">
                              United States
                            </p>
							 <p class=" d-flex align-items-center" href="#">
                              Phone: 4089887456
                            </p>
                        </a>
                      </li>
					  <li class="nav-item col-lg-6 pt-3">
                        <a class="nav-link alert alert-dark alert-bordered" data-toggle="pill" href="#faq-group-1" role="tab" aria-selected="false">
							<button class="btn btn-success pull-right " data-toggle="modal" data-target="#exampleLargeModal" style="height:30px;width:30px;"><span class="btn-icon" style="margin-left:-7px;"><i class="ti-pencil"></i></span></button>
							<button class="btn btn-warning pull-right " style="height:30px;width:30px;margin-right:5px;"><span class="btn-icon" style="margin-left:-9px;color:#fff;"><i class="ti-trash"></i></span></button>
							<h5 class="mb-4 articles-list-title d-flex">Store 2
							</h5>
							 <p class=" d-flex align-items-left" href="#">
                              <b>Biltmore Hotel And Suites Santa Clara Hotel
                              </b>
                            </p>
							<p class="d-flex  align-items-left" href="#">
                              2151 Laurewood Road
                            </p>
							 <p class=" d-flex align-items-center" href="#">
                              Santa Clara,CA 95054-2754
                            </p>
							<p class=" d-flex align-items-center" href="#">
                              United States
                            </p>
							 <p class=" d-flex align-items-center" href="#">
                              Phone: 4089887456
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
	 <div class="modal fade" id="exampleLargeModal" tabindex="-1" role="dialog" aria-labelledby="exampleLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title h4" id="exampleLargeModalLabel">Edit Location</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><i class="fas fa-times" style="font-size:15px;color:#fff;"></i></button>
				</div>
				<div class="modal-body">
					<div class=" card-fullheight">
						<div class="card-body">
							<form>
								<div class="row">
									<div class="col-md-8">
										<div class="form-group mb-4 row">
											<dt class="col-sm-4" style="padding-top:10px;">Store Name</dt>
											<div class="col-sm-8">
												<input class="form-control form-control-solid" type="text" placeholder="Enter Store Name">
											</div>
										</div>
										<div class="form-group mb-4 row">
											<dt class="col-sm-4" style="padding-top:10px;">Address</dt>
											<div class="col-sm-8">
												<textarea class="form-control form-control-solid" rows="3" required=""></textarea>
											</div>
										</div>
										<div class="form-group mb-4 row">
											<dt class="col-sm-4" style="padding-top:10px;">Phone Number</dt>
											<div class="col-sm-8">
												<input class="form-control form-control-solid" type="number" placeholder="Enter Your Phone Number">
											</div>
										</div>
										
									</div>
									<div class="col-md-4">
										<ul class="timeline timeline-default">
											<li class="timeline-item">2 Issue fixed<span class="font-13 text-muted ml-2">Just now</span></li>
											<li class="timeline-item"><span>15 New orders<span class="badge badge-primary badge-pill ml-2">important</span></span><span class="font-13 text-muted ml-2">5 mins</span></li>
											<li class="timeline-item">18 new orders sent<span class="font-13 text-muted ml-2">24 mins</span></li>
										</ul>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<div class="form-group">
						<button class="btn btn-primary clr" style="float:left;margin-right:10px;" type="button"> Launch </button>
						<button class="btn btn-default" type="reset"> Clear </button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="exampleLargeModaladd" tabindex="-1" role="dialog" aria-labelledby="exampleLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title h4" id="exampleLargeModalLabel">Add Location</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><i class="fas fa-times" style="font-size:15px;color:#fff;"></i></button>
				</div>
				<div class="modal-body">
					<div class=" card-fullheight">
						<div class="card-body">
							<form>
								<div class="row">
									<div class="col-md-8">
										<div class="form-group mb-4 row">
											<dt class="col-sm-4" style="padding-top:10px;">Store Name</dt>
											<div class="col-sm-8">
												<input class="form-control form-control-solid" type="text" placeholder="Enter Store Name">
											</div>
										</div>
										<div class="form-group mb-4 row">
											<dt class="col-sm-4" style="padding-top:10px;">Address</dt>
											<div class="col-sm-8">
												<textarea class="form-control form-control-solid" rows="3" required=""></textarea>
											</div>
										</div>
										<div class="form-group mb-4 row">
											<dt class="col-sm-4" style="padding-top:10px;">Phone Number</dt>
											<div class="col-sm-8">
												<input class="form-control form-control-solid" type="number" placeholder="Enter Your Phone Number">
											</div>
										</div>
										
									</div>
									<div class="col-md-4">
										<ul class="timeline timeline-default">
											<li class="timeline-item">2 Issue fixed<span class="font-13 text-muted ml-2">Just now</span></li>
											<li class="timeline-item"><span>15 New orders<span class="badge badge-primary badge-pill ml-2">important</span></span><span class="font-13 text-muted ml-2">5 mins</span></li>
											<li class="timeline-item">18 new orders sent<span class="font-13 text-muted ml-2">24 mins</span></li>
										</ul>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<div class="form-group">
						<button class="btn btn-primary clr" style="float:left;margin-right:10px;" type="button"> Launch </button>
						<button class="btn btn-default" type="reset"> Clear </button>
					</div>
				</div>
			</div>
		</div>
	</div>
    <?php
		include("common/scripts.php");
	?>
    <script src="js/vendor-js/jquery.validate.min.js"></script>
    <script src="js/vendor-js/jquery.steps.min.js"></script>
    <script>
      function trigger_one(val){
        if(val == 'first'){
          $("#type_1").show();
          $("#type_2").hide();
        }
        else if(val == 'second'){
          $("#type_1").hide();
          $("#type_2").show();
        }
      }
    </script>
  </body>
</html>
