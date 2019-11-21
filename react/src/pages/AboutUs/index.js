import React,{Component} from 'react';
import { AboutHowItWorks,SigninBanner,AboutFeatures } from './../../components';


class AboutUs extends Component{
    render(){
      return(
        <>
         <div>
             {/* AboutHowItWorks start*/}
            <AboutHowItWorks/>
            {/* AboutHowItWorks end */}
            {/* cta-one start*/}
            <SigninBanner/>
            {/* features start*/}
            <AboutFeatures/>
        </div>
        </>
      );
    }
}

export default AboutUs;
