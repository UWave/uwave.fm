import React from 'react'
import {Link} from 'react-router-dom'

const About = () => (
  <div className="content container">
    <h1>About Us</h1>
    <p>
      <i>
        UWave Radio is the campus-based community station of the Bothell area and beyond. We are a center for community engagement, a hub for underrepresented voices and music, an environment for professional development, and a catalyst for social justice.
      </i>
    </p>
    <p>
      In 2012, a group of <a href="https://www.uwb.edu">University of Washington Bothell</a> students who shared a common interest in community media began building a radio station from scratch. We started broadcasting online in the spring of 2013 with a mixture of talk, music, and educational programming. We are growing every day! To learn more, visit our <a href="/getinvolved">get involved page</a>.
    </p>
    <iframe title='UWave Radio Introduction'  width="100%" height="300" src="https://www.youtube.com/embed/AAbr7phzfCg" frameBorder="0" allowFullScreen />
    <p>
      Our organization is broken into four departments. Each department is made up
      of two directors who manage the workflow and a group of volunteers who make
      sure things get done. The departments are as follows:
    </p>

    <ul>
      <li>
        <b className="red">Business</b> is in charge of the little details: underwriting content, legal inquiries, fundraising, connecting with
        local businesses, etc.
      </li>
      <li>
        <b className="red">Programming</b> manages on-air content. They organize shows,
        curate the music library, and train new hosts and DJs.
      </li>
      <li>
        <b className="red">Promotions</b> is the voice of UWave. They get the word out
        about volunteer opportunities, fundraisers and upcoming events.
      </li>
      <li>
        <b className="red">Technology</b> runs the computers, website and audio equipment,
        including the studio and servers.
      </li>
    </ul>

    <div>
        <h2>Other Student Publications <small>(AKA our BFFs)</small></h2>
        <p>We are one of four student publications on campus:</p>
        <ul>
          <li>
            <b><a href="http://www.huskyherald.com/" className="red">Husky Herald</a></b>, the UW Bothell student newspaper.
          </li>

          <li>
            <b><a href="http://uwbpolicyjournal.com/" className="red">UWB Policy Journal</a></b>, is a compilation of policy-related work submitted and published by students of the University of Washington Bothell.
          </li>

          <li>
            <b><a href="http://clamor-journal.com/" className="red">Clamor</a></b>, is the literary and arts journal at UWB.
          </li>
        </ul>
    </div>

    <div className='red'>
      <center>
        <h4>Want UWave Radio to DJ at your event? <br /> Check Out Our <Link className='red' to='/events'>Events</Link> Page!</h4>
      </center>
    </div>
  </div>
  )

export default About