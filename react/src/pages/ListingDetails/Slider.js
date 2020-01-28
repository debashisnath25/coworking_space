import React, { Component } from 'react';

export default class Slider extends Component {
    render() {
        return (
            <div className="abt-listing">
                <div id="blog-slider2" className="carousel blog-slider slide mb-4" data-ride="carousel">
                    <div className="carousel-inner">
                        <div className="carousel-item active">
                            <img src="img/sala-900x600.png" style={{ width: "100%", height: "400px" }} alt="listing" />
                        </div>
                        <div className="carousel-item">
                            <img src="img/944390254ed4fd2b9fb33ad76b37d9a1.png" style={{ width: "100%", height: "400px" }} alt="listing" />
                        </div>
                        <div className="carousel-item">
                            <img src="img/coworking.jpg" style={{ width: "100%", height: "400px" }} alt="listing" />
                        </div>
                    </div>
                    <div className="carousel-nav">
                        <a className="carousel-control-prev" href="#blog-slider2" data-slide="prev">
                            <i className="fa fa-angle-left" />
                        </a>
                        <a className="carousel-control-next" href="#blog-slider2" data-slide="next">
                            <i className="fa fa-angle-right" />
                        </a>
                    </div>
                    <ul className="carousel-indicators">
                        <li data-target="#blog-slider2" data-slide-to={0} className="active" />
                        <li data-target="#blog-slider2" data-slide-to={1} />
                        <li data-target="#blog-slider2" data-slide-to={2} />
                    </ul>
                </div>
            </div>
        );
    }
}

