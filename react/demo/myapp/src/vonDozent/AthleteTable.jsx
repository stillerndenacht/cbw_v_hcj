import React from 'react';
import Athlete from './Athlete';
import './AthleteTable.css';


class AthleteTable extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      athletes: this.props.athletes
    };
  }

  render() {
    return (
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Alter</th>
            <th>Disziplin</th>
          </tr>
        </thead>
        <tbody>
          {this.state.athletes.map((athlete, index) => (
           <Athlete key={index} athlete={athlete}></Athlete>
          ))}
        </tbody>
      </table>
    );
  }
}



export default AthleteTable;