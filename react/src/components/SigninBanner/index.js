import React,{ Component} from 'react';


class SigninBanner extends Component{
    render(){
        return(
            <>
                <section className="cta-one tri-bg-w text-lg-left text-center">
                    <div className="container">
                        <div className="row align-items-center">
                        <div className="col-lg-6 my-lg-0 my-5 py-lg-0 py-5">
                            <div className="cta-content">
                            <h3>Search, Explore, Book, Manage
                            </h3>
                            <p>Get access to inspiring work cafes and coworking spaces. We are here to provide you with work optimised spaces, high-speed reliable internet, discounted F&amp;B - without any rent! 
                            </p>
                            <a href="post_requirement.php" className="btn btn-two btn-anim mt-2">
                                Enquiry Now
                            </a>
                            </div>
                        </div>
                        <div className="col-lg-6 d-lg-block d-none">
                            <div className="cta-img mt-4">
                            <img src="img/cta-bg.png" alt="image" />
                            </div>
                        </div>
                        </div>
                    </div>
                </section>
            </>
        )
    }
}

export default SigninBanner;