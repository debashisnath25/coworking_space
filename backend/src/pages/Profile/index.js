import React, { Component } from "react";
import ProfileGeneral from './profileGeneralSetting';
import ProfilePayment from './profilePaymentSetting';
import ProfileMail from './profileMailSetting';
import './profile.css'
import { BreadCrumbs } from './../../components';

import { Helmet } from 'react-helmet';



export default class Profile extends Component {
    constructor(props) {
        super(props);
        this.state = {
            PageName: "General",
            
        }
    }
    changePage(data){
        this.setState({
            PageName: data
        })
    }

    render() {
        const {PageName} = this.state;
      return (
        <>
          <Helmet>
            <title>Bundesk | AcceptedLeads </title>
          </Helmet>
  
          <div class="page-content fade-in-up">
            <div className="page-heading" style={{paddingRight: 17}}>
                <BreadCrumbs>
                    <h1 className="page-title" style={{ marginLeft: "-17px" }}>
                        <a href="/dashboard">Dashboard </a> > <a href="/#">Profile </a> >
                        {
                            PageName === "General" 
                            ? " General Settings"
                            : ""
                        }
                        {
                            PageName === "Payment" 
                            ? " Payment Settings"
                            : ""
                        }
                        {
                            PageName === "Mail" 
                            ? " Mail Settings"
                            : ""
                        }
                    </h1>
                </BreadCrumbs>
                <button className="btn btn-primary" data-toggle="modal" data-target="#add_Workspace" style={{backgroundColor: '#7613a7', border: '1px solid #7613a7'}}>
                <span className="btn-icon">
                    <i className="ti-star">
                    </i>
                    Add Another Workspace
                </span>
                </button>
            </div>
            <div className="row"> 
                <div className="col-lg-3">
                    <div className="card" style={{border: '1px solid #7c1ab5'}}>
                    <div className="card-body">
                        <div className="card-fullwidth-block px-3 mt-2">
                        <div className="nav nav-pills flex-column faq-tabs" role="tablist">
                            <span className={ PageName === "General" ? "nav-link media-new media align-items-center active" : " nav-link media-new media align-items-center"} onClick={() => this.changePage("General")}>
                            <i className="fa fa-cog text-muted font-26 mr-3">
                            </i>
                            <div className="media-body">
                                <div className="mt-1" style={{fontSize: 12,textAlign:'left'}}><h6>General Settings</h6>
                                </div>
                            </div>
                            </span>
                            <span className={ PageName === "Payment" ? "nav-link media-new media align-items-center active" : " nav-link media-new media align-items-center"} onClick={() => this.changePage("Payment")} >
                            <i className="fa fa-credit-card text-muted font-26 mr-3">
                            </i>
                            <div className="media-body">
                                <div className="mt-1" style={{fontSize: 12,textAlign:'left'}}><h6>Payment Settings</h6>
                                </div>
                            </div>
                            </span>
                            <span className={ PageName === "Mail" ? "nav-link media-new media align-items-center active" : " nav-link media-new media align-items-center"} onClick={() => this.changePage("Mail")} >
                            <i className="fa fa-envelope text-muted font-26 mr-3">
                            </i>
                            <div className="media-body">
                                <div className="mt-1" style={{fontSize: 12,textAlign:'left'}}><h6>Mail Settings</h6>
                                </div>
                            </div>
                            </span>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div className="col-lg-9">
                    {
                        PageName === "General" 
                        ? <ProfileGeneral/> 
                        : ""
                    }
                    {
                        PageName === "Payment" 
                        ? <ProfilePayment/>
                        : ""
                    }
                     {
                        PageName === "Mail" 
                        ?  <ProfileMail/>
                        : ""
                    }
                </div>
                
          </div>
          </div>
        </>
      );
    }
  }