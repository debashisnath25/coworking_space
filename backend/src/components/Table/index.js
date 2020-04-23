import React,{Component} from 'react';

export default class Table extends Component{
   constructor(props){
     super(props);
     this.state = {
       thead: this.props.thead,
       tdata: this.props.tdata
     }
   }

   render(){
     return(
       <>
         <div className="table-responsive mb-4">
           <table className="table cols-align-middle">
             <thead>
                <tr>
                 {
                   this.state.thead.map((tbldata,index) =>
                      <th key={index}>{tbldata}</th>
                   )
                 }
                </tr>
             </thead>
             <tbody>
               {
                    this.state.tdata.map((tbldatabody,index) =>(
                       <tr key={index}>
                        {
                          tbldatabody.map((tbldata,tbldataindx) =>
                             //<td key={tbldataindx}>{tbldata}</td>
                             <td key={tbldataindx} dangerouslySetInnerHTML={{__html: tbldata}} />
                          )
                        }
                       </tr>
                    ))
               }
             </tbody>
           </table>
         </div>
      </>
     );
   }
}
