import React from 'react';
import PropTypes from "prop-types";
import './style.css';
//import {Modal} from 'react-bootstrap';

export default function Modal ({children,status}){
    return(
      <>
        <div
          className={`modal fade ${status}`}
          tabIndex={-1}
          role="dialog"
          aria-labelledby="reason"
          style={{ display: (status === 'show')?"block":""}}
        >
          <div className="modal-dialog modal-lg ">
              {children}
          </div>
        </div>
        {(status === 'show')?<div className="modal-backdrop fade show"></div>:""}

      </>
    )
}
Modal.propTypes = {
  children: PropTypes.element.isRequired,
  status: PropTypes.string.isRequired
};
