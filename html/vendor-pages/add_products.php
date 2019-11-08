<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/favicon.png' type='image/x-icon'/ >
    <title>Add Product | Wanted 7</title>
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
							<div class="card-header cardhdd">
								<h5 class="box-title" style="color:#fff;">Upload Media</h5>
							</div>
							<form>
							<div class="card-body">
								<div class="row">
									<div class="dropzone dz-clickable"  style="max-width:140px;max-height:140px;margin-right:9px;" id="mydropzoneSingle" >
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-15">Upload Image</div>
										</div>
									</div>
									<div class="dropzone dz-clickable"  style="max-width:140px;max-height:140px;margin-right:9px;" id="mydropzoneSingle" >
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-15">Upload Image</div>
										</div>
									</div>
									<div class="dropzone dz-clickable"  style="max-width:140px;max-height:140px;margin-right:9px;" id="mydropzoneSingle" >
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-15">Upload Image</div>
										</div>
									</div>
									<div class="dropzone dz-clickable"  style="max-width:140px;max-height:140px;margin-right:9px;" id="mydropzoneSingle" >
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-15">Upload Image</div>
										</div>
									</div>
									<div class="dropzone dz-clickable"  style="max-width:140px;max-height:140px;margin-right:9px;" id="mydropzoneSingle" >
										<div class="dz-message"><i class="ti-import text-primary font-40"></i>
											<div class="mt-3 font-15">Upload Image</div>
										</div>
									</div>
								</div>
								
							</div>
							</form>
						</div>
						<div class="card" style="border:1px solid #7c1ab5">
							<div class="card-header cardhdd">
								<h5 class="box-title" style="color:#fff;">Product Information</h5>
							</div>
							<form>
							<div class="card-body">
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">Name</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter Product Name" required="">
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">SKU</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter SKU" required="">
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">Category</dt>
									<div class="col-sm-8">
										<select class="selectpicker form-control">
											<option selected disabled>Choose Category</option>
											<option>Cosmetics</option>
											<option>Electronics</option>
											<option>Fashion</option>
											<option>Furniture</option>
											<option>Home Utensils</option>
											<option>Jewellery</option>
										</select>
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">Sub-category</dt>
									<div class="col-sm-8">
										<select class="selectpicker form-control">
											<option selected disabled>Choose Sub-category</option>
											<option>Men Clothing</option>
											<option>Women Clothing</option>
											<option>Mobiles</option>
											<option>Laptops</option>
											<option>Home & Decor</option>
										</select>
									</div>
								</div>
								
								<div class="form-group mb-4 row">
									<dt class="col-sm-2" style="padding-top:10px;">Description</dt>
									<div class="col-sm-10">
										<div id="summernote">
										</div>
									</div>
								</div>
								<button class="btn btn-primary clr" style="float:left;margin-right:10px;" type="button"> Save </button>
								<button class="btn btn-default" type="reset"> Clear </button>
							  </div>
							</form>
						</div>
					  </div>
					  <?php
						include("common/product_sidebar.php");
					  ?>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="card" style="border:1px solid #7c1ab5">
							<div class="card-header cardhdd">
								<h5 class="box-title" style="color:#fff;">Store Category</h5>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-md-4 check-list">
										<h5 class="box-title">Categories</h5>
										<label class="checkbox checkbox-primary"><input type="checkbox"><span>Wanted7</span></label>
										<label class="checkbox checkbox-primary"><input type="checkbox"><span>New Arrivals</span></label>
										<label class="checkbox checkbox-primary"><input type="checkbox"><span>Sale Items</span></label>
										<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Main/All</span></label>
									</div>
									<div class="col-md-4 check-list">
										<h5 class="box-title">Sub-Categories</h5>
										<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Shoes</span></label>
										<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Clothings</span></label>
										<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Electronics</span></label>
										<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Jwellery</span></label>
										<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Furnitures</span></label>
									</div>
									<div class="col-md-4 check-list">
										<h5 class="box-title" style="margin-top:48px;"></h5>
										<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Shoes</span></label>
										<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Clothings</span></label>
										<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Electronics</span></label>
										<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Jwellery</span></label>
										<label class="checkbox checkbox-primary"><input type="checkbox" checked><span>Furnitures</span></label>
									</div>
									<div class="col-md-4">
										<button class="btn btn-primary clr" style="float:left;margin-right:10px;" type="button"> Save </button>
										<button class="btn btn-default" type="reset"> Clear </button>
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
	<script src="js/vendor-js/dropzone.min.js"></script>
	<script src="js/vendor-js/summernote-bs4.min.js"></script>
	<script>
	 $(document).ready(function() {
	  var t = $('#summernote').summernote({
		  height: 150
	  });
	  $("#btn").click(function(){
		  $('div.note-editable').height(150);
	  });
	});

	$("div#mydropzoneSingle").dropzone({
		url: "./",
		maxFiles: 1,
		maxFilesize: 5, // MB
		addRemoveLinks: !0,
	});

	function stock_levelz(){
		$('#stockzz').hide();
		$('#stockzz_qty').show();
	}
    </script>
  </body>
</html>
