import React from 'react';
import Filcomp from './Filcomp';
import Addcom from './Addcom';

function App() {
  return (
    <div className="App" style={{ backgroundColor: '#f9f9f9', minHeight: '100vh', padding: '40px' }}>
      <header style={{ textAlign: 'center', marginBottom: '40px' }}>
        <h1 style={{ fontFamily: 'serif', fontSize: '3rem', color: '#1a1a1a' }}>Be-Beauty API Client</h1>
        <p style={{ color: '#d4af37', textTransform: 'uppercase', letterSpacing: '2px' }}>Gestion des articles via REST API</p>
      </header>

      <div style={{ maxWidth: '800px', margin: '0 auto' }}>
        <Filcomp />
        <Addcom />
      </div>

      <footer style={{ textAlign: 'center', marginTop: '60px', fontSize: '0.8rem', color: '#888' }}>
        &copy; 2026 Be-Beauty Explorer
      </footer>
    </div>
  );
}

export default App;
