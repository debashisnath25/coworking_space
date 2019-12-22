<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/favicon.png' type='image/x-icon'/ >
    <title>Discount | Wanted 7</title>
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
						<h5 class="box-title" style="color:#fff;">Add Discount Scheme for your Customers </h5>
						<div class="card-actions"><a class="card-collapse"><i class="ti-angle-down"></i></a></div>
					</div>
					<div class="card-body">
						<form class="needs-validation" novalidate="">
							<!-- original form -->
							<div class="row">
								<div class="col-md-9">
									<div class="form-group mb-4 row">
										<dt class="col-sm-4" style="padding-top:10px;">Discount Scheme Name</dt>
										<div class="col-sm-8">
											<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter Discount Scheme Name" required="">
										</div>
									</div>
									<div class="form-group mb-4 row">
										<dt class="col-sm-4" style="padding-top:10px;">Discount %</dt>
										<div class="col-sm-8">
											<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter Discount Percentage" required="">
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

									<div class="form-group mb-4 row">
										<dt class="col-sm-4" style="padding-top:10px;">Category</dt>
										<div class="col-sm-8">
											<select class="selectpicker form-control mb-3 form-control-solid" data-style="btn-light btn-light-solid">
												<option selected disabled>Choose Category</option>
												<option>New Arraival</option>
												<option>Winter Collection</option>
												<option>Christmas Combo</option>
											</select>
										</div>
									</div>
									<div class="form-group mb-4 row">
										<dt class="col-sm-4" style="padding-top:10px;">Sub-Category</dt>
										<div class="col-sm-8">
											<select class="selectpicker form-control mb-3 form-control-solid" data-style="btn-light btn-light-solid">
												<option selected disabled>Choose Sub-Category</option>
												<option>Shirt</option>
												<option>Shoes</option>
												<option>Phone</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-3 text-center">
									<!-- <ul class="timeline timeline-default">
										<li class="timeline-item">2 Issue fixed<span class="font-13 text-muted ml-2">Just now</span></li>
										<li class="timeline-item"><span>15 New orders<span class="badge badge-primary badge-pill ml-2">important</span></span><span class="font-13 text-muted ml-2">5 mins</span></li>
										<li class="timeline-item">18 new orders sent<span class="font-13 text-muted ml-2">24 mins</span></li>
										<li class="timeline-item">15 New messages<span class="font-13 text-muted ml-2">45 mins</span></li>
										<li class="timeline-item">The invoice is ready<span class="font-13 text-muted ml-2">1 hrs</span></li>
									</ul> -->
									<div class="card" style="border:1px solid #CCC;">
									  
									  <div class="card-body">
										<h5>Mens Tshirt Casual</h5>
										<h4><i class="fas fa-rupee-sign"></i> 1049</h4>
										<span style="text-decoration: line-through;"><i class="fas fa-rupee-sign"></i> 2099</span>
										<strong style="color:green;">50% Off</strong>
									  </div>
									</div>

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
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card" style="border:1px solid #7c1ab5">
							<div class="card-header cardhdd">
								<h5 class="box-title" style="color:#fff;">Currently Active Discount Schemes</h5>
								<div class="card-actions"><a class="card-collapse"><i class="ti-angle-down"></i></a></div>
							</div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped w-100" id="dt-buttons">
                                        <thead class="">
                                            <tr>
                                                <th>Scheme Name</th>
                                                <th>Category</th>
												<th>SUb-Category</th>
                                                <th>Discount</th>
                                                <th>Start Time<!-- &nbsp;&nbsp;<a href="#" data-toggle="tooltip" title="Start Date & Time"><i style="font-size:12px;" class="fa fa-info-circle"></i></a> --></th>
												<th>End Time<!-- &nbsp;&nbsp;<a href="#" data-toggle="tooltip" title="End Date & Time"><i style="font-size:12px;" class="fa fa-info-circle"></i></a> --></th>
                                                <th>Total Sales<!-- &nbsp;&nbsp;<a href="#" data-toggle="tooltip" title="Total Sales After Launch in Rs."><i style="font-size:12px;" class="fa fa-info-circle"></i></a> --></th>
												<th>Reports<!-- &nbsp;&nbsp;<a href="#" data-toggle="tooltip" title="Download Report in CSV Format/PDF"><i style="font-size:12px;" class="fa fa-info-circle"></i></a> --></th>
												<th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
											for($i=0;$i<=10;$i++){
										?>
                                            <tr>
                                                <td>Christmas Specials</td>
                                                <td><a href="discount_details.php" class="btn btn-vk btn-sm" type="button">New Arrivals</a></td>
												<td>Shirt</td>
                                                <td>5%</td>
                                                <td>27/09/2019 : 4:15 PM</td>
												<td>01/02/2019 : 7:00 PM </td>
                                                <td>Rs. 15,00,000.00</td>
												<td><button class="btn btn-ok btn-sm" type="button">Download Report</button></td>
												<td>
													<label class="ui-switch switch-solid"><input type="checkbox" checked=""><span></span></label>
												</td>
                                            </tr>
										<?php
											}
										?>
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
    <!-- END: Quick sidebar-->
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
