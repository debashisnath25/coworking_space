import React, { Component } from 'react';

export default class AddReview extends Component {
    render() {
        return (
            <div className="mb-5 abt-listing">
                <h5 className="title-sep3">
                    add review
                </h5>
                <form className="comment-form" id="commentform" method="post" action="#">
                    <div className="row">
                        <div className="col-md-6 col-12">
                            <span className="fa fa-user">
                            </span>
                            <input type="text" id="name" className="form-control" placeholder="Enter Name" />
                        </div>
                        <div className="col-md-6 col-12">
                            <span className="fa fa-envelope">
                            </span>
                            <input type="email" className="form-control" placeholder="Enter Email" name="Ented email" id="email" />
                        </div>
                        <div className="col-12">
                            <textarea rows={5} name="comment" className="form-control" placeholder="Your Message" id="comment" defaultValue={"                    "} />
                        </div>
                        <div className="col-12">
                            <button type="submit" className="btn btn-one btn-anim" id="submit" name="submit">
                                <i className="fa fa-paper-plane">
                                </i> submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        );
    }
}