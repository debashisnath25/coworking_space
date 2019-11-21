import React,{ Component} from 'react';
import Coverflow from 'react-coverflow';

class ListingDetailsSlider extends Component{
    render(){
        return(
            <>
                <section className="sp-100">
            <div className="container-fluid">
                  <Coverflow width="960" height="500"
                    displayQuantityOfSide={2}
                    navigation={false}
                    enableScroll={true}
                    clickable={true}
                    active={0}

                  >
                    <img src="img/sala-900x600.png" alt="list" />
                    <img src="img/sala-900x600.png" alt="list" />
                    <img src="img/944390254ed4fd2b9fb33ad76b37d9a1.png" alt="list" />
                    <img src="img/coworking.jpg" alt="list" />
                    <img src="img/coworking.jpg" alt="list" />
                    <img src="img/coworking.jpg" alt="list" />
                    <img src="img/coworking.jpg" alt="list" />
                  </Coverflow>


            </div>
            </section>
            </>
        )
    }
}

export default ListingDetailsSlider;