import React,{Component} from 'react';
import moment from 'moment';
import PropTypes from "prop-types";
import DateRangePicker from 'react-bootstrap-daterangepicker';
import './daterangepicker.css';
import './bootstrap-datepicker3.min.css';

class DashboardDateSelector extends Component{
  constructor(props){
      super(props);
      this.dateHandler = this.dateHandler.bind(this);
      this.state = {
          show: true,
          timeFrame: "All",
          fromDate: this.props.startDate,
          toDate: this.props.endDate,
          ranges: {
            'All': [moment(), moment()],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          }
      }

    }
    dateHandler = (data) => {
      this.setState({
        fromDate: data.target.fromDate,
        toDate: data.target.toDate
      });
    };

    render(){
        return(
            <>
              <DateRangePicker fromDate={this.state.fromDate} toDate={this.state.toDate} ranges={this.state.ranges} onEvent={this.dateHandler}>
                <div className="subheader_daterange" id="subheader_daterange">
                  <span className="subheader-daterange-label">
                    <span className="subheader-daterange-title"> </span>
                    <span className="subheader-daterange-date drp-selected">{this.state.fromDate} - {this.state.toDate}</span>
                  </span>
                  <button className="btn btn-floating btn-sm rounded-0" type="button">
                    <i className="ti-calendar" />
                  </button>
                </div>
              </DateRangePicker>
            </>
        );
  }
}
export default DashboardDateSelector;
DashboardDateSelector.propTypes = {
  startDate: PropTypes.string,
  endDate: PropTypes.string,

};
