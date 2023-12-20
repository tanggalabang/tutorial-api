import React from 'react';
import Navbar from './Navbar';
import Footer from './Footer';

import '../../assets/css/custom.css'
import '../../assets/css/bootstrap.css'

function Layout({ children }) {
    return (
        <>
            <Navbar />
            {children}
            <Footer />
        </>
    );
}

export default Layout;
