import React, { Component } from "react";
import './SignUp.css'

class ThankYou extends Component {
    constructor(props){
        super(props)
    }

    render(){
        return(
            <div>
                <div className="emoji">&#127881;</div>
                <h1>Thank you for submitting your 2021 Hype Report! We can't wait to share this with the rest of the world!</h1>
            </div>
        )
    }
}

export default ThankYou;


