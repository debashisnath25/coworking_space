import React,{Component} from 'react';
import './home.css';
import { HomeBanner,Location,SigninBanner,PopularList } from './../../components';


class Home extends Component{
    render(){
      return(
        <>
        <div>
        {/* banner start */}
           <HomeBanner/>
        {/* banner end */}
        {/* location start */}
           <Location/>
        {/* location end */}
        {/* cta-one start*/}
            <SigninBanner/>
        {/* cta-one end */}
        {/* popular list start*/}
            <PopularList/>
        {/* popular list start*/}
        
        </div>
        </>
      );
    }
}

export default Home;
