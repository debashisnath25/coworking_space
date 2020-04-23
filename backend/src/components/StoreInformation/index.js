import React, {Component} from 'react';

export default class StoreInformation extends Component{
    constructor (props) {
        super (props);
        this.state = {
        StoreId: this.props.StoreId,
        StoreName: this.props.StoreName,
        Wanted7strName: this.props.Wanted7strName,
        BusinessName: this.props.BusinessName
        };
      }
      
    render(){
        const {StoreId,StoreName,Wanted7strName,BusinessName} = this.state
        return(
            <>
            <div className="row text-center">
                <div className="col-12">
                    <a href="#/" style={{fontWeight: 'bold', textDecoration: 'underline', color: '#000'}}>{StoreId}</a>
                    <br />{StoreName}
                    <br />{Wanted7strName}
                    <br />{BusinessName}
                </div>
            </div>
            </>
        )
    }
}