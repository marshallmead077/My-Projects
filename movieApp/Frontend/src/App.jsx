import { Route, Routes } from 'react-router-dom';
import './App.css';
import Home from "./Pages/Favorites";
import Home from "./Pages/Home";
function App() {
 return (
  <>
 <main className="main-content">
  <Routes>
    <Route path="/" element= {<Home />}/>
    <Route path="/Favorites" element= {<Favorites />}/>
  </Routes>
 </main>
  </>
  );
}

export default App;
