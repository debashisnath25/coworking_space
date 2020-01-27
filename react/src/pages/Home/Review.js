import React, { Component } from 'react';
import './home.css';


export default class Review extends Component {
    render() {
        return (
            <section className="popular-list bg-w" style={{paddingTop: "25px"}}>
                <div className="container">
                    <div className="row">
                        <div className="col-12">
                            <div className="all-title" style={{marginBottom: "25px"}}>
                                <h3 className="sec-title">
                                    Our Reviews
                                </h3>
                                <svg className="title-sep">
                                    <path fillRule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div className="testi-slider1 owl-carousel owl-theme">
                        <div className="slide-item">
                            <div className="testi-item mb-30">
                                <div className="img-holder">
                                    <img src="img/testi2.png" alt="lister" />
                                </div>
                                <div className="testi-content">
                                    <h5 className="mb-1">Priyanka singh</h5>
                                    <span className="c-theme mb-3 d-block">ABC limited</span>
                                    <p className="mb-0">Lorem ipsum donec pede justo, fringilla vel, aliqu et nectei vulp utate eget fg arcu. In enim justo, rhcusut imp erdiet venenatis vitae.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        );
    }
}