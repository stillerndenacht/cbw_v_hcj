import React from 'react';
import Headline from './Headline';
import AthletsTable from './AthleteTable';

class App extends React.Component {
  
  render() {
    
    const athletes= [
      { name: 'Lukas Märtens', age: 22, discipline: '400m Freistil' },
      { name: 'Florian Wellbrock', age: 27, discipline: '10km Freistil' },
      { name: 'Josha Salchow', age: 25, discipline: '100m Freistil' },
      { name: 'Summer MCINTOSH', age: 17, discipline: '400m Lagen' },
    ];
    return (
      <React.StrictMode>
      <div>
        <Headline></Headline>
        <AthletsTable athletes={athletes} />
      </div>
      </React.StrictMode>
    ); 
    
 }
}
export default App;
