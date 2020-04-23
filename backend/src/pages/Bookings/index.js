import React, { Component } from "react";
import Book from './bookings';
import { Helmet } from 'react-helmet';



export default class Bookings extends Component {
    render() {
      return (
        <>
          <Helmet>
            <title>Bundesk | Bookings </title>
          </Helmet>
  
          <div class="page-content fade-in-up">
           <Book/>
          </div>
        </>
      );
    }
  }