import React, { Component } from 'react';
import { Link } from 'react-router-dom';

export class Register extends Component {
  render() {
    return (
      <div>
        <div className="d-flex align-items-center auth px-0 h-100">
          <div className="row w-100 mx-0">
            <div className="col-lg-4 mx-auto">
              <div className="card text-left py-5 px-4 px-sm-5">
                <div className="brand-logo">
                  <img src={require("../../assets/images/logo.svg")} alt="logo" />
                </div>
                <h4>Nuevo aquí?</h4>
                <h6 className="font-weight-light">Regstrate fácil. Solo sigue llena los siguientes campos</h6>
                <form className="pt-3">
                  <div className="form-group">
                    <input type="text" className="form-control form-control-lg" id="exampleInputUsername1" placeholder="Nombres" />
                  </div>
                  <div className="form-group">
                    <input type="text" className="form-control form-control-lg" id="exampleInputEmail1" placeholder="Apellidos" />
                  </div>
                  <div className="form-group">
                    <input type="text" className="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" />
                  </div>
                  <div className="form-group">
                    <input type="text" className="form-control form-control-lg" id="exampleInputEmail1" placeholder="Dirección" />
                  </div>
                  <div className="form-group">
                    <input type="text" className="form-control form-control-lg" id="exampleInputEmail1" placeholder="Teléfono" />
                  </div>
                  <div className="form-group">
                    <input type="text" className="form-control form-control-lg" id="exampleInputEmail1" placeholder="DNI" />
                  </div>
                  <div className="form-group">
                    <input type="text" className="form-control form-control-lg" id="exampleInputEmail1" placeholder="Distrito" />
                  </div>                 
                  <div className="form-group">
                    <input type="text" className="form-control form-control-lg" id="exampleInputEmail1" placeholder="Provincia " />
                  </div>

                  <div className="form-group">
                    <input type="text" className="form-control form-control-lg" id="exampleInputEmail1" placeholder="Departamento" />
                  </div>
{/*                   <div className="form-group">
                    <select className="form-control form-control-lg" id="exampleFormControlSelect2">
                      <option>Country</option>
                      <option>United States of America</option>
                      <option>United Kingdom</option>
                      <option>India</option>
                      <option>Germany</option>
                      <option>Argentina</option>
                    </select>
                  </div> */}
                  <div className="form-group">
                    <input type="password" className="form-control form-control-lg" id="exampleInputPassword1" placeholder="Contraseña" />
                  </div>
                  <div className="mb-4">
                    <div className="form-check">
                      <label className="form-check-label text-muted">
                        <input type="checkbox" className="form-check-input" />
                        <i className="input-helper"></i>
                        Estoy de acuerdo con todos los términos y condiciones
                      </label>
                    </div>
                  </div>
                  <div className="mt-3">
                    <Link className="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" to="/dashboard">Registrar</Link>
                  </div>
                  <div className="text-center mt-4 font-weight-light">
                    Ya tienes una cuenta? <Link to="/user-pages/login-1" className="text-primary">Iniciar sesión</Link>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    )
  }
}

export default Register
