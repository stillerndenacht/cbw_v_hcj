import React from "react";
// class AllAthletes extends React.Component {
//   render() {
//     const allathletes = [
//       {
//         disziplin: "Schwimmen",
//         vorname: "Marlin",
//         nachname: "Pazifik",
//         alter: 25
//       },
//     ];
//     return (allathletes);
//   }
// }

function AllAthletes() {
  const allathletes = 
    {
      disziplin: "Schwimmen",
      vorname: "Marlin",
      nachname: "Pazifik",
      alter: 25,
    };
  
  return (
    <>
      <All allath={allathletes} />{" "}
    </>
  );
}

// function AllAthletes() {
//     const allathletes = [

//                  {disziplin: "Schwimmen",
//                  vorname: "Marlin",
//                  nachname: "Pazifik",
//                  alter: 25}

//              ];
//              return (
//                 <tbody allathletes={allathletes}></tbody>
//              );
//  }

// class AllAthletes extends React.Component {
//   render() {
//     const allathletes = [
//       {
//         disziplin: "Schwimmen",
//         vorname: "Marlin",
//         nachname: "Pazifik",
//         alter: 25,
//       },
//     ];
//     return <tbody allathletes={allathletes}></tbody>;
//   }
// }

export default AllAthletes;
