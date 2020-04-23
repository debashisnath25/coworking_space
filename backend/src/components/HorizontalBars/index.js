import React,{Component} from 'react';
import './c3.min.css';
import './style.css';
import {HorizontalBar} from 'react-chartjs-2';

export default class HorizontalBars extends Component{
  constructor(props){
    super(props);
    this.state = {
      bindto: '#'+this.props.bindto,
      data: {
        labels: this.props.labels,
      	datasets: [{
      		label: 'Total Complaints',
      		backgroundColor: '#00bcd4',
      		data: this.props.data,
      	}]
      }
    }
  }


  render(){
    return(
        <HorizontalBar data={this.state.data} />
    );
  }
}
