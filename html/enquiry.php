<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'common/metalinks.php';?>
	<style>
	.tab-content {
		border-radius: 10px !important;
	}
	</style>
  </head>
  <body>
    <!-- Header start-->
    <?php include 'common/header.php';?>
    <!-- Header end -->
    <!-- faq start-->
    <section class="bg-w" style="padding-top:100px;">
      <div class="container">
	  	<h4 class="title-sep3 mb-20 mt-30">Home > <span class="c-theme">Enquiry</span> </h4>
        <div class="row">
          <div class="col-lg-4">
            <ul class="nav faq-tabs mb-lg-0 mb-5" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" href="#faq1" role="tab" data-toggle="tab">Basic Information
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#faq2" role="tab" data-toggle="tab">Location Details
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#faq3" role="tab" data-toggle="tab">Requirement Type
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#faq4" role="tab" data-toggle="tab">Preferred Facilities
                </a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="#faq5" role="tab" data-toggle="tab">Contact Timing
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-8">
            <!-- Tab panes -->
            <div class="tab-content mb-3 abt-listing">
              <div role="tabpanel" class="tab-pane fade in active show" id="faq1">
                <div id="faq-accordion1" class="theme-accordion">
                  <div class="col-md-12">
					<h4>Basic Information</h4>
					<hr>
						<div class="row">
							<div class="col-md-4">
								  <label>Name
								  </label>
							  </div>
							<div class="col-md-8">
								<input type="text" id="name" class="form-control" placeholder="Enter Name Here">
							</div>
							<div class="col-md-4">
								  <label>Email
								  </label>
							  </div>
							  <div class="col-md-8">
								<input type="text" id="name" class="form-control" placeholder="Enter Email Here">
							 </div>
							<div class="col-md-4">
								  <label>Phone Number
								  </label>
							 </div>
							 <div class="col-md-8">
								<input type="text" id="name" class="form-control" placeholder="Enter No. Here">
							 </div>
							 <div class="col-md-4">
								  <label>Company Name
								  </label>
							 </div>
							 <div class="col-md-8">
								<input type="text" id="name" class="form-control" placeholder="Enter Company Name Here">
							 </div>
							<div class="col-4">
							  <label>Number of Persons</label>
							</div>
							<div class="col-8">
							  <div class="add-person form-control px-1">
									<div class="inc-dec-contain centering">
										<div class="inc-dec-control">
											<button class="cart-qty-plus" type="button" value="+">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<input type="text" name="qty" maxlength="12" value="0" class="input-text qty" style="background-color: #f8f8f8;" />
										<div class="inc-dec-control">
											<button class="cart-qty-minus" type="button" value="-">
												<i class="fa fa-minus"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12">
							  <button class="btn btn-one nextBtn btn-lg float-right" type="button" >Next</button>
							</div>
						 </div>
          			</div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="faq2">
                <div id="faq-accordion2" class="theme-accordion">
                  <div class="col-md-12">
          					<h4>Location</h4>
          					<hr>
          					  <div class="row">
          						<div class="col-4">
          						  <label>State
          						  </label>
          						  </div>
          						  <div class="col-8">
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
          						<div class="col-4">
          						  <label>City
          						  </label>
          						  </div>
          						  <div class="col-8">
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
								<div class="col-4">
          						  <label>Address
          						  </label>
          						  </div>
          						<div class="col-8">
          							<textarea class="form-control" name="address" placeholder="Enter Address Here"></textarea>
          						</div>
								<div class="col-12">
									<button class="btn btn-one nextBtn btn-lg float-right" type="button" >Next</button>
								  </div>
          					  </div>
          				</div>
                  
                </div>
              </div>
              
              <div role="tabpanel" class="tab-pane fade" id="faq3">
                <div id="faq-accordion4" class="theme-accordion">
                  <div class="col-md-12">
          					<h4>Requirement Type</h4>
          					<hr>
          					  <div class="row">
          						<div class="col-md-4 mb-2">
          						  <input type="checkbox" name="checkbox" id="checkbox_id1" value="value">
          						  <label for="checkbox_id1">Meeting Room
          						  </label>
          						</div>
          						<div class="col-md-4 mb-2">
          						  <input type="checkbox" name="checkbox" id="checkbox_id2" value="value">
          						  <label for="checkbox_id2">Coworking Space
          						  </label>
          						</div>
          						<div class="col-md-4 mb-2">
          						  <input type="checkbox" name="checkbox" id="checkbox_id3" value="value">
          						  <label for="checkbox_id3">Private Office
          						  </label>
          						</div>
          						<div class="col-md-4 mb-2">
          						  <input type="checkbox" name="checkbox" id="checkbox_id4" value="value">
          						  <label for="checkbox_id4">Training Room
          						  </label>
          						</div>
          						<div class="col-md-4 mb-2">
          						  <input type="checkbox" name="checkbox" id="checkbox_id5" value="value">
          						  <label for="checkbox_id5">Business Center
          						  </label>
          						</div>
          						<div class="col-md-4 mb-2">
          						  <input type="checkbox" name="checkbox" id="checkbox_id6" value="value">
          						  <label for="checkbox_id6">Coworking Cafes
          						  </label>
          						</div>
								<div class="col-12" style="margin-top: 20px;">
									<button class="btn btn-one nextBtn btn-lg float-right" type="button" >Next</button>
								</div>
          					  </div>
          				 
          				</div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="faq4">
                <div id="faq-accordion5" class="theme-accordion">
                  <div class="col-md-12">
          					<h4>Preferred Facilities</h4>
          					<hr>
          						<div class="row">
          							<div class="col-md-4 mb-2">
          							  <input type="checkbox" name="checkbox" id="checkbox_faci_id1" value="value">
          							  <label for="checkbox_faci_id1">Card Payment
          							  </label>
          							</div>
          							<div class="col-md-4 mb-2">
          							  <input type="checkbox" name="checkbox" id="checkbox_faci_id2" value="value">
          							  <label for="checkbox_faci_id2">Family Friendly
          							  </label>
          							</div>
          							<div class="col-md-4 mb-2">
          							  <input type="checkbox" name="checkbox" id="checkbox_faci_id3" value="value">
          							  <label for="checkbox_faci_id3">Fitness Center
          							  </label>
          							</div>
          							<div class="col-md-4 mb-2">
          							  <input type="checkbox" name="checkbox" id="checkbox_faci_id4" value="value">
          							  <label for="checkbox_faci_id4">Swimming Pool
          							  </label>
          							</div>
          							<div class="col-md-4 mb-2">
          							  <input type="checkbox" name="checkbox" id="checkbox_faci_id5" value="value">
          							  <label for="checkbox_faci_id5">Free Wi-Fi
          							  </label>
          							</div>
          							<div class="col-md-4 mb-2">
          							  <input type="checkbox" name="checkbox" id="checkbox_faci_id6" value="value">
          							  <label for="checkbox_faci_id6">Free Parking
          							  </label>
          							</div>

          							<div class="col-md-4 mb-2">
          							  <input type="checkbox" name="checkbox" id="checkbox_faci_id7" value="value">
          							  <label for="checkbox_faci_id7">Air Conditioning
          							  </label>
          							</div>
          							<div class="col-md-4 mb-2">
          							  <input type="checkbox" name="checkbox" id="checkbox_faci_id8" value="value">
          							  <label for="checkbox_faci_id8">Wheelchair
          							  </label>
          							</div>
          							<div class="col-md-4 mb-2">
          							  <input type="checkbox" name="checkbox" id="checkbox_faci_id9" value="value">
          							  <label for="checkbox_faci_id9">Reservations
          							  </label>
          							</div>
          							<div class="col-md-4 mb-2">
          							  <input type="checkbox" name="checkbox" id="checkbox_faci_id10" value="value">
          							  <label for="checkbox_faci_id10">Coupons
          							  </label>
          							</div>
          							<div class="col-md-4 mb-2">
          							  <input type="checkbox" name="checkbox" id="checkbox_faci_id11" value="value">
          							  <label for="checkbox_faci_id11">Smoking Allowed
          							  </label>
          							</div>
          							<div class="col-md-4 mb-2">
          							  <input type="checkbox" name="checkbox" id="checkbox_faci_id12" value="value">
          							  <label for="checkbox_faci_id12">Pet Friendly
          							  </label>
          							</div>
									<div class="col-12" style="margin-top: 20px;">
										<button class="btn btn-one nextBtn btn-lg float-right" type="button" >Next</button>
									</div>
          						  </div>
          				
          				</div>
                </div>
              </div>
			  <div role="tabpanel" class="tab-pane fade" id="faq5">
                <div id="faq-accordion3" class="theme-accordion">
                  <div class="col-12">
          					<h4>Contact Timing</h4>
          					<hr>
                               <div class="row">
								  <div class="col-lg-4 col-md-4 col-12">
									<label>Preferred Day to connect</label>
									</div>
									<div class="col-lg-8 col-md-8 col-12">
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
									</div>
									<div class="col-lg-8 col-md-8 col-12">
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
									</div>
									<div class="col-lg-8 col-md-8 col-12">
									  <select class="form-control custom-select" id="closing-time">
										  <option selected disabled>Please Select</option>
										  <option>Whatsapp</option>
										  <option>Email</option>
										  <option>Phone</option>
									  </select>
								  </div>
								  <div class="col-12">
									<button class="btn btn-one nextBtn btn-lg float-right" type="button" >Submit Enquiry</button>
								  </div>
							  </div>
                          </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
    <!-- features end -->
    <!-- cta-one end -->
    <!-- footer starts -->
    <?php include 'common/footer.php';?>
  </body>
</html>
