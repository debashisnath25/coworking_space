<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'common/metalinks.php';?>
	<style>
		.stepwizard-step p {
			margin-top: 10px;
		}
		.stepwizard-row {
			display: table-row;
		}
		.stepwizard {
			display: table;
			width: 100%;
			position: relative;
		}
		.stepwizard-step button[disabled] {
			opacity: 1 !important;
			filter: alpha(opacity=100) !important;
		}
		.stepwizard-row:before {
			top: 20px;
			bottom: 0;
			position: absolute;
			content: " ";
			width: 100%;
			height: 1px;
			background-color: #ccc;
			z-order: 0;
		}
		.stepwizard-step {
			display: table-cell;
			text-align: center;
			position: relative;
		}
		.btn-primary{
			background-color:#ff3a54;
			color:#fff;
		}
		.btn-primary:hover{
			background-color:#ff3a54;
			border:1px solid #ccc;
		}
		.btn-default{
			background-color:#f2f2f2;
		}
		.btn-default:hover{
			background-color:#f2f2f2;
			border:1px solid #ccc;
		}
		
	</style>
  </head>
  <body>
    <!-- Header start-->
    <?php include 'common/header.php';?>
    <!-- Header end -->
    <!-- page-banner start-->
	<div class="bg-w" style="padding-top:100px;">
      <div class="container">
	  	<div class="row">
          <div class="col-12">
            <ul class="banner-link ">
              <li>
                <a href="index.php">Home
                </a>
              </li>
              <li>
                <span class="active">our workspaces details
                </span> 
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-w" style="padding-top:50px;padding-bottom:100px;">
      <div class="container">
		<!-- Step Wizard Starts-->
		<div class="stepwizard">
			<div class="stepwizard-row setup-panel">
				<div class="stepwizard-step">
					<a href="#step-1" class="btn btn-primary btn-anim">1</a>
					<p>Basic Information</p>
				</div>
				<div class="stepwizard-step">
					<a href="#step-2" class="btn btn-default btn-anim" disabled="disabled">2</a>
					<p>Location Details</p>
				</div>
				<div class="stepwizard-step">
					<a href="#step-3" class="btn btn-default btn-anim" disabled="disabled">3</a>
					<p>Contact Timing</p>
				</div>
				<div class="stepwizard-step">
					<a href="#step-4" class="btn btn-default btn-anim" disabled="disabled">4</a>
					<p>Requirement Type</p>
				</div>
				<div class="stepwizard-step">
					<a href="#step-5" class="btn btn-default btn-anim" disabled="disabled">5</a>
					<p>Preferred Facilities</p>
				</div>
			</div>
		</div>
		<!-- Step Wizard Ends -->
		<!-- Step Form Starts -->
		<form>
			<div class="row setup-content abt-listing" id="step-1">
				<div class="col-md-12">
					<h4>Basic Information</h4>
					 <div class="col-12">
						  <div class="row">
							<div class="col-12">
							  <label>Name
							  </label>
							  <input type="text" id="name" class="form-control" placeholder="Enter Name Here">
							</div>
							<div class="col-12">
							  <label>Email
							  </label>
							  <input type="email" id="name" class="form-control" placeholder="Enter Email Here">
							</div>
							<div class="col-md-10 col-12">
							  <label>Phone Number
							  </label>
							  <input type="text" id="name" class="form-control" placeholder="Enter Phone Number Here">
							</div>
							<div class="col-md-2 col-12">
							  <label>Number of Persons</label>
							  <div class="add-person form-control px-1">
								<div class="inc-dec-contain centering">
									<div class="inc-dec-control">
										<button class="cart-qty-plus" type="button" value="+">
											<i class="fa fa-plus"></i>
										</button>
									</div>
									<input type="text" name="qty" maxlength="12" value="0" class="input-text qty" />
									<div class="inc-dec-control">
										<button class="cart-qty-minus" type="button" value="-">
											<i class="fa fa-minus"></i>
										</button>
									</div>
								</div>
							</div>
							</div>
							<div class="col-md-8 col-12">
							  <label>Company Name
							  </label>
							  <input type="text" id="name" class="form-control" placeholder="Enter Company Name Here">
							</div>
							<div class="col-md-4 col-12">
							  <label>Start Date
							  </label>
							  <input class="form-control custom-select" type="date" name="start_date">
							</div>
						  </div>
					  </div>
					<button class="btn btn-primary nextBtn btn-lg float-right" type="button" >Next</button>
				</div>
				
			</div>
			<div class="row setup-content abt-listing" id="step-2">
				<div class="col-md-12">
					<h4>Location</h4>
					<div class="col-12">
					  <div class="row">
						<div class="col-6">
						  <label>State
						  </label>
						  <select class="form-control custom-select" id="city_name">
							<option disabled selected>Select State</option>
							<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
							<option value="Andhra Pradesh">Andhra Pradesh</option>
							<option value="Arunachal Pradesh">Arunachal Pradesh</option>
							<option value="Assam">Assam</option>
							<option value="Bihar">Bihar</option>
							<option value="Chandigarh">Chandigarh</option>
							<option value="Chhattisgarh">Chhattisgarh</option>
							<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
							<option value="Daman and Diu">Daman and Diu</option>
							<option value="Delhi">Delhi</option>
							<option value="Goa">Goa</option>
							<option value="Gujarat">Gujarat</option>
							<option value="Haryana">Haryana</option>
							<option value="Himachal Pradesh">Himachal Pradesh</option>
							<option value="Jammu and Kashmir">Jammu and Kashmir</option>
							<option value="Jharkhand">Jharkhand</option>
							<option value="Karnataka">Karnataka</option>
							<option value="Kerala">Kerala</option>
							<option value="Lakshadweep">Lakshadweep</option>
							<option value="Madhya Pradesh">Madhya Pradesh</option>
							<option value="Maharashtra">Maharashtra</option>
							<option value="Manipur">Manipur</option>
							<option value="Meghalaya">Meghalaya</option>
							<option value="Mizoram">Mizoram</option>
							<option value="Nagaland">Nagaland</option>
							<option value="Orissa">Orissa</option>
							<option value="Pondicherry">Pondicherry</option>
							<option value="Punjab">Punjab</option>
							<option value="Rajasthan">Rajasthan</option>
							<option value="Sikkim">Sikkim</option>
							<option value="Tamil Nadu">Tamil Nadu</option>
							<option value="Tripura">Tripura</option>
							<option value="Uttaranchal">Uttaranchal</option>
							<option value="Uttar Pradesh">Uttar Pradesh</option>
							<option value="West Bengal">West Bengal</option>
						  </select>
						</div>
						<div class="col-6">
						  <label>City
						  </label>
						  <select class="form-control custom-select" id="city_name">
							<option disabled selected>Select city</option>
							<option>Ahmedabad</option>
							<option>Bengaluru</option>
							<option>Chandigarh</option>
							<option>Chennai</option>
							<option>Coimbatore</option>
							<option>Delhi</option>
							<option>Goa</option>
							<option>Gurugram</option>
							<option>Hyderabad</option>
							<option>Indore</option>
							<option>Jaipur</option>
							<option>Kochi</option>
							<option>Kolkata</option>
							<option>Manila</option>
							<option>Mumbai</option>
							<option>Nagpur</option>
							<option>Noida</option>
							<option>Pune</option>
						  </select>
						</div>
					  </div>
					  <div class="row">
						<div class="col-12">
							<textarea class="form-control" name="address" placeholder="Enter Address Here"></textarea>
						</div>
					  </div>
				  </div>
					<button class="btn btn-one nextBtn btn-lg float-right" type="button" >Next</button>
				</div>
			</div>
			<div class="row setup-content abt-listing" id="step-3">
				<div class="col-12 mb-30">
					<h4>Contact Timing</h4>
                    <div class="clone-wrap">
						<div class="row clone-section">
                            <div class="col-sm-11 col-12">
                                <form class="listing-form" action="#">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12">
											<label>Preferred Day to connect</label>
                                            <select class="form-control custom-select" id="day">
                                                <option selected disabled>Please Select</option>
                                                <option>monday</option>
                                                <option>tuesday</option>
                                                <option>wednesday</option>
                                                <option>thrusday</option>
                                                <option>thrusday</option>
                                                <option>friday</option>
                                                <option>saturday</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-12">
											<label>Preferred Time to connect</label>
                                            <select class="form-control custom-select" id="opening-time">
                                                <option selected disabled>Please Select</option>
                                                <option>11am</option>
                                                <option>12am</option>
                                                <option>1pm</option>
                                                <option>2pm</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-12">
											<label>Preferred Mode to connect</label>
                                            <select class="form-control custom-select" id="closing-time">
                                                <option selected disabled>Please Select</option>
                                                <option>Whatsapp</option>
                                                <option>Email</option>
                                                <option>Phone</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-1 col-12 text-sm-right text-center">
                                <span class="remove-section">
                                    <i class="fa fa-times"></i>
                                </span>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-12 text-center">
                                <span class="add-section">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </div>
                        </div>
                    </div>
					<button class="btn btn-one nextBtn btn-lg float-right" type="button">Next</button>
                </div>
			</div>
			<div class="row setup-content abt-listing" id="step-4">
				<div class="col-md-12">
					<h4>Requirement Type</h4>
					<div class="col-12">
					  <div class="row mb-30">
						<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-2">
						  <input type="checkbox" name="checkbox" id="checkbox_id1" value="value">
						  <label for="checkbox_id1">Meeting Room
						  </label>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-2">
						  <input type="checkbox" name="checkbox" id="checkbox_id2" value="value">
						  <label for="checkbox_id2">Coworking Space
						  </label>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-2">
						  <input type="checkbox" name="checkbox" id="checkbox_id3" value="value">
						  <label for="checkbox_id3">Private Office
						  </label>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-2">
						  <input type="checkbox" name="checkbox" id="checkbox_id4" value="value">
						  <label for="checkbox_id4">Training Room
						  </label>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-2">
						  <input type="checkbox" name="checkbox" id="checkbox_id5" value="value">
						  <label for="checkbox_id5">Business Center
						  </label>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-2">
						  <input type="checkbox" name="checkbox" id="checkbox_id6" value="value">
						  <label for="checkbox_id6">Coworking Cafes
						  </label>
						</div>
					  </div>
				  </div>
					<button class="btn btn-one nextBtn btn-lg float-right" type="button">Next</button>
				</div>
			</div>
			<div class="row setup-content abt-listing" id="step-5">
				<div class="col-md-12">
					<h4>Preferred Facilities</h4>
					<div class="col-12">
						<div class="row mb-30">
							<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-2">
							  <input type="checkbox" name="checkbox" id="checkbox_faci_id1" value="value">
							  <label for="checkbox_faci_id1">Card Payment
							  </label>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-2">
							  <input type="checkbox" name="checkbox" id="checkbox_faci_id2" value="value">
							  <label for="checkbox_faci_id2">Family Friendly
							  </label>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-2">
							  <input type="checkbox" name="checkbox" id="checkbox_faci_id3" value="value">
							  <label for="checkbox_faci_id3">Fitness Center
							  </label>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-2">
							  <input type="checkbox" name="checkbox" id="checkbox_faci_id4" value="value">
							  <label for="checkbox_faci_id4">Swimming Pool
							  </label>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-2">
							  <input type="checkbox" name="checkbox" id="checkbox_faci_id5" value="value">
							  <label for="checkbox_faci_id5">Free Wi-Fi
							  </label>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-2">
							  <input type="checkbox" name="checkbox" id="checkbox_faci_id6" value="value">
							  <label for="checkbox_faci_id6">Free Parking
							  </label>
							</div>

							<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-2">
							  <input type="checkbox" name="checkbox" id="checkbox_faci_id7" value="value">
							  <label for="checkbox_faci_id7">Air Conditioning
							  </label>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-2">
							  <input type="checkbox" name="checkbox" id="checkbox_faci_id8" value="value">
							  <label for="checkbox_faci_id8">Wheelchair
							  </label>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-2">
							  <input type="checkbox" name="checkbox" id="checkbox_faci_id9" value="value">
							  <label for="checkbox_faci_id9">Reservations
							  </label>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-2">
							  <input type="checkbox" name="checkbox" id="checkbox_faci_id10" value="value">
							  <label for="checkbox_faci_id10">Coupons
							  </label>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-2">
							  <input type="checkbox" name="checkbox" id="checkbox_faci_id11" value="value">
							  <label for="checkbox_faci_id11">Smoking Allowed
							  </label>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-2">
							  <input type="checkbox" name="checkbox" id="checkbox_faci_id12" value="value">
							  <label for="checkbox_faci_id12">Pet Friendly
							  </label>
							</div>
						  </div>
					</div>
					<button class="btn btn-one btn-lg float-right" type="submit">Finish</button>
				</div>
			</div>
		</form>
		<!-- Step Form Ends -->
      </div>
    </div>
    <!-- page-banner ends-->
    <!-- add-list start-->
    
    <!-- add-list end -->
    <!-- footer starts -->
    <?php include 'common/footer.php';?>
    <!-- footer end -->
  </body>
  <script>
  	$(document).ready(function () {

		var navListItems = $('div.setup-panel div a'),
				allWells = $('.setup-content'),
				allNextBtn = $('.nextBtn');

		allWells.hide();

		navListItems.click(function (e) {
			e.preventDefault();
			var $target = $($(this).attr('href')),
					$item = $(this);

			if (!$item.hasClass('disabled')) {
				navListItems.removeClass('btn-primary').addClass('btn-default');
				$item.addClass('btn-primary').removeClass('btn-default');
				allWells.hide();
				$target.show();
				$target.find('input:eq(0)').focus();
			}
		});

		allNextBtn.click(function(){
			var curStep = $(this).closest(".setup-content"),
				curStepBtn = curStep.attr("id"),
				nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
				curInputs = curStep.find("input[type='text'],input[type='url']"),
				isValid = true;

			$(".form-group").removeClass("has-error");
			for(var i=0; i<curInputs.length; i++){
				if (!curInputs[i].validity.valid){
					isValid = false;
					$(curInputs[i]).closest(".form-group").addClass("has-error");
				}
			}

			if (isValid)
				nextStepWizard.removeAttr('disabled').trigger('click');
		});

		$('div.setup-panel div a.btn-primary').trigger('click');
	});
  </script>
</html>
