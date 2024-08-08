import React from 'react';
import './App.css';
import ToDo from './ToDo';


export type TodoItem = {
  prio : string,
  name : string
}

const App : React.FC = () => {

  const weekday : boolean = true;


  // weekday = 9;
  const todoitem : TodoItem = {
    prio : "1",
    name : "Ausschlafen"
  }

  return (
    <div>
      <h2>{weekday ? "Klausur" : "Wochenende"}</h2>
      <h2>{weekday && "Arbeit" }</h2>
      <ToDo item={todoitem}/>
      {/* Das System bildet auf den korrekten Datentypen TodoItem ab*/}
      <ToDo item={ { prio : "2", name : "Sport" } }/>
    </div>
  );
}

export default App;
