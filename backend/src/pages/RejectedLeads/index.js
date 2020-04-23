import React, { Component } from "react";
import Rejected from './Rejectedleads';
import { Helmet } from 'react-helmet';



export default class RejectedLeads extends Component {
    render() {
      return (
        <>
          <Helmet>
            <title> Dashboard | Wanted 7 </title>
          </Helmet>
  
          <div class="page-content fade-in-up">
           <Rejected/>
          </div>
        </>
      );
    }
  }