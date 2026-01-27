import React from 'react';
import Filcomp from './Filcomp';
import Addcom from './Addcom';

function App() {
  return (
    <div className="App" style={{ maxWidth: '800px', margin: '0 auto', padding: '20px', fontFamily: 'sans-serif' }}>
      <h1 style={{ textAlign: 'center', color: '#333' }}>Client API React - Be-Beauty</h1>
      <Filcomp />
      <Addcom />
    </div>
  );
}

export default App;
