import React from 'react';
class About_us extends React.Component {
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
        {/* page-banner start*/}
        <section className="page-banner">
          <div className="container">
            <div className="row">
              <div className="col-12">
                <h3>about us</h3>
                <ul className="banner-link text-center">
                  <li>
                    <a href="index.html">Home</a>
                  </li>
                  <li>
                    <span className="active">about us</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        {/* page-banner ends*/}
        {/* about start*/}
        <div className="about-1 o-hide bg-w sp-100">
          <div className="container">
            <div className="row">
              <div className="col-lg-6 align-self-end">
                <div className="abt-img">
                  <img src="img/abt-mockup.png" alt="mockup" />
                </div>
              </div>
              <div className="col-lg-6 mt-lg-0 mt-5">
                <h4>our awesome story</h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligu eg dolor. Aenatibus parturien
                  monte, nascetur rt ridiculus mus. Donec quam felis ultricies nec pellent esqueu pretium quis, sem.
                  Nulla con sequat massa quis enim. Donec pede justo, fringil vel, aliquet nec, vulputate eget, arcu.
                  In enim justo dictum felis eu mollis ju pretium tincidunt.
                </p>
                <ul className="list-1">
                  <li>
                    <span>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>
                  </li>
                  <li>
                    <span>Nulla consequat massa quis enim. Donec fringilla vel, aliquet nec.</span>
                  </li>
                  <li>
                    <span> Aenean leo ligula, porttitor eu consequat vitae eleifend ac enim.</span>
                  </li>
                  <li>
                    <span> Sociis na toque penatibus et magnis dis parturien monte nascetur ridic.</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        {/* about end*/}
        {/* counter starts */}
        <section className="counters sp-100-70">
          <div className="container">
            <div className="row">
              <div className="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                <div className="counter-box">
                  <div className="icon-box">
                    <i className="flaticon-list-1" />
                  </div>
                  <h2 className="count c-theme" data-count={5256}>0</h2>
                  <p>total listing</p>
                </div>
              </div>
              <div className="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                <div className="counter-box">
                  <div className="icon-box">
                    <i className="flaticon-team" />
                  </div>
                  <h2 className="count c-theme" data-count={1250}>0</h2>
                  <p>total listing</p>
                </div>
              </div>
              <div className="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                <div className="counter-box">
                  <div className="icon-box">
                    <i className="flaticon-trophy" />
                  </div>
                  <h2 className="count c-theme" data-count={160}>0</h2>
                  <p>total listing</p>
                </div>
              </div>
              <div className="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                <div className="counter-box">
                  <div className="icon-box">
                    <i className="flaticon-appointment" />
                  </div>
                  <h2 className="count c-theme" data-count={12}>0</h2>
                  <p>total listing</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        {/* counter ends */}
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
        {/* faq start*/}
        <section className="bg-w sp-100">
          <div className="container">
            <div className="row">
              <div className="col-lg-4">
                <ul className="nav faq-tabs mb-lg-0 mb-5" role="tablist">
                  <li className="nav-item">
                    <a className="nav-link active" href="#faq1" role="tab" data-toggle="tab">Genral FAQ</a>
                  </li>
                  <li className="nav-item">
                    <a className="nav-link" href="#faq2" role="tab" data-toggle="tab">Listing Support</a>
                  </li>
                  <li className="nav-item">
                    <a className="nav-link" href="#faq3" role="tab" data-toggle="tab">Category</a>
                  </li>
                  <li className="nav-item">
                    <a className="nav-link" href="#faq4" role="tab" data-toggle="tab">Services</a>
                  </li>
                  <li className="nav-item">
                    <a className="nav-link" href="#faq5" role="tab" data-toggle="tab">Customize Options</a>
                  </li>
                  <li className="nav-item">
                    <a className="nav-link" href="#faq6" role="tab" data-toggle="tab">Email Support</a>
                  </li>
                </ul>
              </div>
              <div className="col-lg-8">
                <h4 className="title-sep2 mb-30">Listing Support</h4>
                {/* Tab panes */}
                <div className="tab-content">
                  <div role="tabpanel" className="tab-pane fade in active show" id="faq1">
                    <div id="faq-accordion1" className="theme-accordion">
                      <div className="acc-card">
                        <div className="panel-heading" id="headingOne">
                          <button className="acc-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Etiam sit amet orci eget eros faucibus tincidunt sed fringilla mauris
                          </button>
                        </div>
                        <div id="collapseOne" className="collapse show" aria-labelledby="headingOne" data-parent="#faq-accordion1">
                          <div className="card-body">
                            <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, df sed do eiu tempor
                              incid uts hgia labore et dolor magna aliqua. Ut enim minim veniam. Aenean
                              massa nat penatius magnis dis parturient montes, nasceturs et ridiculus musg.
                              Donec felis, ultrhfj iciesne elente sque eu.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div className="acc-card">
                        <div className="panel-heading" id="headingTwo">
                          <button className="acc-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Cras id dui aenean ut eros et nisl sagittis vestibulum. nullam nulla eros
                          </button>
                        </div>
                        <div id="collapseTwo" className="collapse" aria-labelledby="headingTwo" data-parent="#faq-accordion1">
                          <div className="card-body">
                            <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, df sed do eiu tempor
                              incid uts hgia labore et dolor magna aliqua. Ut enim minim veniam. Aenean
                              massa nat penatius magnis dis parturient montes, nasceturs et ridiculus musg.
                              Donec felis, ultrhfj iciesne elente sque.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div className="acc-card">
                        <div className="panel-heading" id="headingThree">
                          <button className="acc-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Phasellus leo dolor, tempus non, auctor et hendrerit quis, nisi curabitur
                          </button>
                        </div>
                        <div id="collapseThree" className="collapse" aria-labelledby="headingThree" data-parent="#faq-accordion1">
                          <div className="card-body">
                            <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, sed do eiu tempore
                              incididunt ut labore et dolore magna aliqua. Ut eni minim veniam. Aenean
                              massa cum sociis natoque natib magnis dis parturie ntut montes nascetu ridiculus
                              muson quam felis.</p>
                          </div>
                        </div>
                      </div>
                      <div className="acc-card">
                        <div className="panel-heading" id="headingFour">
                          <button className="acc-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Faucibus orci luctus et ultrices posuere cubilia curae
                          </button>
                        </div>
                        <div id="collapseFour" className="collapse" aria-labelledby="headingFour" data-parent="#faq-accordion1">
                          <div className="card-body">
                            <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, df sed do eiu tempor
                              incid uts hgia labore et dolor magna aliqua. Ut enim minim veniam. Aenean
                              massa nat penatius magnis dis parturient montes, nasceturs et ridiculus musg.
                              Donec felis, ultrhfj iciesne elente sque eu.Aenean massa cum sociis natoque
                              penati magnis dis partu rient montes, nasceturs rid iculus mus.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div role="tabpanel" className="tab-pane fade" id="faq2">
                    <div id="faq-accordion2" className="theme-accordion">
                      <div className="acc-card">
                        <div className="panel-heading" id="heading2One">
                          <button className="acc-link collapsed" data-toggle="collapse" data-target="#collapse2One" aria-expanded="true" aria-controls="collapseOne">
                            Etiam sit amet orci eget eros faucibus tincidunt sed fringilla mauris
                          </button>
                        </div>
                        <div id="collapse2One" className="collapse" aria-labelledby="heading2One" data-parent="#faq-accordion2">
                          <div className="card-body">
                            <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, df sed do eiu tempor
                              incid uts hgia labore et dolor magna aliqua. Ut enim minim veniam. Aenean
                              massa nat penatius magnis dis parturient montes, nasceturs et ridiculus musg.
                              Donec felis, ultrhfj iciesne elente sque eu.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div className="acc-card">
                        <div className="panel-heading" id="heading2Two">
                          <button className="acc-link" data-toggle="collapse" data-target="#collapse2Two" aria-expanded="false" aria-controls="collapseTwo">
                            Cras id dui aenean ut eros et nisl sagittis vestibulum. nullam nulla eros
                          </button>
                        </div>
                        <div id="collapse2Two" className="collapse show" aria-labelledby="heading2Two" data-parent="#faq-accordion2">
                          <div className="card-body">
                            <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, df sed do eiu tempor
                              incid uts hgia labore et dolor magna aliqua. Ut enim minim veniam. Aenean
                              massa nat penatius magnis dis parturient montes, nasceturs et ridiculus musg.
                              Donec felis, ultrhfj iciesne elente sque.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div className="acc-card">
                        <div className="panel-heading" id="heading2Three">
                          <button className="acc-link collapsed" data-toggle="collapse" data-target="#collapse2Three" aria-expanded="false" aria-controls="collapseThree">
                            Phasellus leo dolor, tempus non, auctor et hendrerit quis, nisi curabitur
                          </button>
                        </div>
                        <div id="collapse2Three" className="collapse" aria-labelledby="heading2Three" data-parent="#faq-accordion2">
                          <div className="card-body">
                            <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, sed do eiu tempore
                              incididunt ut labore et dolore magna aliqua. Ut eni minim veniam. Aenean
                              massa cum sociis natoque natib magnis dis parturie ntut montes nascetu ridiculus
                              muson quam felis.</p>
                          </div>
                        </div>
                      </div>
                      <div className="acc-card">
                        <div className="panel-heading" id="heading2Four">
                          <button className="acc-link collapsed" data-toggle="collapse" data-target="#collapse2Four" aria-expanded="false" aria-controls="collapseFour">
                            Faucibus orci luctus et ultrices posuere cubilia curae
                          </button>
                        </div>
                        <div id="collapse2Four" className="collapse" aria-labelledby="heading2Four" data-parent="#faq-accordion2">
                          <div className="card-body">
                            <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, df sed do eiu tempor
                              incid uts hgia labore et dolor magna aliqua. Ut enim minim veniam. Aenean
                              massa nat penatius magnis dis parturient montes, nasceturs et ridiculus musg.
                              Donec felis, ultrhfj iciesne elente sque eu.Aenean massa cum sociis natoque
                              penati magnis dis partu rient montes, nasceturs rid iculus mus.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div role="tabpanel" className="tab-pane fade" id="faq3">
                    <div id="faq-accordion3" className="theme-accordion">
                      <div className="acc-card">
                        <div className="panel-heading" id="heading3One">
                          <button className="acc-link collapsed" data-toggle="collapse" data-target="#collapse3One" aria-expanded="true" aria-controls="collapseOne">
                            Etiam sit amet orci eget eros faucibus tincidunt sed fringilla mauris
                          </button>
                        </div>
                        <div id="collapse3One" className="collapse" aria-labelledby="heading3One" data-parent="#faq-accordion3">
                          <div className="card-body">
                            <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, df sed do eiu tempor
                              incid uts hgia labore et dolor magna aliqua. Ut enim minim veniam. Aenean
                              massa nat penatius magnis dis parturient montes, nasceturs et ridiculus musg.
                              Donec felis, ultrhfj iciesne elente sque eu.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div className="acc-card">
                        <div className="panel-heading" id="heading3Three">
                          <button className="acc-link collapsed" data-toggle="collapse" data-target="#collapse3Three" aria-expanded="false" aria-controls="collapseThree">
                            Phasellus leo dolor, tempus non, auctor et hendrerit quis, nisi curabitur
                          </button>
                        </div>
                        <div id="collapse3Three" className="collapse" aria-labelledby="heading3Three" data-parent="#faq-accordion3">
                          <div className="card-body">
                            <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, sed do eiu tempore
                              incididunt ut labore et dolore magna aliqua. Ut eni minim veniam. Aenean
                              massa cum sociis natoque natib magnis dis parturie ntut montes nascetu ridiculus
                              muson quam felis.</p>
                          </div>
                        </div>
                      </div>
                      <div className="acc-card">
                        <div className="panel-heading" id="heading3Two">
                          <button className="acc-link" data-toggle="collapse" data-target="#collapse3Two" aria-expanded="false" aria-controls="collapseTwo">
                            Cras id dui aenean ut eros et nisl sagittis vestibulum. nullam nulla eros
                          </button>
                        </div>
                        <div id="collapse3Two" className="collapse show" aria-labelledby="heading3Two" data-parent="#faq-accordion3">
                          <div className="card-body">
                            <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, df sed do eiu tempor
                              incid uts hgia labore et dolor magna aliqua. Ut enim minim veniam. Aenean
                              massa nat penatius magnis dis parturient montes, nasceturs et ridiculus musg.
                              Donec felis, ultrhfj iciesne elente sque.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div className="acc-card">
                        <div className="panel-heading" id="heading3Four">
                          <button className="acc-link collapsed" data-toggle="collapse" data-target="#collapse3Four" aria-expanded="false" aria-controls="collapseFour">
                            Lorem sit tempor cupidatat consequat cillum ipsum voluptate mollit.
                          </button>
                        </div>
                        <div id="collapse3Four" className="collapse" aria-labelledby="heading3Four" data-parent="#faq-accordion3">
                          <div className="card-body">
                            <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, df sed do eiu tempor
                              incid uts hgia labore et dolor magna aliqua. Ut enim minim veniam. Aenean
                              massa nat penatius magnis dis parturient montes, nasceturs et ridiculus musg.
                              Donec felis, ultrhfj iciesne elente sque eu.Aenean massa cum sociis natoque
                              penati magnis dis partu rient montes, nasceturs rid iculus mus.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div role="tabpanel" className="tab-pane fade" id="faq4">
                    <div id="faq-accordion4" className="theme-accordion">
                      <div className="acc-card">
                        <div className="panel-heading" id="heading4Three">
                          <button className="acc-link collapsed" data-toggle="collapse" data-target="#collapse4Three" aria-expanded="false" aria-controls="collapseThree">
                            Phasellus leo dolor, tempus non, auctor et hendrerit quis, nisi curabitur
                          </button>
                        </div>
                        <div id="collapse4Three" className="collapse" aria-labelledby="heading4Three" data-parent="#faq-accordion4">
                          <div className="card-body">
                            <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, sed do eiu tempore
                              incididunt ut labore et dolore magna aliqua. Ut eni minim veniam. Aenean
                              massa cum sociis natoque natib magnis dis parturie ntut montes nascetu ridiculus
                              muson quam felis.</p>
                          </div>
                        </div>
                      </div>
                      <div className="acc-card">
                        <div className="panel-heading" id="heading4Two">
                          <button className="acc-link" data-toggle="collapse" data-target="#collapse4Two" aria-expanded="false" aria-controls="collapseTwo">
                            Cras id dui aenean ut eros et nisl sagittis vestibulum. nullam nulla eros
                          </button>
                        </div>
                        <div id="collapse4Two" className="collapse show" aria-labelledby="heading4Two" data-parent="#faq-accordion4">
                          <div className="card-body">
                            <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, df sed do eiu tempor
                              incid uts hgia labore et dolor magna aliqua. Ut enim minim veniam. Aenean
                              massa nat penatius magnis dis parturient montes, nasceturs et ridiculus musg.
                              Donec felis, ultrhfj iciesne elente sque.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div className="acc-card">
                        <div className="panel-heading" id="heading4One">
                          <button className="acc-link collapsed" data-toggle="collapse" data-target="#collapse4One" aria-expanded="true" aria-controls="collapseOne">
                            Etiam sit amet orci eget eros faucibus tincidunt sed fringilla mauris
                          </button>
                        </div>
                        <div id="collapse4One" className="collapse" aria-labelledby="heading4One" data-parent="#faq-accordion4">
                          <div className="card-body">
                            <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, df sed do eiu tempor
                              incid uts hgia labore et dolor magna aliqua. Ut enim minim veniam. Aenean
                              massa nat penatius magnis dis parturient montes, nasceturs et ridiculus musg.
                              Donec felis, ultrhfj iciesne elente sque eu.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div className="acc-card">
                        <div className="panel-heading" id="heading4Four">
                          <button className="acc-link collapsed" data-toggle="collapse" data-target="#collapse4Four" aria-expanded="false" aria-controls="collapseFour">
                            Lorem sit tempor cupidatat consequat cillum ipsum voluptate mollit.
                          </button>
                        </div>
                        <div id="collapse4Four" className="collapse" aria-labelledby="heading4Four" data-parent="#faq-accordion4">
                          <div className="card-body">
                            <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, df sed do eiu tempor
                              incid uts hgia labore et dolor magna aliqua. Ut enim minim veniam. Aenean
                              massa nat penatius magnis dis parturient montes, nasceturs et ridiculus musg.
                              Donec felis, ultrhfj iciesne elente sque eu.Aenean massa cum sociis natoque
                              penati magnis dis partu rient montes, nasceturs rid iculus mus.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div role="tabpanel" className="tab-pane fade" id="faq5">
                    <div id="faq-accordion5" className="theme-accordion">
                      <div className="acc-card">
                        <div className="panel-heading" id="heading5Three">
                          <button className="acc-link collapsed" data-toggle="collapse" data-target="#collapse5Three" aria-expanded="false" aria-controls="collapseThree">
                            Velit anim dolor elit Lorem cupidatat esse sunt elit laboris sunt.
                          </button>
                        </div>
                        <div id="collapse5Three" className="collapse" aria-labelledby="heading5Three" data-parent="#faq-accordion5">
                          <div className="card-body">
                            <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, sed do eiu tempore
                              incididunt ut labore et dolore magna aliqua. Ut eni minim veniam. Aenean
                              massa cum sociis natoque natib magnis dis parturie ntut montes nascetu ridiculus
                              muson quam felis.</p>
                          </div>
                        </div>
                      </div>
                      <div className="acc-card">
                        <div className="panel-heading" id="heading5One">
                          <button className="acc-link collapsed" data-toggle="collapse" data-target="#collapse5One" aria-expanded="true" aria-controls="collapseOne">
                            Etiam sit amet orci eget eros faucibus tincidunt sed fringilla mauris
                          </button>
                        </div>
                        <div id="collapse5One" className="collapse" aria-labelledby="heading5One" data-parent="#faq-accordion5">
                          <div className="card-body">
                            <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, df sed do eiu tempor
                              incid uts hgia labore et dolor magna aliqua. Ut enim minim veniam. Aenean
                              massa nat penatius magnis dis parturient montes, nasceturs et ridiculus musg.
                              Donec felis, ultrhfj iciesne elente sque eu.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div className="acc-card">
                        <div className="panel-heading" id="heading5Four">
                          <button className="acc-link collapsed" data-toggle="collapse" data-target="#collapse5Four" aria-expanded="false" aria-controls="collapseFour">
                            Lorem sit tempor cupidatat consequat cillum ipsum voluptate mollit.
                          </button>
                        </div>
                        <div id="collapse5Four" className="collapse" aria-labelledby="heading5Four" data-parent="#faq-accordion5">
                          <div className="card-body">
                            <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, df sed do eiu tempor
                              incid uts hgia labore et dolor magna aliqua. Ut enim minim veniam. Aenean
                              massa nat penatius magnis dis parturient montes, nasceturs et ridiculus musg.
                              Donec felis, ultrhfj iciesne elente sque eu.Aenean massa cum sociis natoque
                              penati magnis dis partu rient montes, nasceturs rid iculus mus.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div className="acc-card">
                        <div className="panel-heading" id="heading5Two">
                          <button className="acc-link" data-toggle="collapse" data-target="#collapse5Two" aria-expanded="false" aria-controls="collapseTwo">
                            Ea elit adipisicing et dolore excepteur deserunt fugiat ipsum culpa et.
                          </button>
                        </div>
                        <div id="collapse5Two" className="collapse show" aria-labelledby="heading5Two" data-parent="#faq-accordion5">
                          <div className="card-body">
                            <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, df sed do eiu tempor
                              incid uts hgia labore et dolor magna aliqua. Ut enim minim veniam. Aenean
                              massa nat penatius magnis dis parturient montes, nasceturs et ridiculus musg.
                              Donec felis, ultrhfj iciesne elente sque.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div role="tabpanel" className="tab-pane fade" id="faq6">
                    <div id="faq-accordion6" className="theme-accordion">
                      <div className="acc-card">
                        <div className="panel-heading" id="heading6Three">
                          <button className="acc-link collapsed" data-toggle="collapse" data-target="#collapse6Three" aria-expanded="false" aria-controls="collapseThree">
                            Velit anim dolor elit Lorem cupidatat esse sunt elit laboris sunt.
                          </button>
                        </div>
                        <div id="collapse6Three" className="collapse" aria-labelledby="heading6Three" data-parent="#faq-accordion6">
                          <div className="card-body">
                            <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, sed do eiu tempore
                              incididunt ut labore et dolore magna aliqua. Ut eni minim veniam. Aenean
                              massa cum sociis natoque natib magnis dis parturie ntut montes nascetu ridiculus
                              muson quam felis.</p>
                          </div>
                        </div>
                      </div>
                      <div className="acc-card">
                        <div className="panel-heading" id="heading6Two">
                          <button className="acc-link" data-toggle="collapse" data-target="#collapse6Two" aria-expanded="false" aria-controls="collapseTwo">
                            Laborum labore excepteur incididunt duis fugiat eu Lorem.
                          </button>
                        </div>
                        <div id="collapse6Two" className="collapse show" aria-labelledby="heading6Two" data-parent="#faq-accordion6">
                          <div className="card-body">
                            <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, df sed do eiu tempor
                              incid uts hgia labore et dolor magna aliqua. Ut enim minim veniam. Aenean
                              massa nat penatius magnis dis parturient montes, nasceturs et ridiculus musg.
                              Donec felis, ultrhfj iciesne elente sque.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div className="acc-card">
                        <div className="panel-heading" id="heading6One">
                          <button className="acc-link collapsed" data-toggle="collapse" data-target="#collapse6One" aria-expanded="true" aria-controls="collapseOne">
                            Etiam sit amet orci eget eros faucibus tincidunt sed fringilla mauris
                          </button>
                        </div>
                        <div id="collapse6One" className="collapse" aria-labelledby="heading6One" data-parent="#faq-accordion6">
                          <div className="card-body">
                            <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, df sed do eiu tempor
                              incid uts hgia labore et dolor magna aliqua. Ut enim minim veniam. Aenean
                              massa nat penatius magnis dis parturient montes, nasceturs et ridiculus musg.
                              Donec felis, ultrhfj iciesne elente sque eu.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div className="acc-card">
                        <div className="panel-heading" id="heading6Four">
                          <button className="acc-link collapsed" data-toggle="collapse" data-target="#collapse6Four" aria-expanded="false" aria-controls="collapseFour">
                            Et incididunt adipisicing ea aliqua aliqua id fugiat nostrud.
                          </button>
                        </div>
                        <div id="collapse6Four" className="collapse" aria-labelledby="heading6Four" data-parent="#faq-accordion6">
                          <div className="card-body">
                            <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, df sed do eiu tempor
                              incid uts hgia labore et dolor magna aliqua. Ut enim minim veniam. Aenean
                              massa nat penatius magnis dis parturient montes, nasceturs et ridiculus musg.
                              Donec felis, ultrhfj iciesne elente sque eu.Aenean massa cum sociis natoque
                              penati magnis dis partu rient montes, nasceturs rid iculus mus.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      );
    }
}

export default About_us;
