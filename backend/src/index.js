import React from "react";
import ReactDOM from "react-dom";
import App from "./App";
require('dotenv').config();
window.$URL = process.env.NODE_ENV === 'production' ? process.env.REACT_APP_PROD_API_URL : process.env.REACT_APP_DEV_API_URL;
ReactDOM.render(<App />, document.getElementById("root"));
