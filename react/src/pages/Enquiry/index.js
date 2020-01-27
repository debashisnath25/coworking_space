import React, { Component } from 'react';
import BasicPage from './Basic';
import LocationPage from './Location';
import RequirementPage from './Requirement';
import FacilityPage from './Facility';
import TimingPage from './Timing';

export default class Enquiry extends Component {
    render() {
        return (
            <>
                <section className="bg-w" style={{ paddingTop: '100px' }}>
                    <div className="container">
                        <h4 className="title-sep3 mb-20 mt-30">Home &gt; <span className="c-theme">Enquiry</span></h4>
                        <div className="row">
                            <div className="col-lg-4">
                                <ul className="nav faq-tabs mb-lg-0 mb-5" role="tablist">
                                    <li className="nav-item">
                                        <a className="nav-link active" style={{ padding: "12px" }} href="#faq1" role="tab" data-toggle="tab">Basic Information</a>
                                    </li>
                                    <li className="nav-item">
                                        <a className="nav-link" style={{ padding: "12px" }} href="#faq2" role="tab" data-toggle="tab">Location Details</a>
                                    </li>
                                    <li className="nav-item">
                                        <a className="nav-link" style={{ padding: "12px" }} href="#faq3" role="tab" data-toggle="tab">Requirement Type</a>
                                    </li>
                                    <li className="nav-item">
                                        <a className="nav-link" style={{ padding: "12px" }} href="#faq4" role="tab" data-toggle="tab">Preferred Facilities</a>
                                    </li>
                                    <li className="nav-item">
                                        <a className="nav-link" style={{ padding: "12px" }} href="#faq5" role="tab" data-toggle="tab">Contact Timing</a>
                                    </li>
                                </ul>
                            </div>
                            <div className="col-lg-8">
                                <div className="tab-content mb-3 abt-listing">
                                    <BasicPage />
                                    <LocationPage />
                                    <RequirementPage />
                                    <FacilityPage />
                                    <TimingPage />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </>
        );
    }
}

