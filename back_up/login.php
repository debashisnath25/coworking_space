
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include('common/metalinks.php');?>
	<style>
		.login-section::after {
			width:calc(100% - 0px) !important;
		}
		.sp-100{
			padding-top:100px;
		}
		.seprator span {
			background-color:transparent !important;
		}
	</style>
</head>

<body>

    <!-- Header start-->
    <?php include('common/header.php');?>
    <!-- Header end -->

    <!-- login start-->
    <div class="bg-w sp-100" style="padding-top:100px;">
      <div class="container">
	  	<div class="row">
          <div class=" col-12">
            <ul class="banner-link "  style="margin-left:-16px;">
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
				<div class="col-lg-6 login-section"></div>
                <div class="col-lg-6">
                    <ul class="nav d-flex log-tab mb-5" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#login" role="tab" data-toggle="tab">login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#register" role="tab" data-toggle="tab">register</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active show" id="login">
                            <form class="custom-form" id="loginform" method="post" action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <span class="fa fa-user"></span>
                                        <input type="text" id="name1" class="form-control" placeholder="Enter Name">
                                    </div>
                                    <div class="col-12">
                                        <span class="fa fa-lock"></span>
                                        <input type="password" class="form-control" placeholder="Password" id="email">
                                    </div>
                                    <div class="col-6">
                                        <input type="checkbox" name="checkbox" id="checkbox_id1" value="value">
                                        <label for="checkbox_id1">remember me</label>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="#" class="paswd"> forgot password ?</a>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-one btn-anim w-100" id="submit-login" name="submit-login">
                                            login</button>
                                    </div>
                                </div>
                                <div class="seprator mt-4 mb-3">
                                    <span>or</span>
                                </div>
                                <div class="signin-socials">
                                    <p class="text-capitalize mb-0">sign in with...</p>
                                    <div class="row">
                                        <div class="col-sm-6 col-12 mt-4">
                                            <a href="#" class="btn btn-anim fb w-100">
                                                <i class="fab fa-facebook-f"></i>
                                                facebook</a>
                                        </div>
                                        <div class="col-sm-6 col-12 mt-4">
                                            <a href="#" class="btn btn-anim google w-100">
                                                <i class="fab fa-google-plus-g"></i>
                                                google</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="register">
                            <form class="custom-form" id="registerform" method="post" action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <span class="fa fa-user"></span>
                                        <input type="text" id="name2" class="form-control" placeholder="Enter Name">
                                    </div>
                                    <div class="col-12">
                                        <span class="fa fa-envelope"></span>
                                        <input type="email" class="form-control" placeholder="Enter Email" id="email2">
                                    </div>
                                    <div class="col-12">
                                        <span class="fa fa-lock"></span>
                                        <input type="password" class="form-control" placeholder="Password" id="password">
                                    </div>
                                    <div class="col-12">
                                        <span class="fa fa-lock"></span>
                                        <input type="password" class="form-control" placeholder="Confirm Password" id="c-password">
                                    </div>
                                    <div class="col-6">
                                        <input type="checkbox" name="checkbox" id="checkbox_id" value="value">
                                        <label for="checkbox_id">remember me</label>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="#" class="paswd"> forgot password ?</a>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-one btn-anim w-100" id="submit" name="submit">
                                            register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
				
            </div>
        </div>
    </div>
    <!-- login end -->
    <!-- cta-one end -->
	<?php include('common/footer.php');?>
</body>

</html>