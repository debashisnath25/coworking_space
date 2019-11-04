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

        <div class="row">
          <div class="col-12">
            <div class="float-right">
              <button type="submit" class="btn btn-one btn-anim">Add Workspace
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
