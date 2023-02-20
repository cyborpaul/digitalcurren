import React from 'react'
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';
import Product from './components/producto';
import Dashboard from './components/Dashboard';


const App = () => {
  return (
    <Router>
        <Routes>
          <Route exact path="/" element={<Product/>}/>
          <Route exact path="/dashboard" element={<Dashboard/>}/>

        </Routes>
    </Router>
  );
}

export default App;
