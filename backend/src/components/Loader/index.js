import React,{Component} from 'react';
import TopBarProgress from "react-topbar-progress-indicator";



export default class Loader extends Component{
    
    render(){
        TopBarProgress.config({
            barColors: {
                "0": "#D30EFD",
                "1": "#6A077F"
            },
                shadowBlur: 0,
                barThickness: 4
        });
        return(
            <TopBarProgress  />
        )
    }
}