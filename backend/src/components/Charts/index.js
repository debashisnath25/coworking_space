import React,{Component} from 'react';
import c3 from 'c3';
import './c3.min.css';
import './style.css';
class Charts extends Component{

  constructor(props){
    super(props);
    this.state = {
      items: this.props.data,
      bindto: '#'+this.props.bindto,
      data:{
        columns: this.props.data,
        type : this.props.type
      }
    }
  }

  componentDidMount() {
    this.chartPayment();
  }

  chartPayment(){
    c3.generate({
      bindto: this.state.bindto,
      data:this.state.data,
    });
  }

  render(){
    return(
        <div id={this.props.bindto}></div>
    );
  }
}
export default Charts;
