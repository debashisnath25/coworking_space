<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/favicon.png' type='image/x-icon'/ >
    <title>Booking Details | Bundesk</title>
    <?php
		include("common/metalinks.php");
	?>
	<link href="css/vendor-css/horizontal-timeline.css" rel="stylesheet" /><!-- THEME STYLES-->
	 <link href="css/vendor-css/form-wizard.css" rel="stylesheet" />
	<style>
	#dt-buttons_filter {
		display:none;
	  }
	  .dt-buttons {
	  	padding-bottom:15px;
	  }
	  .invoice {
		padding-top: 4.8rem;
		padding-bottom: 4.8rem;
		}
		.invoice-table td, .invoice-table th {
		padding: 1rem;
		vertical-align: middle;
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
            <div class="page-heading" style="padding-left:17px;">
              <div class="page-breadcrumb">
                <h1 class="page-title"><a href="dashboard.php">Dashboard </a>> <a href="booking_details.php">Booking</a>> Booking details
                </h1>
              </div>
            </div>
            <!-- BEGIN: Page content-->
            <div>

			  <div class="col-lg-12">
				<!--<div class="alert alert-success has-icon" role="alert"><i class="la la-check alert-icon"></i> Success!</div>
				<div class="alert alert-danger has-icon" role="alert"><i class="la la-info-circle alert-icon"></i> Failed!</div>-->
				<div class="card card-fullheight" style="bBooking:1px solid #7c1ab5">
					<div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">Booking Details: &nbsp;<b>#108737NT</b></h5>
						
					</div>
						<div class="card-body pull-right" >
							<div class="row mb-4 " style="padding-left:10px;">
                                    <div class="col-md-3 mb-4">
                                        <h5 class="text-primary mb-3">Customer Information</h5>
                                        <div class="font-15 text-muted">
                                            <div class=" text-muted">James Peter</div>
                                            <div class=" text-muted">0123456789</div>
											<div class=" text-muted">abc@gmail.com</div>
                                        </div>
                                    </div>
									<div class="col-md-2 mb-4">
                                        <h5 class="text-primary mb-3">Payment Details</h5>
                                        <div class="font-15 text-muted">
                                            <div class=" text-muted"><b>Online Payment</b></div>
                                           
                                        </div>
                                    </div>
									<div class="col-md-2 mb-4">
                                        <h5 class="text-primary mb-3">Booking Status</h5>
                                        <div class="font-15 text-muted">
                                          <div class=" text-muted"><b>Accepted</b></div>
                                        </div>
                                    </div>
									<div class="col-md-3 mb-4" style="margin:0px !important;">
                                        <h5 class="text-primary mb-3">Address</h5>
                                        <div class="font-15 text-muted">
                                          <div class=" text-muted">Biltmore Hotel And Suites Santa Clara Hotel</div>
										  <div class=" text-muted">2151 Laurewood Road</div>
										  <div class=" text-muted">Santa Clara,CA 95054-2754</div>
										  <div class=" text-muted">United States</div>
                                           
                                        </div>
                                    </div>
								
									<div class="col-md-2 mb-4">
										
										<button class="btn btn-warning " style="background:#eb5757;color:#fff;" type="submit">Cancel Booking </button></h5>
									</div>
							</div>						
							<div class="card-fullwidth-block mx-sm-0 mt-4" style="padding:0 !important;bBooking: 1px solid #cccccc;">
                                    <div class="table-responsive">
                                        <table class="table invoice-table">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Product Id</th>
													<th>Product Name</th>
													<th>QTY</th>
                                                    <th>Unit Price</th>
                                                    <th>Discount</th>
                                                    <th class="text-right">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-none d-sm-block">108737NT</div>
                                                    </td>
													<td>
                                                        <div class="d-none d-sm-block">Work with us</div>
                                                    </td>
                                                    <td>4</td>
                                                    <td><span style="font-family:arial;">&#8377;</span> 70.00</td>
													  <td><span style="font-family:arial;">&#8377;</span>0.00</td>
                                                    <td class="text-right"><span style="font-family:arial;">&#8377;</span>2000.00</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="6"></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                               
								<div class="d-flex justify-content-end">
                                    <div class="text-right mr-3" style="width:400px;">
										<div class="row mb-3">
                                            <div class="col-9">Total Price :</div>
                                            <div class="col-3"><b><span style="font-family:arial;">&#8377;</span>2000</b></div>
                                        </div>
										<div class="row mb-3">
                                            <div class="col-9">Taxes (GST):</div>
                                            <div class="col-3"><b><span style="font-family:arial;">&#8377;</span>47</b></div>
                                        </div>
										<div class="row mb-3">
                                            <div class="col-9">Total Amount with Taxes:</div>
                                            <div class="col-3"><b><span style="font-family:arial;">&#8377;</span>2047</b></div>
                                        </div>
										
                                        
                                        <div class="row font-weight-strong font-20 align-items-center text-primary mb-4">
                                            <div class="col-9">Total Price:</div>
                                            <div class="col-3">
                                                <div class="h3 "><span style="font-family:arial;">&#8377;</span>2047</div>
                                            </div>
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
	<link href="css/vendor-js/horizontal-timeline.js" rel="stylesheet" /><!-- THEME STYLES-->
  </body>
</html>
