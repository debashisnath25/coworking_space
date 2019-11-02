import React,{Component} from 'react';
class HomeItemSlider extends Component{
  
  constructor(props){
    super(props);
    this.state = {
      items: [],
      isLoaded: false,
    }
  }

  componentDidMount(){
    fetch('http://localhost:4000/api/category')
      .then(res => res.json())
      .then(json => {
        this.setState({
          isLoaded: true,
          items: json,
        });
      })
  }
  render(){
  return(
    <section className="popular-list sp-100 bg-w">
        <div className="container">
          <div className="row">
            <div className="col-12">
              <div className="all-title">
                <h3 className="sec-title">
                  popular listing
                </h3>
                <svg className="title-sep">
                  <path fillRule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z" />
                </svg>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor penatibus
                  ean massa. Cum sociis natoqu penatibus et magnis dis parturient montes.</p>
              </div>
            </div>
          </div>
          <div className="row">
            <div className="col-12">
              <div className="popular-list-slider mb-0">
                <div className="listing-item p-2">
                  <div className="img-holder">
                    <span className="offer">save 49%
                    </span>
                    <img src="img/pl-slide1.jpg" alt="list" />
                    <div className="rate-like centering justify-content-between">
                      <div className="rating">
                        <i className="fa fa-star" />
                        <i className="fa fa-star" />
                        <i className="fa fa-star" />
                        <i className="far fa-star" />
                        <i className="far fa-star" />
                      </div>
                      <a className="likes" href="/">
                        <i className="far fa-heart" /> 4
                      </a>
                    </div>
                  </div>
                  <div className="list-content p-2">
                    <ul className="ctg-info py-2 mb-3">
                      <li>
                        <a href="/">
                          <i className="flaticon-cutlery mr-2" /> restaurants</a>
                      </li>
                      <li>
                        <span className="c-theme"> open now</span>
                      </li>
                    </ul>
                    <h5 className="mb-2">
                      <a href="listing-detail.html">the lounge &amp; bar</a>
                    </h5>
                    <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                    <ul className="ctg-info2 pt-2 mt-3 centering justify-content-between">
                      <li className="mt-1">
                        <a href="/">
                          <i className="fa fa-map-marker-alt mr-2" />San Francisco, USA</a>
                      </li>
                      <li className="mt-1">
                        <a href="/">
                          <i className="fa fa-phone mr-2" />0123-456-789</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div className="listing-item p-2">
                  <div className="img-holder">
                    <span className="offer">save 30%
                    </span>
                    <img src="img/pl-slide2.jpg" alt="list" />
                    <div className="rate-like centering justify-content-between">
                      <div className="rating">
                        <i className="fa fa-star" />
                        <i className="fa fa-star" />
                        <i className="far fa-star" />
                        <i className="far fa-star" />
                        <i className="far fa-star" />
                      </div>
                      <a className="likes" href="/">
                        <i className="far fa-heart" />3
                      </a>
                    </div>
                  </div>
                  <div className="list-content p-2">
                    <ul className="ctg-info py-2 mb-3">
                      <li>
                        <a href="/">
                          <i className="flaticon-shop mr-2" />shopping</a>
                      </li>
                      <li>
                        <span className="c-theme"> open now</span>
                      </li>
                    </ul>
                    <h5 className="mb-2">
                      <a href="listing-detail.html">the best shop in city</a>
                    </h5>
                    <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                    <ul className="ctg-info2 pt-2 mt-3 centering justify-content-between">
                      <li className="mt-1">
                        <a href="/">
                          <i className="fa fa-map-marker-alt mr-2" />San Francisco, USA</a>
                      </li>
                      <li className="mt-1">
                        <a href="/">
                          <i className="fa fa-phone mr-2" />0123-456-789</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div className="listing-item p-2">
                  <div className="img-holder">
                    <span className="offer">save 19%
                    </span>
                    <img src="img/pl-slide3.jpg" alt="list" />
                    <div className="rate-like centering justify-content-between">
                      <div className="rating">
                        <i className="fa fa-star" />
                        <i className="fa fa-star" />
                        <i className="fa fa-star" />
                        <i className="fa fa-star" />
                        <i className="far fa-star" />
                      </div>
                      <a className="likes" href="/">
                        <i className="far fa-heart" />6
                      </a>
                    </div>
                  </div>
                  <div className="list-content p-2">
                    <ul className="ctg-info py-2 mb-3">
                      <li>
                        <a href="/">
                          <i className="flaticon-cheers mr-2" />nightlife</a>
                      </li>
                      <li>
                        <span className="c-theme"> open now</span>
                      </li>
                    </ul>
                    <h5 className="mb-2">
                      <a href="listing-detail.html">enjoy best nightlife</a>
                    </h5>
                    <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                    <ul className="ctg-info2 pt-2 mt-3 centering justify-content-between">
                      <li className="mt-1">
                        <a href="/">
                          <i className="fa fa-map-marker-alt mr-2" />San Francisco, USA</a>
                      </li>
                      <li className="mt-1">
                        <a href="/">
                          <i className="fa fa-phone mr-2" />0123-456-789</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div className="listing-item p-2">
                  <div className="img-holder">
                    <span className="offer">save 59%
                    </span>
                    <img src="img/pl-slide4.jpg" alt="list" />
                    <div className="rate-like centering justify-content-between">
                      <div className="rating">
                        <i className="fa fa-star" />
                        <i className="fa fa-star" />
                        <i className="far fa-star" />
                        <i className="far fa-star" />
                        <i className="far fa-star" />
                      </div>
                      <a className="likes" href="/">
                        <i className="far fa-heart" /> 9
                      </a>
                    </div>
                  </div>
                  <div className="list-content p-2">
                    <ul className="ctg-info py-2 mb-3">
                      <li>
                        <a href="/">
                          <i className="flaticon-spa mr-2" />beauty &amp; spa</a>
                      </li>
                      <li>
                        <span className="c-theme"> open now</span>
                      </li>
                    </ul>
                    <h5 className="mb-2">
                      <a href="listing-detail.html">best beauty &amp; spa services</a>
                    </h5>
                    <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                    <ul className="ctg-info2 pt-2 mt-3 centering justify-content-between">
                      <li className="mt-1">
                        <a href="/">
                          <i className="fa fa-map-marker-alt mr-2" />San Francisco, USA</a>
                      </li>
                      <li className="mt-1">
                        <a href="/">
                          <i className="fa fa-phone mr-2" />0123-456-789</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div className="listing-item p-2">
                  <div className="img-holder">
                    <span className="offer">save 20%
                    </span>
                    <img src="img/pl-slide5.jpg" alt="list" />
                    <div className="rate-like centering justify-content-between">
                      <div className="rating">
                        <i className="fa fa-star" />
                        <i className="fa fa-star" />
                        <i className="fa fa-star" />
                        <i className="fa fa-star" />
                        <i className="fa fa-star" />
                      </div>
                      <a className="likes" href="/">
                        <i className="far fa-heart" /> 14
                      </a>
                    </div>
                  </div>
                  <div className="list-content p-2">
                    <ul className="ctg-info py-2 mb-3">
                      <li>
                        <a href="/">
                          <i className="flaticon-find mr-2" />desitination</a>
                      </li>
                      <li>
                        <span className="c-theme"> open now</span>
                      </li>
                    </ul>
                    <h5 className="mb-2">
                      <a href="listing-detail.html">best destinations in city</a>
                    </h5>
                    <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                    <ul className="ctg-info2 pt-2 mt-3 centering justify-content-between">
                      <li className="mt-1">
                        <a href="/">
                          <i className="fa fa-map-marker-alt mr-2" />San Francisco, USA</a>
                      </li>
                      <li className="mt-1">
                        <a href="/">
                          <i className="fa fa-phone mr-2" />0123-456-789</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

  );
  }
}
export default HomeItemSlider;
