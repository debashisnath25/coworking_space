import React from 'react';
import PropTypes from 'prop-types';
import 'react-bootstrap';

import './css/all.min.css';
import './css/themify-icons.css';
import './css/line-awesome.min.css';
import './css/app.min.css';

export default function AuthLayout({children}) {
  return <div>{children}</div>;
}
AuthLayout.propTypes = {
  children: PropTypes.element.isRequired,
};
