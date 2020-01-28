import React,{Component} from 'react';
import './home.css';


export default class HomeBanner extends Component {
    render(){
        return(
            <div className="main-banner">
          <div className="banner-image" style={{ backgroundImage: 'url("img/home_banner.jpg")' }}>
            <div className="container">
              <div className="banner-content" style={{ paddingTop: 100 }}>
                <div className="row">
                  <div className="col-12 mt-4">
                    <h3 style={{ color: '#fff' }}>Find The Best Office Place In Your City</h3>
                  </div>
                </div>
                <form  className="banner-form mt-4">
                  <div className="row justify-content-md-center">
                    <div className="col-lg-3 col-md-6" style={{ padding: '3px' }}>
                      <input type="text" className="form-control mb-lg-0" placeholder="Enter city or Locality name" />
                    </div>
                    <div className="col-lg-3 col-md-6" style={{ padding: '3px' }}>
                      <select className="form-control mb-lg-0 custom-select" id="service2">
                        <option>all categories</option>
                        <option>Meeting Room</option>
                        <option>Coworking Space</option>
                        <option>Training Room </option>
                        <option>Business Center</option>
                      </select>
                    </div>
                    <div className="col-lg-2 col-md-4" style={{ padding: '3px' }}>
                      <button type="submit" className="btn btn-one btn-anim w-100">
                        <i className="fa fa-search"></i> search
                    </button>
                    </div>
                  </div>
                </form>
              </div>
              <div className="list-category">
                <div className="row">
                  <div className="col-12 mb-4">
                    <h3 style={{ color: '#fff' }}>What Can You Book?</h3>
                  </div>
                </div>
                <div className="row">
                  <div className="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div className="list-items mb-30 btn-anim">
                      <div className="icon-box">
                        <i className="flaticon-team" />
                      </div>
                      <h5 className="mb-0">
                        <a href="#/">Meeting Room</a>
                      </h5>
                    </div>
                  </div>
                  <div className="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div className="list-items mb-30 btn-anim">
                      <div className="icon-box">
                        <i className="flaticon-appointment" />
                      </div>
                      <h5 className="mb-0">
                        <a href="#/">Coworking Space</a>
                      </h5>
                    </div>
                  </div>
                  <div className="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div className="list-items mb-30 btn-anim">
                      <div className="icon-box">
                        <i className="flaticon-shop" />
                      </div>
                      <h5 className="mb-0">
                        <a href="#/">Private Office</a>
                      </h5>
                    </div>
                  </div>
                  <div className="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div className="list-items mb-30 btn-anim">
                      <div className="icon-box">
                        <i className="flaticon-hotel" />
                      </div>
                      <h5 className="mb-0">
                        <a href="#/">Training Room</a>
                      </h5>
                    </div>
                  </div>
                  <div className="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div className="list-items mb-30 btn-anim">
                      <div className="icon-box">
                        <i className="flaticon-team" />
                      </div>
                      <h5 className="mb-0">
                        <a href="#/">Business Center</a>
                      </h5>
                    </div>
                  </div>
                  <div className="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div className="list-items mb-30 btn-anim">
                      <div className="icon-box">
                        <i className="flaticon-shop" />
                      </div>
                      <h5 className="mb-0">
                        <a href="#/">Coworking Cafes</a>
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        );
    }
}