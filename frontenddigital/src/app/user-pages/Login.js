import React, { useCallback,useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import { Form } from 'react-bootstrap';

import axios from "axios";


export default function Login(){
  const [state, setState] = useState({
    recursoc:[],
    isLoad:false
  })


  useEffect(() => {
    axios.get('http://inventalo.test/apidigital/api/user').then((res) => {
      setState({

          recursoc:res.data.usuarios,
          isLoad: true
      });
    });
    return () => {
      setState({
        isLoad: false
      })
    }
  }, [])


  return <div>
            <div className="d-flex align-items-center auth px-0">
              <div className="row w-100 mx-0">
                <div className="col-lg-4 mx-auto">
                  <div className="card text-left py-5 px-4 px-sm-5">
                    <div className="brand-logo">
                      <img src={require("../../assets/images/logo.svg")} alt="logo" />
                    </div>
                    <h4>Hola! Comencemos ahora</h4>
                    <h6 className="font-weight-light">Inicia sesión para continuar</h6>
                    <Form className="pt-3">
                      <Form.Group className="d-flex search-field">
                        <Form.Control type="email" placeholder="Ingresar correo electrónico" size="lg" className="h-auto" />
                      </Form.Group>
                      <Form.Group className="d-flex search-field">
                        <Form.Control type="password" placeholder="Ingresar tu contraseña" size="lg" className="h-auto" />
                      </Form.Group>
                      <div className="mt-3">
                        <Link className="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" to="/dashboard">Iniciar sesión</Link>
                      </div>
                      <div className="my-2 d-flex justify-content-between align-items-center">
                        
                        <a href="!#" onClick={event => event.preventDefault()} className="auth-link text-muted">Olvidaste tu contraseña?</a>
                      </div>
                      <div className="text-center mt-4 font-weight-light">
                        Aún no tienes una cuenta? <Link to="/user-pages/register-1" className="text-primary">Registrate</Link>
                      </div>
                    </Form>
                  </div>
                </div>
              </div>
            </div>  
          </div>
}


