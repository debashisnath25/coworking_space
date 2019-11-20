import React,{Component} from 'react';
import './listing.css';
import { HomeBanner,Location,SigninBanner,PopularList } from './../../components';


class Listing extends Component{
    render(){
      return(
        <>
         <div className="bg-w" style={{paddingTop: '100px'}}>
            <div className="container">
            <div className="row">
                <div className=" col-12">
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
                    <span className="active">Co-working Space
                    </span>
                    </li>
                </ul>
                </div>
            </div>
            <div className="row ">
                {/* Sidebar Starts */}
                <div className="col-lg-4 col-12 ">
                <aside className="sidebar">
                    <h4 className="title-sep2 mb-30">search filters
                    </h4>
                    <div className="widget-listing abt-listing">
                    <div className="filter-box mb-30">
                        <form action="#" method="post">
                        <div className="row">
                            <div className="col-12">
                            <div className="input-wrap">
                                <select className="form-control custom-select" id="service2">
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
                            <div className="col-12">
                            <div className="input-wrap">
                                <i className="fa fa-crosshairs">
                                </i>
                                <input type="text" className="form-control" placeholder="location" />
                            </div>
                            <hr />
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-12">
                            <h5 className="mb-15">Price:
                                <i className="fas fa-rupee-sign">
                                </i> 
                                <span className="range-value">1000
                                </span>
                            </h5>
                            <div className="input-wrap range-box">
                                <div className="range-slider">
                                <input type="range" min={1} max={10000} defaultValue={1000} className="range-track" id="myRange" />
                                </div>
                            </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div className="filter-checklist">
                        <div className="row">
                        <div className="col-12 mb-30">
                            <h5 className="mb-15">facilities
                            </h5>
                            <div className="row minus-pad">
                            <div className="col-sm-6 col-12">
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id1" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id1">AC with backup
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id2" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id2">Free tea/Coffee
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id3" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id3">Car Parking*
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id4" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id4">Whiteboard
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id5" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id5">Speaker
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id6" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id6">Free WiFi
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id7" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id7">Meeting Room
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id8" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id8">Projector
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id9" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id9">Microphone
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id10" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id10">Night Shift
                                </label>
                                </div>
                            </div>
                            <div className="col-sm-6 col-12">
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id11" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id11">Cafeteria
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id12" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id12">Reception
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id13" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id13">Video Conference
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id14" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id14">Podium
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id15" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id15">Clean Toilets
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id16" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id16">Lounge
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id17" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id17">Mailing Address
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id18" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id18">Flipboard
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id19" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id19">24x7
                                </label>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div className="col-12 mb-30">
                            <h5 className="mb-15">capacity
                            </h5>
                            <div className="row minus-pad">
                            <div className="col-sm-6 col-12">
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id_capacity_1" defaultValue="value" />
                                <label htmlFor="checkbox_id_capacity_1">1-5
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id_capacity_2" defaultValue="value" />
                                <label htmlFor="checkbox_id_capacity_2">5-15
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id_capacity_3" defaultValue="value" />
                                <label htmlFor="checkbox_id_capacity_3">15-30
                                </label>
                                </div>
                            </div>
                            <div className="col-sm-6 col-12">
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id_capacity_4" defaultValue="value" />
                                <label htmlFor="checkbox_id_capacity_4">30-50
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id_capacity_5" defaultValue="value" />
                                <label htmlFor="checkbox_id_capacity_5">50-100
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id_capacity_6" defaultValue="value" />
                                <label htmlFor="checkbox_id_capacity_6">100+
                                </label>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div className="row">
                        <div className="col-12">
                        <button type="submit" className="btn btn-one btn-anim w-100">
                            update
                        </button>
                        </div>
                    </div>
                    </div>
                </aside>
                </div>
                {/* Sidebar Ends */}
                <div className="col-lg-8 col-12">
                <div className="action-list">
                    <div className="row">
                    <div className="col-md-9 col-6 mb-30">
                    </div>
                    <div className="col-md-3 col-6 mb-30">
                        <div className="sort-filter">
                        <div className="sort-dropdown">
                            <a href="#" className="dropdown-toggle text-capitalize" data-toggle="dropdown">
                            Popularity
                            </a>
                            <div className="dropdown-menu">
                            <a className="dropdown-item" href="#">low to high
                            </a>
                            <a className="dropdown-item" href="#">hight to low
                            </a>
                            <a className="dropdown-item" href="#">relevance
                            </a>
                            <a className="dropdown-item" href="#">discount
                            </a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                {/* grid-view-start */}
                <div className="listing-list-view show-list">
                    <div className="row mb-3">
                    <div className="col-12 mb-15">
                        <div className="listing-item p-2">
                        <div className="img-list">
                            <div className="img-holder">
                            <span className="offer">save 49%
                            </span>
                            <a href="listing_details.php"><img src="img/l-1.png" alt="list" /></a>
                            <div className="rate-like centering justify-content-between">
                                <div className="rating">
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                <i className="far fa-star" />
                                <i className="far fa-star" />
                                </div>
                                <a className="likes" href="#">
                                <i className="far fa-heart" />25
                                </a>
                            </div>
                            </div>
                        </div>
                        <div className="list-content">
                            <ul className="ctg-info py-2 mb-3">
                            <li>
                                <a href="#">
                                <i className="flaticon-team mr-2" />Coworkinfg Space</a>
                            </li>
                            <li>
                                <span className="c-theme"> open now</span>
                            </li>
                            </ul>
                            <h5 className="mb-2">
                            <a href="listing_details.php">Private office</a>
                            </h5>
                            <p>Landmark :  Near Hope Appartments</p>
                            <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                            <li className="mt-1">
                                <a href="#">
                                <i className="fa fa-map-marker-alt mr-2" />Dwarka,New Delhi</a>
                            </li>
                            <li className="mt-1">
                                <a href="#">
                                <i className="fa fa-phone mr-2" />0123-456-789</a>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div className="col-12  mb-15">
                        <div className="listing-item p-2">
                        <div className="img-list">
                            <div className="img-holder">
                            <span className="offer">save 30%
                            </span>
                            <a href="listing_details.php"><img src="img/l-2.png" alt="list" /></a>
                            <div className="rate-like centering justify-content-between">
                                <div className="rating">
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                <i className="far fa-star" />
                                <i className="far fa-star" />
                                <i className="far fa-star" />
                                </div>
                                <a className="likes" href="#">
                                <i className="far fa-heart" />33
                                </a>
                            </div>
                            </div>
                        </div>
                        <div className="list-content">
                            <ul className="ctg-info py-2 mb-3">
                            <li>
                                <a href="#">
                                <i className="flaticon-shop mr-2" />Business Centre</a>
                            </li>
                            <li>
                                <span className="c-theme"> open now</span>
                            </li>
                            </ul>
                            <h5 className="mb-2">
                            <a href="listing_details.php">Workstations</a>
                            </h5>
                            <p>Landmark :  Opp to Punj Loyd</p>
                            <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                            <li className="mt-1">
                                <a href="#">
                                <i className="fa fa-map-marker-alt mr-2" />Chitpur,Noida</a>
                            </li>
                            <li className="mt-1">
                                <a href="#">
                                <i className="fa fa-phone mr-2" />0123-456-789</a>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div className="col-12  mb-15">
                        <div className="listing-item p-2">
                        <div className="img-list">
                            <div className="img-holder">
                            <span className="offer">save 19%
                            </span>
                            <a href="listing_details.php"><img src="img/l-3.png" alt="list" /></a>
                            <div className="rate-like centering justify-content-between">
                                <div className="rating">
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                <i className="far fa-star" />
                                </div>
                                <a className="likes" href="#">
                                <i className="far fa-heart" />55
                                </a>
                            </div>
                            </div>
                        </div>
                        <div className="list-content">
                            <ul className="ctg-info py-2 mb-3">
                            <li>
                                <a href="#">
                                <i className="flaticon-appointment mr-2" />Training Room</a>
                            </li>
                            <li>
                                <span className="c-theme"> open now</span>
                            </li>
                            </ul>
                            <h5 className="mb-2">
                            <a href="listing_details.php">Meeting Room</a>
                            </h5>
                            <p>Landmark :  Medanta Hospital</p>
                            <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                            <li className="mt-1">
                                <a href="#">
                                <i className="fa fa-map-marker-alt mr-2" />Vasant kunj,New Delhi</a>
                            </li>
                            <li className="mt-1">
                                <a href="#">
                                <i className="fa fa-phone mr-2" />0123-456-789</a>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div className="col-12  mb-15">
                        <div className="listing-item p-2">
                        <div className="img-list">
                            <div className="img-holder">
                            <span className="offer">save 59%
                            </span>
                            <a href="listing_details.php"><img src="img/l-1.png" alt="list" /></a>
                            <div className="rate-like centering justify-content-between">
                                <div className="rating">
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                <i className="far fa-star" />
                                <i className="far fa-star" />
                                <i className="far fa-star" />
                                </div>
                                <a className="likes" href="#">
                                <i className="far fa-heart" />24
                                </a>
                            </div>
                            </div>
                        </div>
                        <div className="list-content">
                            <ul className="ctg-info py-2 mb-3">
                            <li>
                                <a href="#">
                                <i className="flaticon-spa mr-2" />Coworking Space</a>
                            </li>
                            <li>
                                <span className="c-theme"> open now</span>
                            </li>
                            </ul>
                            <h5 className="mb-2">
                            <a href="listing_details.php">Private office</a>
                            </h5>
                            <p>Landmark :  Near Hope Appartments</p>
                            <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                            <li className="mt-1">
                                <a href="#">
                                <i className="fa fa-map-marker-alt mr-2" />Chattisnagar,New Delhi</a>
                            </li>
                            <li className="mt-1">
                                <a href="#">
                                <i className="fa fa-phone mr-2" />0123-456-789</a>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div className="col-12  mb-15">
                        <div className="listing-item p-2">
                        <div className="img-list">
                            <div className="img-holder">
                            <span className="offer">save 20%
                            </span>
                            <a href="listing_details.php"><img src="img/l-2.png" alt="list" /></a>
                            <div className="rate-like centering justify-content-between">
                                <div className="rating">
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                </div>
                                <a className="likes" href="#">
                                <i className="far fa-heart" />36
                                </a>
                            </div>
                            </div>
                        </div>
                        <div className="list-content">
                            <ul className="ctg-info py-2 mb-3">
                            <li>
                                <a href="#">
                                <i className="flaticon-find mr-2" />Coworking Space</a>
                            </li>
                            <li>
                                <span className="c-theme"> open now</span>
                            </li>
                            </ul>
                            <h5 className="mb-2">
                            <a href="listing_details.php">Workstation</a>
                            </h5>
                            <p>Landmark :  Medanta Hospital</p>
                            <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                            <li className="mt-1">
                                <a href="#">
                                <i className="fa fa-map-marker-alt mr-2" />Noida,Delhi</a>
                            </li>
                            <li className="mt-1">
                                <a href="#">
                                <i className="fa fa-phone mr-2" />0123-456-789</a>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div className="col-12  mb-15">
                        <div className="listing-item p-2">
                        <div className="img-list">
                            <div className="img-holder">
                            <span className="offer">save 26%
                            </span>
                            <a href="listing_details.php"><img src="img/l-3.png" alt="list" /></a>
                            <div className="rate-like centering justify-content-between">
                                <div className="rating">
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                <i className="far fa-star" />
                                </div>
                                <a className="likes" href="#">
                                <i className="far fa-heart" />84
                                </a>
                            </div>
                            </div>
                        </div>
                        <div className="list-content">
                            <ul className="ctg-info py-2 mb-3">
                            <li>
                                <a href="#">
                                <i className="flaticon-hotel mr-2" />Coworking Space</a>
                            </li>
                            <li>
                                <span className="c-theme"> open now</span>
                            </li>
                            </ul>
                            <h5 className="mb-2">
                            <a href="listing_details.php">Meeting Room</a>
                            </h5>
                            <p>Opp to Punj Loyd</p>
                            <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                            <li className="mt-1">
                                <a href="#">
                                <i className="fa fa-map-marker-alt mr-2" />Dwarka,New Delhi</a>
                            </li>
                            <li className="mt-1">
                                <a href="#">
                                <i className="fa fa-phone mr-2" />0123-456-789</a>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div className="col-12 text-center mt-20">
                        <a href="#" className="btn btn-one btn-anim">load more</a>
                    </div>
                    </div>
                </div>
                {/* grid-view-ends */}
                </div>
            </div>
            </div>
        </div>
        </>
      );
    }
}

export default Listing;
