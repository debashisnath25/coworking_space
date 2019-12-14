<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'common/metalinks.php';?>
	<style>
		.filter-box .form-control{
			border-radius:5px;
			background-color: #f8f8f8;
			
		}
		.set_font{
			font-size:14px;
		}
		.range-box{
			border-radius:5px;
			margin-bottom:15px;
		}
		.abt-listing {
			border: 1px solid #ccc;
			border-radius: 5px;
		}
		.listing-item {
			border: 1px solid #ccc;
		}
		.img-holder img {
			height: 200px !important; 
		}
		.mb-15{
		    margin-bottom: 15px;
		}
		.mt-20{
		    margin-top: 15px;
		}
	</style>
  </head>
  <body>
    <!-- Header start-->
    <?php include 'common/header.php';?>
    <!-- Header end -->
    <!-- listings start-->
    <section class="bg-w" style="padding-top:100px;">
      <div class="container">
	    <h4 class="title-sep3 mb-20 mt-30">Home > <span style="color:#FF3A54;">Coworking Spaces</span> </h4>
	  	<div class="row mb-30">
			<div class="col-md-2 col-sm-6 col-12">
				<div class="list-items2 btn-anim">
                    <div class="icon-box">
                        <i class="flaticon-team"></i>
                    </div>
                    <h5 class="mb-0 mt-3">
                        <a href="#">Meeting Room</a>
                    </h5>
                </div>
			</div>
			<div class="col-md-2 col-sm-6 col-12">
				 <div class="list-items2 btn-anim">
                    <div class="icon-box">
                        <i class="flaticon-appointment"></i>
                    </div>
                    <h5 class="mb-0 mt-3">
                        <a href="#">Coworkng Space</a>
                    </h5>
                </div>
			</div>
			<div class="col-md-2 col-sm-6 col-12">
				<div class="list-items2 btn-anim">
                    <div class="icon-box">
                        <i class="flaticon-shop"></i>
                    </div>
                    <h5 class="mb-0 mt-3">
                        <a href="#">Private Office</a>
                    </h5>
                </div>
			</div>
			<div class="col-md-2 col-sm-6 col-12">
				<div class="list-items2 btn-anim">
                    <div class="icon-box">
                        <i class="flaticon-hotel"></i>
                    </div>
                    <h5 class="mb-0 mt-3">
                        <a href="#">Training Room</a>
                    </h5>
                </div>
			</div>
			<div class="col-md-2 col-sm-6 col-12">
				<div class="list-items2 btn-anim">
                    <div class="icon-box">
                        <i class="flaticon-team"></i>
                    </div>
                    <h5 class="mb-0 mt-3">
                        <a href="#">Business Center</a>
                    </h5>
                </div>
			</div>
			<div class="col-md-2 col-sm-6 col-12">
				<div class="list-items2 btn-anim">
                    <div class="icon-box">
                        <i class="flaticon-shop"></i>
                    </div>
                    <h5 class="mb-0 mt-3">
                        <a href="#">Coworking Cafes</a>
                    </h5>
                </div>
			</div>
		</div>
        <div class="row ">
          <!-- Sidebar Starts -->
          <div class="col-lg-4 col-12 ">
            <aside class="sidebar">
              <h4 class="title-sep2 mb-30">search filters
              </h4>
              <div class="widget-listing abt-listing" >
                <div class="filter-box mb-30">
                  <form action="#" method="post">
                    <div class="row">
                      <div class="col-12">
                        <div class="input-wrap">
                          <select class="form-control custom-select" id="service2">
                            <option>all categories
                            </option>
                            <option>Meeting Room
                            </option>
                            <option>Coworking Space
                            </option>
                            <option>Private Office
                            </option>
                            <option>Training Room
                            </option>
                            <option>Business Center
                            </option>
                            <option>Coworking Cafes
                            </option>
                          </select>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="input-wrap">
                          <i class="fa fa-crosshairs">
                          </i>
                          <input type="text" class="form-control" placeholder="location">
                        </div>
						 <hr>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <h5 class="mb-15">Price:
                          &#8377;
                          <span class="range-value">1000
                          </span>
                        </h5>
                        <div class="input-wrap range-box">
                          <div class="range-slider">
                            <input type="range" min="1" max="10000" value="1000" class="range-track" id="myRange">
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="filter-checklist">
                  <div class="row">
                    <div class="col-12 mb-30">
                      <h5 class="mb-15">facilities
                      </h5>
                      <div class="row minus-pad">
                        <div class="col-sm-6 col-12">
                          <div class="w-100 mb-2">
                            <input type="checkbox" name="checkbox" id="checkbox_id1" value="value">
                            <label  class="set_font" for="checkbox_id1">AC with backup
                            </label>
                          </div>
                          <div class="w-100 mb-2">
                            <input type="checkbox" name="checkbox" id="checkbox_id2" value="value">
                            <label class="set_font" for="checkbox_id2">Free tea/Coffee
                            </label>
                          </div>
                          <div class="w-100 mb-2">
                            <input type="checkbox" name="checkbox" id="checkbox_id3" value="value">
                            <label class="set_font" for="checkbox_id3">Car Parking*
                            </label>
                          </div>
                          <div class="w-100 mb-2">
                            <input type="checkbox" name="checkbox" id="checkbox_id4" value="value">
                            <label class="set_font" for="checkbox_id4">Whiteboard
                            </label>
                          </div>
                          <div class="w-100 mb-2">
                            <input type="checkbox" name="checkbox" id="checkbox_id5" value="value">
                            <label class="set_font" for="checkbox_id5">Speaker
                            </label>
                          </div>
                          <div class="w-100 mb-2">
                            <input type="checkbox" name="checkbox" id="checkbox_id6" value="value">
                            <label class="set_font" for="checkbox_id6">Free WiFi
                            </label>
                          </div>
						  <div class="w-100 mb-2">
                            <input type="checkbox" name="checkbox" id="checkbox_id7" value="value">
                            <label class="set_font" for="checkbox_id7">Meeting Room
                            </label>
                          </div>
						  <div class="w-100 mb-2">
                            <input type="checkbox" name="checkbox" id="checkbox_id8" value="value">
                            <label class="set_font" for="checkbox_id8">Projector
                            </label>
                          </div>
						  <div class="w-100 mb-2">
                            <input type="checkbox" name="checkbox" id="checkbox_id9" value="value">
                            <label class="set_font" for="checkbox_id9">Microphone
                            </label>
                          </div>
						  <div class="w-100 mb-2">
                            <input type="checkbox" name="checkbox" id="checkbox_id10" value="value">
                            <label class="set_font" for="checkbox_id10">Night Shift
                            </label>
                          </div>
                        </div>
                        <div class="col-sm-6 col-12">
                          <div class="w-100 mb-2">
                            <input type="checkbox" name="checkbox" id="checkbox_id11" value="value">
                            <label class="set_font" for="checkbox_id11">Cafeteria
                            </label>
                          </div>
                          <div class="w-100 mb-2">
                            <input type="checkbox" name="checkbox" id="checkbox_id12" value="value">
                            <label class="set_font" for="checkbox_id12">Reception
                            </label>
                          </div>
                          <div class="w-100 mb-2">
                            <input type="checkbox" name="checkbox" id="checkbox_id13" value="value">
                            <label class="set_font" for="checkbox_id13">Video Conference
                            </label>
                          </div>
                          <div class="w-100 mb-2">
                            <input type="checkbox" name="checkbox" id="checkbox_id14" value="value">
                            <label class="set_font" for="checkbox_id14">Podium
                            </label>
                          </div>
                          <div class="w-100 mb-2">
                            <input type="checkbox" name="checkbox" id="checkbox_id15" value="value">
                            <label class="set_font" for="checkbox_id15">Clean Toilets
                            </label>
                          </div>
                          <div class="w-100 mb-2">
                            <input type="checkbox" name="checkbox" id="checkbox_id16" value="value">
                            <label class="set_font" for="checkbox_id16">Lounge
                            </label>
                          </div>
						  <div class="w-100 mb-2">
                            <input type="checkbox" name="checkbox" id="checkbox_id17" value="value">
                            <label class="set_font" for="checkbox_id17">Mailing Address
                            </label>
                          </div>
						  <div class="w-100 mb-2">
                            <input type="checkbox" name="checkbox" id="checkbox_id18" value="value">
                            <label class="set_font" for="checkbox_id18">Flipboard
                            </label>
                          </div>
						  <div class="w-100 mb-2">
                            <input type="checkbox" name="checkbox" id="checkbox_id19" value="value">
                            <label class="set_font" for="checkbox_id19">24x7
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 mb-30">
                      <h5 class="mb-15">capacity
                      </h5>
                      <div class="row minus-pad">
                        <div class="col-sm-6 col-12">
                          <div class="w-100 mb-2">
                            <input type="checkbox" name="checkbox" id="checkbox_id_capacity_1" value="value">
                            <label for="checkbox_id_capacity_1">1-5
                            </label>
                          </div>
                          <div class="w-100 mb-2">
                            <input type="checkbox" name="checkbox" id="checkbox_id_capacity_2" value="value">
                            <label for="checkbox_id_capacity_2">5-15
                            </label>
                          </div>
                          <div class="w-100 mb-2">
                            <input type="checkbox" name="checkbox" id="checkbox_id_capacity_3" value="value">
                            <label for="checkbox_id_capacity_3">15-30
                            </label>
                          </div>
                        </div>
                        <div class="col-sm-6 col-12">
                          <div class="w-100 mb-2">
                            <input type="checkbox" name="checkbox" id="checkbox_id_capacity_4" value="value">
                            <label for="checkbox_id_capacity_4">30-50
                            </label>
                          </div>
                          <div class="w-100 mb-2">
                            <input type="checkbox" name="checkbox" id="checkbox_id_capacity_5" value="value">
                            <label for="checkbox_id_capacity_5">50-100
                            </label>
                          </div>
                          <div class="w-100 mb-2">
                            <input type="checkbox" name="checkbox" id="checkbox_id_capacity_6" value="value">
                            <label for="checkbox_id_capacity_6">100+
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <button type="submit" class="btn btn-one btn-anim w-100">
                      update
                    </button>
                  </div>
                </div>
              </div>
			  <div class="widget">
                            <h4 class="title-sep2 mb-30">about author</h4>
                            <div class="widget-author">
                                <div class="author-top text-right mb-4">
                                    <div class="img-holder">
                                        <img src="assets/img/blog/aut-big.png" alt="#">
                                    </div>
                                    <div class="author-info">
                                        <h5 class="c-white">Julia Holmes</h5>
                                        <span>co manager</span>
                                    </div>
                                </div>
                                <p class="bor-b pb-3">Excepteur enim aute dolor culpa aliqua nulla. Non labore est irure ipsum cupidatat amet fugiat
                                    quis voluptate cillum velit qui.</p>
                                <div class="socials">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
            </aside>
          </div>
          <!-- Sidebar Ends -->
          <div class="col-lg-8 col-12">
            <div class="action-list">
              <div class="row">
                <div class="col-md-9 col-6 mb-30">
                </div>
                <div class="col-md-3 col-6 mb-30">
                  <div class="sort-filter">
                    <div class="sort-dropdown">
                      <a href="#" class="dropdown-toggle text-capitalize" data-toggle="dropdown">
                        Sort By
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">low to high
                        </a>
                        <a class="dropdown-item" href="#">hight to low
                        </a>
                        <a class="dropdown-item" href="#">relevance
                        </a>
                        <a class="dropdown-item" href="#">discount
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			<!-- grid-view-start -->
            <div class="listing-list-view show-list" >
					<div class="row mb-3">
					<?php
					for($i=0;$i <=6; $i++){
					?>
						<div class="col-12 mb-15">
							<div class="listing-item p-2">
								<div class="img-list">
									<div class="img-holder">
										<span class="offer">save 49%
										</span>
										<a href="listing_details.php"><img src="img/l-2.png" alt="list"></a>
										<div class="rate-like centering justify-content-between">
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
											</div>
											<!-- <a class="likes" href="#">
												<i class="far fa-heart"></i>25
											</a> -->
										</div>
									</div>
								</div>
								<div class="list-content">
									<ul class="ctg-info py-2 mb-3">
										<li>
											<a href="#"><i class="flaticon-team mr-2"></i>Coworkinfg Space</a>
										</li>
										<li>
											<a href="#"><i class="fa fa-map-marker-alt mr-2"></i>Dwarka,New Delhi</a>
										</li>
									</ul>
									<h5 class="mb-2">
										<a href="listing_details.php">Private office</a>
									</h5>
									<div class="row minus-pad">
										<div class="col-xl-6 col-sm-6 col-12">
											<div class="aminities">
												<span style="font-size:15px;">Capacity: </span>
												<span style="font-size:15px;"><i class="fa fa-users c-theme"></i>15</span>
											</div>
										</div>
										<div class="col-xl-6 col-sm-6 col-12">
											<div class="aminities">
												<span style="font-size:15px;">Price: </span>
												<span style="font-size:15px;"><i class="fa fa-rupee-sign c-theme"></i>4999/Month</span>
											</div>
										</div>
									</div>
									<ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
										<button type="submit" class="btn btn-one btn-anim w-100" id="submit2" name="submit2">Book Now</button>
									</ul>
								</div>
							</div>
						</div>
					<?php
					}
					?>
						<div class="col-12 text-center">
							<div class="pagination mt-30 mb-20">
								<span class="sep">
									<a href="#" class="page-numbers prev mr-sm-5 mr-3">
										<i class="fa fa-angle-left"></i>
									</a>
									<a href="#" class="page-numbers">1</a>
									<a href="#" class="page-numbers active">2</a>
									<a href="#" class="page-numbers">3</a>
									<a href="#" class="page-numbers">...</a>
									<a href="#" class="page-numbers">8</a>
									<a href="#" class="page-numbers next ml-sm-5 ml-3">
										<i class="fa fa-angle-right"></i>
									</a>
								</span>
							</div>
						</div>
					</div>
				</div>
			<!-- grid-view-ends -->
          </div>
        </div>
      </div>
    </section>
    <!-- listings end -->
    <!-- footer starts -->
    <?php include 'common/footer.php';?>
    <!-- footer end -->
  </body>
</html>
