import React, { Component } from "react";
import Payment from './payments';
import { Helmet } from 'react-helmet';



export default class Payments extends Component {
    render() {
      return (
        <>
          <Helmet>
            <title>Bundesk | Payments </title>
          </Helmet>
  
          <div class="page-content fade-in-up">
           <Payment/>
          </div>
        </>
      );
    }
  }