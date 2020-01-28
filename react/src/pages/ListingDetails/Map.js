import React, { Component } from 'react';

export default class Map extends Component {
    render() {
        return (
            <div className="widget abt-listing">
                <div className="map map-sidebar">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7440.846173287218!2d79.04235307465463!3d21.175345443676612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c1b120bcbf1d%3A0x78b11644658dbff9!2sKT%20Nagar%2C%20Nagpur%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1573468308141!5m2!1sen!2sin" width="auto" height="auto" title="Location" frameBorder={0} style={{ border: 0 }} allowFullScreen />
                </div>
            </div>

        );
    }
}