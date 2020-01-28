import React, { Component } from 'react';
import './style.css';


class Header extends Component {
  render() {
    return (
      <>
        <header className="header">
          <div className="head-top head-top-one d-none d-lg-block">
            <div className="container">
              <div className="row align-items-center">
                <div className="col-lg-3">
                  <div className="socials socials-header text-lg-left text-center">
                    <a href="#/">
                      <i className="fab fa-facebook-f">
                      </i>
                    </a>
                    <a href="#/">
                      <i className="fab fa-google-plus-g">
                      </i>
                    </a>
                    <a href="#/">
                      <i className="fab fa-instagram">
                      </i>
                    </a>
                    <a href="#/">
                      <i className="fab fa-linkedin-in">
                      </i>
                    </a>
                    <a href="#/">
                      <i className="fab fa-twitter">
                      </i>
                    </a>
                  </div>
                </div>
                <div className="col-lg-9">
                  <ul className="head-contact text-lg-right text-center">
                    <li>
                      <a href="/login">Login</a>
                    </li>
                    <li>
                      <a href="/register">register</a>
                    </li>
                    <li className="ad-list">
                      <a href="#/" className="btn btn-one btn-anim w-100">
                        <i className="fa fa-plus-circle">
                        </i> add workspace
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div className="theme-header-one affix">
            <div className="container">
              <div className="row align-items-center">
                <div className="col-lg-3 col-md-12">
                  <div className="logo-one logo-wrap">
                    <div className="logo my-1">
                      <a href="/" style={{ color: '#fff' }}>
                        {/* <img src="img/logo.png" alt="logo"> */}
                        BUNDESK
                      </a>
                    </div>
                  </div>
                </div>
                <div className="col-lg-9 col-md-12">
                  <div className="menu menu-one">
                    <nav className="navbar navbar-expand-lg">
                      <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
                        <span className="navbar-toggler-icon bar1">
                        </span>
                        <span className="navbar-toggler-icon bar2">
                        </span>
                        <span className="navbar-toggler-icon bar3">
                        </span>
                      </button>
                      {/* Links */}
                      <div className="main-menu collapse navbar-collapse" id="nav-content">
                        <ul className="navbar-nav ml-auto">
                          <li className="nav-item dropdown">
                            <a href="/" className="nav-link current">Home
                            </a>
                          </li>
                          <li className="nav-item dropdown">
                            <a href="/listing" className="nav-link current">Delhi
                            </a>
                          </li>
                          <li className="nav-item dropdown">
                            <a href="/listing" className="nav-link current">Gurgaon
                            </a>
                          </li>
                          <li className="nav-item dropdown">
                            <a href="/listing" className="nav-link current">Noida
                            </a>
                          </li>
                          <li className="nav-item dropdown">
                            <a href="/listing" className="nav-link current">Mumbai
                            </a>
                          </li>
                          <li className="nav-item dropdown">
                            <a href="/listing" className="nav-link current">Bangalore
                            </a>
                          </li>
                          <li className="nav-item dropdown">
                            <a href="#/" className="nav-link dropdown-toggle" data-toggle="dropdown">Workspaces</a>
                            <ul className="dropdown-menu">
                              <li className="dropdown-item">
                                <a href="/listing">Meeting room</a>
                              </li>
                              <li className="dropdown-item">
                                <a href="/listing">Coworking space</a>
                              </li>
                              <li className="dropdown-item">
                                <a href="/listing">Private office</a>
                              </li>
                              <li className="dropdown-item">
                                <a href="/listing">Training room</a>
                              </li>
                              <li className="dropdown-item">
                                <a href="/listing">business center</a>
                              </li>
                              <li className="dropdown-item">
                                <a href="/listing">Coworking cafes</a>
                              </li>
                            </ul>
                          </li>
                          <li className="nav-item">
                            <a className="nav-link" href="/enquiry">Enquiry
                            </a>
                          </li>
                          <li className="nav-item">
                            <a className="nav-link" href="/contact_us">Contact Us
                            </a>
                          </li>
                        </ul>
                      </div>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>

        {/* ====== Go to top ====== */}
        <a id="toTop" title="Go to top" href="#/">
          <span id="toTopHover">
          </span>TOP
        </a>
        {/* Preloader start*/}
        {/*<div class="preloader">
            <div class="loader-inner">
              <div class="dash one">
                <i class="fa fa-map-marker-alt"></i>
              </div>
            <div class="dash two">
                <i class="fa fa-map-marker-alt"></i>
            </div>
            <div class="dash three">
                <i class="fa fa-map-marker-alt"></i>
            </div>
           </div>
          </div> */}
        {/* Preloader end */}
      </>
    );
  }
}

export default Header;
