import React, { Component } from 'react';
import './home.css';


export default class Enquiry extends Component {
    render() {
        return (
            <section className="cta-one tri-bg-w text-lg-left text-center">
                <div className="container">
                    <div className="row align-items-center">
                        <div className="col-lg-6 my-lg-0 my-5 py-lg-0 py-5">
                            <div className="cta-content">
                                <h3>Discover India's largest and most loved coworking network</h3>
                                <p>Over 100+ locations and still counting; this is a quest to bring you a work space closer to wherever you are.</p>
                                <a href="#/" className="btn btn-two btn-anim mt-2" style={{border: 'none'}}>
                                    Enquiry now
                                </a>
                            </div>
                        </div>
                        <div className="col-lg-6 d-lg-block d-none">
                            <div className="mt-4">
                                <img src="img/cta-bg2.png" alt="Bundesk" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        );
    }
}