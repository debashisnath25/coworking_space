import React, { Component } from 'react';
import './profile.css'



export default class ProfileMailSetting extends Component {
    render() {
        return (
            <>
                <div>
                <div className="card " style={{bbooking: '1px solid #7c1ab5'}}>
                    <div className="card-header cardhdd">
                    <h5 className="box-title" style={{color: '#fff'}}>CUSTOMER EMAIL NOTIFICATIONS</h5>
                    </div>
                    <div className="card-body">
                    <div className="ex-box">
                        <div className="media">
                        <div className="media-body" style={{textAlign:'left'}}>
                            <h5 className="mt-0" style={{color: '#0463a7'}}>Booking Confirmation</h5> Sent to customer after successful Booking placement to acknowledge its receipt. This email contains information about Booking details, billing, and Booking status.
                        </div>
                        <label className="ui-switch switch-solid"><input type="checkbox" defaultChecked /><span />Enabled</label>
                        </div>
                    </div>
                    <hr className="my-4" />
                    <div className="ex-box">
                        <div className="media">
                        <div className="media-body"  style={{textAlign:'left'}}>
                            <h5 className="mt-0" style={{color: '#0463a7'}}>Booking Status Changed</h5> Sent on the Booking's status change to inform the customer about the progress in Booking fulfillment.
                        </div>
                        <label className="ui-switch switch-solid"><input type="checkbox" defaultChecked /><span />Enabled</label>
                        </div>
                    </div>
                    </div>
                </div>
                <div className="card " style={{bbooking: '1px solid #7c1ab5'}}>
                    <div className="card-header cardhdd">
                    <h5 className="box-title" style={{color: '#fff'}}>ADMIN NOTIFICATIONS</h5>
                    </div>
                    <div className="card-body">
                    <div className="ex-box">
                        <div className="media">
                        <div className="media-body" style={{textAlign:'left'}}>
                            <h5 className="mt-0" style={{color: '#0463a7'}}>New Booking Placed</h5> Sent to admin when an Booking is placed. This email contains information about Booking details, Customer information and billing.
                        </div>
                        <label className="ui-switch switch-solid"><input type="checkbox" defaultChecked /><span />Enabled</label>
                        </div>
                    </div>
                    <hr className="my-4" />
                    <div className="ex-box">
                        <div className="media">
                        <div className="media-body" style={{textAlign:'left'}}>
                            <h5 className="mt-0" style={{color: '#0463a7'}}>Weekly Stats Report</h5> Sent each Monday to provide a brief overview of store performance in the past 7 days and help build a plan for the upcoming week.
                        </div>
                        <label className="ui-switch switch-solid"><input type="checkbox" defaultChecked /><span />Enabled</label>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

            </>
        )
    }

}