import React, { Component } from 'react';

export default class facility extends Component {
    render() {
        return (
            <div className=" abt-listing">
                <h5 className="title-sep3">
                    facilities
                </h5>
                <div className="row minus-pad">
                    <div className="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div className="w-100 mb-2">
                            <i className="fa fa-check" /> <label htmlFor="checkbox_id6">Card Payment</label>
                        </div>
                        <div className="w-100 mb-2">
                            <i className="fa fa-check" /> <label htmlFor="checkbox_id7">Free Parking</label>
                        </div>
                        <div className="w-100 mb-2">
                            <i className="fa fa-check" /> <label htmlFor="checkbox_id8">Free Wi-Fi</label>
                        </div>
                    </div>
                    <div className="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div className="w-100 mb-2">
                            <i className="fa fa-check" /> <label htmlFor="checkbox_id9">Family Friendly</label>
                        </div>
                        <div className="w-100 mb-2">
                            <i className="fa fa-check" /> <label htmlFor="checkbox_id10">Wheelchair</label>
                        </div>
                        <div className="w-100 mb-2">
                            <i className="fa fa-check" /> <label htmlFor="checkbox_id11">Air Conditioning</label>
                        </div>
                    </div>
                    <div className="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div className="w-100 mb-2">
                            <i className="fa fa-check" /> <label htmlFor="checkbox_id12">Fitness Center</label>
                        </div>
                        <div className="w-100 mb-2">
                            <i className="fa fa-check" /> <label htmlFor="checkbox_id13">Reservations</label>
                        </div>
                        <div className="w-100 mb-2">
                            <i className="fa fa-check" /> <label htmlFor="checkbox_id14">Smoking Allowed</label>
                        </div>
                    </div>
                    <div className="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div className="w-100 mb-2">
                            <i className="fa fa-check" /> <label htmlFor="checkbox_id15">Swimming Pool</label>
                        </div>
                        <div className="w-100 mb-2">
                            <i className="fa fa-check" /> <label htmlFor="checkbox_id16">Coupons</label>
                        </div>
                        <div className="w-100 mb-2">
                            <i className="fa fa-check" /> <label htmlFor="checkbox_id17">Pet Friendly</label>
                        </div>
                    </div>
                </div>
            </div>

        );
    }
}