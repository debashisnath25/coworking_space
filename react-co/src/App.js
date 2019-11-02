import React from 'react';
import { BrowserRouter as Router, Route } from 'react-router-dom';

// Common js files
import Header from './components/common/Header';
import Footer from './components/common/Footer';

// Other components to render
import Homepage from './pages/Homepage';
import About_us from './pages/About_us';
function App() {
  return (
    <Router>
      <div>
        <Header />
        <Route exact path="/" component={Homepage} />
        <Route exact path="/about_us" component={About_us} />
        <Footer />
      </div>
     </Router>
  );
}

export default App;
