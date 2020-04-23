import React, { Component } from 'react';
import './bookings.css'
import DatePicker from "react-datepicker";
import "react-datepicker/dist/react-datepicker.css";



export default class Bookings extends Component {

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
                    <div className="page-heading">
                        <div className="page-breadcrumb">
                        <h1 className="page-title"><a href="dashboard.php">Dashboard </a>&gt; Bookings
                        </h1>
                        </div>
                    </div>
                    {/* BEGIN: Page content*/}
                    <div>
                        <div className="tab-content">
                        <div className="tab-pane fade active show" id="faq-group-1">
                            <div className="card" style={{border: '1px solid #7c1ab5'}}>
                            <div className="card-header cardhdd">
                                <h5 className="box-title" style={{color: '#fff'}}>Bookings RECEIVED
                                </h5>
                            </div>
                            <div className="card-body">
                                <div className="row" style={{borderBottom: '1px solid #cccccc'}}>
                                <div className="col-md-2 col-sm-12 col-xs-12 mb-3" style={{padding:"3px"}}>
                                    <label htmlFor="validationCustom04" style={{float:'left'}}>Booking Id
                                    </label>
                                    <input className="form-control form-control-solid" id="validationCustom04" type="text" placeholder="Enter Order Id" required />
                                </div>
                                <div className="col-md-2 col-sm-12 col-xs-12" style={{padding:"3px"}}>
                                    <label htmlFor="validationCustom04" style={{float:'left'}}>Plan Type
                                    </label>
                                    <select className="form-control form-control-solid">
                                    <optgroup label="Plan Type">
                                        <option>Monthly</option>
                                        <option>Quaterly</option>
                                        <option>Yearly</option>
                                    </optgroup>
                                    </select>
                                </div>
                                <div className="col-md-2 col-sm-12 col-xs-12" style={{padding:"3px"}}>
                                    <label style={{float:'left'}}>From
                                    </label>
                                    <DatePicker
                                        className="form-control form-control-solid"
                                        selected={this.state.startDate}
                                        onChange={this.handleChange}
                                    />
                                </div>
                                <div className="col-md-2 col-sm-12 col-xs-12" style={{padding:"3px"}}>
                                    <label htmlFor="validationCustom04" style={{float:'left'}}>To
                                    </label>
                                    <DatePicker
                                        className="form-control form-control-solid"
                                        selected={this.state.endDate}
                                        onChange={this.handleendChange}
                                    />
                                </div>
                                <div className="col-md-2 col-sm-12 col-xs-12" style={{padding:"3px"}}>
                                    <label htmlFor="validationCustom04" style={{float:'left'}}>Sort 
                                    </label>
                                    <select className="form-control form-control-solid">
                                    <option selected disabled>Filters
                                    </option>
                                    <option>Highest First
                                    </option>
                                    <option>Lowest First
                                    </option>
                                    <option>Latest First
                                    </option>
                                    <option>Earliest First
                                    </option>
                                    </select>
                                </div>
                                <div className="col-md-1 col-sm-12 col-xs-12" style={{padding:"3px"}}>
                                    <button className="btn btn-primary clr" style={{marginTop: 27}} type="submit">
                                    <span className="btn-icon">
                                        <i className="ft-search">
                                        </i>Search
                                    </span>
                                    </button>
                                </div>
                                </div>
                                <div className="table-responsive mt-3">
                                <table className="table table-bordered table-striped w-100" id="dt-buttons">
                                    <thead className>
                                    <tr>
                                        <th>Booking ID</th>
                                        <th>Office Space Image &amp; Details</th>
                                        {/* <th>Office Space Details</th> */}
                                        <th>Booking Amount</th>
                                        <th>Booked Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a className="btn btn-outline-primary" href="booking_details.php">Booking ID<br />108737NT</a></td>
                                        <td>
                                        <div className="media col-md-12 col-sm-12 col-xs-12" style={{padding: '0px !important', float: 'left'}}>
                                            <span className="position-relative d-inline-block mr-4">
                                            <img className="rounded-lg" src="images/vendor-images/944390254ed4fd2b9fb33ad76b37d9a1.png" alt="round" width={100} />
                                            </span>
                                            <div className="media-body mt-2">
                                            <div className="h4 font-14">Work with us
                                            </div>
                                            <div className="text-muted mb-1 font-12" style={{color: '#878787'}}>
                                                <span>Category : Co-working Space
                                                </span>
                                                <br />
                                                <span>No. of people: <b>30</b>
                                                </span>
                                                <br />
                                            </div>
                                            </div>
                                        </div>
                                        </td>
                                        <td><div className="media-body mt-2">
                                            <div className="h4 font-14">
                                            <i className="fas fa-rupee-sign" />&nbsp;5000.00/Month
                                            </div>
                                        </div>
                                        </td>
                                        <td style={{width: 150}}><div className="text-muted text-center">
                                            <span>&nbsp;15-11-2019</span>
                                            <br />
                                            <span>&nbsp;to</span>
                                            <br />
                                            <span>&nbsp;14-12-2019</span>
                                        </div>
                                        </td>
                                        <td> <span className="badge badge-success badge-pill">Confirmed</span> </td>
                                        <td style={{minWidth: 80}}>
                                        <button className="btn btn-ok btn-sm" style={{marginRight:5}} type="button"><i className="fa fa-pen" style={{fontSize: 11}} /></button>
                                        <button className="btn btn-ok btn-sm" type="button"><i className="fa fa-trash" style={{fontSize: 11}} /></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a className="btn btn-outline-primary" href="booking_details.php" data-toggle="modal" data-target="#product_preview_modal">Booking ID<br />108737NT</a></td>
                                        <td>
                                        <div className="media col-md-12 col-sm-12 col-xs-12" style={{padding: '0px !important', float: 'left'}}>
                                            <span className="position-relative d-inline-block mr-4">
                                            <img className="rounded-lg" src="images/vendor-images/944390254ed4fd2b9fb33ad76b37d9a1.png" alt="round" width={100} />
                                            </span>
                                            <div className="media-body mt-2">
                                            <div className="h4 font-14">Work with us
                                            </div>
                                            <div className="text-muted mb-1 font-12" style={{color: '#878787'}}>
                                                <span>Category : Co-working Space
                                                </span>
                                                <br />
                                                <span>No. of people: <b>30</b>
                                                </span>
                                                <br />
                                            </div>
                                            </div>
                                        </div>
                                        </td>
                                        <td><div className="media-body mt-2">
                                            <div className="h4 font-14">
                                            <i className="fas fa-rupee-sign" />&nbsp;15000.00/Quaterly
                                            </div>
                                        </div>
                                        </td>
                                        <td style={{width: 150}}><div className="text-muted text-center">
                                            <span>&nbsp;15-11-2019</span>
                                            <br />
                                            <span>&nbsp;to</span>
                                            <br />
                                            <span>&nbsp;14-02-2020</span>
                                        </div>
                                        </td>
                                        <td> <span className="badge badge-success badge-pill">Confirmed</span> </td>
                                        <td style={{minWidth: 80}}>
                                        <button className="btn btn-ok btn-sm" style={{marginRight:5}} type="button"><i className="fa fa-pen" style={{fontSize: 11}} /></button>
                                        <button className="btn btn-ok btn-sm" type="button"><i className="fa fa-trash" style={{fontSize: 11}} /></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a className="btn btn-outline-primary" href="booking_details.php" data-toggle="modal" data-target="#product_preview_modal">Booking ID<br />108737NT</a></td>
                                        <td>
                                        <div className="media col-md-12 col-sm-12 col-xs-12" style={{padding: '0px !important', float: 'left'}}>
                                            <span className="position-relative d-inline-block mr-4">
                                            <img className="rounded-lg" src="images/vendor-images/944390254ed4fd2b9fb33ad76b37d9a1.png" alt="round" width={100} />
                                            </span>
                                            <div className="media-body mt-2">
                                            <div className="h4 font-14">Work with us
                                            </div>
                                            <div className="text-muted mb-1 font-12" style={{color: '#878787'}}>
                                                <span>Category : Co-working Space
                                                </span>
                                                <br />
                                                <span>No. of people: <b>30</b>
                                                </span>
                                                <br />
                                            </div>
                                            </div>
                                        </div>
                                        </td>
                                        <td><div className="media-body mt-2">
                                            <div className="h4 font-14">
                                            <i className="fas fa-rupee-sign" />&nbsp;60000.00/Yearly
                                            </div>
                                        </div>
                                        </td>
                                        <td style={{width: 150}}><div className="text-muted text-center">
                                            <span>&nbsp;15-11-2019</span>
                                            <br />
                                            <span>&nbsp;to</span>
                                            <br />
                                            <span>&nbsp;15-12-2020</span>
                                        </div>
                                        </td>
                                        <td> <span className="badge badge-success badge-pill">Confirmed</span> </td>
                                        <td style={{minWidth: 80}}>
                                        <button className="btn btn-ok btn-sm" style={{marginRight:5}} type="button"><i className="fa fa-pen" style={{fontSize: 11}} /></button>
                                        <button className="btn btn-ok btn-sm" type="button"><i className="fa fa-trash" style={{fontSize: 11}} /></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a className="btn btn-outline-primary" href="booking_details.php" data-toggle="modal" data-target="#product_preview_modal">Booking ID<br />108737NT</a></td>
                                        <td>
                                        <div className="media col-md-12 col-sm-12 col-xs-12" style={{padding: '0px !important', float: 'left'}}>
                                            <span className="position-relative d-inline-block mr-4">
                                            <img className="rounded-lg" src="images/vendor-images/944390254ed4fd2b9fb33ad76b37d9a1.png" alt="round" width={100} />
                                            </span>
                                            <div className="media-body mt-2">
                                            <div className="h4 font-14">Work with us
                                            </div>
                                            <div className="text-muted mb-1 font-12" style={{color: '#878787'}}>
                                                <span>Category : Co-working Space
                                                </span>
                                                <br />
                                                <span>No. of people: <b>30</b>
                                                </span>
                                                <br />
                                            </div>
                                            </div>
                                        </div>
                                        </td>
                                        <td><div className="media-body mt-2">
                                            <div className="h4 font-14">
                                            <i className="fas fa-rupee-sign" />&nbsp;60000.00/Yearly
                                            </div>
                                        </div>
                                        </td>
                                        <td style={{width: 150}}><div className="text-muted text-center">
                                            <span>&nbsp;15-11-2019</span>
                                            <br />
                                            <span>&nbsp;to</span>
                                            <br />
                                            <span>&nbsp;15-12-2020</span>
                                        </div>
                                        </td>
                                        <td> <span className="badge badge-success badge-pill">Confirmed</span> </td>
                                        <td style={{minWidth: 80}}>
                                        <button className="btn btn-ok btn-sm" style={{marginRight:5}} type="button"><i className="fa fa-pen" style={{fontSize: 11}} /></button>
                                        <button className="btn btn-ok btn-sm" type="button"><i className="fa fa-trash" style={{fontSize: 11}} /></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a className="btn btn-outline-primary" href="booking_details.php" data-toggle="modal" data-target="#product_preview_modal">Booking ID<br />108737NT</a></td>
                                        <td>
                                        <div className="media col-md-12 col-sm-12 col-xs-12" style={{padding: '0px !important', float: 'left'}}>
                                            <span className="position-relative d-inline-block mr-4">
                                            <img className="rounded-lg" src="images/vendor-images/944390254ed4fd2b9fb33ad76b37d9a1.png" alt="round" width={100} />
                                            </span>
                                            <div className="media-body mt-2">
                                            <div className="h4 font-14">Work with us
                                            </div>
                                            <div className="text-muted mb-1 font-12" style={{color: '#878787'}}>
                                                <span>Category : Co-working Space
                                                </span>
                                                <br />
                                                <span>No. of people: <b>30</b>
                                                </span>
                                                <br />
                                            </div>
                                            </div>
                                        </div>
                                        </td>
                                        <td><div className="media-body mt-2">
                                            <div className="h4 font-14">
                                            <i className="fas fa-rupee-sign" />&nbsp;60000.00/Yearly
                                            </div>
                                        </div>
                                        </td>
                                        <td style={{width: 150}}><div className="text-muted text-center">
                                            <span>&nbsp;15-11-2019</span>
                                            <br />
                                            <span>&nbsp;to</span>
                                            <br />
                                            <span>&nbsp;15-12-2020</span>
                                        </div>
                                        </td>
                                        <td> <span className="badge badge-success badge-pill">Confirmed</span> </td>
                                        <td style={{minWidth: 80}}>
                                        <button className="btn btn-ok btn-sm" style={{marginRight:5}} type="button"><i className="fa fa-pen" style={{fontSize: 11}} /></button>
                                        <button className="btn btn-ok btn-sm" type="button"><i className="fa fa-trash" style={{fontSize: 11}} /></button>
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

            </>
        )
    }

}