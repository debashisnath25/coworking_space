import React from "react";
import PropTypes from "prop-types";
import Helmet from "react-helmet";
import Header from "./Header";
import Footer from "./Footer";


import './css/animate.css';
import './css/bootstrap.min.css';
import './css/flaticon.css';
import './css/fontawesome.css';
import './css/header.css';
import './css/owl.carousel.min.css';
import './css/owl.theme.default.min.css';
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
        <Helmet>
          <script type="text/javascript" src="./js/jquery-3.3.1.min.js">
          </script>
          <script type="text/javascript" src="./js/popper.min.js">
          </script>
          <script type="text/javascript" src="./js/bootstrap.min.js">
          </script>
          <script type="text/javascript" src="./js/owl.carousel.min.js">
          </script>
          <script type="text/javascript" src="./js/slick.min.js">
          </script>
          <script type="text/javascript" src="./js/jarallax.min.js">
          </script>
          <script type="text/javascript" src="./js/jarallax-element.min.js">
          </script>
          <script type="text/javascript" src="./js/jarallax-video.min.js">
          </script>
          <script type="text/javascript" src="./js/custom.js">
          </script>
        </Helmet>
      </>
    );

}

DefaultLayout.propTypes = {
  children: PropTypes.element.isRequired
};
