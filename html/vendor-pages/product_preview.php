<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/favicon.png' type='image/x-icon'/ >
    <title>Product Preview | Wanted 7</title>
    <?php
		include("common/metalinks.php");
	?>
	<style>
	.mt-10{
		margin-top:20px;
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
				<div class="row">
					<div class="col-lg-12">
						<div class="card" style="border:1px solid #7c1ab5">
							<div class="card-header cardhdd">
								<h5 class="box-title" style="color:#fff;">Product Preview</h5>
							</div>
							<form>
								<div class="card-body">
									<div class="row">
										<div class="col-lg-4">
										  <div class="card card-default">
											
												<div class="card-body">
													<img src="images/vendor-images/m-83399-0000-levi-s-original-imafeypp8uphnhfm.jpeg" class="img-responsive" style="height:350px;">
												  </div>
												  <div class="card-footer text-center">
													<h5>Mens Tshirt Casual</h5>
													<div class="form-group">
														<h6>Size</h6>
														<select class="selectpicker form-control mb-3" >
															<option>Small (+Rs 500.00)</option>
															<option>Medium (+Rs 750.00)</option>
															<option>Large (+Rs 1,000.00)</option>
														</select>
													</div>
													<div class="form-group">
														<h6>Color</h6>
														<select class="selectpicker form-control mb-3" >
															<option>Black (+Rs 500.00)</option>
														</select>
													</div>
													<div class="form-group">
														<button class="btn btn-primary">Rs. 500 | Buy Now</button>
													</div>
												  </div>
											
										  </div>
										</div>
										<div class="col-lg-8">
											<h3><span class="semi-bold">"BUY NOW"</span> button</h3>
											<p>Use the code below to embed this product anywhere on your site.</p>
											
											<div class="box-title check-list">
												<h5>Choose product details to display:</h5>
												<label class="checkbox checkbox-primary"><input type="checkbox" checked=""><span>Product image</span></label>
												<label class="checkbox checkbox-primary"><input type="checkbox" checked=""><span>Product name</span></label>
												<label class="checkbox checkbox-primary"><input type="checkbox" checked=""><span>Price</span></label>
												<label class="checkbox checkbox-primary"><input type="checkbox" checked=""><span>Options</span></label>
												<label class="checkbox checkbox-primary"><input type="checkbox" checked=""><span>Quantity selection</span></label>
												<label class="checkbox checkbox-primary"><input type="checkbox" checked=""><span>"Buy Now" button</span></label>
											</div>
											<div class="box-title check-list">
												<h5>Appearance</h5>
												<label class="checkbox checkbox-primary"><input type="checkbox" checked=""><span>Show border</span></label>
												<label class="checkbox checkbox-primary"><input type="checkbox" checked=""><span>Show price inside the "Buy Now" button</span></label>
												<label class="checkbox checkbox-primary"><input type="checkbox" checked=""><span>Center product horizontally (un-check this option if you want to display multiple products in a row)</span></label>
											</div>
											
										</div>
									</div>
								</div>
							</form>
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
  </body>
</html>
