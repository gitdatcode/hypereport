
import  React, { Component } from "react";
import Form from "react-bootstrap/Form";
import Button from "react-bootstrap/Button";
import ThankYou from "./ThankYou";
import './SignUp.css'

class SignUp extends Component {
    constructor(props){
        super(props)
        this.state = {
            firstName: '',
            lastName: '',
            email: '',
            achievements: '',
            selectedSocial: '',
            selectedEvent: '',
            selectedNewsletter: '',
            errors: '',
            isSubmitting: false,
            filled: false
        }
        this.onEventChange = this.onEventChange.bind(this)
        this.onSocialChange = this.onSocialChange.bind(this)
        this.onNewsLetterChange = this.onNewsLetterChange.bind(this)
        this.onValueChange = this.onValueChange.bind(this)
        this.handleSubmit = this.handleSubmit.bind(this)
        this.renderWelcome = this.renderWelcome.bind(this)
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
            <Form className="mt-5 signup">
                {this.state.errors ? this.state.errors : ''}
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
                    <Form.Label>Hype yourself! What achievements (large or small!) are you celebrating this year?</Form.Label>
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
                            type="radio"
                            value="social"
                            onChange={this.onSocialChange}
                            defaultChecked={this.state.selectedSocial === 'yes'}
                            />
                            yes
                        </label>
                    </div>
                    <div>
                        <label>
                            <input
                            type="radio"
                            value="social"
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
                            type="radio"
                            value="event"
                            onChange={this.onEventChange}
                            defaultChecked={this.state.selectedEvent === 'yes'}
                            />
                            yes
                        </label>
                    </div>
                    <div>
                        <label>
                            <input
                            type="radio"
                            value="event"
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
                            type="radio"
                            value="newsletter"
                            onChange={this.onNewsLetterChange}
                            defaultChecked={this.state.selectedNewsletter === 'yes'}
                            />
                            yes
                        </label>
                    </div>
                    <div>
                        <label>
                            <input
                            type="radio"
                            value="newsletter"
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

    renderWelcome(){
        return(
            <div>
                <ThankYou />
            </div>
        )
    }
    
    handleSubmit(e){
      e.preventDefault()
      this.setState({isSubmitting: true})
      if ( !this.state.firstName || !this.state.lastName || !this.state.email || !this.state.achievements
        || !this.state.selectedEvent || !this.state.selectedSocial || !this.state.selectedNewsletter){
        this.setState({errors: 'All fields are required.', filled: false});
        return
      }
      return (
        this.setState({filled: true})
      )
    } 
    render(){
        return(
            <div>{this.state.filled ? this.renderWelcome() : this.renderForm()}</div>
        )
    }
}

export default SignUp