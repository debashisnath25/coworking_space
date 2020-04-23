import React, {Component} from 'react';

export default class ContactVendor extends Component{
  constructor(props){
    super(props)
    this.state = {
      status:this.props.status,
      dataShow:this.props.showData
    }
    this.hideModal = this.hideModal.bind(this);
  }

  componentWillMount(){
    document.addEventListener('mousedown', this.handleClick, false);
  }

  componentWillUnmount(){
    document.removeEventListener('mousedown', this.handleClick, false);
  }


  hideModal = data => {
    this.setState({status:!this.state.status});
  }

  handleClick = (e) => {
      if( this.node.contains(e.target) ){
        return true;
      }
      this.hideModal();
  }


  render(){
    return(
      <>
      <div className={`modal fade ${this.props.status}`} tabindex="-1" role="dialog" style={{ display: (this.props.status === 'show')?"block":""}}>
         <div className="modal-dialog modal-lg ">
          <div className="modal-content" ref={node => this.node = node}>
                <div className="modal-header cardhdd">
                  <h5 className="modal-title h4" style={{ color: "#fff" }}>
                    Contact This Vendor
                  </h5>
                  <button
                    className="close"
                    type="button"
                    data-dismiss="modal"
                    aria-label="Close"
                    onClick={this.hideModal}
                  >
                    <i className="fas fa-times" style={{ fontSize: 15, color: "#fff" }} />
                  </button>
                </div>
                <div className="modal-body">
                  <div className=" card-fullheight">
                    <div className="card-body">
                      <div className="row">
                        <div className="col-md-6  ">
                          <div className="card card-fullheight">
                            <div className="card-body text-center">
                              <div className="mb-3 text-muted font-16">Vendor Email</div>
                              <div className="h3 mb-2">
                                <span>{this.props.showData.email}</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div className="col-md-6 ">
                          <div className="card card-fullheight">
                            <div className="card-body text-center">
                              <div className="mb-3 text-muted font-16">Vendor Phone</div>
                              <div className="h3 mb-2">
                                <span>{this.props.showData.phone}</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </>
    )
  }
}
