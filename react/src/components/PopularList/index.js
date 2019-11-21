import React,{ Component} from 'react';
import InfiniteCarousel from 'react-leaf-carousel';
import "./style.css";
class PopularList extends Component{
    render(){
        return(
            <>
                <section className="popular-list sp-100 bg-w">
                    <div className="container-fluid">
                        <div className="row">
                        <div className="col-12">
                            <div className="all-title">
                            <h3 className="sec-title">
                                Choose Your Needs
                            </h3>
                            <svg className="title-sep">
                                <path fillRule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z" />
                            </svg>
                            </div>
                        </div>
                        </div>

                        <div className="row">
                         <div className="col-12">
                         <div className="popular-list-slider mb-0">
                            <InfiniteCarousel
                               breakpoints={[
                                 {
                                   breakpoint: 500,
                                   settings: {
                                     slidesToShow: 2,
                                     slidesToScroll: 2,
                                   },
                                 },
                                 {
                                   breakpoint: 768,
                                   settings: {
                                     slidesToShow: 3,
                                     slidesToScroll: 3,
                                   },
                                 },
                               ]}
                               dots={false}
                               showSides={true}
                               sidesOpacity={.5}
                               sideSize={.1}
                               slidesToScroll={4}
                               slidesToShow={4}
                               scrollOnDevice={true}
                               draggable={true}
                             >

                              <div className="listing-item p-2">
                                <div className="img-holder">
                                  <span className="offer">save 49%
                                  </span>
                                  <img src="img/l-1.png" alt="list" />
                                  <div className="rate-like centering justify-content-between">
                                    <div className="rating">
                                      <i className="fa fa-star" />
                                      <i className="fa fa-star" />
                                      <i className="fa fa-star" />
                                      <i className="far fa-star" />
                                      <i className="far fa-star" />
                                    </div>
                                    <a className="likes" href="#">
                                      <i className="far fa-heart" /> 4
                                    </a>
                                  </div>
                                </div>
                                <div className="list-content p-2">
                                  <h5 className="mb-2">
                                    <a href="listing_details.php">Work with us
                                    </a>
                                  </h5>
                                  <p>Work Cafe
                                  </p>
                                  <ul className="ctg-info2 pt-2 mt-3 centering justify-content-between">
                                    <li className="mt-1">
                                      <a href="#">
                                        <i className="fa fa-map-marker-alt mr-2">
                                        </i>Dwarka,New Delhi
                                      </a>
                                    </li>
                                    <li className="mt-1">
                                      <a href="#">
                                        <i className="fa fa-phone mr-2">
                                        </i>0123-456-789
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div className="listing-item p-2">
                                <div className="img-holder">
                                  <span className="offer">save 49%
                                  </span>
                                  <img src="img/l-2.png" alt="list" />
                                  <div className="rate-like centering justify-content-between">
                                    <div className="rating">
                                      <i className="fa fa-star" />
                                      <i className="fa fa-star" />
                                      <i className="fa fa-star" />
                                      <i className="far fa-star" />
                                      <i className="far fa-star" />
                                    </div>
                                    <a className="likes" href="#">
                                      <i className="far fa-heart" /> 4
                                    </a>
                                  </div>
                                </div>
                                <div className="list-content p-2">
                                  <h5 className="mb-2">
                                    <a href="listing_details.php">Work with us
                                    </a>
                                  </h5>
                                  <p>Co-working space
                                  </p>
                                  <ul className="ctg-info2 pt-2 mt-3 centering justify-content-between">
                                    <li className="mt-1">
                                      <a href="#">
                                        <i className="fa fa-map-marker-alt mr-2">
                                        </i>noida,Delhi
                                      </a>
                                    </li>
                                    <li className="mt-1">
                                      <a href="#">
                                        <i className="fa fa-phone mr-2">
                                        </i>0123-456-789
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div className="listing-item p-2">
                                <div className="img-holder">
                                  <span className="offer">save 49%
                                  </span>
                                  <img src="img/l-3.png" alt="list" />
                                  <div className="rate-like centering justify-content-between">
                                    <div className="rating">
                                      <i className="fa fa-star" />
                                      <i className="fa fa-star" />
                                      <i className="fa fa-star" />
                                      <i className="far fa-star" />
                                      <i className="far fa-star" />
                                    </div>
                                    <a className="likes" href="#">
                                      <i className="far fa-heart" /> 4
                                    </a>
                                  </div>
                                </div>
                                <div className="list-content p-2">
                                  <h5 className="mb-2">
                                    <a href="listing_details.php">Execube
                                    </a>
                                  </h5>
                                  <p>Co-working space
                                  </p>
                                  <ul className="ctg-info2 pt-2 mt-3 centering justify-content-between">
                                    <li className="mt-1">
                                      <a href="#">
                                        <i className="fa fa-map-marker-alt mr-2">
                                        </i>Chattisnagar,New Delhi
                                      </a>
                                    </li>
                                    <li className="mt-1">
                                      <a href="#">
                                        <i className="fa fa-phone mr-2">
                                        </i>0123-456-789
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div className="listing-item p-2">
                                <div className="img-holder">
                                  <span className="offer">save 49%
                                  </span>
                                  <img src="img/l-1.png" alt="list" />
                                  <div className="rate-like centering justify-content-between">
                                    <div className="rating">
                                      <i className="fa fa-star" />
                                      <i className="fa fa-star" />
                                      <i className="fa fa-star" />
                                      <i className="far fa-star" />
                                      <i className="far fa-star" />
                                    </div>
                                    <a className="likes" href="#">
                                      <i className="far fa-heart" /> 4
                                    </a>
                                  </div>
                                </div>
                                <div className="list-content p-2">
                                  <h5 className="mb-2">
                                    <a href="listing_details.php">Boulder box
                                    </a>
                                  </h5>
                                  <p>Co-working Space
                                  </p>
                                  <ul className="ctg-info2 pt-2 mt-3 centering justify-content-between">
                                    <li className="mt-1">
                                      <a href="#">
                                        <i className="fa fa-map-marker-alt mr-2">
                                        </i>Vasant kunj,New Delhi
                                      </a>
                                    </li>
                                    <li className="mt-1">
                                      <a href="#">
                                        <i className="fa fa-phone mr-2">
                                        </i>0123-456-789
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div className="listing-item p-2">
                                <div className="img-holder">
                                  <span className="offer">save 49%
                                  </span>
                                  <img src="img/l-2.png" alt="list" />
                                  <div className="rate-like centering justify-content-between">
                                    <div className="rating">
                                      <i className="fa fa-star" />
                                      <i className="fa fa-star" />
                                      <i className="fa fa-star" />
                                      <i className="far fa-star" />
                                      <i className="far fa-star" />
                                    </div>
                                    <a className="likes" href="#">
                                      <i className="far fa-heart" /> 4
                                    </a>
                                  </div>
                                </div>
                                <div className="list-content p-2">
                                  <h5 className="mb-2">
                                    <a href="listing_details.php">Cafe more life
                                    </a>
                                  </h5>
                                  <p>Work Cafe
                                  </p>
                                  <ul className="ctg-info2 pt-2 mt-3 centering justify-content-between">
                                    <li className="mt-1">
                                      <a href="#">
                                        <i className="fa fa-map-marker-alt mr-2">
                                        </i>Chitpur,Noida
                                      </a>
                                    </li>
                                    <li className="mt-1">
                                      <a href="#">
                                        <i className="fa fa-phone mr-2">
                                        </i>0123-456-789
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>

                         </InfiniteCarousel>
                           </div>
                         </div>
                       </div>
                    </div>
                 </section>
            </>
        )
    }
}

export default PopularList;
