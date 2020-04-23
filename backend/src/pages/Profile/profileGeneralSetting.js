import React, { Component } from 'react';
import './profile.css'
import GoogleMapReact from 'google-map-react';


export default class ProfileGeneralSetting extends Component {
    constructor(props) {
        super(props);
        this.state = {
            Edit: "hide",
            center: {
                lat: 59.95,
                lng: 30.33
              },
              zoom: 11
            
        }
    }
    stateChng = () => {
        if(this.state.Edit === 'hide')
        {
            this.setState({Edit : 'show'})
        }else{
            this.setState({Edit : 'hide'})
        }

    }
    render() {
        return (
            <>                      
                <div className="row">
                <div className="col-md-6">
                    <div className="card card-fullheight" style={{border: '1px solid #7c1ab5'}}>
                        <div className="card-body">
                            <button className="btn btn-primary btn-fix" onClick={this.stateChng} style={{float: 'right'}}><span className="btn-icon"><i className="ti-pencil"  />{this.state.Edit === 'hide'?"Edit":"Cancel Edit"}</span></button>
                            <h5 className="mb-4 articles-list-title" style={{float: 'left'}}>Workspace 1
                            </h5>
                            <div className="nav flex-column articles-list mb-3" style={{float: 'left',display:this.state.Edit === 'hide'?"block":"none"}}>
                                <a className="nav-link d-flex align-items-center" href="/#|">
                                    <b>Biltmore Hotel And Suites Santa Clara Hotel</b>
                                </a>
                                <a className="nav-link d-flex align-items-center" href="/#|">
                                    2151 Laurewood Road
                                </a>
                                <a className="nav-link d-flex align-items-center" href="/#|">
                                    Santa Clara,CA 95054-2754
                                </a>
                                <a className="nav-link d-flex align-items-center" href="/#|">
                                    United States
                                </a>
                                <a className="nav-link d-flex align-items-center" href="/#|">
                                    Phone: 4089887456
                                </a>
                            </div>
                        </div>
                        <div style={{display:this.state.Edit === 'hide'?"none":"block"}}>
                        <div className="card-body">
                                <div className="form-group mb-4 row">
                                    <div className="col-md-12">
                                        <input className="form-control form-control-solid" type="text" placeholder="Your Workspace Name" defaultValue="Biltmore Hotel And Suites Santa Clara Hotel" />
                                    </div>
                                </div>
                                <div className="form-group mb-4 row">
                                    <div className="col-md-12">
                                        <input className="form-control form-control-solid" type="text" placeholder="Your Workspace Name" defaultValue="2151 Laurewood Road" />
                                    </div>
                                </div>
                                <div className="form-group mb-4 row">
                                    <div className="col-md-12">
                                        <input className="form-control form-control-solid" type="text" placeholder="Your Workspace Name" defaultValue="Santa Clara,CA 95054-2754" />
                                    </div>
                                </div>
                                <div className="form-group mb-4 row">
                                    <div className="col-md-12">
                                        <input className="form-control form-control-solid" type="text" placeholder="Your Workspace Name" defaultValue="United States" />
                                    </div>
                                </div>
                                <div className="form-group mb-4 row">
                                    <div className="col-md-12">
                                        <input className="form-control form-control-solid" type="text" placeholder="Your Workspace Name" defaultValue="Phone: 4089887456" />
                                    </div>
                                </div>
                        </div>
                        <div className="card-footer mb-4">
                            <div className="form-group">
                                <button className="btn btn-primary clr" style={{float: 'left'}} type="button"> Update </button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div className="col-lg-6">
                    <div className="card card-fullheight" style={{border: '1px solid #7c1ab5'}}>
                    <div className="card-body">
                        <button className="btn btn-primary btn-fix" style={{float: 'right'}}><span className="btn-icon"><i className="ti-pencil" />Edit</span></button>
                        <h5 className="mb-4 articles-list-title" style={{float: 'left'}}>My Workspace Location</h5>
                        <div className="mapouter p-b-30">
                        <div className="gmap_canvas" style={{ height: '255px', width: '100%' }}>
                        <GoogleMapReact
                            bootstrapURLKeys={{ key:'AIzaSyDezh_p4EVyNqYA7DO5Mp6CFSN0JwPu7DU'}}
                            defaultCenter={this.state.center}
                            defaultZoom={this.state.zoom}
                            >
                         
                        </GoogleMapReact>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div className="card " style={{border: '1px solid #7c1ab5'}}>
                <div className="card-header cardhdd">
                    <h5 className="box-title" style={{color: '#fff'}}>Workspace Logo &amp; Description</h5>
                </div>
                <form>
                    <div className="card-body">
                    <div className="row">
                        <div className="col-md-8">
                        {/* Workspace Information Starts */}									
                        <div className="form-group mb-4 row">
                            <dt className="col-sm-5" style={{paddingTop: 7,textAlign:'left'}}>Workspace Name</dt>
                            <div className="col-sm-7">
                            <input className="form-control form-control-solid" type="text" placeholder="Your Workspace Name" defaultValue="Portme" />
                            </div>
                        </div>
                        <div className="form-group mb-4 row">
                            <dt className="col-sm-5" style={{paddingTop: 7,textAlign:'left'}}>Workspace Description</dt>
                            <div className="col-sm-7">
                            <textarea className="form-control form-control-solid" placeholder="Your Workspace Description" defaultValue={"We are dedicated on line Workspace for your Fashion Dream and her fashion needs. Dress up your Fashion Dream with the latest designs from Fashion Dream. Our dresses are designed to be smooth and comfortable to wear for kids. We offer wide range of Kids dresses, Ethnic Wear, Lehenga Choli, Party Wear Gowns, Frocks and Accessories for Girls and Baby Girls. Our dresses are best suited for Birthdays, Weddings and Festivals like Diwali, Eid, and Christmas. We also customize orders for Bulk requirement. Hope you like our Trendy Kids wear collection and you enjoy shopping with us."} />
                            </div>
                        </div>
                        {/* Workspace Information Starts */}
                        <div className="form-group mb-4 row">
                            <dt className="col-sm-5" style={{paddingTop: 7,textAlign:'left'}}>Workspace Email</dt>
                            <div className="col-sm-7">
                            <input className="form-control form-control-solid" type="text" placeholder="Your Workspace Email" defaultValue="portme@gmail.com" />
                            </div>
                        </div>
                        <div className="form-group mb-4 row">
                            <dt className="col-sm-5" style={{paddingTop: 7,textAlign:'left'}}>Phone number</dt>
                            <div className="col-sm-7">
                            <input className="form-control form-control-solid" type="text" placeholder="Your Workspace Phone Number" defaultValue={9876543210} />
                            </div>
                        </div>
                        {/* Workspace Information Ends */}
                        {/* Open and Close Time Starts */}
                        <div className="form-group mb-4 row">
                            <dt className="col-sm-5" style={{paddingTop: 7,textAlign:'left'}}>Opening Time</dt>
                            <div className="col-sm-7">
                            <input className="form-control form-control-solid" id="open_time" type="text" placeholder="Select Opening time" defaultValue="8:00 AM" />
                            </div>
                        </div>
                        <div className="form-group mb-4 row">
                            <dt className="col-sm-5" style={{paddingTop: 7,textAlign:'left'}}>Closing Time</dt>
                            <div className="col-sm-7">
                            <input className="form-control form-control-solid" id="close_time" type="text" placeholder="Select Closing time" defaultValue="8:00 PM" />
                            </div>
                        </div>
                        {/* Open and Close Time Ends */}
                        {/* Workspace Category and wanted name starts */}
                        <div className="form-group mb-4 row">
                            <dt className="col-sm-5" style={{paddingTop: 7,textAlign:'left'}}>Workspace Category</dt>
                            <div className="col-sm-7">
                            <select className="form-control form-control-solid mb-3" data-style="btn-light-solid" tabIndex={-98}>
                                <option value="Meeting Room" selected>Meeting Room
                                </option>
                                <option value="Meeting Room">Coworking Space
                                </option>
                                <option value="Meeting Room">Private Office
                                </option>
                                <option value="Meeting Room">Training Room
                                </option>
                                <option value="Meeting Room">Business Centre
                                </option>
                                <option value="Meeting Room">Coworking Cafes
                                </option>
                            </select>
                            </div>
                        </div>
                        <div className="form-group mb-4 row">
                            <dt className="col-sm-5" style={{paddingTop: 7,textAlign:'left'}}>Coworking Workspace Name</dt>
                            <div className="col-sm-7">
                            <div className="input-group-icon input-group-icon-left"><span className="input-icon input-icon-left">@</span><input className="form-control form-control-solid" type="text" placeholder="Username" defaultValue="portme" /></div>
                            </div>
                        </div>
                        {/* Workspace Category and wanted name ends */}
                        </div>
                        <div className="col-md-4">
                        {/* Workspace Image and Logo Starts */}
                        <div className="form-group mb-4">
                            <dt style={{paddingTop: 7}}>Workspace's Logo</dt>
                            <div className="col-sm-12" style={{padding: 0}}>
                            <div className="dropzone dz-clickable" id="mydropzoneSingle">
                                <div className="dz-message"><i className="ti-import text-primary font-40" />
                                <div className="mt-3 font-15">Upload Image</div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div className="form-group mb-4">
                            <dt style={{paddingTop: 7}}>Workspace's profile picture / video</dt>
                            <div className="col-sm-12" style={{padding: 0}}>
                            <div className="dropzone dz-clickable" id="mydropzoneSingle">
                                <div className="dz-message"><i className="ti-import text-primary font-40" />
                                <div className="mt-3 font-15">Upload Image/Video</div>
                                </div>
                            </div>
                            </div>
                        </div>

                        </div>
                    </div>
                    </div>
                    <div className="card-footer mb-4">
                    <div className="form-group">
                        <button className="btn btn-primary clr" style={{float: 'left', marginRight: 10}} type="button"> Update </button>
                        <button className="btn btn-default" style={{float: 'left'}} type="reset"> Clear </button>
                    </div>
                    </div>
                </form>
                </div>
                <div className="card " style={{border: '1px solid #7c1ab5'}}>
                <div className="card-header cardhdd">
                    <h5 className="box-title" style={{color: '#fff'}}>Workspace Address</h5>
                </div>
                <form>
                    <div className="card-body">
                    <div className="row">
                        <div className="col-md-8">
                        <div className="form-group mb-4 row">
                            <dt className="col-sm-5" style={{paddingTop: 7,textAlign:'left'}}>Street Address</dt>
                            <div className="col-sm-7">
                            <input className="form-control form-control-solid" type="text" placeholder="Your Workspace Street Address" />
                            </div>
                        </div>
                        <div className="form-group mb-4 row">
                            <dt className="col-sm-5" style={{paddingTop: 7,textAlign:'left'}}>City</dt>
                            <div className="col-sm-7">
                            <select className="form-control form-control-solid mb-3" data-style="btn-light-solid" tabIndex={-98}>
                                <option disabled selected>Select city</option>
                                <option>Ahmedabad</option>
                                <option>Bengaluru</option>
                                <option>Chandigarh</option>
                                <option>Chennai</option>
                                <option>Coimbatore</option>
                                <option>Delhi</option>
                                <option>Goa</option>
                                <option>Gurugram</option>
                                <option>Hyderabad</option>
                                <option>Indore</option>
                                <option>Jaipur</option>
                                <option>Kochi</option>
                                <option>Kolkata</option>
                                <option>Manila</option>
                                <option>Mumbai</option>
                                <option>Nagpur</option>
                                <option>Noida</option>
                                <option>Pune</option>
                            </select>
                            </div>
                        </div>
                        <div className="form-group mb-4 row">
                            <dt className="col-sm-5" style={{paddingTop: 7,textAlign:'left'}}>State/Province/Region</dt>
                            <div className="col-sm-7">
                            <select className="form-control form-control-solid mb-3" data-style="btn-light-solid" tabIndex={-98}>
                                <option disabled selected>Select State</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Orissa">Orissa</option>
                                <option value="Pondicherry">Pondicherry</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttaranchal">Uttaranchal</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
                            </div>
                        </div>
                        <div className="form-group mb-4 row">
                            <dt className="col-sm-5" style={{paddingTop: 7,textAlign:'left'}}>Zip/Postal code</dt>
                            <div className="col-sm-7">
                            <input className="form-control form-control-solid" type="text" placeholder="Your Postal Code" />
                            </div>
                        </div>
                        <div className="form-group mb-4 row">
                            <dt className="col-sm-5" style={{paddingTop: 7,textAlign:'left'}}>Country</dt>
                            <div className="col-sm-7">
                            <input className="form-control form-control-solid" type="text" placeholder="Your Workspace Country" defaultValue="India" />
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div className="card-footer mb-4">
                    <div className="form-group">
                        <button className="btn btn-primary clr" style={{float: 'left', marginRight: 10}} type="button"> Update </button>
                        <button className="btn btn-default" style={{float: 'left'}} type="reset"> Clear </button>
                    </div>
                    </div>
                </form>
                </div>
            </>
        )
    }

}