import React, { Component } from "react";
import './dashboard.css'

export default class Dashboard extends Component{
    render(){
        return(
            <>
             <div className="col-md-12 col-xs-12 ">
                    <div className="card card-fullheight" style={{ border: '1px solid #7c1ab5' }}>
                        <div className="card-header cardhdd">
                            <h5 className="box-title" style={{ color: '#fff' }}>Accepted Leads</h5>
                           
                        </div>
                        <div className="card-body">
                            <div className="col-lg-12">
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
                        </div>
                    </div>
                   
                </div>      
                </>
        )
    }
}