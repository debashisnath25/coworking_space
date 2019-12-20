<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'common/metalinks.php';?>

	<!------ Include the above in your HEAD tag ---------->
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
	<style>
		.abt-listing{
			border:1px solid #CCC;
			margin-bottom:10px;
			background:#fff;
			border-radius:5px;
		}
		.btn-two{
			background-color: #009e9e;
			color:#fff;
		}
		.btn-two:hover {
			background-color: #009e9e;
			color:#fff;
		}
		.btn-three{
			border:1px solid #ff3a54;
			background-color: #fff;
			color:#ff3a54;
		}
		
		.theme-header-one{
			background-color: #1e1e1e !important;
		}
		.sticky-menu{
			background-color:#1e1e1e !important;
		}
		.popular-list-slider .slick-dots::after{
			background-color:transparent !important;
		}
		.popular-list-slider .slick-dots li{
			background-color:transparent !important;
		}
		.img-holder img{
			height:auto;
		}
		.sp-100 {
			padding-top: 100px;
			padding-bottom: 14px;
		}
		.sidebar-listing-slider.owl-theme .owl-dots .owl-dot {
			background-color: none !important;
			position: relative;
		}
		.widget{
			margin-bottom:10px;
		}
		.abt-listing p, .minus-pad, .contact-info li, .ctg-info li a{
			font-size:14px;
		}
		.contact-info li{
			margin-bottom:5px;
		}
		.minus-pad i{
			color:#ff3a54;
		}
		.banner-link{
			font-size:13px;
		}
		/* Image Slider Starts */
		#carousel3d .carousel-3d-slide {
		  display: -webkit-box;
		  display: -ms-flexbox;
		  display: flex;
		  -webkit-box-flex: 1;
			  -ms-flex: 1;
				  flex: 1;
		  -webkit-box-orient: vertical;
		  -webkit-box-direction: normal;
			  -ms-flex-direction: column;
				  flex-direction: column;
		  -webkit-box-pack: center;
			  -ms-flex-pack: center;
				  justify-content: center;
		  text-align: center;
		  background-color: #fff;
		  -webkit-transition: all .4s;
		  transition: all .4s;
		}
		#carousel3d .carousel-3d-slide.current {
		  background-color: #f8f8f8;
		  color: #fff;
		}	
		#carousel3d img{
			height:100%;
		}
		/* Image Slider Ends */
	</style>
  </head>
  <body>
    <!-- Header start-->
    <?php include 'common/header.php';?>
    <!-- Header end -->
	<section class="popular-list sp-100">
		<div class="container-fluid">
			<div id="carousel3d">
			  <carousel-3d :perspective="0" :space="450" :display="5" :controls-visible="true" :controls-prev-html="'❬'"  :controls-width="30" :controls-height="100" :controls-next-html="'❭'" :clickable="true" :autoplay="true" :autoplay-timeout="5000">
				<slide :index="0">
					<img src="img/sala-900x600.png" alt="list" >
				</slide>
				<slide :index="1">
					<img src="img/sala-900x600.png" alt="list">
				</slide>
				<slide :index="2">
					<img src="img/944390254ed4fd2b9fb33ad76b37d9a1.png" alt="list">
				</slide>
				<slide :index="3">
					<img src="img/coworking.jpg" alt="list">
				</slide>
				<slide :index="4">
					<img src="img/coworking.jpg" alt="list">
				</slide>
				<slide :index="5">
					<img src="img/coworking.jpg" alt="list">
				</slide>
				<slide :index="6">
					<img src="img/coworking.jpg" alt="list">
				</slide>

			  </carousel-3d>
			</div>
		</div>
	</section>
    <!-- listing slider start-->
    
    <!-- listing slider end -->
    <!-- listing detail start-->
    <div style="background:#f8f8f8;padding-top: 1px;">
      <div class="container">
	  <h4 class="title-sep3 mb-20 mt-30">Home > Co-working Space ><span class="c-theme"> Details Page</span> </h4>
        <div class="row">
          <div class="col-lg-8 col-12">
            <div class="listing-detail abt-listing">
              <h4>24X7 Luxurious and Premium 24 Seater Meeting Room in Mumbai
              </h4>
                <ul class="ctg-info centering justify-content-start">
                  <li>
                    <a href="#">
                      <i class="fa fa-map-marker-alt mr-2">
                      </i>KT Nagar, Nagpur, Maharashtra
                    </a>
                  </li>
                  <li class="my-1">
                    <a href="#">
                      <i class="fa fa-phone mr-2">
                      </i> 0123-456-789
                    </a>
                  </li>
                </ul>
            </div>
            <div class=" abt-listing">
              <h5 class="title-sep3">
                description
              </h5>
              <p>From being a well-known hub or just starting up, Nagpur is evolving to embrace shared workstations. Qdesq offers you a co-working space in KT Nagar, Nagpur. Offering single workstations in a shared office environment, Qdesq is a verified branded workspace provider. These spaces are well equipped with AC with power backup, Meeting rooms, free WiFi, clean toilet, for you to enjoy just working.
              </p>
              <p>The cost-effective way of collaborative working space also comes with free tea/coffee for your recharge. These workstations can be rented on a monthly basis and offer to you an environment where work isn't just working, it is learning and growing.
              </p>
            </div>
            <div class=" abt-listing">
              <h5 class="title-sep3">
                facilities
              </h5>
              <div class="row minus-pad">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="w-100 mb-2">
                    <i class="fa fa-check"></i> <label for="checkbox_id6">Card Payment
                    </label>
                  </div>
                  <div class="w-100 mb-2">
                    <i class="fa fa-check"></i> <label for="checkbox_id7">Free Parking
                    </label>
                  </div>
                  <div class="w-100 mb-2">
                    <i class="fa fa-check"></i> <label for="checkbox_id8">Free Wi-Fi
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="w-100 mb-2">
                   <i class="fa fa-check"></i> <label for="checkbox_id9">Family Friendly
                    </label>
                  </div>
                  <div class="w-100 mb-2">
                    <i class="fa fa-check"></i> <label for="checkbox_id10">Wheelchair
                    </label>
                  </div>
                  <div class="w-100 mb-2">
                    <i class="fa fa-check"></i> <label for="checkbox_id11">Air Conditioning
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="w-100 mb-2">
                    <i class="fa fa-check"></i> <label for="checkbox_id12">Fitness Center
                    </label>
                  </div>
                  <div class="w-100 mb-2">
                    <i class="fa fa-check"></i> <label for="checkbox_id13">Reservations
                    </label>
                  </div>
                  <div class="w-100 mb-2">
                    <i class="fa fa-check"></i> <label for="checkbox_id14">Smoking Allowed
                    </label>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="w-100 mb-2">
                    <i class="fa fa-check"></i> <label for="checkbox_id15">Swimming Pool
                    </label>
                  </div>
                  <div class="w-100 mb-2">
                    <i class="fa fa-check"></i> <label for="checkbox_id16">Coupons
                    </label>
                  </div>
                  <div class="w-100 mb-2">
                    <i class="fa fa-check"></i> <label for="checkbox_id17">Pet Friendly
                    </label>
                  </div>
                </div>
              </div>
            </div>
            
            <div class=" abt-listing">
              <h5 class="title-sep3">
                Ratings
              </h5>
              
              <div class="row mt-30">
                <div class="col-lg-3 col-md-4">
                  <div class="rating-big-box mb-3">
                    <h2>4.5
                    </h2>
                    <h6>superb
                    </h6>
                  </div>
                  <div class="rating-btn-down">
                    <a href="#" class="btn w-100 review-btn btn-anim">3 Reviews
                    </a>
                  </div>
                </div>
                <div class="col-lg-9 col-md-8">
                  <div class="rating-bar-box">
                    <h6>
                      <span>rating
                      </span>
                      <span>3.0
                      </span>
                    </h6>
                    <div class="rating-bars">
                      <span class="bar-fill" style="width:60%">
                      </span>
                    </div>
                  </div>
                  <div class="rating-bar-box">
                    <h6>
                      <span>facilities
                      </span>
                      <span>4
                      </span>
                    </h6>
                    <div class="rating-bars">
                      <span class="bar-fill" style="width:80%">
                      </span>
                    </div>
                  </div>
                  <div class="rating-bar-box">
                    <h6>
                      <span>staff
                      </span>
                      <span>4.5
                      </span>
                    </h6>
                    <div class="rating-bars">
                      <span class="bar-fill" style="width:90%">
                      </span>
                    </div>
                  </div>
                  <div class="rating-bar-box">
                    <h6>
                      <span>price
                      </span>
                      <span>3.5
                      </span>
                    </h6>
                    <div class="rating-bars">
                      <span class="bar-fill" style="width:70%">
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=" abt-listing">
              <h5 class="title-sep3">
                2 Reviews
              </h5>
              <div class="row">
                <div class="col-12">
                  <div class="review-box">
                    <div class="image-holder">
                      <img src="img/com-3.png" alt="author">
                    </div>
                    <div class="review-content">
                      <div class="centering justify-content-between mb-1">
                        <div>
                          <h6 class="mb-0">Rohan Singh
                          </h6>
                          <p class="c-theme mb-0">26 april 2019
                          </p>
                        </div>
                        <div class="d-flex flex-wrap">
                          <div class="rating">
                            <i class="fa fa-star">
                            </i>
                            <i class="fa fa-star">
                            </i>
                            <i class="fa fa-star">
                            </i>
                            <i class="fa fa-star">
                            </i>
                            <i class="fa fa-star-half-alt">
                            </i>
                          </div>
                          <div class="rate-bg ml-4">
                            4.5
                          </div>
                        </div>
                      </div>
                      <p class="mb-0">Really great place for offices. Highly focused and motivating environment.Supporting Management..
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-12 mt-3">
                  <div class="review-box">
                    <div class="image-holder">
                      <img src="img/com-2.png" alt="author">
                    </div>
                    <div class="review-content">
                      <div class="centering justify-content-between mb-1">
                        <div>
                          <h6 class="mb-0">Prity Singh
                          </h6>
                          <p class="c-theme mb-0">30 april 2019
                          </p>
                        </div>
                        <div class="d-flex flex-wrap">
                          <div class="rating">
                            <i class="fa fa-star">
                            </i>
                            <i class="fa fa-star">
                            </i>
                            <i class="fa fa-star">
                            </i>
                            <i class="fa fa-star-half-alt">
                            </i>
                            <i class="far fa-star">
                            </i>
                          </div>
                          <div class="rate-bg ml-4">
                            3.5
                          </div>
                        </div>
                      </div>
                      <p class="mb-0">Really great place for offices. Highly focused and motivating environment. Supporting Management..
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-5 abt-listing">
              <h5 class="title-sep3">
                add review
              </h5>
              <form class="comment-form" id="commentform" method="post" action="#">
                <div class="row">
                  <div class="col-md-6 col-12">
                    <span class="fa fa-user">
                    </span>
                    <input type="text" id="name" class="form-control" placeholder="Enter Name">
                  </div>
                  <div class="col-md-6 col-12">
                    <span class="fa fa-envelope">
                    </span>
                    <input type="email" class="form-control" placeholder="Enter Email" name="Ented email" id="email">
                  </div>
                  <div class="col-12">
                    <textarea rows="5" name="comment" class="form-control" placeholder="Your Message" id="comment">
                    </textarea>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-one btn-anim" id="submit" name="submit">
                      <i class="fa fa-paper-plane">
                      </i> submit
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <aside class="sidebar">
              <div class="widget">
                <div class="booking-form">
                  <div class="row">
                    <div class="col-12">
					  <!-- <a href="javascript:void(0);" class="btn btn-one btn-anim w-100">Book Now</a> -->
                      <a href="post_requirement.php" class="btn btn-one btn-anim w-100 mt-2">Request a Callback</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="widget abt-listing">
                <h5 class="title-sep2">business info
                </h5>
                <ul class="contact-info mt-4">
                  <li>
                    <i class="fa fa-phone">
                    </i>
                    123-456-7890, 0123-456-789
                  </li>
                  <li>
                    <i class="fa fa-envelope">
                    </i>
                    Support@company.com
                  </li>
                  <li>
                    <i class="fa fa-map-marker-alt">
                    </i>
                    23/A Sahapur colony, New Alipore, India
                  </li>
                </ul>
				<div class="socials contact-social text-center">
					<a href="#">
						<i class="fab fa-facebook-f" style="font-size:24px;"></i>
					</a>
					<a href="#">
						<i class="fab fa-google-plus-g" style="font-size:24px;"></i>
					</a>
					<a href="#">
						<i class="fab fa-instagram" style="font-size:24px;"></i>
					</a>
					<a href="#">
						<i class="fab fa-linkedin-in" style="font-size:24px;"></i>
					</a>
					<a href="#">
						<i class="fab fa-twitter" style="font-size:24px;"></i>
					</a>
				</div>
			  </div>
			  <div class="widget abt-listing">
			  	<div class="map map-sidebar">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7440.846173287218!2d79.04235307465463!3d21.175345443676612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c1b120bcbf1d%3A0x78b11644658dbff9!2sKT%20Nagar%2C%20Nagpur%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1573468308141!5m2!1sen!2sin" width="auto" height="auto" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>
			  </div>
              <!--<div class="widget abt-listing">
                <h5 class="title-sep2">Opening Hours
                </h5>
                <div class="centering opening-hours justify-content-between">
                  <p>Opening Hours :
                  </p>
                  <span class="c-theme">Open 24/7
                  </span>
                </div>
              </div> -->
              <div class="widget abt-listing">
                <h5 class="title-sep2">Recently Added
                </h5>
                <div class="sidebar-listing-slider owl-carousel owl-theme" style="background-color:none;">
                  <div class="listing-item p-2">
                    <div class="img-holder">
                      <img src="img/l-3.png" alt="list">
                    </div>
                    <div class="list-content p-2">
                      <h5 class="mt-3 mb-2">
                        <a href="listing_details.php">Co-working Space
                        </a>
                      </h5>
                      <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                        <li class="mt-1">
                          <a href="listing_details.php">
                            <i class="fa fa-map-marker-alt mr-2">
                            </i>Delhi
                          </a>
                        </li>
                        <li class="mt-1">
                          <a href="listing_details.php">
                            <i class="fa fa-phone mr-2">
                            </i>0123-456-789
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="listing-item p-2">
                    <div class="img-holder">
                      <img src="img/l-2.png" alt="list">
                    </div>
                    <div class="list-content p-2">
                      <h5 class="mt-3 mb-2">
                        <a href="listing_details.php">Co-working Space
                        </a>
                      </h5>
                      <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                        <li class="mt-1">
                          <a href="listing_details.php">
                            <i class="fa fa-map-marker-alt mr-2">
                            </i>Mumbai
                          </a>
                        </li>
                        <li class="mt-1">
                          <a href="listing_details.php">
                            <i class="fa fa-phone mr-2">
                            </i>0123-456-789
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="listing-item p-2">
                    <div class="img-holder">
                      <img src="img/l-1.png" alt="list">
                    </div>
                    <div class="list-content p-2">
                      <h5 class="mt-3 mb-2">
                        <a href="listing_details.php">Co-working Space
                        </a>
                      </h5>
                      <ul class="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                        <li class="mt-1">
                          <a href="listing_details.php">
                            <i class="fa fa-map-marker-alt mr-2">
                            </i>Kolkata
                          </a>
                        </li>
                        <li class="mt-1">
                          <a href="listing_details.php">
                            <i class="fa fa-phone mr-2">
                            </i>0123-456-789
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </div>
    <!-- listing detail end -->
    <!-- footer starts -->
    <?php include 'common/footer.php';?>
    <!-- footer end -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.7/vue.js'></script>
	<script src='https://rawgit.com/Wlada/vue-carousel-3d/master/dist/vue-carousel-3d.min.js'></script>
	<script>
	new Vue({
	  el: '#carousel3d',
	  data: {
		slides: 7
	  },
	  components: {
		'carousel-3d': Carousel3d.Carousel3d,
		'slide': Carousel3d.Slide
	  }
	})
	//# sourceURL=pen.js
	</script>
  </body>
</html>
