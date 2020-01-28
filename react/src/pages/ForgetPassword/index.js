import React, { Component } from 'react';

export default class ForgetPassword extends Component {
  render() {
    return (
      <div className="bg-w" style={{ paddingTop: 40 }}>
        <div className="container">
          <div className="row mt-4">
            <div className="col-12 text-center mt-5">
              <ul className="nav d-flex log-tab" role="tablist">
                <li className="nav-item text-center" style={{ fontSize: 35, color: '#009e9e' }}>
                  <b>Password Recovery</b>
                </li>
              </ul>
            </div>
          </div>
          <div className="row justify-content-end">
            <div className="col-lg-3" />
            <div className="col-lg-6 mb-4 mt-4" style={{ border: '1px solid #ccc', height: 375, backgroundColor: '#fff' }}>
              <div className="tab-content">
                <div role="tabpanel" className="tab-pane fade in active show" id="register">
                  <form className="custom-form" id="registerform" method="post" action="#">
                    <div className="row">
                      <div className="col-12 mt-4">
                        <span className="fa fa-envelope" />
                        <input type="email" className="form-control" placeholder="Enter Email" id="email2" />
                      </div>
                      <div className="col-4 mb-3">
                        <button type="submit" className="btn btn-one btn-anim w-100" id="submit-login" name="submit-login">
                          Continue</button>
                      </div>
                      <div className="col-12">
                        <span className="fa fa-lock" />
                        <input type="otp" className="form-control" placeholder="Enter OTP" id="otp" />
                      </div>
                      <div className="col-12">
                        <span className="fa fa-lock" />
                        <input type="password" className="form-control" placeholder="New Password" id="password" />
                      </div>
                      <div className="col-12">
                        <span className="fa fa-lock" />
                        <input type="password" className="form-control" placeholder="Confirm Password" id="c-password" />
                      </div>
                      <div className="col-4">
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