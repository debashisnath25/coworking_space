<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'common/metalinks.php';?>
	<style>
		.filter-box .form-control{
			border-radius:0px;
			background-color: #f8f8f8;
			margin-bottom:20px;
		}
		.set_font{
			font-size:14px;
		}
		.range-box{
			border-radius:0px;
			margin-bottom:20px;
		}
		.abt-listing {
			border: 1px solid #ccc;
		}
		.listing-item {
			border: 1px solid #ccc;
		}
		.img-holder img {
			height: 200px !important; 
		}
	</style>
  </head>
  <body>
    <!-- Header start-->
    <?php include 'common/header.php';?>
    <!-- Header end -->
    <!-- listings start-->
    <div class="bg-w sp-100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <ul class="banner-link ">
              <li>
                <a href="index.php">Home
                </a>
              </li>
              <li>
                <span class="active">our workspaces
                </span>
              </li>
            </ul>
          </div>
        </div>
        <div class="row mt-5">
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
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <h5 class="mb-30">Price:
                          <i class="fas fa-rupee-sign">
                          </i> 
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
                    <div class="col-12 mb-60">
                      <h5 class="mb-30">facilities
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
                    <div class="col-12 mb-60">
                      <h5 class="mb-30">capacity
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
                        Popularity
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
					<div class="row">
						<div class="col-12 mb-30">
							<div class="listing-item p-2">
								<div class="img-list">
									<div class="img-holder">
										<span class="offer">save 49%
										</span>
										<img src="img/l-1.png" alt="list">
										<div class="rate-like centering justify-content-between">
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
											</div>
											<a class="likes" href="#">
												<i class="far fa-heart"></i>25
											</a>
										</div>
									</div>
								</div>
								<div class="list-content">
									<ul class="ctg-info py-2 mb-3">
										<li>
											<a href="#">
												<i class="flaticon-cutlery mr-2"></i> restaurants</a>
										</li>
										<li>
											<span class="c-theme"> open now</span>
										</li>
									</ul>
									<h5 class="mb-2">
										<a href="listing-detail.html">the lounge & bar</a>
									</h5>
									<p>Donec pede justo, fringilla vel, aliquet nectior magna laboris do in.</p>
									<ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
										<li class="mt-1">
											<a href="#">
												<i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
										</li>
										<li class="mt-1">
											<a href="#">
												<i class="fa fa-phone mr-2"></i>0123-456-789</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-12 mb-30">
							<div class="listing-item p-2">
								<div class="img-list">
									<div class="img-holder">
										<span class="offer">save 30%
										</span>
										<img src="img/l-2.png" alt="list">
										<div class="rate-like centering justify-content-between">
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
											</div>
											<a class="likes" href="#">
												<i class="far fa-heart"></i>33
											</a>
										</div>
									</div>
								</div>
								<div class="list-content">
									<ul class="ctg-info py-2 mb-3">
										<li>
											<a href="#">
												<i class="flaticon-shop mr-2"></i>shopping</a>
										</li>
										<li>
											<span class="c-theme"> open now</span>
										</li>
									</ul>
									<h5 class="mb-2">
										<a href="listing-detail.html">the best shop in city</a>
									</h5>
									<p>Donec pede justo, fringilla vel, aliquet nectior magna laboris do in.</p>
									<ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
										<li class="mt-1">
											<a href="#">
												<i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
										</li>
										<li class="mt-1">
											<a href="#">
												<i class="fa fa-phone mr-2"></i>0123-456-789</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-12 mb-30">
							<div class="listing-item p-2">
								<div class="img-list">
									<div class="img-holder">
										<span class="offer">save 19%
										</span>
										<img src="img/l-3.png" alt="list">
										<div class="rate-like centering justify-content-between">
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="far fa-star"></i>
											</div>
											<a class="likes" href="#">
												<i class="far fa-heart"></i>55
											</a>
										</div>
									</div>
								</div>
								<div class="list-content">
									<ul class="ctg-info py-2 mb-3">
										<li>
											<a href="#">
												<i class="flaticon-cheers mr-2"></i>nightlife</a>
										</li>
										<li>
											<span class="c-theme"> open now</span>
										</li>
									</ul>
									<h5 class="mb-2">
										<a href="listing-detail.html">enjoy best nightlife</a>
									</h5>
									<p>Donec pede justo, fringilla vel, aliquet nectior magna laboris do in.</p>
									<ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
										<li class="mt-1">
											<a href="#">
												<i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
										</li>
										<li class="mt-1">
											<a href="#">
												<i class="fa fa-phone mr-2"></i>0123-456-789</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-12 mb-30">
							<div class="listing-item p-2">
								<div class="img-list">
									<div class="img-holder">
										<span class="offer">save 59%
										</span>
										<img src="img/l-1.png" alt="list">
										<div class="rate-like centering justify-content-between">
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
											</div>
											<a class="likes" href="#">
												<i class="far fa-heart"></i>24
											</a>
										</div>
									</div>
								</div>
								<div class="list-content">
									<ul class="ctg-info py-2 mb-3">
										<li>
											<a href="#">
												<i class="flaticon-spa mr-2"></i>beauty & spa</a>
										</li>
										<li>
											<span class="c-theme"> open now</span>
										</li>
									</ul>
									<h5 class="mb-2">
										<a href="listing-detail.html">best beauty & spa services</a>
									</h5>
									<p>Donec pede justo, fringilla vel, aliquet nectior magna laboris do in.</p>
									<ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
										<li class="mt-1">
											<a href="#">
												<i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
										</li>
										<li class="mt-1">
											<a href="#">
												<i class="fa fa-phone mr-2"></i>0123-456-789</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-12 mb-30">
							<div class="listing-item p-2">
								<div class="img-list">
									<div class="img-holder">
										<span class="offer">save 20%
										</span>
										<img src="img/l-2.png" alt="list">
										<div class="rate-like centering justify-content-between">
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<a class="likes" href="#">
												<i class="far fa-heart"></i>36
											</a>
										</div>
									</div>
								</div>
								<div class="list-content">
									<ul class="ctg-info py-2 mb-3">
										<li>
											<a href="#">
												<i class="flaticon-find mr-2"></i>desitination</a>
										</li>
										<li>
											<span class="c-theme"> open now</span>
										</li>
									</ul>
									<h5 class="mb-2">
										<a href="listing-detail.html">best destinations in city</a>
									</h5>
									<p>Donec pede justo, fringilla vel, aliquet nectior magna laboris do in.</p>
									<ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
										<li class="mt-1">
											<a href="#">
												<i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
										</li>
										<li class="mt-1">
											<a href="#">
												<i class="fa fa-phone mr-2"></i>0123-456-789</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-12 mb-30">
							<div class="listing-item p-2">
								<div class="img-list">
									<div class="img-holder">
										<span class="offer">save 26%
										</span>
										<img src="img/l-3.png" alt="list">
										<div class="rate-like centering justify-content-between">
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="far fa-star"></i>
											</div>
											<a class="likes" href="#">
												<i class="far fa-heart"></i>84
											</a>
										</div>
									</div>
								</div>
								<div class="list-content">
									<ul class="ctg-info py-2 mb-3">
										<li>
											<a href="#">
												<i class="flaticon-hotel mr-2"></i>hotels</a>
										</li>
										<li>
											<span class="c-theme"> open now</span>
										</li>
									</ul>
									<h5 class="mb-2">
										<a href="listing-detail.html">comfy hotels in town</a>
									</h5>
									<p>Donec pede justo, fringilla vel, aliquet nectior magna laboris do in.</p>
									<ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
										<li class="mt-1">
											<a href="#">
												<i class="fa fa-map-marker-alt mr-2"></i>San Francisco</a>
										</li>
										<li class="mt-1">
											<a href="#">
												<i class="fa fa-phone mr-2"></i>0123-456-789</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-12 text-center mt-30">
							<a href="#" class="btn btn-one btn-anim">load more</a>
						</div>
					</div>
				</div>
			<!-- grid-view-ends -->
          </div>
        </div>
      </div>
    </div>
    <!-- listings end -->
    <!-- footer starts -->
    <?php include 'common/footer.php';?>
    <!-- footer end -->
  </body>
</html>
