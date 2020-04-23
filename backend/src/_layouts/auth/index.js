import React from "react";
import PropTypes from "prop-types";
import $ from 'jquery';
import 'react-bootstrap';
import './style.css';
import './css/feather.css';
import './css/all.min.css';
import './css/themify-icons.css';
import './css/line-awesome.min.css';
import './css/perfect-scrollbar.css';
import './css/bootstrap-select.min.css';
import './css/app-sidebar-light.min.css';

import Header from './Header';
import Footer from './Footer';
import Sidebar from './Sidebar';

window.jQuery = $;
window.$ = $;
global.jQuery = $;

export default function AuthLayout({ children }) {
  return (
    <>
      <div className="page-wrapper">
        <div className="content-wrapper">
            <Sidebar />
            <div className="content-area">
                <Header />
                <div>{children}</div>
                <Footer />
            </div>
        </div>
      </div>
      <div className="sidenav-backdrop backdrop"></div>
    </>
  );

}

AuthLayout.propTypes = {
  children: PropTypes.element.isRequired
};
