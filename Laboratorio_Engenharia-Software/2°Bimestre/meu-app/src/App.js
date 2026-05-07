import logo from './logo.svg';
import './App.css';

function Relogio() {
  const hora = new Date().toLocaleTimeString();

  return (
    <p>{hora}</p>
  );
}

function Letreiro() {
  const text = "Conheça a Fatec";

  let palavra = "";

  return (
    <p>
      {contador}
    </p>
  );
}

function App() {
  return (
    <div className="App">
      <Relogio/>
      <Letreiro/>
    </div>
  );
}

export default App;
