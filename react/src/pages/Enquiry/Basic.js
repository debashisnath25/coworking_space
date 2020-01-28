import React, { Component } from 'react';

export default class Basic extends Component {
    render() {
        return (
            <div role="tabpanel" className="tab-pane fade in active show" id="faq1">
                <div id="faq-accordion1" className="theme-accordion">
                    <div className="col-md-12">
                        <h4>Basic Information</h4>
                        <hr />
                        <div className="row">
                            <div className="col-md-4">
                                <label>Name</label>
                            </div>
                            <div className="col-md-8">
                                <input type="text" id="name" className="form-control" placeholder="Enter Name Here" />
                            </div>
                            <div className="col-md-4">
                                <label>Email</label>
                            </div>
                            <div className="col-md-8">
                                <input type="text" id="name" className="form-control" placeholder="Enter Email Here" />
                            </div>
                            <div className="col-md-4">
                                <label>Phone Number </label>
                            </div>
                            <div className="col-md-8">
                                <input type="text" id="name" className="form-control" placeholder="Enter No. Here" />
                            </div>
                            <div className="col-md-4">
                                <label>Company Name</label>
                            </div>
                            <div className="col-md-8">
                                <input type="text" id="name" className="form-control" placeholder="Enter Company Name Here" />
                            </div>
                            <div className="col-4">
                                <label>Number of Persons</label>
                            </div>
                            <div className="col-8">
                                <div className="add-person form-control px-1">
                                    <div className="inc-dec-contain centering">
                                        <div className="inc-dec-control">
                                            <button className="cart-qty-plus" type="button" value="+">
                                                <i className="fa fa-plus" />
                                            </button>
                                        </div>
                                        <input type="text" name="qty" maxLength={12} defaultValue={0} className="input-text qty" style={{ backgroundColor: '#f8f8f8' }} />
                                        <div className="inc-dec-control">
                                            <button className="cart-qty-minus" type="button" value="-">
                                                <i className="fa fa-minus" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="col-12">
                                <button className="btn btn-one nextBtn btn-lg float-right" type="button">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        );
    }
}