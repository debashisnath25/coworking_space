import React from "react";
import { Switch } from "react-router-dom";
import Route from "./Route";
import Home from '../pages/Home';
import Listing from '../pages/Listing';
import ListingDetails from '../pages/ListingDetails';
import AboutUs from '../pages/AboutUs';
import Pricing from '../pages/Pricing';

import Enquiry from '../pages/Enquiry'
import ContactUs from '../pages/ContactUs'
import PostRequirement from '../pages/PostRequirement'

import Login from "../pages/Login";
import Register from "../pages/Register";
import ForgetPassword from "../pages/ForgetPassword";

import Dashboard from "../pages/Dashboard";
import Profile from "../pages/Profile";

export default function Routes() {
  return (
    <Switch>
      <Route path="/" exact component={Home} />
      <Route path="/listing" exact component={Listing} />
      <Route path="/listing_details" exact component={ListingDetails} />
      <Route path="/AboutUs" exact component={AboutUs} />
      <Route path="/Pricing" exact component={Pricing} />
      
      <Route path="/enquiry" exact component={Enquiry} />
      <Route path="/contact_us" exact component={ContactUs} />
      <Route path="/PostRequirement" exact component={PostRequirement} />
      <Route path="/login" component={Login} />
      <Route path="/register" component={Register} />
      <Route path="/forget_password" component={ForgetPassword} />

      <Route path="/dashboard" component={Dashboard} isPrivate />
      <Route path="/profile" component={Profile} isPrivate />

      {/* redirect user to SignIn page if route does not exist and user is not authenticated */}
      <Route component={Home} />
    </Switch>
  );
}
