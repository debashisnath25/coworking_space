import React, { Component } from 'react';


export default class ContactUs extends Component {
  render() {
    return (
      <>
        <section className="bg-w" style={{ paddingTop: '100px' }}>
          <div className="container">
            <div>
              <h4 className="title-sep3 mb-20 mt-30">Home &gt; <span className="c-theme">Contact Us</span></h4>
              <div className="row">
                <div className="col-12">
                  <div className="contact-box mb-30">
                    <div className="d-block d-xl-flex">
                      <div className="contact-left">
                        <h4 className="title-sep3 mb-4">get in touch</h4>
                        <form className="custom-form" action="#">
                          <div className="row">
                            <div className="col-md-12 col-12">
                              <span className="fa fa-user" />
                              <input type="text" id="name" className="form-control" placeholder="Enter Fullname" />
                            </div>
                            <div className="col-md-6 col-12">
                              <span className="fa fa-phone" />
                              <input type="text" id="phn" className="form-control" placeholder="Enter Number" />
                            </div>
                            <div className="col-md-6 col-12">
                              <span className="fa fa-envelope" />
                              <input type="email" className="form-control" placeholder="Enter Email" name="Ented email" id="email" />
                            </div>
                            <div className="col-12">
                              <span className="fa fa-edit" />
                              <textarea rows={5} name="comment" className="form-control" placeholder="Your Message" id="comment" defaultValue={""} />
                            </div>
                            <div className="col-12">
                              <button type="submit" className="btn btn-one btn-anim w-100" id="submit2" name="submit2">
                                Send Message</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div className="contact-right">
                        <h4 className="mb-4 title-sep3">Contact info</h4>
                        <p>Lorem ipsum dolor sit amet, consec tetu adip et cin elit. Aenean commodo ligula eget dol.
                          Aenu sociis natoque partu nte nasc etur onec quam felis. Deserunt minim incididunt in magna enim.</p>
                        <ul className="contact-info mt-4">
                          <li style={{marginBottom: "15px", fontSize: "16px"}}>
                            <i className="fa fa-phone" />
                            +91 9876543210
                          </li>
                          <li style={{marginBottom: "15px", fontSize: "16px"}}>
                            <i className="fa fa-envelope" />
                            support@bundesk.com
                          </li>
                          <li style={{fontSize: "16px"}}>
                            <i className="fa fa-map-marker-alt" />
                            Hauz Khas New Delhi, Delhi 110016
                        </li>
                        </ul>
                        <div className="socials contact-social text-center">
                          <a href="#/">
                            <i className="fab fa-facebook-f" style={{ fontSize: 24 }} />
                          </a>
                          <a href="#/">
                            <i className="fab fa-google-plus-g" style={{ fontSize: 24 }} />
                          </a>
                          <a href="#/">
                            <i className="fab fa-instagram" style={{ fontSize: 24 }} />
                          </a>
                          <a href="#/">
                            <i className="fab fa-linkedin-in" style={{ fontSize: 24 }} />
                          </a>
                          <a href="#/">
                            <i className="fab fa-twitter" style={{ fontSize: 24 }} />
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </>
    );
  }
}

