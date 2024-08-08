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
      <ToDo name="Ausschlafen" prio="1"/>
      <ToDo name="Sport" prio="2" />
    </div>
  );
}

export default App;
