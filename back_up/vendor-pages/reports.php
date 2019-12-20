
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title>Reports | Wanted 7</title><!-- GLOBAL VENDORS-->
	<?php include('common/metalinks.php');?>
    <link href="css/vendor-css/daterangepicker.css" rel="stylesheet" />
	<link href="css/vendor-css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="css/vendor-css/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <link href="css/vendor-css/datatables.min.css" rel="stylesheet" /><!-- THEME STYLES-->
    <style>
	.data-widget-icon {
		position: absolute;
		top: 20px;
		right: 20px;
		font-size: 40px;
		color: #6a89d7;
	}
	.badge-warning{
		background:#a9b6f9;
	}
	.dt-buttons {
		padding-bottom: 15px;
		margin-bottom: -50px;
	}

	.faq-tabs .nav-link {
		min-width: 100px;
		padding: 1rem;
		border: 1px dashed;
		margin-bottom: 1rem;
		background-color: #fff;
		box-shadow: 0 1px 15px 1px rgba(62,57,107,.07);
	}
	.faq-tabs .nav-link.active {
		color: #fff;
		border-color: #7C1AB5;
		background-color: #7C1AB5;
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
	.badge-point {
		height: 14px;
		width: 14px;
	}
	</style>
</head>

<body>
    <div class="page-wrapper">
        <div class="content-wrapper">
            <!-- BEGIN: Sidebar-->
            <?php include('common/sidebar.php');?>
            <!-- BEGIN: Content-->
            <div class="content-area">
                <!-- BEGIN: Header-->
               <?php include('common/header.php');?>
			   <!-- END: Header-->
                <div class="page-content fade-in-up">
                    <!-- BEGIN: Page heading-->
                    <div class="page-heading">
                        <div class="page-breadcrumb">
                            <h1 class="page-title">Reports</h1>
                        </div>
                        <!-- <div class="subheader_daterange" id="subheader_daterange"><span class="subheader-daterange-label"><span class="subheader-daterange-title"></span><span class="subheader-daterange-date"></span></span><button class="btn btn-floating btn-sm rounded-0" type="button"><i class="ti-calendar"></i></button></div> -->
                    </div><!-- BEGIN: Page content-->
                    <div>
						 <div class="row">
						 	<div class="col-md-8">
                                <div class="card card-fullheight" style="border:1px solid #7c1ab5">
									<div class="card-header cardhdd">
										<h5 class="box-title" style="color:#fff;"> Revenue Report </h5>
									</div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-3">
                                            <ul class="nav nav-pills nav-pills-links d-none d-sm-flex">
                                                <li class="nav-item"><a class="nav-link active" data-toggle="pill" href="#pill-1">Weekly</a></li>
                                                <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#pill-2">Monthly</a></li>
                                                <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#pill-3">Yearly</a></li>
                                            </ul>
                                        </div>
                                        <div id="line_chart_1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-fullheight" style="border:1px solid #7c1ab5">
									<div class="card-header cardhdd">
										<h5 class="box-title" style="color:#fff;"> Revenue Indicators </h5>
									</div>
                                    <div class="card-body">
                                        <div class="row mb-4">
											<div class="col-md-6 " style="padding:3px !important;">
												<label class="active">From</label>
												<input class="form-control form-control-solid" id="datetimepicker_3" type="text" placeholder="Select Date">
											</div>
											<div class="col-md-6 " style="padding:3px !important;">
												<label for="validationCustom04" class="active">To</label>
												<input class="form-control form-control-solid" id="datetimepicker_4" type="text" placeholder="Select Date">
											</div>
										</div>
										<div class="row">
                                            <div class="col text-center">
                                                <div class="easypie" data-percent="49.78" data-bar-color="#00bcd4" data-size="110" data-line-width="8"><span class="easypie-data text-info" style="font-size:15px;"><i class="fas fa-rupee-sign"></i>&nbsp;78,625</span></div>
                                                <h6 class="mb-0 mt-3 font-18 font-weight-normal">Revenue</h6>
												<span class="text-muted"></span>
                                            </div>
                                            <div class="col text-center">
                                                <div class="easypie" data-percent="62.36" data-bar-color="#2949ef" data-size="110" data-line-width="8"><span class="easypie-data text-primary" style="font-size:15px;"><i class="fas fa-rupee-sign"></i>&nbsp;92,895</span></div>
                                                <h6 class="mb-0 mt-3 font-18 font-weight-normal">Transactions</h6>
                                            </div>
                                        </div>
										<div class="row">
											<div class="col text-center">
                                                <div class="easypie" data-percent="15" data-bar-color="#fd7e14" data-size="110" data-line-width="8"><span class="easypie-data text-warning" style="font-size:15px;"><i class="fas fa-rupee-sign"></i>&nbsp;1500</span></div>
                                                <h6 class="mb-0 mt-3 font-18 font-weight-normal">Average Order Value</h6>
                                            </div>
										</div>
                                    </div>
                                </div>
                            </div>
						
							<div class="col-4">
                                <div class="card card-fullheight" style="border:1px solid #7c1ab5">
									<div class="card-header cardhdd">
										<h5 class="box-title" style="color:#fff;"> Visitors </h5>
									</div>
                                    <div class="card-body">
                                        <div class="mb-5"><canvas id="donut_chart_1" style="height: 220px"></canvas></div>
                                        <div>
											<div class="flexbox mb-2">
                                                <div style="font-size:16px;"><span class="badge-point badge-primary rounded-0 mr-2"></span><span>Total</span></div><span class="h6 mb-0 font-16">500 Visitors</span>
                                            </div>
											<div class="flexbox mb-2">
                                                <div style="font-size:16px;"><span class="badge-point badge-danger rounded-0 mr-2"></span><span>Unique</span></div><span class="h6 mb-0 font-16">175 Visitors</span>
                                            </div>
                                            <div class="flexbox mb-2">
                                                <div style="font-size:16px;"><span class="badge-point badge-warning rounded-0 mr-2"></span><span>Return</span></div><span class="h6 mb-0 font-16">325 Visitors</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
							<div class="col-lg-8">
                                <div class="card card-fullheight" style="border:1px solid #7c1ab5">
									<div class="card-header cardhdd">
										<h5 class="box-title" style="color:#fff;"> COD Vs Online Sales </h5>
									</div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-3">
                                            <ul class="nav nav-pills nav-pills-links d-none d-sm-flex">
                                                <li class="nav-item"><a class="nav-link active" data-toggle="pill" href="#tab-1">Weekly</a></li>
                                                <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#tab-2">Monthly</a></li>
                                                <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#tab-3">Yearly</a></li>
                                            </ul>
                                        </div>
                                        <div id="bar_chart"></div>
                                        <div class="flexbox flex-wrap mt-5">
                                            <div class="d-flex mb-4 mb-sm-0">
                                                <div class="pr-4 pr-sm-5">
                                                    <h6 class="mb-2 font-15 text-muted">COD</h6>
                                                    <div class="h4 mb-0 text-primary"><i class="fas fa-rupee-sign"></i> 240.50</div>
                                                </div>
                                                <div class="pl-0 pl-sm-5">
                                                    <h6 class="mb-2 font-15 text-muted">Online</h6>
                                                    <div class="h4 mb-0 text-danger"><i class="fas fa-rupee-sign"></i> 625.50</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="col-lg-12">
								<div class="card" style="border:1px solid #7c1ab5">
									<div class="card-header cardhdd">
										<h5 class="box-title" style="color:#fff;"> Sales In India </h5>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-8 mb-5 mb-md-0">
												<div id="world_map" style="height: 340px;"></div>
											</div>
											<div class="col-md-4" style="font-size:16px;">
												<ul class="list-unstyled">
													<li class="flexbox mb-4"><span>Kolkata</span><span class="h6 mb-0"><i class="fas fa-rupee-sign"></i> 4200</span></li>
													<li class="flexbox mb-4"><span>Mumbai</span><span class="h6 mb-0"><i class="fas fa-rupee-sign"></i> 3820</span></li>
													<li class="flexbox mb-4"><span>Delhi</span><span class="h6 mb-0"><i class="fas fa-rupee-sign"></i> 3350</span></li>
												</ul>
												<div class="text-center"><a class="btn btn-primary clr btn-sm" href="#">View All</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
                                <div class="card" style="border:1px solid #cccccc;">
                                    <div class="card-body">
                                        <div class="card-fullwidth-block px-3">
                                            <div class="nav nav-pills flex-column faq-tabs" role="tablist">
												<a class="nav-link media align-items-center active" data-toggle="pill" href="#faq-group-1" role="tab">
													<i class="ft-check-square text-muted font-26 mr-3"></i>
													<div class="media-body">
														<div class="mb-1 h6">Top Categories</div>
													</div>
												</a>
												<a class="nav-link media align-items-center" data-toggle="pill" href="#faq-group-2" role="tab">
													<i class="ft-check-square text-muted font-26 mr-3"></i>
													<div class="media-body">
														<div class="mb-1 h6">Top Sub-Categories</div>
													</div>
												</a>
												<a class="nav-link media align-items-center" data-toggle="pill" href="#faq-group-3" role="tab">
													<i class="ft-gift text-muted font-26 mr-3"></i>
													<div class="media-body">
														<div class="mb-1 h6">Top Products</div>
													</div>
												</a>
												<a class="nav-link media align-items-center" data-toggle="pill" href="#faq-group-4" role="tab">
													<i class="ft-layers text-muted font-26 mr-3"></i>
													<div class="media-body">
														<div class="mb-1 h6">Total Orders</div>
													</div>
												</a>
												<a class="nav-link media align-items-center" data-toggle="pill" href="#faq-group-5" role="tab">
													<i class="ft-users text-muted font-26 mr-3"></i>
													<div class="media-body">
														<div class="mb-1 h6">Top Customers</div>
													</div>
												</a>
												<a class="nav-link media align-items-center" data-toggle="pill" href="#faq-group-6" role="tab">
													<i class="ft-tag text-muted font-26 mr-3"></i>
													<div class="media-body">
														<div class="mb-1 h6">Sales by Coupon Code </div>
													</div>
												</a>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="col-lg-9">
                                        <div class="tab-content">
                                            <div class="tab-pane fade active show" id="faq-group-1">
                                                <div class="card" style="border:1px solid #7c1ab5">
													<div class="card-header cardhdd">
														<h5 class="box-title" style="color:#fff;"> Top Categories </h5>
													</div>
													<div class="card-body">
														<div class="table-responsive">
															<table class="table table-bordered table-striped w-100" id="dt-buttons-category">
																<thead class="">
																	<tr>
																		<th>Category Name</th>
																		<th>Total Sales</th>
																		<th>Sales Amount</th>
																		<th>Location</th>
																		<th>Details</th>
																		<th>Download</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td><b>Fashion</b></td>
																		<td>5000</td>
																		<td><i class="fas fa-rupee-sign"></i> 4,57,000</td>
																		<td>Mumbai</td>
																		<td><button class="btn btn-vk btn-sm" type="button">View Deatils</button></td>
																		<td><button class="btn btn-ok btn-sm" type="button">Download Report</button></td>
																	</tr>
																	<tr>
																		<td><b>Home Utensils</b></td>
																		<td>4000</td>
																		<td><i class="fas fa-rupee-sign"></i> 3,92,000</td>
																		<td>Mumbai</td>
																		<td><button class="btn btn-vk btn-sm" type="button">View Deatils</button></td>
																		<td><button class="btn btn-ok btn-sm" type="button">Download Report</button></td>
																	</tr>
																	<tr>
																		<td><b>Electronics</b></td>
																		<td>3850</td>
																		<td><i class="fas fa-rupee-sign"></i> 3,59,253</td>
																		<td>Mumbai</td>
																		<td><button class="btn btn-vk btn-sm" type="button">View Deatils</button></td>
																		<td><button class="btn btn-ok btn-sm" type="button">Download Report</button></td>
																	</tr>
																	<tr>
																		<td><b>Jewellery</b></td>
																		<td>3520</td>
																		<td><i class="fas fa-rupee-sign"></i> 3,19,283</td>
																		<td>Mumbai</td>
																		<td><button class="btn btn-vk btn-sm" type="button">View Deatils</button></td>
																		<td><button class="btn btn-ok btn-sm" type="button">Download Report</button></td>
																	</tr>
																	<tr>
																		<td><b>Cosmetics</b></td>
																		<td>3000</td>
																		<td><i class="fas fa-rupee-sign"></i> 3,00,000</td>
																		<td>Mumbai</td>
																		<td><button class="btn btn-vk btn-sm" type="button">View Deatils</button></td>
																		<td><button class="btn btn-ok btn-sm" type="button">Download Report</button></td>
																	</tr>
																	<tr>
																		<td><b>Furniture</b></td>
																		<td>2500</td>
																		<td><i class="fas fa-rupee-sign"></i> 2,56,698</td>
																		<td>Mumbai</td>
																		<td><button class="btn btn-vk btn-sm" type="button">View Deatils</button></td>
																		<td><button class="btn btn-ok btn-sm" type="button">Download Report</button></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
                                            </div>
                                            <div class="tab-pane fade" id="faq-group-2">
                                                <div class="card" style="border:1px solid #7c1ab5">
													<div class="card-header cardhdd">
														<h5 class="box-title" style="color:#fff;"> Top Sub-Categories </h5>
													</div>
													<div class="card-body">
														<div class="table-responsive">
															<table class="table table-bordered table-striped w-100" id="dt-buttons-sub-category">
																<thead class="">
																	<tr>
																		<th>Category Name</th>
																		<th>Sub-Category Name</th>
																		<th>Total Sales</th>
																		<th>Sales Amount</th>
																		<th>Location</th>
																		<th>Details</th>
																		<th>Download</th>
																	</tr>
																</thead>
																<tbody>
																<?php
																	for($i=0;$i<=10;$i++){
																?>
																	<tr>
																		<td>Fashion</td>
																		<td><b>Men Clothing</b></td>
																		<td>150</td>
																		<td><i class="fas fa-rupee-sign"></i> 3,92,000</td>
																		<td>Mumbai</td>
																		<td><button class="btn btn-vk btn-sm" type="button">View Deatils</button></td>
																		<td><button class="btn btn-ok btn-sm" type="button">Download Report</button></td>
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
                                            <div class="tab-pane fade" id="faq-group-3">
                                                <div class="card" style="border:1px solid #7c1ab5">
													<div class="card-header cardhdd">
														<h5 class="box-title" style="color:#fff;"> Top Products </h5>
													</div>
													<div class="card-body">
														<div class="table-responsive">
															<table class="table table-bordered table-striped w-100" id="dt-buttons-product">
																<thead class="">
																	<tr>
																		<th>Product Name</th>
																		<th>Product Image</th>
																		<th>Customer Name</th>
																		<th>Total Products Bought</th>
																		<th>Sales Amount</th>
																		<th>Location</th>
																		<th>Date</th>
																		<th>Details</th>
																		<th>Download</th>
																	</tr>
																</thead>
																<tbody>
																<?php
																	for($i=0;$i<=10;$i++){
																?>
																	<tr>
																		<td><b>Nike Running Black shoe</b></td>
																		<td><img class="ml-3 rounded-circle" src="images/vendor-images/nike.png" alt="image" width="65"></td>
																		<td>Becky Brooks</td>
																		<td>50</td>
																		<td><i class="fas fa-rupee-sign"></i> 1,75,000</td>
																		<td>Mumbai</td>
																		<td>17.05.2018</td>
																		<td><button class="btn btn-vk btn-sm" type="button">View Deatils</button></td>
																		<td><button class="btn btn-ok btn-sm" type="button">Download Report</button></td>
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
                                            <div class="tab-pane fade" id="faq-group-4">
                                                <div class="card" style="border:1px solid #7c1ab5">
													<div class="card-header cardhdd">
														<h5 class="box-title" style="color:#fff;"> Total Orders </h5>
													</div>
													<div class="card-body">
														<div class="col-md-12">
															<div class="row" style="border-bottom:1px solid #CCC;margin-bottom:30px;padding-bottom:15px;">
																<div class="col-md-3 " style="padding:3px !important;">
																	<label for="validationCustom04">Age Group</label>
																	<div class="dropdown bootstrap-select form-control mb-3">
																		<select class="selectpicker form-control mb-3" data-style="btn-light btn-light-solid" tabindex="-98">
																			<option>Below 18</option>
																			<option selected>18-35</option>
																			<option>36-50</option>
																			<option>Above 50</option>
																		</select>
																	</div>
																</div>
																<div class="col-md-3 " style="padding:3px !important;">
																	<label class="active">From</label>
																	<input class="form-control form-control-solid" id="datetimepicker_1" type="text" placeholder="Select Date">
																</div>
																<div class="col-md-3 " style="padding:3px !important;">
																	<label for="validationCustom04" class="active">To</label>
																	<input class="form-control form-control-solid" id="datetimepicker_2" type="text" placeholder="Select Date">
																</div>
																<div class="col-md-3 " style="padding:3px !important;">
																	<button class="btn btn-primary btn-block clr" style="margin-top: 27px;" type="submit"><span class="btn-icon"><i class="ft-search"></i>Search</span></button>
																</div>
															</div> <!-- row ends-->
														</div><!-- col-md-12 ends -->
														<div class="table-responsive">
															<table class="table table-bordered table-striped w-100" id="dt-buttons-order">
																<thead class="">
																	<tr>
																		<th>Order ID</th>
																		<th>Customer Name</th>
																		<th>Product Name</th>
																		<th>Product Image</th>
																		<th>Sales Amount</th>
																		<th>Location</th>
																		<th>Status</th>
																		<th>Date</th>
																		<th>Details</th>
																		<th>Download</th>
																	</tr>
																</thead>
																<tbody>
																<?php
																	for($i=0;$i<=10;$i++){
																?>
																	<tr>
																		<td><b><a href="javascript:;">#1254</a></b></td>
																		<td>Becky Brooks</td>
																		<td>Nike Running Black shoe</td>
																		<td><img class="ml-3 rounded-circle" src="images/vendor-images/nike.png" alt="image" width="65"></td>
																		<td><i class="fas fa-rupee-sign"></i> 3500</td>
																		<td><span class="badge badge-success badge-pill">Shipped</span></td>
																		<td>Paid</td>
																		<td>17.05.2018</td>
																		<td><button class="btn btn-vk btn-sm" type="button">View Deatils</button></td>
																		<td><button class="btn btn-ok btn-sm" type="button">Download Report</button></td>
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
                                            <div class="tab-pane fade" id="faq-group-5">
                                                <div class="card" style="border:1px solid #7c1ab5">
													<div class="card-header cardhdd">
														<h5 class="box-title" style="color:#fff;"> Top Customers </h5>
													</div>
													<div class="card-body">
														<div class="table-responsive">
															<table class="table table-bordered table-striped w-100" id="dt-buttons-customer">
																<thead class="">
																	<tr>
																		<th>Customer ID</th>
																		<th>Customer Name</th>
																		<th>Total Sales</th>
																		<th>Sales Amount</th>
																		<th>Location</th>
																		<th>Details</th>
																		<th>Download</th>
																	</tr>
																</thead>
																<tbody>
																<?php
																	for($i=1;$i<=11;$i++){
																?>
																	<tr>
																		<td><a href="javascript:;">#<?php echo $i;?></a></td>
																		<td><b>Becky Brooks</b></td>
																		<td>20</td>
																		<td><i class="fas fa-rupee-sign"></i> 78,698</td>
																		<td>Delhi</td>
																		<td><button class="btn btn-vk btn-sm" type="button">View Deatils</button></td>
																		<td><button class="btn btn-ok btn-sm" type="button">Download Report</button></td>
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
											<div class="tab-pane fade" id="faq-group-6">
                                                <div class="card" style="border:1px solid #7c1ab5">
													<div class="card-header cardhdd">
														<h5 class="box-title" style="color:#fff;"> Sales by Coupon Code  </h5>
													</div>
													<div class="card-body">
														<div class="table-responsive">
															<table class="table table-bordered table-striped w-100" id="dt-buttons-coupon">
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
																<?php
																	for($i=1;$i<=11;$i++){
																?>
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
                    </div><!-- END: Page content-->
                </div><!-- BEGIN: Footer-->
                <?php include('common/footer.php');?><!-- END: Footer-->
            </div><!-- END: Content-->
        </div>
    </div><!-- BEGIN: Search form-->
    <!-- BEGIN: Page backdrops-->
    <!-- CORE PLUGINS-->
	<?php include('common/scripts.php');?>
    <script src="js/vendor-js/moment.min.js"></script>
    <script src="js/vendor-js/daterangepicker.js"></script>
    <script src="js/vendor-js/Chart.min.js"></script>
    <script src="js/vendor-js/jquery.easypiechart.min.js"></script>
    <script src="js/vendor-js/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="js/vendor-js/jquery-jvectormap-in-mill.js"></script>
    <script src="js/vendor-js/datatables.min.js"></script><!-- CORE SCRIPTS-->
	<script src="js/vendor-js/apexcharts.min.js"></script>
	<script src="js/vendor-js/bootstrap-datetimepicker.min.js"></script>
    



	<script>
        $(function() {
			$("#datetimepicker_1, #datetimepicker_2, #datetimepicker_3, #datetimepicker_4").datetimepicker({
				todayHighlight: !0,
				autoclose: !0,
				format: "yyyy.mm.dd",
			});

            var MONTHS_SH = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            var color = Chart.helpers.color;
            (function() {
                var dr = $('#subheader_daterange');
                if (dr.length) {
                    var t = moment();
                    var a = moment();
                    dr.daterangepicker({
                            startDate: t,
                            endDate: a,
                            ranges: {
                                'Today': [moment(), moment()],
                                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                                'This Month': [moment().startOf('month'), moment().endOf('month')],
                                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                            },
                        }, f),
                        f(t, a, "");
                }

                function f(t, a, r) {
                    var o = "",
                        n = "";
                    a - t < 100 || "Today" == r ?
                        (o = "Today:", n = t.format("MMM D")) :
                        "Yesterday" == r ? (o = "Yesterday:", n = t.format("MMM D")) :
                        n = t.format("MMM D") + " - " + a.format("MMM D"), dr.find(".subheader-daterange-date").html(n), dr.find(".subheader-daterange-title").html(o)
                }
            })();
			/* Easypie Chart Starts */
			$('.easypie').each(function() {
                $(this).easyPieChart({
                    trackColor: $(this).attr('data-trackColor') || '#f2f2f2',
                    scaleColor: false,
                });
            });
			/* Easypie Chart Ends */
			/* Doughnut Starts*/
            if ($('#donut_chart_1').length) {
                var ctx = document.getElementById("donut_chart_1").getContext("2d");
                new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: ["Total", 'Unique', 'Return'],
                        datasets: [{
                            data: [500, 175, 325],
                            backgroundColor: [
                                theme_color('primary'),
                                theme_color('danger'),
                                color(theme_color('primary')).alpha(0.4).rgbString(),
                            ],
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            display: false
                        },
                        cutoutPercentage: 65,
                    }
                });
            }
			/* Doughnut Ends */
			/* Line Chart 1 Starts */
			 if ($('#line_chart_1').length) {
                var options = {
                    chart: {
                        height: 350,
                        width: "100%",
                        type: "line",
                    },
                    series: [{
                        name: "Series 1",
                        data: [34, 43, 31, 63, 45, 75, 50, 77],
                    }],
                    dataLabels: {
                        enabled: true,
                        offsetY: -3,
                    },
                    colors: [theme_color('purple'), theme_color('pink')],
                    stroke: {
                        curve: 'smooth',
                        width: 3,
                    },
                    fill: {
                        type: 'gradient',
                        gradient: {
                            shade: 'dark',
                            type: "horizontal",
                            shadeIntensity: 0.5,
                            gradientToColors: [theme_color('pink')],
                            inverseColors: true,
                            opacityFrom: 1,
                            opacityTo: 1,
                            stops: [0, 50, 100],
                            colorStops: []
                        },
                    },
                };
                var chart = new ApexCharts(document.querySelector("#line_chart_1"), options);
                chart.render();
            }
			/* Line Chart 1 Ends */
			/* Bar Chart Starts */
			if ($('#bar_chart').length) {
                var options = {
                    chart: {
                        height: 325,
                        type: 'bar',
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            endingShape: 'rounded',
                            columnWidth: '55%',
                        },
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        show: true,
                        width: 4,
                        colors: ['transparent']
                    },
                    colors: [
                        color(theme_color('primary')).alpha(0.9).rgbString(),
                        color(theme_color('primary')).alpha(0.4).rgbString(),
                    ],
                    series: [{
                        name: 'COD',
                        data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
                    }, {
                        name: 'Online',
                        data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
                    }],
                    xaxis: {
                        categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                    },
                    yaxis: {
                        title: {
                            text: 'Rs. (sales)'
                        }
                    },
                    fill: {
                        opacity: 1
                    },
                    legend: {
                        position: 'top'
                    },
                    tooltip: {
                        y: {
                            formatter: function(val) {
                                return "Rs." + val + " sales"
                            }
                        }
                    }
                }
                var chart = new ApexCharts(
                    document.querySelector("#bar_chart"),
                    options
                );
                chart.render();
            }
			/* Bar Chart Ends */
            /* MAP STARTS */
            if ($('#world_map').length) {
                var markers = [{
                        latLng: [22.5726, 88.3639],
                        name: 'Kolkata',
                        visits: 1000
                    },
                    {
                        latLng: [19.0760, 72.8777],
                        name: 'Mumbai',
                        visits: 1000
                    },
                    {
                        latLng: [28.7041, 77.1025],
                        name: 'Delhi',
                        visits: 1000
                    },
                ];
                $('#world_map').vectorMap({
                    map: 'in_mill',
                    backgroundColor: 'transparent',
                    scale: 5,
                    focusOn: {
                        scale: 1,
                        x: 0.5,
                        y: 0.5,
                    },
                    regionStyle: {
                        initial: {
                            fill: '#DADDE0',
                        }
                    },
                    markers: markers,
                    markerStyle: {
                        initial: {
                            fill: theme_color('primary'), // '#ff4081',
                            stroke: '#b9d0ff', // '#ffc6d9',
                            "stroke-width": 5,
                            r: 8
                        },
                        hover: {
                            fill: theme_color('primary'),
                            stroke: '#b9d0ff',
                        }
                    },
                    onMarkerTipShow: function(e, label, index) {
                        label.html('' + markers[index].name + ' (Visits - ' + markers[index].visits);
                    },
                });
            }
			/* MAP ENDS */
			
			/* DataTable Starts */
		    $('#dt-buttons-category').DataTable({
			  "searching": true,
			  "pageLength":10,
			  scrollX: true,
			  dom: 'Bfrtip',
			  buttons: [
				'excel', 'pdf', 'csv'
				]
			});
			$('#dt-buttons-sub-category').DataTable({
			  "searching": true,
			  "pageLength":10,
			  scrollX: true,
			  dom: 'Bfrtip',
			  buttons: [
				'excel', 'pdf', 'csv'
				]
			});
           $('#dt-buttons-order').DataTable({
			  "searching": true,
			  "pageLength":10,
			  scrollX: true,
			  dom: 'Bfrtip',
			  buttons: [
				'excel', 'pdf', 'csv'
				]
			});
			$('#dt-buttons-product').DataTable({
			  "searching": true,
			  "pageLength":10,
			  scrollX: true,
			  dom: 'Bfrtip',
			  buttons: [
				'excel', 'pdf', 'csv'
				]
			});
			$('#dt-buttons-customer').DataTable({
			  "searching": true,
			  "pageLength":10,
			  scrollX: true,
			  dom: 'Bfrtip',
			  buttons: [
				'excel', 'pdf', 'csv'
				]
			
			});
			$('#dt-buttons-coupon').DataTable({
			  "searching": true,
			  "pageLength":10,
			  scrollX: true,
			  dom: 'Bfrtip',
			  buttons: [
				'excel', 'pdf', 'csv'
				]
			
			});
			
			$(".dt-buttons").removeClass("btn-group");
			 
			$('a[data-toggle="pill"]').on('shown.bs.tab', function(e){
				  $($.fn.dataTable.tables(true)).DataTable()
					 .columns.adjust();
			 }); 
           /* DataTable ENDS */
            
        });
    </script>
</body>

</html>