<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/favicon.png' type='image/x-icon'/ >
    <title>Products Price | Wanted 7</title>
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
      height: 70px;
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
		  <div class="page-heading" >
              <div class="page-breadcrumb">
                <h1 class="page-title"><a href="dashboard.php">Dashboard </a>> <a href="products.php">Products </a>> Tax & Shipping
                </h1>
              </div>
            </div>
            <div>
				<?php
					include("common/product_header.php");
				?>
				<div class="row">
					<div class="col-lg-9">
						<!--<div class="alert alert-success has-icon" role="alert"><i class="la la-check alert-icon"></i> Success!</div>
						<div class="alert alert-danger has-icon" role="alert"><i class="la la-info-circle alert-icon"></i> Failed!</div>-->
						<div class="card" style="border:1px solid #7c1ab5">
							<div class="card-body">
							ETA PRICE PANEL
							</div>
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
		 $('input:radio[name="r2"]').change(function(){
			 if($(this).val() == 'type_1'){
				$('#free_shipping').show();
				$('#flat_shipping').hide();
				$('#bear_shipping').hide();
			 }
			 else if($(this).val() == 'type_2'){
				$('#flat_shipping').show();
				$('#free_shipping').hide();
				$('#bear_shipping').hide();
			 }
			 else if($(this).val() == 'type_3'){
				$('#bear_shipping').show();
				$('#free_shipping').hide();
				$('#flat_shipping').hide();
			 }
		 });
	 });

	 function show_extra_rate(){
		var tax_rate = $("#tax_rate").val();
		if(tax_rate != null){
			var p_cost = $("#p_cost").val();
			var tax_cost = ( p_cost * tax_rate / 100 ).toFixed(2); 
			$(".p_cost").show();
			$("#extra_cost").html(tax_cost);
			$("#cost_rate").html(tax_rate);
		}
	 }
    </script>
  </body>
</html>
