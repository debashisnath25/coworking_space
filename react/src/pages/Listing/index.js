import React,{Component} from 'react';
import './listing.css';
import { ListingSideBar,ListingCoWorkingSpace } from './../../components';


class Listing extends Component{
    render(){
      return(
        <>
           <div className="bg-w" style={{paddingTop: '100px'}}>
              <div className="container">
              <div className="row">
                  <div className=" col-12">
                  <ul className="banner-link ">
                      <li>
                      <a href="index.php">Home
                      </a>
                      </li>
                      <li>
                      <a href="listing.php">Maharashtra
                      </a>
                      </li>
                      <li>
                      <a href="listing.php">Nagpur
                      </a>
                      </li>
                      <li>
                      <span className="active">Co-working Space
                      </span>
                      </li>
                  </ul>
                  </div>
              </div>
              <div className="row "> 
                  <ListingSideBar/>
                  <ListingCoWorkingSpace/>
              </div>
              </div>
          </div>
        </>
      );
    }
}

export default Listing;
