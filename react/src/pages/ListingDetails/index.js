import React,{Component} from 'react';
import './style.css';
import { HomeBanner,Location,SigninBanner,PopularList } from './../../components';


class ListingDetails extends Component{
    render(){
      return(
        <>
         <div>
            <section className="popular-list sp-100">
            <div className="container-fluid">
                <div id="carousel3d">
                <carousel-3d perspective={0} space={450} display={5} controls-visible="true" controls-prev-html="'❬'" controls-width={30} controls-height={100} controls-next-html="'❭'" clickable="true" autoplay="true" autoplay-timeout={5000}>
                    <slide index={0}>
                    <img src="img/sala-900x600.png" alt="list" />
                    </slide>
                    <slide index={1}>
                    <img src="img/sala-900x600.png" alt="list" />
                    </slide>
                    <slide index={2}>
                    <img src="img/944390254ed4fd2b9fb33ad76b37d9a1.png" alt="list" />
                    </slide>
                    <slide index={3}>
                    <img src="img/coworking.jpg" alt="list" />
                    </slide>
                    <slide index={4}>
                    <img src="img/coworking.jpg" alt="list" />
                    </slide>
                    <slide index={5}>
                    <img src="img/coworking.jpg" alt="list" />
                    </slide>
                    <slide index={6}>
                    <img src="img/coworking.jpg" alt="list" />
                    </slide>
                </carousel-3d>
                </div>
            </div>
            </section>
            {/* listing slider start*/}
            {/* listing slider end */}
            {/* listing detail start*/}
            <div style={{background: '#f8f8f8'}}>
            <div className="container">
                <div className="row">
                <div className="mt-3 col-12">
                    <ul className="banner-link ">
                    <li>
                        <a href="index.php">Home
                        </a>
                    </li>
                    <li>
                        <a href="listing.php">Maharashtra
                        </a>
                    </li>
                    <li>
                        <a href="listing.php">Nagpur
                        </a>
                    </li>
                    <li>
                        <a href="listing.php">Co-working Space
                        </a>
                    </li>
                    <li>
                        <span className="active">24X7 Luxurious and Premium 24 Seater Meeting Room in Mumbai
                        </span>
                    </li>
                    </ul>
                </div>
                </div>
                <div className="row">
                <div className="col-lg-8 col-12">
                    <div className="listing-detail abt-listing">
                    <h4>24X7 Luxurious and Premium 24 Seater Meeting Room in Mumbai
                    </h4>
                    <ul className="ctg-info centering justify-content-start">
                        <li>
                        <a href="#">
                            <i className="fa fa-map-marker-alt mr-2">
                            </i>KT Nagar, Nagpur, Maharashtra
                        </a>
                        </li>
                        <li className="my-1">
                        <a href="#">
                            <i className="fa fa-phone mr-2">
                            </i> 0123-456-789
                        </a>
                        </li>
                    </ul>
                    </div>
                    <div className=" abt-listing">
                    <h5 className="title-sep3">
                        description
                    </h5>
                    <p>From being a well-known hub or just starting up, Nagpur is evolving to embrace shared workstations. Qdesq offers you a co-working space in KT Nagar, Nagpur. Offering single workstations in a shared office environment, Qdesq is a verified branded workspace provider. These spaces are well equipped with AC with power backup, Meeting rooms, free WiFi, clean toilet, for you to enjoy just working.
                    </p>
                    <p>The cost-effective way of collaborative working space also comes with free tea/coffee for your recharge. These workstations can be rented on a monthly basis and offer to you an environment where work isn't just working, it is learning and growing.
                    </p>
                    </div>
                    <div className=" abt-listing">
                    <h5 className="title-sep3">
                        facilities
                    </h5>
                    <div className="row minus-pad">
                        <div className="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div className="w-100 mb-2">
                            <i className="fa fa-check" /> <label htmlFor="checkbox_id6">Card Payment
                            </label>
                        </div>
                        <div className="w-100 mb-2">
                            <i className="fa fa-check" /> <label htmlFor="checkbox_id7">Free Parking
                            </label>
                        </div>
                        <div className="w-100 mb-2">
                            <i className="fa fa-check" /> <label htmlFor="checkbox_id8">Free Wi-Fi
                            </label>
                        </div>
                        </div>
                        <div className="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div className="w-100 mb-2">
                            <i className="fa fa-check" /> <label htmlFor="checkbox_id9">Family Friendly
                            </label>
                        </div>
                        <div className="w-100 mb-2">
                            <i className="fa fa-check" /> <label htmlFor="checkbox_id10">Wheelchair
                            </label>
                        </div>
                        <div className="w-100 mb-2">
                            <i className="fa fa-check" /> <label htmlFor="checkbox_id11">Air Conditioning
                            </label>
                        </div>
                        </div>
                        <div className="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div className="w-100 mb-2">
                            <i className="fa fa-check" /> <label htmlFor="checkbox_id12">Fitness Center
                            </label>
                        </div>
                        <div className="w-100 mb-2">
                            <i className="fa fa-check" /> <label htmlFor="checkbox_id13">Reservations
                            </label>
                        </div>
                        <div className="w-100 mb-2">
                            <i className="fa fa-check" /> <label htmlFor="checkbox_id14">Smoking Allowed
                            </label>
                        </div>
                        </div>
                        <div className="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div className="w-100 mb-2">
                            <i className="fa fa-check" /> <label htmlFor="checkbox_id15">Swimming Pool
                            </label>
                        </div>
                        <div className="w-100 mb-2">
                            <i className="fa fa-check" /> <label htmlFor="checkbox_id16">Coupons
                            </label>
                        </div>
                        <div className="w-100 mb-2">
                            <i className="fa fa-check" /> <label htmlFor="checkbox_id17">Pet Friendly
                            </label>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div className=" abt-listing">
                    <h5 className="title-sep3">
                        Ratings
                    </h5>
                    <div className="row mt-30">
                        <div className="col-lg-3 col-md-4">
                        <div className="rating-big-box mb-3">
                            <h2>4.5
                            </h2>
                            <h6>superb
                            </h6>
                        </div>
                        <div className="rating-btn-down">
                            <a href="#" className="btn w-100 review-btn btn-anim">3 Reviews
                            </a>
                        </div>
                        </div>
                        <div className="col-lg-9 col-md-8">
                        <div className="rating-bar-box">
                            <h6>
                            <span>rating
                            </span>
                            <span>3.0
                            </span>
                            </h6>
                            <div className="rating-bars">
                            <span className="bar-fill" style={{width: '60%'}}>
                            </span>
                            </div>
                        </div>
                        <div className="rating-bar-box">
                            <h6>
                            <span>facilities
                            </span>
                            <span>4
                            </span>
                            </h6>
                            <div className="rating-bars">
                            <span className="bar-fill" style={{width: '80%'}}>
                            </span>
                            </div>
                        </div>
                        <div className="rating-bar-box">
                            <h6>
                            <span>staff
                            </span>
                            <span>4.5
                            </span>
                            </h6>
                            <div className="rating-bars">
                            <span className="bar-fill" style={{width: '90%'}}>
                            </span>
                            </div>
                        </div>
                        <div className="rating-bar-box">
                            <h6>
                            <span>price
                            </span>
                            <span>3.5
                            </span>
                            </h6>
                            <div className="rating-bars">
                            <span className="bar-fill" style={{width: '70%'}}>
                            </span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div className=" abt-listing">
                    <h5 className="title-sep3">
                        3 Reviews
                    </h5>
                    <div className="row">
                        <div className="col-12">
                        <div className="review-box">
                            <div className="image-holder">
                            <img src="img/com-1.jpg" alt="author" />
                            </div>
                            <div className="review-content">
                            <div className="centering justify-content-between mb-3">
                                <div>
                                <h6 className="mb-0">Tom Perrins
                                </h6>
                                <p className="c-theme mb-0">26 april 2019
                                </p>
                                </div>
                                <div className="d-flex flex-wrap">
                                <div className="rating">
                                    <i className="fa fa-star">
                                    </i>
                                    <i className="fa fa-star">
                                    </i>
                                    <i className="fa fa-star">
                                    </i>
                                    <i className="fa fa-star">
                                    </i>
                                    <i className="fa fa-star-half-alt">
                                    </i>
                                </div>
                                <div className="rate-bg ml-4">
                                    4.5
                                </div>
                                </div>
                            </div>
                            <p className="mb-0">Mollit aute dolore nisi sint tempor veniam ut magna aute. Et officia elit eu eu adipisicing
                                consectetur cillum elit eiusmod dolore est culpa..
                            </p>
                            </div>
                        </div>
                        </div>
                        <div className="col-12">
                        <div className="review-box">
                            <div className="image-holder">
                            <img src="img/com-2.jpg" alt="author" />
                            </div>
                            <div className="review-content">
                            <div className="centering justify-content-between mb-3">
                                <div>
                                <h6 className="mb-0">Kathy Brown
                                </h6>
                                <p className="c-theme mb-0">30 april 2019
                                </p>
                                </div>
                                <div className="d-flex flex-wrap">
                                <div className="rating">
                                    <i className="fa fa-star">
                                    </i>
                                    <i className="fa fa-star">
                                    </i>
                                    <i className="fa fa-star">
                                    </i>
                                    <i className="fa fa-star-half-alt">
                                    </i>
                                    <i className="far fa-star">
                                    </i>
                                </div>
                                <div className="rate-bg ml-4">
                                    3.5
                                </div>
                                </div>
                            </div>
                            <p className="mb-0">Mollit aute dolore nisi sint tempor veniam ut magna aute. Et officia elit eu eu adipisicing
                                consectetur cillum elit eiusmod dolore est culpa..
                            </p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div className="mb-5 abt-listing">
                    <h5 className="title-sep3">
                        add review
                    </h5>
                    <form className="comment-form" id="commentform" method="post" action="#">
                        <div className="row">
                        <div className="col-md-6 col-12">
                            <span className="fa fa-user">
                            </span>
                            <input type="text" id="name" className="form-control" placeholder="Enter Name" />
                        </div>
                        <div className="col-md-6 col-12">
                            <span className="fa fa-envelope">
                            </span>
                            <input type="email" className="form-control" placeholder="Enter Email" name="Ented email" id="email" />
                        </div>
                        <div className="col-12">
                            <textarea rows={5} name="comment" className="form-control" placeholder="Your Message" id="comment" defaultValue={"                    "} />
                        </div>
                        <div className="col-12">
                            <button type="submit" className="btn btn-one btn-anim" id="submit" name="submit">
                            <i className="fa fa-paper-plane">
                            </i> submit
                            </button>
                        </div>
                        </div>
                    </form>
                    </div>
                </div>
                <div className="col-lg-4 col-12">
                    <aside className="sidebar">
                    <div className="widget">
                        <div className="booking-form">
                        <div className="row">
                            <div className="col-12">
                            <a href="javascript:void(0);" className="btn btn-two btn-anim w-100">Book Now</a>
                            <a href="post_requirement.php" className="btn btn-one btn-anim w-100 mt-2">Request a Callback</a>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div className="widget abt-listing">
                        <h5 className="title-sep2">business info
                        </h5>
                        <ul className="contact-info mt-4">
                        <li>
                            <i className="fa fa-phone">
                            </i>
                            123-456-7890, 0123-456-789
                        </li>
                        <li>
                            <i className="fa fa-envelope">
                            </i>
                            Support@company.com
                        </li>
                        <li>
                            <i className="fa fa-map-marker-alt">
                            </i>
                            Consectetur 241, sed Ac-1252, UK
                        </li>
                        <li>
                            <i className="fa fa-globe-asia">
                            </i>
                            www.websiteaname.com
                        </li>
                        </ul>
                        <div className="socials sidebar-socials mt-2">
                        <div className="side-icon">
                            <i className="fa fa-share-alt">
                            </i>
                        </div>
                        <div>
                            <a href="#">
                            <i className="fab fa-facebook-f">
                            </i>
                            </a>
                            <a href="#">
                            <i className="fab fa-google-plus-g">
                            </i>
                            </a>
                            <a href="#">
                            <i className="fab fa-instagram">
                            </i>
                            </a>
                            <a href="#">
                            <i className="fab fa-linkedin-in">
                            </i>
                            </a>
                            <a href="#">
                            <i className="fab fa-twitter">
                            </i>
                            </a>
                            <a href="#">
                            <i className="fab fa-vine">
                            </i>
                            </a>
                        </div>
                        </div>
                    </div>
                    <div className="widget abt-listing">
                        <div className="map map-sidebar">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7440.846173287218!2d79.04235307465463!3d21.175345443676612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c1b120bcbf1d%3A0x78b11644658dbff9!2sKT%20Nagar%2C%20Nagpur%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1573468308141!5m2!1sen!2sin" style={{border: 0}} allowFullScreen width="auto" height="auto" frameBorder={0} />
                        </div>
                    </div>
                    <div className="widget abt-listing">
                        <h5 className="title-sep2">Opening Hours
                        </h5>
                        <div className="centering opening-hours justify-content-between">
                        <p>Opening Hours :
                        </p>
                        <span className="c-theme">Open 24/7
                        </span>
                        </div>
                    </div>
                    <div className="widget abt-listing">
                        <h5 className="title-sep2">Recently Added
                        </h5>
                        <div className="sidebar-listing-slider owl-carousel owl-theme" style={{backgroundColor: 'none'}}>
                        <div className="listing-item p-2">
                            <div className="img-holder">
                            <img src="img/l-3.png" alt="list" />
                            </div>
                            <div className="list-content p-2">
                            <h5 className="mt-3 mb-2">
                                <a href="listing_details.php">Co-working Space
                                </a>
                            </h5>
                            <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                <li className="mt-1">
                                <a href="listing_details.php">
                                    <i className="fa fa-map-marker-alt mr-2">
                                    </i>Delhi
                                </a>
                                </li>
                                <li className="mt-1">
                                <a href="listing_details.php">
                                    <i className="fa fa-phone mr-2">
                                    </i>0123-456-789
                                </a>
                                </li>
                            </ul>
                            </div>
                        </div>
                        <div className="listing-item p-2">
                            <div className="img-holder">
                            <img src="img/l-2.png" alt="list" />
                            </div>
                            <div className="list-content p-2">
                            <h5 className="mt-3 mb-2">
                                <a href="listing_details.php">Co-working Space
                                </a>
                            </h5>
                            <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                <li className="mt-1">
                                <a href="listing_details.php">
                                    <i className="fa fa-map-marker-alt mr-2">
                                    </i>Mumbai
                                </a>
                                </li>
                                <li className="mt-1">
                                <a href="listing_details.php">
                                    <i className="fa fa-phone mr-2">
                                    </i>0123-456-789
                                </a>
                                </li>
                            </ul>
                            </div>
                        </div>
                        <div className="listing-item p-2">
                            <div className="img-holder">
                            <img src="img/l-1.png" alt="list" />
                            </div>
                            <div className="list-content p-2">
                            <h5 className="mt-3 mb-2">
                                <a href="listing_details.php">Co-working Space
                                </a>
                            </h5>
                            <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                <li className="mt-1">
                                <a href="listing_details.php">
                                    <i className="fa fa-map-marker-alt mr-2">
                                    </i>Kolkata
                                </a>
                                </li>
                                <li className="mt-1">
                                <a href="listing_details.php">
                                    <i className="fa fa-phone mr-2">
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
        </div>
        </>
      );
    }
}

export default ListingDetails;
