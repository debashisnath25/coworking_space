import React,{ Component} from 'react';

class ListingSideBar extends Component{
    render(){
        return(
            <>
                <div className="col-lg-4 col-12 ">
                <aside className="sidebar">
                    <h4 className="title-sep2 mb-30">search filters
                    </h4>
                    <div className="widget-listing abt-listing">
                    <div className="filter-box mb-30">
                        <form action="#" method="post">
                        <div className="row">
                            <div className="col-12">
                            <div className="input-wrap">
                                <select className="form-control custom-select" id="service2">
                                <option>all categories
                                </option>
                                <option>Meeting Room
                                </option>
                                <option>Coworking Space
                                </option>
                                <option>Private Office
                                </option>
                                <option>Training Room
                                </option>
                                <option>Business Center
                                </option>
                                <option>Coworking Cafes
                                </option>
                                </select>
                            </div>
                            </div>
                            <div className="col-12">
                            <div className="input-wrap">
                                <i className="fa fa-crosshairs">
                                </i>
                                <input type="text" className="form-control" placeholder="location" />
                            </div>
                            <hr />
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-12">
                            <h5 className="mb-15">Price:
                                <i className="fas fa-rupee-sign">
                                </i> 
                                <span className="range-value">1000
                                </span>
                            </h5>
                            <div className="input-wrap range-box">
                                <div className="range-slider">
                                <input type="range" min={1} max={10000} defaultValue={1000} className="range-track" id="myRange" />
                                </div>
                            </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div className="filter-checklist">
                        <div className="row">
                        <div className="col-12 mb-30">
                            <h5 className="mb-15">facilities
                            </h5>
                            <div className="row minus-pad">
                            <div className="col-sm-6 col-12">
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id1" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id1">AC with backup
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id2" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id2">Free tea/Coffee
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id3" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id3">Car Parking*
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id4" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id4">Whiteboard
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id5" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id5">Speaker
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id6" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id6">Free WiFi
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id7" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id7">Meeting Room
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id8" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id8">Projector
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id9" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id9">Microphone
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id10" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id10">Night Shift
                                </label>
                                </div>
                            </div>
                            <div className="col-sm-6 col-12">
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id11" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id11">Cafeteria
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id12" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id12">Reception
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id13" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id13">Video Conference
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id14" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id14">Podium
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id15" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id15">Clean Toilets
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id16" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id16">Lounge
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id17" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id17">Mailing Address
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id18" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id18">Flipboard
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id19" defaultValue="value" />
                                <label className="set_font" htmlFor="checkbox_id19">24x7
                                </label>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div className="col-12 mb-30">
                            <h5 className="mb-15">capacity
                            </h5>
                            <div className="row minus-pad">
                            <div className="col-sm-6 col-12">
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id_capacity_1" defaultValue="value" />
                                <label htmlFor="checkbox_id_capacity_1">1-5
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id_capacity_2" defaultValue="value" />
                                <label htmlFor="checkbox_id_capacity_2">5-15
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id_capacity_3" defaultValue="value" />
                                <label htmlFor="checkbox_id_capacity_3">15-30
                                </label>
                                </div>
                            </div>
                            <div className="col-sm-6 col-12">
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id_capacity_4" defaultValue="value" />
                                <label htmlFor="checkbox_id_capacity_4">30-50
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id_capacity_5" defaultValue="value" />
                                <label htmlFor="checkbox_id_capacity_5">50-100
                                </label>
                                </div>
                                <div className="w-100 mb-2">
                                <input type="checkbox" name="checkbox" id="checkbox_id_capacity_6" defaultValue="value" />
                                <label htmlFor="checkbox_id_capacity_6">100+
                                </label>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div className="row">
                        <div className="col-12">
                        <button type="submit" className="btn btn-one btn-anim w-100">
                            update
                        </button>
                        </div>
                    </div>
                    </div>
                </aside>
                </div>
            </>
        )
    }
}

export default ListingSideBar;