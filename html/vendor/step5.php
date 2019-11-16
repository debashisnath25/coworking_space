<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title>Addons | Wanted 7</title>
    <?php
		include("common/metalinks.php");
	?>
    <link href="css/vendor-css/form-wizard.css" rel="stylesheet" />
	<link href="css/vendor-css/bootstrap-timepicker.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
       <style>
      .faq-tabs .nav-link {
        min-width: 100px;
        padding: 1rem;
        border: 1px dashed;
        margin-bottom: 1rem;
        background-color: #fff;
        box-shadow: 0 1px 1px 1px rgba(62,57,107,.07);
      }
      .faq-tabs .nav-link.active {
        color: #fff;
        border-color: #7c1ab5;
        background-color: #7c1ab5;
      }
      .faq-tabs .nav-link.active .faq-item-text {
        color: rgba(255,255,255,.5)!important;
      }
      .faq-tabs .nav-link.active i {
        color: #fff !important;
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
            <div class="page-heading" style="margin-left:13px;">
              <div class="page-breadcrumb">
			  	<h1 class="page-title page-title-sep">Opening & Closing Hours</h1>
              </div>
            </div>
            <!-- BEGIN: Page content-->
            <div>
             <div class="row">
                <?php include ('common/step_sidebar.php');?>
                <div class="col-md-9 col-xs-12 ">
                <div class="card card-fullheight" style="border:1px solid #7c1ab5">
					<div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">Opening & Closing Hours</h5>
						<!-- <div class="card-actions"><a class="card-collapse" style="color:#fff;"><i class="ti-angle-down"></i></a></div> -->
					</div>
				   
                  <div class="card-body">
                    
                    
                    <div class="col-lg-12">
						<!--<div class="alert alert-success has-icon" role="alert"><i class="la la-check alert-icon"></i> Success!</div>
						<div class="alert alert-danger has-icon" role="alert"><i class="la la-info-circle alert-icon"></i> Failed!</div>-->

						
							
							<form>
							<div class="card-body">
								<div class="table-responsive">
                                    <table class="table table-bordered table-striped w-100" id="dt-buttons">
                                        <thead class="">
                                            <tr>
                                                <th style="min-width:140px;">Day</th>
                                                
                                                <th style="min-width:110px;">Opening Hours</th>
												<th style="min-width:110px;">Closing Hours</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Monday</td>                                                
                                                <td>
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text"><i class="ti-time"></i></span>
														</div>
														<input class="form-control" id="timepicker_mon_1" type="text" placeholder="Select time">
													</div>
                                                </td>
												<td>
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text"><i class="ti-time"></i></span>
														</div>
														<input class="form-control" id="timepicker_mon_2" type="text" placeholder="Select time">
													</div>
												</td>
                                            </tr>
											<tr>
                                                <td>Tuesday</td>                                                
                                                <td>
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text"><i class="ti-time"></i></span>
														</div>
														<input class="form-control" id="timepicker_tue_1" type="text" placeholder="Select time">
													</div>
												</td>
												<td>
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text"><i class="ti-time"></i></span>
														</div>
														<input class="form-control" id="timepicker_tue_2" type="text" placeholder="Select time">
													</div>
												</td>
                                            </tr>
											<tr>
                                                <td>Wednesday</td>                                                
                                                <td>
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text"><i class="ti-time"></i></span>
														</div>
														<input class="form-control" id="timepicker_wed_1" type="text" placeholder="Select time">
													</div>
												</td>
												<td>
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text"><i class="ti-time"></i></span>
														</div>
														<input class="form-control" id="timepicker_wed_2" type="text" placeholder="Select time">
													</div>
												</td>
                                            </tr>
											<tr>
                                                <td>Thursday</td>                                                
                                                <td>
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text"><i class="ti-time"></i></span>
														</div>
														<input class="form-control" id="timepicker_thur_1" type="text" placeholder="Select time">
													</div>
												</td>
												<td>
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text"><i class="ti-time"></i></span>
														</div>
														<input class="form-control" id="timepicker_thur_2" type="text" placeholder="Select time">
													</div>
												</td>
                                            </tr>
											<tr>
                                                <td>Friday</td>                                                
                                                <td>
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text"><i class="ti-time"></i></span>
														</div>
														<input class="form-control" id="timepicker_fri_1" type="text" placeholder="Select time">
													</div>
												</td>
												<td>
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text"><i class="ti-time"></i></span>
														</div>
														<input class="form-control" id="timepicker_fri_2" type="text" placeholder="Select time">
													</div>
												</td>
                                            </tr>
											<tr>
                                                <td>Saturday</td>                                                
                                                <td>
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text"><i class="ti-time"></i></span>
														</div>
														<input class="form-control" id="timepicker_sat_1" type="text" placeholder="Select time">
													</div>
												</td>
												<td>
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text"><i class="ti-time"></i></span>
														</div>
														<input class="form-control" id="timepicker_sat_2" type="text" placeholder="Select time">
													</div>
												</td>
                                            </tr>
											<tr>
                                                <td>Sunday</td>                                                
                                                <td>
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text"><i class="ti-time"></i></span>
														</div>
														<input class="form-control" id="timepicker_sun_1" type="text" placeholder="Select time">
													</div>
												</td>
												<td>
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text"><i class="ti-time"></i></span>
														</div>
														<input class="form-control" id="timepicker_sun_2" type="text" placeholder="Select time">
													</div>
												</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
								 <a class="btn btn-warning btn-cons" style="color: white;float:left;margin-top:15px;" href="step4.php">BACK</a>
									<button class="btn btn-success btn-cons" style="color: white;float:right;margin-top:15px;" type="submit">Update</button>
							  </div>
							  
							</form>
						
					  </div>
					  
                  </div>
                </div>
                <div class="card card-default hd_card">
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
		include("common/scripts.php");
	?>
   
    <script src="js/vendor-js/jquery.validate.min.js">
    </script>
    <script src="js/vendor-js/jquery.steps.min.js">
    </script>
	<script src="js/vendor-js/bootstrap-timepicker.js"></script>
	 <script>
        $(function() {
            var i = {
                up: 'ti-angle-up',
                down: 'ti-angle-down'
            };
            $('#timepicker_mon_1,#timepicker_mon_2,#timepicker_tue_1,#timepicker_tue_2,#timepicker_wed_1,#timepicker_wed_2,#timepicker_thur_1,#timepicker_thur_2,#timepicker_fri_1,#timepicker_fri_2,#timepicker_sat_1,#timepicker_sat_2,#timepicker_sun_1,#timepicker_sun_2').timepicker({
                defaultTime: "",
                minuteStep: 1,
                icons: i,
            });
        });
    </script>
  </body>
</html>
