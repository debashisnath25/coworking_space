import React, { Component } from 'react';
import './home.css';


export default class Company extends Component {
    render() {
        return (
            <div className="partner-one bg-red py-5" style={{ backgroundColor: '#009E9E' }}>
                <div className="container">
                    <div className="row">
                        <div className="col-md-12">
                            <div className="partner-slider owl-carousel owl-theme">
                                <div className="partner-slide">
                                    <img src="img/logo_1.png" alt="partner" />
                                </div>
                                <div className="partner-slide">
                                    <img src="img/logo_2.png" alt="partner" />
                                </div>
                                <div className="partner-slide">
                                    <img src="img/logo_3.png" alt="partner" />
                                </div>
                                <div className="partner-slide">
                                    <img src="img/logo_4.png" alt="partner" />
                                </div>
                                <div className="partner-slide">
                                    <img src="img/logo_5.png" alt="partner" />
                                </div>
                                <div className="partner-slide">
                                    <img src="img/logo_6.png" alt="partner" />
                                </div>
                                <div className="partner-slide">
                                    <img src="img/logo_7.png" alt="partner" />
                                </div>
                                <div className="partner-slide">
                                    <img src="img/logo_8.png" alt="partner" />
                                </div>
                                <div className="partner-slide">
                                    <img src="img/logo_1.png" alt="partner" />
                                </div>
                                <div className="partner-slide">
                                    <img src="img/logo_2.png" alt="partner" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        );
    }
}