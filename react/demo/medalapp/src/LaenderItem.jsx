import React from "react";
import laender from "./Laender";
import PropTypes from "prop-types";

function LaenderItem({ land }) {
  return (
    <tr>
      <td>{land.land}</td>
      <td>{land.gold ? land.gold : 0}</td>
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
    gsb: PropTypes.string.isRequired,
  }).isRequired,
};
export default LaenderItem;
