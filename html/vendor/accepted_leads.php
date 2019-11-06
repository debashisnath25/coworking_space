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
                    
                    
                    <div class="col-lg-12">
						<!--<div class="alert alert-success has-icon" role="alert"><i class="la la-check alert-icon"></i> Success!</div>
						<div class="alert alert-danger has-icon" role="alert"><i class="la la-info-circle alert-icon"></i> Failed!</div>-->

						
							
							<form>
							<div class="card-body">
								<div class="table-responsive">
                                    <table class="table table-bordered table-striped w-100" id="dt-buttons">
                                        <thead class="">
                                            <tr>
                                                <th style="min-width:200px;">Scheme Name</th>
                                                <th style="min-width:100px;">Coupon Code</th>
												<th>Category</th>
                                                <th style="min-width:100px;">Sub Category</th>
                                                <th>Discount</th>
												<th style="min-width:110px;">Applicable For</th>
                                                <th style="min-width:80px;">Start Time<!-- &nbsp;&nbsp;<a href="#" data-toggle="tooltip" title="Start Date & Time"><i style="font-size:12px;" class="fa fa-info-circle"></i></a> --></th>
												<th style="min-width:80px;">End Time<!-- &nbsp;&nbsp;<a href="#" data-toggle="tooltip" title="End Date & Time"><i style="font-size:12px;" class="fa fa-info-circle"></i></a> --></th>
                                                <th style="min-width:100px;">Total Sales<!-- &nbsp;&nbsp;<a href="#" data-toggle="tooltip" title="Total Sales After Launch in Rs."><i style="font-size:12px;" class="fa fa-info-circle"></i></a> --></th>
												<th style="min-width:100px;">Coupon Used<!-- &nbsp;&nbsp;<a href="#" data-toggle="tooltip" title="No. of Times Coupon has been successfully used"><i style="font-size:12px;" class="fa fa-info-circle"></i></a> --></th>
												<th style="min-width:100px;">Item Sold<!-- &nbsp;&nbsp;<a href="#" data-toggle="tooltip" title="No. of Items Sold Using Coupon"><i style="font-size:12px;" class="fa fa-info-circle"></i></a> --></th>
												<th>Reports<!-- &nbsp;&nbsp;<a href="#" data-toggle="tooltip" title="Download Report in CSV Format/PDF"><i style="font-size:12px;" class="fa fa-info-circle"></i></a> --></th>
												<th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Christmas Specials</td>
                                                <td>BEAUTY10XX</td>
												<td><a href="coupon_details.php" class="btn btn-vk btn-sm" type="button">New Arrivals</a></td>
												<td>Shirts</td>
                                                <td>99</td>
												<td>Everyone</td>
                                                <td>27/09/2019 : 4:15 PM</td>
												<td>01/02/2019 : 7:00 PM </td>
                                                <td>Rs. 15,00,000.00</td>
												<td>43</td>
												<td>437</td>
												<td><button class="btn btn-ok btn-sm" type="button">Download Report</button></td>
												<td>
													<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span></label>
												</td>
                                            </tr>
											<tr>
                                                <td>Christmas Specials</td>
                                                <td>BEAUTY10XX</td>
												<td><a href="coupon_details.php" class="btn btn-vk btn-sm" type="button">New Arrivals</a></td>
												<td>Shirts</td>
                                                <td>99</td>
												<td>Everyone</td>
                                                <td>27/09/2019 : 4:15 PM</td>
												<td>01/02/2019 : 7:00 PM </td>
                                                <td>Rs. 15,00,000.00</td>
												<td>43</td>
												<td>437</td>
												<td><button class="btn btn-ok btn-sm" type="button">Download Report</button></td>
												<td>
													<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span></label>
												</td>
                                            </tr>
											<tr>
                                                <td>Christmas Specials</td>
                                                <td>BEAUTY10XX</td>
												<td><a href="coupon_details.php" class="btn btn-vk btn-sm" type="button">New Arrivals</a></td>
												<td>Shirts</td>
                                                <td>99</td>
												<td>Everyone</td>
                                                <td>27/09/2019 : 4:15 PM</td>
												<td>01/02/2019 : 7:00 PM </td>
                                                <td>Rs. 15,00,000.00</td>
												<td>43</td>
												<td>437</td>
												<td><button class="btn btn-ok btn-sm" type="button">Download Report</button></td>
												<td>
													<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span></label>
												</td>
                                            </tr>
											<tr>
                                                <td>Christmas Specials</td>
                                                <td>BEAUTY10XX</td>
												<td><a href="coupon_details.php" class="btn btn-vk btn-sm" type="button">New Arrivals</a></td>
												<td>Shirts</td>
                                                <td>99</td>
												<td>Everyone</td>
                                                <td>27/09/2019 : 4:15 PM</td>
												<td>01/02/2019 : 7:00 PM </td>
                                                <td>Rs. 15,00,000.00</td>
												<td>43</td>
												<td>437</td>
												<td><button class="btn btn-ok btn-sm" type="button">Download Report</button></td>
												<td>
													<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span></label>
												</td>
                                            </tr>

											<tr>
                                                <td>Christmas Specials</td>
                                                <td>BEAUTY10XX</td>
												<td><a href="coupon_details.php" class="btn btn-vk btn-sm" type="button">New Arrivals</a></td>
												<td>Shirts</td>
                                                <td>99</td>
												<td>Everyone</td>
                                                <td>27/09/2019 : 4:15 PM</td>
												<td>01/02/2019 : 7:00 PM </td>
                                                <td>Rs. 15,00,000.00</td>
												<td>43</td>
												<td>437</td>
												<td><button class="btn btn-ok btn-sm" type="button">Download Report</button></td>
												<td>
													<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span></label>
												</td>
                                            </tr>

											<tr>
                                                <td>Christmas Specials</td>
                                                <td>BEAUTY10XX</td>
												<td><a href="coupon_details.php" class="btn btn-vk btn-sm" type="button">New Arrivals</a></td>
												<td>Shirts</td>
                                                <td>99</td>
												<td>Everyone</td>
                                                <td>27/09/2019 : 4:15 PM</td>
												<td>01/02/2019 : 7:00 PM </td>
                                                <td>Rs. 15,00,000.00</td>
												<td>43</td>
												<td>437</td>
												<td><button class="btn btn-ok btn-sm" type="button">Download Report</button></td>
												<td>
													<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span></label>
												</td>
                                            </tr>

											<tr>
                                                <td>Christmas Specials</td>
                                                <td>BEAUTY10XX</td>
												<td><a href="coupon_details.php" class="btn btn-vk btn-sm" type="button">New Arrivals</a></td>
												<td>Shirts</td>
                                                <td>99</td>
												<td>Everyone</td>
                                                <td>27/09/2019 : 4:15 PM</td>
												<td>01/02/2019 : 7:00 PM </td>
                                                <td>Rs. 15,00,000.00</td>
												<td>43</td>
												<td>437</td>
												<td><button class="btn btn-ok btn-sm" type="button">Download Report</button></td>
												<td>
													<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span></label>
												</td>
                                            </tr>
											<tr>
                                                <td>Christmas Specials</td>
                                                <td>BEAUTY10XX</td>
												<td><a href="coupon_details.php" class="btn btn-vk btn-sm" type="button">New Arrivals</a></td>
												<td>Shirts</td>
                                                <td>99</td>
												<td>Everyone</td>
                                                <td>27/09/2019 : 4:15 PM</td>
												<td>01/02/2019 : 7:00 PM </td>
                                                <td>Rs. 15,00,000.00</td>
												<td>43</td>
												<td>437</td>
												<td><button class="btn btn-ok btn-sm" type="button">Download Report</button></td>
												<td>
													<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span></label>
												</td>
                                            </tr>
											<tr>
                                                <td>Christmas Specials</td>
                                                <td>BEAUTY10XX</td>
												<td><a href="coupon_details.php" class="btn btn-vk btn-sm" type="button">New Arrivals</a></td>
												<td>Shirts</td>
                                                <td>99</td>
												<td>Everyone</td>
                                                <td>27/09/2019 : 4:15 PM</td>
												<td>01/02/2019 : 7:00 PM </td>
                                                <td>Rs. 15,00,000.00</td>
												<td>43</td>
												<td>437</td>
												<td><button class="btn btn-ok btn-sm" type="button">Download Report</button></td>
												<td>
													<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span></label>
												</td>
                                            </tr>
											<tr>
                                                <td>Christmas Specials</td>
                                                <td>BEAUTY10XX</td>
												<td><a href="coupon_details.php" class="btn btn-vk btn-sm" type="button">New Arrivals</a></td>
												<td>Shirts</td>
                                                <td>99</td>
												<td>Everyone</td>
                                                <td>27/09/2019 : 4:15 PM</td>
												<td>01/02/2019 : 7:00 PM </td>
                                                <td>Rs. 15,00,000.00</td>
												<td>43</td>
												<td>437</td>
												<td><button class="btn btn-ok btn-sm" type="button">Download Report</button></td>
												<td>
													<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span></label>
												</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
								<button class="btn btn-primary clr" style="float:right;" type="button"> Next </button>
								
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
		include("common/scripts.php");
	?>
   
    <script src="js/vendor-js/jquery.validate.min.js">
    </script>
    <script src="js/vendor-js/jquery.steps.min.js">
    </script>
  </body>
</html>
