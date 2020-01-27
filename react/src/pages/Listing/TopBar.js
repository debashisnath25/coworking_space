import React, { Component } from 'react';

export default class Topbar extends Component {
    render() {
        return (
            <div className="row mb-30">
                <div className="col-md-2 col-sm-6 col-12">
                    <div className="list-items2 btn-anim">
                        <div className="icon-box">
                            <i className="flaticon-team" />
                        </div>
                        <h6 className="mb-0 mt-3 cl_white">
                            <a href="#/">Meeting Room</a>
                        </h6>
                    </div>
                </div>
                <div className="col-md-2 col-sm-6 col-12">
                    <div className="list-items2 btn-anim">
                        <div className="icon-box">
                            <i className="flaticon-appointment" />
                        </div>
                        <h6 className="mb-0 mt-3 cl_white">
                            <a href="#/">Coworking Space</a>
                        </h6>
                    </div>
                </div>
                <div className="col-md-2 col-sm-6 col-12">
                    <div className="list-items2 btn-anim">
                        <div className="icon-box">
                            <i className="flaticon-shop" />
                        </div>
                        <h6 className="mb-0 mt-3 cl_white">
                            <a href="#/">Private Office</a>
                        </h6>
                    </div>
                </div>
                <div className="col-md-2 col-sm-6 col-12">
                    <div className="list-items2 btn-anim">
                        <div className="icon-box">
                            <i className="flaticon-hotel" />
                        </div>
                        <h6 className="mb-0 mt-3 cl_white">
                            <a href="#/">Training Room</a>
                        </h6>
                    </div>
                </div>
                <div className="col-md-2 col-sm-6 col-12">
                    <div className="list-items2 btn-anim">
                        <div className="icon-box">
                            <i className="flaticon-team" />
                        </div>
                        <h6 className="mb-0 mt-3 cl_white">
                            <a href="#/">Business Center</a>
                        </h6>
                    </div>
                </div>
                <div className="col-md-2 col-sm-6 col-12">
                    <div className="list-items2 btn-anim">
                        <div className="icon-box">
                            <i className="flaticon-shop" />
                        </div>
                        <h6 className="mb-0 mt-3 cl_white">
                            <a href="#/">Coworking Cafes</a>
                        </h6>
                    </div>
                </div>
            </div>

        );
    }
}