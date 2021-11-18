import React from 'react';
import './monthselector.css';

/*
	what does this need to do?
	- it needs to know what months are available for view
	- selecting a month should take the user to the month view
*/

class MonthSelector extends React.Component {
	render() {
		return (
			<div class="month-selector">
				<select className="dropdown">
					<option value="/2018">2018</option>
					<option value="/2019/january">January 2019</option>
					<option value="2019/february">February 2019</option>
					<option value="2019/march">March 2019</option>
				</select>
			</div>
		);
	}
}

export default MonthSelector;