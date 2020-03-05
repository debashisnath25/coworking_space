import React,{Component} from 'react';

class Footer extends Component{
    render(){
      return(
        <>
        <footer className="footer footer-one">
    <div className="foot-top">
      <div className="container">
        <div className="row">
          <div className="col-xl-4 col-lg-12 col-12 mb-60">
            <div className="company-details">
              <a href="#/" style={{ color: '#fff', fontSize: 20,fontFamily:'Arial'}}>
                {/* <img src="img/logo.png" alt="logo"> */}
                <b>BUNDESK</b>
              </a>
              <p className="mt-3">
                With Co-workingspace, get access to inspiring work cafes and coworking spaces. We are here to provide you with work optimised spaces, high-speed reliable internet, discounted F&amp;B - without any rent!
              </p>
              <div className="socials mt-4">
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
          </div>
          <div className="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-60">
            <div className="recent-post">
              <div className="foot-title">
                <h4 style={{fontFamily:'Arial'}}>useful links
                </h4>
              </div>
              <ul className="quick-link" style={{fontFamily:'Arial'}}>
                <li>
                  <a href="#/">Home
                  </a>
                </li>
                <li>
                  <a href="#/">our workspace
                  </a>
                </li>
                <li>
                  <a href="#/">register
                  </a>
                </li>
                <li>
                  <a href="#/">Login
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div className="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-60">
            <div className="recent-post">
              <div className="foot-title">
                <h4 style={{fontFamily:'Arial'}}>Categories
                </h4>
              </div>
              <ul className="quick-link" style={{fontFamily:'Arial'}}>
                <li>
                  <a href="#/">Meeting Room
                  </a>
                </li>
                <li>
                  <a href="#/">Coworking Space
                  </a>
                </li>
                <li>
                  <a href="#/">Private Office
                  </a>
                </li>
                <li>
                  <a href="#/">Training Room
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div className="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-60">
            <div className="recent-post">
              <div className="foot-title">
                <h4 style={{fontFamily:'Arial'}}>quick links
                </h4>
              </div>
              <ul className="quick-link" style={{fontFamily:'Arial'}}> 
                <li>
                  <a href="#/">About Us
                  </a>
                </li>
                <li>
                  <a href="#/">Contact Us
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div className="foot-bottom" style={{ background: '#1e1e1e',fontFamily:'Arial' }}>
      <div className="container">
        <div className="row">
          <div className="col-sm-12">
            <p className="text-capitalize" style={{ color: '#ffffff' }}>Copyright © 2020, All rights Reserved. Created by
              <a href="#/" style={{ color: '#3FCA89', textTransform: 'uppercase', fontWeight: 'bold' }}> Clickrstop software solutions PVT. LTD.
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>

      </>
      );
    }
}

export default Footer;
