import React, { Component } from "react";
import Accepted from './Acceptedleads';
import { Helmet } from 'react-helmet';



export default class AcceptedLeads extends Component {
    render() {
      return (
        <>
          <Helmet>
            <title>Bundesk | AcceptedLeads </title>
          </Helmet>
  
          <div class="page-content fade-in-up">
           <Accepted/>
          </div>
        </>
      );
    }
  }