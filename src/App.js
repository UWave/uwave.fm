// typical react
import React, { Component } from 'react';
import { Link, Route } from "react-router-dom"

// react libraries 
import 'bootstrap/dist/css/bootstrap.css'
// import { Button } from 'reactstrap'

// components
// import Header from './pages/header.js'
import Home from './pages/home.js'
import About from './pages/about.js'
import Contact from './pages/contact.js'
import Donate from './pages/donate.js'
import Events from './pages/events.js'
import JoinUs from './pages/joinus.js'
import Promotions from './pages/promotions.js'
import Schedule from './pages/schedule.js'

// css
import './App.css';
import './css/uwave.css'
import UWave_Logo from './img/uwave.png'
// import './css/embed.css' //implement as in-line style 
// import './css/font-awesome.min.css'

class App extends Component {
  render() {
    return (
      <div>
        <div className='masthead-brand'>
          <Link to='/'><img src={UWave_Logo} alt="UWave" align="middle" /></Link>
        </div>
        <nav>
          <ul className='nav masthead-nav'>
            <li><Link to='/'>Home</Link></li>
            <li><Link to='/about'>About</Link></li>
            <li><Link to='/join'>Join Us</Link></li>
            <li><Link to='/contact'>Contact Us</Link></li>
            <li><Link to='/events'>Events</Link></li>
            <li><Link to='/schedule'>Schedule</Link></li>
            <li><Link to='/promotions'>Promotions</Link></li>
            <li><Link to='/donate'>Donate</Link></li>
          </ul>
        </nav>

        <div className='container'>
          <Route exact={true} path='/' component={Home} />
          <Route exact={true} path='/about' component={About} />
          <Route exact={true} path='/contact' component={Contact} />
          <Route exact={true} path='/donate' component={Donate} />
          <Route exact={true} path='/events' component={Events} />
          <Route exact={true} path='/join' component={JoinUs} />
          <Route exact={true} path='/promotions' component={Promotions} />
          <Route exact={true} path='/schedule' component={Schedule} />
        </div>
      </div>
    );
  }
}

export default App;
