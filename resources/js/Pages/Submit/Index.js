import React, { Component } from "react";
import { Inertia } from '@inertiajs/inertia';
import Form from "../../Components/HypeForm/HypeForm";
import '../../Components/HypeForm/HypeForm.css'

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
                            <Form />
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default Index;
