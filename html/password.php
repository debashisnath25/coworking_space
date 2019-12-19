
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
	          <h4 class="title-sep3 mb-20 mt-30">login > <span class="c-theme">forgot password</span> </h4>
            </ul>
          </div>
        </div>
            <div class="row justify-content-end">
				<div class="col-lg-3">
				</div>
                <div class="col-lg-6" style="border: 1px solid #ccc; height:217px; background-color:#fff">
                    <ul class="nav d-flex log-tab mb-5" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active mt-3" href="#login" role="tab" data-toggle="tab">Reset your password</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active show" id="login">
                            <form class="custom-form" id="loginform" method="post" action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <span class="fa fa-envelope"></span>
                                        <input type="email" class="form-control" placeholder="Enter Email" id="email2">
                                    </div>
                                    <div class="col-4">
                                        <button type="submit" class="btn btn-one btn-anim w-100" id="submit-login" name="submit-login">
                                        Reset</button>
                                    </div>
									<div class="col-8 text-right mt-2">
                                        <a href="login.php" class="paswd">| signin</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
				<div class="col-lg-3">
				</div>
				
            </div>
        </div>
    </div>
    <!-- login end -->
    <!-- cta-one end -->
	<?php include('common/footer.php');?>
</body>

</html>