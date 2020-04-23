import React, { Component } from 'react';
import './payments.css'



export default class Payments extends Component {
    render() {
        return (
            <>
                 <div>
                <div className="page-heading" style={{paddingLeft: 17}}>
                    <div className="page-breadcrumb">
                    <h1 className="page-title"><a href="dashboard.php">Dashboard</a> &gt; Payments
                    </h1>
                    </div>
                </div>
                <div>
                    <div className="row">
                    <div className="col-lg-6">
                        <div className="card">
                        <div className="card-body">
                            <div className="d-flex justify-content-between mb-4">
                            <div className="d-flex col-md-12 col-xs-12 col-lg-12" style={{padding: '0 !important', margin: '0 !important'}}>
                                <div style={{width: '100%'}}>
                                <div className="row">
                                    <div className="col-md-6 col-lg-6 col-xs-6">
                                    <h5 className="font-18 mb-3 font-weight-normal" style={{fontSize: '15px !important', textTransform: 'uppercase'}}>
                                        <b>Last Payment Settled</b>
                                    </h5>
                                    </div>
                                    <div className="col-md-6 col-lg-6 col-xs-6 ">
                                    <div className="h6 mb-2 pull-right" style={{color: '#00bcd4'}}>{/*?php echo date('D, M j, Y');?*/}</div>
                                    </div>
                                </div>
                                <div className="col-md-4 col-xs-6 col-lg-4" style={{float: 'left', padding: '0 !important', margin: '0 !important'}}>
                                    <div className="h3 mb-2" style={{bbooking: '1px rounded #fadf53'}}><i className="fas fa-rupee-sign" /> 35,000.61
                                    </div>
                                    <div className="text-muted pb-1">
                                    <i className>
                                    </i>Office Spaces Booked
                                    </div>
                                </div>
                                <div className="col-md-4 col-xs-6 col-lg-4" style={{float: 'left', padding: '0 !important', margin: '0 !important'}}>
                                    <div className="h3 mb-2" style={{bbooking: '1px rounded #fadf53'}}><i className="fas fa-rupee-sign" /> 7,052.00
                                    </div>
                                    <div className="text-muted pb-1">
                                    <i className>
                                    </i>Shipping Covered
                                    </div>
                                </div>
                                <div className="col-md-4 col-xs-6 col-lg-4" style={{float: 'left', padding: '0 !important', margin: '0 !important'}}>
                                    <div className="h3 mb-2" style={{bbooking: '1px rounded #fadf53'}}><i className="fas fa-rupee-sign" /> 42,052.61
                                    </div>
                                    <div className="text-muted pb-1">
                                    <i className>
                                    </i>Total Amount Paid
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div className="card-fullwidth-block" style={{marginBottom: '-1.8rem'}}>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div className="col-lg-6">
                        <div className="card">
                        <div className="card-body">
                            <div className="d-flex justify-content-between mb-4">
                            <div className="d-flex col-md-12 col-xs-12 col-lg-12" style={{padding: '0 !important', margin: '0 !important'}}>
                                <div style={{width: '100%'}}>
                                <div className="row">
                                    <div className="col-md-6 col-lg-6 col-xs-12">
                                    <h5 className="font-18 mb-3 font-weight-normal" style={{fontSize: '15px !important', textTransform: 'uppercase'}}>
                                        <b>Next Payment Due</b>
                                    </h5>
                                    </div>
                                    <div className="col-md-6 col-lg-6 col-xs-12">
                                    <div className="h6 mb-2 pull-right" style={{color: '#00bcd4'}}>{/*?php echo date('D, M j, Y');?*/}</div>
                                    </div>
                                </div>
                                <div className="col-md-4 col-xs-6 col-lg-4" style={{float: 'left', padding: '0 !important', margin: '0 !important'}}>
                                    <div className="h3 mb-2" style={{bbooking: '1px rounded #fadf53'}}><i className="fas fa-rupee-sign" /> 47,000.23
                                    </div>
                                    <div className="text-muted pb-1">
                                    <i className>
                                    </i>Office Spaces Booked
                                    </div>
                                </div>
                                <div className="col-md-4 col-xs-6 col-lg-4" style={{float: 'left', padding: '0 !important', margin: '0 !important'}}>
                                    <div className="h3 mb-2" style={{bbooking: '1px rounded #fadf53'}}><i className="fas fa-rupee-sign" /> 9,031.00
                                    </div>
                                    <div className="text-muted pb-1">
                                    <i className>
                                    </i>Shipping Covered
                                    </div>
                                </div>
                                <div className="col-md-4 col-xs-6 col-lg-4" style={{float: 'left', padding: '0 !important', margin: '0 !important'}}>
                                    <div className="h3 mb-2" style={{bbooking: '1px rounded #fadf53'}}><i className="fas fa-rupee-sign" /> 58,032.21
                                    </div>
                                    <div className="text-muted pb-1">
                                    <i className>
                                    </i>Total Amount to be Paid
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div className="card-fullwidth-block" style={{marginBottom: '-1.8rem'}}>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div className="col-lg-12">
                        <div className="tab-content">
                        <div className="tab-pane fade active show" id="faq-group-1">
                            <div className="card" style={{bbooking: '1px solid #7c1ab5'}}>
                            <div className="card-header cardhdd">
                                <h5 className="box-title" style={{color: '#fff'}}>Transaction History</h5>
                            </div>
                            <div className="card-body">

                                <div className="table-responsive">
                                <table className="table table-bBookinged table-striped w-100" id="dt-buttons">
                                    <thead className>
                                    <tr>
                                        <th>Receipt Id</th>
                                        <th style={{maxWidth: 80}}>Date</th>
                                        <th style={{maxWidth: 400}}>Transaction</th>
                                        <th>Invoice</th>
                                        <th>Credit</th>
                                        <th>Debit</th>
                                        <th>Balance</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td>#108737NT00{/*?php echo $i;?*/}</td>
                                        <td> 01/02/2019 : 7:00 PM </td>
                                        <td> Payment transferred to bank account xxxxx9137 of amount <b style={{fontFamily: 'Arial', color: '#7c1ab5'}}>₹ 2,477.6</b> </td>
                                        <td><a href="/#|"><img src="images/PDF-icon.png" alt="round" style={{height: 30}} /></a></td>
                                        <td>&nbsp;</td>
                                        <td><span style={{color: '#d05329'}}><span style={{fontFamily: 'arial'}}> - ₹</span> 2,477.6</span></td>
                                        <td><span style={{color: '#000'}}><span style={{fontFamily: 'arial'}}> ₹</span>0.00</span></td>
                                    </tr>
                                    <tr>
                                        <td>#108737NT00</td>
                                        <td>01/02/2019 : 7:00 PM </td>
                                        <td>GST 18% Tax deducted for Booking no. <b style={{fontFamily: 'Arial', color: '#7c1ab5'}}>#Booking123</b> </td>
                                        <td><a href="/#|"><img src="images/PDF-icon.png" alt="round" style={{height: 30}} /></a></td>
                                        <td>&nbsp;</td>
                                        <td><span style={{color: '#d05329'}}><span style={{fontFamily: 'arial'}}> - ₹</span> 720</span></td>
                                        <td><span style={{color: '#0f881f'}}><span style={{fontFamily: 'arial'}}> ₹</span>2,477.6</span></td>
                                    </tr>												
                                    <tr>
                                        <td>#108737NT00{/*?php echo $i;?*/}</td>
                                        <td>01/02/2019 : 7:00 PM </td>
                                        <td>Booking fees + Tax for Booking no. <b style={{fontFamily: 'Arial', color: '#7c1ab5'}}>#Booking123</b></td>
                                        <td><a href="/#|"><img src="images/PDF-icon.png" alt="round" style={{height: 30}} /></a></td>
                                        <td>&nbsp;</td>
                                        <td><span style={{color: '#d05329'}}><span style={{fontFamily: 'arial'}}> - ₹</span> 472</span></td>
                                        <td><span style={{color: '#0f881f'}}><span style={{fontFamily: 'arial'}}> ₹</span>3,528</span></td>
                                    </tr>
                                    <tr>
                                        <td>#108737NT00{/*?php echo $i;?*/}</td>
                                        <td>01/02/2019 : 7:00 PM </td>
                                        <td>Received Payment For Booking No. <b style={{fontFamily: 'Arial', color: '#7c1ab5'}}>#Booking123</b></td>
                                        <td>&nbsp;</td>
                                        <td><span style={{color: '#0f881f'}}><span style={{fontFamily: 'arial'}}>+ ₹</span>4,000</span></td>
                                        <td>&nbsp;</td>
                                        <td><span style={{color: '#0f881f'}}><span style={{fontFamily: 'arial'}}> ₹ </span>4,000</span></td>
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
                </div>
                </div>

            </>
        )
    }

}