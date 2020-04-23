import React,{Component} from 'react';

const Hourzz = ['1','2','3','4','5','6','7','8','9','10','11','12'];
const Minutezz = ['00','15','30','45'];
export default class TimePicker extends Component{
    constructor(props){
        super(props);
        this.state = {
            inputName : this.props.name,
            onChangeFunction : this.props.onChange,
        }
    }
    render(){

        const {inputName,onChangeFunction} = this.state;
        
        return(
            <>
                <div className="row">
                    <div className="col-md-4 col-xs-12 col-sm-12" style={{paddingRight:'4px'}}>
                        <select className="form-control form-group-default form-g-grey mb-3" name={inputName+'Hour'} onChange={onChangeFunction} >
                            <option value="" selected={this.props.Hour === '' ? true : false} disabled>Hour</option>
                            {
                                Hourzz.map((data,index)=> {
                                    return(
                                        <option value={data} selected={this.props.Hour === data ? 'true':'false'}>{data}</option> 
                                    )
                                })
                            }
                        </select>
                    </div>
                    <b style={{marginTop:'7px',fontSize:'15px'}}> : </b>
                    <div className="col-md-4 col-xs-12 col-sm-12" style={{paddingLeft:'4px'}}>
                        <select className="form-control form-group-default form-g-grey mb-3" name={inputName+'Minute'} onChange={onChangeFunction}>
                            <option value="" selected={this.props.Minute === '' ? true:false} disabled>Minute</option>
                            {
                                Minutezz.map((data,index)=> {
                                    return(
                                        <option value={data} selected={this.props.Minute === data ? true:false}>{data}</option> 
                                    )
                                })
                            }
                        </select>
                    </div>
                    <div className="col-md-3 col-xs-12 col-sm-12" style={{paddingLeft:'2px'}}>
                        <select className="form-control form-group-default form-g-grey mb-3" name={inputName+'AmPm'} onChange={onChangeFunction}>
                            <option value="" selected={this.props.AmPm === '' ? true:false} disabled>AM/PM</option>
                            <option value="AM" selected={this.props.AmPm === 'AM' ? true:false}>AM</option>
                            <option value="PM" selected={this.props.AmPm === 'PM' ? true:false}>PM</option>
                        </select>
                    </div>
                </div>
            </>
        )
    }
}