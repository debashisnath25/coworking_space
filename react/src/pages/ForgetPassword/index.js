import React, { Component } from 'react';
import './style.css';

export default class ForgetPassword extends Component {
  constructor(props) {
    super(props);
    this.state = {
      mainStatus: "",
      status: "hide_koro"
    }
  }
  state= this.state;

  changeStatus = () =>{
    this.setState({
      mainStatus : "main_hide",
      status : "show_koro"
    });
  }
  render() {
    const {mainStatus, status} = this.state;
    return (
      <div className="bg-w" style={{ paddingTop: 5}}>
        <div className="container">
          <div className="row mt-4">
            <div className="col-12 text-center mt-5">
              <ul className="nav d-flex log-tab" role="tablist">
                <li className="nav-item text-center" style={{ fontSize: 35, color: '#3fca89' }}>
                  <b>Password Recovery</b>
                </li>
              </ul>
            </div>
          </div>
          <div className="row justify-content-end">
            <div className="col-lg-3" />
            <div className="col-lg-6 mb-4 mt-4" style={{ border: '1px solid #ccc', height: "auto", backgroundColor: '#fff' }}>
              <div className="tab-content">
                <div role="tabpanel" className="tab-pane fade in active show" id="register">
                  <form className="custom-form" id="registerform" method="post" >
                    <div className="row">
                      <div className={"col-12 mt-4 "+mainStatus}>
                        <span className="fa fa-envelope" />
                        <input type="email" className="form-control" placeholder="Enter Email" id="email2" />
                      </div>
                      <div className={"col-4 mb-3 "+mainStatus}>
                        <button type="button" className="btn btn-one btn-anim w-100" id="submit-login" name="submit-login" onClick={()=>this.changeStatus()}>
                          Continue</button>
                      </div>
                      <div className={"col-12 mt-4 "+status}>
                        <span className="fa fa-lock" />
                        <input type="otp" className="form-control" placeholder="Enter OTP" id="otp" />
                      </div>
                      <div className={"col-12 "+status}>
                        <span className="fa fa-lock" />
                        <input type="password" className="form-control" placeholder="New Password" id="password" />
                      </div>
                      <div className={"col-12 "+status}>
                        <span className="fa fa-lock" />
                        <input type="password" className="form-control" placeholder="Confirm Password" id="c-password" />
                      </div>
                      <div className={"col-4 mb-3 "+status}>
                        <button type="submit" className="btn btn-one btn-anim w-100" id="submit-login" name="submit-login">
                          Update</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div className="col-lg-3" />
          </div>
        </div>
      </div>

    );
  }
}