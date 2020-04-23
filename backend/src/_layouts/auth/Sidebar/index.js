import React, { Component } from 'react';
import PerfectScrollbar from 'react-perfect-scrollbar';
import 'metismenu';
import './sidebar.css';
import RecWhiteLogo from './rect_white.png';
import FavWhiteLogo from './fav_white.png';


const currentPage = window.location.pathname;
const myArray = currentPage.split('/');


class Sidebar extends Component {
  render() { 
    return (
      <>
        <PerfectScrollbar className="page-sidebar custom-scroll">
          <div
            className="sidebar-header center text-center" style={{ background: "#3a1f47", margin: 10, borderRadius: 8, padding: "5px 5px" }}>
            <a className="sidebar-brand center text-center" href="/dashboard">
              <img src={RecWhiteLogo} alt="wanted7 logo" data-src={RecWhiteLogo} data-src-retina={RecWhiteLogo} height={47} />
            </a>
            <a className="sidebar-brand-mini" href="/dashboard">
              <img src={FavWhiteLogo} alt="mascot wanted7" data-src={FavWhiteLogo} data-src-retina={FavWhiteLogo} height={25}
              />
            </a>
          </div>
          <ul className="sidebar-menu metismenu">
              <li className="heading">
                <span>Leads</span>
              </li>
              <li className="dashboard">
                <a href="/#">
                  <i className="sidebar-item-icon ft-home"></i>
                  <span className="nav-label">Leads</span>
                </a>
              </li>
              <ul className="nav-2-level">
                  <li className="addproduct">
                    <a href="/ReferredLeads"><span className="nav-label extra_cls">Referred Leads</span></a>
                  </li>
                  <li className="product_listing">
                    <a href="/AcceptedLeads"><span className="nav-label extra_cls">AcceptedLeads</span> </a>
                  </li>
                  <li className="category">
                    <a href="/CompletedLeads"><span className="nav-label extra_cls">Completed Leads</span> </a>
                  </li>
                  <li className="category">
                    <a href="/RejectedLeads"><span className="nav-label extra_cls">Rejected Leads</span> </a>
                  </li>

                </ul>
              <li className="heading">
                <span>YOUR WORK SPACE</span>
              </li>
              <li className={(myArray.indexOf("Workspace") > -1) ? "mm-active" : ""}>
                <a href="/Workspace">
                  <i className="sidebar-item-icon ft-gift"></i>
                  <span className="nav-label">Work Space</span>
                </a>
              </li>
              <li className={(myArray.indexOf("Bookings") > -1) ? "mm-active" : ""}>
                <a href="/Bookings">
                  <i className="sidebar-item-icon ft-tag"></i>
                  <span className="nav-label">Bookings</span>
                </a>
              </li>
              <li className={(myArray.indexOf("Payments") > -1) ? "mm-active" : ""}>
                <a href="/Payments">
                  <i className="sidebar-item-icon ft-credit-card"></i>
                  <span className="nav-label">Payments</span>
                </a>
              </li>
              <li className={(myArray.indexOf("Discounts") > -1) ? "mm-active" : ""}>
                <a href="/Discounts">
                  <i className="sidebar-item-icon fas fa-tags"></i>
                  <span className="nav-label">Discounts</span>
                </a>
              </li>
              <li className={(myArray.indexOf("Ratings") > -1) ? "mm-active" : ""}>
                <a href="/Ratings">
                  <i className="sidebar-item-icon ft-star"></i>
                  <span className="nav-label">Ratings &amp; Reviews</span>
                </a>
              </li>
              <li className="heading">
                <span>ACCOUNT &amp; BILLING </span>
              </li>
              <li className={(myArray.indexOf("Plans") > -1) ? "mm-active" : ""}>
                <a href="/Plans">
                  <i className="sidebar-item-icon ft-mail"></i>
                  <span className="nav-label">Plans &amp; Subscription</span>
                </a>
              </li>
              <li className={(myArray.indexOf("Profile") > -1) ? "mm-active" : ""}>
                <a href="/Profile">
                  <i className="sidebar-item-icon ft-users"></i>
                  <span className="nav-label">Profile</span>
                </a>
              </li>
              <li className={(myArray.indexOf("Settings") > -1) ? "mm-active" : ""}>
                <a href="/Settings">
                  <i className="sidebar-item-icon ft-sliders"></i>
                  <span className="nav-label">Settings</span>
                </a>
              </li>
          </ul>
        </PerfectScrollbar>
      </>
    );
  }
}
export default Sidebar;
