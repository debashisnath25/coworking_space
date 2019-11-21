import React,{ Component} from 'react';

class AboutFeatures extends Component{
    render(){
        return(
            <>
                <section className="features sp-100 bg-w">
                <div className="container">
                    <div className="row">
                    <div className="col-12">
                        <div className="all-title" style={{marginBottom: '30px'}}>
                        <h3 className="sec-title">
                            Why We Are Best
                        </h3>
                        <svg className="title-sep">
                            <path fillRule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z" />
                        </svg>
                        </div>
                    </div>
                    </div>
                    <div className="row">
                    <div className="col-lg-4 col-md-6 col-12 mb-30">
                        <div className="feature-item">
                        <div className="icon-box">
                            <i className="flaticon-rising" />
                        </div>
                        <h5>Ready to move-in Office</h5>
                        <p>Move into your new office, we're there to advise on anything from start to finish
                        </p>
                        </div>
                    </div>
                    <div className="col-lg-4 col-md-6 col-12 mb-30">
                        <div className="feature-item">
                        <div className="icon-box">
                            <i className="flaticon-list" />
                        </div>
                        <h5>No Booking/Broker Fee</h5>
                        <p>Search the market, shortlist options and request viewing.
                        </p>
                        </div>
                    </div>
                    <div className="col-lg-4 col-md-6 col-12 mb-30">
                        <div className="feature-item">
                        <div className="icon-box">
                            <i className="flaticon-medal" />
                        </div>
                        <h5>Hassle Free Working</h5>
                        <p>Flexible to change the workspace as your growth on demand
                        </p>
                        </div>
                    </div>
                    <div className="col-lg-4 col-md-6 col-12 mb-30">
                        <div className="feature-item">
                        <div className="icon-box">
                            <i className="flaticon-appointment" />
                        </div>
                        <h5>Safe And Trusted</h5>
                        <p>Our local experts will arrange and confirm viewing
                        </p>
                        </div>
                    </div>
                    <div className="col-lg-4 col-md-6 col-12 mb-30">
                        <div className="feature-item">
                        <div className="icon-box">
                            <i className="flaticon-map" />
                        </div>
                        <h5>Verified Venues</h5>
                        <p>workspaces are branded coworking and serviced offices
                        </p>
                        </div>
                    </div>
                    <div className="col-lg-4 col-md-6 col-12 mb-30">
                        <div className="feature-item">
                        <div className="icon-box">
                            <i className="flaticon-support" />
                        </div>
                        <h5>24/7 support</h5>
                        <p>Move into your new office, we're there to advise on anything from start to finish
                        </p>
                        </div>
                    </div>
                    </div>
                </div>
                </section>
            </>
        )
    }
}

export default AboutFeatures;