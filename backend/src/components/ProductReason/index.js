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
export default class ProductReason extends Component{
    render(){
        return(
        <>
        <div className="modal-body">
        <div className=" card-fullheight">
            <div className="card-body">
            {images.map ((prodData, index) => {
                return(
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
                    )
                })
                }
            </div>
            </div>

        </div>
        
        </>
        )
    }
    
}

