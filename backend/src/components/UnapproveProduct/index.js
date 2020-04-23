import React, {Component} from 'react';
import './style.css';
import Dropzone from 'react-dropzone'


export default class UnapproveProduct extends Component{

    constructor(props) {
        super(props);
        this.state = {
            status: this.props.unstatus,
            dataShow: this.props.showData,
            imageFiles: []
        }
    }

    render(){
        return(
            <>
            <div className="modal-body" style={{height: 350}}>
                <div className=" card-fullheight">
                    <div className="card-body">
                    <div className="col-md-12" style={{padding: '3px'}}>
                            <div className="mb-3 ">
                                <div className=" " style={{border: '2px dashed#1663ff', minHeight: '140px', background: 'white', padding: '10px 10px', borderRadius: 5, textAlign: 'center'}}>
                                    <Dropzone onDrop={this.onDrop}>
                                    {({getRootProps, getInputProps}) => (
                                        <div {...getRootProps()} style={{marginTop:"26px"}}>
                                            <input {...getInputProps()} />
                                            <i className="ti-plus text-primary font-26"></i>
                                            <p>Upload Images/Videos as a reason to unapprove</p>
                                        </div>
                                    )}
                                    </Dropzone>
                                </div>
                            </div>
                        </div>

                        <div className="col-md-12" style={{padding: '3px'}}>
                            <label htmlFor="validationCustom04" style={{fontSize: 18}}>Enter Reason </label>
                            <div className="dropdown bootstrap-select form-control mb-3">
                                <textarea className="form-control form-control-solid" rows={3} defaultValue={""} />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </>
          )
    }
    
}

