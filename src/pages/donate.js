import React from 'react'
import { Link } from "react-router-dom"

import check from '../img/check.jpg'
const Donate = () => (
  <div className="content container">
    <h1>Donate</h1>
    <p>We accept donations through our gift account with the UW.</p>
    <h2>
      <center>
        <a href="https://www.washington.edu/giving/make-a-gift/?page=funds&source_typ=3&source=UWAVEB" className="btn btn-lg btn-red">Click Here to Donate to UWave Radio</a>
      </center>
    </h2>
    <br />
    <h3>Donation FAQs</h3>
    <ol id="donationFAQs">
        <li><b className="red">How much can I donate?</b><br />
        <p>
          Donors must give a minimum of $10; that is the only restriction. There is no maximum amount that you can donate; the more the merrier! Those who wish to donate amounts larger than $1,000, please contact <a href="mailto:business@uwave.fm">business@uwave.fm</a> to clear with our Business department first.
        </p>
        </li>

        <li>
          <b className="red">Do I have to donate online?</b><br />
          <p>No. You can also donate with a check or cash by mail to:</p>
          <address>
              Box 358528<br />
              18115 Campus Way NE<br />
              UW1, Suite 281<br />
              Bothell WA 98011-8246<br />
          </address>
          <p>
            For check donations, please pay to the order of the University of Washington. On the memo line, write "UWave Radio" as shown below. Please note that it may take some time for you to receive acknowledgment for a check or cash contribution.
          </p>
        </li>

        <center>
          <img src={check} width="100%" alt="Sample Check"/>
        </center>

        <li>
          <b className="red">What is the money used for?</b><br />
          <p>
            As a growing community radio station, UWave Radio accumulates a big bill. We want to have as much saved in emergency funds as we can so we can continue to provide quality radio to our listeners. The money earned in the gift account is used by UWave Radio only, and will be used for things such as to update our music collection, pay for new equipment, purchase promotional materials and fund events. During our fund drives, UWave Radio will outline the specific goal for funds. For example, if we need $800 for a new channel control mixer, we will announce our goal on air (and also describe what a channel control mixer is). The money we receive during that fund drive will go only to the purchase(s) we announced.
          </p>
        </li>

        <li>
          <b className="red">What's in it for me?</b><br />
          <p>
            By supporting UWave Radio, you are helping us provide quality on-air programming to the community. The more supporters we have, the better we are able to fund and accomplish our goals as an organization.
          </p>
        </li>
    </ol>
    <b className="red">UWave Radio's mission statement</b><br />
    <p>
      "UWave Radio is the campus-based community station of the Bothell area and beyond. We are a center for community engagement, a hub for underrepresented voices and music, an environment for professional development, and a catalyst for social justice." For more information on UWave Radio, please visit our <Link to='/about'>about</Link> page.
      <br /><br />
      Thank you for supporting UWave Radio, UWBs student-run community radio station!
    </p>
  </div>
)

export default Donate