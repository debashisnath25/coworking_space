import React from 'react';

class Footer extends React.Component {
    render() {
      return (
        <div>
        <footer className="footer footer-one">
          <div className="foot-top">
            <div className="container">
              <div className="row">
                <div className="col-xl-4 col-lg-12 col-12 mb-60">
                  <div className="company-details">
                    <img src="img/logo.png" className="foot-logo mb-4" alt="lister" />
                    <p className="pb-2">Lorem ipsum dolor sit amet, consect tuer adipi cin elit. Aen sociis nato pe na ibus magnis dis
                      partur monte na et ridiculu onec quam felis. castei efte tuerg scn kt isceding elit ende
                      cd magum socadaiis nato ipsf.</p>
                    <div className="socials mt-4">
                      <a href="/">
                        <i className="fab fa-facebook-f" />
                      </a>
                      <a href="/">
                        <i className="fab fa-google-plus-g" />
                      </a>
                      <a href="/">
                        <i className="fab fa-instagram" />
                      </a>
                      <a href="/">
                        <i className="fab fa-linkedin-in" />
                      </a>
                      <a href="/">
                        <i className="fab fa-twitter" />
                      </a>
                    </div>
                  </div>
                </div>
                <div className="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-12 mb-60">
                  <div className="recent-post">
                    <div className="foot-title">
                      <h4>useful links</h4>
                    </div>
                    <ul className="quick-link">
                      <li>
                        <a href="add-list.html">add listing</a>
                      </li>
                      <li>
                        <a href="register.html">register</a>
                      </li>
                      <li>
                        <a href="sign-in.html">sign in</a>
                      </li>
                      <li>
                        <a href="about.html">how it work</a>
                      </li>
                      <li>
                        <a href="contact.html">contact us</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div className="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-12 mb-60">
                  <div className="recent-post">
                    <div className="foot-title">
                      <h4>my account</h4>
                    </div>
                    <ul className="quick-link">
                      <li>
                        <a href="login.html">create account</a>
                      </li>
                      <li>
                        <a href="/">dashboard</a>
                      </li>
                      <li>
                        <a href="/">profile</a>
                      </li>
                      <li>
                        <a href="/">my listing</a>
                      </li>
                      <li>
                        <a href="/">favorites</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div className="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-12 mb-60">
                  <div className="recent-post">
                    <div className="foot-title">
                      <h4>categories</h4>
                    </div>
                    <ul className="quick-link">
                      <li>
                        <a href="/">Restaurants</a>
                      </li>
                      <li>
                        <a href="/">Shopping</a>
                      </li>
                      <li>
                        <a href="/">Hotels</a>
                      </li>
                      <li>
                        <a href="/">Destinations</a>
                      </li>
                      <li>
                        <a href="/">Nightlife</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div className="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-12 mb-60">
                  <div className="recent-post">
                    <div className="foot-title">
                      <h4>quick links</h4>
                    </div>
                    <ul className="quick-link">
                      <li>
                        <a href="about.html">About Us</a>
                      </li>
                      <li>
                        <a href="price.html">Pricing</a>
                      </li>
                      <li>
                        <a href="blog-grid.html">Blogs</a>
                      </li>
                      <li>
                        <a href="/">Testimonials</a>
                      </li>
                      <li>
                        <a href="/">Our Partners</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="foot-bottom">
            <div className="container">
              <div className="row">
                <div className="col-sm-12">
                  <p className="text-capitalize">Copyright © 2019, All rights Reserved. Created by
                    <a href="/">Clickrstop software solutions PVT. LTD.</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </footer>
        </div>
      );
    }
}

export default Footer;
