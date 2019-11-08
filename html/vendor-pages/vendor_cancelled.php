<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title>Orders | Wanted 7
    </title>
    <?php
		include("common/metalinks.php");
	?>
    <!-- PAGE LEVEL VENDORS-->
  
    <link href="css/vendor-css/datatables.min.css" rel="stylesheet" />
	<link href="css/vendor-css/bootstrap-datetimepicker.min.css" rel="stylesheet" />

    <!-- PAGE LEVEL STYLES-->
    <style>.faq-tabs .nav-link {
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
	.dt-buttons {
		padding-bottom: 15px;
		margin-bottom: -50px;
	}
	   .cardhdd{
		background: rgb(2,0,36);
		background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(34,1,50,1) 35%, rgba(124,26,181,1) 100%);
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
              <div class="row">
                 <?php include('common/orders_left_sidebar.php');?>
				<div class="col-lg-9">
					<div class="tab-content">
						<div class="tab-pane fade active show" id="faq-group-1">	
							<div class="card"  style="border:1px solid #cccccc;">
								<div class="card-body">
									<div class="row">
										<div class="col-md-2 " style="padding:3px !important;">
											<label for="validationCustom04">Order Id</label>
											<input class="form-control form-control-solid" id="validationCustom04" type="text" placeholder="Enter Order Id" required="">
										</div>
										<div class="col-md-2 " style="padding:3px !important;">
											<label for="validationCustom04">Order Type</label>
											<select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid">
												<option selected disabled>Choose.</option>
												<option>Paid Orders</option>
												<option>COD Orders</option>
												<option>Delivery Orders Form Delhivery</option>
												<option>Delivery Orders Form India Post</option>
												<option>Wanted Assurance Program Orders</option>
												<option>Wanted Support Program Orders</option>
											</select>
										</div>
										<div class="col-md-2 " style="padding:3px !important;">
											<label >From</label>
											<input class="form-control form-control-solid" id="datetimepicker_1" type="text" placeholder="Select Date">
										</div>
										<div class="col-md-2 " style="padding:3px !important;">
											<label for="validationCustom04">To</label>
											<input class="form-control form-control-solid" id="datetimepicker_2" type="text" placeholder="Select Date">
										</div>
										<div class="col-md-2 " style="padding:3px !important;">
											<label for="validationCustom04">Sort</label>
											<select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid">
												<option selected disabled>Filters</option>
												<option>Highest First</option>
												<option>Lowest First</option>
												<option>Latest First</option>
												<option>Earliest First</option>
											</select>
										</div>
										<div class="col-md-1 " style="padding:3px !important;">
											<button class="btn btn-primary clr" style="margin-top: 27px;" type="submit"><span class="btn-icon"><i class="ft-search"></i>Search</span></button>
										</div>
									</div>
								</div>
							</div>
							<div class="card" style="border:1px solid #7c1ab5">
								<div class="card-header cardhdd">
									<h5 class="box-title" style="color:#fff;">CANCELLED ORDERS BY VENDORS</h5>
									<div class="card-actions"><a class="card-collapse"><i class="ti-angle-down"></i></a></div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered table-striped w-100" id="dt-buttons">
											<thead class="">
												<tr>
													<th>Order Id</th>
													<th>Product Details</th>
													<th>Amount</th>
													<th>Status</th>
													<th>Created On</th>
													<th>Action</th>
													<th></th>
													
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>108737NT</td>
													<td>14 x Apple Tv,<br /> 2x Ipod</td>
													<td>&#8377;20,000</td>
													<td><span class="badge badge-success badge-pill">Delivered</span></td>
													<td>01/02/2019 : 7:00 PM </td>
													<td>
														
													</td>
													<td>	
														<div class="dropdown"><button class="btn btn-outline-info btn-floating" type="button" data-toggle="dropdown"><i class="ti-more-alt"></i></button>
															<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
																<a class="dropdown-item" href="#">View Details</a>
																<a class="dropdown-item" href="#">Archive</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>108737NT</td>
													<td>14 x Apple Tv,<br /> 2x Ipod</td>
													<td>&#8377;20,000</td>
													<td><span class="badge badge-pill badge-primary">Pending</span></td>
													<td>01/02/2019 : 7:00 PM </td>
													<td>
														
													</td>
													<td>	
														<div class="dropdown"><button class="btn btn-outline-info btn-floating" type="button" data-toggle="dropdown"><i class="ti-more-alt"></i></button>
															<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
																<a class="dropdown-item" href="#">View Details</a>
																<a class="dropdown-item" href="#">Archive</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>108737NT</td>
													<td>14 x Apple Tv,<br /> 2x Ipod</td>
													<td>&#8377;20,000</td>
													<td><span class="badge badge-pill badge-danger">Shipped</span></td>
													<td>01/02/2019 : 7:00 PM </td>
													<td>
														
													</td>
													<td>	
														<div class="dropdown"><button class="btn btn-outline-info btn-floating" type="button" data-toggle="dropdown"><i class="ti-more-alt"></i></button>
															<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
																<a class="dropdown-item" href="#">View Details</a>
																<a class="dropdown-item" href="#">Archive</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>108737NT</td>
													<td>14 x Apple Tv,<br /> 2x Ipod</td>
													<td>&#8377;20,000</td>
													<td><span class="badge badge-pill badge-primary">Pending</span></td>
													<td>01/02/2019 : 7:00 PM </td>
													<td>
														
													</td>
													<td>	
														<div class="dropdown"><button class="btn btn-outline-info btn-floating" type="button" data-toggle="dropdown"><i class="ti-more-alt"></i></button>
															<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
																<a class="dropdown-item" href="#">View Details</a>
																<a class="dropdown-item" href="#">Archive</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>108737NT</td>
													<td>14 x Apple Tv,<br /> 2x Ipod</td>
													<td>&#8377;20,000</td>
													<td><span class="badge badge-success badge-pill">Delivered</span></td>
													<td>01/02/2019 : 7:00 PM </td>
													<td>
														
													</td>
													<td>	
														<div class="dropdown"><button class="btn btn-outline-info btn-floating" type="button" data-toggle="dropdown"><i class="ti-more-alt"></i></button>
															<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
																<a class="dropdown-item" href="#">View Details</a>
																<a class="dropdown-item" href="#">Archive</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>108737NT</td>
													<td>14 x Apple Tv,<br /> 2x Ipod</td>
													<td>&#8377;20,000</td>
													<td><span class="badge badge-pill badge-danger">Shipped</span></td>
													<td>01/02/2019 : 7:00 PM </td>
													<td>
														
													</td>
													<td>	
														<div class="dropdown"><button class="btn btn-outline-info btn-floating" type="button" data-toggle="dropdown"><i class="ti-more-alt"></i></button>
															<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
																<a class="dropdown-item" href="#">View Details</a>
																<a class="dropdown-item" href="#">Archive</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>108737NT</td>
													<td>14 x Apple Tv,<br /> 2x Ipod</td>
													<td>&#8377;20,000</td>
													<td><span class="badge badge-success badge-pill">Delivered</span></td>
													<td>01/02/2019 : 7:00 PM </td>
													<td>
														
													</td>
													<td>	
														<div class="dropdown"><button class="btn btn-outline-info btn-floating" type="button" data-toggle="dropdown"><i class="ti-more-alt"></i></button>
															<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
																<a class="dropdown-item" href="#">View Details</a>
																<a class="dropdown-item" href="#">Archive</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>108737NT</td>
													<td>14 x Apple Tv,<br /> 2x Ipod</td>
													<td>&#8377;20,000</td>
													<td><span class="badge badge-pill badge-primary">Pending</span></td>
													<td>01/02/2019 : 7:00 PM </td>
													<td>
														
													</td>
													<td>	
														<div class="dropdown"><button class="btn btn-outline-info btn-floating" type="button" data-toggle="dropdown"><i class="ti-more-alt"></i></button>
															<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
																<a class="dropdown-item" href="#">View Details</a>
																<a class="dropdown-item" href="#">Archive</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>108737NT</td>
													<td>14 x Apple Tv,<br /> 2x Ipod</td>
													<td>&#8377;20,000</td>
													<td><span class="badge badge-success badge-pill">Delivered</span></td>
													<td>01/02/2019 : 7:00 PM </td>
													<td>
														
													</td>
													<td>	
														<div class="dropdown"><button class="btn btn-outline-info btn-floating" type="button" data-toggle="dropdown"><i class="ti-more-alt"></i></button>
															<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
																<a class="dropdown-item" href="#">View Details</a>
																<a class="dropdown-item" href="#">Archive</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>108737NT</td>
													<td>14 x Apple Tv,<br /> 2x Ipod</td>
													<td>&#8377;20,000</td>
													<td><span class="badge badge-success badge-pill">Delivered</span></td>
													<td>01/02/2019 : 7:00 PM </td>
													<td>
														
													</td>
													<td>	
														<div class="dropdown"><button class="btn btn-outline-info btn-floating" type="button" data-toggle="dropdown"><i class="ti-more-alt"></i></button>
															<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
																<a class="dropdown-item" href="#">View Details</a>
																<a class="dropdown-item" href="#">Archive</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>108737NT</td>
													<td>14 x Apple Tv,<br /> 2x Ipod</td>
													<td>&#8377;20,000</td>
													<td><span class="badge badge-success badge-pill">Delivered</span></td>
													<td>01/02/2019 : 7:00 PM </td>
													<td>
														
													</td>
													<td>	
														<div class="dropdown"><button class="btn btn-outline-info btn-floating" type="button" data-toggle="dropdown"><i class="ti-more-alt"></i></button>
															<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
																<a class="dropdown-item" href="#">View Details</a>
																<a class="dropdown-item" href="#">Archive</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>108737NT</td>
													<td>14 x Apple Tv,<br /> 2x Ipod</td>
													<td>&#8377;20,000</td>
													<td><span class="badge badge-success badge-pill">Delivered</span></td>
													<td>01/02/2019 : 7:00 PM </td>
													<td>
														
													</td>
													<td>	
														<div class="dropdown"><button class="btn btn-outline-info btn-floating" type="button" data-toggle="dropdown"><i class="ti-more-alt"></i></button>
															<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
																<a class="dropdown-item" href="#">View Details</a>
																<a class="dropdown-item" href="#">Archive</a>
															</div>
														</div>
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
    <!-- BEGIN: Search form-->
    <?php
		include("common/extra.php");
    ?>
    <!-- END: Page backdrops-->
    <!-- CORE PLUGINS-->
 <?php
		include("common/scripts.php");
	?>
    <script src="js/vendor-js/datatables.min.js"></script>
	<script src="js/vendor-js/bootstrap-datetimepicker.min.js"></script>
    <script src="js/vendor-js/jquery.validate.min.js"></script>
    <!-- PAGE LEVEL SCRIPTS-->
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
