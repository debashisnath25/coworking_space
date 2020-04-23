import React, { Component } from "react";
import Rating from './ratings';
import { Helmet } from 'react-helmet';



export default class Ratings extends Component {
    render() {
      return (
        <>
          <Helmet>
            <title>Bundesk | Ratings & Reviews </title>
          </Helmet>
  
          <div class="page-content fade-in-up">
           <Rating/>
          </div>
        </>
      );
    }
  }