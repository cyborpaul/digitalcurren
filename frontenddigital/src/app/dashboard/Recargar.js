import React, { Component,useCallback,useEffect, useState  } from 'react';
import { Doughnut } from 'react-chartjs-2';
import Slider from "react-slick";
import { TodoListComponent } from '../apps/TodoList'
import { VectorMap } from "react-jvectormap"
import Recargauser from './Recargauser'

import axios from "axios";

const mapData = {
  "BZ": 75.00,
  "US": 56.25,
  "AU": 15.45,
  "GB": 25.00,
  "RO": 10.25,
  "GE": 33.25
}

export default function Dashboard(){

  const [state, setState] = useState({
    movimientos:[],
    usuarios:[],
    eventos:[],
    saldomovimientos:[],
    busqueda:'',
    isLoad:false
  })


  const [value, setValue] = useState('');

  const handleInputChange = (event) => {
    const newValue = event.target.value;
    setValue(newValue);
    console.log(newValue);
  };

  const filteredData = state.usuarios.filter((item) => {
    return item.use_txt_nombre.toLowerCase().includes(value.toLowerCase());
  });


  const [buttonValue, setButtonValue] = useState('');

  const handleClick = (event) => {
    const val = event.target.value;
    setButtonValue(val);
  };



  useEffect(() => {
    axios.get('http://inventalo.test/apidigital/api/user').then((res) => {
      console.log(res);
      setState({


          usuarios: res.data.usuarios,

          
          isLoad: true
      });
    });
    return () => {
      setState({
        isLoad: false
      })
    }
  }, [])

  const transactionHistoryData =  {
    labels: ["Paypal", "Stripe","Cash"],
    datasets: [{
        data: [55, 25, 20],
        backgroundColor: [
          "#111111","#00d25b","#ffab00"
        ]
      }
    ]
  };

  const transactionHistoryOptions = {
    responsive: true,
    maintainAspectRatio: true,
    segmentShowStroke: false,
    cutoutPercentage: 70,
    elements: {
      arc: {
          borderWidth: 0
      }
    },      
    legend: {
      display: false
    },
    tooltips: {
      enabled: true
    }
  }

  const sliderSettings = {
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1
  } 

  return (
    <div>
      <div className="row ">
        <div className="col-12 grid-margin">
          <div className="card">
            <div className="card-body">
            <ul className="navbar-nav w-100">
            <li className="nav-item w-100">
              <form className="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                <input type="text" className="form-control" value={value} placeholder="Buscar usuarios" onChange={handleInputChange}/>
              </form>
            </li>
          </ul>
              <div className="table-responsive">
                <table className="table">
                  <thead>

                  </thead>
                  <tbody>
                  { buttonValue==='' ? <ul>
                    {filteredData.map((item) => (
                        <tr>
                            <td><h6>{item.use_txt_nombre}</h6></td>
                        <td><button className='btn btn-primary btn-rounded btn-fw' value={item.use_txt_nombre} onClick={handleClick}>Recargar</button></td>
                        
                        </tr>                                  
                    ))}
                </ul>:<Recargauser user={buttonValue}></Recargauser>}



                <p>Selected button: {buttonValue}</p>
                   


                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div> 
  );

}

