<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/favicon.png' type='image/x-icon'/ >
    <title>Coupon | Wanted 7
    </title>
    <?php
		include("common/metalinks.php");
	?>
	<link href="css/vendor-css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="css/vendor-css/datatables.min.css" rel="stylesheet" />
    <style>
	  .dt-buttons {
	  	padding-bottom:15px;
		margin-bottom:-50px;
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
            <div>
			  <div class="col-lg-12">
				<div class="card" style="border:1px solid #7c1ab5">
					<div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">Start a Coupon Code Based Discount Scheme for your Customers</h5>
						<div class="card-actions"><a class="card-collapse"><i class="ti-angle-down"></i></a></div>
					</div>
					<div class="card-body">
						<form class="needs-validation" novalidate="">
							<!-- original form -->
							<div class="row">
								<div class="col-md-7">
									<div class="form-group mb-4 row">
										<dt class="col-sm-4" style="padding-top:10px;">Coupon Scheme Name</dt>
										<div class="col-sm-8">
											<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter Coupon Scheme Name" required="">
										</div>
									</div>
									<div class="form-group mb-4 row">
										<dt class="col-sm-4" style="padding-top:10px;">Coupon Code</dt>
										<div class="col-sm-8">
											<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter Coupon Code" required="">
										</div>
									</div>
									<div class="form-group mb-4 row">
										<dt class="col-sm-4" style="padding-top:10px;">Discount</dt>
										<div class="col-sm-8">
											<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter Coupon Value" required="">
										</div>
									</div>
									<div class="form-group mb-4 row">
										<dt class="col-sm-4" style="padding-top:10px;">Applicable For&nbsp;&nbsp;<a href="#" data-toggle="tooltip" title="Who Do you want to be able to use these coupons?"><i style="font-size:12px;" class="fa fa-info-circle"></i></a></dt>
										<div class="col-sm-8">
											<select class="selectpicker form-control mb-3" data-style="btn-light btn-light-solid">
												<option selected disabled>Choose Who Can Apply</option>
												<option>Followers of my Store Only</option>
												<option>Everyone</option>
											</select>
										</div>
									</div>
									<div class="form-group mb-4 check-list row">
										<div class="col-sm-12" style="padding-top:10px;">
											<label class="checkbox checkbox-primary"><input type="checkbox"><span style="font-weight:600;">Do you want to send a push notification for this coupon code to Customers Can apply this coupon all followers of your store?</span></label>
										</div>
									</div>
									<div class="form-group mb-4 row">
										<dt class="col-sm-4" style="padding-top:10px;">Category&nbsp;&nbsp;<a href="#" data-toggle="tooltip" title="Customers Can apply this coupon To products from which category?"><i style="font-size:12px;" class="fa fa-info-circle"></i></a></dt>
										<div class="col-sm-8">
											<select class="selectpicker form-control mb-3" data-style="btn-light btn-light-solid">
												<option selected disabled>Choose Category</option>
												<option>New Arraival</option>
												<option>Winter Collection</option>
												<option>Christmas Combo</option>
											</select>
										</div>
									</div>
									<div class="form-group mb-4 row">
										<dt class="col-sm-4" style="padding-top:10px;">Sub-Category&nbsp;&nbsp;<a href="#" data-toggle="tooltip" title="Customers Can apply this coupon To products from which sub-category?"><i style="font-size:12px;" class="fa fa-info-circle"></i></a></dt>
										<div class="col-sm-8">
											<select class="selectpicker form-control mb-3" data-style="btn-light btn-light-solid">
												<option selected disabled>Choose Sub-Category</option>
												<option>Clothings</option>
												<option>Electronics</option>
												<option>Jewllery</option>
											</select>
										</div>
									</div>
									<div class="form-group mb-4 row">
										<dt class="col-sm-4" style="padding-top:10px;"> Start Date & Time </dt>
										<div class="col-sm-8">
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text"><i class="ti-calendar"></i></span></div><input class="form-control form-control-solid" id="datetimepicker_1" type="text" placeholder="Start Date & Time">
											</div>
										</div>
									</div>
									
									<div class="form-group mb-4 row">
										<dt class="col-sm-4" style="padding-top:10px;"> End Date & Time </dt>
										<div class="col-sm-8">
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text"><i class="ti-calendar"></i></span></div><input class="form-control form-control-solid" id="datetimepicker_2" type="text" placeholder="End Date & Time">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-5">
									<img src="images/coupons/2018-07-05_13-06-59.gif"/>
								</div>
							</div>
							<!-- original form ends -->
						
					</div>

					<div class="card-footer">
						<div class="form-group">
							<button class="btn btn-primary clr" style="float:left;margin-right:10px;" type="button"> Launch </button>
							<button class="btn btn-default" type="reset"> Clear </button>
                        </div>
					</div>
					</form>
				</div>
			  </div>
			  
              <div class="col-lg-12" style="padding-bottom:12px;">
                <div class="row">
                  <div class="col-md-12">

                    <div class="card" style="border:1px solid #7c1ab5">
                            <div class="card-header cardhdd">
								<h5 class="box-title" style="color:#fff;"> My Added Coupon Schemes </h5>
							</div>
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
    <?php
		include("common/extra.php");
    ?>
    <!-- BEGIN: Page backdrops-->
    <?php
		include("common/scripts.php");
	?>
    <script src="js/vendor-js/datatables.min.js"></script>
	<script src="js/vendor-js/bootstrap-datetimepicker.min.js"></script>
    <script>
      $(function() {
		$('#dt-buttons').DataTable({
		  "searching": true,
		  "pageLength":10,
		  scrollX: true,
		  dom: 'Bfrtip',
		  buttons: [
			'copy', 'excel', 'pdf', 'csv', 'print'
		  ]
		});

		$(".dt-buttons").removeClass("btn-group");


		$("#datetimepicker_1, #datetimepicker_2").datetimepicker({
			todayHighlight: !0,
			autoclose: !0,
			format: "yyyy.mm.dd hh:ii",
		});
	  });
    </script>
  </body>
</html>
