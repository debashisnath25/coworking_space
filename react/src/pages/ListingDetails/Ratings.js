import React, { Component } from 'react';

export default class Ratings extends Component {
    render() {
        return (
            <div className=" abt-listing">
                <h5 className="title-sep3">
                    Ratings
                </h5>
                <div className="row mt-30">
                    <div className="col-lg-3 col-md-4">
                        <div className="rating-big-box mb-3">
                            <h2>4.5</h2>
                            <h6>superb</h6>
                        </div>
                        <div className="rating-btn-down">
                            <a href="#/" className="btn w-100 review-btn btn-anim">3 Reviews</a>
                        </div>
                    </div>
                    <div className="col-lg-9 col-md-8">
                        <div className="rating-bar-box">
                            <h6>
                                <span>rating</span>
                                <span>3.0</span>
                            </h6>
                            <div className="rating-bars">
                                <span className="bar-fill" style={{ width: '60%' }}>
                                </span>
                            </div>
                        </div>
                        <div className="rating-bar-box">
                            <h6>
                                <span>facilities</span>
                                <span>4</span>
                            </h6>
                            <div className="rating-bars">
                                <span className="bar-fill" style={{ width: '80%' }}>
                                </span>
                            </div>
                        </div>
                        <div className="rating-bar-box">
                            <h6>
                                <span>staff</span>
                                <span>4.5</span>
                            </h6>
                            <div className="rating-bars">
                                <span className="bar-fill" style={{ width: '90%' }}>
                                </span>
                            </div>
                        </div>
                        <div className="rating-bar-box">
                            <h6>
                                <span>price</span>
                                <span>3.5</span>
                            </h6>
                            <div className="rating-bars">
                                <span className="bar-fill" style={{ width: '70%' }}>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}