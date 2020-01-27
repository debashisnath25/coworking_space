import React, { Component } from 'react';
import './home.css';


export default class WhyChooseUs extends Component {
    render() {
        return (
            <div className="about-1 o-hide bg-w" style={{paddingTop: "25px"}}>
                <div className="container">
                    <div className="row">
                        <div className="col-12">
                            <div className="all-title" style={{marginBottom: "25px"}}>
                                <h3 className="sec-title">
                                    Why Choose Us
                                </h3>
                                <svg className="title-sep">
                                    <path fillRule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div className="row">
                        <div className="col-lg-6 align-self-end">
                            <div className="abt-img">
                                <img src="img/abt-mockup.png" alt="mockup" />
                            </div>
                        </div>
                        <div className="col-lg-6 mt-lg-0 mt-5">
                            <h4>New Day, New Workspace</h4>
                            <p>Over 100+ locations and still counting; this is a quest to bring you a work space closer to wherever you are.</p>
                            <h4>Work more, Pay less</h4>
                            <p>With super-flexi Bundesk subscription, enjoy the freedom of no monthly rental, no deposit, no lock-in, no expiry.</p>
                            <h4>Meet People, Seize Opportunities</h4>
                            <p>Connect with over 10000+ like-minded individuals. Get professional help, find your next client or perhaps, a buddy for life!</p>
                        </div>
                    </div>
                </div>
            </div>

        );
    }
}