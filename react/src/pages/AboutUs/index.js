import React,{Component} from 'react';
import { AboutHowItWorks,SigninBanner,AboutFeatures } from './../../components';


class AboutUs extends Component{
    render(){
      return(
        <>
         <div>
            <AboutHowItWorks/>
            <SigninBanner/>
            <AboutFeatures/>
        </div>
        </>
      );
    }
}

export default AboutUs;
