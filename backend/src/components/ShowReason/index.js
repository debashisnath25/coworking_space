import React, { Component } from 'react';
import ImageGallery from 'react-image-gallery';
import "react-image-gallery/styles/css/image-gallery.css";
import './style.css';

export default class ShowReason extends Component {
    
    render() {
        return (
            <div className="row">
                <div className="col-md-6" style={{ textAlign: "center" }}>
                    <ImageGallery items={this.props.allImages} style={{ height: "350px" }} />
                    <button className="btn btn-primary clr" style={{ marginBottom: "20px" }}>Download All Attatchment</button>
                </div>
                <div className="col-md-6">
                    <div>
                        <div className="alert alert-danger alert-bordered" role="alert">
                            <q>
                                <i>
                                    {this.props.reasonText}
                                </i>
                            </q>
                        </div>

                        <div className="row">
                            <div className="col-6">
                                <p>{this.props.reasonDate}</p>
                            </div>
                            <div className="col-6 text-right">
                                <p>— Unapproved by Admin<br /><b>
                                </b></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        );
    }
}