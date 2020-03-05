import React, { Component } from 'react';
import './home.css';


export default class TopSpace extends Component {
    render() {
        return (
            <section className="popular-list bg-w" style={{paddingTop : "25px"}}>
                <div className="container">
                    <div className="row">
                        <div className="col-12">
                            <div className="all-title" style={{marginBottom: "25px"}}>
                                <h4 className="sec-title" style={{fontSize:'30px',fontFamily:'Arial',color:'#525050'}}>Heading</h4> 
                                <svg className="title-sep">
                                    <path fillRule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div className="row">
                            <div class="col-lg-3 col-md-6 col-12 mb-30">
                                <div className="team-item" style={{border:'1px solid #A5A5A5',height:'260px'}}>
                                    <img src="img/l-1.png" alt="lister" />
                                    <h5 style={{textAlign:'center',marginTop:'14px'}}>TEXT</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12 mb-30">
                                <div className="team-item" style={{border:'1px solid #A5A5A5',height:'260px'}}>
                                    <img src="img/l-1.png" alt="lister" />
                                    <h5 style={{textAlign:'center',marginTop:'14px'}}>TEXT</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12 mb-30">
                                <div className="team-item" style={{border:'1px solid #A5A5A5',height:'260px'}}>
                                    <img src="img/l-1.png" alt="lister" />
                                    <h5 style={{textAlign:'center',marginTop:'14px'}}>TEXT</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12 mb-30">
                                <div className="team-item" style={{border:'1px solid #A5A5A5',height:'260px'}}>
                                    <img src="img/l-1.png" alt="lister" />
                                    <h5 style={{textAlign:'center',marginTop:'14px'}}>TEXT</h5>
                                </div>
                            </div> 
                    </div>
                </div>
            </section>
        );
    }
}