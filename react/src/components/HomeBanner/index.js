import React,{ Component} from 'react';
import BannerCategory from '../BannerCategory';
import BannerForm from '../BannerForm';

class HomeBanner extends Component{
    render(){
        return(
            <>
            <div className="main-banner">
              <div className="banner-image" style={{backgroundImage: 'url("img/Panoramic-Beauty-of-Taj-Mahal-Tour-My-India--1024x489.jpg")'}}>
                <div className="container">
                  <div className="banner-content">
                    <div className="row" style={{marginTop: '-50px'}}>
                      <div className="col-12">
                        <h2>Find The Best Office Place In Your City
                        </h2>
                      </div>
                    </div>
                    <BannerForm/>
                  </div>

                  <BannerCategory />
                </div>
              </div>
            </div>
            </>
        )
    }
}

export default HomeBanner;