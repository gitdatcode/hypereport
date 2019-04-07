import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Link } from 'react-router-dom';
import Header from './components/Header';
import MonthSelector from '.components/MonthSelector';
import MonthView from './components/MonthView';


function Home() {
	return (
		/* TODO: fill in the home page here */
	);
}

class App extends React.Component {

	componentDidMount() {
		
		/* TODO: make db request here? */
	
	}

	render() {
		<Router>
			<Header />
			<Route exact path="/" component={Home} />
			<Route path="/:year/:month" component={MonthView} />
			<MonthSelector />
		</Router>
	}
}

ReactDom.render(<App />, document.getElementById('app'));