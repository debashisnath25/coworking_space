import React, { Component } from 'react';

export default class Reviews extends Component {
    render() {
        return (
            <div className=" abt-listing">
                <h5 className="title-sep3">
                    2 Reviews
                </h5>
                <div className="row">
                    <div className="col-12">
                        <div className="review-box">
                            <div className="image-holder">
                                <img src="img/com-3.png" alt="author" />
                            </div>
                            <div className="review-content">
                                <div className="centering justify-content-between mb-1">
                                    <div>
                                        <h6 className="mb-0">Rohan Singh</h6>
                                        <p className="c-theme mb-0">26 april 2019</p>
                                    </div>
                                    <div className="d-flex flex-wrap">
                                        <div className="rating">
                                            <i className="fa fa-star">
                                            </i>
                                            <i className="fa fa-star">
                                            </i>
                                            <i className="fa fa-star">
                                            </i>
                                            <i className="fa fa-star">
                                            </i>
                                            <i className="fa fa-star-half-alt">
                                            </i>
                                        </div>
                                        <div className="rate-bg ml-4">
                                            4.5
                                        </div>
                                    </div>
                                </div>
                                <p className="mb-0">Really great place for offices. Highly focused and motivating environment.Supporting Management..</p>
                            </div>
                        </div>
                    </div>
                    <div className="col-12 mt-3">
                        <div className="review-box">
                            <div className="image-holder">
                                <img src="img/com-2.png" alt="author" />
                            </div>
                            <div className="review-content">
                                <div className="centering justify-content-between mb-1">
                                    <div>
                                        <h6 className="mb-0">Prity Singh</h6>
                                        <p className="c-theme mb-0">30 april 2019</p>
                                    </div>
                                    <div className="d-flex flex-wrap">
                                        <div className="rating">
                                            <i className="fa fa-star">
                                            </i>
                                            <i className="fa fa-star">
                                            </i>
                                            <i className="fa fa-star">
                                            </i>
                                            <i className="fa fa-star-half-alt">
                                            </i>
                                            <i className="far fa-star">
                                            </i>
                                        </div>
                                        <div className="rate-bg ml-4">
                                            3.5
                                        </div>
                                    </div>
                                </div>
                                <p className="mb-0">Really great place for offices. Highly focused and motivating environment. Supporting Management..</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        );
    }
}