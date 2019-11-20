import React from "react";
import { Switch } from "react-router-dom";
import Route from "./Route";
import Home from '../pages/Home';
import Listing from '../pages/Listing';
import ListingDetails from '../pages/ListingDetails';
import AboutUs from '../pages/AboutUs';
import Pricing from '../pages/Pricing';
import ContactUs from '../pages/ContactUs'
import PostRequirement from '../pages/PostRequirement'

import SignIn from "../pages/SignIn";
import SignUp from "../pages/SignUp";

import Dashboard from "../pages/Dashboard";
import Profile from "../pages/Profile";

export default function Routes() {
  return (
    <Switch>
      <Route path="/" exact component={SignIn} />
      <Route path="/home" exact component={Home} />
      <Route path="/listing" exact component={Listing} />
      <Route path="/listingDetails" exact component={ListingDetails} />
      <Route path="/AboutUs" exact component={AboutUs} />
      <Route path="/Pricing" exact component={Pricing} />
      <Route path="/ContactUs" exact component={ContactUs} />
      <Route path="/PostRequirement" exact component={PostRequirement} />
      <Route path="/SignIn" component={SignIn} />
      <Route path="/register" component={SignUp} />

      <Route path="/dashboard" component={Dashboard} isPrivate />
      <Route path="/profile" component={Profile} isPrivate />

      {/* redirect user to SignIn page if route does not exist and user is not authenticated */}
      <Route component={Home} />
    </Switch>
  );
}