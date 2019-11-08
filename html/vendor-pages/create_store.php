<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title>Create Store | Wanted 7</title>
	<?php
		include("common/metalinks.php");
	?>
    <link href="css/vendor-css/daterangepicker.css" rel="stylesheet" />
	<link href="css/vendor-css/bootstrap-timepicker.css" rel="stylesheet" />
	<link href="css/vendor-css/select2.min.css" rel="stylesheet" />
    <link href="css/vendor-css/app-sidebar-light.min.css" rel="stylesheet" />
    <link href="css/vendor-css/form-wizard.css" rel="stylesheet" />
    <style>
      .data-widget-icon {
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 40px;
        color: #6a89d7;
      }
     .faq-tabs .nav-link {
      text-align: center;
      padding: 1.8rem 1rem;
      background-color: #fff;
      border: 1px dashed transparent;
      box-shadow: 0 0.3rem 1rem rgba(0,0,0,.15);
      box-shadow: 0 5px 20px #d6dee4;
      }
      .faq-tabs .nav-link:hover {
      }
      .faq-tabs .nav-link.active {
        color: #fe4d2e;
        border-color: #fe4d2e;
        background-color: #fff;
      }
      .faq-tabs .nav-link.active i {
        color: #fe4d2e !important;
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
	  .select2-selection__rendered{
	  	 background-color: #f4f5f9;
		 border-color: #f4f5f9;
	  }
    </style>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyBpO0pxiyuWIcY2SpRyDLPcv2sJT1NW3zc"></script>
	<script>
		var searchInput = 'search_input';

		$(document).ready(function () {
			var autocomplete;
			autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
				types: ['geocode'],
			});
			
			google.maps.event.addListener(autocomplete, 'place_changed', function () {
				var near_place = autocomplete.getPlace();
				document.getElementById('loc_lat').value = near_place.geometry.location.lat();
				document.getElementById('loc_long').value = near_place.geometry.location.lng();
				
				document.getElementById('latitude_view').innerHTML = near_place.geometry.location.lat();
				document.getElementById('longitude_view').innerHTML = near_place.geometry.location.lng();
			});
		});
	</script>
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
              <div class="col-md-12 col-xs-12 ">
				<div class="card card-fullheight" style="border:1px solid #7c1ab5">
					<div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">CREATE YOUR ONLINE STORE</h5>
						<!-- <div class="card-actions"><a class="card-collapse" style="color:#fff;"><i class="ti-angle-down"></i></a></div> -->
					</div>
				   <div class="card-body">
					<form class="circle-steps wizard clearfix" id="form-wizard" action="javascript:;" novalidate="novalidate" role="application">
					  <div class="steps clearfix">
						<ul role="tablist">
						  <li role="tab"  aria-disabled="false" aria-selected="true">
							<a id="form-wizard-t-0" href="store_type.php" aria-controls="form-wizard-p-0">
							  <span class="current-info ">current step: 
							  </span>
							  <span class="step-number">1
							  </span> Step 1
							</a>
						  </li>
						  <li role="tab"  class="first current" class="disabled" aria-disabled="true">
							<a id="form-wizard-t-1" href="create_store.php" aria-controls="form-wizard-p-1">
							  <span class="step-number">2
							  </span> Step 2
							</a>
						  </li>
						  <li role="tab" class="disabled" aria-disabled="true">
							<a id="form-wizard-t-2" href="document_verification.php" aria-controls="form-wizard-p-2">
							  <span class="step-number">3
							  </span> Step 3
							</a>
						  </li>
						  <li role="tab" class="disabled last" aria-disabled="true">
							<a id="form-wizard-t-3" href="addons.php" aria-controls="form-wizard-p-3">
							  <span class="step-number">4
							  </span> Step 4
							</a>
						  </li>
						   <li role="tab" class="disabled last" aria-disabled="true">
							<a id="form-wizard-t-4" href="pickup_delivery.php" aria-controls="form-wizard-p-4">
							  <span class="step-number">5
							  </span> Step 5
							</a>
						  </li>
						   <li role="tab" class="disabled last" aria-disabled="true">
							<a id="form-wizard-t-5" href="payment_setup.php" aria-controls="form-wizard-p-5">
							  <span class="step-number">6
							  </span> Step 6
							</a>
						  </li>
						</ul>
					  </div>
					</form>
				  </div>
				<div class="card-body">
					<div>
						<div class="form-group mb-3"><label>What's Your Store Name &nbsp;<a href="#" data-toggle="tooltip" title="It is not important that your store name and registered business name are the same."><i style="font-size:12px;" class="fa fa-info-circle"></i><span class="req">&nbsp;*</span></a></label>
							<div class="input-group-icon "><input class="form-control form-control-solid" type="text" placeholder="Enter Your Store Name"></div>
						</div>
						<div class="form-group mb-3"><label>Your Store Address&nbsp;<a href="#" data-toggle="tooltip" title="This Address will be used for pickup of goods from you.If your pickup address is different don't worry, you can change it in the Dashboard later."><i style="font-size:12px;" class="fa fa-info-circle"></i><span class="req">&nbsp;*</span></a>
						</label>
							<div class="input-group">
								<textarea class="form-control form-control-solid" aria-label="With textarea"></textarea>
							</div>
						</div>
						<div class="form-group mb-3"><label>Let's Locate Your Store Address In Google Map&nbsp;<a href="#" data-toggle="tooltip" title="This is very important and will help your Customers Locate You. Kindly complete this step on a computer inside your store to get the perfect location for your customer to find, Drop the pin to Nearest to your Store's Location"><i style="font-size:12px;" class="fa fa-info-circle"></i><span class="req">&nbsp;*</span></a>
						</label>
							<div class="input-group">
								<textarea class="form-control form-control-solid" aria-label="With textarea"></textarea><div class="input-group-prepend"><span class="input-group-text" onclick="view_map();">View Map</span></div>
							</div>
							<div class="row" id="map_dikhao" style="margin-bottom:10px;display:none;">
							<div class ="col-md-12">
								<div class="mapouter " style="margin-top:10px;"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=delhi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.org">google map embed code cool</a></div><style>.mapouter{position:relative;text-align:right;height:300px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:300px;}</style></div>
							</div>
						</div>
						</div>
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label for="validationCustom01" class="active">Store Opening Time</label>
								<div class="input-group">
								   <div class="input-group-prepend"><span class="input-group-text"><i class="ti-time"></i></span></div><input class="form-control form-control-solid" id="timepicker_2" type="text" placeholder="Select time">
								 </div>
							</div>
							<div class="col-md-6 mb-3">
								<label for="validationCustom02" class="active">Store Closing Time</label>
								<div class="input-group">
								   <div class="input-group-prepend"><span class="input-group-text"><i class="ti-time"></i></span></div><input class="form-control form-control-solid" id="timepicker_1" type="text" placeholder="Select time">
								 </div>
							</div>
						 </div>
						 <div class="form-group mb-3"><label>What's Your Category &nbsp;<a href="#" data-toggle="tooltip" title="Please choose this wisely as your store listing on our Application will be defined by the Categoty you Choose, it cannot be changed later."><i style="font-size:12px;" class="fa fa-info-circle"></i><span class="req">&nbsp;*</span></a></label>
							<select class="form-control form-control-solid select2_demo" multiple="">
							   <option value="" disabled>Choose Category...</option>
								<option value="Clothing,Shoes & Jewelry">Clothing,Shoes & Jewelry</option>
								<option value="Home, Garden & Tools">Home, Garden & Tools</option>
								<option value="Books, Movies & Games">Books, Movies & Games</option>
								<option value="Beauty, Health & Groceries">Beauty, Health & Groceries</option>
								<option value="Beauty, Health & Groceries">Sports, Toys & Baby</option>
							  </select>
						</div>
						<div class="form-group mb-3"><label>Wanted7 Store Name &nbsp;<a href="#" data-toggle="tooltip" title="Please Choose a name Wisely. Your Customers will be able to find you easily using your Wanted7 Store Name"><i style="font-size:12px;" class="fa fa-info-circle"></i><span class="req">&nbsp;*</span></a></label>
							<div class="input-group">
								<div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend">@</span></div><input class="form-control form-control-solid" id="validationCustomUsername" type="text" placeholder="Username" aria-describedby="inputGroupPrepend" required="">
								<div class="invalid-feedback">Please choose a username.</div>
							</div>
						</div>
						
					</div>
				</div>
					<div class="card-footer">
						<div class="form-group">
							<button class="btn btn-primary clr" style="float:left;margin-right:10px;" type="button"> Update </button>
							<button class="btn btn-default" type="reset"> Clear </button>
                        </div>
					</div>
			</div>
                <div class="card card-default hd_card">
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
    <?php
		include("common/scripts.php");
	?>
	<script src="js/vendor-js/daterangepicker.js"></script>
    <script src="js/vendor-js/jquery.validate.min.js"></script>
    <script src="js/vendor-js/jquery.steps.min.js"></script>
	<script src="js/vendor-js/bootstrap-timepicker.js"></script><
	<script src="js/vendor-js/select2.full.min.js"></script>
	<script>
	function view_map()
	{
		$("#map_dikhao").show();
	}
	
	function trigger_one(val){
		if(val == 'first'){
			$("#type_1").show();
			$("#type_2").hide();
		}
		else if(val == 'second'){
			$("#type_1").hide();
			$("#type_2").show();
		}
	}
	
	$(function() {
		$('[data-toggle="tooltip"]').tooltip();
		var i = {
			up: 'ti-angle-up',
			down: 'ti-angle-down'
		};
		$('#timepicker_1').timepicker({
			icons: i,
		});
		$('#timepicker_2').timepicker({
			defaultTime: "",
			minuteStep: 1,
			icons: i,
		});
		$('#timepicker_3').timepicker({
			defaultTime: "",
			minuteStep: 1,
			showSeconds: !0,
			icons: i,
		});
		$('#timepicker_4').timepicker({
			defaultTime: "",
			minuteStep: 1,
			showMeridian: !1,
			showSeconds: !0,
			icons: i,
		});
		
		$(".select2_demo").select2({
			placeholder: "Select an option",
		});
		$("#select2_placeholder").select2({
			placeholder: "Select a state",
			allowClear: !0
		});
		$("#select2_limit").select2({
			placeholder: "Select a state",
			maximumSelectionLength: 2
		});
		$("#select2_hide_search").select2({
			placeholder: "Select an option",
			minimumResultsForSearch: Infinity
		});
	});
   
    </script>
  </body>
</html>
