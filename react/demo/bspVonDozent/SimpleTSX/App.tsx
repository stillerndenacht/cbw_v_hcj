import React from 'react';
import './App.css';
import ToDo from './ToDo';

const App : React.FC = () => {

  const weekday : boolean = true;
  // weekday = 9;

  return (
    <div>
      <h2>{weekday ? "Klausur" : "Wochenende"}</h2>
      <h2>{weekday && "Arbeit" }</h2>
      <ToDo />
    </div>
  );
}

export default App;
