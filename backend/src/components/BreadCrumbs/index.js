import React from 'react';
import PropTypes from "prop-types";
export default function BreadCrumbs({children}){
    return(
      <div className="page-heading">
        <div className="page-breadcrumb" style={{ marginLeft: 15 }}>
          {children}
        </div>
     
      </div>
    );
}

BreadCrumbs.propTypes = {
  children: PropTypes.element.isRequired
};
