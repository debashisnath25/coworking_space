import React,{Component} from 'react';
import './home.css';


export default class HomeBanner extends Component {
    render(){
        return(
            <div className="main-banner">
          <div className="banner-image" style={{ backgroundImage: 'url("img/banner.png")' }}>
            <div className="container">
              <div className="banner-content" style={{ paddingTop: 100 }}>
                <div className="row">
                  <div className="col-md-4 mt-2">
                    <h3 style={{ color: '#555555',fontSize:'30px',textAlign:'left',fontWeight:'bold',fontFamily:'Arial' }}>Find The Perfect Institution For Upgrading Your Skillset </h3>
                  </div>
                </div>
                <form  className="banner-form mt-2">
                  <div className="row">
                    <div className="col-md-4">
                      <input type="text" className="form-control mb-lg-0" style={{border:'1px solid #B8B8B8',fontFamily:'Arial'}} placeholder="Enter city or Locality name" />
                    </div>
                  </div>
                  <div className="row">
                  <div className="col-md-4 mt-2" >
                      <button type="submit" className="btn btn-one btn-anim w-100">
                        <i className="fa fa-search" style={{ textAlign:'center'}}></i> <b style={{ fontSize: '16px',textAlign:'center',fontFamily:'Arial'}}>search</b>
                    </button>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        );
    }
}