import React, { Component } from "react";
import Setting from './settings';
import { Helmet } from 'react-helmet';



export default class Settings extends Component {
    render() {
      return (
        <>
          <Helmet>
            <title>Bundesk | Settings </title>
          </Helmet>
  
          <div class="page-content fade-in-up">
           <Setting/>
          </div>
        </>
      );
    }
  }