import React, { useState } from 'react';
import './CountryList.css';
import CountryListItem from './CountryListItem';
 
const initialCountries = [
  {
    id: 1,
    country: 'Germany',
    gold: 0,
    silver: 0,
    bronze: 0,
    totalmedals: 0,
    points: 0,
  },
  {
    id: 2,
    country: 'United Kingdom',
    gold: 0,
    silver: 0,
    bronze: 0,
    totalmedals: 0,
    points: 0,
  },
  {
    id: 3,
    country: 'France',
    gold: 0,
    silver: 0,
    bronze: 0,
    totalmedals: 0,
    points: 0,
  },
];
 
 
 
// Funktionen für das anzeigen der voreingeben Ländern und einen für neue die man hinzufügen kann.
function CountryList() {
  const [countries, setCountries] = useState(initialCountries);
  const [newCountryName, setNewCountryName] = useState('');
 
  function handleMedals(id, medaltype, delta) {
    setCountries((prevState) => {
      return prevState.map((country) => {
        if (country.id === id) {
          let updatedCountry = { ...country };
          if (medaltype === 'g') {
            updatedCountry.gold = Math.max(updatedCountry.gold + delta, 0);
          } else if (medaltype === 's') {
            updatedCountry.silver = Math.max(updatedCountry.silver + delta, 0);
          } else if (medaltype === 'b') {
            updatedCountry.bronze = Math.max(updatedCountry.bronze + delta, 0);
          }
          updatedCountry.totalmedals = updatedCountry.gold + updatedCountry.silver + updatedCountry.bronze;
          updatedCountry.points = calculatePoints(updatedCountry.gold, updatedCountry.silver, updatedCountry.bronze);
          return updatedCountry;
        }
        return country;
      });
    });
  }

 
 
  // Punkte sollen zusammen gere3chent werden. Für gold gibt es 2 punkte , für silber 2 und für bronze 1.
  const calculatePoints = (gold, silver, bronze) => {
    return gold * 3 + silver * 2 + bronze * 1;
  };
 
  // Berechne die Gesamtzahl der Medaillen und Punkte für jedes Land
  const updatedCountries = countries.map(country => ({
    ...country,
    totalmedals: country.gold + country.silver + country.bronze,
    points: calculatePoints(country.gold, country.silver, country.bronze),
  }));
 
  const handleInputChange = (event) => {
    setNewCountryName(event.target.value);
  };
 
 
  // Gibt eine Fehlermeldung aus bzw einen Alert wenn man nichts eingibt bei "Land hinzufügen"
  const addCountry = () => {
    if (newCountryName.trim() === '') {
      alert('Bitte geben Sie einen Namen für das neue Land oder Teilnehmende ein.');
      return;
    }
 
    const newCountry = {
      id: countries.length + 1,
      country: newCountryName,
      gold: 0,
      silver: 0,
      bronze: 0,
      totalmedals: 0,
      points: 0,
    };
    setCountries([...countries, newCountry]);
    setNewCountryName(''); // Leere das Eingabefeld nach dem Hinzufügen
  };
 
  const removeCountry = (id) => {
    setCountries(countries.filter(country => country.id !== id));
  };
 
  return (
    <div>
      <table>
        <thead>
          <tr>
            <th>Land oder Teilnehmende</th>
            <th>Gold</th>
            <th>Silber</th>
            <th>Bronze</th>
            <th>Medaillen Insgesamt</th>
            {/* Im Span habe ich einen Tool-Tip gemacht d.h. Das bei hover mit der Maus über das Symbol ein text angeszeigt wird. */} {/* Neue Spalte für den Punktestand  */}
            <th>Punktestand <span className="tooltip-icon" data-tooltip= "Die Punkte werden wie folgt gezählt: Für🥇 gibt es 3 Punkte. Für🥈 gibt es 2 Punkte. Für 🥉 gibt es 1 Punkr"> ⓘ</span> </th>
            <th>Land Entfernen?</th> {/* Spalte für den Entfernen-Button */}
          </tr>
        </thead>
        <tbody>
          { /* Das ist der Entfernen Button*/}
          {updatedCountries.map((country) => (
            <CountryListItem
              key={country.id}
              country={country}
              onRemove={() => removeCountry(country.id)}
              onMedalChange={handleMedals}
            />
          ))}
        </tbody>
      </table>
      <div>
        <input
          type="text"
          value={newCountryName}
          onChange={handleInputChange}
          placeholder="Neuer Eintrag...."
        />
        <button onClick={addCountry}>Land oder Teilnehmende hinzufügen</button>
      </div>
    </div>
  );
}
 
export default CountryList;