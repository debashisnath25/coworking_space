import React, { Component } from 'react';

export default class Timing extends Component {
    render() {
        return (
            <div role="tabpanel" className="tab-pane fade" id="faq5">
                <div id="faq-accordion3" className="theme-accordion">
                    <div className="col-12">
                        <h4>Contact Timing</h4>
                        <hr />
                        <div className="row">
                            <div className="col-lg-4 col-md-4 col-12">
                                <label>Preferred Day to connect</label>
                            </div>
                            <div className="col-lg-8 col-md-8 col-12">
                                <select className="form-control custom-select" id="day">
                                    <option selected disabled>Please Select</option>
                                    <option>monday</option>
                                    <option>tuesday</option>
                                    <option>wednesday</option>
                                    <option>thrusday</option>
                                    <option>thrusday</option>
                                    <option>friday</option>
                                    <option>saturday</option>
                                </select>
                            </div>
                            <div className="col-lg-4 col-md-6 col-12">
                                <label>Preferred Time to connect</label>
                            </div>
                            <div className="col-lg-8 col-md-8 col-12">
                                <select className="form-control custom-select" id="opening-time">
                                    <option selected disabled>Please Select</option>
                                    <option>11am</option>
                                    <option>12am</option>
                                    <option>1pm</option>
                                    <option>2pm</option>
                                </select>
                            </div>
                            <div className="col-lg-4 col-md-6 col-12">
                                <label>Preferred Mode to connect</label>
                            </div>
                            <div className="col-lg-8 col-md-8 col-12">
                                <select className="form-control custom-select" id="closing-time">
                                    <option selected disabled>Please Select</option>
                                    <option>Whatsapp</option>
                                    <option>Email</option>
                                    <option>Phone</option>
                                </select>
                            </div>
                            <div className="col-12">
                                <button className="btn btn-one nextBtn btn-lg float-right" type="button">Submit Enquiry</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        );
    }
}