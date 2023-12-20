import React from 'react';
import { logout } from '../../services/AuthService';



// function Navbar() {
const Navbar = () => {
    const name = localStorage.getItem('nama')
    const token = localStorage.getItem('token')


    const handleLogout = async (ev) => {
        ev.preventDefault()

        try {
            const response = await logout(token);
            // console.log(response.data); // Handle response, e.g., show a message
        } catch (error) {
            console.error("Logout failed", error);
        }
        // setUser(null); // Remove user data from state

        localStorage.clear()
    }

    // const handleLogout = async () => {
    //     if (user && user.token) {
    //         try {
    //             const response = await logout(user.token);
    //             console.log(response.data); // Handle response, e.g., show a message
    //         } catch (error) {
    //             console.error("Logout failed", error);
    //         }
    //         setUser(null); // Remove user data from state
    //     }
    // };

    return (
        <nav className="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
            <div className="container">
                <a className="navbar-brand" href="#">Job Seekers Platform</a>
                <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span className="navbar-toggler-icon"></span>
                </button>

                <div className="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul className="navbar-nav ml-auto">
                        <li className="nav-item">
                            {name ?
                                <a className="nav-link" onClick={handleLogout}>Logout</a>
                                : <a className="nav-link" href="#">Login</a>
                            }
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    );
}

export default Navbar;
