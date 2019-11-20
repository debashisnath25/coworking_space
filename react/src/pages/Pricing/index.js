import React,{Component} from 'react';
import { HomeBanner,Location,SigninBanner,PopularList } from './../../components';


class Pricing extends Component{
    render(){
      return(
        <>
         <div>
            {/* price start*/}
        <section className="bg-w sp-100" style={{paddingTop: '100px'}}>
          <div className="container">
            <div className="row">
              <div className=" col-12">
                <ul className="banner-link ">
                  <li>
                    <a href="index.php">Home
                    </a>
                  </li>
                  <li>
                    <span className="active">Pricing
                    </span>
                  </li>
                </ul>
              </div>
            </div>
            <div className="row justify-content-center">
              <div className="col-lg-4 col-md-6 col-12 mb-30">
                <div className="price-item">
                  <div className="price-top">
                    <div className="amount">
                      <h4>Basic Plan</h4>
                      <h3>₹ 500</h3>
                      <p className="c-theme text-capitalize mb-0">per month</p>
                    </div>
                    <div className="price-body mt-3">
                      <ul className="plan-info-list">
                        <li>
                          <p>1 Listing Submission</p>
                        </li>
                        <li>
                          <p>90 Days Validity</p>
                        </li>
                        <li>
                          <p>Online Booking</p>
                        </li>
                        <li>
                          <p>Non Featured</p>
                        </li>
                        <li>
                          <p>Limited Support</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div className="price-bottom">
                    <a href="#" className="btn btn-anim btn-two mt-30">choose plan</a>
                  </div>
                </div>
              </div>
              <div className="col-lg-4 col-md-6 col-12 mb-30">
                <div className="price-item active">
                  <div className="price-top">
                    <div className="amount">
                      <h4>Professional Plan</h4>
                      <h3>₹ 1,000</h3>
                      <p className="c-theme text-capitalize mb-0">per month</p>
                    </div>
                    <div className="price-body mt-3">
                      <ul className="plan-info-list">
                        <li>
                          <p>1 Listing Submission</p>
                        </li>
                        <li>
                          <p>90 Days Validity</p>
                        </li>
                        <li>
                          <p>Online Booking</p>
                        </li>
                        <li>
                          <p>Non Featured</p>
                        </li>
                        <li>
                          <p>Limited Support</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div className="price-bottom">
                    <a href="#" className="btn btn-anim btn-two mt-30">Selected</a>
                  </div>
                </div>
              </div>
              <div className="col-lg-4 col-md-6 col-12 mb-30">
                <div className="price-item">
                  <div className="price-top">
                    <div className="amount">
                      <h4>Extented Plan</h4>
                      <h3>₹ 2,000</h3>
                      <p className="c-theme text-capitalize mb-0">per month</p>
                    </div>
                    <div className="price-body mt-3">
                      <ul className="plan-info-list">
                        <li>
                          <p>1 Listing Submission</p>
                        </li>
                        <li>
                          <p>90 Days Validity</p>
                        </li>
                        <li>
                          <p>Online Booking</p>
                        </li>
                        <li>
                          <p>Non Featured</p>
                        </li>
                        <li>
                          <p>Limited Support</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div className="price-bottom">
                    <a href="#" className="btn btn-anim btn-two mt-30">choose plan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        {/* price end */}
        {/* cta-one start*/}
        <section className="cta-one tri-bg-w text-lg-left text-center">
          <div className="container">
            <div className="row align-items-center">
              <div className="col-lg-6 my-lg-0 my-5 py-lg-0 py-5">
                <div className="cta-content">
                  <h3>Sign Up To Get Special Offers Every Day</h3>
                  <p>Get access to inspiring work cafes and coworking spaces. We are here to provide you with work optimised spaces, high-speed reliable internet, discounted F&amp;B - without any rent!</p>
                  <a href="login.php" className="btn btn-two btn-anim mt-2">
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
        {/* cta-one end */}
        </div>
        </>
      );
    }
}

export default Pricing;
