import React, { Component } from 'react';
import './home.css';


export default class Location extends Component {
    render() {
        return (
            <section className="bg-white" style={{paddingTop: "25px"}}>
                <div className="container">
                    <div className="row">
                        <div className="col-12">
                            <div className="all-title" style={{marginBottom: "25px"}}>
                                <h3 className="sec-title">Popular Locations</h3>
                                <svg className="title-sep">
                                    <path fillRule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div className="row">
                        <div className="col-xl-4 col-lg-6 col-md-6 col-12">
                            <a href="listing.php">
                                <div className="blog-item blog-1" style={{ backgroundImage: 'url("img/ko.png")', border: '1px solid #3e55ff', height: 200 }}>
                                    <div className="blog-content">
                                        <h5>&nbsp;</h5>
                                        <ul className="blog-meta d-flex justify-content-between align-items-center">
                                            <li>&nbsp;</li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div className="col-xl-4 col-lg-6 col-md-6 col-12">
                            <a href="listing.php">
                                <div className="blog-item blog-1" style={{ backgroundImage: 'url("img/de.png")', border: '1px solid #3e55ff', height: 200 }}>
                                    <div className="blog-content">
                                        <h5> &nbsp;</h5>
                                        <ul className="blog-meta d-flex justify-content-between align-items-center">
                                            <li> &nbsp;</li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div className="col-xl-4 col-lg-6 col-md-6 col-12">
                            <a href="listing.php">
                                <div className="blog-item blog-1" style={{ backgroundImage: 'url("img/hy.png")', border: '1px solid #3e55ff', height: 200 }}>
                                    <div className="blog-content">
                                        <h5>&nbsp;</h5>
                                        <ul className="blog-meta d-flex justify-content-between align-items-center">
                                            <li>&nbsp;</li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div className="col-xl-3 col-lg-6 col-md-6 col-12">
                            <a href="listing.php">
                                <div className="blog-item blog-1" style={{ backgroundImage: 'url("img/mu.png")', border: '1px solid #3e55ff', height: 200 }}>
                                    <div className="blog-content">
                                        <h5>&nbsp;</h5>
                                        <ul className="blog-meta d-flex justify-content-between align-items-center">
                                            <li>&nbsp;x</li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div className="col-xl-6 col-lg-6 col-md-6 col-12">
                            <a href="listing.php">
                                <div className="blog-item blog-1" style={{ backgroundImage: 'url("img/ba.png")', border: '1px solid #3e55ff', height: 200 }}>
                                    <div className="blog-content">
                                        <h5>&nbsp;</h5>
                                        <ul className="blog-meta d-flex justify-content-between align-items-center">
                                            <li>&nbsp;</li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div className="col-xl-3 col-lg-6 col-md-6 col-12">
                            <a href="listing.php">
                                <div className="blog-item blog-1" style={{ backgroundImage: 'url("img/ch.png")', border: '1px solid #3e55ff', height: 200 }}>
                                    <div className="blog-content">
                                        <h5>&nbsp;</h5>
                                        <ul className="blog-meta d-flex justify-content-between align-items-center">
                                            <li>&nbsp;</li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div className="col-12 text-center mt-30">
                            <a href="#/" className="btn btn-one btn-anim">view all</a>
                        </div>
                    </div>
                </div>
            </section>

        );
    }
}