import React, { Component } from 'react';
import {Pagination} from '../../components';




export default class ReferredLeads extends Component {
    render() {
        return (
            <>
                <div className="page-heading" style={{paddingLeft: 17}}>
                    <div className="page-breadcrumb">
                    <h1 className="page-title"><a href="/#|">Dashboard </a>&gt; Referred Leads
                    </h1>
                    </div>
                </div>
                 <div className="col-md-12 col-xs-12 ">
                    <div className="card card-fullheight" style={{ border: '1px solid #7c1ab5' }}>
                        <div className="card-header cardhdd">
                            <h5 className="box-title" style={{ color: '#fff' }}>Accepted Leads</h5>
                        </div>
                        <div className="card-body">
                            <div className="col-lg-12 col-md-12 col-xs-12">
                                <form>
                                    <div className="card-body">
                                        <div className="table-responsive">
                                            <table className="table table-bordered table-striped w-100" id="dt-buttons">
                                                <thead className>
                                                    <tr>
                                                        <th style={{ minWidth: 80 }}>Lead Name</th>
                                                        <th style={{ minWidth: 80 }}>Lead Email</th>
                                                        <th style={{ minWidth: 80 }}>Lead Phone</th>
                                                        <th style={{ minWidth: 80 }}>Accepted By</th>
                                                        <th style={{ minWidth: 80 }}>Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td>Armaan Kashyap</td>
                                                        <td>abc@gmail.com</td>
                                                        <td>9876543210</td>
                                                        <td>Kunal Kashyap</td>
                                                        <td>8/11/2019</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>Armaan Kashyap</td>
                                                        <td>abc@gmail.com</td>
                                                        <td>9876543210</td>
                                                        <td>Kunal Kashyap</td>
                                                        <td>8/11/2019</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>Armaan Kashyap</td>
                                                        <td>abc@gmail.com</td>
                                                        <td>9876543210</td>
                                                        <td>Kunal Kashyap</td>
                                                        <td>8/11/2019</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Armaan Kashyap</td>
                                                        <td>abc@gmail.com</td>
                                                        <td>9876543210</td>
                                                        <td>Kunal Kashyap</td>
                                                        <td>8/11/2019</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Armaan Kashyap</td>
                                                        <td>abc@gmail.com</td>
                                                        <td>9876543210</td>
                                                        <td>Kunal Kashyap</td>
                                                        <td>8/11/2019</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Armaan Kashyap</td>
                                                        <td>abc@gmail.com</td>
                                                        <td>9876543210</td>
                                                        <td>Kunal Kashyap</td>
                                                        <td>8/11/2019</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Armaan Kashyap</td>
                                                        <td>abc@gmail.com</td>
                                                        <td>9876543210</td>
                                                        <td>Kunal Kashyap</td>
                                                        <td>8/11/2019</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div className="row">
                                <div className="col-lg-5 col-md-54 col-xs-12">
                                    <button className="btn btn-primary btn-fix ml-5" style={{float:'left'}} type="button">Download As Csv Data File</button>&nbsp;<button className="btn btn-primary active btn-fix" type="button">Download As Pdf File</button>
                                </div>
                                <div className="col-lg-6 col-md-6 col-xs-12">
                                    <Pagination totalRecords={7} pageLimit={3} pageNeighbours={1} onPageChanged={this.onPageChanged} />
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </>
        )
    }

}