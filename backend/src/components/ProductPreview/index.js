import React, {Component} from 'react';
import {Tab, Tabs, TabList, TabPanel} from 'react-tabs';
import 'react-tabs/style/react-tabs.css';
import ImageGallery from 'react-image-gallery';
import 'react-image-gallery/styles/css/image-gallery.css';
import './voda.css';

export default class ProductPreview extends Component {
  constructor (props) {
    super (props);
    this.state = {
      contentData: this.props.PrvData,
    };
  }
  render () {
    const {contentData} = this.state;
    const ProductImages=[];
   
    
    this.props.PrvData.productImageId.map((imgData,imgindex) => {
      return(
        ProductImages.push({"original":imgData.originalURL,"thumbnail":imgData.originalURL })
      )
    })
   
    console.log(contentData);
    return (
      <div>
            <div
              className="modal-body"
              style={{
                'max-height': 'calc(100vh - 150px)',
                'overflow-y': 'auto',
              }}
            >
              <div className=" card-fullheight">
                <div className="card-body">
                  <div className="row">
                    <div className="col-md-6 mb-2">
                      <ImageGallery items={ProductImages} lazyLoad="true" additionalClass="img-fluid-slide" originalClass="img-fluid-slide" />
                    </div>
                    <div className="col-md-6 mb-2">
                      <div>
                       
                              <div>
                                <h4
                                  style={{
                                    color: '#7c1ab5',
                                  }}
                                >
                                  {this.props.PrvData.productName}
                                </h4>
                                <div className="page-breadcrumb mb-3">
                                  <span className="text-muted">
                                    Sold By:
                                  </span>
                                  {' '}
                                  <a
                                    href="#/"
                                    className="text-muted"
                                    style={{
                                      cursor: 'pointer',
                                    }}
                                  >
                                    <b>
                                    {this.props.PrvData.productStoreKey.storeName}
                                    </b>
                                  </a>
                                  <br />
                                  <h6
                                    className="text-muted mt-1"
                                    style={{
                                      color: '#7c1ab5 !important',
                                    }}
                                  >
                                  
                                  {this.props.PrvData.productCategory[0].categoryname}
                                    {' '}
                                    &gt;
                                    {' '}
                                   
                                    {this.props.PrvData.productSubcategory[0].subcategoryname}
                                  </h6>
                                </div>
                                <div className="page-breadcrumb">
                                  <span className="btn btn-light btn-sm mb-1">
                                    <b>
                                      
                                      AverageRating
                                    </b>
                                    {' '}
                                    <i
                                      className="fas fa-star"
                                      style={{
                                        color: '#7c1ab5',
                                        fontSize: 12,
                                        border: '#fff',
                                      }}
                                    />
                                  </span>
                                  &nbsp;&nbsp;&nbsp;
                                  <strong className="font-weight-bold">
                                    
                                    TotalRating
                                    {' '}
                                    ratings
                                  </strong>
                                </div>
                                <div className="mt-2">
                                  <h5
                                    style={{
                                      fontFamily: 'arial',
                                    }}
                                  >
                                    <b>
                                      ₹
                                      <span id="prod_pricezz">
                                      {this.props.PrvData.productPrice[0].productListPrice}
                                      </span>
                                    </b>
                                    &nbsp;&nbsp;
                                    <span
                                      className="text-muted"
                                      style={{
                                        fontFamily: 'arial',
                                        fontSize: 14,
                                        textDecoration: 'line-through',
                                      }}
                                    >
                                      ₹  {this.props.PrvData.productPrice[0].productMrp}
                                    </span>
                                    &nbsp;
                                    <span className="text-success font-16">
                                    {this.props.PrvData.productPrice[0].discountParcent}
                                     &nbsp;&nbsp;
                                      <a
                                        href="#/"
                                        data-toggle="tooltip"
                                        title="Price Distribution"
                                      >
                                        <i
                                          style={{
                                            fontSize: 12,
                                          }}
                                          className="fa fa-info-circle"
                                        />
                                      </a>
                                    </span>
                                  </h5>
                                  <span
                                    className="text-muted"
                                    style={{
                                      fontFamily: 'arial',
                                    }}
                                  >
                                    Price Incl. GST (₹
                                    {' '}
                                 
                                    )
                                  </span>
                                  <div className="row">
                                      {
                                        this.props.PrvData.productOptions.map((opdata,opindex) => {
                                          return(
                                            <>
                                               <div className="form-group mt-4 col-md-6" key={opindex}>
                                                    <h6 className>
                                                      {opdata.options}
                                                    </h6>
                                                    <hr />
                                                    <div
                                                      className="row"
                                                      style={{
                                                        padding: 0,
                                                        margin: 0,
                                                      }}
                                                    >
                                                      {
                                                        opdata.optionsValues.length > 0
                                                        ?
                                                        opdata.optionsValues.map((valdata, valindex) => {
                                                          return(
                                                            <>
                                                            <div>
                                                              <label
                                                                className="col-md-12 radio radio-primary mb-2"
                                                              >
                                                                <input
                                                                  type="radio"
                                                                  defaultChecked
                                                                  name="size"
                                                                  onclick="sizezz_colorzz('size',this.value);"
                                                                  
                                                                />
                                                                <span
                                                                  style={{
                                                                    fontFamily: 'arial',
                                                                  }}
                                                                >
                                                                    {valdata.valuesName}
                                                                  {' '}
                                                                  (
                                                                    {
                                                                      valdata.modify==='plus'? "+" : "-"
                                                                      
                                                                    }
                                                                    {' '}
                                                                  {valdata.modifierType==='rupees'? "₹" : "%"}
                                                                  {' '}
                                                                  {valdata.amount}
                                                                  )
                                                                </span>
                                                              </label>
                                                            </div>
                                                        </>
                                                          )
                                                        })
                                                        :
                                                        ""
                                                      }
                                                    </div>
                                                  </div>
                                            </>
                                          )
                                        })
                                      }
                                   
                                  </div>
                                  <hr />
                                  <div className="form-group mt-4">
                                    <h6>
                                      In Stock:
                                      {' '}
                                      <b>
                                       {this.props.PrvData.productInventory[0].productNumberOfItems} Items Availeable
                                      </b>
                                    </h6>
                                  </div>
                                  <div className="form-group mt-4">
                                    <h6>
                                      Shipping:&nbsp;&nbsp;
                                      {
                                        this.props.PrvData.productShipping.length > 0
                                        ?
                                        this.props.PrvData.productShipping[0].shippingApi.map((shppdata,shppindex) => {
                                          return(
                                            <>
                                                <div
                                                    className="btn btn-md btn-warning mr-2"
                                                    style={{color: '#fff'}}
                                                >
                                                    {shppdata.apiName}
                                                </div>
                                            </>
                                          )
                                        })
                                        :
                                        ""
                                      }        
                                    
                                      
                                    </h6>
                                  </div>
                                  <div className="form-group mt-4">
                                    <button className="btn btn-primary btn-block clr">
                                      <i className="fas fa-shopping-bag" /> {'  '}
                                      Add to Bag
                                    </button>
                                  </div>
                                </div>
                              </div>
                      </div>
                    </div>
                    <div className="col-md-12">
                      <Tabs>
                        <TabList>
                          <Tab>Description</Tab>
                          <Tab>Attributes</Tab>
                          <Tab>Additional Features</Tab>
                          <Tab>Return Policy</Tab>
                          <Tab>Ratings &amp; Reviews</Tab>
                        </TabList>

                        <TabPanel>
                         
                                <div className="custom-scroll position-relative">
                                  <p
                                    style={{
                                      padding: 10,
                                      marginBottom: '0px',
                                    }}
                                  >
                                    <b>Product Name:</b>
                                    &nbsp;&nbsp;
                                    {this.props.PrvData.productName}
                                  </p>
                                  <p
                                    style={{
                                      padding: 10,
                                      marginBottom: '0px',
                                    }}
                                  >
                                    <b>
                                      Product Category:
                                    </b>
                                    &nbsp;&nbsp;
                                    {this.props.PrvData.productCategory[0].categoryname}
                                  </p>
                                  <p
                                    style={{
                                      padding: 10,
                                      marginBottom: '0px',
                                    }}
                                  >
                                    <b>
                                      Product Subcategory:
                                    </b>
                                    &nbsp;&nbsp;
                                    {this.props.PrvData.productSubcategory[0].subcategoryname}
                                  </p>
                                  <p style={{padding: 10}}>
                                   {/* <b>
                                      Covered in Warranty
                                    </b>
                                    <br />
                                     CoveredInWarranty
                                    <br />
                                    <br />
                                    <b>
                                      Not Covered in Warranty
                                    </b>
                                    <br />
                                   NotCoveredInWarranty
                                    <br />
                                   <br />*/}
                                    <b>{this.props.PrvData.productAttribute[0].productBrand}</b><br />
                                    {this.props.PrvData.productDescription}
                                  </p>
                                </div>
                         

                        </TabPanel>
                        <TabPanel>
                         
                                <div className="custom-scroll position-relative">
                                  <div className="table-responsive">
                                    <table className="table table-bordered">
                                      <tbody>
                                        <tr>
                                          <td className="tname">
                                            <b>
                                              SKU Code:
                                            </b>
                                          </td>
                                          <td>
                                          {this.props.PrvData.productSKU}
                                          </td>
                                        </tr>
                                        <tr>
                                          <td className="tname">
                                            <b>
                                              HSN Code:
                                            </b>
                                          </td>
                                          <td>
                                          {this.props.PrvData.productAttribute[0].productHSN}
                                          </td>
                                        </tr>
                                        <tr>
                                          <td className="tname">
                                            <b>
                                              Brand Name:
                                            </b>
                                          </td>
                                          <td>
                                          {this.props.PrvData.productAttribute[0].productBrand}
                                          </td>
                                        </tr>
                                        <tr>
                                          <td className="tname">
                                            <b>
                                              ISBN Number:
                                            </b>
                                          </td>
                                          <td>
                                          {this.props.PrvData.productAttribute[0].productISBN}
                                          </td>
                                        </tr>
                                        <tr>
                                          <td className="tname">
                                            <b>
                                              SAC Number:
                                            </b>
                                          </td>
                                          <td>
                                          {this.props.PrvData.productAttribute[0].productSAC}
                                          </td>
                                        </tr>
                                        <tr>
                                          <td className="tname">
                                            <b>
                                              UPC Number:
                                            </b>
                                          </td>
                                          <td>
                                          {this.props.PrvData.productAttribute[0].productUPC}
                                          </td>
                                        </tr>
                                        <tr>
                                          <td className="tname">
                                            <b>
                                              Product Dimension:
                                            </b>
                                          </td>
                                          <td>
                                            {this.props.PrvData.productAttribute[0].productLength} * {contentData.productAttribute[0].productWidth} * {contentData.productAttribute[0].productHeight} {contentData.productAttribute[0].productDimensionUnit}
                                          </td>
                                        </tr>
                                        <tr>
                                          <td className="tname">
                                            <b>Weight:</b>
                                          </td>
                                          <td>
                                          {this.props.PrvData.productAttribute[0].productNetWeight}  {contentData.productAttribute[0].productNetWeightUnit}
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                        

                        </TabPanel>
                        <TabPanel>
                          <div className="custom-scroll position-relative">
                            <p>
                            {this.props.PrvData.productAdditionalDescription}
                            </p>
                          </div>
                        </TabPanel>
                        <TabPanel>
                          {
                           this.props.PrvData.productRefundReplacement.length > 0
                           ?
                              <>
                                  <div className="custom-scroll position-relative">
                              <div className="table-responsive">
                                <table className="table table-bordered">
                                  <tbody>
                                    <tr>
                                      <td className="tname">
                                        <b>
                                          Is Refund Allowed:
                                        </b>
                                      </td>
                                      <td>
                                      {this.props.PrvData.productRefundReplacement[0].refundAllowed}
                                      </td>
                                    </tr>
                                    <tr>
                                      <td className="tname">
                                        <b>Refund Validity:</b>
                                      </td>
                                      <td>
                                      Within {this.props.PrvData.productRefundReplacement[0].refundPeriod} Days
                                      </td>
                                    </tr>
                                    <tr>
                                      <td className="tname">
                                        <b>
                                          Refund Policy:
                                        </b>
                                      </td>
                                      <td>
                                        {this.props.PrvData.productRefundReplacement[0].refundPolicy}
                                      </td>
                                    </tr>
                                    <tr>
                                      <td className="tname">
                                        <b>
                                          Is Replacement Allowed:
                                        </b>
                                      </td>
                                      <td>
                                      {this.props.PrvData.productRefundReplacement[0].replacementAllowed}
                                      </td>
                                    </tr>
                                    <tr>
                                      <td className="tname">
                                        <b>
                                          Replacement Validity:
                                        </b>
                                      </td>
                                      <td>
                                      {this.props.PrvData.productRefundReplacement[0].replacementPeriod}
                                      </td>
                                    </tr>
                                    <tr>
                                      <td className="tname">
                                        <b>
                                          Replacement Policy:
                                        </b>
                                      </td>
                                      <td>
                                      {this.props.PrvData.productRefundReplacement[0].replacementPolicy}
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                              </>
                           :
                           "" 
                          }
                            
                          
                        </TabPanel>
                        <TabPanel>
                         
                                <div className="card-body">
                                  <div
                                    className="card-fullwidth-block p-4 mb-4 flexbox"
                                    style={{
                                      backgroundColor: '#e9ecef',
                                    }}
                                  >
                                    <div className="font-18">
                                     TotalRatings
                                      {' '}
                                      ratings and
                                      {' '}
                                      TotalReviews
                                      {' '}
                                      reviews
                                    </div>
                                    <a
                                      className="d-inline-flex align-items-center text-danger"
                                      href="#/"
                                    >
                                      <span
                                        className="mr-2"
                                        style={{
                                          color: '#7c1ab5',
                                        }}
                                      >
                                        View More
                                      </span>
                                      <i
                                        className="fas fa-angle-right font-16"
                                        style={{
                                          color: '#7c1ab5',
                                        }}
                                      />
                                    </a>
                                  </div>
                                  <ul className="list-unstyled media-list-divider">
                                   
                                          <li
                                            
                                            className="media py-3"
                                          >
                                            <div className="media-body">
                                              <div className="d-flex justify-content-between mb-3">
                                                <div>
                                                  <strong>
                                                    UserName
                                                  </strong>
                                                  {' '}
                                                  ,
                                                UserLocation
                                                </div>
                                                <div
                                                  className="text-muted font-13 ml-3"
                                                  style={{
                                                    minWidth: 80,
                                                  }}
                                                >
                                                 Date
                                                </div>
                                              </div>
                                              <div className="mr-3 mb-2">
                                                      <img
                                                        className="rounded-sm"
                                                        src=""
                                                        alt="Customer Review"
                                                        style={{
                                                          height: 70,
                                                        }}
                                                      />
                                                 
                                              </div>
                                              <div
                                                className="p-3 rounded"
                                                style={{
                                                  backgroundColor: '#e9ecef',
                                                }}
                                              >
                                                <div className="cust_rating btn btn-success">
                                                  UserRating
                                                  {' '}
                                                  <i className="fas fa-star star_icon" />
                                                </div>
                                                &nbsp;&nbsp;
                                               UserReview
                                              </div>

                                            </div>
                                          </li>
                                  

                                  </ul>

                                </div>
                         

                        </TabPanel>
                      </Tabs>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          );
        
      </div>
    );
  }
}
