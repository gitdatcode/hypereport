import React from 'react';
import './navbar.css';

//TODO: where does the CSS need to be?

// function toggleMenu() {
//   var x = document.getElementById("site-nav-links");
//   if (x.className === "site-nav-links not-visible") {
//     x.className = "site-nav-links visible";
//   } else {
//     x.className = "site-nav-links not-visible";
//   }
// };

class Navbar extends React.Component {
	constructor(props) {
		super(props);
	}

	render() {
		return (
			<header className="site-header">
			  <a id="logo" href="/">
			    
			  </a>
			  <nav id="site-nav" className="site-nav">
			    <a href="/">Home</a>
			    <a href="https://www.datcode.io/blog">Blog</a>
			    <a href="https://resources.datcode.io">Resources</a>
						<a className="nav-sign-up" href="">Submit</a>
			  </nav>
			  <nav id="site-nav-mobile" className="site-nav-mobile">
			  	<div id="menu-icon" className="icon">
			        <i className="fas fa-bars"></i>
			      </div>
			  	<div id="site-nav-links" className="site-nav-links not-visible">
			  		<ul>
					    <li><a href="/">Home</a></li>
					    <li><a href="/blog">Blog</a></li>
					    <li><a href="https://resources.datcode.io">Resources</a></li>
								<li><a className="nav-sign-up" href="/submit">Submit</a></li>
						</ul>
					</div>
			  </nav>
			</header>
		);
	}
}

export default Navbar;