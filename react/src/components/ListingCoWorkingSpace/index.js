import React,{ Component} from 'react';

class ListingCoWorkingSpace extends Component{
    render(){
        return(
            <>
               <div className="col-lg-8 col-12">
                <div className="action-list">
                    <div className="row">
                    <div className="col-md-9 col-6 mb-30">
                    </div>
                    <div className="col-md-3 col-6 mb-30">
                        <div className="sort-filter">
                        <div className="sort-dropdown">
                            <a href="#/" className="dropdown-toggle text-capitalize" data-toggle="dropdown">
                            Popularity
                            </a>
                            <div className="dropdown-menu">
                            <a className="dropdown-item" href="#/">low to high
                            </a>
                            <a className="dropdown-item" href="#/">hight to low
                            </a>
                            <a className="dropdown-item" href="#/">relevance
                            </a>
                            <a className="dropdown-item" href="#/">discount
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
                            <a href="/listingDetails"><img src="img/l-1.png" alt="list" /></a>
                            <div className="rate-like centering justify-content-between">
                                <div className="rating">
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                <i className="far fa-star" />
                                <i className="far fa-star" />
                                </div>
                                <a className="likes" href="#/">
                                <i className="far fa-heart" />25
                                </a>
                            </div>
                            </div>
                        </div>
                        <div className="list-content">
                            <ul className="ctg-info py-2 mb-3">
                            <li>
                                <a href="#/">
                                <i className="flaticon-team mr-2" />Coworkinfg Space</a>
                            </li>
                            <li>
                                <span className="c-theme"> open now</span>
                            </li>
                            </ul>
                            <h5 className="mb-2">
                            <a href="/listingDetails">Private office</a>
                            </h5>
                            <p>Landmark :  Near Hope Appartments</p>
                            <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                            <li className="mt-1">
                                <a href="#/">
                                <i className="fa fa-map-marker-alt mr-2" />Dwarka,New Delhi</a>
                            </li>
                            <li className="mt-1">
                                <a href="#/">
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
                            <a href="/listingDetails"><img src="img/l-2.png" alt="list" /></a>
                            <div className="rate-like centering justify-content-between">
                                <div className="rating">
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                <i className="far fa-star" />
                                <i className="far fa-star" />
                                <i className="far fa-star" />
                                </div>
                                <a className="likes" href="#/">
                                <i className="far fa-heart" />33
                                </a>
                            </div>
                            </div>
                        </div>
                        <div className="list-content">
                            <ul className="ctg-info py-2 mb-3">
                            <li>
                                <a href="#/">
                                <i className="flaticon-shop mr-2" />Business Centre</a>
                            </li>
                            <li>
                                <span className="c-theme"> open now</span>
                            </li>
                            </ul>
                            <h5 className="mb-2">
                            <a href="/listingDetails">Workstations</a>
                            </h5>
                            <p>Landmark :  Opp to Punj Loyd</p>
                            <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                            <li className="mt-1">
                                <a href="#/">
                                <i className="fa fa-map-marker-alt mr-2" />Chitpur,Noida</a>
                            </li>
                            <li className="mt-1">
                                <a href="#/">
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
                            <a href="/listingDetails"><img src="img/l-3.png" alt="list" /></a>
                            <div className="rate-like centering justify-content-between">
                                <div className="rating">
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                <i className="far fa-star" />
                                </div>
                                <a className="likes" href="#/">
                                <i className="far fa-heart" />55
                                </a>
                            </div>
                            </div>
                        </div>
                        <div className="list-content">
                            <ul className="ctg-info py-2 mb-3">
                            <li>
                                <a href="#/">
                                <i className="flaticon-appointment mr-2" />Training Room</a>
                            </li>
                            <li>
                                <span className="c-theme"> open now</span>
                            </li>
                            </ul>
                            <h5 className="mb-2">
                            <a href="/listingDetails">Meeting Room</a>
                            </h5>
                            <p>Landmark :  Medanta Hospital</p>
                            <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                            <li className="mt-1">
                                <a href="#/">
                                <i className="fa fa-map-marker-alt mr-2" />Vasant kunj,New Delhi</a>
                            </li>
                            <li className="mt-1">
                                <a href="#/">
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
                            <a href="/listingDetails"><img src="img/l-1.png" alt="list" /></a>
                            <div className="rate-like centering justify-content-between">
                                <div className="rating">
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                <i className="far fa-star" />
                                <i className="far fa-star" />
                                <i className="far fa-star" />
                                </div>
                                <a className="likes" href="#/">
                                <i className="far fa-heart" />24
                                </a>
                            </div>
                            </div>
                        </div>
                        <div className="list-content">
                            <ul className="ctg-info py-2 mb-3">
                            <li>
                                <a href="#/">
                                <i className="flaticon-spa mr-2" />Coworking Space</a>
                            </li>
                            <li>
                                <span className="c-theme"> open now</span>
                            </li>
                            </ul>
                            <h5 className="mb-2">
                            <a href="/listingDetails">Private office</a>
                            </h5>
                            <p>Landmark :  Near Hope Appartments</p>
                            <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                            <li className="mt-1">
                                <a href="#/">
                                <i className="fa fa-map-marker-alt mr-2" />Chattisnagar,New Delhi</a>
                            </li>
                            <li className="mt-1">
                                <a href="#/">
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
                            <a href="/listingDetails"><img src="img/l-2.png" alt="list" /></a>
                            <div className="rate-like centering justify-content-between">
                                <div className="rating">
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                </div>
                                <a className="likes" href="#/">
                                <i className="far fa-heart" />36
                                </a>
                            </div>
                            </div>
                        </div>
                        <div className="list-content">
                            <ul className="ctg-info py-2 mb-3">
                            <li>
                                <a href="#/">
                                <i className="flaticon-find mr-2" />Coworking Space</a>
                            </li>
                            <li>
                                <span className="c-theme"> open now</span>
                            </li>
                            </ul>
                            <h5 className="mb-2">
                            <a href="/listingDetails">Workstation</a>
                            </h5>
                            <p>Landmark :  Medanta Hospital</p>
                            <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                            <li className="mt-1">
                                <a href="#/">
                                <i className="fa fa-map-marker-alt mr-2" />Noida,Delhi</a>
                            </li>
                            <li className="mt-1">
                                <a href="#/">
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
                            <a href="/listingDetails"><img src="img/l-3.png" alt="list" /></a>
                            <div className="rate-like centering justify-content-between">
                                <div className="rating">
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                <i className="fa fa-star" />
                                <i className="far fa-star" />
                                </div>
                                <a className="likes" href="#/">
                                <i className="far fa-heart" />84
                                </a>
                            </div>
                            </div>
                        </div>
                        <div className="list-content">
                            <ul className="ctg-info py-2 mb-3">
                            <li>
                                <a href="#/">
                                <i className="flaticon-hotel mr-2" />Coworking Space</a>
                            </li>
                            <li>
                                <span className="c-theme"> open now</span>
                            </li>
                            </ul>
                            <h5 className="mb-2">
                            <a href="/listingDetails">Meeting Room</a>
                            </h5>
                            <p>Opp to Punj Loyd</p>
                            <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                            <li className="mt-1">
                                <a href="#/">
                                <i className="fa fa-map-marker-alt mr-2" />Dwarka,New Delhi</a>
                            </li>
                            <li className="mt-1">
                                <a href="#/">
                                <i className="fa fa-phone mr-2" />0123-456-789</a>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div className="col-12 text-center mt-20">
                        <a href="#/" className="btn btn-one btn-anim">load more</a>
                    </div>
                    </div>
                </div>
                {/* grid-view-ends */}
                </div>
            </>
        )
    }
}

export default ListingCoWorkingSpace;
