<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/favicon.png' type='image/x-icon'/ >
    <title>Settings | Wanted 7</title>
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
            <div>

			  <div class="col-lg-12">
				<!--<div class="alert alert-success has-icon" role="alert"><i class="la la-check alert-icon"></i> Success!</div>
				<div class="alert alert-danger has-icon" role="alert"><i class="la la-info-circle alert-icon"></i> Failed!</div>-->
				<div class="card card-fullheight" style="border:1px solid #7c1ab5">
					<div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">Order Details: &nbsp;<b>#108737NT</b></h5>
						
					</div>
						<div class="card-body pull-right" >
							<div class="row mb-4 " style="padding-left:10px;">
                                    <div class="col-md-3 mb-4">
                                        <h5 class="text-primary mb-3">Coustomer Information</h5>
                                        <div class="font-15 text-muted">
                                            <div class=" text-muted">James Peter</div>
                                            <div class=" text-muted">60 Mulberry St. Ontario, CA 91762</div>
                                            <div class=" text-muted">Phone: (123) 422-1443</div>
                                            <div class=" text-muted">Email: jamespeter@gmail.com</div>
                                        </div>
                                    </div>
									<div class="col-md-2 mb-4">
                                        <h5 class="text-primary mb-3">Payment Details</h5>
                                        <div class="font-15 text-muted">
                                            <div class=" text-muted"><b>Online Payment</b></div>
                                           
                                        </div>
                                    </div>
									<div class="col-md-2 mb-4">
                                        <h5 class="text-primary mb-3">Order Status</h5>
                                        <div class="font-15 text-muted">
                                          <div class=" text-muted"><span class="badge badge-pill badge-danger">Shipped</span></div>
                                        </div>
                                    </div>
									<div class="col-md-3 mb-4" style="margin:0px !important;">
                                        <h5 class="text-primary mb-3">Delivery Details</h5>
                                        <div class="font-15 text-muted">
                                          <div class=" text-muted">Biltmore Hotel And Suites Santa Clara Hotel</div>
										  <div class=" text-muted">2151 Laurewood Road</div>
										  <div class=" text-muted">Santa Clara,CA 95054-2754</div>
										  <div class=" text-muted">United States</div>
                                           
                                        </div>
                                    </div>
								
									<div class="col-md-2 mb-4">
										
										<button class="btn btn-warning " style="background:#eb5757;color:#fff;" type="submit">Cancel Order </button></h5>
									</div>
							</div>
							<div class="card" style="padding:0 !important;">
							<div class="card-body">
                                <h5 class="mb-2">Tracking Id&nbsp;
								<b>#108737NT</b></h5>
								<div class=" text-muted mb-3 ">Purchase Date: 15 th Sep, 2019</div>
								
								 <div class="card-body">
									<form class="circle-steps wizard clearfix" id="form-wizard" action="javascript:;" novalidate="novalidate" role="application">
									  <div class="steps clearfix">
										<ul role="tablist">
										  <li role="tab" class="" aria-disabled="false" aria-selected="true">
											<a id="form-wizard-t-0" href="" aria-controls="form-wizard-p-0">
											  <span class="current-info audible">current step: 
											  </span>
											  <span class="step-number">
											  <i class="ti-clipboard  text-muted font-22 " style="">
												</i>
											  </span> <h5 class="text-primary mb-1">Order Packed</h5>
												<div class=" text-muted " style="font-size:10px;">Order Is Ready To Be Shipped</div>
											</a>
										  </li>
										  <li role="tab"  class="first current" aria-disabled="true">
											<a id="form-wizard-t-1" href="" aria-controls="form-wizard-p-1">
											  <span class="step-number"><i class="ti-briefcase  text-muted font-22 " style="">
												</i>
											  </span> <h5 class="text-primary mb-1">Order Shipped</h5>
											  <div class=" text-muted " style="font-size:10px;">Order Has Been Shipped</div>
											</a>
										  </li>
										  <li role="tab" class="disabled" aria-disabled="true">
											<a id="form-wizard-t-2" href="" aria-controls="form-wizard-p-2">
											  <span class="step-number"><i class="ti-truck  text-muted font-22 " style="">
												</i>
											  </span> <h5 class="text-primary mb-1">Out For Delivery</h5>
											  <div class=" text-muted " style="font-size:10px;">Order Is On The Way To Your Coustomer</div>
											</a>
										  </li>
										  <li role="tab" class="disabled last" aria-disabled="true">
											<a id="form-wizard-t-3" href="" aria-controls="form-wizard-p-3">
											  <span class="step-number"><i class="ti-thumb-up  text-muted font-22 " style="">
												</i>
											  </span> 
											  <h5 class="text-primary mb-1">Order Delivered</h5>
											  <div class=" text-muted " style="font-size:10px;">Order Has Been Delivered</div>
											</a>
										  </li>
										</ul>
									  </div>
									</form>

								</div>

							</div>
						
						</div>
							<div class="card-fullwidth-block mx-sm-0 mt-2">
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
                                                        <div class="d-none d-sm-block">Apple Tv</div>
                                                    </td>
                                                    <td>4</td>
                                                    <td><span style="font-family:arial;">&#8377;</span> 70.00</td>
													  <td><span style="font-family:arial;">&#8377;</span>0.00</td>
                                                    <td class="text-right"><span style="font-family:arial;">&#8377;</span>280.00</td>
                                                </tr>
												   <tr>
                                                    <td>
                                                        <div class="d-none d-sm-block">108737NT</div>
                                                    </td>
													<td>
                                                        <div class="d-none d-sm-block">Lorem ipsum dolor sit amet.</div>
                                                    </td>
                                                    <td>4</td>
                                                    <td><span style="font-family:arial;">&#8377;</span>70.00</td>
													  <td><span style="font-family:arial;">&#8377;</span>0.00</td>
                                                    <td class="text-right"><span style="font-family:arial;">&#8377;</span>280.00</td>
                                                </tr>
												   <tr>
                                                    <td>
                                                        <div class="d-none d-sm-block">108737NT</div>
                                                    </td>
													<td>
                                                        <div class="d-none d-sm-block">Lorem ipsum dolor sit amet.</div>
                                                    </td>
                                                    <td>4</td>
                                                    <td><span style="font-family:arial;">&#8377;</span>70.00</td>
													  <td><span style="font-family:arial;">&#8377;</span>0.00</td>
                                                    <td class="text-right"><span style="font-family:arial;">&#8377;</span>280.00</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="6"></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
								<div class="d-flex justify-content-end">
                                    <div class="text-right mr-3" style="width:300px;">
                                        <div class="row mb-3">
                                            <div class="col-6">Discount Price</div>
                                            <div class="col-6"><b>-<span style="font-family:arial;">&#8377;</span>0.00</b></div>
                                        </div>
										<div class="row mb-3">
                                            <div class="col-6">Tax 12%:</div>
                                            <div class="col-6"><b><span style="font-family:arial;">&#8377;</span>244</b></div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-6">Total:</div>
                                            <div class="col-6"><b><span style="font-family:arial;">&#8377;</span>2040</b></div>
                                        </div>
                                        <div class="row font-weight-strong font-20 align-items-center text-primary">
                                            <div class="col-6">Total Price:</div>
                                            <div class="col-6">
                                                <div class="h3 "><span style="font-family:arial;">&#8377;</span>2284</div>
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
    <?php
		include("common/extra.php");
    ?>
    <!-- END: Quick sidebar-->
    <!-- BEGIN: Page backdrops-->
    <?php
		include("common/scripts.php");
	?>
	<link href="css/vendor-js/horizontal-timeline.js" rel="stylesheet" /><!-- THEME STYLES-->
  </body>
</html>
