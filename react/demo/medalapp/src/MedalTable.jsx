import React from "react";
import laender from "./Laender";
import LaenderItem from "./LaenderItem";
import "./MedalTable.css";
import { useState } from "react";

// const laender = [
//     {
//       id: 1,
//       land: "Volksrepublik China",
//       gold: 18,
//       silver: 15,
//       bronze: 9,
//       gsb: "this.gold + this.silver + this.bronze"
//     },
//   ];
function MedalTable() {
 
  return (
    <table>
      <thead>
        <tr>
          <th>Land</th>
          <th>Goldmedaillien</th>
          <th>Silbermedaillien</th>
          <th>Bronzemedaillien</th>
          <th>Medaillien gesamt</th>
        </tr>
      </thead>
      <tbody>
        {laender.map((land) => (
          <LaenderItem key={land.id} land={land} />
        ))}
      </tbody>
    </table>
  );
}

export default MedalTable;