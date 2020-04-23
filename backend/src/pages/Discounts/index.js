import React, { Component } from "react";
import Disco from './discounts';
import { Helmet } from 'react-helmet';



export default class Discounts extends Component {
    render() {
      return (
        <>
          <Helmet>
            <title>Bundesk | Discounts </title>
          </Helmet>
  
          <div class="page-content fade-in-up">
           <Disco/>
          </div>
        </>
      );
    }
  }