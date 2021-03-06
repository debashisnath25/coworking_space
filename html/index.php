<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'common/metalinks.php';?>
	<style>
		.icon-height{
			height:170px;
		}
		.theme-header-one{
			background-color: rgba(0, 0, 0, 0.5) !important;
		}
		.sticky-menu{
			background-color:#1e1e1e !important;
		}
		.all-title{
			margin: 30px 0px;
		}
		.big_icon {
			font-size:50px;
		}
	</style>
  </head>
  <body>
    <!-- Header start-->
    <?php include 'common/header.php';?>
    <!-- Header end -->
    <!-- banner start -->
    <div class="main-banner">
      <div class="banner-image" style="background-image:url('img/home_banner.jpg');">
        <div class="container">
          <div class="banner-content" style="padding-top:100px;">
            <div class="row">
              <div class="col-12 mt-4">
                <h3 style="color:#fff;">Find The Best Office Place In Your City
                </h3>
              </div>
            </div>
            <form action="#" class="banner-form mt-4">
              <div class="row justify-content-md-center">
                <div class="col-lg-3 col-md-6" style="padding:3px! important;">
                  <input type="text" class="form-control mb-lg-0" placeholder="Enter city or Locality name">
                </div>
                <div class="col-lg-3 col-md-6" style="padding:3px! important;">
                  <select class="form-control mb-lg-0 custom-select" id="service2">
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
                <div class="col-lg-2 col-md-4" style="padding:3px! important;">
                  <button type="submit" class="btn btn-one btn-anim w-100">
                    <i class="fa fa-search">
                    </i> search
                  </button>
                </div>
              </div>
            </form>
			
          </div>
		  <div class="list-category">
		  		<div class="row">
					<div class="col-12 mb-4">
					<h3 style="color:#fff;">What Can You Book?
					</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2 col-md-4 col-sm-6 col-12">
						<div class="list-items mb-30 btn-anim">
							<div class="icon-box">
								<i class="flaticon-team"></i>
							</div>
							<h5 class="mb-0">
								<a href="#">Meeting Room</a>
							</h5>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-6 col-12">
						<div class="list-items mb-30 btn-anim">
							<div class="icon-box">
								<i class="flaticon-appointment"></i>
							</div>
							<h5 class="mb-0">
								<a href="#">Coworking Space</a>
							</h5>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-6 col-12">
						<div class="list-items mb-30 btn-anim">
							<div class="icon-box">
								<i class="flaticon-shop"></i>
							</div>
							<h5 class="mb-0">
								<a href="#">Private Office</a>
							</h5>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-6 col-12">
						<div class="list-items mb-30 btn-anim">
							<div class="icon-box">
								<i class="flaticon-hotel"></i>
							</div>
							<h5 class="mb-0">
								<a href="#">Training Room</a>
							</h5>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-6 col-12">
						<div class="list-items mb-30 btn-anim">
							<div class="icon-box">
								<i class="flaticon-team"></i>
							</div>
							<h5 class="mb-0">
								<a href="#">Business Center</a>
							</h5>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-6 col-12">
						<div class="list-items mb-30 btn-anim">
							<div class="icon-box">
								<i class="flaticon-shop"></i>
							</div>
							<h5 class="mb-0">
								<a href="#">Coworking Cafes</a>
							</h5>
						</div>
					</div>
				</div>
			</div>
        </div>
      </div>
    </div>
    <!-- banner end -->


	    <section class="popular-list sp-100 bg-w">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="all-title">
              <h3 class="sec-title">
               Top Spaces
              </h3>
              <svg class="title-sep">
                <path fill-rule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z"
                      />
              </svg>
              
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="popular-list-slider mb-0">
			<?php
			for($i=0;$i<=5;$i++)
			{
			?>
              <div class="listing-item p-2">
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
						<i class="far fa-heart"></i> 4
					</a>
				</div>
                </div>
                <div class="list-content p-2">
                  <h5 class="mb-2">
                    <a href="listing_details.php">Work with us
                    </a>
                  </h5>
                  <p>Work Cafe
                  </p>
                  <ul class="ctg-info2 pt-2 mt-3 centering justify-content-between">
                    <li class="mt-1">
                      <a href="#">
                        <i class="fa fa-map-marker-alt mr-2">
                        </i>Dwarka,New Delhi
                      </a>
                    </li>
                    <li class="mt-1">
                      <a href="#">
                        <i class="fa fa-phone mr-2">
                        </i>0123-456-789
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
			 <?php
			 }
			 ?>
            </div>
          </div>
        </div>
      </div>
    </section>
	
	<section class="sp-100 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="all-title">
                        <h3 class="sec-title">
                            Popular Locations
                        </h3>
                        <svg class="title-sep">
                            <path fill-rule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z"
                            />
                        </svg>
                    </div>
                </div>
            </div>
			
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
					<a href="listing.php">
                    <div class="blog-item blog-1" style="background-image:url('img/ko.png');border: 1px solid #3e55ff;height:200px;">
                        <div class="blog-content">
							
                            <h5>
                               &nbsp;
                            </h5>
                            <ul class="blog-meta d-flex justify-content-between align-items-center">
                                <li>
                                    &nbsp;
                                    
                                </li>
                                
                            </ul>
                        </div>
                    </div>
					</a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
					<a href="listing.php">
                    <div class="blog-item blog-1" style="background-image:url('img/de.png');border: 1px solid #3e55ff;height:200px;">
                        <div class="blog-content">
                            <h5>
                               &nbsp;
                            </h5>
                            <ul class="blog-meta d-flex justify-content-between align-items-center">
                                <li>
                                    &nbsp;
                                    
                                </li>
                                
                            </ul>
                        </div>
                    </div>
					</a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
				<a href="listing.php">
                    <div class="blog-item blog-1" style="background-image:url('img/hy.png');border: 1px solid #3e55ff;height:200px;">
                        <div class="blog-content">
                            <h5>
                               &nbsp;
                            </h5>
                            <ul class="blog-meta d-flex justify-content-between align-items-center">
                                <li>
                                    &nbsp;
                                    
                                </li>
                                
                            </ul>
                        </div>
                    </div>
					</a>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
					<a href="listing.php">
                    <div class="blog-item blog-1" style="background-image:url('img/mu.png');border: 1px solid #3e55ff;height:200px;">
                        <div class="blog-content">
                            <h5>
                               &nbsp;
                            </h5>
                            <ul class="blog-meta d-flex justify-content-between align-items-center">
                                <li>
                                    &nbsp;
                                    
                                </li>
                                
                            </ul>
                        </div>
                    </div>
					</a>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
					<a href="listing.php">
                    <div class="blog-item blog-1" style="background-image:url('img/ba.png');border: 1px solid #3e55ff;height:200px;">
                        <div class="blog-content">
                            <h5>
                               &nbsp;
                            </h5>
                            <ul class="blog-meta d-flex justify-content-between align-items-center">
                                <li>
                                    &nbsp;
                                    
                                </li>
                                
                            </ul>
                        </div>
                    </div>
					</a>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
					<a href="listing.php">
                    <div class="blog-item blog-1" style="background-image:url('img/ch.png');border: 1px solid #3e55ff;height:200px;">
                        <div class="blog-content">
                            <h5>
                               &nbsp;
                            </h5>
                            <ul class="blog-meta d-flex justify-content-between align-items-center">
                                <li>
                                    &nbsp;
                                    
                                </li>
                                
                            </ul>
                        </div>
                    </div>
					</a>
                </div>
                <div class="col-12 text-center mt-30">
                    <a href="#" class="btn btn-one btn-anim">view all</a>
                </div>
            </div>
        </div>
    </section>
	
    <!-- blog end -->
	<!-- How it works Start-->
	<section class="steps-section sp-100 bg-dull tri-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="all-title">
                        <h3 class="sec-title" style="color:white;">
                            How It Works
                        </h3>
                        <svg class="title-sep">
                            <path fill-rule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="row steps-wrap justify-content-center">
                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <div class="steps">
                        <div class="icon-box mb-3">
                            <i class="flaticon-layers"></i>
                        </div>
                        <h5>
                            <span class="c-theme">1. </span> Choose a Category</h5>
                        <p class="mb-0">Search the market, shortlist options and request viewing and confirm viewing</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <div class="steps">
                        <div class="icon-box mb-3">
                            <i class="flaticon-map"></i>
                        </div>
                        <h5>
                            <span class="c-theme">2. </span> Find What You Want</h5>
                        <p class="mb-0">Choose your perfect and we'll help negotiate the best deal on anything from start to finish</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <div class="steps">
                        <div class="icon-box mb-3">
                            <i class="flaticon-shop"></i>
                        </div>
                        <h5>
                            <span class="c-theme">3. </span> go Out &amp; Explore</h5>
                        <p class="mb-0">Flexible to change the workspace as your growth on demand.we're there to advise</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!-- How it works end-->
	<!-- why choose us start -->
	<div class="about-1 o-hide bg-w sp-100">
        <div class="container">
		   <div class="row">
                <div class="col-12">
                    <div class="all-title">
                        <h3 class="sec-title">
                            Why Choose Us
                        </h3>
                        <svg class="title-sep">
                            <path fill-rule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z"
                            />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 align-self-end">
                    <div class="abt-img">
                        <img src="img/abt-mockup.png" alt="mockup">
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <h4>New Day, New Workspace</h4>
                    <p>Over 100+ locations and still counting; this is a quest to bring you a work space closer to wherever you are.
                    </p>
					<h4>Work more, Pay less</h4>
                    <p>With super-flexi Bundesk subscription, enjoy the freedom of no monthly rental, no deposit, no lock-in, no expiry.
                    </p>
					<h4>Meet People, Seize Opportunities</h4>
                    <p>Connect with over 10000+ like-minded individuals. Get professional help, find your next client or perhaps, a buddy for life!
                    </p>
                </div>

            </div>
        </div>
    </div>
	<!-- why choose us end -->
	
    <!-- popular list start-->
	<!-- <section class= "sp-100 bg-w">
      <div class="container">
	  <div class="row" >
          <div class="col-12">
            <div class="all-title">
              <h3 class="sec-title">
               Our Promise & Features
              </h3>
              <svg class="title-sep">
                <path fill-rule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z"
                      />
              </svg>
              
            </div>
          </div>
        </div>
        <div class="row" >
			<div class="col-xl-2 col-sm-6 col-12 text-center">
				<div class="aminities">
					<p><i class="flaticon-map-marker big_icon"></i></p>
					<span>Prime Location</span>
				</div>
			</div>
			<div class="col-xl-2 col-sm-6 col-12 text-center">
				<div class="aminities">
					<p><i class="flaticon-computer-screen big_icon"></i></p>
					<span>Projector</span>
				</div>
			</div>
			<div class="col-xl-2 col-sm-6 col-12 text-center">
				<div class="aminities">
					<p><i class="flaticon-dish big_icon"></i></p>
					<span>Cafeteria</span>
				</div>
			</div>
			<div class="col-xl-2 col-sm-6 col-12 text-center">
				<div class="aminities">
					<p><i class="flaticon-air-conditioner big_icon"></i></p>
					<span>Air Condition</span>
				</div>
			</div>
			<div class="col-xl-2 col-sm-6 col-12 text-center">
				<div class="aminities">
					<p><i class="flaticon-wifi big_icon"></i></p>
					<span>Free Wifi</span>
				</div>
			</div>
			<div class="col-xl-2 col-sm-6 col-12 text-center">
				<div class="aminities">
					<p><i class="flaticon-bathtub big_icon"></i></p>
					<span>Restroom</span>
				</div>
			</div>
		</div>
      </div>
    </section> -->

