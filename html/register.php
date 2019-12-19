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
    <div class="bg-w" style="padding-top:40px;">
      <div class="container">
	  		<div class="row mt-3">
				<div class="col-lg-12 text-center mt-5">
					<img src="img/mapi.png" alt="#">
				</div>
		   </div>
			<ul class="nav d-flex log-tab mb-6" role="tablist">
              <li class="nav-item text-center" style="font-size:25px; padding-top:15px;">
                    Create your account
              </li>
            </ul>
        <div class="row justify-content-end">
		 <div class="col-lg-3"></div>
          <div class="col-lg-6 mb-3 mt-3" style="border: 1px solid #ccc; height:328px; background-color:#fff">
            
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade in active show" id="register">
                <form class="custom-form" id="registerform" method="post" action="#">
                  <div class="row">
						<div class="col-12 mt-4">
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
						<div class="col-4">
							<button type="submit" class="btn btn-one btn-anim w-100" id="submit-login" name="submit-login">
							Register</button>
						</div>
						<div class="col-6 text-right mt-2">
							Already have account ?
						</div>
						<div class="col-2 text-left mt-2">
							<a href="login.php" class="paswd">| Signin</a>
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
