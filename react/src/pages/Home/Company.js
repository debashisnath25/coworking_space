import React, { Component } from 'react';
import './home.css';
import Carousel from "react-multi-carousel";
import "react-multi-carousel/lib/styles.css";

export default class Company extends Component {
    render() {
        const responsive = {
            desktop: {
              breakpoint: { max: 3000, min: 1024 },
              items: 1,
              slidesToSlide: 1, // optional, default to 1.
            },
            tablet: {
              breakpoint: { max: 1024, min: 464 },
              items: 2,
              slidesToSlide: 2, // optional, default to 1.
            },
            mobile: {
              breakpoint: { max: 464, min: 0 },
              items: 1,
              slidesToSlide: 1, // optional, default to 1.
            },
          };
    
        
     
        return (
            
                <div className="container">
                    <div className="row">
                        <div className="col-12">
                            <div className="all-title mt-4" style={{marginBottom: "25px"}}>
                                <h4 className="sec-title" style={{fontSize:'30px',fontFamily:'Arial'}}>Heading</h4> 
                                <svg className="title-sep">
                                    <path fillRule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    <Carousel responsive={responsive} centerMode={false} >
                        <div className="col-12 row mb-5" style={{backgroundColor:'#f3f4f5'}}>
                            <div className="col-4"> 
                                <img src="img/team1.png" alt="lister" />
                            </div>
                            <div className="col-8">
                                <h4 className="mt-5 ml-4" style=
                                {{color:'#525050',fontFamily:'Arial'}}>Riju Dey</h4>
                                <p className="ml-4" style=
                                {{color:'#525050',fontFamily:'Arial'}}>"Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in<br></br>laying out print, graphic or web designs.The passage is attributed to an<br></br>unknown typesetter in the 15th century who is thought to have scrambled<br></br>parts"</p>
                            </div>
                        </div>
                        <div className="col-12 row mb-5" style={{backgroundColor:'#f3f4f5'}}>
                            <div className="col-4"> 
                                <img src="img/team2.png" alt="lister" />
                            </div>
                            <div className="col-8">
                            <h4 className="mt-5 ml-4" style=
                                {{color:'#525050',fontFamily:'Arial'}}>Riju Dey</h4>
                                <p className="ml-4" style=
                                {{color:'#525050',fontFamily:'Arial'}}>"Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in<br></br>laying out print, graphic or web designs.The passage is attributed to an<br></br>unknown typesetter in the 15th century who is thought to have scrambled<br></br>parts"</p>
                            </div>
                        </div>
                        <div className="col-12 row mb-5" style={{backgroundColor:'#f3f4f5'}}>
                            <div className="col-4"> 
                                <img src="img/team3.png" alt="lister" />
                            </div>
                            <div className="col-8">
                            <h4 className="mt-5 ml-4" style=
                                {{color:'#525050',fontFamily:'Arial'}}>Riju Dey</h4>
                                <p className="ml-4" style=
                                {{color:'#525050',fontFamily:'Arial'}}>"Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in<br></br>laying out print, graphic or web designs.The passage is attributed to an<br></br>unknown typesetter in the 15th century who is thought to have scrambled<br></br>parts"</p>
                            </div>
                        </div>
                        <div className="col-12 row mb-5" style={{backgroundColor:'#f3f4f5'}}>
                            <div className="col-4"> 
                                <img src="img/team4.png" alt="lister" />
                            </div>
                            <div className="col-8">
                            <h4 className="mt-5 ml-4" style=
                                {{color:'#525050',fontFamily:'Arial'}}>Riju Dey</h4>
                                <p className="ml-4" style=
                                {{color:'#525050',fontFamily:'Arial'}}>"Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in<br></br>laying out print, graphic or web designs.The passage is attributed to an<br></br>unknown typesetter in the 15th century who is thought to have scrambled<br></br>parts"</p>
                            </div>
                        </div>
                    </Carousel>
                            
                    
                </div>
            

        );
    }
}