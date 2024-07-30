import React from "react";
import './AllAthletes';

function All(props){
    return(
        <tbody>
            {props.allath.map((athlete, index) => (
              <tr key={index}>
                <td>{athlete.disziplin}</td>
                <td>{athlete.vorname}</td>
                <td>{athlete.nachname}</td>
                <td>{athlete.alter}</td>
              </tr>
            ))}
          </tbody>
    )
}
export default All;