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
                  <img src="img/logo.png" className="foot-logo mb-4" alt="lister" />
                  <p className="pb-2">
                    With Co-workingspace, get access to inspiring work cafes and coworking spaces. We are here to provide you with work optimised spaces, high-speed reliable internet, discounted F&amp;B - without any rent!
                  </p>
                  <div className="socials mt-4">
                    <a href="#">
                      <i className="fab fa-facebook-f">
                      </i>
                    </a>
                    <a href="#">
                      <i className="fab fa-google-plus-g">
                      </i>
                    </a>
                    <a href="#">
                      <i className="fab fa-instagram">
                      </i>
                    </a>
                    <a href="#">
                      <i className="fab fa-linkedin-in">
                      </i>
                    </a>
                    <a href="#">
                      <i className="fab fa-twitter">
                      </i>
                    </a>
                  </div>
                </div>
              </div>
              <div className="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-60">
                <div className="recent-post">
                  <div className="foot-title">
                    <h4>useful links
                    </h4>
                  </div>
                  <ul className="quick-link">
                    <li>
                      <a href="/home">Home
                      </a>
                    </li>
                    <li>
                      <a href="/listing">our workspace
                      </a>
                    </li>
                    <li>
                      <a href="/signin">register
                      </a>
                    </li>
                    <li>
                      <a href="/signin">Login
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div className="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-60">
                <div className="recent-post">
                  <div className="foot-title">
                    <h4>Categories
                    </h4>
                  </div>
                  <ul className="quick-link">
                    <li>
                      <a href="/listing">Meeting Room
                      </a>
                    </li>
                    <li>
                      <a href="/listing">Coworking Space
                      </a>
                    </li>
                    <li>
                      <a href="/listing">Private Office
                      </a>
                    </li>
                    <li>
                      <a href="/listing">Training Room
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div className="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-60">
                <div className="recent-post">
                  <div className="foot-title">
                    <h4>quick links
                    </h4>
                  </div>
                  <ul className="quick-link">
                    <li>
                      <a href="/aboutUs">About Us
                      </a>
                    </li>
                    <li>
                      <a href="/contactUs">Contact Us
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div className="foot-bottom" style={{background: '#f8f8f8'}}>
          <div className="container">
            <div className="row">
              <div className="col-sm-12">
                <p className="text-capitalize" style={{color: '#000'}}>Copyright © 2019, All rights Reserved. Created by
                  <a href="#" style={{color: '#000', textTransform: 'uppercase', fontWeight: 'bold'}}> Clickrstop software solutions PVT. LTD.
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
