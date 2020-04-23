import React, { Component } from 'react';
import './ratings.css'



export default class Ratings extends Component {
    render() {
        return (
            <>
                <div>
                    <div className="page-heading" style={{paddingLeft: 17}}>
                        <div className="page-breadcrumb">
                        <h1 className="page-title"><a href="dashboard.php">Dashboard </a>&gt; Review
                        </h1>
                        </div>
                    </div>
                    <div>
                        <div className="col-lg-12 col-md-12 col-xs-12">
                        <div className="row">
                            <div className="col-lg-6">
                            <div className="card" style={{border: '1px solid #7c1ab5'}}>
                                <div className="card-body">
                                <div className="row">
                                    <div className="col-md-6" style={{height: 85,textAlign:'left'}}>
                                    <h5 className="font-20" style={{fontWeight: 'bold'}}>4.5</h5>
                                    <div className="h3" style={{border: '1px rounded #fadf53'}}>
                                        <i className="fa fa-star" style={{color: '#fadf53', fontSize: 20}} />
                                        <i className="fa fa-star" style={{color: '#fadf53', fontSize: 20,marginLeft:6}} />
                                        <i className="fa fa-star" style={{color: '#fadf53', fontSize: 20,marginLeft:6}} />
                                        <i className="fa fa-star" style={{color: '#fadf53', fontSize: 20,marginLeft:6}} />
                                        <i className="fa fa-star-half" style={{color: '#fadf53', fontSize: 20,marginLeft:6}} />
                                    </div>
                                    <p>
                                        20,504 Ratings
                                    </p>
                                    </div>
                                    <div className="col-md-6" style={{textAlign: 'right'}}>
                                    <h5 className="font-20" style={{fontWeight: 'bold'}}>Total User</h5>
                                    <p className="font-18">
                                        15,000
                                    </p>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div className="col-lg-6">
                            <div className="card" style={{border: '1px solid #7c1ab5'}}>
                                <div className="card-body">
                                <div className="row">
                                    <div className="col-md-6" style={{height: 85,textAlign:'left'}}>
                                    <h5 className="font-20" style={{fontWeight: 'bold'}}>Total Reviews</h5>
                                    <div className="h3">
                                        20,000
                                    </div>
                                    <p>
                                        15,540 Office Spaces
                                    </p>
                                    </div>
                                    <div className="col-md-6" style={{textAlign: 'right'}}>
                                    <h5 className="font-20" style={{fontWeight: 'bold'}}>Total User</h5>
                                    <p className="font-18">
                                        15,000
                                    </p>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div className="col-md-12">
                            <div className="card" style={{border: '1px solid #7c1ab5'}}>
                                <div className="card-header cardhdd">
                                <h5 className="box-title" style={{color: '#fff'}}>Advanced Filter
                                </h5>
                                <div className="row pull-right">
                                    <div className="col-md-12">
                                    <button className="btn btn-default" style={{}} type="reset">Reset</button>
                                    </div>
                                </div>
                                </div>
                                <div className="card-body">
                                <div className="col-md-4 " style={{padding: '3px', float: 'left', marginTop: '-20px'}}>
                                    <label htmlFor="validationCustom04">&nbsp;</label>
                                    <select className="form-control mb-3 " data-style="btn-light btn-light-solid">
                                    <option selected disabled>Co-working Spaces Category</option>
                                    <option>Meeting Room</option>
                                    <option>Coworking Space</option>
                                    <option>Private Office</option>
                                    <option>Training Room</option>
                                    <option>Business Centre</option>
                                    <option>Coworking Cafes</option>
                                    </select>
                                </div>
                                <div className="col-md-4 " style={{padding: '3px', float: 'left', marginTop: '-20px'}}>
                                    <label htmlFor="validationCustom04">&nbsp;</label>
                                    <select className="form-control mb-3 " data-style="btn-light btn-light-solid">
                                    <option selected disabled>Choose Stars</option>
                                    <option>1 Star and Above </option>
                                    <option>2 Star and Above</option>
                                    <option>3 Star and Above</option>
                                    <option>4 Star and Above </option>
                                    <option>5 Star Only </option>
                                    </select>
                                </div>
                                <div className="col-md-4 " style={{padding: '3px', float: 'left', marginTop: '-20px'}}>
                                    <label htmlFor="validationCustom04">&nbsp;</label>
                                    <select className="form-control mb-3 " data-style="btn-light btn-light-solid">
                                    <option selected disabled>Sort</option>
                                    <optgroup label="By Time">
                                        <option>Earliest First</option>
                                        <option>Latest First</option>
                                    </optgroup>
                                    <optgroup label="By Ratings/Reviews">
                                        <option>Highest First</option>
                                        <option>Lowest First</option>
                                    </optgroup>
                                    </select>
                                </div>
                                <div className="col-md-3" style={{padding: '3px', float: 'left', marginTop: '-7px'}}>
                                    <div className=" check-list mt-2"><label className="checkbox checkbox-grey checkbox-primary"><input type="checkbox" /><span style={{float:'left'}}>Show Ratings Only</span></label></div>
                                </div>
                                <div className="col-md-3 oke_dekhao" style={{padding: '3px', float: 'left', marginTop: '-7px'}}>
                                    <div className=" check-list mt-2"><label className="checkbox checkbox-grey checkbox-primary"><input type="checkbox" defaultChecked id="review_check" /><span style={{float:'left'}}>Show Reviews Only</span></label></div>
                                </div>
                                <div className="col-md-3 amay_dekho" style={{padding: '3px', float: 'left', marginTop: '-10px'}}>
                                    <select className="form-control" data-style="btn-light btn-light-solid">
                                    <option selected disabled>Reviews Filter</option>
                                    <option>Reviews Replied by vendor</option>
                                    <option>Reviews Not replied by vendor</option>
                                    </select>
                                </div>
                                <div className="col-md-3 " style={{padding: '3px', float: 'left', marginTop: '-7px'}}>
                                    <div className=" check-list mt-2"><label className="checkbox checkbox-grey checkbox-primary"><input type="checkbox" /><span style={{float:'left'}}>Show Both Ratings &amp; Reviews</span></label></div>
                                </div>
                                </div>
                            </div>
                            </div>

                            <div className="col-lg-4">
                            <div className="card card-fullheight">
                                <div className="card-header cardhdd">
                                <h5 className="box-title" style={{color: '#fff'}}>Aman Khanna
                                </h5>
                                </div>
                                <div className="card-body">
                                <div className="row">
                                    <div className="media " style={{padding: '0px !important', float: 'left'}}>
                                    <span className="position-relative d-inline-block mr-4">
                                        <img className="rounded-lg" src="images/vendor-images/l-1.png" alt="round" width={100} />
                                    </span>
                                    <div className="media-body mt-2">
                                        <div className="h4 font-14">Mumbai Navi Sector 32
                                        </div>
                                        <div className="text-muted mb-1" style={{color: '#878787', fontSize: 12}}>
                                        <span>Booking ID: 108737NT
                                        </span>
                                        </div>
                                        <div className="text-muted mb-1" style={{color: '#878787', fontSize: 12}}>
                                        <span>abcxxx@xxxx.com
                                        </span>
                                        </div>
                                        <div className="flexbox">
                                        <div className="text-success pull-left">
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                        </div>
                                        <div>
                                            <span className="text-muted mb-2" style={{color: '#878787', fontSize: 12}}>
                                            4 days ago
                                            </span>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <p className="mt-3" style={{textAlign: 'center', fontSize: 13}}>
                                    <q><i>Very comfortable workspace, really love to work in here. You guys are always rocks to fulfill my dreams.</i></q>
                                    </p>
                                </div>
                                </div>
                                <div className="card-footer">
                                <div className="row">
                                    <div className="col-md-9" style={{padding: '3px'}}>
                                    <input type="text" className="form-control" name="feedback" />
                                    </div>
                                    <div className="col-md-3" style={{padding: '3px'}}>
                                    <button className="btn btn-primary clr" type="submit"><span className="btn-icon">Reply</span></button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div className="col-lg-4">
                            <div className="card card-fullheight">
                                <div className="card-header cardhdd">
                                <h5 className="box-title" style={{color: '#fff'}}>Aman Khanna
                                </h5>
                                </div>
                                <div className="card-body">
                                <div className="row">
                                    <div className="media " style={{padding: '0px !important', float: 'left'}}>
                                    <span className="position-relative d-inline-block mr-4">
                                        <img className="rounded-lg" src="images/vendor-images/l-1.png" alt="round" width={100} />
                                    </span>
                                    <div className="media-body mt-2">
                                        <div className="h4 font-14">Serviced workstations in Sector 32
                                        </div>
                                        <div className="text-muted mb-1" style={{color: '#878787', fontSize: 12}}>
                                        <span>Booking ID: 108737NT
                                        </span>
                                        </div>
                                        <div className="text-muted mb-1" style={{color: '#878787', fontSize: 12}}>
                                        <span>abcxxx@xxxx.com
                                        </span>
                                        </div>
                                        <div className="flexbox">
                                        <div className="text-success pull-left">
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                        </div>
                                        <div>
                                            <span className="text-muted mb-2" style={{color: '#878787', fontSize: 12}}>
                                            4 days ago
                                            </span>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <p className="mt-3" style={{textAlign: 'center', fontSize: 13}}>
                                    <q><i>Very comfortable workspace, really love to work in here. You guys are always rocks to fulfill my dreams.</i></q>
                                    </p>
                                </div>
                                </div>
                                <div className="card-footer">
                                <div className="row">
                                    <div className="col-md-9" style={{padding: '3px'}}>
                                    <input type="text" className="form-control" name="feedback" />
                                    </div>
                                    <div className="col-md-3" style={{padding: '3px'}}>
                                    <button className="btn btn-primary clr" type="submit"><span className="btn-icon">Reply</span></button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div className="col-lg-4">
                            <div className="card card-fullheight">
                                <div className="card-header cardhdd">
                                <h5 className="box-title" style={{color: '#fff'}}>Aman Khanna
                                </h5>
                                </div>
                                <div className="card-body">
                                <div className="row">
                                    <div className="media " style={{padding: '0px !important', float: 'left'}}>
                                    <span className="position-relative d-inline-block mr-4">
                                        <img className="rounded-lg" src="images/vendor-images/l-1.png" alt="round" width={100} />
                                    </span>
                                    <div className="media-body mt-2">
                                        <div className="h4 font-14">Serviced workstations in Sector 32
                                        </div>
                                        <div className="text-muted mb-1" style={{color: '#878787', fontSize: 12}}>
                                        <span>Booking ID: 108737NT
                                        </span>
                                        </div>
                                        <div className="text-muted mb-1" style={{color: '#878787', fontSize: 12}}>
                                        <span>abcxxx@xxxx.com
                                        </span>
                                        </div>
                                        <div className="flexbox">
                                        <div className="text-success pull-left">
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                        </div>
                                        <div>
                                            <span className="text-muted mb-2" style={{color: '#878787', fontSize: 12}}>
                                            4 days ago
                                            </span>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <p className="mt-3" style={{textAlign: 'center', fontSize: 13}}>
                                    <q><i>Very comfortable workspace, really love to work in here. You guys are always rocks to fulfill my dreams.</i></q>
                                    </p>
                                </div>
                                </div>
                                <div className="card-footer">
                                <div className="row">
                                    <div className="col-md-9" style={{padding: '3px'}}>
                                    <input type="text" className="form-control" name="feedback" />
                                    </div>
                                    <div className="col-md-3" style={{padding: '3px'}}>
                                    <button className="btn btn-primary clr" type="submit"><span className="btn-icon">Reply</span></button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div className="col-lg-4">
                            <div className="card card-fullheight">
                                <div className="card-header cardhdd">
                                <h5 className="box-title" style={{color: '#fff'}}>Aman Khanna
                                </h5>
                                </div>
                                <div className="card-body">
                                <div className="row">
                                    <div className="media " style={{padding: '0px !important', float: 'left'}}>
                                    <span className="position-relative d-inline-block mr-4">
                                        <img className="rounded-lg" src="images/vendor-images/l-1.png" alt="round" width={100} />
                                    </span>
                                    <div className="media-body mt-2">
                                        <div className="h4 font-14">Serviced workstations in Sector 32
                                        </div>
                                        <div className="text-muted mb-1" style={{color: '#878787', fontSize: 12}}>
                                        <span>Booking ID: 108737NT
                                        </span>
                                        </div>
                                        <div className="text-muted mb-1" style={{color: '#878787', fontSize: 12}}>
                                        <span>abcxxx@xxxx.com
                                        </span>
                                        </div>
                                        <div className="flexbox">
                                        <div className="text-success pull-left">
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                        </div>
                                        <div>
                                            <span className="text-muted mb-2" style={{color: '#878787', fontSize: 12}}>
                                            4 days ago
                                            </span>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <p className="mt-3" style={{textAlign: 'center', fontSize: 13}}>
                                    <q><i>Very comfortable workspace, really love to work in here. You guys are always rocks to fulfill my dreams.</i></q>
                                    </p>
                                </div>
                                </div>
                                <div className="card-footer">
                                <div className="row">
                                    <div className="col-md-9" style={{padding: '3px'}}>
                                    <input type="text" className="form-control" name="feedback" />
                                    </div>
                                    <div className="col-md-3" style={{padding: '3px'}}>
                                    <button className="btn btn-primary clr" type="submit"><span className="btn-icon">Reply</span></button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div className="col-lg-4">
                            <div className="card card-fullheight">
                                <div className="card-header cardhdd">
                                <h5 className="box-title" style={{color: '#fff'}}>Aman Khanna
                                </h5>
                                </div>
                                <div className="card-body">
                                <div className="row">
                                    <div className="media " style={{padding: '0px !important', float: 'left'}}>
                                    <span className="position-relative d-inline-block mr-4">
                                        <img className="rounded-lg" src="images/vendor-images/l-1.png" alt="round" width={100} />
                                    </span>
                                    <div className="media-body mt-2">
                                        <div className="h4 font-14">Serviced workstations in Sector 32
                                        </div>
                                        <div className="text-muted mb-1" style={{color: '#878787', fontSize: 12}}>
                                        <span>Booking ID: 108737NT
                                        </span>
                                        </div>
                                        <div className="text-muted mb-1" style={{color: '#878787', fontSize: 12}}>
                                        <span>abcxxx@xxxx.com
                                        </span>
                                        </div>
                                        <div className="flexbox">
                                        <div className="text-success pull-left">
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                        </div>
                                        <div>
                                            <span className="text-muted mb-2" style={{color: '#878787', fontSize: 12}}>
                                            4 days ago
                                            </span>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <p className="mt-3" style={{textAlign: 'center', fontSize: 13}}>
                                    <q><i>Very comfortable workspace, really love to work in here. You guys are always rocks to fulfill my dreams.</i></q>
                                    </p>
                                </div>
                                </div>
                                <div className="card-footer">
                                <div className="row">
                                    <div className="col-md-9" style={{padding: '3px'}}>
                                    <input type="text" className="form-control" name="feedback" />
                                    </div>
                                    <div className="col-md-3" style={{padding: '3px'}}>
                                    <button className="btn btn-primary clr" type="submit"><span className="btn-icon">Reply</span></button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div className="col-lg-4">
                            <div className="card card-fullheight">
                                <div className="card-header cardhdd">
                                <h5 className="box-title" style={{color: '#fff'}}>Aman Khanna
                                </h5>
                                </div>
                                <div className="card-body">
                                <div className="row">
                                    <div className="media " style={{padding: '0px !important', float: 'left'}}>
                                    <span className="position-relative d-inline-block mr-4">
                                        <img className="rounded-lg" src="images/vendor-images/l-1.png" alt="round" width={100} />
                                    </span>
                                    <div className="media-body mt-2">
                                        <div className="h4 font-14">Serviced workstations in Sector 32
                                        </div>
                                        <div className="text-muted mb-1" style={{color: '#878787', fontSize: 12}}>
                                        <span>Booking ID: 108737NT
                                        </span>
                                        </div>
                                        <div className="text-muted mb-1" style={{color: '#878787', fontSize: 12}}>
                                        <span>abcxxx@xxxx.com
                                        </span>
                                        </div>
                                        <div className="flexbox">
                                        <div className="text-success pull-left">
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                        </div>
                                        <div>
                                            <span className="text-muted mb-2" style={{color: '#878787', fontSize: 12}}>
                                            4 days ago
                                            </span>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <p className="mt-3" style={{textAlign: 'center', fontSize: 13}}>
                                    <q><i>Very comfortable workspace, really love to work in here. You guys are always rocks to fulfill my dreams.</i></q>
                                    </p>
                                </div>
                                </div>
                                <div className="card-footer">
                                <div className="row">
                                    <div className="col-md-9" style={{padding: '3px'}}>
                                    <input type="text" className="form-control" name="feedback" />
                                    </div>
                                    <div className="col-md-3" style={{padding: '3px'}}>
                                    <button className="btn btn-primary clr" type="submit"><span className="btn-icon">Reply</span></button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div className="col-lg-4">
                            <div className="card card-fullheight">
                                <div className="card-header cardhdd">
                                <h5 className="box-title" style={{color: '#fff'}}>Aman Khanna
                                </h5>
                                </div>
                                <div className="card-body">
                                <div className="row">
                                    <div className="media " style={{padding: '0px !important', float: 'left'}}>
                                    <span className="position-relative d-inline-block mr-4">
                                        <img className="rounded-lg" src="images/vendor-images/l-1.png" alt="round" width={100} />
                                    </span>
                                    <div className="media-body mt-2">
                                        <div className="h4 font-14">Serviced workstations in Sector 32
                                        </div>
                                        <div className="text-muted mb-1" style={{color: '#878787', fontSize: 12}}>
                                        <span>Booking ID: 108737NT
                                        </span>
                                        </div>
                                        <div className="text-muted mb-1" style={{color: '#878787', fontSize: 12}}>
                                        <span>abcxxx@xxxx.com
                                        </span>
                                        </div>
                                        <div className="flexbox">
                                        <div className="text-success pull-left">
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                        </div>
                                        <div>
                                            <span className="text-muted mb-2" style={{color: '#878787', fontSize: 12}}>
                                            4 days ago
                                            </span>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <p className="mt-3" style={{textAlign: 'center', fontSize: 13}}>
                                    <q><i>Very comfortable workspace, really love to work in here. You guys are always rocks to fulfill my dreams.</i></q>
                                    </p>
                                </div>
                                </div>
                                <div className="card-footer">
                                <div className="row">
                                    <div className="col-md-9" style={{padding: '3px'}}>
                                    <input type="text" className="form-control" name="feedback" />
                                    </div>
                                    <div className="col-md-3" style={{padding: '3px'}}>
                                    <button className="btn btn-primary clr" type="submit"><span className="btn-icon">Reply</span></button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div className="col-lg-4">
                            <div className="card card-fullheight">
                                <div className="card-header cardhdd">
                                <h5 className="box-title" style={{color: '#fff'}}>Aman Khanna
                                </h5>
                                </div>
                                <div className="card-body">
                                <div className="row">
                                    <div className="media " style={{padding: '0px !important', float: 'left'}}>
                                    <span className="position-relative d-inline-block mr-4">
                                        <img className="rounded-lg" src="images/vendor-images/l-1.png" alt="round" width={100} />
                                    </span>
                                    <div className="media-body mt-2">
                                        <div className="h4 font-14">Serviced workstations in Sector 32
                                        </div>
                                        <div className="text-muted mb-1" style={{color: '#878787', fontSize: 12}}>
                                        <span>Booking ID: 108737NT
                                        </span>
                                        </div>
                                        <div className="text-muted mb-1" style={{color: '#878787', fontSize: 12}}>
                                        <span>abcxxx@xxxx.com
                                        </span>
                                        </div>
                                        <div className="flexbox">
                                        <div className="text-success pull-left">
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                        </div>
                                        <div>
                                            <span className="text-muted mb-2" style={{color: '#878787', fontSize: 12}}>
                                            4 days ago
                                            </span>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <p className="mt-3" style={{textAlign: 'center', fontSize: 13}}>
                                    <q><i>Very comfortable workspace, really love to work in here. You guys are always rocks to fulfill my dreams.</i></q>
                                    </p>
                                </div>
                                </div>
                                <div className="card-footer">
                                <div className="row">
                                    <div className="col-md-9" style={{padding: '3px'}}>
                                    <input type="text" className="form-control" name="feedback" />
                                    </div>
                                    <div className="col-md-3" style={{padding: '3px'}}>
                                    <button className="btn btn-primary clr" type="submit"><span className="btn-icon">Reply</span></button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div className="col-lg-4">
                            <div className="card card-fullheight">
                                <div className="card-header cardhdd">
                                <h5 className="box-title" style={{color: '#fff'}}>Aman Khanna
                                </h5>
                                </div>
                                <div className="card-body">
                                <div className="row">
                                    <div className="media " style={{padding: '0px !important', float: 'left'}}>
                                    <span className="position-relative d-inline-block mr-4">
                                        <img className="rounded-lg" src="images/vendor-images/l-1.png" alt="round" width={100} />
                                    </span>
                                    <div className="media-body mt-2">
                                        <div className="h4 font-14">Serviced workstations in Sector 32
                                        </div>
                                        <div className="text-muted mb-1" style={{color: '#878787', fontSize: 12}}>
                                        <span>Booking ID: 108737NT
                                        </span>
                                        </div>
                                        <div className="text-muted mb-1" style={{color: '#878787', fontSize: 12}}>
                                        <span>abcxxx@xxxx.com
                                        </span>
                                        </div>
                                        <div className="flexbox">
                                        <div className="text-success pull-left">
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                            <i className="fa fa-star" style={{color: '#fadf53', fontSize: 15}}>
                                            </i>
                                        </div>
                                        <div>
                                            <span className="text-muted mb-2" style={{color: '#878787', fontSize: 12}}>
                                            4 days ago
                                            </span>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <p className="mt-3" style={{textAlign: 'center', fontSize: 13}}>
                                    <q><i>Very comfortable workspace, really love to work in here. You guys are always rocks to fulfill my dreams.</i></q>
                                    </p>
                                </div>
                                </div>
                                <div className="card-footer">
                                <div className="row">
                                    <div className="col-md-9" style={{padding: '3px'}}>
                                    <input type="text" className="form-control" name="feedback" />
                                    </div>
                                    <div className="col-md-3" style={{padding: '3px'}}>
                                    <button className="btn btn-primary clr" type="submit"><span className="btn-icon">Reply</span></button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div className="mt-5 row">
                            <div className="col-md-6 col-sm-12">
                            <button className="btn btn-primary btn-fix clr" type="button">Download As Csv Data File</button>&nbsp;<button className="btn btn-primary active btn-fix" type="button">Download As Pdf File</button>
                            </div>
                            <div className="col-md-6 col-sm-12">
                            <nav aria-label="..." className="col-sm-12">
                                <ul className="pagination justify-content-end">
                                <li className="page-item disabled"><a className="page-link" href="/#|">Previous</a></li>
                                <li className="page-item active"><a className="page-link" href="/#|">1</a></li>
                                <li className="page-item "><a className="page-link" href="/#|">2</a></li>
                                <li className="page-item"><a className="page-link" href="/#|">3</a></li>
                                <li className="page-item"><a className="page-link" href="/#|">Next</a></li>
                                </ul>
                            </nav>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

            </>
        )
    }

}