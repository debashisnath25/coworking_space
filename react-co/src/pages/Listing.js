import React,{Component} from "react";
class Listing extends Component{
    render(){
        return(
            <div>
        {/* ====== Go to top ====== */}
        <a id="toTop" title="Go to top" href="javascript:void(0)">
          <span id="toTopHover" />TOP
        </a>
        {/* Preloader start*/}
        <div className="preloader">
          <div className="loader-inner">
            <div className="dash one">
              <i className="fa fa-map-marker-alt" />
            </div>
            <div className="dash two">
              <i className="fa fa-map-marker-alt" />
            </div>
            <div className="dash three">
              <i className="fa fa-map-marker-alt" />
            </div>
          </div>
        </div>
        {/* Preloader end */}
        {/* Header start*/}
        {/*?php include 'header.php';?*/}
        {/* Header end */}
        {/* Search Form */}
        <div id="search" className="top-search d-flex">
          <span className="close">
            <i className="fa fa-times" />
          </span>
          <div className="w-100 text-center mt-4">
            <h3 className="c-white fw-5">search here</h3>
            <form role="search" id="searchform" action="#" method="get" className="search-bar">
              <input defaultValue name="q" type="search" placeholder="type to search..." className="form-control" />
              <button type="submit" className="submit-btn">
                <i className="fa fa-search" />
              </button>
            </form>
          </div>
        </div>
        {/* page-banner start*/}
        <section className="page-banner">
          <div className="container">
            <div className="row">
              <div className="col-12">
                <h3>listing with sidebar</h3>
                <ul className="banner-link text-center">
                  <li>
                    <a href="index.html">Home</a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">listing</a>
                  </li>
                  <li>
                    <span className="active">listing with sidebar</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        {/* page-banner ends*/}
        {/* listings start*/}
        <div className="bg-w sp-100">
          <div className="container">
            <div className="row">
              <div className="col-lg-8 col-12">
                <div className="action-list">
                  <div className="row">
                    <div className="col-md-3 col-6 mb-30">
                      <div className="sort-filter">
                        <div className="sort-dropdown">
                          <a href="#" className="dropdown-toggle text-capitalize" data-toggle="dropdown">
                            Popularity
                          </a>
                          <div className="dropdown-menu">
                            <a className="dropdown-item" href="#">low to high</a>
                            <a className="dropdown-item" href="#">hight to low</a>
                            <a className="dropdown-item" href="#">relevance</a>
                            <a className="dropdown-item" href="#">discount</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div className="col-md-9 col-6 mb-30">
                      <div className="view-mode justify-content-end d-flex">
                        <div className="grid-view views current">
                          <i className="fa fa-th" />
                        </div>
                        <div className="list-view views">
                          <i className="fa fa-list-ul" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="list-grid-view show-list">
                  <div className="row">
                    <div className="col-md-6 col-12 mb-30">
                      <div className="listing-item p-2">
                        <div className="img-holder">
                          <span className="offer">save 49%
                          </span>
                          <img src="img/pl-slide1.jpg" alt="list" />
                          <div className="rate-like centering justify-content-between">
                            <div className="rating">
                              <i className="fa fa-star" />
                              <i className="fa fa-star" />
                              <i className="fa fa-star" />
                              <i className="far fa-star" />
                              <i className="far fa-star" />
                            </div>
                            <a className="likes" href="#">
                              <i className="far fa-heart" />12
                            </a>
                          </div>
                        </div>
                        <div className="list-content p-2">
                          <ul className="ctg-info py-2 mb-3">
                            <li>
                              <a href="#">
                                <i className="flaticon-cutlery mr-2" /> restaurants</a>
                            </li>
                            <li>
                              <span className="c-theme"> open now</span>
                            </li>
                          </ul>
                          <h5 className="mb-2">
                            <a href="listing-detail.html">the lounge &amp; bar</a>
                          </h5>
                          <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                          <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                            <li className="mt-1">
                              <a href="#">
                                <i className="fa fa-map-marker-alt mr-2" />San Francisco</a>
                            </li>
                            <li className="mt-1">
                              <a href="#">
                                <i className="fa fa-phone mr-2" />0123-456-789</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div className="col-md-6 col-12 mb-30">
                      <div className="listing-item p-2">
                        <div className="img-holder">
                          <span className="offer">save 30%
                          </span>
                          <img src="img/pl-slide2.jpg" alt="list" />
                          <div className="rate-like centering justify-content-between">
                            <div className="rating">
                              <i className="fa fa-star" />
                              <i className="fa fa-star" />
                              <i className="far fa-star" />
                              <i className="far fa-star" />
                              <i className="far fa-star" />
                            </div>
                            <a className="likes" href="#">
                              <i className="far fa-heart" />42
                            </a>
                          </div>
                        </div>
                        <div className="list-content p-2">
                          <ul className="ctg-info py-2 mb-3">
                            <li>
                              <a href="#">
                                <i className="flaticon-shop mr-2" />shopping</a>
                            </li>
                            <li>
                              <span className="c-theme"> open now</span>
                            </li>
                          </ul>
                          <h5 className="mb-2">
                            <a href="listing-detail.html">the best shop in city</a>
                          </h5>
                          <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                          <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                            <li className="mt-1">
                              <a href="#">
                                <i className="fa fa-map-marker-alt mr-2" />San Francisco</a>
                            </li>
                            <li className="mt-1">
                              <a href="#">
                                <i className="fa fa-phone mr-2" />0123-456-789</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div className="col-md-6 col-12 mb-30">
                      <div className="listing-item p-2">
                        <div className="img-holder">
                          <span className="offer">save 19%
                          </span>
                          <img src="img/pl-slide3.jpg" alt="list" />
                          <div className="rate-like centering justify-content-between">
                            <div className="rating">
                              <i className="fa fa-star" />
                              <i className="fa fa-star" />
                              <i className="fa fa-star" />
                              <i className="fa fa-star" />
                              <i className="far fa-star" />
                            </div>
                            <a className="likes" href="#">
                              <i className="far fa-heart" />12
                            </a>
                          </div>
                        </div>
                        <div className="list-content p-2">
                          <ul className="ctg-info py-2 mb-3">
                            <li>
                              <a href="#">
                                <i className="flaticon-cheers mr-2" />nightlife</a>
                            </li>
                            <li>
                              <span className="c-theme"> open now</span>
                            </li>
                          </ul>
                          <h5 className="mb-2">
                            <a href="listing-detail.html">enjoy best nightlife</a>
                          </h5>
                          <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                          <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                            <li className="mt-1">
                              <a href="#">
                                <i className="fa fa-map-marker-alt mr-2" />San Francisco</a>
                            </li>
                            <li className="mt-1">
                              <a href="#">
                                <i className="fa fa-phone mr-2" />0123-456-789</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div className="col-md-6 col-12 mb-30">
                      <div className="listing-item p-2">
                        <div className="img-holder">
                          <span className="offer">save 59%
                          </span>
                          <img src="img/pl-slide4.jpg" alt="list" />
                          <div className="rate-like centering justify-content-between">
                            <div className="rating">
                              <i className="fa fa-star" />
                              <i className="fa fa-star" />
                              <i className="far fa-star" />
                              <i className="far fa-star" />
                              <i className="far fa-star" />
                            </div>
                            <a className="likes" href="#">
                              <i className="far fa-heart" />14
                            </a>
                          </div>
                        </div>
                        <div className="list-content p-2">
                          <ul className="ctg-info py-2 mb-3">
                            <li>
                              <a href="#">
                                <i className="flaticon-spa mr-2" />beauty &amp; spa</a>
                            </li>
                            <li>
                              <span className="c-theme"> open now</span>
                            </li>
                          </ul>
                          <h5 className="mb-2">
                            <a href="listing-detail.html">best beauty &amp; spa services</a>
                          </h5>
                          <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                          <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                            <li className="mt-1">
                              <a href="#">
                                <i className="fa fa-map-marker-alt mr-2" />San Francisco</a>
                            </li>
                            <li className="mt-1">
                              <a href="#">
                                <i className="fa fa-phone mr-2" />0123-456-789</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div className="col-md-6 col-12 mb-30">
                      <div className="listing-item p-2">
                        <div className="img-holder">
                          <span className="offer">save 20%
                          </span>
                          <img src="img/pl-slide5.jpg" alt="list" />
                          <div className="rate-like centering justify-content-between">
                            <div className="rating">
                              <i className="fa fa-star" />
                              <i className="fa fa-star" />
                              <i className="fa fa-star" />
                              <i className="fa fa-star" />
                              <i className="fa fa-star" />
                            </div>
                            <a className="likes" href="#">
                              <i className="far fa-heart" />16
                            </a>
                          </div>
                        </div>
                        <div className="list-content p-2">
                          <ul className="ctg-info py-2 mb-3">
                            <li>
                              <a href="#">
                                <i className="flaticon-find mr-2" />desitination</a>
                            </li>
                            <li>
                              <span className="c-theme"> open now</span>
                            </li>
                          </ul>
                          <h5 className="mb-2">
                            <a href="listing-detail.html">best destinations in city</a>
                          </h5>
                          <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                          <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                            <li className="mt-1">
                              <a href="#">
                                <i className="fa fa-map-marker-alt mr-2" />San Francisco</a>
                            </li>
                            <li className="mt-1">
                              <a href="#">
                                <i className="fa fa-phone mr-2" />0123-456-789</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div className="col-md-6 col-12 mb-30">
                      <div className="listing-item p-2">
                        <div className="img-holder">
                          <span className="offer">save 26%
                          </span>
                          <img src="img/pl-slide6.jpg" alt="list" />
                          <div className="rate-like centering justify-content-between">
                            <div className="rating">
                              <i className="fa fa-star" />
                              <i className="fa fa-star" />
                              <i className="fa fa-star" />
                              <i className="fa fa-star" />
                              <i className="far fa-star" />
                            </div>
                            <a className="likes" href="#">
                              <i className="far fa-heart" />82
                            </a>
                          </div>
                        </div>
                        <div className="list-content p-2">
                          <ul className="ctg-info py-2 mb-3">
                            <li>
                              <a href="#">
                                <i className="flaticon-hotel mr-2" />hotels</a>
                            </li>
                            <li>
                              <span className="c-theme"> open now</span>
                            </li>
                          </ul>
                          <h5 className="mb-2">
                            <a href="listing-detail.html">comfy hotels in town</a>
                          </h5>
                          <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                          <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                            <li className="mt-1">
                              <a href="#">
                                <i className="fa fa-map-marker-alt mr-2" />San Francisco</a>
                            </li>
                            <li className="mt-1">
                              <a href="#">
                                <i className="fa fa-phone mr-2" />0123-456-789</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div className="col-12 text-center mt-30">
                      <a href="#" className="btn btn-one btn-anim">load more</a>
                    </div>
                  </div>
                </div>
                <div className="listing-list-view">
                  <div className="row">
                    <div className="col-12 mb-30">
                      <div className="listing-item p-2">
                        <div className="img-list">
                          <div className="img-holder">
                            <span className="offer">save 49%
                            </span>
                            <img src="img/pl-slide1.jpg" alt="list" />
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
                                <i className="flaticon-cutlery mr-2" /> restaurants</a>
                            </li>
                            <li>
                              <span className="c-theme"> open now</span>
                            </li>
                          </ul>
                          <h5 className="mb-2">
                            <a href="listing-detail.html">the lounge &amp; bar</a>
                          </h5>
                          <p>Donec pede justo, fringilla vel, aliquet nectior magna laboris do in.</p>
                          <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                            <li className="mt-1">
                              <a href="#">
                                <i className="fa fa-map-marker-alt mr-2" />San Francisco</a>
                            </li>
                            <li className="mt-1">
                              <a href="#">
                                <i className="fa fa-phone mr-2" />0123-456-789</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div className="col-12 mb-30">
                      <div className="listing-item p-2">
                        <div className="img-list">
                          <div className="img-holder">
                            <span className="offer">save 30%
                            </span>
                            <img src="img/pl-slide2.jpg" alt="list" />
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
                                <i className="flaticon-shop mr-2" />shopping</a>
                            </li>
                            <li>
                              <span className="c-theme"> open now</span>
                            </li>
                          </ul>
                          <h5 className="mb-2">
                            <a href="listing-detail.html">the best shop in city</a>
                          </h5>
                          <p>Donec pede justo, fringilla vel, aliquet nectior magna laboris do in.</p>
                          <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                            <li className="mt-1">
                              <a href="#">
                                <i className="fa fa-map-marker-alt mr-2" />San Francisco</a>
                            </li>
                            <li className="mt-1">
                              <a href="#">
                                <i className="fa fa-phone mr-2" />0123-456-789</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div className="col-12 mb-30">
                      <div className="listing-item p-2">
                        <div className="img-list">
                          <div className="img-holder">
                            <span className="offer">save 19%
                            </span>
                            <img src="img/pl-slide3.jpg" alt="list" />
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
                                <i className="flaticon-cheers mr-2" />nightlife</a>
                            </li>
                            <li>
                              <span className="c-theme"> open now</span>
                            </li>
                          </ul>
                          <h5 className="mb-2">
                            <a href="listing-detail.html">enjoy best nightlife</a>
                          </h5>
                          <p>Donec pede justo, fringilla vel, aliquet nectior magna laboris do in.</p>
                          <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                            <li className="mt-1">
                              <a href="#">
                                <i className="fa fa-map-marker-alt mr-2" />San Francisco</a>
                            </li>
                            <li className="mt-1">
                              <a href="#">
                                <i className="fa fa-phone mr-2" />0123-456-789</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div className="col-12 mb-30">
                      <div className="listing-item p-2">
                        <div className="img-list">
                          <div className="img-holder">
                            <span className="offer">save 59%
                            </span>
                            <img src="img/pl-slide4.jpg" alt="list" />
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
                                <i className="flaticon-spa mr-2" />beauty &amp; spa</a>
                            </li>
                            <li>
                              <span className="c-theme"> open now</span>
                            </li>
                          </ul>
                          <h5 className="mb-2">
                            <a href="listing-detail.html">best beauty &amp; spa services</a>
                          </h5>
                          <p>Donec pede justo, fringilla vel, aliquet nectior magna laboris do in.</p>
                          <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                            <li className="mt-1">
                              <a href="#">
                                <i className="fa fa-map-marker-alt mr-2" />San Francisco</a>
                            </li>
                            <li className="mt-1">
                              <a href="#">
                                <i className="fa fa-phone mr-2" />0123-456-789</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div className="col-12 mb-30">
                      <div className="listing-item p-2">
                        <div className="img-list">
                          <div className="img-holder">
                            <span className="offer">save 20%
                            </span>
                            <img src="img/pl-slide5.jpg" alt="list" />
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
                                <i className="flaticon-find mr-2" />desitination</a>
                            </li>
                            <li>
                              <span className="c-theme"> open now</span>
                            </li>
                          </ul>
                          <h5 className="mb-2">
                            <a href="listing-detail.html">best destinations in city</a>
                          </h5>
                          <p>Donec pede justo, fringilla vel, aliquet nectior magna laboris do in.</p>
                          <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                            <li className="mt-1">
                              <a href="#">
                                <i className="fa fa-map-marker-alt mr-2" />San Francisco</a>
                            </li>
                            <li className="mt-1">
                              <a href="#">
                                <i className="fa fa-phone mr-2" />0123-456-789</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div className="col-12 mb-30">
                      <div className="listing-item p-2">
                        <div className="img-list">
                          <div className="img-holder">
                            <span className="offer">save 26%
                            </span>
                            <img src="img/pl-slide6.jpg" alt="list" />
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
                                <i className="flaticon-hotel mr-2" />hotels</a>
                            </li>
                            <li>
                              <span className="c-theme"> open now</span>
                            </li>
                          </ul>
                          <h5 className="mb-2">
                            <a href="listing-detail.html">comfy hotels in town</a>
                          </h5>
                          <p>Donec pede justo, fringilla vel, aliquet nectior magna laboris do in.</p>
                          <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                            <li className="mt-1">
                              <a href="#">
                                <i className="fa fa-map-marker-alt mr-2" />San Francisco</a>
                            </li>
                            <li className="mt-1">
                              <a href="#">
                                <i className="fa fa-phone mr-2" />0123-456-789</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div className="col-12 text-center mt-30">
                      <a href="#" className="btn btn-one btn-anim">load more</a>
                    </div>
                  </div>
                </div>
              </div>
              <div className="col-lg-4 col-12">
                <aside className="sidebar">
                  <h4 className="title-sep2 mb-30">search filters</h4>
                  <div className="widget-listing">
                    <div className="filter-box mb-30">
                      <form action="#" method="post">
                        <div className="row">
                          <div className="col-12">
                            <input type="text" className="form-control" placeholder="What are you looking for?" />
                          </div>
                          <div className="col-12">
                            <div className="input-wrap">
                              <i className="fa fa-crosshairs" />
                              <input type="text" className="form-control" placeholder="location" />
                            </div>
                          </div>
                          <div className="col-12">
                            <div className="input-wrap">
                              <select className="form-control custom-select" id="service2">
                                <option>all categories</option>
                                <option>hotel</option>
                                <option>tour</option>
                                <option>pharmacy</option>
                                <option>shops</option>
                              </select>
                            </div>
                          </div>
                          <div className="col-12">
                            <div className="input-wrap">
                              <i className="fas fa-dollar-sign" />
                              <input type="text" className="form-control" placeholder="location" />
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div className="filter-checklist">
                      <div className="row">
                        <div className="col-12 mb-60">
                          <h5 className="mb-30">facilities</h5>
                          <div className="row minus-pad">
                            <div className="col-sm-6 col-12">
                              <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id6" defaultValue="value" />
                                <label htmlFor="checkbox_id6">Card Payment</label>
                              </div>
                              <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id7" defaultValue="value" />
                                <label htmlFor="checkbox_id7">Free Parking</label>
                              </div>
                              <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id8" defaultValue="value" />
                                <label htmlFor="checkbox_id8">Free Wi-Fi</label>
                              </div>
                              <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id12" defaultValue="value" />
                                <label htmlFor="checkbox_id12">Fitness Center</label>
                              </div>
                              <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id13" defaultValue="value" />
                                <label htmlFor="checkbox_id13">Reservations</label>
                              </div>
                              <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id14" defaultValue="value" />
                                <label htmlFor="checkbox_id14">Smoking Allowed</label>
                              </div>
                            </div>
                            <div className="col-sm-6 col-12">
                              <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id9" defaultValue="value" />
                                <label htmlFor="checkbox_id9">Family Friendly</label>
                              </div>
                              <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id10" defaultValue="value" />
                                <label htmlFor="checkbox_id10">Wheelchair</label>
                              </div>
                              <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id11" defaultValue="value" />
                                <label htmlFor="checkbox_id11">Air Conditioning</label>
                              </div>
                              <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id15" defaultValue="value" />
                                <label htmlFor="checkbox_id15">Swimming Pool</label>
                              </div>
                              <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id16" defaultValue="value" />
                                <label htmlFor="checkbox_id16">Coupons</label>
                              </div>
                              <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id17" defaultValue="value" />
                                <label htmlFor="checkbox_id17">Pet Friendly</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div className="col-12 mb-60">
                          <h5 className="mb-30">rating</h5>
                          <div className="row minus-pad">
                            <div className="col-sm-6 col-12">
                              <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id1" defaultValue="value" />
                                <label htmlFor="checkbox_id1">Excellent 9+</label>
                              </div>
                              <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id2" defaultValue="value" />
                                <label htmlFor="checkbox_id2">Superb 8+</label>
                              </div>
                              <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id3" defaultValue="value" />
                                <label htmlFor="checkbox_id3">Very good 7+</label>
                              </div>
                            </div>
                            <div className="col-sm-6 col-12">
                              <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id4" defaultValue="value" />
                                <label htmlFor="checkbox_id4">Good 6+</label>
                              </div>
                              <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id5" defaultValue="value" />
                                <label htmlFor="checkbox_id5">Pleasant 5+</label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div className="row">
                      <div className="col-12">
                        <h5 className="mb-30">distance radius :
                          <span className="range-value">30</span>
                          km
                        </h5>
                        <div className="input-wrap range-box">
                          <div className="range-slider">
                            <input type="range" min={1} max={100} defaultValue={30} className="range-track" id="myRange" />
                            <div className="fill" style={{width: '30%'}} />
                          </div>
                        </div>
                      </div>
                      <div className="col-12">
                        <button type="submit" className="btn btn-one btn-anim w-100">
                          update</button>
                      </div>
                    </div>
                  </div>
                </aside>
              </div>
            </div>
          </div>
        </div>
        {/* listings end */}
        {/* cta-one start*/}
        <section className="cta-one tri-bg-w text-lg-left text-center">
          <div className="container">
            <div className="row align-items-center">
              <div className="col-lg-6 my-lg-0 my-5 py-lg-0 py-5">
                <div className="cta-content">
                  <h3>Sign Up To Get Special Offers Every Day</h3>
                  <p>Lorem ipsum dolor sit amet, consectadetudzdae rcquisc adipiscing elit. Aenean socada commodo ligaui
                    egets dolor. </p>
                  <a href="login.html" className="btn btn-two btn-anim mt-2">
                    sign up
                  </a>
                </div>
              </div>
              <div className="col-lg-6 d-lg-block d-none">
                <div className="cta-img mt-4">
                  <img src="img/cta-bg.png" alt="image" />
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
        )
    }
}
export default Listing;