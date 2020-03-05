import React, { Component } from 'react';
import './style.css';


class Header extends Component {
  render() {
    return (
      <>
        <header className="header">
          <div className=" affix hdstyle" style={{backgroundColor: "#EEF2F5"}}>
            <div className="container">
              <div className="row align-items-center">
                <div className="col-lg-3 col-md-12">
                  <div className="logo-one logo-wrap">
                    <div className="logo my-1">
                      <a href="/" style={{ color: '#3fca89',fontSize: '35px',fontFamily:'Arial'}}>
                        {/* <img src="img/logo.png" alt="logo"> */}
                        <b>BUNDESK</b>
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
                          <li className="nav-item dropdown" style={{fontFamily:'Arial',color:'#555555'}}>
                            <a href="/" className="nav-link current"><i ClassName="forum"/><i className="far fa-address-book" style={{marginRight:'5px'}}></i>Contact Us
                            </a>
                          </li>
                          <li className="nav-item dropdown" style={{fontFamily:'Arial',color:'#555555'}}>
                            <a href="/listing" className="nav-link current"><i className="far fa-comment-dots" style={{marginRight:'5px'}}></i>Enquiry
                            </a>
                          </li>
                          <li className="nav-item dropdown" style={{fontFamily:'Arial',color:'#555555'}}>
                            <a href="/listing" className="nav-link current"><i className="fas fa-globe" style={{marginRight:'5px'}}></i>Language
                            </a>
                          </li>
                          <li className="nav-item dropdown" style={{fontFamily:'Arial',color:'#555555'}}> 
                            <a href="/listing" className="nav-link current"><i className="far fa-user-circle" style={{marginRight:'5px'}}></i>Login
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
