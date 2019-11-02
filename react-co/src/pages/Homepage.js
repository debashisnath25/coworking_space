import React from 'react';
import HomeItemSlider from './../components/homepage/HomeItemSlider';
import Fitness from './../components/homepage/Fitness';
class Homepage extends React.Component {
    render() {
      return (
        <div>
            {/* ====== Go to top ====== */}
            <a id="toTop" title="Go to top" href="/">
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
            {/* banner start */}
            <div className="main-banner">
              <div className="banner-image" data-jarallax="{&quot;videoStartTime&quot;: 4300}" data-jarallax-video="https://youtu.be/y1Alop4LhYI">
                <div className="container">
                  <div className="banner-content">
                    <div className="row">
                      <div className="col-12">
                        <h2>Find The Best Place In Your City</h2>
                        <p className="mt-4">Lorem ipsum dolor sit amet, consecws eftetuer adscnki iscedring elit aendea cdefom ameodo lorem
                          ipsf dolor sit amet conscsec tsetuer.</p>
                      </div>
                    </div>
                    <form action="#" className="banner-form mt-5">
                      <div className="row justify-content-md-center">
                        <div className="col-lg-3 col-md-6">
                          <input type="text" className="form-control mb-lg-0" placeholder="What are you looking for?" />
                        </div>
                        <div className="col-lg-3 col-md-6">
                          <select className="form-control mb-lg-0 custom-select" id="service2">
                            <option>all categories</option>
                            <option>hotel</option>
                            <option>tour</option>
                            <option>pharmacy</option>
                            <option>shops</option>
                          </select>
                        </div>
                        <div className="col-lg-2 col-md-4">
                          <button type="submit" className="btn btn-one btn-anim w-100">
                            <i className="fa fa-search" /> search</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div className="list-category mb-4">
                    <div className="row">
                      <div className="col-lg-2 col-md-4 col-sm-6 col-12">
                        <div className="list-items mb-30 btn-anim">
                          <div className="icon-box">
                            <i className="flaticon-find" />
                          </div>
                          <h5 className="mb-0">
                            <a href="/">destination</a>
                          </h5>
                        </div>
                      </div>
                      <div className="col-lg-2 col-md-4 col-sm-6 col-12">
                        <div className="list-items mb-30 btn-anim">
                          <div className="icon-box">
                            <i className="flaticon-spa" />
                          </div>
                          <h5 className="mb-0">
                            <a href="/">beauty &amp; spa</a>
                          </h5>
                        </div>
                      </div>
                      <div className="col-lg-2 col-md-4 col-sm-6 col-12">
                        <div className="list-items mb-30 btn-anim">
                          <div className="icon-box">
                            <i className="flaticon-cheers" />
                          </div>
                          <h5 className="mb-0">
                            <a href="/">nightlife</a>
                          </h5>
                        </div>
                      </div>
                      <div className="col-lg-2 col-md-4 col-sm-6 col-12">
                        <div className="list-items mb-30 btn-anim">
                          <div className="icon-box">
                            <i className="flaticon-hotel" />
                          </div>
                          <h5 className="mb-0">
                            <a href="/">hotels</a>
                          </h5>
                        </div>
                      </div>
                      <div className="col-lg-2 col-md-4 col-sm-6 col-12">
                        <div className="list-items mb-30 btn-anim">
                          <div className="icon-box">
                            <i className="flaticon-cutlery" />
                          </div>
                          <h5 className="mb-0">
                            <a href="/">restaurants</a>
                          </h5>
                        </div>
                      </div>
                      <div className="col-lg-2 col-md-4 col-sm-6 col-12">
                        <div className="list-items mb-30 btn-anim">
                          <div className="icon-box">
                            <i className="flaticon-shop" />
                          </div>
                          <h5 className="mb-0">
                            <a href="/">shopping</a>
                          </h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            {/* banner end */}
            {/* popular list start*/}

            <HomeItemSlider />

            {/* popular list end */}
            {/* steps-section start*/}
            <Fitness />
            {/* steps-section end */}
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
                      <img src="img/cta-bg.png" alt="alternate" />
                    </div>
                  </div>
                </div>
              </div>
            </section>
            {/* cta-one end */}
            {/* features start*/}
            <section className="features sp-100-70 bg-w">
              <div className="container">
                <div className="row">
                  <div className="col-12">
                    <div className="all-title">
                      <h3 className="sec-title">
                        Why We Are Best
                      </h3>
                      <svg className="title-sep">
                        <path fillRule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z" />
                      </svg>
                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor penatibus
                        ean massa. Cum sociis natoqu penatibus et magnis dis parturient montes.</p>
                    </div>
                  </div>
                </div>
                <div className="row">
                  <div className="col-lg-4 col-md-6 col-12 mb-30">
                    <div className="feature-item">
                      <div className="icon-box">
                        <i className="flaticon-rising" />
                      </div>
                      <h5>our vision</h5>
                      <p>Lorem ipsum dolor sit ame conse castei efte tuerg scn kt iscedring elit ende cd magum socadaiis nato
                        ipsf.
                      </p>
                    </div>
                  </div>
                  <div className="col-lg-4 col-md-6 col-12 mb-30">
                    <div className="feature-item">
                      <div className="icon-box">
                        <i className="flaticon-list" />
                      </div>
                      <h5>missions</h5>
                      <p>Lorem ipsum dolor sit ame conse castei efte tuerg scn kt iscedring elit ende cd magum socadaiis nato
                        ipsf.
                      </p>
                    </div>
                  </div>
                  <div className="col-lg-4 col-md-6 col-12 mb-30">
                    <div className="feature-item">
                      <div className="icon-box">
                        <i className="flaticon-medal" />
                      </div>
                      <h5>our value</h5>
                      <p>Lorem ipsum dolor sit ame conse castei efte tuerg scn kt iscedring elit ende cd magum socadaiis nato
                        ipsf.
                      </p>
                    </div>
                  </div>
                  <div className="col-lg-4 col-md-6 col-12 mb-30">
                    <div className="feature-item">
                      <div className="icon-box">
                        <i className="flaticon-find-1" />
                      </div>
                      <h5>find your listing</h5>
                      <p>Lorem ipsum dolor sit ame conse castei efte tuerg scn kt iscedring elit ende cd magum socadaiis nato
                        ipsf.
                      </p>
                    </div>
                  </div>
                  <div className="col-lg-4 col-md-6 col-12 mb-30">
                    <div className="feature-item">
                      <div className="icon-box">
                        <i className="flaticon-map" />
                      </div>
                      <h5>find the way</h5>
                      <p>Lorem ipsum dolor sit ame conse castei efte tuerg scn kt iscedring elit ende cd magum socadaiis nato
                        ipsf.
                      </p>
                    </div>
                  </div>
                  <div className="col-lg-4 col-md-6 col-12 mb-30">
                    <div className="feature-item">
                      <div className="icon-box">
                        <i className="flaticon-support" />
                      </div>
                      <h5>24/7 support</h5>
                      <p>Lorem ipsum dolor sit ame conse castei efte tuerg scn kt iscedring elit ende cd magum socadaiis nato
                        ipsf.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            {/* features end */}
            {/* categories start*/}
            <section className="categories sp-100-70 bg-dull">
              <div className="container">
                <div className="row">
                  <div className="col-12">
                    <div className="all-title">
                      <h3 className="sec-title">
                        top categories
                      </h3>
                      <svg className="title-sep">
                        <path fillRule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z" />
                      </svg>
                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor penatibus
                        ean massa. Cum sociis natoqu penatibus et magnis dis parturient montes.</p>
                    </div>
                  </div>
                </div>
                <div className="row justify-content-center">
                  <div className="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <div className="ctg-item">
                      <div className="icon-box" style={{backgroundImage: 'url("img/cat1.jpg")'}}>
                        <i className="flaticon-map" />
                      </div>
                      <div className="content-box p-4">
                        <h5 className="mb-1">
                          <a href="listing.html">destination</a>
                        </h5>
                        <p className="mb-0">35 Listing</p>
                      </div>
                    </div>
                  </div>
                  <div className="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <div className="ctg-item">
                      <div className="icon-box" style={{backgroundImage: 'url("img/cat2.jpg")'}}>
                        <i className="flaticon-cutlery" />
                      </div>
                      <div className="content-box p-4">
                        <h5 className="mb-1">
                          <a href="listing.html">restaurants</a>
                        </h5>
                        <p className="mb-0">20 Listing</p>
                      </div>
                    </div>
                  </div>
                  <div className="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <div className="ctg-item">
                      <div className="icon-box" style={{backgroundImage: 'url("img/cat3.jpg")'}}>
                        <i className="flaticon-shop" />
                      </div>
                      <div className="content-box p-4">
                        <h5 className="mb-1">
                          <a href="listing.html"> shopping</a>
                        </h5>
                        <p className="mb-0">15 Listing</p>
                      </div>
                    </div>
                  </div>
                  <div className="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <div className="ctg-item">
                      <div className="icon-box" style={{backgroundImage: 'url("img/cat4.jpg")'}}>
                        <i className="flaticon-hotel" />
                      </div>
                      <div className="content-box p-4">
                        <h5 className="mb-1">
                          <a href="listing.html"> hotels</a>
                        </h5>
                        <p className="mb-0">12 Listing</p>
                      </div>
                    </div>
                  </div>
                  <div className="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <div className="ctg-item">
                      <div className="icon-box" style={{backgroundImage: 'url("img/cat5.jpg")'}}>
                        <i className="flaticon-spa" />
                      </div>
                      <div className="content-box p-4">
                        <h5 className="mb-1">
                          <a href="listing.html"> Beauty &amp; Spa</a>
                        </h5>
                        <p className="mb-0">18 Listing</p>
                      </div>
                    </div>
                  </div>
                  <div className="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <div className="ctg-item">
                      <div className="icon-box" style={{backgroundImage: 'url("img/cat6.jpg")'}}>
                        <i className="flaticon-drama" />
                      </div>
                      <div className="content-box p-4">
                        <h5 className="mb-1">
                          <a href="listing.html"> events</a>
                        </h5>
                        <p className="mb-0">14 Listing</p>
                      </div>
                    </div>
                  </div>
                  <div className="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <div className="ctg-item">
                      <div className="icon-box" style={{backgroundImage: 'url("img/cat7.jpg")'}}>
                        <i className="flaticon-cheers" />
                      </div>
                      <div className="content-box p-4">
                        <h5 className="mb-1">
                          <a href="listing.html"> nightlie</a>
                        </h5>
                        <p className="mb-0">25 Listing</p>
                      </div>
                    </div>
                  </div>
                  <div className="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <div className="ctg-item">
                      <div className="icon-box" style={{backgroundImage: 'url("img/cat8.jpg")'}}>
                        <i className="flaticon-fast-food" />
                      </div>
                      <div className="content-box p-4">
                        <h5 className="mb-1">
                          <a href="listing.html"> Beauty &amp; Spa</a>
                        </h5>
                        <p className="mb-0">10 Listing</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            {/* categories end */}
            {/* partner start*/}
            <div className="partner-one bg-red py-5">
              <div className="container">
                <div className="row">
                  <div className="col-md-12">
                    <div className="partner-slider owl-carousel owl-theme">
                      <div className="partner-slide">
                        <img src="img/partner1.png" alt="partner" />
                      </div>
                      <div className="partner-slide">
                        <img src="img/partner2.png" alt="partner" />
                      </div>
                      <div className="partner-slide">
                        <img src="img/partner3.png" alt="partner" />
                      </div>
                      <div className="partner-slide">
                        <img src="img/partner4.png" alt="partner" />
                      </div>
                      <div className="partner-slide">
                        <img src="img/partner5.png" alt="partner" />
                      </div>
                      <div className="partner-slide">
                        <img src="img/partner1.png" alt="partner" />
                      </div>
                      <div className="partner-slide">
                        <img src="img/partner2.png" alt="partner" />
                      </div>
                      <div className="partner-slide">
                        <img src="img/partner3.png" alt="partner" />
                      </div>
                      <div className="partner-slide">
                        <img src="img/partner4.png" alt="partner" />
                      </div>
                      <div className="partner-slide">
                        <img src="img/partner5.png" alt="partner" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            {/* partner end*/}
            {/* blog start*/}
            <section className="sp-100 bg-w">
              <div className="container">
                <div className="row">
                  <div className="col-12">
                    <div className="all-title">
                      <h3 className="sec-title">
                        from our blog
                      </h3>
                      <svg className="title-sep">
                        <path fillRule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z" />
                      </svg>
                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor penatibus
                        ean massa. Cum sociis natoqu penatibus et magnis dis parturient montes.</p>
                    </div>
                  </div>
                </div>
                <div className="row">
                  <div className="col-xl-4 col-lg-6 col-md-6 col-12">
                    <div className="blog-item blog-1" style={{backgroundImage: 'url("img/blog1.png")'}}>
                      <div className="blog-date p-2">
                        <span>11 april 2019</span>
                      </div>
                      <div className="blog-content">
                        <h5>
                          <a href="blog-detail.html">Nullam quis ante tiam sit ame orci eget erovtiu faucid nbys</a>
                        </h5>
                        <ul className="blog-meta d-flex justify-content-between align-items-center">
                          <li>
                            <span className="mr-1">
                              <img src="img/aut-1.png" alt="#" />
                            </span>
                            <a href="/">Johnathan Doe</a>
                          </li>
                          <li>
                            <a href="/">
                              <i className="fa fa-eye mr-1" />
                              20
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div className="col-xl-4 col-lg-6 col-md-6 col-12">
                    <div className="blog-item blog-1" style={{backgroundImage: 'url("img/blog2.png")'}}>
                      <div className="blog-date p-2">
                        <span>21 april 2019</span>
                      </div>
                      <div className="blog-content">
                        <h5>
                          <a href="blog-detail.html">Nullam quis ante tiam sit ame orci eget erovtiu faucid nbys</a>
                        </h5>
                        <ul className="blog-meta d-flex justify-content-between align-items-center">
                          <li>
                            <span className="mr-1">
                              <img src="img/aut-2.png" alt="#" />
                            </span>
                            <a href="/">Alicia Thomas</a>
                          </li>
                          <li>
                            <a href="/">
                              <i className="fa fa-eye mr-1" />
                              20
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div className="col-xl-4 col-lg-6 col-md-6 col-12">
                    <div className="blog-item blog-1" style={{backgroundImage: 'url("img/blog3.png")'}}>
                      <div className="blog-date p-2">
                        <span>01 april 2019</span>
                      </div>
                      <div className="blog-content">
                        <h5>
                          <a href="blog-detail.html">Nullam quis ante tiam sit ame orci eget erovtiu faucid nbys</a>
                        </h5>
                        <ul className="blog-meta d-flex justify-content-between align-items-center">
                          <li>
                            <span className="mr-1">
                              <img src="img/aut-3.png" alt="#" />
                            </span>
                            <a href="/">Johnis Doe</a>
                          </li>
                          <li>
                            <a href="/">
                              <i className="fa fa-eye mr-1" />
                              20
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div className="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div className="blog-item blog-1" style={{backgroundImage: 'url("img/blog4.png")'}}>
                      <div className="blog-date p-2">
                        <span>09 april 2019</span>
                      </div>
                      <div className="blog-content">
                        <h5>
                          <a href="blog-detail.html">Nullam quis ante tiam sit ame orci liamco non.</a>
                        </h5>
                        <ul className="blog-meta d-flex justify-content-between align-items-center">
                          <li>
                            <span className="mr-1">
                              <img src="img/aut-1.png" alt="#" />
                            </span>
                            <a href="/">Johnas Doe</a>
                          </li>
                          <li>
                            <a href="/">
                              <i className="fa fa-eye mr-1" />
                              20
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div className="col-xl-6 col-lg-6 col-md-6 col-12">
                    <div className="blog-item blog-1" style={{backgroundImage: 'url("img/blog5.png")'}}>
                      <div className="blog-date p-2">
                        <span>15 april 2019</span>
                      </div>
                      <div className="blog-content">
                        <h5>
                          <a href="blog-detail.html">Amet incididunt tempor aliqua mollit magna proident sit amet elit nostrud. </a>
                        </h5>
                        <ul className="blog-meta d-flex justify-content-between align-items-center">
                          <li>
                            <span className="mr-1">
                              <img src="img/aut-3.png" alt="#" />
                            </span>
                            <a href="/">Alexi Johnas </a>
                          </li>
                          <li>
                            <a href="/">
                              <i className="fa fa-eye mr-1" />
                              20
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div className="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div className="blog-item blog-1" style={{backgroundImage: 'url("img/blog6.png")'}}>
                      <div className="blog-date p-2">
                        <span>13 april 2019</span>
                      </div>
                      <div className="blog-content">
                        <h5>
                          <a href="blog-detail.html">Nullam quis ante tiam sit ame orci liamco non.</a>
                        </h5>
                        <ul className="blog-meta d-flex justify-content-between align-items-center">
                          <li>
                            <span className="mr-1">
                              <img src="img/aut-2.png" alt="#" />
                            </span>
                            <a href="/">sehny Doe</a>
                          </li>
                          <li>
                            <a href="/">
                              <i className="fa fa-eye mr-1" />
                              20
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div className="col-12 text-center mt-30">
                    <a href="/" className="btn btn-one btn-anim">view all</a>
                  </div>
                </div>
              </div>
            </section>
          </div>
      );
    }
}

export default Homepage;
