import React from 'react';
import HypeCard from './components/HypeCard';

/*
		what does this need to do?
		- render the list of people for the month in a grid
		- clicking on a name in the grid should open the hype card
*/

function GridCell(props) {
	return(

	);
}

/* TODO: review react-router again: how do we get the route info to this component? */
class MonthView extends React.Component {
	constructor(props) {
		super(props);
		this.state = {
			hypes: [],
			currenthype: {},
			index: 0
		}
	}

	//renders cell for grid
	renderGridCell() {
		return (

		);
	}

	render() {
		return (

		);
	}
}

export default MonthView;