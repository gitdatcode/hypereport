import React from 'react';
//TODO: where does the CSS need to be?

class Header extends React.Component {
	constructor(props) {
		super(props);
	}

	toggleMenu() {
	  var x = document.getElementById("site-nav-links");
	  if (x.className === "site-nav-links not-visible") {
	    x.className = "site-nav-links visible";
	  } else {
	    x.className = "site-nav-links not-visible";
	  }
	}

	render() {
		return (
			<header className="site-header">
			  <a id="logo" href="{{@blog.url}}" title="{{@blog.title}}">
			    <img alt="{{@blog.title}}" src="{{@blog.logo}}" />
			  </a>
			  <nav id="site-nav" className="site-nav">
			    <a href="/">Home</a>
			    <a href="https://www.datcode.io/blog">Blog</a>
			    <a href="https://resources.datcode.io">Resources</a>
			    {{^is 'home'}}
						<a className="nav-sign-up" href="">Submit</a>
					{{/is}}
			  </nav>
			  <nav id="site-nav-mobile" className="site-nav-mobile">
			  	<a id="menu-icon" className="icon" onClick={toggleMenu()}>
			        <i className="fas fa-bars"></i>
			      </a>
			  	<div id="site-nav-links" className="site-nav-links not-visible">
			  		<ul>
					    <li><a href="/">Home</a></li>
					    <li><a href="/blog">Blog</a></li>
					    <li><a href="https://resources.datcode.io">Resources</a></li>
					    {{^is 'home'}}
								<li><a classNameName="nav-sign-up" href="">Submit</a></li>
							{{/is}}
						</ul>
					</div>
			  </nav>
			</header>
		);
	}
}

export default Header;