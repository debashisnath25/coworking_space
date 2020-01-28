import React, { Component } from 'react';
import './home.css';


export default class HowItWorks extends Component {
    render() {
        return (
            <section className="steps-section bg-dull tri-bg" style={{paddingTop : "50px", marginTop: "30px"}}>
                <div className="container">
                    <div className="row">
                        <div className="col-12">
                            <div className="all-title" style={{marginBottom: "25px"}}>
                                <h3 className="sec-title" style={{ color: 'white' }}>
                                    How It Works
                                </h3>
                                <svg className="title-sep">
                                    <path fillRule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div className="row steps-wrap justify-content-center">
                        <div className="col-lg-4 col-md-6 col-12 mb-30">
                            <div className="steps">
                                <div className="icon-box mb-3">
                                    <i className="flaticon-layers" />
                                </div>
                                <h5>
                                    <span className="c-theme">1. </span> Choose a Category</h5>
                                <p className="mb-0">Search the market, shortlist options and request viewing and confirm viewing</p>
                            </div>
                        </div>
                        <div className="col-lg-4 col-md-6 col-12 mb-30">
                            <div className="steps">
                                <div className="icon-box mb-3">
                                    <i className="flaticon-map" />
                                </div>
                                <h5>
                                    <span className="c-theme">2. </span> Find What You Want</h5>
                                <p className="mb-0">Choose your perfect and we'll help negotiate the best deal on anything from start to finish</p>
                            </div>
                        </div>
                        <div className="col-lg-4 col-md-6 col-12 mb-30">
                            <div className="steps">
                                <div className="icon-box mb-3">
                                    <i className="flaticon-shop" />
                                </div>
                                <h5>
                                    <span className="c-theme">3. </span> go Out &amp; Explore</h5>
                                <p className="mb-0">Flexible to change the workspace as your growth on demand.we're there to advise</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        );
    }
}