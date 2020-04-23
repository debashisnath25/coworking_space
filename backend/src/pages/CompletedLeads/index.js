import React, { Component } from "react";
import Completed from './Completedleads';
import { Helmet } from 'react-helmet';



export default class CompletedLeads extends Component {
    render() {
      return (
        <>
          <Helmet>
            <title> Dashboard | Wanted 7 </title>
          </Helmet>
  
          <div class="page-content fade-in-up">
           <Completed/>
          </div>
        </>
      );
    }
  }