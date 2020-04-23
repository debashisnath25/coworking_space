import React, { Component } from 'react';
import './plans.css'



export default class Plans extends Component {
    render() {
        return (
            <>
                 <div>
                    <div className="page-heading">
                        <div className="page-breadcrumb">
                        <h1 className="page-title"><a href="dashboard.php">Dashboard</a> &gt; Plans &amp; Subscriptions
                        </h1>
                        </div>
                    </div>
                    {/* BEGIN: Page content*/}
                    <div>
                        <div className="row">
                        <div className="col-lg-12">
                            <div className="ex-box">
                            <p>Pick a plan to use when your free trial ends</p>
                            </div>
                        </div>
                        </div>
                        <div className="row">
                        <div className="col-lg-12">
                            <div className="row">
                            <div className="col-lg-4">
                                <div className="card card-fullheight" style={{borderRadius:'none'}}>
                                <div className="card-title bg-purple-300">
                                    <h5><span className="semi-bold">Basic</span> Plan
                                    </h5>
                                    <h1><i className="fas fa-rupee-sign" /> 500</h1>
                                    <h6>PER MONTH</h6>
                                </div>
                                <div className="card-body">
                                    <p><strong>1,000</strong> Leads</p>
                                    <p>Free Setup</p>
                                    <p><strong>Email/SMS</strong> Notifications</p>
                                    <p><strong>Payment Gateway</strong> Integration</p>
                                    <p>Integrated Logistics-Single Provider</p>
                                    <p>Reports &amp; Analytics</p>
                                    <p>Blog</p>
                                </div>
                                <div className="card-footer">
                                    <button className="btn btn-default btn-block btn-cons"> Selected </button>
                                </div>
                                </div>
                            </div>
                            <div className="col-lg-4">
                                <div className="card card-fullheight">
                                <div className="card-title bg-purple-300">
                                    <h5><span className="semi-bold">Advance
                                    </span> Plan
                                    </h5>
                                    <h1><i className="fas fa-rupee-sign" /> 2,000</h1>
                                    <h6>PER MONTH</h6>
                                </div>
                                <div className="card-body">
                                    <p><strong>2,000</strong> Leads</p>
                                    <p>Free Setup</p>
                                    <p><strong>Email/SMS</strong> Notifications</p>
                                    <p><strong>Payment Gateway</strong> Integration</p>
                                    <p>Integrated Logistics-Single Provider</p>
                                    <p>Reports &amp; Analytics</p>
                                    <p>Blog</p>
                                </div>
                                <div className="card-footer">
                                    <button className="btn btn-primary btn-block btn-cons">Upgrade</button>
                                </div>
                                </div>
                            </div>
                            <div className="col-lg-4">
                                <div className="card card-fullheight">
                                <div className="card-title bg-purple-300">
                                    <h5><span className="semi-bold">Professional</span> Plan
                                    </h5>
                                    <h1><i className="fas fa-rupee-sign" /> 5,000</h1>
                                    <h6>PER MONTH</h6>
                                </div>
                                <div className="card-body">
                                    <p><strong>5,000</strong> Leads</p>
                                    <p>Free Setup</p>
                                    <p><strong>Email/SMS</strong> Notifications</p>
                                    <p><strong>Payment Gateway</strong> Integration</p>
                                    <p>Integrated Logistics-Single Provider</p>
                                    <p>Reports &amp; Analytics</p>
                                    <p>Blog</p>
                                </div>
                                <div className="card-footer">
                                    <button className="btn btn-primary btn-block btn-cons">Upgrade</button>
                                </div>
                                </div>
                            </div>
                            </div> 
                        </div>
                        </div>
                    </div>
                    </div>

            </>
        )
    }

}