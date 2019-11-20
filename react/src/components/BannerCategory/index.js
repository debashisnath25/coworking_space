import React,{ Component} from 'react';

class BannerCategory extends Component{
    contructor(){

    }
    componentDidMount(){
      
    }
    render(){
        return(
            <>
                <div className="list-category" style={{marginTop: '-100px', paddingBottom: '50px'}}>
                <div className="row">
                  <div className="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div className="list-items mb-30 btn-anim">
                      <div className="icon-box">
                        <i className="flaticon-team" />
                      </div>
                      <h5 className="mb-0">
                        <a href="#">Meeting Room
                        </a>
                      </h5>
                    </div>
                  </div>
                  <div className="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div className="list-items mb-30 btn-anim">
                      <div className="icon-box">
                        <i className="flaticon-appointment" />
                      </div>
                      <h5 className="mb-0">
                        <a href="#">Coworking Space
                        </a>
                      </h5>
                    </div>
                  </div>
                  <div className="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div className="list-items mb-30 btn-anim">
                      <div className="icon-box">
                        <i className="flaticon-shop" />
                      </div>
                      <h5 className="mb-0">
                        <a href="#">Private Office
                        </a>
                      </h5>
                    </div>
                  </div>
                  <div className="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div className="list-items mb-30 btn-anim">
                      <div className="icon-box">
                        <i className="flaticon-hotel" />
                      </div>
                      <h5 className="mb-0">
                        <a href="#">Training Room
                        </a>
                      </h5>
                    </div>
                  </div>
                  <div className="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div className="list-items mb-30 btn-anim">
                      <div className="icon-box">
                        <i className="flaticon-team" />
                      </div>
                      <h5 className="mb-0">
                        <a href="#">Business Center
                        </a>
                      </h5>
                    </div>
                  </div>
                  <div className="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div className="list-items mb-30 btn-anim">
                      <div className="icon-box">
                        <i className="flaticon-shop" />
                      </div>
                      <h5 className="mb-0">
                        <a href="#">Coworking Cafes
                        </a>
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </>
        )
    }
}

export default BannerCategory;