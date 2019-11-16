<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/favicon.png' type='image/x-icon'/ >
    <title>Settings | Wanted 7</title>
    <?php
		include("common/metalinks.php");
	?>
	<style>
	#dt-buttons_filter {
		display:none;
	  }
	  .dt-buttons {
	  	padding-bottom:15px;
	  }
	</style>
  </head>
  <body>
    <div class="page-wrapper">
      <div class="content-wrapper">
        <!-- BEGIN: Sidebar-->
        <?php
			include("common/sidebar.php");
		?>
        <!-- END: Sidebar-->
        <!-- BEGIN: Content-->
        <div class="content-area">
          <!-- BEGIN: Header-->
          <?php
			include("common/header.php");
		  ?>
          <!-- END: Header-->
          <div class="page-content fade-in-up">
		  	<!-- BEGIN: Page heading-->
			<div class="page-heading" style="padding-left:17px;">
			  <div class="page-breadcrumb">
				<h1 class="page-title"><a href="dashboard.php">Dashboard</a> &gt; Settings
				</h1>
			  </div>
			</div>
			<!-- BEGIN: Page content-->
            <div>
			
			  <div class="col-lg-12">
				<!--<div class="alert alert-success has-icon" role="alert"><i class="la la-check alert-icon"></i> Success!</div>
				<div class="alert alert-danger has-icon" role="alert"><i class="la la-info-circle alert-icon"></i> Failed!</div>-->
				<div class="card card-fullheight" style="border:1px solid #7c1ab5">
					<div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">General Information</h5>
					</div>
					<form>
					<div class="card-body">
						<div class="row">
							<div class="col-md-8">
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:10px;">Full Name</dt>
									<div class="col-sm-2">
										<select class="selectpicker form-control mb-3" data-style="btn-light btn-light-solid">
											<option>Mr.</option>
											<option>Miss</option>
											<option>Mrs.</option>
										</select>
									</div>
									<div class="col-sm-6">
										<input class="form-control form-control-solid" type="text" placeholder="Full Name" value="Aman Khanna">
									</div>
								</div>

								<div class="form-group mb-4 row" style="margin-top:-15px;">
									<dt class="col-sm-4">Email Address</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" type="text" placeholder="Email Address" value="abc@gmail.com">

									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4">Phone Number</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" type="number" placeholder="Phone Number" value="9876543210">
										<input class="btn btn-default" type="button"value="SEND OTP" style="position:absolute;right:16px;margin-top:-37px;height:36px;border-left:1px solid #7c1ab5;">
									</div>
								</div>

								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">Your Old Password</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" type="password" placeholder="Your Old Password" value="Wanted7">
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">Your New Password</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" type="password" placeholder="Your New Password">
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">Confirm New Password</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" type="password" placeholder="Confirm New Password">
									</div>
								</div>

							</div>
							<div class="col-md-4">
								&nbsp;
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="form-group">
							<button class="btn btn-primary clr" style="float:left;margin-right:10px;" type="button"> Update </button>
							<button class="btn btn-default" type="reset"> Clear </button>
                        </div>
					</div>
					</form>
				</div>

				<div class="card card-fullheight" style="border:1px solid #7c1ab5">
					<div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">Close Your Account</h5>
					</div>
					<div class="card-body">
						<div class="mb-4 font-15"><h5>Your account will be closed permanently. Your WANTED7 store will be shut down.</h5>
						</div>
						<button class="btn btn-primary clr" style="display: inline-block;width: auto;min-width: 260px;margin-right: 8px;margin-bottom: 0;">Close Your Account</button>
					 </div>
				</div>
			  </div>
            </div>
            <!-- END: Page content-->
          </div>
		 
          <!-- BEGIN: Footer-->
          <?php
			include("common/footer.php");
		  ?>
          <!-- END: Footer-->
        </div>
        <!-- END: Content-->
      </div>
    </div>
    <?php
		include("common/extra.php");
    ?>
    <!-- END: Quick sidebar-->
    <!-- BEGIN: Page backdrops-->
    <?php
		include("common/scripts.php");
	?>
  </body>
</html>
