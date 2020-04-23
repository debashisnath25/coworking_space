import React, { Component } from "react";
import Plan from './plans';
import { Helmet } from 'react-helmet';



export default class Plans extends Component {
    render() {
      return (
        <>
          <Helmet>
            <title>Bundesk | Plans </title>
          </Helmet>
  
          <div class="page-content fade-in-up">
           <Plan/>
          </div>
        </>
      );
    }
  }