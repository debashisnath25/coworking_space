import React, { Component } from "react";
import Space from './Workspace';
import { Helmet } from 'react-helmet';



export default class Workspace extends Component {
    render() {
      return (
        <>
          <Helmet>
            <title>Bundesk || Workspace </title>
          </Helmet>
  
          <div class="page-content fade-in-up">
           <Space/>
          </div>
        </>
      );
    }
  }