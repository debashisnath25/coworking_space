import React, {Component} from 'react';

export default class ProductInformation extends Component{
    constructor (props) {
        super (props);
        this.state = {
            ItemId: this.props.ItemId,
            Itemname: this.props.Itemname,
            itemimage: this.props.itemimage,
            Itemoptions: this.props.Itemoptions,
        };
      }
    render(){
        return(
            <>
                {
                    <div className="row">
                        <div className="col-md-12 col-sm-12 col-xs-12" style={{textAlign: 'center'}}>
                        <img className="rounded-lg" src={this.props.itemimage} alt={this.props.itemimage} style={{height: 100}} />
                        </div>
                        <div className="col-md-12 col-sm-12 col-xs-12" style={{textAlign: 'center'}}>
                        <a href="#/" className="font-14" style={{textDecoration: 'underline', color: '#000'}}>{this.props.Itemname}</a>
                        <br />
                        <a href="#/" className="font-12" style={{fontWeight: 'bold', textDecoration: 'underline', color: '#000'}}>{this.props.ItemId}</a>
                        <br />
                        {
                        this.state.Itemoptions.length > 0
                        ?
                        this.props.Itemoptions.map((attrData,attrindex) => {
                            return(
                            <>
                                <span className="font-12">{attrData.options} : <b>{attrData.optionsValues[0].valuesName}</b></span>
                                <br />
                            </>
                            )
                            })
                            :
                            ""
                        }
                        </div>
                    </div>
                 }
            </>
        )
    }
}