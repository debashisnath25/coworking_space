import React, { Component } from 'react';

export default class ListingTitle extends Component {
    render() {
        return (
            <div className="listing-detail abt-listing">
                <h4>24X7 Luxurious and Premium 24 Seater Meeting Room in Mumbai</h4>
                <ul className="ctg-info centering justify-content-start">
                    <li>
                        <a href="#/">
                            <i className="fa fa-map-marker-alt mr-2">
                            </i>KT Nagar, Nagpur, Maharashtra
                        </a>
                    </li>
                    <li className="my-1">
                        <a href="#/">
                            <i className="fa fa-phone mr-2">
                            </i> 0123-456-789
                        </a>
                    </li>
                </ul>
            </div>

        );
    }
}