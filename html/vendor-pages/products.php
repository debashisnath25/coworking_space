<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/favicon.png' type='image/x-icon'/ >
    <title>Products | Wanted 7</title>
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
	  .faq-tabs .nav-link {
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
			  	<!-- top section -->
				<div class="row">
					<div class="col-3">
						<div class="card">
							<div class="card-body text-white" style="background-image: linear-gradient(45deg,#f39c12 0,#e91e63 100%);">
								<div class="d-flex justify-content-between mb-5">
									<div>
										<h5 class="box-title mb-2">New Orders</h5>
										<div class="text-light font-13">From 14.12 - 21.12</div>
									</div><i class="ti-shopping-cart text-white-50 font-40"></i>
								</div>
								<div class="flexbox mb-2">
									<div class="h4 mb-0">+620</div><span class="text-white font-18"><i class="ti-arrow-top-right mr-2"></i>24.05%</span>
								</div>
								<div class="text-light">AVG. order value - <span style="font-family:arial;">&#x20b9;</span> 54</div>
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between mb-5">
									<div>
										<h5 class="box-title mb-2">Earnings</h5>
										<div class="text-muted font-13">From 14.12 - 21.12</div>
									</div><a class="text-muted" href="#">&nbsp;</a>
								</div>
								<div class="flexbox mb-4 pb-3">
									<div class="h4 mb-0"><span style="font-family:arial;">&#x20b9;</span> 7450.40</div><span class="text-success font-18"><i class="ti-arrow-top-right mr-2"></i>24.05%</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-3">
						<div class="card">
							<div class="card-body text-white bg-purple-300">
								<div class="d-flex justify-content-between mb-5">
									<div>
										<h5 class="box-title mb-2">Orders Decline</h5>
										<div class="text-light font-13">From 14.12 - 21.12</div>
									</div><i class="ti-shopping-cart text-white-50 font-40"></i>
								</div>
								<div class="flexbox mb-2">
									<div class="h4 mb-0">+620</div><span class="text-white font-18"><i class="ti-arrow-top-right mr-2"></i>24.05%</span>
								</div>
								<div class="text-light">AVG. order value - <span style="font-family:arial;">&#x20b9;</span> 54</div>
							</div>
						</div>
					</div>
					<div class="col-3">
						<a href="add_products.php" class="btn btn-primary btn-block"><span class="btn-icon"><i class="ft-plus"></i>Add Product</span></a>
						<a href="add_category.php" class="btn btn-outline-primary border-2x btn-block" style="margin-top: 20px;"><span class="btn-icon"><i class="ft-search"></i>Manage Categories</span></a>
					</div>
				</div>
				<!-- top section ends -->

				 <div class="row">
					<div class="col-lg-3">
					  <div class="card" style="border:1px solid #cccccc;">
						<div class="card-body">
						  <div class="card-fullwidth-block px-3">
							<div class="nav nav-pills flex-column faq-tabs" role="tablist">
							  <a class="nav-link media align-items-center active"  href="orders.php" >
								<i class="ti-shopping-cart text-muted font-26 mr-3">
								</i>
								<div class="media-body">
								  <div class="mb-1 h6" style="font-size:12px;"> Drafts
								  </div>
								  <div class="text-muted faq-item-text font-12">14 Products
								  </div>
								</div>
							  </a>
							  <a class="nav-link media align-items-center"  href="#" >
								<i class="ti-briefcase text-muted font-26 mr-3">
								</i>
								<div class="media-body">
								  <div class="mb-1 h6" style="font-size:12px;">Sent For Approval
								  </div>
								  <div class="text-muted faq-item-text font-12">14 Products
								  </div>
								</div>
							  </a>
							  <a class="nav-link media align-items-center" href="#" >
								<i class="ti-clipboard text-muted font-26 mr-3">
								</i>
								<div class="media-body">
								  <div class="mb-1 h6" style="font-size:12px;">Approved
								  </div>
								  <div class="text-muted faq-item-text font-12">14 Products
								  </div>
								</div>
							  </a>
							  <a class="nav-link media align-items-center"  href="#" >
								<i class="ti-truck text-muted font-26 mr-3">
								</i>
								<div class="media-body">
								  <div class="mb-1 h6" style="font-size:12px;">Unapproved / Rejected
								  </div>
								  <div class="text-muted faq-item-text font-12">14 Products
								  </div>
								</div>
							  </a>
							  <a class="nav-link media align-items-center"  href="#" >
								<i class="ti-thumb-up text-muted font-26 mr-3">
								</i>
								<div class="media-body">
								  <div class="mb-1 h6" style="font-size:12px;">Archieve / Deleted
								  </div>
								  <div class="text-muted faq-item-text font-12">14 Products
								  </div>
								</div>
							  </a>
								<a class="nav-link media align-items-center"  href="#" >
								<i class="ti-lock text-muted font-26 mr-3">
								</i>
								<div class="media-body">
								  <div class="mb-1 h6" style="font-size:12px;"> Live Products (Enable / Disable)
								  </div>
								  <div class="text-muted faq-item-text font-12">14 Products
								  </div>
								</div>
							  </a>
							  
							  
							</div>
						  </div>
						</div>
					  </div>
					</div>

					<div class="col-lg-9">
						<div class="card" style="border:1px solid #7c1ab5">
							<div class="card-header cardhdd">
								<h5 class="box-title" style="color:#fff;">Saved Products Lists</h5>
								<div class="card-actions"><a class="card-collapse"><i class="ti-angle-down"></i></a></div>
							</div>

                            <div class="card-body">
								<div class="col-md-12">
									<div class="row" style="border-bottom:1px solid #CCC;margin-bottom:30px;padding-bottom:15px;">
										<div class="col-md-2 " style="padding:3px !important;">
											<label for="validationCustom04" class="active">Product Name</label>
											<input class="form-control form-control-solid" id="validationCustom04" type="text" placeholder="Enter product name" required="">
										</div>
										<div class="col-md-2 " style="padding:3px !important;">
											<label for="validationCustom04">Availablity</label>
											<div class="dropdown bootstrap-select form-control mb-3">
												<select class="selectpicker form-control mb-3" data-style="btn-light btn-light-solid" tabindex="-98">
													<option selected="" disabled="">Approved</option>
													<option>Declined</option>
													<option>Pending</option>
												</select>
											</div>
										</div>
										<div class="col-md-2 " style="padding:3px !important;">
											<label class="active">From</label>
											<input class="form-control form-control-solid" id="datetimepicker_1" type="text" placeholder="Select Date">
										</div>
										<div class="col-md-2 " style="padding:3px !important;">
											<label for="validationCustom04" class="active">To</label>
											<input class="form-control form-control-solid" id="datetimepicker_2" type="text" placeholder="Select Date">
										</div>
										<div class="col-md-2 " style="padding:3px !important;">
											<label for="validationCustom04"> &nbsp;</label>
											<div class="dropdown bootstrap-select form-control mb-3">
												<select class="selectpicker form-control mb-3" data-style="btn-light btn-light-solid" tabindex="-98">
													<option selected="" disabled="">Filters</option>
													<option>Any</option>
													<option>Out of Stock</option>
													<option>In Stock</option>
												</select>
											</div>
										</div>
										<div class="col-md-2 " style="padding:3px !important;">
											<button class="btn btn-primary btn-block clr" style="margin-top: 27px;" type="submit"><span class="btn-icon"><i class="ft-search"></i>Search</span></button>
										</div>
									</div> <!-- row ends-->
								</div><!-- col-md-12 ends -->


                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped w-100" id="dt-buttons">
                                        <thead class="">
                                            <tr>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Stock Status</th>
												<th>Product Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href=""><img src="images/vendor-images/m-83399-0000-levi-s-original-imafeypp8uphnhfm.jpeg" class="img-responsive" style="height:100px;"></a></td>
                                                <td>
													<a href="discount_details.html" > <b> Mens Tshirt Casual </b> </a>
												
												</td>
                                                <td> <b> 599.00 </b> INR</td>
                                                <td><b>20</b> in Stock</td>
												<td> <span class="badge badge-success badge-pill">Confirmed</span> </td>
												<td>
													<button class="btn btn-ok btn-sm" type="button">Edit &nbsp;&nbsp;<i class="fa fa-pen" style="font-size:11px;"></i></button>
													<button class="btn btn-ok btn-sm" type="button"><i class="fa fa-trash" style="font-size:11px;"></i></button>
												</td>
                                            </tr>

											<tr>
                                                <td><a href=""><img src="images/vendor-images/galaxy-s8.png" class="img-responsive" style="height:100px;"></a></td>
                                                <td>
													<a href="discount_details.html" > <b> Gallaxy S8</b> </a>
												
												</td>
                                                <td> <b> 15999.00 </b> INR</td>
                                                <td> <b style="color:red;">Out of Stock </b> </td>
												<td> <span class="badge badge-success badge-pill">Confirmed</span> </td>
												<td>
													<button class="btn btn-ok btn-sm" type="button">Edit &nbsp;&nbsp;<i class="fa fa-pen" style="font-size:11px;"></i></button>
													<button class="btn btn-ok btn-sm" type="button"><i class="fa fa-trash" style="font-size:11px;"></i></button>
												</td>
                                            </tr>

											<tr>
                                                <td><a href=""><img src="images/vendor-images/m-83399-0000-levi-s-original-imafeypp8uphnhfm.jpeg" class="img-responsive" style="height:100px;"></a></td>
                                                <td>
													<a href="discount_details.html" > <b> Mens Tshirt Casual </b> </a>
												
												</td>
                                                <td> <b> 599.00 </b> INR</td>
                                                <td><b>20</b> in Stock</td>
												<td> <span class="badge badge-success badge-pill">Confirmed</span> </td>
												<td>
													<button class="btn btn-ok btn-sm" type="button">Edit &nbsp;&nbsp;<i class="fa fa-pen" style="font-size:11px;"></i></button>
													<button class="btn btn-ok btn-sm" type="button"><i class="fa fa-trash" style="font-size:11px;"></i></button>
												</td>
                                            </tr>

											<tr>
                                                <td><a href=""><img src="images/vendor-images/galaxy-s8.png" class="img-responsive" style="height:100px;"></a></td>
                                                <td>
													<a href="discount_details.html" > <b> Gallaxy S8</b> </a>
												
												</td>
                                                <td> <b> 15999.00 </b> INR</td>
                                                <td> <b style="color:red;">Out of Stock </b> </td>
												<td> <span class="badge badge-success badge-pill">Confirmed</span> </td>
												<td>
													<button class="btn btn-ok btn-sm" type="button">Edit &nbsp;&nbsp;<i class="fa fa-pen" style="font-size:11px;"></i></button>
													<button class="btn btn-ok btn-sm" type="button"><i class="fa fa-trash" style="font-size:11px;"></i></button>
												</td>
                                            </tr>

											<tr>
                                                <td><a href=""><img src="images/vendor-images/m-83399-0000-levi-s-original-imafeypp8uphnhfm.jpeg" class="img-responsive" style="height:100px;"></a></td>
                                                <td>
													<a href="discount_details.html" > <b> Mens Tshirt Casual </b> </a>
												
												</td>
                                                <td> <b> 599.00 </b> INR</td>
                                                <td><b>20</b> in Stock</td>
												<td> <span class="badge badge-warning badge-pill" style="color:#fff;">Pending</span> </td>
												<td>
													<button class="btn btn-ok btn-sm" type="button">Edit &nbsp;&nbsp;<i class="fa fa-pen" style="font-size:11px;"></i></button>
													<button class="btn btn-ok btn-sm" type="button"><i class="fa fa-trash" style="font-size:11px;"></i></button>
												</td>
                                            </tr>

											<tr>
                                                <td><a href=""><img src="images/vendor-images/galaxy-s8.png" class="img-responsive" style="height:100px;"></a></td>
                                                <td>
													<a href="discount_details.html" > <b> Gallaxy S8</b> </a>
												
												</td>
                                                <td> <b> 15999.00 </b> INR</td>
                                                <td><b>20</b> in Stock</td>
												<td> <span class="badge badge-success badge-pill">Confirmed</span> </td>
												<td>
													<button class="btn btn-ok btn-sm" type="button">Edit &nbsp;&nbsp;<i class="fa fa-pen" style="font-size:11px;"></i></button>
													<button class="btn btn-ok btn-sm" type="button"><i class="fa fa-trash" style="font-size:11px;"></i></button>
												</td>
                                            </tr>

											<tr>
                                                <td><a href=""><img src="images/vendor-images/m-83399-0000-levi-s-original-imafeypp8uphnhfm.jpeg" class="img-responsive" style="height:100px;"></a></td>
                                                <td>
													<a href="discount_details.html" > <b> Mens Tshirt Casual </b> </a>
												
												</td>
                                                <td> <b> 599.00 </b> INR</td>
                                                <td><b>20</b> in Stock</td>
												<td> <span class="badge badge-success badge-pill">Confirmed</span> </td>
												<td>
													<button class="btn btn-ok btn-sm" type="button">Edit &nbsp;&nbsp;<i class="fa fa-pen" style="font-size:11px;"></i></button>
													<button class="btn btn-ok btn-sm" type="button"><i class="fa fa-trash" style="font-size:11px;"></i></button>
												</td>
                                            </tr>

											<tr>
                                                <td><a href=""><img src="images/vendor-images/galaxy-s8.png" class="img-responsive" style="height:100px;"></a></td>
                                                <td>
													<a href="discount_details.html" > <b> Gallaxy S8</b> </a>
												
												</td>
                                                <td> <b> 15999.00 </b> INR</td>
                                                <td><b>20</b> in Stock</td>
												<td> <span class="badge badge-danger badge-pill">Declined</span> </td>
												<td>
													<button class="btn btn-ok btn-sm" type="button">Edit &nbsp;&nbsp;<i class="fa fa-pen" style="font-size:11px;"></i></button>
													<button class="btn btn-ok btn-sm" type="button"><i class="fa fa-trash" style="font-size:11px;"></i></button>
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
            <!-- END: Page content-->
          </div>
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
		  "pageLength":5,
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
