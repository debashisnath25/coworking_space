
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
			padding-top:80px;
			padding-bottom:50px;
		}
		.seprator span {
			background-color:transparent !important;
		}
		.custompadding100{
			margin-top:23px;
		}
	</style>
</head>

<body>

    <!-- Header start-->
    <?php include('common/header.php');?>
    <!-- Header end -->

    <!-- login start-->
    <div class="bg-w sp-100" style="padding-top:40px;">
      <div class="container">
	  	<div class="row mt-4">
			<div class="col-12 text-center mt-5">
			   <ul class="nav d-flex log-tab" role="tablist">
				 <li class="nav-item text-center" style="font-size:35px; color:#009e9e">
				 <b>Reset Your Password</b>
				 </li>
			   </ul>
			</div>
		</div>
            <div class="row justify-content-end">
				<div class="col-lg-3">
				</div>
                <div class="col-lg-6 custompadding100" style="border: 1px solid #ccc; height:151px; background-color:#fff">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active show" id="login">
                            <form class="custom-form" id="loginform" method="post" action="#">
                                <div class="row">
                                    <div class="col-12 mt-4">
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