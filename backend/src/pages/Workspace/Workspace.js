import React, { Component } from 'react';
import './workspace.css';
import DatePicker from "react-datepicker";
import "react-datepicker/dist/react-datepicker.css";



export default class Workspace extends Component {

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
                <div className=" fade-in-up">
                    {/* BEGIN: Page heading*/}
                    <div className="page-heading" style={{paddingLeft: 17}}>
                        <div className="page-breadcrumb">
                        <h1 className="page-title"><a href="dashboard.php">Dashboard </a>&gt; Office Space
                        </h1>
                        </div>
                    </div>
                    {/* BEGIN: Page content*/}
                    <div>
                        <div className="col-lg-12">
                        {/* top section */}
                        <div className="row">
                            <div className="col-9">
                            </div>
                            <div className="col-3 mb-3">
                            <a href="step1.php" className="btn btn-primary btn-block"><span className="btn-icon"><i className="ft-plus" />Add Office Space</span></a>
                            </div>
                        </div>
                        {/* top section ends */}
                        <div className="row">
                            <div className="col-lg-12">
                            <div className="card" style={{border: '1px solid #7c1ab5'}}>
                                <div className="card-header cardhdd">
                                <h5 className="box-title" style={{color: '#fff'}}>Office Spaces</h5>
                                
