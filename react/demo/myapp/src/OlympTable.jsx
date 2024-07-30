import React from "react";
import "./OlympTable.css";
import "./AllAthletes";


class OlympTable extends React.Component {
  render() {
    const allathletes = [
      {
        disziplin: "Schwimmen",
        vorname: "Marlin",
        nachname: "Pazifik",
        alter: 25,
      },
      {
        disziplin: "Schwimmen",
        vorname: "Hertha",
        nachname: "Atlantik",
        alter: 30,
      },
    ];

    return (
      <div>
        <table>
          <thead>
            <tr>
              <th>Disziplin</th>
              <th>Vorname</th>
              <th>Nachname</th>
              <th>Alter</th>
            </tr>
          </thead>
          
          <tbody>
            {allathletes.map((athlete, index) => (
              <tr key={index}>
                <td>{athlete.disziplin}</td>
                <td>{athlete.vorname}</td>
                <td>{athlete.nachname}</td>
                <td>{athlete.alter}</td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    );
  }
}
export default OlympTable;