<!-- peoples favorite start-->

	<section class="bg-white sp-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="all-title">
                        <h3 class="sec-title">
                            People's Favourite
                        </h3>
                        <svg class="title-sep">
                            <path fill-rule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 mb-30">
                    <div class="team-item">
                        <img src="img/l-1.png" alt="lister">
						<div class="rate-like centering justify-content-between">
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
							</div>
							<a class="likes" href="#">
								<i class="far fa-heart"></i> 4
							</a>
						</div>
                    </div>
					<div class="list-content p-2">
					  <h5 class="mb-2">
						<a href="listing_details.php">Work with us
						</a>
					  </h5>
					  <p>Work Cafe
					  </p>
					  <ul class="ctg-info2 pt-2 mt-3 centering justify-content-between">
						<li class="mt-1">
						  <a href="#">
							<i class="fa fa-map-marker-alt mr-2">
							</i>Dwarka,New Delhi
						  </a>
						</li>
						<li class="mt-1">
						  <a href="#">
							<i class="fa fa-phone mr-2">
							</i>0123-456-789
						  </a>
						</li>
					  </ul>
					</div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-30">
                    <div class="team-item">
                        <img src="img/l-2.png" alt="lister">
						<div class="rate-like centering justify-content-between">
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
							</div>
							<a class="likes" href="#">
								<i class="far fa-heart"></i> 4
							</a>
						</div>
                    </div>
					<div class="list-content p-2">
					  <h5 class="mb-2">
						<a href="listing_details.php">Work with us
						</a>
					  </h5>
					  <p>Work Cafe
					  </p>
					  <ul class="ctg-info2 pt-2 mt-3 centering justify-content-between">
						<li class="mt-1">
						  <a href="#">
							<i class="fa fa-map-marker-alt mr-2">
							</i>Dwarka,New Delhi
						  </a>
						</li>
						<li class="mt-1">
						  <a href="#">
							<i class="fa fa-phone mr-2">
							</i>0123-456-789
						  </a>
						</li>
					  </ul>
					</div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-30">
                    <div class="team-item">
                        <img src="img/l-3.png" alt="lister">
						<div class="rate-like centering justify-content-between">
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
							</div>
							<a class="likes" href="#">
								<i class="far fa-heart"></i> 4
							</a>
						</div>
                    </div>
					<div class="list-content p-2">
					  <h5 class="mb-2">
						<a href="listing_details.php">Work with us
						</a>
					  </h5>
					  <p>Work Cafe
					  </p>
					  <ul class="ctg-info2 pt-2 mt-3 centering justify-content-between">
						<li class="mt-1">
						  <a href="#">
							<i class="fa fa-map-marker-alt mr-2">
							</i>Dwarka,New Delhi
						  </a>
						</li>
						<li class="mt-1">
						  <a href="#">
							<i class="fa fa-phone mr-2">
							</i>0123-456-789
						  </a>
						</li>
					  </ul>
					</div>
                </div>
				<div class="col-lg-3 col-md-6 col-12 mb-30">
					<div class="team-item">
						<img src="img/l-2.png" alt="lister">
						<div class="rate-like centering justify-content-between">
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
							</div>
							<a class="likes" href="#">
								<i class="far fa-heart"></i> 4
							</a>
						</div>
					</div>
					<div class="list-content p-2">
					  <h5 class="mb-2">
						<a href="listing_details.php">Work with us
						</a>
					  </h5>
					  <p>Work Cafe
					  </p>
					  <ul class="ctg-info2 pt-2 mt-3 centering justify-content-between">
						<li class="mt-1">
						  <a href="#">
							<i class="fa fa-map-marker-alt mr-2">
							</i>Dwarka,New Delhi
						  </a>
						</li>
						<li class="mt-1">
						  <a href="#">
							<i class="fa fa-phone mr-2">
							</i>0123-456-789
						  </a>
						</li>
					  </ul>
					</div>
            </div>
        </div>
		<br>
    </section>
	
	<!-- peoples favourite end -->

	

	<!-- cta-one start-->

    <section class="cta-one tri-bg-w text-lg-left text-center">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 my-lg-0 my-5 py-lg-0 py-5">
            <div class="cta-content">
              <h3>Discover India's largest and most loved coworking network
              </h3>
              <p>Over 100+ locations and still counting; this is a quest to bring you a work space closer to wherever you are.
              </p>
			  <a href="enquiry_basic.php" class="btn btn-two btn-anim mt-2">
				  Enquiry now
			  </a>
            </div>
          </div>
          <div class="col-lg-6 d-lg-block d-none">
            <div class="mt-4">
              <img src="img/cta-bg2.png" alt="image">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- cta-one end -->


	<section class="popular-list sp-100 bg-w">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="all-title">
              <h3 class="sec-title">
               Our Reviews
              </h3>
              <svg class="title-sep">
                <path fill-rule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z"
                      />
              </svg>
              
            </div>
          </div>
        </div>
        <div class="testi-slider1 owl-carousel owl-theme">
		<?php
		for($i=0;$i<=5;$i++){
		?>
          <div class="slide-item">
			<div class="testi-item mb-30">
				<div class="img-holder">
					<img src="img/testi2.png" alt="lister">
				</div>
				<div class="testi-content">
					<h5 class="mb-1">Priyanka singh</h5>
					<span class="c-theme mb-3 d-block">ABC limited</span>
					<p class="mb-0">Lorem ipsum donec pede justo, fringilla vel, aliqu et nectei vulp utate eget fg arcu. In enim
						justo, rhcusut imp erdiet venenatis vitae.</p>
				</div>
			</div>
		</div>
		  <?php
			}
		  ?>
        </div>
      </div>
    </section>
	<!-- partner start-->
    <!-- <div class="partner-one bg-red py-5" style="background-color:#009E9E;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="partner-slider owl-carousel owl-theme">
                        <div class="partner-slide">
                            <img src="img/logo_1.png" alt="partner">
                        </div>
                        <div class="partner-slide">
                            <img src="img/logo_2.png" alt="partner">
                        </div>
                        <div class="partner-slide">
                            <img src="img/logo_3.png" alt="partner">
                        </div>
                        <div class="partner-slide">
                            <img src="img/logo_4.png" alt="partner">
                        </div>
                        <div class="partner-slide">
                            <img src="img/logo_5.png" alt="partner">
                        </div>
                        <div class="partner-slide">
                            <img src="img/logo_6.png" alt="partner">
                        </div>
                        <div class="partner-slide">
                            <img src="img/logo_7.png" alt="partner">
                        </div>
                        <div class="partner-slide">
                            <img src="img/logo_8.png" alt="partner">
                        </div>
                        <div class="partner-slide">
                            <img src="img/logo_1.png" alt="partner">
                        </div>
                        <div class="partner-slide">
                            <img src="img/logo_2.png" alt="partner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- partner end-->
    <!-- popular list end -->


    <!-- footer starts -->
    <?php include 'common/footer.php';?>
    <!-- footer end -->
  </body>
</html>
