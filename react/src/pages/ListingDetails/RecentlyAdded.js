import React, { Component } from 'react';

export default class RecentlyAdded extends Component {
    render() {
        return (
            <div className="widget abt-listing">
                <h5 className="title-sep2">Recently Added</h5>
                <div className="sidebar-listing-slider owl-carousel owl-theme" style={{ backgroundColor: 'none' }}>
                    <div className="listing-item p-2">
                        <div className="img-holder">
                            <img src="img/l-3.png" alt="list" />
                        </div>
                        <div className="list-content p-2">
                            <h5 className="mt-3 mb-2">
                                <a href="#/">Co-working Space</a>
                            </h5>
                            <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                <li className="mt-1">
                                    <a href="#/">
                                        <i className="fa fa-map-marker-alt mr-2">
                                        </i>Delhi
                                    </a>
                                </li>
                                <li className="mt-1">
                                    <a href="#/">
                                        <i className="fa fa-phone mr-2">
                                        </i>0123-456-789
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div className="listing-item p-2">
                        <div className="img-holder">
                            <img src="img/l-2.png" alt="list" />
                        </div>
                        <div className="list-content p-2">
                            <h5 className="mt-3 mb-2">
                                <a href="#/">Co-working Space</a>
                            </h5>
                            <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                <li className="mt-1">
                                    <a href="#/">
                                        <i className="fa fa-map-marker-alt mr-2">
                                        </i>Mumbai
                                    </a>
                                </li>
                                <li className="mt-1">
                                    <a href="#/">
                                        <i className="fa fa-phone mr-2">
                                        </i>0123-456-789
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div className="listing-item p-2">
                        <div className="img-holder">
                            <img src="img/l-1.png" alt="list" />
                        </div>
                        <div className="list-content p-2">
                            <h5 className="mt-3 mb-2">
                                <a href="#/">Co-working Space</a>
                            </h5>
                            <ul className="ctg-info2 pt-2 mt-3 d-flex justify-content-between flex-wrap">
                                <li className="mt-1">
                                    <a href="#/">
                                        <i className="fa fa-map-marker-alt mr-2">
                                        </i>Kolkata
                                    </a>
                                </li>
                                <li className="mt-1">
                                    <a href="#/">
                                        <i className="fa fa-phone mr-2">
                                        </i>0123-456-789
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        );
    }
}