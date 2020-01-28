import React, { Component } from 'react';

export default class BusinessInfo extends Component {
    render() {
        return (
            <div className="widget abt-listing">
                <h5 className="title-sep2">business info</h5>
                <ul className="contact-info mt-4">
                    <li>
                        <i className="fa fa-phone">
                        </i>
                        123-456-7890, 0123-456-789
                    </li>
                    <li>
                        <i className="fa fa-envelope">
                        </i>
                        Support@company.com
                    </li>
                    <li>
                        <i className="fa fa-map-marker-alt">
                        </i>
                        23/A Sahapur colony, New Alipore, India
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
        );
    }
}