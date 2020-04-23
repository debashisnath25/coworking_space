import React, { Component } from "react";
import Referred from './Referredleads';
import { Helmet } from 'react-helmet';



export default class ReferredLeads extends Component {
    render() {
      return (
        <>
          <Helmet>
            <title> Dashboard | Wanted 7 </title>
          </Helmet>
  
          <div class="page-content fade-in-up">
           <Referred/>
          </div>
        </>
      );
    }
  }