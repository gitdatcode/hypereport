import React, { Component } from "react";

class Woops extends Component {
    constructor(props){
        super(props)
    }

    render(){
        return(
            <div className="welcome">
                <div className="emoji">&#10071;</div>
                <h1>Woops! Something went wrong. Please refresh the page and try again.</h1>
            </div>
        )
    }
}

export default Woops;


