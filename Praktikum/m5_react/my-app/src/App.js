import './App.css';
import Button from './components/button';
import logo from './logo.svg';

function App() {
  const clicked = () => {
    return alert('Button di tekan!');
  };
  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <p>Nama Saya Rizky Bagaskara.</p>
        {/* Button */}
        <Button clicked={clicked}></Button>
        <a className="App-link" href="https://reactjs.org" target="_blank" rel="noopener noreferrer">
          Learn React
        </a>
      </header>
    </div>
  );
}

export default App;
