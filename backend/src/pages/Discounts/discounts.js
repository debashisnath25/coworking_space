import React, { Component } from 'react';
import './discounts.css'
import DatePicker from "react-datepicker";
import "react-datepicker/dist/react-datepicker.css";



export default class Discounts extends Component {

    state = {
        startDate: new Date(),
        endDate: new Date(),
      };
     
      handleChange = date => {
        this.setState({
          startDate: date
        });
      };
      handleendChange = date => {
        this.setState({
            endDate: date
          });
      }
    render() {
        return (
            <>
                <div className="page-heading" style={{paddingLeft: 17}}>
                    <div className="page-breadcrumb">
                    <h1 className="page-title"><a href="dashboard.php">Dashboard </a> &gt; Discounts
                    </h1>
                    </div>
                </div>
                <div>
                    <div className="col-lg-12">
                    <div className="card" style={{border: '1px solid #7c1ab5'}}>
                        <div className="card-header cardhdd">
                        <h5 className="box-title" style={{color: '#fff'}}>Add Discount Scheme for your Customers </h5>
                        
                        </div>
                        <div className="card-body">
                        <form className="needs-validation" noValidate>
                            <div className="row">
                            <div className="col-md-7">
                                <div className="form-group mb-4 row">
                                <dt className="col-sm-4" style={{paddingTop: 10,textAlign:'left'}}>Discount Scheme Name</dt>
                                <div className="col-sm-8">
                                    <input className="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter Discount Scheme Name" required />
                                </div>
                                </div>
                                <div className="form-group mb-4 row">
                                <dt className="col-sm-4" style={{paddingTop: 10,textAlign:'left'}}>Discount %</dt>
                                <div className="col-sm-8">
                                    <input className="form-control form-control-solid" id="validationCustom03" type="text" placeholder="Enter Discount Percentage" required />
                                </div>
                                </div>
                                <div className="form-group mb-4 row">
                                <dt className="col-sm-4" style={{paddingTop: 10,textAlign:'left'}}> Start Date &amp; Time </dt>
                                <div className="col-sm-8">
                                    <div className="input-group">
                                    <div className="input-group-prepend"><span className="input-group-text"><i className="ti-calendar" /></span></div><DatePicker
                                        className="form-control form-control-solid"
                                        selected={this.state.startDate}
                                        onChange={this.handleChange}
                                    />
                                    </div>
                                </div>
                                </div>
                                <div className="form-group mb-4 row">
                                <dt className="col-sm-4" style={{paddingTop: 10,textAlign:'left'}}><b> End Date &amp; Time</b> </dt>
                                <div className="col-sm-8">
                                    <div className="input-group">
                                    <div className="input-group-prepend"><span className="input-group-text"><i className="ti-calendar" /></span></div><DatePicker
                                        className="form-control form-control-solid"
                                        selected={this.state.endDate}
                                        onChange={this.handleendChange}
                                    />
                                    </div>
                                </div>
                                </div>
                                <div className="form-group mb-4 row">
                                <dt className="col-sm-4" style={{paddingTop: 10,textAlign:'left'}}>Category</dt>
                                <div className="col-sm-8">
                                    <select className="form-control mb-3 form-control-solid" data-style="btn-light btn-light-solid">
                                    <option selected disabled>Choose Property Type
                                    </option>
                                    <option>Meeting Room
                                    </option>
                                    <option>Coworking Space
                                    </option>
                                    <option>Private Office
                                    </option>
                                    <option>Training Room
                                    </option>
                                    <option>Business Centre
                                    </option>
                                    <option>Coworking Cafes
                                    </option>
                                    </select>
                                </div>
                                </div>
                            </div>
                            <div className="col-md-5 text-center">
                                <div className="card card-dark" style={{border: '1px solid #6C757D'}}>
                                <div className="card-header bg-secondary">
                                    <h5 className="box-title"><span>Note to Vendor</span></h5>
                                </div>
                                <div className="card-body">
                                    <p>You can add a discount in terms of % to  Co-working Spaces in a Particular Category Created by you. We will show your customers the price of the Co-working Space</p>
                                    <p>Before the discount and after the discount like below : </p>
                                </div>
                                </div>
                                <div className="card" style={{border: '1px solid #6C757D'}}>
                                <div className="card-body">
                                    <h5>2 Seater Private Office in KT Nagar, Nagpur</h5>
                                    <h4><i className="fas fa-rupee-sign" /> 2098</h4>
                                    <span style={{textDecoration: 'line-through', fontSize: 16}}><i className="fas fa-rupee-sign" /> 5116</span>
                                    <strong style={{color: 'green'}}>50% Off</strong>
                                </div>
                                </div>
                            </div>
                            </div>
                        </form></div>
                    </div>
                    </div>
                    <div className="col-lg-12">
                    <div className="row">
                        <div className="col-md-12">
                        <div className="card" style={{border: '1px solid #7c1ab5'}}>
                            <div className="card-header cardhdd">
                            <h5 className="box-title" style={{color: '#fff'}}>Currently Active Discount Schemes</h5>
                            
                            </div>
                            <div className="card-body">
                            <div className="table-responsive">
                                <table className="table table-bordered table-striped w-100" id="dt-buttons_1">
                                <thead className>
                                    <tr>
                                    <th>Scheme Name</th>
                                    <th>Category</th>
                                    <th>Discount</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Total Sales</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td><a href="discount_details.php" className="btn btn-ok btn-sm" type="button">Christmas Specials</a></td>
                                    <td>Private Office</td>
                                    <td><b>5%</b></td>
                                    <td>27/09/2019 : 4:15 PM</td>
                                    <td>01/02/2019 : 7:00 PM </td>
                                    <td><b><span style={{fontFamily: 'arial'}}>₹</span>&nbsp;15,00,000.00</b></td>
                                    <td>
                                        <label className="ui-switch switch-solid"><input type="checkbox" defaultChecked /><span /></label>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td><a href="discount_details.php" className="btn btn-ok btn-sm" type="button">Christmas Specials</a></td>
                                    <td>Private Office</td>
                                    <td><b>5%</b></td>
                                    <td>27/09/2019 : 4:15 PM</td>
                                    <td>01/02/2019 : 7:00 PM </td>
                                    <td><b><span style={{fontFamily: 'arial'}}>₹</span>&nbsp;15,00,000.00</b></td>
                                    <td>
                                        <label className="ui-switch switch-solid"><input type="checkbox" defaultChecked /><span /></label>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td><a href="discount_details.php" className="btn btn-ok btn-sm" type="button">Christmas Specials</a></td>
                                    <td>Private Office</td>
                                    <td><b>5%</b></td>
                                    <td>27/09/2019 : 4:15 PM</td>
                                    <td>01/02/2019 : 7:00 PM </td>
                                    <td><b><span style={{fontFamily: 'arial'}}>₹</span>&nbsp;15,00,000.00</b></td>
                                    <td>
                                        <label className="ui-switch switch-solid"><input type="checkbox" defaultChecked /><span /></label>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td><a href="discount_details.php" className="btn btn-ok btn-sm" type="button">Christmas Specials</a></td>
                                    <td>Private Office</td>
                                    <td><b>5%</b></td>
                                    <td>27/09/2019 : 4:15 PM</td>
                                    <td>01/02/2019 : 7:00 PM </td>
                                    <td><b><span style={{fontFamily: 'arial'}}>₹</span>&nbsp;15,00,000.00</b></td>
                                    <td>
                                        <label className="ui-switch switch-solid"><input type="checkbox" defaultChecked /><span /></label>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td><a href="discount_details.php" className="btn btn-ok btn-sm" type="button">Christmas Specials</a></td>
                                    <td>Private Office</td>
                                    <td><b>5%</b></td>
                                    <td>27/09/2019 : 4:15 PM</td>
                                    <td>01/02/2019 : 7:00 PM </td>
                                    <td><b><span style={{fontFamily: 'arial'}}>₹</span>&nbsp;15,00,000.00</b></td>
                                    <td>
                                        <label className="ui-switch switch-solid"><input type="checkbox" defaultChecked /><span /></label>
                                    </td>
                                    </tr>

                                </tbody>
                                </table>
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