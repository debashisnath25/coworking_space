import React, { Component } from "react";
import { Helmet } from 'react-helmet';
import { BreadCrumbs } from './../../components';
import DashboardContent from './Dashboard';

export default class Dashboard extends Component {
  render() {
    return (
      <>
        <Helmet>
          <title> Dashboard | Wanted 7 </title>
        </Helmet>

        <div class="page-content fade-in-up">
          <BreadCrumbs>
          <h1 className="page-title" style={{marginRight:"-17px"}}>Greetings, Mr. Dheeraj Sood!</h1>
          </BreadCrumbs>
          <DashboardContent />
        </div>
      </>
    );
  }
}