import React,{Component} from 'react';

class Header extends Component{
  constructor(props){
    super(props);
    this.state = {
      UserId: 1,
      UserSal: "Mr.",
      UserFname: "Dheeraj",
      UserLname: "Sood",
      UserType: "Super Admin",
      UserImage: 'https://sophosnews.files.wordpress.com/2014/04/anonymous-250.jpg?w=250&h=250&crop=1',
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

  render(){

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
          <ul className="navbar-nav">
            <li className={this.state.sidebarUserMenuContainer}>
              <a className="nav-link dropdown-toggle no-arrow d-inline-flex align-items-center" data-toggle="dropdown" onClick={this.toggleMenuUser} href="#/">
                <span className="position-relative d-inline-block">
                  <img className="rounded-circle" src={this.state.UserImage} alt={this.state.UserId} width={36} />
                  <span className="badge-point badge-success avatar-badge"></span>
                </span>
              </a>
              <div className={this.state.sidebarUserMenu} style={{ minWidth: 280 }} >
                <div className="p-4 mb-4 media align-items-center text-white" style={{ backgroundColor: "#2c2f48" }} >
                  <img className="rounded-circle mr-3" src={this.state.UserImage} alt={this.state.UserId} width={55} />
                  <div className="media-body">
                    <h5 className="mb-1">{this.state.UserSal} {this.state.UserFname} {this.state.UserLname}</h5>
                    <div className="font-13"> {this.state.UserType} </div>
                  </div>
                </div>
                <a className="dropdown-item d-flex align-items-center" href="/Commissions">
                  <i className="ft-user mr-3 font-18 text-muted"></i>Commissions
                </a>
                <a className="dropdown-item d-flex align-items-center" href="/category">
                  <i className="ft-message-square mr-3 font-18 text-muted"></i>Category
                </a>
                <a className="dropdown-item d-flex align-items-center" href="/settings">
                  <i className="ft-settings mr-3 font-18 text-muted"></i>Settings
                </a>
                <a className="dropdown-item d-flex align-items-center" href="/faq">
                  <i className="ft-settings mr-3 font-18 text-muted"></i>FAQ
                </a>
                <div className="dropdown-divider my-3"></div>
                <div className="mx-4">
                  <a className="btn btn-link p-0" href="#/">
                    <span className="btn-icon">
                      <i className="ft-power mr-2 font-18"></i>Logout
                    </span>
                  </a>
                </div>
              </div>
            </li>
          </ul>
        </nav>
      </>
    );
  }
}
export default Header;
