import React, { Component } from 'react';

export default class Location extends Component {
    render() {
        return (
            <div role="tabpanel" className="tab-pane fade" id="faq2">
                <div id="faq-accordion2" className="theme-accordion">
                    <div className="col-md-12">
                        <h4>Location</h4>
                        <hr />
                        <div className="row">
                            <div className="col-4">
                                <label>State</label>
                            </div>
                            <div className="col-8">
                                <select className="form-control custom-select" id="city_name">
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
                            <div className="col-4">
                                <label>City</label>
                            </div>
                            <div className="col-8">
                                <select className="form-control custom-select" id="city_name">
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
                            <div className="col-4">
                                <label>Address</label>
                            </div>
                            <div className="col-8">
                                <textarea className="form-control" name="address" placeholder="Enter Address Here" defaultValue={""} />
                            </div>
                            <div className="col-12">
                                <button className="btn btn-one nextBtn btn-lg float-right" type="button">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        );
    }
}