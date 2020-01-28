import React, { Component } from 'react';
import './style.css';
import InfiniteCarousel from 'react-leaf-carousel';
import SilderPage from './Slider';
import ListingTitilePage from './ListingTitle';
import ListingDescriptionPage from './ListingDescription';
import FacilityPage from './Facility';
import RatingsPage from './Ratings';
import ReviewsPage from './Reviews';
import AddReviewPage from './AddReview';
import BusinessInfoPage from './BusinessInfo';
import MapPage from './Map';
import RecentlyAddedPage from './RecentlyAdded';


export default class ListingDetails extends Component {
    render() {
        return (
            <>
            <SilderPage />
            <div style={{ background: '#f8f8f8', paddingTop: 1 }}>
                <div className="container">
                    <h4 className="title-sep3 mb-20 mt-30">Home &gt; Co-working Space &gt;<span className="c-theme"> Details Page</span> </h4>
                    <div className="row">
                        <div className="col-lg-8 col-12">
                            <ListingTitilePage />
                            <ListingDescriptionPage />
                            <FacilityPage />
                            <RatingsPage />
                            <ReviewsPage />
                            <AddReviewPage />
                        </div>
                        <div className="col-lg-4 col-12">
                            <aside className="sidebar">
                                <div className="widget">
                                    <div className="booking-form">
                                        <div className="row">
                                        <div className="col-12">
                                            <a href="/enquiry" className="btn btn-one btn-anim w-100 mt-2">Request a Callback</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <BusinessInfoPage />
                                <MapPage />
                                <RecentlyAddedPage />
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            </>
        );
    }
}

