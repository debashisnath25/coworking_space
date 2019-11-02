import React from 'react';

class Header extends React.Component {
    render() {
      return (
        <div>
        <div className="col-lg-9">
          <ul className="head-contact text-lg-right text-center">
            <li>
              <i className="fa fa-phone" />
              +123-456-7890
            </li>
            <li>
              <i className="fa fa-envelope" />
              info@company.com
            </li>
            <li className="language-drop">
              <div className="dropdown">
                <a href="/" className="dropdown-toggle text-capitalize" data-toggle="dropdown">
                  english
                </a>
                <div className="dropdown-menu">
                  <a className="dropdown-item" href="/">hindi</a>
                  <a className="dropdown-item" href="/">urdu</a>
                  <a className="dropdown-item" href="/">english</a>
                </div>
              </div>
            </li>
            <li className="ad-list">
              <a href="add-list.html" className="btn btn-two btn-anim">
                <i className="fa fa-plus-circle" /> add listing
              </a>
            </li>
          </ul>
        </div>
        <div className="theme-header-one affix">
          <div className="container">
            <div className="row align-items-center">
              <div className="col-lg-3 col-md-12">
                <div className="logo-one logo-wrap">
                  <div className="logo my-1">
                    <a href="index.html">
                      <img src="img/logo.png" alt="logo" />
                    </a>
                  </div>
                </div>
              </div>
              <div className="col-lg-9 col-md-12">
                <div className="menu menu-one">
                  <nav className="navbar navbar-expand-lg">
                    <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
                      <span className="navbar-toggler-icon bar1" />
                      <span className="navbar-toggler-icon bar2" />
                      <span className="navbar-toggler-icon bar3" />
                    </button>
                    <div className="main-menu collapse navbar-collapse" id="nav-content">
                      <ul className="navbar-nav ml-auto">
                        <li className="nav-item dropdown">
                          <a href="/" className="nav-link dropdown-toggle current" data-toggle="dropdown">home</a>
                          <ul className="dropdown-menu">
                            <li className="dropdown-item dropdown">
                              <a href="index.html">home 1</a>
                            </li>
                          </ul>
                        </li>
                        <li className="nav-item">
                          <a className="nav-link" href="about.html">about us</a>
                        </li>
                        <li className="nav-item dropdown">
                          <a href="/" className="nav-link dropdown-toggle" data-toggle="dropdown">listing</a>
                          <ul className="dropdown-menu">
                            <li className="dropdown-item">
                              <a href="listing.html">all listings</a>
                            </li>
                            <li className="dropdown-item">
                              <a href="listing-sidebar.html">listing with sidebar</a>
                            </li>
                            <li className="dropdown-item">
                              <a href="listing-with-map.html">listing with map</a>
                            </li>
                            <li className="dropdown-item">
                              <a href="listing-detail.html">listing detail</a>
                            </li>
                          </ul>
                        </li>
                        <li className="nav-item dropdown">
                          <a href="/" className="nav-link dropdown-toggle" data-toggle="dropdown">blogs</a>
                          <ul className="dropdown-menu">
                            <li className="dropdown-item">
                              <a href="blog-page.html">blog page</a>
                            </li>
                            <li className="dropdown-item">
                              <a href="blog-right-sidebar.html">blog rightbar</a>
                            </li>
                            <li className="dropdown-item">
                              <a href="blog-left-sidebar.html">blog leftbar</a>
                            </li>
                            <li className="dropdown-item">
                              <a href="blog-detail.html">blog detail</a>
                            </li>
                            <li className="dropdown-item dropdown">
                              <a className="dropdown-toggle" href="/">level 1</a>
                              <ul className="dropdown-menu">
                                <li className="dropdown-item">
                                  <a href="/">level 2</a>
                                </li>
                                <li className="dropdown-item dropdown">
                                  <a href="/" className="dropdown-toggle">level 2</a>
                                  <ul className="dropdown-menu">
                                    <li className="dropdown-item">
                                      <a href="/">level 3</a>
                                    </li>
                                  </ul>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li className="nav-item dropdown has-mega">
                          <a className="nav-link dropdown-toggle" href="/" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            pages
                          </a>
                          <ul className="dropdown-menu mega-dropdown">
                            <li>
                              <ul>
                                <li className="dropdown-item">
                                  <a href="about.html">about us</a>
                                </li>
                                <li className="dropdown-item">
                                  <a href="faq.html">faq</a>
                                </li>
                                <li className="dropdown-item">
                                  <a href="service.html">service</a>
                                </li>
                                <li className="dropdown-item">
                                  <a href="pricing.html">pricing</a>
                                </li>
                              </ul>
                            </li>
                            <li>
                              <ul>
                                <li className="dropdown-item">
                                  <a href="error-page.html">error page</a>
                                </li>
                                <li className="dropdown-item">
                                  <a href="add-list.html">add list</a>
                                </li>
                                <li className="dropdown-item">
                                  <a href="contact.html">contact us</a>
                                </li>
                                <li className="dropdown-item">
                                  <a href="login.html">login / signup</a>
                                </li>
                              </ul>
                            </li>
                            <li>
                              <ul>
                                <li className="dropdown-item">
                                  <a href="listing.html">all listings</a>
                                </li>
                                <li className="dropdown-item">
                                  <a href="listing-sidebar.html">listing with sidebar</a>
                                </li>
                                <li className="dropdown-item">
                                  <a href="listing-with-map.html">listing with map</a>
                                </li>
                                <li className="dropdown-item">
                                  <a href="listing-detail.html">listing detail</a>
                                </li>
                              </ul>
                            </li>
                            <li>
                              <ul>
                                <li className="dropdown-item">
                                  <a href="blog-page.html">blog page</a>
                                </li>
                                <li className="dropdown-item">
                                  <a href="blog-right-sidebar.html">blog rightbar</a>
                                </li>
                                <li className="dropdown-item">
                                  <a href="blog-left-sidebar.html">blog leftbar</a>
                                </li>
                                <li className="dropdown-item">
                                  <a href="blog-detail.html">blog detail</a>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li className="nav-item">
                          <a className="nav-link" href="contact.html">contact us</a>
                        </li>
                        <li className="nav-item">
                          <a className="nav-link" href="#search">
                            <i className="fa fa-search" />
                          </a>
                        </li>
                        <li className="nav-item join-nav d-lg-block d-none">
                          <a className="nav-link" href="login.html">
                            <i className="fa fa-user c-theme mr-2" /> join us</a>
                        </li>
                      </ul>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      );
    }
}

export default Header;
