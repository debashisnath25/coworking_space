import React, { Component } from 'react';

export default class List extends Component {
    render() {
        return (
            <div className="col-lg-8 col-12">
                <div className="action-list">
                    <div className="row">
                        <div className="col-md-9 col-6 mb-30">
                        </div>
                        <div className="col-md-3 col-6 mb-30">
                            <div className="sort-filter">
                                <div className="sort-dropdown">
                                    <a href="#/" className="dropdown-toggle text-capitalize" data-toggle="dropdown">
                                        Sort By
                                    </a>
                                    <div className="dropdown-menu">
                                        <a className="dropdown-item" href="#/">low to high</a>
                                        <a className="dropdown-item" href="#/">hight to low</a>
                                        <a className="dropdown-item" href="#/">relevance</a>
                                        <a className="dropdown-item" href="#/">discount</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="listing-list-view show-list">
                    <div className="row mb-3">
                        
                        <div className="col-12 mb-15">
                            <div className="listing-item p-2">
                                <div className="img-list">
                                    <div className="img-holder">
                                        <span className="offer">save 49%</span>
                                        <img src="img/list_img.jpg" alt="list" />
                                        <div className="rate-like centering justify-content-between">
                                            <div className="rating">
                                                <i className="fa fa-star" />
                                                <i className="fa fa-star" />
                                                <i className="fa fa-star" />
                                                <i className="far fa-star" />
                                                <i className="far fa-star" />
                                            </div>
                                            <a className="likes" href="#/">
                                                <i className="fa fa-users" />24
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div className="list-content ml-2">
                                    <ul className="ctg-info py-2 mb-3">
                                        <li>
                                            <a href="#/">
                                                <i className="flaticon-team mr-2" /> Coworking Space</a>
                                        </li>
                                    </ul>
                                    <h5 className="mb-2">
                                        <a href="/listing_details">Private office</a>
                                    </h5>
                                    <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                    <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                        <li className="mt-1">
                                            <a href="#/">
                                                <i className="fa fa-map-marker-alt mr-2" />Delhi</a>
                                        </li>
                                        <li className="mt-1">
                                            <a href="/listing_details" className="btn btn-one btn-anim w-100" style={{ color: '#fff' }}>Book Now</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div className="col-12 mb-15">
                            <div className="listing-item p-2">
                                <div className="img-list">
                                    <div className="img-holder">
                                        <span className="offer">save 49%</span>
                                        <img src="img/list_img.jpg" alt="list" />
                                        <div className="rate-like centering justify-content-between">
                                            <div className="rating">
                                                <i className="fa fa-star" />
                                                <i className="fa fa-star" />
                                                <i className="fa fa-star" />
                                                <i className="far fa-star" />
                                                <i className="far fa-star" />
                                            </div>
                                            <a className="likes" href="#/">
                                                <i className="fa fa-users" />24
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div className="list-content ml-2">
                                    <ul className="ctg-info py-2 mb-3">
                                        <li>
                                            <a href="#/">
                                                <i className="flaticon-team mr-2" /> Coworking Space</a>
                                        </li>
                                    </ul>
                                    <h5 className="mb-2">
                                        <a href="/listing_details">Private office</a>
                                    </h5>
                                    <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                    <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                        <li className="mt-1">
                                            <a href="#/">
                                                <i className="fa fa-map-marker-alt mr-2" />Delhi</a>
                                        </li>
                                        <li className="mt-1">
                                            <a href="/listing_details" className="btn btn-one btn-anim w-100" style={{ color: '#fff' }}>Book Now</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div className="col-12 mb-15">
                            <div className="listing-item p-2">
                                <div className="img-list">
                                    <div className="img-holder">
                                        <span className="offer">save 49%</span>
                                        <img src="img/list_img.jpg" alt="list" />
                                        <div className="rate-like centering justify-content-between">
                                            <div className="rating">
                                                <i className="fa fa-star" />
                                                <i className="fa fa-star" />
                                                <i className="fa fa-star" />
                                                <i className="far fa-star" />
                                                <i className="far fa-star" />
                                            </div>
                                            <a className="likes" href="#/">
                                                <i className="fa fa-users" />24
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div className="list-content ml-2">
                                    <ul className="ctg-info py-2 mb-3">
                                        <li>
                                            <a href="#/">
                                                <i className="flaticon-team mr-2" /> Coworking Space</a>
                                        </li>
                                    </ul>
                                    <h5 className="mb-2">
                                        <a href="/listing_details">Private office</a>
                                    </h5>
                                    <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                    <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                        <li className="mt-1">
                                            <a href="#/">
                                                <i className="fa fa-map-marker-alt mr-2" />Delhi</a>
                                        </li>
                                        <li className="mt-1">
                                            <a href="/listing_details" className="btn btn-one btn-anim w-100" style={{ color: '#fff' }}>Book Now</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div className="col-12 mb-15">
                            <div className="listing-item p-2">
                                <div className="img-list">
                                    <div className="img-holder">
                                        <span className="offer">save 49%</span>
                                        <img src="img/list_img.jpg" alt="list" />
                                        <div className="rate-like centering justify-content-between">
                                            <div className="rating">
                                                <i className="fa fa-star" />
                                                <i className="fa fa-star" />
                                                <i className="fa fa-star" />
                                                <i className="far fa-star" />
                                                <i className="far fa-star" />
                                            </div>
                                            <a className="likes" href="#/">
                                                <i className="fa fa-users" />24
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div className="list-content ml-2">
                                    <ul className="ctg-info py-2 mb-3">
                                        <li>
                                            <a href="#/">
                                                <i className="flaticon-team mr-2" /> Coworking Space</a>
                                        </li>
                                    </ul>
                                    <h5 className="mb-2">
                                        <a href="/listing_details">Private office</a>
                                    </h5>
                                    <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                    <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                        <li className="mt-1">
                                            <a href="#/">
                                                <i className="fa fa-map-marker-alt mr-2" />Delhi</a>
                                        </li>
                                        <li className="mt-1">
                                            <a href="/listing_details" className="btn btn-one btn-anim w-100" style={{ color: '#fff' }}>Book Now</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div className="col-12 mb-15">
                            <div className="listing-item p-2">
                                <div className="img-list">
                                    <div className="img-holder">
                                        <span className="offer">save 49%</span>
                                        <img src="img/list_img.jpg" alt="list" />
                                        <div className="rate-like centering justify-content-between">
                                            <div className="rating">
                                                <i className="fa fa-star" />
                                                <i className="fa fa-star" />
                                                <i className="fa fa-star" />
                                                <i className="far fa-star" />
                                                <i className="far fa-star" />
                                            </div>
                                            <a className="likes" href="#/">
                                                <i className="fa fa-users" />24
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div className="list-content ml-2">
                                    <ul className="ctg-info py-2 mb-3">
                                        <li>
                                            <a href="#/">
                                                <i className="flaticon-team mr-2" /> Coworking Space</a>
                                        </li>
                                    </ul>
                                    <h5 className="mb-2">
                                        <a href="/listing_details">Private office</a>
                                    </h5>
                                    <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                    <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                        <li className="mt-1">
                                            <a href="#/">
                                                <i className="fa fa-map-marker-alt mr-2" />Delhi</a>
                                        </li>
                                        <li className="mt-1">
                                            <a href="/listing_details" className="btn btn-one btn-anim w-100" style={{ color: '#fff' }}>Book Now</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div className="col-12 mb-15">
                            <div className="listing-item p-2">
                                <div className="img-list">
                                    <div className="img-holder">
                                        <span className="offer">save 49%</span>
                                        <img src="img/list_img.jpg" alt="list" />
                                        <div className="rate-like centering justify-content-between">
                                            <div className="rating">
                                                <i className="fa fa-star" />
                                                <i className="fa fa-star" />
                                                <i className="fa fa-star" />
                                                <i className="far fa-star" />
                                                <i className="far fa-star" />
                                            </div>
                                            <a className="likes" href="#/">
                                                <i className="fa fa-users" />24
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div className="list-content ml-2">
                                    <ul className="ctg-info py-2 mb-3">
                                        <li>
                                            <a href="#/">
                                                <i className="flaticon-team mr-2" /> Coworking Space</a>
                                        </li>
                                    </ul>
                                    <h5 className="mb-2">
                                        <a href="/listing_details">Private office</a>
                                    </h5>
                                    <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                    <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                        <li className="mt-1">
                                            <a href="#/">
                                                <i className="fa fa-map-marker-alt mr-2" />Delhi</a>
                                        </li>
                                        <li className="mt-1">
                                            <a href="/listing_details" className="btn btn-one btn-anim w-100" style={{ color: '#fff' }}>Book Now</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div className="col-12 text-center">
                            <div className="pagination mt-10 mb-40" style={{marginTop: "20px"}}>
                                <span className="sep">
                                    <a href="#/" className="page-numbers prev mr-sm-5 mr-3">
                                        <i className="fa fa-angle-left" />
                                    </a>
                                    <a href="#/" className="page-numbers">1</a>
                                    <a href="#/" className="page-numbers active">2</a>
                                    <a href="#/" className="page-numbers">3</a>
                                    <a href="#/" className="page-numbers">...</a>
                                    <a href="#/" className="page-numbers">8</a>
                                    <a href="#/" className="page-numbers next ml-sm-5 ml-3">
                                        <i className="fa fa-angle-right" />
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        );
    }
}