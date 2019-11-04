<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title> General Settings | Wanted 7</title>
	<?php
		include("common/metalinks.php");
	?>
	<link href="css/vendor-css/dropzone.min.css" rel="stylesheet" />
	<link href="css/vendor-css/app-sidebar-light.min.css" rel="stylesheet" />
	<style>.faq-tabs .nav-link {
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
      .faq-list>li {
        padding: .75rem 0;
      }
      .faq-list>li>a {
        display: block;
        position: relative;
        color: inherit;
        font-weight: 500;
        font-size: 16px;
      }
      .faq-list>li>a:after {
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        font-family: 'themify';
        content: "\e61a";
        speak: none;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
      }
      .faq-list>li>a[aria-expanded=true] {
        color: #2949ef;
      }
      .faq-list>li>a[aria-expanded=true]:after {
        content: "\e622";
      }
      .faq-answer {
        padding: 1rem 0;
        margin-top: 1rem;
        color: #6c757d;
      }
	 .dt-buttons {
		padding-bottom: 15px;
		margin-bottom: -50px;
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
            <!-- BEGIN: Page content-->
            <div>
			<div class="row"> 
				<!-- settings sidebar start-->
				<?php include ('common/settings_sidebar.php');?>
				<!-- settings sidebar Ends-->
				<div class="col-lg-9">
				 <div class="page-heading" style="padding-left:17px;padding-right:17px;">
				  <div class="page-breadcrumb">
					<h1 class="page-title">Store name and web address
					</h1>
				  </div>
				  <button class="btn btn-primary  " data-toggle="modal" data-target="#new-question-dialog" style="background-color:#7613a7;border:1px solid #7613a7">
					<span class="btn-icon">
					  <i class="ti-star">
					  </i>
					  Add Another Store
					</span>
				  </button>
				</div>	
                <div class="row">
                  <div class="col-md-6">
                    <div class="card">
                      <div class="card-body">
					  <button class="btn btn-primary btn-fix" style="float:right;"><span class="btn-icon"><i class="ti-pencil"></i>Edit</span></button>
                        <h5 class="mb-4 articles-list-title">Store 1
                        </h5>
						
                        <div class="nav flex-column articles-list mb-3">
                          <a class="nav-link d-flex align-items-center" href="#">
                            <b>Biltmore Hotel And Suites Santa Clara Hotel</b>
                          </a>
                          <a class="nav-link d-flex align-items-center" href="#">
                            2151 Laurewood Road
                          </a>
                          <a class="nav-link d-flex align-items-center" href="#">
                            Santa Clara,CA 95054-2754
                          </a>
                          <a class="nav-link d-flex align-items-center" href="#">
                           United States
                          </a>
                          <a class="nav-link d-flex align-items-center" href="#">
                            Phone: 4089887456
                          </a>
                        </div>
                        
                      </div>
                    </div>
                  </div>
				 <div class="col-md-6">
                    <div class="card">
                      <div class="card-body">
					  <button class="btn btn-primary btn-fix" style="float:right;"><span class="btn-icon"><i class="ti-pencil"></i>Edit</span></button>
                        <h5 class="mb-4 articles-list-title">Store 2
                        </h5>
                        <div class="nav flex-column articles-list mb-3">
                          <a class="nav-link d-flex align-items-center" href="#">
                            <b>Biltmore Hotel And Suites Santa Clara Hotel</b>
                          </a>
                          <a class="nav-link d-flex align-items-center" href="#">
                            2151 Laurewood Road
                          </a>
                          <a class="nav-link d-flex align-items-center" href="#">
                            Santa Clara,CA 95054-2754
                          </a>
                          <a class="nav-link d-flex align-items-center" href="#">
                           United States
                          </a>
                          <a class="nav-link d-flex align-items-center" href="#">
                            Phone: 4089887456
                          </a>
                        </div>
                        
                      </div>
                    </div>
                  </div>
				 </div>

				 <div class="card " style="border:1px solid #7c1ab5">
					<div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">Store Logo & Description</h5>
					</div>
					<form>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">My store's Logo</dt>
									<div class="col-sm-8">
										<div class="dropzone dz-clickable" id="mydropzoneSingle" >
										<!-- Custom content which overrides the default block text.	You can delete this block-->
											<div class="dz-message"><i class="ti-import text-primary font-40"></i>
												<div class="mt-3 font-20">Drop files here or click to upload.</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">My store's profile picture / video</dt>
									<div class="col-sm-8">
										<div class="dropzone dz-clickable" id="mydropzoneSingle" >
										<!-- Custom content which overrides the default block text.	You can delete this block-->
											<div class="dz-message"><i class="ti-import text-primary font-40"></i>
												<div class="mt-3 font-20">Drop files here or click to upload.</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group mb-4 row">
									<dt class="col-sm-2" style="padding-top:7px;">Store Description</dt>
									<div class="col-sm-10">
										<textarea class="form-control form-control-solid" placeholder="Your Store Description"></textarea>
									</div>
								</div>
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

				<div class="card " style="border:1px solid #7c1ab5">
					<div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">Store Name And Web Address</h5>
					</div>
					<form>
					<div class="card-body">
						<div class="row">
							<div class="col-md-8">
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">Store Name</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" type="text" placeholder="Your Store Name" >
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">Store Email</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" type="text" placeholder="Your Store Email">
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<ul class="timeline timeline-default">
									<li class="timeline-item">Update Store Name and Email in Easy Steps</li>
								</ul>
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
				<div class="card " style="border:1px solid #7c1ab5">
					<div class="card-header cardhdd">
						<h5 class="box-title" style="color:#fff;">Store Address</h5>
					</div>
					<form>
					<div class="card-body">
						<div class="row">
							<div class="col-md-8">
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">Street Address</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" type="text" placeholder="Your Store Street Address" >
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">City</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" type="text" placeholder="Your Store City">
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">State/Province/Region</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" type="text" placeholder="Your Store State">
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">Zip/Postal code</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" type="text" placeholder="Your Postal Code">
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">Country</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" type="text" placeholder="Your Store Country" value="India" disabled>
									</div>
								</div>
								<div class="form-group mb-4 row">
									<dt class="col-sm-4" style="padding-top:7px;">Phone number</dt>
									<div class="col-sm-8">
										<input class="form-control form-control-solid" type="text" placeholder="Your Store Phone Number">
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<ul class="timeline timeline-default">
									<li class="timeline-item">Enter the Street Address and City Name</li>
									<li class="timeline-item">Enter the State/Province</li>
									<li class="timeline-item">Enter the Zip Code</li>
									<li class="timeline-item">Country is set as "India"</li>
									<li class="timeline-item">Enter the Phone Number</li>
								</ul>
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
    <?php
		include("common/scripts.php");
	?>
	<script src="js/vendor-js/dropzone.min.js"></script>
	<script>
	$("div#mydropzoneSingle").dropzone({
		url: "./",
		maxFiles: 1,
		maxFilesize: 5, // MB
		addRemoveLinks: !0,
	});
    </script>
  </body>
</html>
