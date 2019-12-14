<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/favicon.png' type='image/x-icon'/ >
    <title>Discount Details | Bundesk</title>
    <?php
		include("common/metalinks.php");
	?>
	<link href="css/vendor-css/datatables.min.css" rel="stylesheet" />
	<link href="css/vendor-css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <style>
      .dt-buttons {
        padding-bottom:15px;
		margin-bottom:-50px;
      }
      .bootstrap-select {
        float:right !important;
      }
      .order_div{
        background: #F2F3FA;
      }
	  .btn-outline-primary:hover {
		color: #fff !important;
	  }
	  .btn-outline-primary{
		padding: 19px;
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
			<div class="page-heading" style="padding-left:17px;">
              <div class="page-breadcrumb">
                <h1 class="page-title"><a href="dashboard.php">Dashboard </a>> <a href="discount.php">Discounts </a>>Discount Details
                </h1>
              </div>
            </div>
			 
			  <div class="row" style="margin:0px;padding:0px;">
			  <div class="col-lg-12">
			  	<div class="alert alert-success alert-bordered has-icon" role="alert">Report for Discount Scheme : <b>Christmas Specials</b></div>
			  </div>
              <div class="col-lg-6">
                <div class="card" style="border:1px solid #7c1ab5">
                  <div class="card-header cardhdd">
                    <h5 class="box-title" style="color:#fff;">Discount Analytics
                    </h5>
                    <div class="card-actions">
                      <a class="card-collapse" style="color:#fff;">
                        <i class="ti-angle-down">
                        </i>
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div>
                      <ul class="nav line-tabs">
						<li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#tab1-1">Monthly
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#tab1-2">Weekly
                          </a>
                        </li>
						<li class="nav-item">
                          <a class="nav-link " data-toggle="tab" href="#tab1-3">Daily
                          </a>
                        </li>
                      </ul>
                      <div class="tab-content mt-4">
                        
						<div class="tab-pane fade show active" id="tab1-1">
                          <div id="column_gradient">
                          </div>
                        </div>
                        <div class="tab-pane fade" id="tab1-2">
                          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.
                          </p>
                        </div>
						<div class="tab-pane fade" id="tab1-3">
                          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card" style="border:1px solid #7c1ab5">
                  <div class="card-header cardhdd">
                    <h5 class="box-title" style="color:#fff;">Discount Information
                    </h5>
                    <div class="card-actions">
                      <a class="card-collapse" style="color:#fff;">
                        <i class="ti-angle-down">
                        </i>
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <th>Scheme Name
                          </th>
                          <td scope="row"><span class="badge badge-warning" style="color: #fff;font-size: 15px;">Christmas Specials</span>
                          </td>
                        </tr>
						<tr>
                          <th>WorkSpace Name
                          </th>
                          <td scope="row">Work with us
                          </td>
                        </tr>
						<tr>
                          <th>Vendor Name
                          </th>
                          <td scope="row">Aman Khanna
                          </td>
                        </tr>
                        <tr>
                          <th>Category
                          </th>
                          <td scope="row">Co-working Space
                          </td>
                        </tr>
                        <tr>
                          <th>Discount
                          </th>
                          <td scope="row">5%
                          </td>
                        </tr>
                        <tr>
                          <th>Star Time&nbsp;&nbsp;
                            <a href="#" data-toggle="tooltip" title="Start Date & Time">
                              <i style="font-size:12px;" class="fa fa-info-circle">
                              </i>
                            </a>
                          </th>
                          <td scope="row">27/09/2019 : 4:15 PM
                          </td>
                        </tr>
                        <tr>
                          <th>Star Time&nbsp;&nbsp;
                            <a href="#" data-toggle="tooltip" title="Start Date & Time">
                              <i style="font-size:12px;" class="fa fa-info-circle">
                              </i>
                            </a>
                          </th>
                          <td scope="row">01/02/2019 : 7:00 PM
                          </td>
                        </tr>
                        <tr>
                          <th>Total Sales&nbsp;&nbsp;
                            <a href="#" data-toggle="tooltip" title="Total Sales After Launch in Rs.">
                              <i style="font-size:12px;" class="fa fa-info-circle">
                              </i>
                            </a>
                          </th>
                          <td scope="row"><span style="font-family:arial;">₹</span>&nbsp;15,00,000.00
                          </th>
                        </td>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-lg-12" style="padding-bottom:12px;">
                <div class="row">
				<div class="col-md-3">
				 	 <div class="card" style="border:1px solid #7c1ab5">
						<div class="card-header cardhdd">
							<h5 class="box-title" style="color:#fff;">Search
							</h5>
							
						  </div>
						<div class="card-body">
							<div class="row mb-2"  >
							  <div class="col-md-12 col-sm-12 col-xs-12" >
								<input class="form-control form-control-solid mb-3" id="datetimepicker_1" type="text" placeholder="Start Date">
							  </div>
							  <div class="col-md-12 col-sm-12 col-xs-12">
								<input class="form-control form-control-solid mb-3" id="datetimepicker_2" type="text" placeholder="End Date">
							  </div>
							  <div class="col-md-12 col-sm-12 col-xs-12" >
								<select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid">
								  <option selected disabled>Status
								  </option>
								  <option>Pending
									</option>
									<option>Confirmed
									</option>
									<option>Completed
									</option>
								</select>
							  </div>
							  <div class="col-md-12 col-sm-12 col-xs-12" >
								<select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid">
								  <option selected disabled>Sort
								  </option>
								  <option>Order Amount
								  </option>
								  <option>Date
								  </option>
								</select>
							  </div>
							  <div class="col-md-12 col-sm-12 col-xs-12" >
								<button class="btn btn-primary btn-block clr"  type="submit">
								  <span class="btn-icon">
									<i class="ft-search">
									</i>Search
								  </span>
								</button>
							  </div>
							</div>
						</div>
                  </div>
				 </div>
                  <div class="col-md-9">
                    <div class="card" style="border:1px solid #7c1ab5">
                      <div class="card-header cardhdd">
                        <h5 class="box-title" style="color:#fff;">Total Orders Using This Discount
                        </h5>
                        <div class="card-actions">
                          <a class="card-collapse" style="color:#fff;">
                            <i class="ti-angle-down">
                            </i>
                          </a>
                        </div>
                      </div>
                      <div class="card-body">
                       <div class="table-responsive">
                          <table class="table table-bordered w-100" id="dt-buttons">
						  	<thead>
								<tr>
									<th>Booking ID</th>
									<th>Product Details</th>
									<th>Price</th>
									<th>Date</th>
									<th>Action</th>
								</tr>
							</thead>
                            <tbody>
							<?php
							for($i=0;$i<=3;$i++){
							?>
                              <tr>
								  <td>
									  <a class="btn btn-outline-primary" href="booking_details.php">Booking ID<br/>#108737NT</a>
								  </td>
								  <td style="min-width: 300px;">
									  <div class="media col-md-12 col-sm-12 col-xs-12" style="padding:0px !important;float:left;">
										<span class="position-relative d-inline-block mr-4">
										  <img class="rounded-lg" src="images/vendor-images/944390254ed4fd2b9fb33ad76b37d9a1.png" alt="image" width="100">
										</span>
										<div class="media-body mt-2">
										  <div class="h4 font-14">Work with us
										  </div>
										  <div class="text-muted mb-1 font-12" style="color: #878787;">
											<span>Category : Co-working Space
											</span>
											<br/>
											<span>No. of people: <b>30</b>
											</span>
											<br/>
										  </div>
										</div>
									</div>
								   </td>
								   <td>
								  	<div class="media-body mt-2">
									  <div class="h4 font-14">
										<span style="font-family:arial;">₹</span>&nbsp;3000
									  </div>
									</div>
								  </td>
								  <td>
								  	<div class="media-body mt-2">
									  <div class="h4 font-14">2 days Ago
									  </div>
									</div>
								  </td>
								  <td>
									  <a class="btn btn-primary" href="booking_details.php">View Booking Details</a>
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

    <!-- END: Quick sidebar-->
    <!-- BEGIN: Page backdrops-->
    <?php
		include("common/scripts.php");
	?>
    <script src="js/vendor-js/datatables.min.js">
	</script>
	<script src="js/vendor-js/apexcharts.min.js">
	</script>
	<script src="js/vendor-js/apexcharts-demo.js">
	</script>
	<script src="js/vendor-js/Chart.min.js">
	</script>
	<script src="js/vendor-js/bootstrap-datetimepicker.min.js"></script>
	<script>
	  $(function() {
	   $('#dt-buttons').DataTable({
		  "searching": true,
		  "pageLength":10,
		  scrollX: true,
		  dom: 'Bfrtip',
		  buttons: [
			'excel', 'pdf', 'csv'
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
