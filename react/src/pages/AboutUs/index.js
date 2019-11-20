import React,{Component} from 'react';
import { HomeBanner,Location,SigninBanner,PopularList } from './../../components';


class AboutUs extends Component{
    render(){
      return(
        <>
         <div>
            <section className="bg-w" style={{paddingTop: '100px'}}>
            <div className="container">
                <div className="row">
                <div className=" col-12">
                    <ul className="banner-link ">
                    <li>
                        <a href="index.php">Home
                        </a>
                    </li>
                    <li>
                        <span className="active">About Us
                        </span>
                    </li>
                    </ul>
                </div>
                </div>
                <div className="row">
                <div className="col-lg-4">
                    <ul className="nav faq-tabs mb-lg-0 mb-5" role="tablist">
                    <li className="nav-item">
                        <a className="nav-link active" href="#faq1" role="tab" data-toggle="tab">FREE TRIAL
                        </a>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link" href="#faq2" role="tab" data-toggle="tab">REDEEMABLE CREDITS
                        </a>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link" href="#faq3" role="tab" data-toggle="tab">SUBSCRIPTION PLAN
                        </a>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link" href="#faq4" role="tab" data-toggle="tab">SERVICES/AMENITIES
                        </a>
                    </li>
                    </ul>
                </div>
                <div className="col-lg-8">
                    <h4 className="title-sep2 mb-30">How it works
                    </h4>
                    {/* Tab panes */}
                    <div className="tab-content mb-3">
                    <div role="tabpanel" className="tab-pane fade in active show" id="faq1">
                        <div id="faq-accordion1" className="theme-accordion">
                        <div className="acc-card">
                            <div className="panel-heading" id="headingOne">
                            <button className="acc-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How does the free trial work
                            </button>
                            </div>
                            <div id="collapseOne" className="collapse show" aria-labelledby="headingOne" data-parent="#faq-accordion1">
                            <div className="card-body">
                                <p>With a free trial, we give you an opportunity to experience working in a co-working space/cafe for an entire day across any of our 100+ locations.
                                </p>
                            </div>
                            </div>
                        </div>
                        <div className="acc-card">
                            <div className="panel-heading" id="headingTwo">
                            <button className="acc-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How do I register for a free trial?
                            </button>
                            </div>
                            <div id="collapseTwo" className="collapse" aria-labelledby="headingTwo" data-parent="#faq-accordion1">
                            <div className="card-body">
                                <p>Just click on the 'Free Trial Button' on the website or download the  App and register for a free trial.
                                </p>
                            </div>
                            </div>
                        </div>
                        <div className="acc-card">
                            <div className="panel-heading" id="headingThree">
                            <button className="acc-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Can I avail the 'Free Trial' more than once?
                            </button>
                            </div>
                            <div id="collapseThree" className="collapse" aria-labelledby="headingThree" data-parent="#faq-accordion1">
                            <div className="card-body">
                                <p>Sorry, you can avail a free trial only once. However, our subscription plans are super economical and flexible. So go ahead and pick your best fit without burning a hole in your pocket!
                                </p>
                            </div>
                            </div>
                        </div>
                        <div className="acc-card">
                            <div className="panel-heading" id="headingFour">
                            <button className="acc-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What do I get on my free day trial?
                            </button>
                            </div>
                            <div id="collapseFour" className="collapse" aria-labelledby="headingFour" data-parent="#faq-accordion1">
                            <div className="card-body">
                                <p>Your free trial includes access to free wifi, stationery and printing facilities. You also get exclusive  discounts, offers and cashbacks on your food bill at our work cafes (when you pay using  Credits).
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
                                What are redeemable credits?
                            </button>
                            </div>
                            <div id="collapse2One" className="collapse" aria-labelledby="heading2One" data-parent="#faq-accordion2">
                            <div className="card-body">
                                <p>Once you buy a subscription, we add the specified redeemable credits to your account. These can then be used to pay for your food and beverage expense at work cafes or for your visits to coworking spaces
                                </p>
                            </div>
                            </div>
                        </div>
                        <div className="acc-card">
                            <div className="panel-heading" id="heading2Two">
                            <button className="acc-link" data-toggle="collapse" data-target="#collapse2Two" aria-expanded="false" aria-controls="collapseTwo">
                                How do I use my redeemable credits?
                            </button>
                            </div>
                            <div id="collapse2Two" className="collapse show" aria-labelledby="heading2Two" data-parent="#faq-accordion2">
                            <div className="card-body">
                                <p>When you're working out of a  work cafe, your credits will be deducted in accordance to your food bill. Please share your registered mobile number with the cafe staff during billing. You'll get an OTP on your registered mobile number to confirm the transaction amount. In case you are working out of a  coworking space, it'll get auto deducted per visit basis.
                                </p>
                            </div>
                            </div>
                        </div>
                        <div className="acc-card">
                            <div className="panel-heading" id="heading2Three">
                            <button className="acc-link collapsed" data-toggle="collapse" data-target="#collapse2Three" aria-expanded="false" aria-controls="collapseThree">
                                How do I pay for my visits to  coworking spaces?
                            </button>
                            </div>
                            <div id="collapse2Three" className="collapse" aria-labelledby="heading2Three" data-parent="#faq-accordion2">
                            <div className="card-body">
                                <p>Everytime you visit a coworking spaces 200  Credits will get auto-deducted from your account on a per visit basis
                                </p>
                            </div>
                            </div>
                        </div>
                        <div className="acc-card">
                            <div className="panel-heading" id="heading2Four">
                            <button className="acc-link collapsed" data-toggle="collapse" data-target="#collapse2Four" aria-expanded="false" aria-controls="collapseFour">
                                What happens if I exhaust my redeemable credits?
                            </button>
                            </div>
                            <div id="collapse2Four" className="collapse" aria-labelledby="heading2Four" data-parent="#faq-accordion2">
                            <div className="card-body">
                                <p>If you exhaust all your credits, you can recharge your account on the app.
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
                                How long is a  subscription valid for?
                            </button>
                            </div>
                            <div id="collapse3One" className="collapse" aria-labelledby="heading3One" data-parent="#faq-accordion3">
                            <div className="card-body">
                                <p> Subscriptions plans have no expiry. They're valid till the time you don't exhaust all your visits and credits.
                                </p>
                            </div>
                            </div>
                        </div>
                        <div className="acc-card">
                            <div className="panel-heading" id="heading3Three">
                            <button className="acc-link collapsed" data-toggle="collapse" data-target="#collapse3Three" aria-expanded="false" aria-controls="collapseThree">
                                Can a subscription be used by multiple users?
                            </button>
                            </div>
                            <div id="collapse3Three" className="collapse" aria-labelledby="heading3Three" data-parent="#faq-accordion3">
                            <div className="card-body">
                                <p>Sorry, each  subscription can be used by a single user only. If you are looking for a team based plan, please reach out to us on +91-1234567890 or contact@.in
                                </p>
                            </div>
                            </div>
                        </div>
                        <div className="acc-card">
                            <div className="panel-heading" id="heading3Two">
                            <button className="acc-link" data-toggle="collapse" data-target="#collapse3Two" aria-expanded="false" aria-controls="collapseTwo">
                                Can I visit both coworking spaces and work cafes with my  subscription?
                            </button>
                            </div>
                            <div id="collapse3Two" className="collapse show" aria-labelledby="heading3Two" data-parent="#faq-accordion3">
                            <div className="card-body">
                                <p>Yes, you can visit both our work cafes and coworking spaces with a single subscription. You have the option of working from any  space with a subscription
                                </p>
                            </div>
                            </div>
                        </div>
                        <div className="acc-card">
                            <div className="panel-heading" id="heading3Four">
                            <button className="acc-link collapsed" data-toggle="collapse" data-target="#collapse3Four" aria-expanded="false" aria-controls="collapseFour">
                                Do you require any deposits?
                            </button>
                            </div>
                            <div id="collapse3Four" className="collapse" aria-labelledby="heading3Four" data-parent="#faq-accordion3">
                            <div className="card-body">
                                <p>No! There aren't any deposits. Our flexible plans provide you with the stability of a space along with the flexibility you need.
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
                                What facilities to I get at a  space?
                            </button>
                            </div>
                            <div id="collapse4Three" className="collapse" aria-labelledby="heading4Three" data-parent="#faq-accordion4">
                            <div className="card-body">
                                <p>Each  space is equipped with all work essentials to ensure a seamless work experience. Get high speed unlimited wifi, office stationery, comfortable seats, free printing etc.
                                </p>
                            </div>
                            </div>
                        </div>
                        <div className="acc-card">
                            <div className="panel-heading" id="heading4Two">
                            <button className="acc-link" data-toggle="collapse" data-target="#collapse4Two" aria-expanded="false" aria-controls="collapseTwo">
                                How fast is the wifi at  Spaces?
                            </button>
                            </div>
                            <div id="collapse4Two" className="collapse show" aria-labelledby="heading4Two" data-parent="#faq-accordion4">
                            <div className="card-body">
                                <p>Extremely fast. We understand how imprtant fast internet is for you to work seamless. We guarantee a 16mbps+ internet speed at all our locations.
                                </p>
                            </div>
                            </div>
                        </div>
                        <div className="acc-card">
                            <div className="panel-heading" id="heading4One">
                            <button className="acc-link collapsed" data-toggle="collapse" data-target="#collapse4One" aria-expanded="true" aria-controls="collapseOne">
                                What are the working hours? When are  spaces open?
                            </button>
                            </div>
                            <div id="collapse4One" className="collapse" aria-labelledby="heading4One" data-parent="#faq-accordion4">
                            <div className="card-body">
                                <p>Generally all our spaces are available from 9am - 8pm, Monday through Sunday. However, each  space has a different operating time which is mentioned on the detail page on the website and mobile app.
                                </p>
                            </div>
                            </div>
                        </div>
                        <div className="acc-card">
                            <div className="panel-heading" id="heading4Four">
                            <button className="acc-link collapsed" data-toggle="collapse" data-target="#collapse4Four" aria-expanded="false" aria-controls="collapseFour">
                                What discounts do I get as a  user at  work cafes?
                            </button>
                            </div>
                            <div id="collapse4Four" className="collapse" aria-labelledby="heading4Four" data-parent="#faq-accordion4">
                            <div className="card-body">
                                <p>At each  work cafe you get free beverages on every visit and atleast a 15% discount. At most of our spaces we work out a special coworking menu to make sure that it's light on your pockets. Every  Space has a different discount scheme which are mentioned on the details page on the website and mobile app.
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
            {/* faq end */}
            {/* cta-one start*/}
            <section className="cta-one tri-bg-w text-lg-left text-center">
            <div className="container">
                <div className="row align-items-center">
                <div className="col-lg-6 my-lg-0 my-5 py-lg-0 py-5">
                    <div className="cta-content">
                    <h3>Search, Explore, Book, Manage
                    </h3>
                    <p>Get access to inspiring work cafes and coworking spaces. We are here to provide you with work optimised spaces, high-speed reliable internet, discounted F&amp;B - without any rent!</p>
                    <a href="post_requirement.php" className="btn btn-two btn-anim mt-2">
                        Enquiry Now
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
            {/* features start*/}
            <section className="features sp-100 bg-w">
            <div className="container">
                <div className="row">
                <div className="col-12">
                    <div className="all-title" style={{marginBottom: '30px'}}>
                    <h3 className="sec-title">
                        Why We Are Best
                    </h3>
                    <svg className="title-sep">
                        <path fillRule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z" />
                    </svg>
                    </div>
                </div>
                </div>
                <div className="row">
                <div className="col-lg-4 col-md-6 col-12 mb-30">
                    <div className="feature-item">
                    <div className="icon-box">
                        <i className="flaticon-rising" />
                    </div>
                    <h5>Ready to move-in Office</h5>
                    <p>Move into your new office, we're there to advise on anything from start to finish
                    </p>
                    </div>
                </div>
                <div className="col-lg-4 col-md-6 col-12 mb-30">
                    <div className="feature-item">
                    <div className="icon-box">
                        <i className="flaticon-list" />
                    </div>
                    <h5>No Booking/Broker Fee</h5>
                    <p>Search the market, shortlist options and request viewing.
                    </p>
                    </div>
                </div>
                <div className="col-lg-4 col-md-6 col-12 mb-30">
                    <div className="feature-item">
                    <div className="icon-box">
                        <i className="flaticon-medal" />
                    </div>
                    <h5>Hassle Free Working</h5>
                    <p>Flexible to change the workspace as your growth on demand
                    </p>
                    </div>
                </div>
                <div className="col-lg-4 col-md-6 col-12 mb-30">
                    <div className="feature-item">
                    <div className="icon-box">
                        <i className="flaticon-appointment" />
                    </div>
                    <h5>Safe And Trusted</h5>
                    <p>Our local experts will arrange and confirm viewing
                    </p>
                    </div>
                </div>
                <div className="col-lg-4 col-md-6 col-12 mb-30">
                    <div className="feature-item">
                    <div className="icon-box">
                        <i className="flaticon-map" />
                    </div>
                    <h5>Verified Venues</h5>
                    <p>workspaces are branded coworking and serviced offices
                    </p>
                    </div>
                </div>
                <div className="col-lg-4 col-md-6 col-12 mb-30">
                    <div className="feature-item">
                    <div className="icon-box">
                        <i className="flaticon-support" />
                    </div>
                    <h5>24/7 support</h5>
                    <p>Move into your new office, we're there to advise on anything from start to finish
                    </p>
                    </div>
                </div>
                </div>
            </div>
            </section>
        </div>
        </>
      );
    }
}

export default AboutUs;
