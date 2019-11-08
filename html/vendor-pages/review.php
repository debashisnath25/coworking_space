<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='icon' href='images/vendor-images/favicon.png' type='image/x-icon'/ >
    <title>Ratings & Reviews | Wanted 7
    </title>
   <?php
		include("common/metalinks.php");
	?>
    <!-- PAGE LEVEL STYLES-->
    <style>
      .data-widget-icon {
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 40px;
        color: #6a89d7;
      }
    </style>
    <style>.faq-tabs .nav-link {
      text-align: center;
      padding: 1.8rem 1rem;
      background-color: #fff;
      border: 1px solid #ccc;
      }
      .faq-tabs .nav-link:hover {
      }
      .faq-tabs .nav-link.active {
        color: #fe4d2e;
        border-color: #fe4d2e;
        background-color: #fff;
      }
      .faq-tabs .nav-link.active i {
        color: #fe4d2e !important;
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
      .faq-tabs .nav-link.active {
        color:black;
        border-color: #7c1ab5;
        background-color: #fff;
      }
      .faq-tabs .nav-link.active i {
        color: #fff !important;
      }
	  .card-header {
		min-height: 5.2rem !important;
	  }
	  .demo-btn-list *:not(.btn-group):not(.btn-group-justified):not(.btn-group-vertical)>.btn, .demo-btn-list > .btn {
		margin-bottom: 15px;
		margin-right: 5px;
		}
		.dropdown-demo .dropdown {
		display: inline-block
		}
		.btn-fix {
		min-width: 120px;
		text-align: center;
		}
		.card-dark{
			border: 1px solid #7c1ab5;
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
                <h1 class="page-title">Rate & Reviews >
                </h1>
              </div>
            </div>
            <!-- BEGIN: Page content-->
            <div>
              <div class="col-lg-12 col-md-12 col-xs-12" >
                <div class="row">
					
                  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between mb-4">
                          <div class="d-flex">
                            <div>
                              <h5 class="font-18 mb-3 font-weight-normal" style="font-size:15px !important;text-transform:uppercase;">
                                <b>Total Ratings
                                </b>
                              </h5>
                              <div class="text-success pull-left pb-2" >
                                <i class="fa fa-star" style="color:#fadf53;font-size:27px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:27px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:27px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:27px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:27px;">
                                </i>
                              </div>
                              <div class="text-muted pb-1">Avarage Ratings
                              </div>
                            </div>
                          </div>
                          <div>
                            <div class="h3 mb-2" style="border:1px rounded #fadf53;">5.0
                            </div>
                          </div>
                        </div>
                        <div class="card-fullwidth-block" style="margin-bottom: -1.8rem">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between mb-4 " >
                          <div class="d-flex col-md-12 col-xs-12 col-lg-12" style="padding:0 !important; margin:0 !important;">
                            <div style="width:100%;">
                              <h5 class="font-18 mb-3 font-weight-normal" style="font-size:15px !important;text-transform:uppercase;">
                                <b>Total Reviews
                                </b>
                              </h5>
                              <div class="col-md-3 col-xs-6 col-lg-3 pr-5" style="float:left;padding:0 !important; margin:0 !important;">
                                <div class="h3 mb-2" style="border:1px rounded #fadf53;">20,000
                                </div>
                                <div class="text-muted pb-1">
                                  <i class="">
                                  </i>Reviews
                                </div>
                              </div>
                              <div class="col-md-3 col-xs-6 col-lg-3" style="float:left;padding:0 !important; margin:0 !important;">
                                <div class="h3 mb-2" style="border:1px rounded #fadf53;">2,000
                                </div>
                                <div class="text-muted pb-1">
                                  <i class="">
                                  </i>Users
                                </div>
                              </div>
                              <div class="col-md-3 col-xs-6 col-lg-3" style="float:left;padding:0 !important; margin:0 !important;">
                                <div class="h3 mb-2" style="border:1px rounded #fadf53;">50
                                </div>
                                <div class="text-muted pb-1">
                                  <i class="">
                                  </i>Likes
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card-fullwidth-block" style="margin-bottom: -1.8rem">
                        </div>
                      </div>
                    </div>
                  </div>
				  	<div class="col-md-12">
				  		<div class="card"  style="border:1px solid #cccccc;">
								<div class="card-body">
										<div class="col-md-6 " style="padding:3px !important;float:left;">
											<label for="validationCustom04">Choose Category</label>
											<select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid">
												<option selected disabled>Choose Category</option>
												<option>Electronics</option>
												<option>Fashion</option>
												<option>Jewellery</option>
												<option>Furniture</option>
												<option>Books</option>
											</select>
										</div>
										
										<div class="col-md-6 " style="padding:3px !important;float:left;">
											<label for="validationCustom04">Choose Subcategory</label>
											<select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid">
												<option selected disabled>Choose Subcategory</option>
												<option>Mobile Phone</option>
												<option>Laptop</option>
												<option>Camera</option>
												<option>Desktop pc</option>
												<option>Speakers</option>
												<option>Tablets</option>
											</select>
										</div>
										<div class="col-md-2 " style="padding:3px !important;float:left;">
											<div class=" check-list mt-2"><label class="checkbox checkbox-grey checkbox-primary"><input type="checkbox" ><span>Show Ratings Only</span></label></div>
										</div>
										<div class="col-md-2 " style="padding:3px !important;float:left;">

											<div class=" check-list mt-2"><label class="checkbox checkbox-grey checkbox-primary"><input type="checkbox" ><span>Show Reviews Only</span></label></div>
										</div>
										<div class="col-md-2 " style="padding:3px !important;float:left;">
											<div class=" check-list mt-2"><label class="checkbox checkbox-grey checkbox-primary"><input type="checkbox" ><span>Show Both Ratings & Reviews</span></label></div>
										</div>
										<div class="col-md-2 " style="padding:3px !important;float:left;">
											<div class=" check-list mt-2"><label class="checkbox checkbox-grey checkbox-primary"><input type="checkbox" ><span>Show Reviews replied by me</span></label></div>
										</div>
										<div class="col-md-2 " style="padding:3px !important;float:left;">
										
											<select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid">
												<option selected disabled>Choose Stars</option>
												<option>1 Star and Above </option>
												<option>2 Star and Above</option>
												<option>3 Star and Above</option>
												<option>4 Star and Above </option>
												<option>5 Star Only </option>
												
											</select>
										</div>
										<div class="col-md-2 " style="padding:3px !important;float:left;">
											<select class="selectpicker form-control mb-3 " data-style="btn-light btn-light-solid">
												<option selected disabled>Sort</option>
												<option>Earliest First</option>
												<option>Latest First</option>
												<option>Highest First</option>
												<option>Lowest First</option>
											</select>
										</div>
										<div class="row pull-right" style="padding:3px;margin:0px;">
											<button class="btn btn-primary"  type="reset"><span class="btn-icon">Reset</span></button>
										</div>
								</div>
							</div>
						</div>
				   <div class="col-lg-4">
                    <div class="card card-fullheight">
                      <div class="card-header cardhdd">
                        <h5 class="box-title" style="color:#fff;">Dheeraj Sood
                        </h5>
                        <div class="card-actions" >
                          <a class="dropdown-toggle no-arrow" data-toggle="dropdown" aria-expanded="false">
                            <i class="ti-more-alt">
                            </i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(30px, 30px, 0px);">
                            <a class="dropdown-item d-flex align-items-center" href="#">
                              <i class="ti-close mr-3">
                              </i>Remove
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
					  <div class="row">
						<div class="col-lg-6">
							<h6 class="box-title" style="color:#211f20;">Product Name:&nbsp;<b>Polo T-shirt</b></h6>
							<h6 class="box-title" style="color:#211f20;">Item Id: &nbsp;<b>#108737NT</b></h6>
						</div>
						<div class="col-lg-6">
							<img src="images/vendor-images/m-83399-0000-levi-s-original-imafeypp8uphnhfm.jpeg" class="pull-right" alt="product image" style="height:100px;">
						</div>
					</div>
					  
                        <p class="card-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.    
						<p class="pull-right"><span style="color:#000;font-size:15px;"> - dheerajsood@gmail.com </span></p>
                        </p>
                        <div class="text-muted font-13 " style="">Dec 27 2018
                        </div>
                        <br>
                        <div class="flexbox">
                          <div class="text-success pull-left pb-2" >
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                              </div>
							<div>
                            <span class="text-muted mr-4">
                              <i class="far fa-thumbs-up mr-1 ml-2">
                              </i>24
                            </span>
                          </div>
                        </div>
                      </div>
					  <div class="card-footer">
					  	<div class="row">
							<div class="col-lg-9">
								<input type="text" class="form-control" name="feedback">
							</div>
							<div class="col-lg-3">
								<button class="btn btn-primary clr"  type="submit"><span class="btn-icon">Reply</span></button>
							</div>
						</div>
					  </div>
                    </div>
                  </div>
				  <div class="col-lg-4">
                     <div class="card card-fullheight">
                      <div class="card-header cardhdd">
                        <h5 class="box-title" style="color:#fff;">Dheeraj Sood
                        </h5>
                        <div class="card-actions" >
                          <a class="dropdown-toggle no-arrow" data-toggle="dropdown" aria-expanded="false">
                            <i class="ti-more-alt">
                            </i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(30px, 30px, 0px);">
                            <a class="dropdown-item d-flex align-items-center" href="#">
                              <i class="ti-close mr-3">
                              </i>Remove
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
					  <div class="row">
						<div class="col-lg-6">
							<h6 class="box-title" style="color:#211f20;">Product Name:&nbsp;<b>Polo T-shirt</b></h6>
							<h6 class="box-title" style="color:#211f20;">Item Id: &nbsp;<b>#108737NT</b></h6>
						</div>
						<div class="col-lg-6">
							<img src="images/vendor-images/m-83399-0000-levi-s-original-imafeypp8uphnhfm.jpeg" class="pull-right" alt="product image" style="height:100px;">
						</div>
					</div>
					  
                        <p class="card-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.    
						<p class="pull-right"><span style="color:#000;font-size:15px;"> - dheerajsood@gmail.com </span></p>
                        </p>
                        <div class="text-muted font-13 " style="">Dec 27 2018
                        </div>
                        <br>
                        <div class="flexbox">
                          <div class="text-success pull-left pb-2" >
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                              </div>
							<div>
                            <span class="text-muted mr-4">
                              <i class="far fa-thumbs-up mr-1 ml-2">
                              </i>24
                            </span>
                          </div>
                        </div>
                      </div>
					  <div class="card-footer">
					  	<div class="row">
							<div class="col-lg-9">
								<input type="text" class="form-control" name="feedback">
							</div>
							<div class="col-lg-3">
								<button class="btn btn-primary clr"  type="submit"><span class="btn-icon">Reply</span></button>
							</div>
						</div>
					  </div>
                    </div>
                  </div>
				  <div class="col-lg-4">
                     <div class="card card-fullheight">
                      <div class="card-header cardhdd">
                        <h5 class="box-title" style="color:#fff;">Dheeraj Sood
                        </h5>
                        <div class="card-actions" >
                          <a class="dropdown-toggle no-arrow" data-toggle="dropdown" aria-expanded="false">
                            <i class="ti-more-alt">
                            </i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(30px, 30px, 0px);">
                            <a class="dropdown-item d-flex align-items-center" href="#">
                              <i class="ti-close mr-3">
                              </i>Remove
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
					  <div class="row">
						<div class="col-lg-6">
							<h6 class="box-title" style="color:#211f20;">Product Name:&nbsp;<b>Polo T-shirt</b></h6>
							<h6 class="box-title" style="color:#211f20;">Item Id: &nbsp;<b>#108737NT</b></h6>
						</div>
						<div class="col-lg-6">
							<img src="images/vendor-images/m-83399-0000-levi-s-original-imafeypp8uphnhfm.jpeg" class="pull-right" alt="product image" style="height:100px;">
						</div>
					</div>
					  
                        <p class="card-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.    
						<p class="pull-right"><span style="color:#000;font-size:15px;"> - dheerajsood@gmail.com </span></p>
                        </p>
                        <div class="text-muted font-13 " style="">Dec 27 2018
                        </div>
                        <br>
                        <div class="flexbox">
                          <div class="text-success pull-left pb-2" >
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                              </div>
							<div>
                            <span class="text-muted mr-4">
                              <i class="far fa-thumbs-up mr-1 ml-2">
                              </i>24
                            </span>
                          </div>
                        </div>
                      </div>
					  <div class="card-footer">
					  	<div class="row">
							<div class="col-lg-9">
								<input type="text" class="form-control" name="feedback">
							</div>
							<div class="col-lg-3">
								<button class="btn btn-primary clr"  type="submit"><span class="btn-icon">Reply</span></button>
							</div>
						</div>
					  </div>
                    </div>
                  </div>
				  <div class="col-lg-4">
                    <div class="card card-fullheight">
                      <div class="card-header cardhdd">
                        <h5 class="box-title" style="color:#fff;">Dheeraj Sood
                        </h5>
                        <div class="card-actions" >
                          <a class="dropdown-toggle no-arrow" data-toggle="dropdown" aria-expanded="false">
                            <i class="ti-more-alt">
                            </i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(30px, 30px, 0px);">
                            <a class="dropdown-item d-flex align-items-center" href="#">
                              <i class="ti-close mr-3">
                              </i>Remove
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
					  <div class="row">
						<div class="col-lg-6">
							<h6 class="box-title" style="color:#211f20;">Product Name:&nbsp;<b>Polo T-shirt</b></h6>
							<h6 class="box-title" style="color:#211f20;">Item Id: &nbsp;<b>#108737NT</b></h6>
						</div>
						<div class="col-lg-6">
							<img src="images/vendor-images/m-83399-0000-levi-s-original-imafeypp8uphnhfm.jpeg" class="pull-right" alt="product image" style="height:100px;">
						</div>
					</div>
					  
                        <p class="card-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.    
						<p class="pull-right"><span style="color:#000;font-size:15px;"> - dheerajsood@gmail.com </span></p>
                        </p>
                        <div class="text-muted font-13 " style="">Dec 27 2018
                        </div>
                        <br>
                        <div class="flexbox">
                          <div class="text-success pull-left pb-2" >
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                              </div>
							<div>
                            <span class="text-muted mr-4">
                              <i class="far fa-thumbs-up mr-1 ml-2">
                              </i>24
                            </span>
                          </div>
                        </div>
                      </div>
					  <div class="card-footer">
					  	<div class="row">
							<div class="col-lg-9">
								<input type="text" class="form-control" name="feedback">
							</div>
							<div class="col-lg-3">
								<button class="btn btn-primary clr"  type="submit"><span class="btn-icon">Reply</span></button>
							</div>
						</div>
					  </div>
                    </div>
                  </div>
				  <div class="col-lg-4">
                     <div class="card card-fullheight">
                      <div class="card-header cardhdd">
                        <h5 class="box-title" style="color:#fff;">Dheeraj Sood
                        </h5>
                        <div class="card-actions" >
                          <a class="dropdown-toggle no-arrow" data-toggle="dropdown" aria-expanded="false">
                            <i class="ti-more-alt">
                            </i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(30px, 30px, 0px);">
                            <a class="dropdown-item d-flex align-items-center" href="#">
                              <i class="ti-close mr-3">
                              </i>Remove
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
					  <div class="row">
						<div class="col-lg-6">
							<h6 class="box-title" style="color:#211f20;">Product Name:&nbsp;<b>Polo T-shirt</b></h6>
							<h6 class="box-title" style="color:#211f20;">Item Id: &nbsp;<b>#108737NT</b></h6>
						</div>
						<div class="col-lg-6">
							<img src="images/vendor-images/m-83399-0000-levi-s-original-imafeypp8uphnhfm.jpeg" class="pull-right" alt="product image" style="height:100px;">
						</div>
					</div>
					  
                        <p class="card-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.    
						<p class="pull-right"><span style="color:#000;font-size:15px;"> - dheerajsood@gmail.com </span></p>
                        </p>
                        <div class="text-muted font-13 " style="">Dec 27 2018
                        </div>
                        <br>
                        <div class="flexbox">
                          <div class="text-success pull-left pb-2" >
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                              </div>
							<div>
                            <span class="text-muted mr-4">
                              <i class="far fa-thumbs-up mr-1 ml-2">
                              </i>24
                            </span>
                          </div>
                        </div>
                      </div>
					  <div class="card-footer">
					  	<div class="row">
							<div class="col-lg-9">
								<input type="text" class="form-control" name="feedback">
							</div>
							<div class="col-lg-3">
								<button class="btn btn-primary clr"  type="submit"><span class="btn-icon">Reply</span></button>
							</div>
						</div>
					  </div>
                    </div>
                  </div>
				  <div class="col-lg-4">
                     <div class="card card-fullheight">
                      <div class="card-header cardhdd">
                        <h5 class="box-title" style="color:#fff;">Dheeraj Sood
                        </h5>
                        <div class="card-actions" >
                          <a class="dropdown-toggle no-arrow" data-toggle="dropdown" aria-expanded="false">
                            <i class="ti-more-alt">
                            </i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(30px, 30px, 0px);">
                            <a class="dropdown-item d-flex align-items-center" href="#">
                              <i class="ti-close mr-3">
                              </i>Remove
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
					  <div class="row">
						<div class="col-lg-6">
							<h6 class="box-title" style="color:#211f20;">Product Name:&nbsp;<b>Polo T-shirt</b></h6>
							<h6 class="box-title" style="color:#211f20;">Item Id: &nbsp;<b>#108737NT</b></h6>
						</div>
						<div class="col-lg-6">
							<img src="images/vendor-images/m-83399-0000-levi-s-original-imafeypp8uphnhfm.jpeg" class="pull-right" alt="product image" style="height:100px;">
						</div>
					</div>
					  
                        <p class="card-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.    
						<p class="pull-right"><span style="color:#000;font-size:15px;"> - dheerajsood@gmail.com </span></p>
                        </p>
                        <div class="text-muted font-13 " style="">Dec 27 2018
                        </div>
                        <br>
                        <div class="flexbox">
                          <div class="text-success pull-left pb-2" >
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                              </div>
							<div>
                            <span class="text-muted mr-4">
                              <i class="far fa-thumbs-up mr-1 ml-2">
                              </i>24
                            </span>
                          </div>
                        </div>
                      </div>
					  <div class="card-footer">
					  	<div class="row">
							<div class="col-lg-9">
								<input type="text" class="form-control" name="feedback">
							</div>
							<div class="col-lg-3">
								<button class="btn btn-primary clr"  type="submit"><span class="btn-icon">Reply</span></button>
							</div>
						</div>
					  </div>
                    </div>
                  </div>
				  <div class="col-lg-4">
                    <div class="card card-fullheight">
                      <div class="card-header cardhdd">
                        <h5 class="box-title" style="color:#fff;">Dheeraj Sood
                        </h5>
                        <div class="card-actions" >
                          <a class="dropdown-toggle no-arrow" data-toggle="dropdown" aria-expanded="false">
                            <i class="ti-more-alt">
                            </i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(30px, 30px, 0px);">
                            <a class="dropdown-item d-flex align-items-center" href="#">
                              <i class="ti-close mr-3">
                              </i>Remove
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
					  <div class="row">
						<div class="col-lg-6">
							<h6 class="box-title" style="color:#211f20;">Product Name:&nbsp;<b>Polo T-shirt</b></h6>
							<h6 class="box-title" style="color:#211f20;">Item Id: &nbsp;<b>#108737NT</b></h6>
						</div>
						<div class="col-lg-6">
							<img src="images/vendor-images/m-83399-0000-levi-s-original-imafeypp8uphnhfm.jpeg" class="pull-right" alt="product image" style="height:100px;">
						</div>
					</div>
					  
                        <p class="card-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.    
						<p class="pull-right"><span style="color:#000;font-size:15px;"> - dheerajsood@gmail.com </span></p>
                        </p>
                        <div class="text-muted font-13 " style="">Dec 27 2018
                        </div>
                        <br>
                        <div class="flexbox">
                          <div class="text-success pull-left pb-2" >
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                              </div>
							<div>
                            <span class="text-muted mr-4">
                              <i class="far fa-thumbs-up mr-1 ml-2">
                              </i>24
                            </span>
                          </div>
                        </div>
                      </div>
					  <div class="card-footer">
					  	<div class="row">
							<div class="col-lg-9">
								<input type="text" class="form-control" name="feedback">
							</div>
							<div class="col-lg-3">
								<button class="btn btn-primary clr"  type="submit"><span class="btn-icon">Reply</span></button>
							</div>
						</div>
					  </div>
                    </div>
                  </div>
				  <div class="col-lg-4">
                     <div class="card card-fullheight">
                      <div class="card-header cardhdd">
                        <h5 class="box-title" style="color:#fff;">Dheeraj Sood
                        </h5>
                        <div class="card-actions" >
                          <a class="dropdown-toggle no-arrow" data-toggle="dropdown" aria-expanded="false">
                            <i class="ti-more-alt">
                            </i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(30px, 30px, 0px);">
                            <a class="dropdown-item d-flex align-items-center" href="#">
                              <i class="ti-close mr-3">
                              </i>Remove
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
					  <div class="row">
						<div class="col-lg-6">
							<h6 class="box-title" style="color:#211f20;">Product Name:&nbsp;<b>Polo T-shirt</b></h6>
							<h6 class="box-title" style="color:#211f20;">Item Id: &nbsp;<b>#108737NT</b></h6>
						</div>
						<div class="col-lg-6">
							<img src="images/vendor-images/m-83399-0000-levi-s-original-imafeypp8uphnhfm.jpeg" class="pull-right" alt="product image" style="height:100px;">
						</div>
					</div>
					  
                        <p class="card-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.    
						<p class="pull-right"><span style="color:#000;font-size:15px;"> - dheerajsood@gmail.com </span></p>
                        </p>
                        <div class="text-muted font-13 " style="">Dec 27 2018
                        </div>
                        <br>
                        <div class="flexbox">
                          <div class="text-success pull-left pb-2" >
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                              </div>
							<div>
                            <span class="text-muted mr-4">
                              <i class="far fa-thumbs-up mr-1 ml-2">
                              </i>24
                            </span>
                          </div>
                        </div>
                      </div>
					  <div class="card-footer">
					  	<div class="row">
							<div class="col-lg-9">
								<input type="text" class="form-control" name="feedback">
							</div>
							<div class="col-lg-3">
								<button class="btn btn-primary clr"  type="submit"><span class="btn-icon">Reply</span></button>
							</div>
						</div>
					  </div>
                    </div>
                  </div>
				  <div class="col-lg-4">
                     <div class="card card-fullheight">
                      <div class="card-header cardhdd">
                        <h5 class="box-title" style="color:#fff;">Dheeraj Sood
                        </h5>
                        <div class="card-actions" >
                          <a class="dropdown-toggle no-arrow" data-toggle="dropdown" aria-expanded="false">
                            <i class="ti-more-alt">
                            </i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(30px, 30px, 0px);">
                            <a class="dropdown-item d-flex align-items-center" href="#">
                              <i class="ti-close mr-3">
                              </i>Remove
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
					  <div class="row">
						<div class="col-lg-6">
							<h6 class="box-title" style="color:#211f20;">Product Name:&nbsp;<b>Polo T-shirt</b></h6>
							<h6 class="box-title" style="color:#211f20;">Item Id: &nbsp;<b>#108737NT</b></h6>
						</div>
						<div class="col-lg-6">
							<img src="images/vendor-images/m-83399-0000-levi-s-original-imafeypp8uphnhfm.jpeg" class="pull-right" alt="product image" style="height:100px;">
						</div>
					</div>
					  
                        <p class="card-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.    
						<p class="pull-right"><span style="color:#000;font-size:15px;"> - dheerajsood@gmail.com </span></p>
                        </p>
                        <div class="text-muted font-13 " style="">Dec 27 2018
                        </div>
                        <br>
                        <div class="flexbox">
                          <div class="text-success pull-left pb-2" >
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                                <i class="fa fa-star" style="color:#fadf53;font-size:15px;">
                                </i>
                              </div>
							<div>
                            <span class="text-muted mr-4">
                              <i class="far fa-thumbs-up mr-1 ml-2">
                              </i>24
                            </span>
                          </div>
                        </div>
                      </div>
					  <div class="card-footer">
					  	<div class="row">
							<div class="col-lg-9">
								<input type="text" class="form-control" name="feedback">
							</div>
							<div class="col-lg-3">
								<button class="btn btn-primary clr"  type="submit"><span class="btn-icon">Reply</span></button>
							</div>
						</div>
					  </div>
                    </div>
                  </div>
                </div>
              </div>
			
            </div>
			<div class="mt-5"><button class="btn btn-primary btn-fix" type="button">Download As Csv Data File</button>&nbsp;<button class="btn btn-primary active btn-fix" type="button">Download As Pdf File</button></div>
            <!-- END: Page content-->
			  <nav aria-label="...">
				<ul class="pagination justify-content-end">
					<li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
					<li class="page-item active"><a class="page-link" href="#">1</a></li>
					<li class="page-item "><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#">Next</a></li>
				</ul>
			</nav>
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
    <!-- BEGIN: Search form-->
    <?php
		include("common/footer.php");
	?>
    <!-- END: Page backdrops-->
    <!-- CORE PLUGINS-->
	<?php
		include("common/scripts.php");
	?>
    <script src="js/vendor-js/datatables.min.js"></script>
	<script src="js/vendor-js/bootstrap-datetimepicker.min.js"></script>
    <script src="js/vendor-js/jquery.validate.min.js"></script>
    <!-- PAGE LEVEL SCRIPTS-->
  </body>
</html>
