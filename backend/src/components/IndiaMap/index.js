import React, { Component } from 'react';
import GoogleMapReact from 'google-map-react';
import './jquery-jvectormap.css';

const AnyReactComponent = ({ text }) => <div>{text}</div>;

class IndiaMap extends Component {
  static defaultProps = {
    center: {
      lat: 20.5937,
      lng: 78.9629
    },
    zoom: 5
  };

  render() {
    return (
      // Important! Always set the container height explicitly
      <div style={{ height: '100%', width: '100%' }}>
        <GoogleMapReact
          bootstrapURLKeys={{ key: "AIzaSyBVEqoCsKgUMmAcDVX9OAwVMDewLI6yOAQ", language:"en" }}
          defaultCenter={this.props.center}
          defaultZoom={this.props.zoom}
        >
          <AnyReactComponent
            lat={22.5726}
            lng={88.3639}
          />

        </GoogleMapReact>
      </div>
    );
  }
}

export default IndiaMap;
