import React from 'react';
import ReactDOM from 'react-dom';
//import { BrowserRouter as Router, Route, Link } from 'react-router-dom';
import LandingPage from './LandingPage';
import MonthSelector from './MonthSelector.js';
import Navbar from './Navbar';


// function Home() {
// 	return (
// 		 TODO: fill in the home page here 
// 	)
// }

export default class App extends React.Component {

	componentDidMount() {
		
		/* TODO: make db request here? */
	
	}

	render() {
			return (
				<>
					<Navbar />
					<LandingPage />
					<MonthSelector />
				</>
		);
	}
}

