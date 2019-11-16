<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/favicon.png' type='image/x-icon'/ >
    <title>Discount Analytics| Wanted 7
    </title>
    <?php
		include("common/metalinks.php");
	?>
	<style>
	.dt-buttons {
	  	padding-bottom:15px;
		margin-top:-37px;
		position:absolute;
	  }
	  .bootstrap-select {
	    float:right !important;
	  }
	</style>
	<link href="css/vendor-css/datatables.min.css" rel="stylesheet" />
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
            <div class="row">
			  <div class="col-lg-6">
				<div class="card" style="border:1px solid #7c1ab5">
					<div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">Discount Analytics</h5>
						<div class="card-actions"><a class="card-collapse" style="color:#fff;"><i class="ti-angle-down"></i></a></div>
					</div>
					<div class="card-body">

						<div>
							<ul class="nav line-tabs">
								<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab1-1">Daily</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab1-2">Weekly</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab1-3">Monthly</a></li>
							</ul>
							<div class="tab-content mt-4">
								<div class="tab-pane fade show active" id="tab1-1">
									<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
								<div class="tab-pane fade" id="tab1-2">
									<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
								<div class="tab-pane fade" id="tab1-3">
									<div id="column_gradient"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			  </div>
			  <div class="col-lg-6">
				<div class="card" style="border:1px solid #7c1ab5">
					<div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">Discount Information</h5>
						<div class="card-actions"><a class="card-collapse" style="color:#fff;"><i class="ti-angle-down"></i></a></div>
					</div>
					<div class="card-body">
						<table class="table table-bordered">
							<tbody>
								<tr>
									<td>Scheme Name</td>
									<th scope="row">Christmas Specials</th>
								</tr>
								<tr>
									<td>Category</td>
									<th scope="row">New Arrivals</th>
								</tr>
								<tr>
									<td>Discount</td>
									<th scope="row">5%</th>
								</tr>
								<tr>
									<td>Star Time&nbsp;&nbsp;<a href="#" data-toggle="tooltip" title="Start Date & Time"><i style="font-size:12px;" class="fa fa-info-circle"></i></a></td>
									<th scope="row">27/09/2019 : 4:15 PM</th>
								</tr>
								<tr>
									<td>Star Time&nbsp;&nbsp;<a href="#" data-toggle="tooltip" title="Start Date & Time"><i style="font-size:12px;" class="fa fa-info-circle"></i></a></td>
									<th scope="row">01/02/2019 : 7:00 PM</th>
								</tr>
								<tr>
									<td>Total Sales&nbsp;&nbsp;<a href="#" data-toggle="tooltip" title="Total Sales After Launch in Rs."><i style="font-size:12px;" class="fa fa-info-circle"></i></a></td>
									<th scope="row">Rs. 15,00,000.00</th>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
              <div class="col-lg-12" style="padding-bottom:12px;">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card" style="border:1px solid #7c1ab5">
							<div class="card-header cardhdd">
								<h5 class="box-title" style="color:#fff;">Total Orders Using This Discount</h5>
								<div class="card-actions"><a class="card-collapse" style="color:#fff;"><i class="ti-angle-down"></i></a></div>
							</div>
                            <div class="card-body">
								<div class="mb-1">
									<select class="form-control selectpicker col-md-2 show-tick" style="float: right;" data-style="btn-light btn-light-solid">
										<option selected disabled>Sort</option>
										<option>Order Amount</option>
										<option>Date</option>
										<optgroup label="Status">
											<option>Pending</option>
											<option>Confirmed</option>
											<option>Completed</option>
											<option>Shipped</option>
										</optgroup>
									</select>
								</div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped w-100" id="dt-buttons">
                                        <thead class="">
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Product Details</th>
												<th>Amount</th>
                                                <th>Status</th>
                                                <th>Customer Email</th>
												<th>Created On</th>
												<th>Action&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>108737NT</td>
                                                <td>14 x Apple Tv</td>
												<td>Rs. 2,320.21</td>
												<td><span class="badge badge-success badge-pill">Confirmed</span></td>
                                                <td>johndoe@dummy.com</td>
												<td>15th Sep, 2019 4:05PM</td>
												<td>
													<select class="form-control selectpicker" data-style="btn-light btn-light-solid">
														<option selected disabled>Action</option>
														<option>View Order Details</option>
														<option>Delete</option>
													</select>
												</td>
                                            </tr>
											<tr>
                                                <td>108737NT</td>
                                                <td>14 x Apple Tv</td>
												<td>Rs. 2,320.21</td>
												<td><span class="badge badge-danger badge-pill">Pending</span></td>
                                                <td>johndoe@dummy.com</td>
												<td>15th Sep, 2019 4:05PM</td>
												<td>
													<select class="form-control selectpicker" data-style="btn-light btn-light-solid">
														<option selected disabled>Action</option>
														<option>View Order Details</option>
														<option>Delete</option>
													</select>
												</td>
                                            </tr>
											<tr>
                                                <td>108737NT</td>
                                                <td>14 x Apple Tv</td>
												<td>Rs. 2,320.21</td>
												<td><span class="badge badge-success badge-pill">Confirmed</span></td>
                                                <td>johndoe@dummy.com</td>
												<td>15th Sep, 2019 4:05PM</td>
												<td>
													<select class="form-control selectpicker" data-style="btn-light btn-light-solid">
														<option selected disabled>Action</option>
														<option>View Order Details</option>
														<option>Delete</option>
													</select>
												</td>
                                            </tr>
											<tr>
                                                <td>108737NT</td>
                                                <td>14 x Apple Tv</td>
												<td>Rs. 2,320.21</td>
												<td><span class="badge badge-danger badge-pill">Pending</span></td>
                                                <td>johndoe@dummy.com</td>
												<td>15th Sep, 2019 4:05PM</td>
												<td>
													<select class="form-control selectpicker" data-style="btn-light btn-light-solid">
														<option selected disabled>Action</option>
														<option>View Order Details</option>
														<option>Delete</option>
													</select>
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
    <?php
		include("common/scripts.php");
	?>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="js/vendor-js/datatables.min.js"></script>
	<script src="js/vendor-js/apexcharts.min.js"></script>
	<script src="js/vendor-js/apexcharts-demo.js"></script>
	<script src="js/vendor-js/Chart.min.js"></script>
    <script>
      $(function() {
		$('#dt-buttons').DataTable({
		  "searching": false,
		  scrollX: true,
		  dom: 'Bfrtip',
		  buttons: [
			'copy', 'excel', 'pdf', 'csv', 'print'
		  ]
		});

		$(".dt-buttons").removeClass("btn-group");
	  });

    </script>
  </body>
</html>
