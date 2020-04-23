import React, { Component } from 'react';
import './settings.css'



export default class Settings extends Component {
    render() {
        return (
            <>
                 <div>
                    <div className="page-heading" style={{paddingLeft: 17}}>
                        <div className="page-breadcrumb">
                        <h1 className="page-title"><a href="dashboard.php">Dashboard</a> &gt; Settings
                        </h1>
                        </div>
                    </div>
                    <div>
                        <div className="col-lg-12">
                        <div className="card card-fullheight" style={{border: '1px solid #7c1ab5'}}>
                            <div className="card-header cardhdd">
                            <h5 className="box-title" style={{color: '#fff'}}>General Information</h5>
                            </div>
                            <form>
                            <div className="card-body">
                                <div className="row">
                                <div className="col-md-8">
                                    <div className="form-group mb-4 row">
                                    <dt className="col-sm-4" style={{paddingTop: 10,textAlign:'left'}}>Full Name</dt>
                                    <div className="col-sm-2">
                                        <select className="form-control form-control-solid mb-3" data-style="btn-light btn-light-solid">
                                        <option>Mr.</option>
                                        <option>Miss</option>
                                        <option>Mrs.</option>
                                        </select>
                                    </div>
                                    <div className="col-sm-6">
                                        <input className="form-control form-control-solid" type="text" placeholder="Full Name" defaultValue="Aman Khanna" />
                                    </div>
                                    </div>
                                    <div className="form-group mb-4 row" style={{marginTop: '-15px',textAlign:'left'}}>
                                    <dt className="col-sm-4">Email Address</dt>
                                    <div className="col-sm-8">
                                        <input className="form-control form-control-solid" type="text" placeholder="Email Address" defaultValue="abc@gmail.com" />
                                    </div>
                                    </div>
                                    <div className="form-group mb-4 row">
                                    <dt className="col-sm-4" style={{textAlign:'left'}}>Phone Number</dt>
                                    <div className="col-sm-8">
                                        <input className="form-control form-control-solid" type="number" placeholder="Phone Number" defaultValue={9876543210} />
                                        <input className="btn btn-default" type="button" defaultValue="SEND OTP" style={{position: 'absolute', right: 16, marginTop: '-37px', height: 36, borderLeft: '1px solid #7c1ab5'}} />
                                    </div>
                                    </div>
                                    <div className="form-group mb-4 row">
                                    <dt className="col-sm-4" style={{paddingTop: 7,textAlign:'left'}}>Your Old Password</dt>
                                    <div className="col-sm-8">
                                        <input className="form-control form-control-solid" type="password" placeholder="Your Old Password" defaultValue="Coworking" />
                                    </div>
                                    </div>
                                    <div className="form-group mb-4 row">
                                    <dt className="col-sm-4" style={{paddingTop: 7,textAlign:'left'}}>Your New Password</dt>
                                    <div className="col-sm-8">
                                        <input className="form-control form-control-solid" type="password" placeholder="Your New Password" />
                                    </div>
                                    </div>
                                    <div className="form-group mb-4 row">
                                    <dt className="col-sm-4" style={{paddingTop: 7,textAlign:'left'}}>Confirm New Password</dt>
                                    <div className="col-sm-8">
                                        <input className="form-control form-control-solid" type="password" placeholder="Confirm New Password" />
                                    </div>
                                    </div>
                                </div>
                                <div className="col-md-4">
                                    &nbsp;
                                </div>
                                </div>
                            </div>
                            <div className="card-footer mb-4">
                                <div className="form-group">
                                <button className="btn btn-primary clr" style={{float: 'left', marginRight: 10}} type="button"> Update </button>
                                <button className="btn btn-default" style={{float: 'left'}} type="reset"> Clear </button>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div className="card card-fullheight" style={{border: '1px solid #7c1ab5'}}>
                            <div className="card-header cardhdd">
                            <h5 className="box-title" style={{color: '#fff'}}>Close Your Account</h5>
                            </div>
                            <div className="card-body">
                            <div className="mb-4 font-15"><h5>Your account will be closed permanently. Your Coworking Space will be shut down.</h5>
                            </div>
                            <button className="btn btn-primary clr" style={{display: 'inline-block', width: 'auto', minWidth: 260, marginRight: 8, marginBottom: 0}}>Close Your Account</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </>
        )
    }

}