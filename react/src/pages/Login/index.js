import React, { Component } from 'react';

export default class Login extends Component {
  render() {
    return (
      <div className="bg-w" style={{ paddingTop: 10, paddingBottom: 30 }}>
        <div className="container">
          <div className="row mt-4">
            <div className="col-12 text-center mt-5">
              <ul className="nav d-flex log-tab" role="tablist">
                <li className="nav-item text-center" style={{ fontSize: 35, color: '#3fca89' }}>
                  <b>Login</b>
                </li>
              </ul>
            </div>
          </div>
          <div className="row justify-content-end">
            <div className="col-lg-3">
            </div>
            <div className="col-lg-6 mt-4 custompadding100" style={{ border: '1px solid #ccc', height: 209, backgroundColor: '#fff', paddingBottom: 10 }}>
              <div className="tab-content">
                <div role="tabpanel" className="tab-pane fade in active show" id="login">
                  <form className="custom-form" id="loginform" method="post" action="#">
                    <div className="row">
                      <div className="col-12 mt-4">
                        <span className="fa fa-user" />
                        <input type="text" id="name1" className="form-control" placeholder="Enter Name" />
                      </div>
                      <div className="col-12">
                        <span className="fa fa-lock" />
                        <input type="password" className="form-control" placeholder="Password" id="email" />
                      </div>
                      <div className="col-4">
                        <button type="submit" className="btn btn-one btn-anim w-100" id="submit-login" name="submit-login">
                          login</button>
                      </div>
                      <div className="col-4 text-right mt-2">
                        <a href="/forget_password" className="paswd" style={{fontSize: "16px"}}> forgot password ?</a>
                        <span className="ml-3">|</span>
                      </div>
                      <div className="col-4 mt-2" style={{ paddingLeft: 3 }}>
                        <a href="/register" className="paswd" style={{fontSize: "16px"}}> Create your account</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div className="col-lg-3">
            </div>
          </div>
        </div>
      </div>
    );
  }
}