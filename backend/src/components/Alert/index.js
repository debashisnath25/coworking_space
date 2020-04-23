import React, {useState} from 'react';

export default function Alert (props){

    const [show, activeShow] = useState(props.dataStatus);
    return(
            show ? 
            <div class="alert alert-success" role="alert" style={{position:"fixed",top:0,zIndex:9999,width:"100%",marginLeft:-30,height:65,overflow:'hidden'}}>
                <div className="row">
                    <div className="col-md-8">
                    <h5> {props.dataMessage} </h5>
                    </div>
                    <div className="col-md-4 ">
                        <button className="btn btn-primary btn-md mr-2" onClick={() => activeShow(!show)}>OK</button>
                        <button className="btn btn-light btn-md" onClick={() => activeShow(!show)}>Cancel</button>
                    </div>
                </div>
            </div>
            : ''
    )
}