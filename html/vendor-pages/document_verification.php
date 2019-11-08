<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title>Document Verification | Wanted 7</title>
    <?php
		include("common/metalinks.php");
	?>
	<link href="css/vendor-css/dropzone.min.css" rel="stylesheet" />
 
    <link href="css/vendor-css/app-sidebar-light.min.css" rel="stylesheet" />
    <link href="css/vendor-css/form-wizard.css" rel="stylesheet" />
   
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
      border: 1px dashed transparent;
   
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
			border-color:#7c1ab5;
		
			background-color: #fff;
		}
		.faq-tabs .nav-link.active i {
			color: #fff !important;
		}
	.dz-error-message {
	 	display:none !important;
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
						<h5 class="box-title" style="color:#fff;">PLEASE CHOOSE YOUR STORE INFORMATION</h5>
						<!-- <div class="card-actions"><a class="card-collapse" style="color:#fff;"><i class="ti-angle-down"></i></a></div> -->
					</div>
				    <div class="card-body ">
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
                          <li role="tab" class="first current" aria-disabled="true">
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
                      <li class="nav-item col-lg-4 col-xs-12" onclick="trigger_one('first');">
                        <a class="nav-link active show" style="background:#f0f0f0;" data-toggle="pill" href="#faq-group-1" role="tab" aria-selected="true">
                          <img alt="Avatar" width="100" height="100" src="images/4.png">
                          <h5 class="mb-3 mt-4" style="font-size:17px;">Individual/Propriertorship
                          </h5>
                         
                        </a>
                      </li>
                      <li class="nav-item col-lg-4 col-xs-12" onclick="trigger_one('second');">
                        <a class="nav-link" style="background:#f0f0f0;" data-toggle="pill" href="#faq-group-2" role="tab" aria-selected="false">
                          <img alt="Avatar" width="100" height="100" src="images/5.png">
                          <h5 class="mb-3 mt-4" style="font-size:17px;">Partnership/LLP
                          </h5>
                        </a>
                      </li>
					  <li class="nav-item col-lg-4 col-xs-12" onclick="trigger_one('third');">
                        <a class="nav-link" style="background:#f0f0f0;" data-toggle="pill" href="#faq-group-2" role="tab" aria-selected="false">
                          <img alt="Avatar" width="100" height="100" src="images/6.png">
                          <h5 class="mb-3 mt-4" style="font-size:17px;">Private Limited
                          </h5>
                        </a>
                      </li>
                    </ul>
                  </div>
				  <div id="type_1">
					<div class=" card-fullheight">
						<div class="card-body" >
							<h5 class="box-title text-primary">Tax Information</h5>
							<div>
							<form action="" class="">
								<div class="form-group mb-3">
									<label style="text-transform:uppercase;">GST Registation Number
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="input-group-icon "><input class="form-control form-control-solid" type="text" placeholder="Enter GST Registration Number"></div>
								</div>
								<div class="form-group mb-3">
									<label style="text-transform:uppercase;">Scanned Copy of GST Certificate
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="dropzone dz-clickable" id="mydropzoneSingle" >
                                    <!-- Custom content which overrides the default block text.	You can delete this block-->
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-20">Drop files here or click to upload.</div>
											<div class="text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label style="text-transform:uppercase;">PAN Number
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="input-group-icon "><input class="form-control form-control-solid" type="text" placeholder="Enter PAN Number"></div>
								</div>
								<div class="form-group mb-3">
									<label style="text-transform:uppercase;">Scanned Copy of PAN Certificate
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="dropzone dz-clickable" id="mydropzoneSingle" >
                                    <!-- Custom content which overrides the default block text.	You can delete this block-->
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-20">Drop files here or click to upload.</div>
											<div class="text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</div>
										</div>
									</div>
								</div>
								
							</div>
							<h5 class="box-title text-primary "  style="padding-top:30px;">Legal Information</h5>
							<div>
								<div class="form-group mb-3">
									<label style="text-transform:uppercase;">AADHAR CARD NUMBER of Proprietor/Individual
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="input-group-icon "><input class="form-control form-control-solid" type="text" placeholder="Enter Aadhar Number"></div>
								</div>
								<div class="form-group mb-3">
									<label style="text-transform:uppercase;">Scanned Copy of Aadhar Card
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="dropzone dz-clickable" id="mydropzoneSingle" >
                                    <!-- Custom content which overrides the default block text.	You can delete this block-->
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-20">Drop files here or click to upload.</div>
											<div class="text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label style="text-transform:uppercase;">Aadhar Card Number of Proprietor/Individual
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="input-group-icon "><input class="form-control form-control-solid" type="text" placeholder="Enter Aadhar Number"></div>
								</div>
								<div class="form-group mb-3">
									<label style="text-transform:uppercase;">Telephone/Electricity Bill pertaining to Proprietor
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="dropzone dz-clickable" id="mydropzoneSingle" >
                                    <!-- Custom content which overrides the default block text.	You can delete this block-->
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-20">Drop files here or click to upload.</div>
											<div class="text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label style="text-transform:uppercase;">License of Lease Agreement Showing Premises belong to Proprietor/Shop Owner/Registered Business
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="dropzone dz-clickable" id="mydropzoneSingle" >
                                    <!-- Custom content which overrides the default block text.	You can delete this block-->
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-20">Drop files here or click to upload.</div>
											<div class="text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</div>
										</div>
									</div>
								</div>
							</div>
							<h5 class="box-title text-primary" style="padding-top:30px;">Banking Information</h5>
							<div>
								<div class="form-group mb-3">
									<label>Bank Account Number
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="input-group-icon "><input class="form-control form-control-solid" type="text" placeholder="Enter Bank Account Number"></div>
								</div>
								<div class="form-group mb-3">
									<label>Scanned Copy of Cancelled Cheque
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="dropzone dz-clickable" id="mydropzoneSingle" >
                                    <!-- Custom content which overrides the default block text.	You can delete this block-->
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-20">Drop files here or click to upload.</div>
											<div class="text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label>Scanned Copy of Last 3 Months Bank Statement
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="dropzone dz-clickable" id="mydropzoneSingle" >
                                    <!-- Custom content which overrides the default block text.	You can delete this block-->
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-20">Drop files here or click to upload.</div>
											<div class="text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3"><label>LEAVE YOUR COMMENTS OR QUESTIONS HERE&nbsp;<a href="#" data-toggle="tooltip" title="This Address will be used for pickup of goods from you.If your pickup address is different don't worry, you can change it in the Dashboard later."><i style="font-size:12px;" class="fa fa-info-circle"></i><span class="req">&nbsp;*</span></a>
								</label>
									<div class="input-group">
										<textarea class="form-control form-control-solid" aria-label="With textarea"></textarea>
                                    </div>
								</div>
							</div>
							</form>
						</div>
						<div class="card-footer">
							<div class="form-group">
								<button class="btn btn-primary" style="float:left;margin-right:10px;" type="button"> Update </button>
								<button class="btn btn-default" type="reset"> Clear </button>
							</div>
					</div>
					</div>
				  </div>
				  <div id="type_2" style="display:none;">
					<div class=" card-fullheight">
						<div class="card-body" >
							<h5 class="box-title text-primary">Tax Information</h5>
							<div>
								<div class="form-group mb-3">
									<label style="text-transform:uppercase;">GST Registation Number
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="input-group-icon "><input class="form-control form-control-solid" type="text" placeholder="Enter GST Registration Number"></div>
								</div>
								<div class="form-group mb-3">
									<label style="text-transform:uppercase;">Scanned Copy of GST Certificate
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									
									<div class="dropzone dz-clickable" id="mydropzoneSingle" >
                                    <!-- Custom content which overrides the default block text.	You can delete this block-->
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-20">Drop files here or click to upload.</div>
											<div class="text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label style="text-transform:uppercase;">PAN Number
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="input-group-icon "><input class="form-control form-control-solid" type="text" placeholder="Enter PAN Number"></div>
								</div>
								<div class="form-group mb-3">
									<label style="text-transform:uppercase;">Scanned Copy of PAN Certificate
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="dropzone dz-clickable" id="mydropzoneSingle" >
                                    <!-- Custom content which overrides the default block text.	You can delete this block-->
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-20">Drop files here or click to upload.</div>
											<div class="text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label style="text-transform:uppercase;">Scanned Copy of Partnership Deed
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="dropzone dz-clickable" id="mydropzoneSingle" >
                                    <!-- Custom content which overrides the default block text.	You can delete this block-->
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-20">Drop files here or click to upload.</div>
											<div class="text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</div>
										</div>
									</div>
								</div>
								
							</div>
							<h5 class="box-title text-primary "  style="padding-top:30px;">Legal Information</h5>
							<div>
								
								<div class="form-group mb-3">
									<label style="text-transform:uppercase;">Power Of Attorney granted to a partner or an employee of the firm to transact the business
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="dropzone dz-clickable" id="mydropzoneSingle" >
                                    <!-- Custom content which overrides the default block text.	You can delete this block-->
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-20">Drop files here or click to upload.</div>
											<div class="text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</div>
										</div>
									</div>
								</div>
							
								<div class="form-group mb-3">
									<label style="text-transform:uppercase;">Document Validating the address of the partners and the person holding Power Of Attorney (Eg: Aadhar Card)
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="dropzone dz-clickable" id="mydropzoneSingle" >
                                    <!-- Custom content which overrides the default block text.	You can delete this block-->
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-20">Drop files here or click to upload.</div>
											<div class="text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label style="text-transform:uppercase;">Lease or Rental Agreement
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="dropzone dz-clickable" id="mydropzoneSingle" >
                                    <!-- Custom content which overrides the default block text.	You can delete this block-->
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-20">Drop files here or click to upload.</div>
											<div class="text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label style="text-transform:uppercase;">License Agreement
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="dropzone dz-clickable" id="mydropzoneSingle" >
                                    <!-- Custom content which overrides the default block text.	You can delete this block-->
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-20">Drop files here or click to upload.</div>
											<div class="text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label style="text-transform:uppercase;">Firm Partner's Electricity Bill/Telephone Bill
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="dropzone dz-clickable" id="mydropzoneSingle" >
                                    <!-- Custom content which overrides the default block text.	You can delete this block-->
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-20">Drop files here or click to upload.</div>
											<div class="text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</div>
										</div>
									</div>
								</div>
							</div>
							<h5 class="box-title text-primary" style="padding-top:30px;">Banking Information</h5>
							<div>
								<div class="form-group mb-3">
									<label>Bank Account Number
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="input-group-icon "><input class="form-control form-control-solid" type="text" placeholder="Enter Bank Account Number"></div>
								</div>
								<div class="form-group mb-3">
									<label>Scanned Copy of Cancelled Cheque
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="dropzone dz-clickable" id="mydropzoneSingle" >
                                    <!-- Custom content which overrides the default block text.	You can delete this block-->
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-20">Drop files here or click to upload.</div>
											<div class="text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label>Scanned Copy of Last 3 Months Bank Statement
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="dropzone dz-clickable" id="mydropzoneSingle" >
                                    <!-- Custom content which overrides the default block text.	You can delete this block-->
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-20">Drop files here or click to upload.</div>
											<div class="text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3"><label>LEAVE YOUR COMMENTS OR QUESTIONS HERE&nbsp;<a href="#" data-toggle="tooltip" title="This Address will be used for pickup of goods from you.If your pickup address is different don't worry, you can change it in the Dashboard later."><i style="font-size:12px;" class="fa fa-info-circle"></i><span class="req">&nbsp;*</span></a>
								</label>
									<div class="input-group">
										<textarea class="form-control form-control-solid" aria-label="With textarea"></textarea>
                                    </div>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="form-group">
								<button class="btn btn-primary" style="float:left;margin-right:10px;" type="button"> Update </button>
								<button class="btn btn-default" type="reset"> Clear </button>
							</div>
					</div>
					</div>
				</div>
				  <div id="type_3" style="display:none;">
					<div class=" card-fullheight">
						<div class="card-body" >
							<h5 class="box-title text-primary">Tax Information</h5>
							<div>
								<div class="form-group mb-3">
									<label style="text-transform:uppercase;">GST Registation Number
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="input-group-icon "><input class="form-control form-control-solid" type="text" placeholder="Enter GST Registration Number"></div>
								</div>
								<div class="form-group mb-3">
									<label style="text-transform:uppercase;">Scanned Copy of GST Certificate
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									
									<div class="dropzone dz-clickable" id="mydropzoneSingle" >
                                    <!-- Custom content which overrides the default block text.	You can delete this block-->
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-20">Drop files here or click to upload.</div>
											<div class="text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label style="text-transform:uppercase;">PAN Number
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="input-group-icon "><input class="form-control form-control-solid" type="text" placeholder="Enter PAN Number"></div>
								</div>
								<div class="form-group mb-3">
									<label style="text-transform:uppercase;">Scanned Copy of PAN Certificate
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="dropzone dz-clickable" id="mydropzoneSingle" >
                                    <!-- Custom content which overrides the default block text.	You can delete this block-->
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-20">Drop files here or click to upload.</div>
											<div class="text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</div>
										</div>
									</div>
								</div>
								
							</div>
							<h5 class="box-title text-primary "  style="padding-top:30px;">Legal Information</h5>
							<div>
								<div class="form-group mb-3">
									<label style="text-transform:uppercase;">Scanned Copy of Certificate of Incorporation
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="dropzone dz-clickable" id="mydropzoneSingle" >
                                    <!-- Custom content which overrides the default block text.	You can delete this block-->
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-20">Drop files here or click to upload.</div>
											<div class="text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</div>
										</div>
									</div>
								</div>
							
								<div class="form-group mb-3">
									<label style="text-transform:uppercase;">Scanned Copy of Memorandum of Association
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="dropzone dz-clickable" id="mydropzoneSingle" >
                                    <!-- Custom content which overrides the default block text.	You can delete this block-->
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-20">Drop files here or click to upload.</div>
											<div class="text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label style="text-transform:uppercase;">Scanned Copy of Company's Telephone/Electricity Bill
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="dropzone dz-clickable" id="mydropzoneSingle" >
                                    <!-- Custom content which overrides the default block text.	You can delete this block-->
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-20">Drop files here or click to upload.</div>
											<div class="text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label style="text-transform:uppercase;">Lease or Rental Agreement
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="dropzone dz-clickable" id="mydropzoneSingle" >
                                    <!-- Custom content which overrides the default block text.	You can delete this block-->
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-20">Drop files here or click to upload.</div>
											<div class="text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</div>
										</div>
									</div>
								</div>
							</div>
							<h5 class="box-title text-primary" style="padding-top:30px;">Banking Information</h5>
							<div>
								<div class="form-group mb-3">
									<label>Bank Account Number
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="input-group-icon "><input class="form-control form-control-solid" type="text" placeholder="Enter Bank Account Number"></div>
								</div>
								<div class="form-group mb-3">
									<label>Scanned Copy of Cancelled Cheque
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="dropzone dz-clickable" id="mydropzoneSingle" >
                                    <!-- Custom content which overrides the default block text.	You can delete this block-->
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-20">Drop files here or click to upload.</div>
											<div class="text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label>Scanned Copy of Last 3 Months Bank Statement
										<a href="#" data-toggle="tooltip" title="Some information regarding this form-fields"><i style="font-size:12px;" class="fa fa-info-circle"></i></a>
									</label>
									<div class="dropzone dz-clickable" id="mydropzoneSingle" >
                                    <!-- Custom content which overrides the default block text.	You can delete this block-->
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-20">Drop files here or click to upload.</div>
											<div class="text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</div>
										</div>
									</div>
								</div>
								<div class="form-group mb-3"><label>LEAVE YOUR COMMENTS OR QUESTIONS HERE&nbsp;<a href="#" data-toggle="tooltip" title="This Address will be used for pickup of goods from you.If your pickup address is different don't worry, you can change it in the Dashboard later."><i style="font-size:12px;" class="fa fa-info-circle"></i><span class="req">&nbsp;*</span></a>
								</label>
									<div class="input-group">
										<textarea class="form-control form-control-solid" aria-label="With textarea"></textarea>
                                    </div>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="form-group">
								<button class="btn btn-primary" style="float:left;margin-right:10px;" type="button"> Update </button>
								<button class="btn btn-default" type="reset"> Clear </button>
							</div>
					</div>
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
    <script src="js/vendor-js/jquery.validate.min.js"></script>
    <script src="js/vendor-js/jquery.steps.min.js"></script>
	<script src="js/vendor-js/dropzone.min.js"></script>
	<script>
	function trigger_one(val){
		if(val == 'first'){
			$("#type_1").show();
			$("#type_2").hide();
			$("#type_3").hide();
		}
		else if(val == 'second'){
			$("#type_1").hide();
			$("#type_2").show();
			$("#type_3").hide();
		}
		else if(val == 'third'){
			$("#type_1").hide();
			$("#type_2").hide();
			$("#type_3").show();
		}
	}

	$("div#mydropzoneSingle").dropzone({
		url: "./",
		maxFiles: 1,
		maxFilesize: 5, // MB
		addRemoveLinks: !0,
	});
    </script>
  </body>
</html>
