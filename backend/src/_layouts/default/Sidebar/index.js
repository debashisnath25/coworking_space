import React,{Component} from 'react';
import PerfectScrollbar from 'react-perfect-scrollbar';
import 'metismenu';
import './sidebar.css';
import RecWhiteLogo from './rect_white.png';
import FavWhiteLogo from './fav_white.png';

const currentPage = window.location.pathname;
const myArray = currentPage.split('/');

class Sidebar extends Component{
  render(){
    return(
      <>
        <PerfectScrollbar className="page-sidebar custom-scroll">
          <div
            className="sidebar-header center text-center" style={{background: "#3a1f47",margin: 10,borderRadius: 8,padding: "5px 5px"}}>
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
              <span>DASHBOARD</span>
            </li>
            <li className={(myArray.indexOf("dashboard") > -1) ? "mm-active" : ""}>
              <a href="/dashboard">
                <i className="sidebar-item-icon ft-home"></i>
                <span className="nav-label">Dashboard</span>
              </a>
            </li>
            <li className="heading">
              <span>YOUR BUSINESS</span>
            </li>
            <li className={(myArray.indexOf("products") > -1) ? "mm-active" : ""}>
              <a href="/products">
                <i className="sidebar-item-icon ft-gift"></i>
                <span className="nav-label">Products</span><i className=
            "arrow la la-angle-right" />
              </a>
              <ul className="nav-2-level">
                <li className={(myArray.indexOf("generalOrders") > -1) ? "mm-activesada" : ""}>
                  <a href="/generalOrders"><span className="nav-label extra_cls"> Add Products </span></a>	
                </li>
                <li className={(myArray.indexOf("exceptionOrders") > -1) ? "mm-activesada" : ""}>
                  <a href="/exceptionOrders"><span className="nav-label extra_cls">Catelog</span> </a>
                </li>
                <li className={(myArray.indexOf("exceptionOrders") > -1) ? "mm-activesada" : ""}>
                  <a href="/exceptionOrders"><span className="nav-label extra_cls">Categories</span> </a>
                </li>
            
              </ul>
            </li>
            <li className={(myArray.indexOf("generalOrders") > -1) ? "mm-active" : "" || (myArray.indexOf("exceptionOrders") > -1) ? "mm-active" : "" }><a href="#/"><i className="sidebar-item-icon ft-layers" /><span className="nav-label">Orders</span><i className=
            "arrow la la-angle-right" /></a>
              <ul className="nav-2-level">
                <li className={(myArray.indexOf("generalOrders") > -1) ? "mm-activesada" : ""}>
                  <a href="/generalOrders"><span className="nav-label extra_cls"> General Orders </span></a>	
                </li>
                <li className={(myArray.indexOf("exceptionOrders") > -1) ? "mm-activesada" : ""}>
                  <a href="/exceptionOrders"><span className="nav-label extra_cls"> Exception Orders</span> </a>
                </li>
            
              </ul>
            </li>

            <li className={(myArray.indexOf("discount_coupon") > -1) ? "mm-active" : ""}>
              <a href="/discount_coupon">
                <i className="sidebar-item-icon ft-tag"></i>
                <span className="nav-label">Discounts</span>
              </a>
            </li>
            <li className="">
              <a href="customer_listing.php">
                <i className="sidebar-item-icon ft-users"></i>
                <span className="nav-label">Customers/ Followers</span>
              </a>
            </li>
            <li className="heading">
              <span>YOUR BUSINESS</span>
            </li>
            <li className={(myArray.indexOf("reviewsAndComplaints") > -1) ? "mm-active" : ""}>
              <a href="/reviewsAndComplaints">
                <i className="sidebar-item-icon ft-star"></i>
                <span className="nav-label">Reviews &amp; Complaints</span>
              </a>
            </li>

            <li className="heading">
              <span>VENDOR TOOLS</span>
            </li>
            <li className="">
              <a href="reports.php">
                <i className="sidebar-item-icon ft-target"></i>
                <span className="nav-label">Report</span>
              </a>
            </li>
            <li className="heading">
              <span>ACCOUNT &amp; BILLING </span>
            </li>
            <li className={(myArray.indexOf("newsletters") > -1) ? "mm-active" : ""}>
              <a href="/newsletters">
                <i className="sidebar-item-icon ft-mail"></i>
                <span className="nav-label">Plans &amp; Subscription</span>
              </a>
            </li>
         
            <li className={(myArray.indexOf("signupForm") > -1) ? "mm-active" : ""}>
              <a href="/signupForm">
                <i className="sidebar-item-icon ft-users"></i>
                <span className="nav-label">Profile</span>
              </a>
            </li>
            <li className="">
              <a href="settings.php">
                <i className="sidebar-item-icon ft-sliders"></i>
                <span className="nav-label">Settings</span>
              </a>
            </li>
            <li className="">
              <a href="/staffs">
                <i className="sidebar-item-icon ft-users"></i>
                <span className="nav-label">Staffs</span>
              </a>
            </li>
          </ul>
        </PerfectScrollbar>
      </>
    );
  }
}
export default Sidebar;
