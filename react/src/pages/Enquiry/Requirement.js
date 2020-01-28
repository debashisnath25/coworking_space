import React, { Component } from 'react';

export default class Requirement extends Component {
    render() {
        return (
            <div role="tabpanel" className="tab-pane fade" id="faq3">
                <div id="faq-accordion4" className="theme-accordion">
                    <div className="col-md-12">
                        <h4>Requirement Type</h4>
                        <hr />
                        <div className="row">
                            <div className="col-md-4 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id1" defaultValue="value" />
                                <label htmlFor="checkbox_id1">Meeting Room</label>
                            </div>
                            <div className="col-md-4 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id2" defaultValue="value" />
                                <label htmlFor="checkbox_id2">Coworking Space</label>
                            </div>
                            <div className="col-md-4 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id3" defaultValue="value" />
                                <label htmlFor="checkbox_id3">Private Office </label>
                            </div>
                            <div className="col-md-4 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id4" defaultValue="value" />
                                <label htmlFor="checkbox_id4">Training Room</label>
                            </div>
                            <div className="col-md-4 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id5" defaultValue="value" />
                                <label htmlFor="checkbox_id5">Business Center</label>
                            </div>
                            <div className="col-md-4 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id6" defaultValue="value" />
                                <label htmlFor="checkbox_id6">Coworking Cafes</label>
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