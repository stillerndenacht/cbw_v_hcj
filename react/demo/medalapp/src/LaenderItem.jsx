import React from "react";
import PropTypes from "prop-types";
import { useState } from "react";
import laender from "./Laender";
import MedalChanger from "./MedalChanger";

function LaenderItem({ land }) {
  
  return (
    <tr>
      <td>{land.land}</td>
      <td>
        {land.gold ? land.gold : 0}

        {/* <button onClick={() => MedalChanger()}> + </button>
          <button> - </button> */}
        <MedalChanger landx={land} medaltype="gold"></MedalChanger>
      </td>
      <td>{land.silver ? land.silver : 0}</td>
      <td>{land.bronze ? land.bronze : 0}</td>
      <td>{land.gold + land.silver + land.bronze}</td>
    </tr>
  );
}

LaenderItem.propTypes = {
  land: PropTypes.shape({
    id: PropTypes.number.isRequired,
    land: PropTypes.string.isRequired,
    gold: PropTypes.number.isRequired,
    silver: PropTypes.number.isRequired,
    bronze: PropTypes.number.isRequired,
  }).isRequired,
};
export default LaenderItem;
// import in MedalTable.jsx
