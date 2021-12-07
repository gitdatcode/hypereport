import  React, { Component } from "react";
import axios from "axios";
import Form from "react-bootstrap/Form";
import Button from "react-bootstrap/Button";
import ThankYou from "../../Components/ThankYou/ThankYou";
import Woops from "../../Components/Woops/Woops";

class HypeForm extends Component {
    constructor(props){
        super(props)
        this.state = {
            firstName: '',
            lastName: '',
            email: '',
            confirmEmail: '',
            achievements: '',
            selectedSocial: '',
            selectedEvent: '',
            selectedNewsletter: '',
            errors: '',
            errorField: '',
            isSubmitting: false,
            filled: false,
            woops: false,
            responded: false
        }
        this.onEventChange = this.onEventChange.bind(this)
        this.onSocialChange = this.onSocialChange.bind(this)
        this.onNewsLetterChange = this.onNewsLetterChange.bind(this)
        this.onValueChange = this.onValueChange.bind(this)
        this.handleSubmit = this.handleSubmit.bind(this)
        this.renderResponse = this.renderResponse.bind(this)
    }

    onSocialChange(event) {
        this.setState({selectedSocial: event.target.value});
    }

    onEventChange(event){
        this.setState({selectedEvent: event.target.value})
    }

    onNewsLetterChange(event){
        this.setState({selectedNewsletter: event.target.value})
    }

    onValueChange(e){
        this.setState({[e.target.name]:e.target.value});
    }

    renderForm(){
        return(
            <Form className="signup">
                <h1 className="formTitle">Share your 2021 HypeReport</h1>
                <p className="form-errors">
                    { (this.state.errors && this.state.errorField === '')
                        ? this.state.errors
                        : this.state.errors ? 'Please see errors below.' : '' }
                </p>
                <Form.Group>
                    <Form.Label>First Name</Form.Label><br/>
                        <input
                           name="firstName"
                           className={this.state.isSubmitting && !this.state.firstName ? 'error input-text' : 'white input-text'}
                           type="text"
                           id="firstName"
                           value={this.state.firstName}
                           onChange={this.onValueChange}
                        />
                </Form.Group>
                <Form.Group>
                    <Form.Label>Last Name</Form.Label><br/>
                        <input
                           name="lastName"
                           className={this.state.isSubmitting && !this.state.lastName ? 'error input-text' : 'white input-text'}
                           type="text"
                           id="lastName"
                           value={this.state.lastName}
                           onChange={this.onValueChange}
                        />
                </Form.Group>
                <Form.Group>
                    <Form.Label>Email</Form.Label><br/>
                    <input
                        name="email"
                        className={this.state.isSubmitting && !this.state.email ? 'error input-text' : 'white input-text'}
                        type="email"
                        id="email"
                        value={this.state.email}
                        onChange={this.onValueChange}
                    />
                </Form.Group>
                <Form.Group>
                    <Form.Label>Please confirm</Form.Label><br/>
                    <input
                        name="confirmEmail"
                        className={this.state.isSubmitting && !this.state.confirmEmail ? 'error input-text' : 'white input-text'}
                        type="email"
                        id="confirmEmail"
                        value={this.state.confirmEmail}
                        onChange={this.onValueChange}
                    />
                </Form.Group>
                <Form.Group>
                    <h3>Hype yourself!</h3>
                    <p className="form-errors">
                        { this.state.errorField === 'achievements' && this.state.errors ? this.state.errors : '' }
                    </p>
                    <Form.Label>What achievements (large or small!) are you celebrating this year?</Form.Label> <br />
                        <textarea
                           name="achievements"
                           className={this.state.isSubmitting && !this.state.achievements ? 'error input-area' : 'white input-area'}
                           type="achievements"
                           id="achievements"
                           value={this.state.achievements}
                           onChange={this.onValueChange}
                        />
                </Form.Group>
                <Form.Group className="radio">
                   <Form.Label>Can we share this on social media?</Form.Label>
                    <div>
                        <label>
                            <input
                            name="social"
                            type="radio"
                            value="yes"
                            onChange={this.onSocialChange}
                            defaultChecked={this.state.selectedSocial === 'yes'}
                            />
                            yes
                        </label>
                    </div>
                    <div>
                        <label>
                            <input
                            name="social"
                            type="radio"
                            value="no"
                            onChange={this.onSocialChange}
                            />
                            no
                        </label>
                    </div>
                </Form.Group>
                <Form.Group className="radio">
                   <Form.Label>Can we share this on our 2021 Hype event?</Form.Label>
                    <div>
                        <label>
                            <input
                            name="event"
                            type="radio"
                            value="yes"
                            onChange={this.onEventChange}
                            defaultChecked={this.state.selectedEvent === 'yes'}
                            />
                            yes
                        </label>
                    </div>
                    <div>
                        <label>
                            <input
                            name="event"
                            type="radio"
                            value="no"
                            onChange={this.onEventChange}
                            />
                            no
                        </label>
                    </div>
                </Form.Group>
                <Form.Group className="radio">
                   <Form.Label>Can we sign you up for DATCURRENT, our super awesome newsletter launching in 2022?</Form.Label>
                    <div>
                        <label>
                            <input
                            name="newsletter"
                            type="radio"
                            value="yes"
                            onChange={this.onNewsLetterChange}
                            defaultChecked={this.state.selectedNewsletter === 'yes'}
                            />
                            yes
                        </label>
                    </div>
                    <div>
                        <label>
                            <input
                            name="newsletter"
                            type="radio"
                            value="no"
                            onChange={this.onNewsLetterChange}
                            />
                            no
                        </label>
                    </div>
                </Form.Group>
                <Form.Group className="mb-4">
                    <Button variant="primary" type="submit" onClick={this.handleSubmit} className="submit">
                        SUBMIT
                    </Button>
                </Form.Group>
            </Form>
        )
    }

    renderResponse (){
        return (
            <div>{this.state.filled ? <ThankYou />: <Woops />}</div>
        )
    }

    handleSubmit(e){
        e.preventDefault();
        this.setState({errors: '', filled: false});
        this.setState({isSubmitting: true})
        if (this.state.email !== this.state.confirmEmail) {
            this.setState({errors: 'Please double check your email address.'});
            return
        }

        if (this.state.achievements.length < 70) {
            this.setState({errors: 'Please tell us a little bit more.'});
            this.setState({errorField: 'achievements'});
            return
        }

        if ( !this.state.firstName || !this.state.lastName || !this.state.email || !this.state.achievements
            || !this.state.selectedEvent || !this.state.selectedSocial || !this.state.selectedNewsletter){
            return
        }

        axios.post(`${app.url}/report`, this.state)
            .then((response) => {
                window.scrollTo(0, 0);
                this.setState({responded: true})
                if (response.data.success === true) {
                    this.setState({filled: true})
                } else {
                    this.setState({woops: true})
                }
            })
            .catch((response) => {
                console.log(response);
                this.setState({woops: true})
            });

    }
    render(){
        return(
            <div>{this.state.responded ? this.renderResponse() : this.renderForm()}</div>
        )
    }
}

export default HypeForm