                                </div>
                                <div className="card-body">
                                <div className="col-md-12">
                                    <div className="row" style={{borderBottom: '1px solid #CCC', marginBottom: 30, paddingBottom: 15}}>
                                    <div className="col-md-4" style={{padding:"3px"}}>
                                        <label htmlFor="validationCustom04" className="active" style={{float:'left'}}>Office Space Name</label>
                                        <input className="form-control form-control-solid" id="validationCustom04" type="text" placeholder="Enter Office Space Name" required />
                                    </div>
                                    <div className="col-md-2" style={{padding:"3px"}}>
                                        <label htmlFor="validationCustom04" style={{float:'left'}}>Status</label>
                                        <select className="form-control mb-3 form-control-solid">
                                            <option selected disabled>Active</option>
                                            <option>Inactive</option>
                                        </select>
                                    </div>
                                    <div className="col-md-2" style={{padding:"3px"}}>
                                        <label className="active" style={{float:'left'}}>From</label>
                                        <DatePicker
                                            className="form-control form-control-solid"
                                            selected={this.state.startDate}
                                            onChange={this.handleChange}
                                        />
                                    </div>
                                    <div className="col-md-2" style={{padding:"3px"}}>
                                        <label htmlFor="validationCustom04" className="active" style={{float:'left'}}>To</label>
                                        <DatePicker
                                            className="form-control form-control-solid"
                                            selected={this.state.endDate}
                                            onChange={this.handleendChange}
                                        />
                                    </div>
                                    <div className="col-md-2" style={{padding:"3px"}}>
                                        <button className="btn btn-primary btn-block clr" style={{marginTop: 27}} type="submit"><span className="btn-icon"><i className="ft-search" />Search</span></button>
                                    </div>
                                    </div> {/* row ends*/}
                                </div>{/* col-md-12 ends */}
                                <div className="table-responsive">
                                    <table className="table table-bordered table-striped w-100" id="dt-buttons">
                                    <thead className>
                                        <tr>
                                        <th>ID</th>
                                        <th>Office Space Details</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>108737NT</td>
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
                                                </div>
                                            </div>
                                            </div>
                                        </td>
                                        <td><div className="media-body mt-2">
                                            <div className="h4 font-14">
                                                <span style={{fontFamily: 'arial'}}>₹</span>&nbsp;599.00
                                            </div>
                                            </div>
                                        </td>
                                        <td> <span className="badge badge-success badge-pill">Confirmed</span> </td>
                                        <td style={{minWidth: 80}}>
                                            <a href="step1.php" className="btn btn-ok btn-sm" type="button"><i className="fa fa-pen" style={{fontSize: 11}} /></a>
                                            <button className="btn btn-ok btn-sm" style={{marginLeft:5}} type="button"><i className="fa fa-trash" style={{fontSize: 11}} /></button>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>108737NT</td>
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
                                                </div>
                                            </div>
                                            </div>
                                        </td>
                                        <td><div className="media-body mt-2">
                                            <div className="h4 font-14">
                                                <span style={{fontFamily: 'arial'}}>₹</span>&nbsp;599.00
                                            </div>
                                            </div>
                                        </td>
                                        <td> <span className="badge badge-success badge-pill">Confirmed</span> </td>
                                        <td style={{minWidth: 80}}>
                                            <a href="step1.php" className="btn btn-ok btn-sm" type="button"><i className="fa fa-pen" style={{fontSize: 11}} /></a>
                                            <button className="btn btn-ok btn-sm" style={{marginLeft:5}} type="button"><i className="fa fa-trash" style={{fontSize: 11}} /></button>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>108737NT</td>
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
                                                </div>
                                            </div>
                                            </div>
                                        </td>
                                        <td><div className="media-body mt-2">
                                            <div className="h4 font-14">
                                                <span style={{fontFamily: 'arial'}}>₹</span>&nbsp;599.00
                                            </div>
                                            </div>
                                        </td>
                                        <td> <span className="badge badge-success badge-pill">Confirmed</span> </td>
                                        <td style={{minWidth: 80}}>
                                            <a href="step1.php" className="btn btn-ok btn-sm" type="button"><i className="fa fa-pen" style={{fontSize: 11}} /></a>
                                            <button className="btn btn-ok btn-sm" style={{marginLeft:5}} type="button"><i className="fa fa-trash" style={{fontSize: 11}} /></button>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>108737NT</td>
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
                                                </div>
                                            </div>
                                            </div>
                                        </td>
                                        <td><div className="media-body mt-2">
                                            <div className="h4 font-14">
                                                <span style={{fontFamily: 'arial'}}>₹</span>&nbsp;599.00
                                            </div>
                                            </div>
                                        </td>
                                        <td> <span className="badge badge-success badge-pill">Confirmed</span> </td>
                                        <td style={{minWidth: 80}}>
                                            <a href="step1.php" className="btn btn-ok btn-sm" type="button"><i className="fa fa-pen" style={{fontSize: 11}} /></a>
                                            <button className="btn btn-ok btn-sm" style={{marginLeft:5}} type="button"><i className="fa fa-trash" style={{fontSize: 11}} /></button>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>108737NT</td>
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
                                                </div>
                                            </div>
                                            </div>
                                        </td>
                                        <td><div className="media-body mt-2">
                                            <div className="h4 font-14">
                                                <span style={{fontFamily: 'arial'}}>₹</span>&nbsp;599.00
                                            </div>
                                            </div>
                                        </td>
                                        <td> <span className="badge badge-success badge-pill">Confirmed</span> </td>
                                        <td style={{minWidth: 80}}>
                                            <a href="step1.php" className="btn btn-ok btn-sm" type="button"><i className="fa fa-pen" style={{fontSize: 11}} /></a>
                                            <button className="btn btn-ok btn-sm" style={{marginLeft:5}} type="button"><i className="fa fa-trash" style={{fontSize: 11}} /></button>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>108737NT</td>
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
                                                </div>
                                            </div>
                                            </div>
                                        </td>
                                        <td><div className="media-body mt-2">
                                            <div className="h4 font-14">
                                                <span style={{fontFamily: 'arial'}}>₹</span>&nbsp;599.00
                                            </div>
                                            </div>
                                        </td>
                                        <td> <span className="badge badge-success badge-pill">Confirmed</span> </td>
                                        <td style={{minWidth: 80}}>
                                            <a href="step1.php" className="btn btn-ok btn-sm" type="button"><i className="fa fa-pen" style={{fontSize: 11}} /></a>
                                            <button className="btn btn-ok btn-sm" style={{marginLeft:5}} type="button"><i className="fa fa-trash" style={{fontSize: 11}} /></button>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>108737NT</td>
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
                                                </div>
                                            </div>
                                            </div>
                                        </td>
                                        <td><div className="media-body mt-2">
                                            <div className="h4 font-14">
                                                <span style={{fontFamily: 'arial'}}>₹</span>&nbsp;599.00
                                            </div>
                                            </div>
                                        </td>
                                        <td> <span className="badge badge-success badge-pill">Confirmed</span> </td>
                                        <td style={{minWidth: 80}}>
                                            <a href="step1.php" className="btn btn-ok btn-sm" type="button"><i className="fa fa-pen" style={{fontSize: 11}} /></a>
                                            <button className="btn btn-ok btn-sm" style={{marginLeft:5}} type="button"><i className="fa fa-trash" style={{fontSize: 11}} /></button>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>108737NT</td>
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
                                                </div>
                                            </div>
                                            </div>
                                        </td>
                                        <td><div className="media-body mt-2">
                                            <div className="h4 font-14">
                                                <span style={{fontFamily: 'arial'}}>₹</span>&nbsp;599.00
                                            </div>
                                            </div>
                                        </td>
                                        <td> <span className="badge badge-success badge-pill">Confirmed</span> </td>
                                        <td style={{minWidth: 80}}>
                                            <a href="step1.php" className="btn btn-ok btn-sm" type="button"><i className="fa fa-pen" style={{fontSize: 11}} /></a>
                                            <button className="btn btn-ok btn-sm" style={{marginLeft:5}} type="button"><i className="fa fa-trash" style={{fontSize: 11}} /></button>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>108737NT</td>
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
                                                </div>
                                            </div>
                                            </div>
                                        </td>
                                        <td><div className="media-body mt-2">
                                            <div className="h4 font-14">
                                                <span style={{fontFamily: 'arial'}}>₹</span>&nbsp;599.00
                                            </div>
                                            </div>
                                        </td>
                                        <td> <span className="badge badge-success badge-pill">Confirmed</span> </td>
                                        <td style={{minWidth: 80}}>
                                            <a href="step1.php" className="btn btn-ok btn-sm" type="button"><i className="fa fa-pen" style={{fontSize: 11}} /></a>
                                            <button className="btn btn-ok btn-sm" style={{marginLeft:5}} type="button"><i className="fa fa-trash" style={{fontSize: 11}} /></button>
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
                        {/* END: Page content*/}
                    </div>
                    </div>


            </>
        )
    }

}