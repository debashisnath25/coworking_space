import React, { Component } from 'react';
import './listing.css';
import TopBarPage from './TopBar';
import SideBarPage from './SideBar';
import ListPage from './List';


export default class Listing extends Component {
  render() {
    return (
      <section className="bg-w" style={{ paddingTop: 100 }}>
        <div className="container">
          <h4 className="title-sep3 mb-20 mt-30">Home &gt; <span className="c-theme">Coworking Spaces</span> </h4>
          <TopBarPage />
          <div className="row ">
            <SideBarPage />
            <ListPage />
          </div>
        </div>
      </section>

    );
  }
}

