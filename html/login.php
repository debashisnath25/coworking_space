
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

		.seprator span {
			background-color:transparent !important;
		}
		.custompadding100{
			margin-bottom:17px;
		}
		.up{
			padding-bottom:50px; !important;
		}
	</style>
</head>

<body>

    <!-- Header start-->
    <?php include('common/header.php');?>
    <!-- Header end -->

    <!-- login start-->
    <div class="bg-w sp-200" style="padding-top:40px;">
		  <div class="container">
			<div class="row mt-3">
				<div class="col-lg-12 text-center mt-5">
					<img src="img/mapi.png" alt="#">
				</div>
		   </div>
			<ul class="nav d-flex log-tab mb-6" role="tablist">
				<li class="nav-item text-center" style="font-size:25px; padding-top:15px;">
					Signin your details
				</li>
			</ul>
            <div class="row justify-content-end">
				<div class="col-lg-3">
				</div>
                <div class="col-lg-6 mt-3 custompadding100" style="border: 1px solid #ccc; height:209px; background-color:#fff; padding-bottom:10px;">                  
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active show" id="login">
                            <form class="custom-form" id="loginform" method="post" action="#">
                                <div class="row">
                                    <div class="col-12 mt-4">
                                        <span class="fa fa-user"></span>
                                        <input type="text" id="name1" class="form-control" placeholder="Enter Name">
                                    </div>
                                    <div class="col-12">
                                        <span class="fa fa-lock"></span>
                                        <input type="password" class="form-control" placeholder="Password" id="email">
                                    </div>
                                    <div class="col-4">
                                        <button type="submit" class="btn btn-one btn-anim w-100" id="submit-login" name="submit-login">
                                        login</button>
                                    </div>
                                    <div class="col-4 text-right mt-2">
                                        <a href="password.php" class="paswd"> forgot password ?</a>
                                    </div>
									<div class="col-4 text-left mt-2">
                                        <a href="register.php" class="paswd">| Create your account</a>
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