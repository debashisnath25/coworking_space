import React, { Component } from 'react';
import './home.css';


export default class Enquiry extends Component {
    render() {
        return (
            <section className="cta-one tri-bg-w text-lg-left text-center">
                <div className="container">
                    <div className="row align-items-center">
                        <div className="col-lg-6 my-lg-0 my-5 py-lg-0 py-5 ">
                            <div className="cta-content mt-4">
                                <h4 style={{color:'#FFFFFF',fontSize:'35px',fontFamily:'Arial'}}>Heading,<font style={{color:'#525050',fontFamily:'Arial'}}>Heading</font></h4>
                                <p style={{fontFamily:'Arial'}}>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
                                <h4 style={{color:'#FFFFFF',fontSize:'35px',fontFamily:'Arial'}}>Heading,<font style={{color:'#525050',fontFamily:'Arial'}}>Heading</font></h4>
                                <p style={{fontFamily:'Arial'}}>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
                                <h4 style={{color:'#FFFFFF',fontSize:'35px',fontFamily:'Arial'}}>Heading,<font style={{color:'#525050',fontFamily:'Arial'}}>Heading</font></h4>
                                <p style={{fontFamily:'Arial'}}>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
                                <a href="#/" className="btn btn-two btn-anim mt-2 mb-4" style={{border: 'none',fontFamily:'Arial'}}>
                                    Enquiry now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        );
    }
}