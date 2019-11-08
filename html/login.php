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
                <span class="active">Login
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
                <a class="nav-link active" href="#login" role="tab" data-toggle="tab">login
                </a>
              </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade in active show" id="login">
                <form class="custom-form" id="loginform" method="post" action="#">
                  <div class="row">
                    <div class="col-12">
                      <span class="fa fa-user">
                      </span>
                      <input type="text" id="name1" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="col-12">
                      <span class="fa fa-lock">
                      </span>
                      <input type="password" class="form-control" placeholder="Password" id="email">
                    </div>
                    <div class="col-12">
                      <!-- <button type="submit" class="btn btn-one btn-anim w-100" id="submit-login" name="submit-login">
                        login
                      </button> -->
					   <a href="vendor/step1.php" class="btn btn-one btn-anim w-100" id="submit-login" name="submit-login">
                        login
                      </a>
                    </div>
					<div class="col-6 mt-4">
                      <a href="signup.php" class="paswd"> Sign up
                      </a>
                    </div>
                    <div class="col-6 mt-4 text-right">
                      <a href="#" class="paswd"> forgot password ?
                      </a>
                    </div>
                  </div>
                  <div class="seprator mt-4 mb-3">
                    <span>or
                    </span>
                  </div>
                  <div class="signin-socials">
                    <div class="row">
                      <div class="col-sm-6 col-12 mt-4">
                        <a href="#" class="btn btn-anim fb w-100">
                          <i class="fab fa-facebook-f">
                          </i>
                          facebook
                        </a>
                      </div>
                      <div class="col-sm-6 col-12 mt-4">
                        <a href="#" class="btn btn-anim google w-100">
                          <i class="fab fa-google-plus-g">
                          </i>
                          google
                        </a>
                      </div>
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
