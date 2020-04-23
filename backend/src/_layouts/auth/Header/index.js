import React,{Component} from 'react';
import axios from 'axios';
import Cookies from 'universal-cookie';

const cookies = new Cookies();
class Header extends Component{
  constructor(props){
    super(props);
    this.state = {
      userDetails : [],
      SidebarMenu: '',
      sidebarUserMenuContainer: 'nav-item dropdown',
      sidebarUserMenu: 'dropdown-menu dropdown-menu-right pt-0 pb-4'
    };
    this.toggleMenu = this.toggleMenu.bind(this);
    this.toggleMenuUser = this.toggleMenuUser.bind(this);
  }

  toggleMenuUser(){
    if(this.state.sidebarUserMenuContainer === 'nav-item dropdown'){
      this.setState({
        sidebarUserMenuContainer : 'nav-item dropdown show',
        sidebarUserMenu: 'dropdown-menu dropdown-menu-right pt-0 pb-4 show'
      });
    }else{
      this.setState({
        sidebarUserMenuContainer : 'nav-item dropdown',
        sidebarUserMenu: 'dropdown-menu dropdown-menu-right pt-0 pb-4'
      });
    }
  }

  componentDidMount(){
    let userId = cookies.get("Token");
    this.setState({ loading: true }, () => {    
      axios.post('http://localhost:4000/api/users/fetchData',  {userId} )
      .then(result => {
        this.setState({
        userDetails: result.data    
      })
    });
  });
  }
  
  toggleMenu(){
    if(this.state.SidebarMenu === ''){
      this.setState({
        SidebarMenu: 'mini-sidebar'
      });
      document.body.classList.add("mini-sidebar");
    }else{
      this.setState({
        SidebarMenu: ''
      });
      document.body.classList.remove("mini-sidebar");
    }
  }

  logout(){
    cookies.remove("signupUsr");
    cookies.remove("storeId");
    cookies.remove("storeType");
    cookies.remove("Token");
    localStorage.removeItem("ProductId");
    console.log("loggedout");
  }
  render(){
    const {userDetails} = this.state; 
    return(
      <>  
        
            <nav className="navbar navbar-expand navbar-light fixed-top header">
              <ul className="navbar-nav mr-auto">
                <li className="nav-item ">
                  <a className="nav-link navbar-icon sidebar-toggler" onClick={this.toggleMenu} href="#/">
                    <span className="icon-bar"></span>
                    <span className="icon-bar"></span>
                    <span className="icon-bar"></span>
                  </a>
                </li>
              </ul>
          {
          userDetails.map((userData,userIndex) => {
            return(
              <ul className="navbar-nav" key={userIndex}>
                <li className="nav-item">
                  <a className="nav-link navbar-icon quick-sidebar-toggler" href="#/">Help
                  </a>
                </li>
                <li className="nav-divider">
                </li>
                <li className="nav-item">
                  <a className="nav-link btn btn-primary clr" href="#/" style={{color: '#fff'}}>
                    Visit Store
                  </a>
                </li>
                <li className="nav-divider">
                </li>
                <li className={this.state.sidebarUserMenuContainer}>
                  <a className="nav-link dropdown-toggle no-arrow d-inline-flex align-items-center" data-toggle="dropdown" onClick={this.toggleMenuUser} href="#/">
                    <span className="position-relative d-inline-block">
                      {
                        (userData.userImg.length > 0)?
                          userData.userImg.map((imgData) => {
                            return(
                              <img className="rounded-circle" src={imgData.thumbnail} alt={imgData.thumbnail} width={36} />
                            )
                          })
                        :
                        <img className="rounded-circle" src="http://wanted7cdn.s3-accelerate.amazonaws.com/uploads/defaults/portrait_noprev.jpg" alt="Profile Default" width={36} />
                      }
                      <span className="badge-point badge-success avatar-badge"></span>
                    </span>
                  </a>
                  <div className={this.state.sidebarUserMenu} style={{ minWidth: 280 }} >
                    <div className="p-4 mb-4 media align-items-center text-white" style={{ backgroundColor: "#2c2f48" }} >
                    {
                      (userData.userImg.length > 0)?
                        userData.userImg.map((imgData) => {
                          return(
                            <img className="rounded-circle mr-3" src={imgData.thumbnail} alt={imgData.thumbnail} width={55} />
                          )
                        })
                      :
                      <img className="rounded-circle mr-3" src="http://wanted7cdn.s3-accelerate.amazonaws.com/uploads/defaults/portrait_noprev.jpg" alt="Profile Default" width={55} />
                    }
                    <div className="media-body">
                      <h5 className="mb-1">{userData.salutation} {userData.firstName} {userData.lastName}</h5>
                      <div className="font-13"> {userData.userType} </div>
                    </div>
                  </div>
                  <a className="dropdown-item d-flex align-items-center" href="/profile">
                    <i className="ft-user mr-3 font-18 text-muted">
                    </i>Profile
                  </a>
                  <a className="dropdown-item d-flex align-items-center" href="/setting">
                    <i className="ft-settings mr-3 font-18 text-muted">
                    </i>Settings
                  </a>
                    <div className="dropdown-divider my-3"></div>
                    <div className="mx-4">
                      <a className="btn btn-link p-0" href="#/" onClick={this.logout}>
                        <span className="btn-icon">
                          <i className="ft-power mr-2 font-18"></i>Logout
                        </span>
                      </a>
                    </div>
                  </div>
                </li>
              </ul>
              )
            })
          }
        </nav>
      </>
    );
  }
}
export default Header;
