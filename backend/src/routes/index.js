import React from "react";
import { Switch } from "react-router-dom";
import Route from "./Route";
import AcceptedLeads from "../pages/AcceptedLeads";
import Dashboard from "../pages/Dashboard";
import RejectedLeads from "../pages/RejectedLeads";
import CompletedLeads from "../pages/CompletedLeads";
import ReferredLeads from "../pages/ReferredLeads";
import Workspace from "../pages/Workspace";
import Bookings from "../pages/Bookings";
import Discounts from "../pages/Discounts";
import Payments from "../pages/Payments";
import Ratings from "../pages/Ratings";
import Plans from "../pages/Plans";
import Settings from "../pages/Settings";
import Profile from "../pages/Profile";


export default function Routes() {
  return (
    <Switch>
      <Route path="/AcceptedLeads" component={AcceptedLeads} isPrivate />
      <Route path="/Dashboard" component={Dashboard} isPrivate />
      <Route path="/RejectedLeads" component={RejectedLeads} isPrivate />
      <Route path="/CompletedLeads" component={CompletedLeads} isPrivate />
      <Route path="/ReferredLeads" component={ReferredLeads} isPrivate />
      <Route path="/Workspace" component={Workspace} isPrivate />
      <Route path="/Bookings" component={Bookings} isPrivate />
      <Route path="/Discounts" component={Discounts} isPrivate />
      <Route path="/Payments" component={Payments} isPrivate />
      <Route path="/Ratings" component={Ratings} isPrivate />
      <Route path="/Plans" component={Plans} isPrivate />
      <Route path="/Settings" component={Settings} isPrivate />
      <Route path="/Profile" component={Profile} isPrivate />
      
    </Switch>
  );
}
