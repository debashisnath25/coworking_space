import React from "react";
import PropTypes from "prop-types";


import Header from "./Header";
import Footer from "./Footer";


import './css/animate.css';
import './css/bootstrap.min.css';
import './css/flaticon.css';
import './css/fontawesome.css';
import './css/header.css';
import './css/owl.carousel.min.css';
import './css/owl.theme.default.min.css';
import './css/plugins.css';
import './css/responsive.css';
import './css/slick-theme.css';
import './css/slick.css';
import './css/style.css';

export default function DefaultLayout({ children }) {

    return (
      <>
        <Header />
        <div>{children}</div>
        <Footer />
      </>
    );
  
}

DefaultLayout.propTypes = {
  children: PropTypes.element.isRequired
};
