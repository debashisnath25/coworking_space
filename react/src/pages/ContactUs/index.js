import React,{Component} from 'react';
import { HomeBanner,Location,SigninBanner,PopularList } from './../../components';


class ContactUs extends Component{
    render(){
      return(
        <>
         <div>
            {/* contact start*/}
            <section className="bg-w" style={{paddingTop: '100px'}}>
                <div className="container">
                <div className="row">
                    <div className=" col-12">
                    <ul className="banner-link ">
                        <li>
                        <a href="index.php">Home
                        </a>
                        </li>
                        <li>
                        <span className="active">Contact Us
                        </span>
                        </li>
                    </ul>
                    </div>
                </div>
                <div className="row">
                    <div className="col-12">
                    <div className="contact-box mb-30">
                        <div className="d-block d-xl-flex">
                        <div className="contact-left">
                            <h4 className="mb-4">get in touch</h4>
                            <form className="custom-form" action="#">
                            <div className="row">
                                <div className="col-md-6 col-12">
                                <span className="fa fa-user" />
                                <input type="text" id="name" className="form-control" placeholder="Enter Name" />
                                </div>
                                <div className="col-md-6 col-12">
                                <span className="fa fa-envelope" />
                                <input type="email" className="form-control" placeholder="Enter Email" name="Ented email" id="email" />
                                </div>
                                <div className="col-md-6 col-12">
                                <span className="fa fa-phone" />
                                <input type="text" id="phn" className="form-control" placeholder="Enter Name" />
                                </div>
                                <div className="col-md-6 col-12">
                                <span className="fa fa-edit" />
                                <input type="email" className="form-control" placeholder="Enter Email" name="Ented email" id="subject" />
                                </div>
                                <div className="col-12">
                                <span className="fa fa-edit" />
                                <textarea rows={5} name="comment" className="form-control" placeholder="Your Message" id="comment" defaultValue={""} />
                                </div>
                                <div className="col-12">
                                <button type="submit" className="btn btn-one btn-anim" id="submit" name="submit">
                                    send message</button>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div className="contact-right">
                            <h4 className="mb-4">contact info</h4>
                            <p>Lorem ipsum dolor sit amet, consec tetu adip et cin elit. Aenean commodo ligula eget dol.
                            Aenu sociis natoque partu nte nasc etur onec quam felis. Deserunt minim incididunt in
                            magna enim.</p>
                            <ul className="contact-info mt-4">
                            <li>
                                <i className="fa fa-phone" />
                                123-456-7890, 0123-456-789
                            </li>
                            <li>
                                <i className="fa fa-envelope" />
                                Support@company.com
                            </li>
                            <li>
                                <i className="fa fa-map-marker-alt" />
                                Consectetur 241, sed Ac-1252, UK
                            </li>
                            </ul>
                            <div className="socials contact-social">
                            <a href="#">
                                <i className="fab fa-facebook-f" />
                            </a>
                            <a href="#">
                                <i className="fab fa-google-plus-g" />
                            </a>
                            <a href="#">
                                <i className="fab fa-instagram" />
                            </a>
                            <a href="#">
                                <i className="fab fa-linkedin-in" />
                            </a>
                            <a href="#">
                                <i className="fab fa-twitter" />
                            </a>
                            <a href="#">
                                <i className="fab fa-vine" />
                            </a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </section>
            {/* contact end */}
        </div>
        </>
      );
    }
}

export default ContactUs;
