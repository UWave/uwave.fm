import React from 'react'

const Contact = () => (
  <div className="content container">
  <h1>Contact UWave</h1>
  <p>
    If you have any questions or otherwise need to get in touch with us, the best way is just to email <a href="mailto:info@uwave.fm" className="red">info@uwave.fm</a>.
  </p>

  <p>To contact a speciic department:</p>
  <ul>
      <li><b className="red">Business</b>: <a href="mailto:business@uwave.fm">business@uwave.fm</a></li>
      <li><b className="red">Programming</b>: <a href="mailto:programming@uwave.fm">programming@uwave.fm</a></li>
      <li><b className="red">Promotions</b>: <a href="mailto:promotions@uwave.fm">promotions@uwave.fm</a></li>
      <li><b className="red">Technology</b>: <a href="mailto:tech@uwave.fm">tech@uwave.fm</a></li>
  </ul>
  
  <p>
    Additionally, you can call the studio at <font className="red">(425) 352-WAVE</font> (9283).
  </p>
  </div>
)

export default Contact