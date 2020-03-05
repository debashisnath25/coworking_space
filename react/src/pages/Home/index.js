import React,{Component} from 'react';
import './home.css';
import HomebannerPage from './HomeBanner';
import TopSpacePage from './TopSpace';
import LocationPage from './Location';
import WhyChooseUsPage from './WhyChooseUs';
import EnquirysPage from './Enquiry';
import CompanyPage from './Company';


export default class Home extends Component{
    render(){
      return(
        <>
        <div>
          <HomebannerPage/>
          <TopSpacePage/>
          <EnquirysPage />
          <LocationPage/>
          <WhyChooseUsPage />
          <CompanyPage />
        </div>
        </>
      );
    }
}