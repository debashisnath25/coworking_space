import React, {Component} from 'react';
import './style.css';
import ImageGallery from 'react-image-gallery';
import 'react-image-gallery/styles/css/image-gallery.css';

const images = [{
    ProductImages: [
        {
            "original": "http://eazyprint.in/superadmin/images/watermark.jpg",
            "thumbnail": "http://eazyprint.in/superadmin/images/watermark.jpg"
        },{
            "original": "http://eazyprint.in/superadmin/images/product_reject.png",
            "thumbnail": "http://eazyprint.in/superadmin/images/product_reject.png"
        }
    ]
}];
export default class ProductRevision extends Component{
    render(){
        return(
        <>
        <div className="modal-body" style={{
                'max-height': 'calc(100vh - 150px)',
                'overflow-y': 'auto',
              }}>
            <div className=" card-fullheight">
                <div className="card-body">
                <h5 class="modal-title h4 mb-3" >Reason of Unapproval</h5>
                {images.map ((prodData, index) => {
                    return(
                    <>
                    <div className="row">
                        <div className="col-md-6 mb-4">
                            <ImageGallery items={prodData.ProductImages} lazyLoad="true" additionalClass="img-fluid-slide" originalClass="img-fluid-slide" />                    
                            <a href="#/" className="btn btn-primary clr mt-4 pull-right">Download All Attachments</a>
                        </div>
                        <div className="col-md-6">
                            <div className="alert alert-danger alert-bordered" role="alert">
                                <q><i>Image contains watermark.</i></q>
                            </div>
                            <div className="alert alert-danger alert-bordered" role="alert">
                                <q><i>Wrong Category &amp; Sub-Category Selected.</i></q>
                            </div>
                            <div className="row">
                                <div className="col-6">
                                <p>26 Nov 2019, 06:10 PM</p>
                                </div>
                                <div className="col-6 text-right">
                                <p>— Unapproved by <br /><b>Mr. Dheeraj Sood</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </>
                        )
                    })
                    }

                </div>
            </div>
            <div className=" card-fullheight">
                <div className="card-body">
                    <a href="#/" className="btn btn-primary clr mb-2 pull-right">View All Changes</a>
                    <h5 className="modal-title h4">New Revision</h5>
                    <table className="table table-striped table-bordered">
                    <thead className="thead-light">
                        <tr>
                        <th>Revision Section</th>
                        <th>Current Data</th>
                        <th>Requested Data</th>
                        <th>Requested Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Image contains watermark.</td>
                            <td><img src="http://eazyprint.in/superadmin/images/watermark.jpg" alt="http://eazyprint.in/superadmin/images/watermark.jpg" style={{height: 100}} /></td>
                            <td><img src="http://eazyprint.in/superadmin/images/vendor-images/0NBID7_769_Z4P9LP.jpg" alt="http://eazyprint.in/superadmin/images/vendor-images/0NBID7_769_Z4P9LP.jpg" style={{height: 100}} /></td>
                            <td>30 Nov 2019, 06:10 PM</td>
                        </tr>
                        <tr>
                            <td>Wrong Category &amp; Sub-Category Selected.</td>
                            <td>Product Category:  Electronics <br />
                                Product Subcategory:  Mobiles
                            </td>
                            <td>Product Category:  Fashion <br />
                                Product Subcategory:  Shoes
                            </td>
                            <td>30 Nov 2019, 06:10 PM</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                </div>


        </div>
        
        </>
        )
    }
    
}

