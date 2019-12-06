<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title>Contact Information | Bundesk</title>
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
			  	<h1 class="page-title page-title-sep">Contact Information</h1>
              </div>
            </div>
            <!-- BEGIN: Page content-->
            <div>
             <div class="row">
                <?php include ('common/product_header.php');?>
                <div class="col-md-12 col-xs-12 ">
                <div class="card card-fullheight" style="border:1px solid #7c1ab5">
					<div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">Contact Information</h5>
						<!-- <div class="card-actions"><a class="card-collapse" style="color:#fff;"><i class="ti-angle-down"></i></a></div> -->
					</div>
				  
                  <div class="card-body">
                    
                    
                    <div class="col-lg-12">
						<!--<div class="alert alert-success has-icon" role="alert"><i class="la la-check alert-icon"></i> Success!</div>
						<div class="alert alert-danger has-icon" role="alert"><i class="la la-info-circle alert-icon"></i> Failed!</div>-->

						
							
							<form>
							<div class="card-body">
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">Phone No.</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter Phone No." required="">
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">Email Id</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter Email Id" required="">
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">State</dt>
									<div class="col-sm-8">
										<select class=" form-control form-control-solid">
											<option disabled selected>Select State</option>
											<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
											<option value="Andhra Pradesh">Andhra Pradesh</option>
											<option value="Arunachal Pradesh">Arunachal Pradesh</option>
											<option value="Assam">Assam</option>
											<option value="Bihar">Bihar</option>
											<option value="Chandigarh">Chandigarh</option>
											<option value="Chhattisgarh">Chhattisgarh</option>
											<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
											<option value="Daman and Diu">Daman and Diu</option>
											<option value="Delhi">Delhi</option>
											<option value="Goa">Goa</option>
											<option value="Gujarat">Gujarat</option>
											<option value="Haryana">Haryana</option>
											<option value="Himachal Pradesh">Himachal Pradesh</option>
											<option value="Jammu and Kashmir">Jammu and Kashmir</option>
											<option value="Jharkhand">Jharkhand</option>
											<option value="Karnataka">Karnataka</option>
											<option value="Kerala">Kerala</option>
											<option value="Lakshadweep">Lakshadweep</option>
											<option value="Madhya Pradesh">Madhya Pradesh</option>
											<option value="Maharashtra">Maharashtra</option>
											<option value="Manipur">Manipur</option>
											<option value="Meghalaya">Meghalaya</option>
											<option value="Mizoram">Mizoram</option>
											<option value="Nagaland">Nagaland</option>
											<option value="Orissa">Orissa</option>
											<option value="Pondicherry">Pondicherry</option>
											<option value="Punjab">Punjab</option>
											<option value="Rajasthan">Rajasthan</option>
											<option value="Sikkim">Sikkim</option>
											<option value="Tamil Nadu">Tamil Nadu</option>
											<option value="Tripura">Tripura</option>
											<option value="Uttaranchal">Uttaranchal</option>
											<option value="Uttar Pradesh">Uttar Pradesh</option>
											<option value="West Bengal">West Bengal</option>
										</select>
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">City</dt>
									<div class="col-sm-8">
										<select class=" form-control form-control-solid">
											<option disabled selected>Select city</option>
											<option>Ahmedabad</option>
											<option>Bengaluru</option>
											<option>Chandigarh</option>
											<option>Chennai</option>
											<option>Coimbatore</option>
											<option>Delhi</option>
											<option>Goa</option>
											<option>Gurugram</option>
											<option>Hyderabad</option>
											<option>Indore</option>
											<option>Jaipur</option>
											<option>Kochi</option>
											<option>Kolkata</option>
											<option>Manila</option>
											<option>Mumbai</option>
											<option>Nagpur</option>
											<option>Noida</option>
											<option>Pune</option>
										</select>
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">Country</dt>
									<div class="col-sm-8">
										<select class=" form-control form-control-solid">
											<option disabled selected>India</option>
										</select>
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">Full Adddress</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter Full Adddress" required="">
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">Landmark</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter Landmark" required="">
									</div>
								</div>
								<a class="btn btn-warning btn-cons" style="color: white;float:left;" href="step3.php">BACK</a>
								<a class="btn btn-success btn-cons" style="color: white;float:right;" href="step5.php">NEXT</a>
								
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
