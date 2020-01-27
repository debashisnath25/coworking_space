import React, { Component } from 'react';

export default class Facility extends Component {
    render() {
        return (
            <div role="tabpanel" className="tab-pane fade" id="faq4">
                <div id="faq-accordion5" className="theme-accordion">
                    <div className="col-md-12">
                        <h4>Preferred Facilities</h4>
                        <hr />
                        <div className="row">
                            <div className="col-md-4 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_faci_id1" defaultValue="value" />
                                <label htmlFor="checkbox_faci_id1">Card Payment</label>
                            </div>
                            <div className="col-md-4 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_faci_id2" defaultValue="value" />
                                <label htmlFor="checkbox_faci_id2">Family Friendly</label>
                            </div>
                            <div className="col-md-4 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_faci_id3" defaultValue="value" />
                                <label htmlFor="checkbox_faci_id3">Fitness Center</label>
                            </div>
                            <div className="col-md-4 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_faci_id4" defaultValue="value" />
                                <label htmlFor="checkbox_faci_id4">Swimming Pool</label>
                            </div>
                            <div className="col-md-4 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_faci_id5" defaultValue="value" />
                                <label htmlFor="checkbox_faci_id5">Free Wi-Fi</label>
                            </div>
                            <div className="col-md-4 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_faci_id6" defaultValue="value" />
                                <label htmlFor="checkbox_faci_id6">Free Parking</label>
                            </div>
                            <div className="col-md-4 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_faci_id7" defaultValue="value" />
                                <label htmlFor="checkbox_faci_id7">Air Conditioning</label>
                            </div>
                            <div className="col-md-4 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_faci_id8" defaultValue="value" />
                                <label htmlFor="checkbox_faci_id8">Wheelchair</label>
                            </div>
                            <div className="col-md-4 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_faci_id9" defaultValue="value" />
                                <label htmlFor="checkbox_faci_id9">Reservations</label>
                            </div>
                            <div className="col-md-4 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_faci_id10" defaultValue="value" />
                                <label htmlFor="checkbox_faci_id10">Coupons</label>
                            </div>
                            <div className="col-md-4 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_faci_id11" defaultValue="value" />
                                <label htmlFor="checkbox_faci_id11">Smoking Allowed</label>
                            </div>
                            <div className="col-md-4 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_faci_id12" defaultValue="value" />
                                <label htmlFor="checkbox_faci_id12">Pet Friendly</label>
                            </div>
                            <div className="col-12" style={{ marginTop: 20 }}>
                                <button className="btn btn-one nextBtn btn-lg float-right" type="button">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        );
    }
}