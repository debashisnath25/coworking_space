import React, { Component } from 'react';
import './profile.css'



export default class ProfilePaymentSetting extends Component {
    render() {
        return (
            <>    
                <div className="card " style={{border: '1px solid #7c1ab5'}}>
                    <div className="card-header cardhdd">
                        <h5 className="box-title" style={{color: '#fff'}}>Payment Method Settings</h5>
                    </div>
                    <div className="card-body">
                        <div className="form-group mb-4 row">
                        <dt className="col-sm-4" style={{paddingTop: 10,textAlign:'left'}}>Bank Name</dt>
                        <div className="col-sm-8">
                            <input className="form-control form-control-solid" type="text" placeholder="Bank Name" defaultValue="Axis Bank" />
                        </div>
                        </div>
                        <div className="form-group mb-4 row">
                        <dt className="col-sm-4" style={{paddingTop: 10,textAlign:'left'}}>Branch Name</dt>
                        <div className="col-sm-8">
                            <input className="form-control form-control-solid" type="text" placeholder="Phone Number" defaultValue="Park Street" />
                        </div>
                        </div>
                        <div className="form-group mb-4 row">
                        <dt className="col-sm-4" style={{paddingTop: 10,textAlign:'left'}}>Account Name</dt>
                        <div className="col-sm-8">
                            <input className="form-control form-control-solid" type="text" placeholder="Account Name" defaultValue="Coworking Space" />
                        </div>
                        </div>
                        <div className="form-group mb-4 row">
                        <dt className="col-sm-4" style={{paddingTop: 10,textAlign:'left'}}>Account Number</dt>
                        <div className="col-sm-8">
                            <input className="form-control form-control-solid" type="number" placeholder="Account Number" defaultValue={987654321012345} />
                        </div>
                        </div>
                        <div className="form-group mb-4 row">
                        <dt className="col-sm-4" style={{paddingTop: 10,textAlign:'left'}}>IFSC Code</dt>
                        <div className="col-sm-8">
                            <input className="form-control form-control-solid" type="text" placeholder="IFSC Code" defaultValue="AX1234" />
                        </div>
                        </div>
                        <div className="form-group mb-4 row">
                        <dt className="col-sm-4" style={{paddingTop: 10,textAlign:'left'}}>SWIFT Code</dt>
                        <div className="col-sm-8">
                            <input className="form-control form-control-solid" type="text" placeholder="IFSC Code" defaultValue="AX1234" />
                        </div>
                        </div>
                        <div className="form-group mb-4 row">
                        <dt className="col-sm-4" style={{paddingTop: 10,textAlign:'left'}}>Type of Account</dt>
                        <div className="col-sm-8">
                            <select className="form-control form-control-solid for mb-3" data-style="btn-light btn-light-solid" tabIndex={-98}>
                            <option selected disabled> Choose </option>
                            <option> Current </option>
                            <option> Savings </option>
                            <option> Salary </option>
                            </select>
                        </div>
                        </div>
                    </div>
                    <div className="card-footer">
                        <button className="btn btn-primary" style={{float: 'left', marginRight: 10}} type="submit">Update Account</button>
                        <button className="btn btn-default" style={{float: 'left'}} type="reset">Clear</button>
                    </div>
                </div>

            </>
        )
    }

}