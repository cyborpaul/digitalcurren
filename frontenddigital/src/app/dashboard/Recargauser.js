import React, { Component,useCallback,useEffect, useState  } from 'react';
import { Doughnut } from 'react-chartjs-2';
import Slider from "react-slick";
import { TodoListComponent } from '../apps/TodoList'
import { VectorMap } from "react-jvectormap"


import axios from "axios";


export default function Dashboard(props){

  const [state, setState] = useState({
    movimientos:[],
    usuarios:[],
    eventos:[],
    saldomovimientos:[],
    busqueda:'',
    isLoad:false
  })




  return (
    <div>
      <div className="row ">
      <div className="col-xl-8 col-sm-8 grid-margin stretch-card">
          <div className="card">
            <div className="card-body">
              <div className="row">
                <div className="col-9">
                  <div className="d-flex align-items-center">
                     <input style={{ width: "100%", height: "150px", fontSize: "80px" }} placeholder='Ingresar monto a recargar'/>
                  </div>
                </div>

              </div>
              <h3 className="text-muted font-weight-normal">Reacargar al usuario: {props.user}</h3>
            </div>
          </div>
        </div>
      </div>


    </div> 
  );

}

