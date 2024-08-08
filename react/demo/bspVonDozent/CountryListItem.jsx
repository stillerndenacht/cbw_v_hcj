import React, { useState } from 'react';
import PropTypes from 'prop-types';
 
function CountryListItem({ country, onRemove, onMedalChange }) {
 
  return (
    <tr>
      <td>{country.country}</td>
      <td>
        <span>{country.gold}</span> 🥇
        <button onClick={() => onMedalChange(country.id, "g", 1)}>+</button>
        <button onClick={() => onMedalChange(country.id, "g", -1)}>-</button>
      </td>
      <td>
        <span>{country.silver}</span> 🥈
        <button onClick={() => onMedalChange(country.id, "s", 1)}>+</button>
        <button onClick={() => onMedalChange(country.id, "s", -1)}>-</button>
      </td>
      <td>
        <span>{country.bronze}</span> 🥉
        <button onClick={() => onMedalChange(country.id, "b", 1)}>+</button>
        <button onClick={() => onMedalChange(country.id, "b", -1)}>-</button>
      </td>
      <td>{country.totalmedals}</td>
      <td>{country.gold * 3 + country.silver * 2 + country.bronze * 1}</td> {/* Punktestand */}
      <td>
        <button onClick={onRemove}>Entfernen</button>
      </td>
    </tr>
  );
}
 
CountryListItem.propTypes = {
  country: PropTypes.shape({
    id: PropTypes.number.isRequired,
    country: PropTypes.string.isRequired,
    gold: PropTypes.number.isRequired,
    silver: PropTypes.number.isRequired,
    bronze: PropTypes.number.isRequired,
  }).isRequired,
  onRemove: PropTypes.func.isRequired,
  onMedalChange: PropTypes.func.isRequired,
};
 
export default CountryListItem;