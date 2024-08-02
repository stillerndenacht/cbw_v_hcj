import React from "react";
import PropTypes from 'prop-types';

class Athlete extends React.Component{
    constructor(props) {
        super(props);
        this.state = {
            showDetails: false
        };
    }

    toggleDetails = () => {
        this.setState({ showDetails: !this.state.showDetails });
    }

    render(){
        const { athlete } = this.props;
        const { showDetails } = this.state;
        
        return(
            <tr onClick={this.toggleDetails}>
              <td>{athlete.name}</td>
              <td>{athlete.age}</td>
              <td>{athlete.discipline}</td>
              {showDetails && <td>Details anzeigen...</td>}
            </tr>
        );
    }
}

Athlete.propTypes = {
    athlete: PropTypes.shape({
        name: PropTypes.number.isRequired,
        age: PropTypes.number.isRequired,
        discipline: PropTypes.string.isRequired
    }).isRequired
};

export default Athlete;