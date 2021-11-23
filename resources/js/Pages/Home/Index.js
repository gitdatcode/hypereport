import React, { Component } from "react";
import { Inertia } from '@inertiajs/inertia';
import SignUp from "./SignUp";
import './SignUp.css'

class Index extends Component {
    constructor(props) {
        super(props);
        this.state = {
            values: {

            },
        };
    }

    render() {
        return (
            <div className={"container-fluid"}>
                <div className={"row step-wrapper"}>
                    <div className={"col-12 col-md-6 offset-md-3 step step-0"}>
                        <div>
                            <SignUp />
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default Index;
