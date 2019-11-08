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
    <!-- login start-->
    <div class=" bg-w sp-100">
      <div class="container">
	  	<div class="row">
          <div class="col-12">
            <ul class="banner-link ">
              <li>
                <a href="index.php">Home
                </a>
              </li>
              <li>
                <span class="active">Register
                </span>
              </li>
            </ul>
          </div>
        </div>
        <div class="row justify-content-end">
		 <div class="col-lg-3"></div>
          <div class="col-lg-6">
            <ul class="nav d-flex log-tab mb-5" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" href="#register" role="tab" data-toggle="tab">register
                </a>
              </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade in active show" id="register">
                <form class="custom-form" id="registerform" method="post" action="#">
                  <div class="row">
                    <div class="col-12">
                      <span class="fa fa-user">
                      </span>
                      <input type="text" id="name2" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="col-12">
                      <span class="fa fa-envelope">
                      </span>
                      <input type="email" class="form-control" placeholder="Enter Email" id="email2">
                    </div>
					<div class="col-12">
                      <span class="fa fa-phone">
                      </span>
                      <input type="text" class="form-control" placeholder="Enter Phone Number" id="phone">
                    </div>
                    <div class="col-12">
                      <span class="fa fa-lock">
                      </span>
                      <input type="password" class="form-control" placeholder="Password" id="password">
                    </div>
                    <div class="col-12">
                      <span class="fa fa-lock">
                      </span>
                      <input type="password" class="form-control" placeholder="Confirm Password" id="c-password">
                    </div>
                    <div class="col-6">
                      <input type="checkbox" name="checkbox" id="checkbox_id" value="value">
                      <label for="checkbox_id">remember me
                      </label>
                    </div>
                    <div class="col-6 text-right">
                      <a href="#" class="paswd"> forgot password ?
                      </a>
                    </div>
                    <div class="col-12 mt-4">
                      <button type="submit" class="btn btn-one btn-anim w-100" id="submit" name="submit">
                        register
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
		 <div class="col-lg-3"></div>
        </div>
      </div>
    </div>
    <!-- login end -->
    <!-- footer starts -->
    <?php include 'common/footer.php';?>
  </body>
</html>