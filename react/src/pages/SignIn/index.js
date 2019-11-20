import React,{Component} from 'react';
import './signin.css';
import { HomeBanner,Location,SigninBanner,PopularList } from './../../components';


class SignIn extends Component{
    render(){
      return(
        <>
         {/* login start*/}
          <div className="bg-w sp-100" style={{paddingTop: '100px'}}>
            <div className="container">
              <div className="row">
                <div className=" col-12">
                  <ul className="banner-link " style={{marginLeft: '-16px'}}>
                    <li>
                      <a href="index.php">Home
                      </a>
                    </li>
                    <li>
                      <span className="active">Login
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
              <div className="row justify-content-end">
                <div className="col-lg-6 login-section" />
                <div className="col-lg-6">
                  <ul className="nav d-flex log-tab mb-5" role="tablist">
                    <li className="nav-item">
                      <a className="nav-link active" href="#login" role="tab" data-toggle="tab">login</a>
                    </li>
                    <li className="nav-item">
                      <a className="nav-link" href="#register" role="tab" data-toggle="tab">register</a>
                    </li>
                  </ul>
                  {/* Tab panes */}
                  <div className="tab-content">
                    <div role="tabpanel" className="tab-pane fade in active show" id="login">
                      <form className="custom-form" id="loginform" method="post" action="#">
                        <div className="row">
                          <div className="col-12">
                            <span className="fa fa-user" />
                            <input type="text" id="name1" className="form-control" placeholder="Enter Name" />
                          </div>
                          <div className="col-12">
                            <span className="fa fa-lock" />
                            <input type="password" className="form-control" placeholder="Password" id="email" />
                          </div>
                          <div className="col-6">
                            <input type="checkbox" name="checkbox" id="checkbox_id1" defaultValue="value" />
                            <label htmlFor="checkbox_id1">remember me</label>
                          </div>
                          <div className="col-6 text-right">
                            <a href="#" className="paswd"> forgot password ?</a>
                          </div>
                          <div className="col-12 mt-4">
                            <button type="submit" className="btn btn-one btn-anim w-100" id="submit-login" name="submit-login">
                              login</button>
                          </div>
                        </div>
                        <div className="seprator mt-4 mb-3">
                          <span>or</span>
                        </div>
                        <div className="signin-socials">
                          <p className="text-capitalize mb-0">sign in with...</p>
                          <div className="row">
                            <div className="col-sm-6 col-12 mt-4">
                              <a href="#" className="btn btn-anim fb w-100">
                                <i className="fab fa-facebook-f" />
                                facebook</a>
                            </div>
                            <div className="col-sm-6 col-12 mt-4">
                              <a href="#" className="btn btn-anim google w-100">
                                <i className="fab fa-google-plus-g" />
                                google</a>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div role="tabpanel" className="tab-pane fade" id="register">
                      <form className="custom-form" id="registerform" method="post" action="#">
                        <div className="row">
                          <div className="col-12">
                            <span className="fa fa-user" />
                            <input type="text" id="name2" className="form-control" placeholder="Enter Name" />
                          </div>
                          <div className="col-12">
                            <span className="fa fa-envelope" />
                            <input type="email" className="form-control" placeholder="Enter Email" id="email2" />
                          </div>
                          <div className="col-12">
                            <span className="fa fa-lock" />
                            <input type="password" className="form-control" placeholder="Password" id="password" />
                          </div>
                          <div className="col-12">
                            <span className="fa fa-lock" />
                            <input type="password" className="form-control" placeholder="Confirm Password" id="c-password" />
                          </div>
                          <div className="col-6">
                            <input type="checkbox" name="checkbox" id="checkbox_id" defaultValue="value" />
                            <label htmlFor="checkbox_id">remember me</label>
                          </div>
                          <div className="col-6 text-right">
                            <a href="#" className="paswd"> forgot password ?</a>
                          </div>
                          <div className="col-12 mt-4">
                            <button type="submit" className="btn btn-one btn-anim w-100" id="submit" name="submit">
                              register</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {/* login end */}
        </>
      );
    }
}

export default SignIn;

