import React,{Component} from 'react';
import './home.css';
import HomebannerPage from './HomeBanner';
import TopSpacePage from './TopSpace';
import LocationPage from './Location';
import WhyChooseUsPage from './WhyChooseUs';
import PeopleFavPage from './PeopleFav';
import HowItWorksPage from './HowItWorks';
import EnquirysPage from './Enquiry';
import ReviewPage from './Review';
import CompanyPage from './Company';


export default class Home extends Component{
    render(){
      return(
        <>
        <div>
          <HomebannerPage/>
          <TopSpacePage/>
          <LocationPage/>
          <WhyChooseUsPage />
          <PeopleFavPage />
          <HowItWorksPage />
          <EnquirysPage />
          <ReviewPage />
          <CompanyPage />
        </div>
        </>
      );
    }
}