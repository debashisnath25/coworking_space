import React,{ Component} from 'react';

class BannerForm extends Component{
    render(){
        return(
            <>
                <form action="#" className="banner-form mt-2">
                  <div className="row justify-content-md-center">
                    <div className="col-lg-3 col-md-6">
                      <input type="text" className="form-control mb-lg-0" placeholder="Enter city or Locality name" />
                    </div>
                    <div className="col-lg-3 col-md-6">
                      <select className="form-control mb-lg-0 custom-select" id="service2">
                        <option>all categories
                        </option>
                        <option>Meeting Room
                        </option>
                        <option>Coworking Space
                        </option>
                        <option>Private Office
                        </option>
                        <option>Training Room
                        </option>
                        <option>Business Center
                        </option>
                        <option>Coworking Cafes
                        </option>
                      </select>
                    </div>
                    <div className="col-lg-2 col-md-4">
                      <button type="submit" className="btn btn-one btn-anim w-100">
                        <i className="fa fa-search">
                        </i> search
                      </button>
                    </div>
                  </div>
                </form>
            </>
        )
    }
}

export default BannerForm;