import './App.css';
import ToDo from './ToDo';

function App() {

  const weekday = true;

  return (
    <div>
      <h2>{weekday ? "Klausur" : "Wochenende"}</h2>
      <h2>{weekday && "Arbeit" }</h2>
      <ToDo />
    </div>
  );
}

export default App;
