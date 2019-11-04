<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'common/metalinks.php';?>
  </head>
  <body>
    <!-- Header start-->
    <?php include 'common/header.php';?>
    <!-- Header end -->
    <!-- page-banner start-->
    <section class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h3>Post your requirement
            </h3>
            <ul class="banner-link text-center">
              <li>
                <a href="index.html">Home
                </a>
              </li>
              <li>
                <span class="active">Post your requirement
                </span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- page-banner ends-->
    <!-- add-list start-->
    <section class="bg-w sp-100">
      <div class="container">
        <div class="row mb-30">
          <div class="col-12">
            <h4 class="title-sep3 mb-30">
              basic info
            </h4>
          </div>
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
        </div>
        <div class="row mb-30">
          <div class="col-12">
            <h4 class="title-sep3 mb-30">
              location
            </h4>
          </div>
          <div class="col-12">
              <div class="row">
                <div class="col-12">
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
          </div>
        </div>

		<div class="row mb-30">
          <div class="col-12">
            <h4 class="title-sep3 mb-30">
              Details
            </h4>
          </div>
          <div class="col-12">
              <div class="row">
                <div class="col-md-6 col-12">
                  <label>Preferred time to connect
                  </label>
                  <select class="form-control custom-select" id="Please Select">
						<option selected disabled>Please Select</option>
						<option>11am</option>
						<option>12am</option>
						<option>1pm</option>
						<option>2pm</option>
					</select>
                </div>
				<div class="col-md-6 col-12">
                  <label>Preferred mode to connect
                  </label>
                  <select class="form-control custom-select" id="Please Select">
						<option selected disabled>Please Select</option>
						<option>Whatsapp</option>
						<option>Email</option>
						<option>Call</option>
					</select>
                </div>
              </div>
          </div>
        </div>
       
        <div class="row mb-30">
          <div class="col-12">
            <h4 class="title-sep3 mb-30">
              Work Space Type
            </h4>
          </div>
          <div class="col-12">
              <div class="row mb-30">
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                  <input type="checkbox" name="checkbox" id="checkbox_id1" value="value">
                  <label for="checkbox_id1">Meeting Room
                  </label>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                  <input type="checkbox" name="checkbox" id="checkbox_id2" value="value">
                  <label for="checkbox_id2">Coworking Space
                  </label>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                  <input type="checkbox" name="checkbox" id="checkbox_id3" value="value">
                  <label for="checkbox_id3">Private Office
                  </label>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                  <input type="checkbox" name="checkbox" id="checkbox_id4" value="value">
                  <label for="checkbox_id4">Training Room
                  </label>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                  <input type="checkbox" name="checkbox" id="checkbox_id5" value="value">
                  <label for="checkbox_id5">Business Center
                  </label>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-2">
                  <input type="checkbox" name="checkbox" id="checkbox_id6" value="value">
                  <label for="checkbox_id6">Coworking Cafes
                  </label>
                </div>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="float-right">
              <button type="submit" class="btn btn-one btn-anim">Post Requirement
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- add-list end -->
    <!-- footer starts -->
    <?php include 'common/footer.php';?>
    <!-- footer end -->
  </body>
</html>
