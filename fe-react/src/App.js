// src/App.js
import React, { useState } from 'react';
import { BrowserRouter as Router, Route, Routes, Navigate } from 'react-router-dom';
// ... rest of your imports
import { logout } from './services/AuthService';



import Login from './components/Login';
import Dashboard from './components/Dashboard';

const App = () => {
    const [user, setUser] = useState(null);

    const handleLoginSuccess = (userData) => {
        localStorage.setItem('nama', userData.name)
        localStorage.setItem('token', userData.token)

        setUser(userData);
    };

    const handleLogout = async () => {
        if (user && user.token) {
            try {
                const response = await logout(user.token);
                console.log(response.data); // Handle response, e.g., show a message
            } catch (error) {
                console.error("Logout failed", error);
            }
            setUser(null); // Remove user data from state
        }
    };

    return (
        <Router>
            <Routes>
                <Route path="/login" element={user ? <Navigate to="/dashboard" /> : <Login onLoginSuccess={handleLoginSuccess} />} />
                {/* <Route path="/dashboard" element={user ? <Dashboard user={user} /> : <Navigate to="/login" />} /> */}
                <Route path="/dashboard" element={user ? <Dashboard user={user} onLogout={handleLogout} /> : <Navigate to="/login" replace />} />

            </Routes>
        </Router>
    );
};

export default App;
