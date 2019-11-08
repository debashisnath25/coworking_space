<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/favicon.png' type='image/x-icon'/ >
    <title>Products Shipping | Wanted 7</title>
    <?php
		include("common/metalinks.php");
	?>
	<link href="css/vendor-css/dropzone.min.css" rel="stylesheet" />
	<link href="css/vendor-css/summernote-bs4.css" rel="stylesheet" />
	<link href="css/vendor-css/app-sidebar-light.min.css" rel="stylesheet" />
	<style>
	  .dt-buttons {
	  	padding-bottom:15px;
	  }
	 .dz-error-message {
	 	display:none !important;
	 }
	 .dz-image {
	 	margin-top: -31px;
		margin-left: -28px;
	 }
	 .dz-message {
	 	margin-top: -2px !important;
	 }
     .form-control-lg {
	     border-radius: 4px !important;
	 }
	 .input-group-text {
	 	font-size: 20px !important;
		color: #000000 !important;
	 }

	 .faq-tabs .nav-link {
      padding: 10px;
	  width: 101px;
      border: 1px dashed;
      margin-bottom: 1rem;
      background-color: #fff;
      box-shadow: 0 1px 15px 1px rgba(62,57,107,.07);
	  margin-right:15px;
	  text-align: center;
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
	  .nav-pills {
	    padding-left: 16px;
		padding-top: 15px;
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
				<?php
					include("common/product_header.php");
				?>
				<div class="row">
					<div class="col-lg-8">
						<!--<div class="alert alert-success has-icon" role="alert"><i class="la la-check alert-icon"></i> Success!</div>
						<div class="alert alert-danger has-icon" role="alert"><i class="la la-info-circle alert-icon"></i> Failed!</div>-->
						<div class="card" style="border:1px solid #7c1ab5">
							<form>
							<div class="card-body">
								<div class="row">
									<div class="col-md-10">
										<h4>This Product Requires Shipping or Pickup</h4>
										<p style="margin-top:20px;text-align:left;">Enable this option if the product needs to be physically delivered to customers either via shipping or by self-pickup. If this product is a service or a downloadable item that doesn't require delivery, keep this option disabled.</p>
									</div>
									<div class="col-md-2">
										<label class="ui-switch switch-solid" onclick="hide_details();"><input type="checkbox" checked="" ><span></span></label>
									</div>
								</div>
							</div>
							</form>
						</div>

						<div class="card delivery_elements" style="border:1px solid #7c1ab5">
							<form>
							<div class="card-body">
								<div class="row">
									<div class="col-md-10">
										<h4>Weight and Dimensions</h4>
										<p style="margin-top:20px;text-align:left;">Specify product's weight and dimensions to obtain precise carrier-calculated shipping rates for your customers. To determine the right dimensions, measure your product as if it were in a regular rectangular box.</p>

										<div class="row">
											<div class="col-md-3 ">
												<label for="validationCustom04" class="active">&nbsp;</label>
												<input class="form-control form-control-solid" id="validationCustom04" type="text" placeholder="Weight" required="">&nbsp;
											</div>
											<div class="col-md-3 ">
												<label for="validationCustom04" class="active">&nbsp;</label>
												<input class="form-control form-control-solid" id="validationCustom04" type="text" placeholder="Length" required="">
											</div>
											<div class="col-md-3 ">
												<label for="validationCustom04" class="active">&nbsp;</label>
												<input class="form-control form-control-solid" id="validationCustom04" type="text" placeholder="Width" required="">
											</div>
											<div class="col-md-3 ">
												<label for="validationCustom04" class="active">&nbsp;</label>
												<input class="form-control form-control-solid" id="validationCustom04" type="text" placeholder="Height" required="">&nbsp;
											</div>
											<div class="col-md-6">
												<button class="btn btn-primary clr" style="margin-right:10px;" type="button"> Save </button>
												<button class="btn btn-default" type="reset"> Clear </button>
											</div>
											
										</div> <!-- row ends-->

									</div>
								</div>
							</div>
							</form>
						</div>

						<div class="card delivery_elements" style="border:1px solid #7c1ab5">
							<form>
							<div class="card-body">
								<div class="row">
									<div class="col-md-12"><h4>Shipping Rates</h4></div>
								</div>
								<div class="row">
									<div class="col-md-1">
										<h4>&nbsp;</h4>

										<p style="margin-top:30px;"><label class="radio radio-purple"><input type="radio" name="r2"><span>&nbsp;</span></label></p>
										<p style="text-align:left;">&nbsp;</p>

										<p style="margin-top:30px;"><label class="radio radio-purple"><input type="radio" name="r2"><span>&nbsp;</span></label></p>
										<p style="text-align:left;">&nbsp;</p>

										<p style="margin-top:30px;"><label class="radio radio-purple"><input type="radio" name="r2"><span>&nbsp;</span></label></p>
										<p style="text-align:left;">&nbsp;</p>
									</div>

									<div class="col-md-11">
										

										<p style="margin-top:30px;"><b>Use global rates</b></p>
										<p style="text-align:left;">Shipping cost is calculated according to Shipping Settings.</p>

										<p style="margin-top:30px;"><b>Fixed rate per item</b></p>
										<p style="text-align:left;">Charge a fixed fee per item quantity. Use this option if this product requires individual shipping price.</p>

										<p style="margin-top:30px;"><b>Free shipping</b></p>
										<p style="text-align:left;">Free shipping of the product in any quantity. Free of charge shipping is proven to encourage customers buy more and increase sales. Use this option if you're going to cover shipping expenses yourself.</p>
									</div>
									<div class="col-md-6">
										<button class="btn btn-primary clr" style="margin-right:10px;" type="button"> Save </button>
										<button class="btn btn-default" type="reset"> Clear </button>
									</div>
								</div>
							</div>
							</form>
						</div>

					  </div>

					  <?php
						include("common/product_sidebar.php");
					  ?>
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
	<script src="js/vendor-js/summernote-bs4.min.js"></script>
	<script>
	 $(document).ready(function() {
	  var t = $('#summernote').summernote({
		  height: 150,
		  focus: true
	  });
	  $("#btn").click(function(){
		  $('div.note-editable').height(150);
	  });

	  function hide_details(){
		alert('asdasd');
		$('.delivery_elements').toggle();
	  }
	});

	function stock_levelz(){
		$('#stockzz').hide();
		$('#stockzz_qty').show();
	}
    </script>
  </body>
</html>
