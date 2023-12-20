// src/components/Login.js
import React, { useState } from 'react';
import { login } from '../services/AuthService';

import Layout from './layouting/Layout';


const Login = ({ onLoginSuccess }) => {
    const [idCardNumber, setIdCardNumber] = useState('');
    const [password, setPassword] = useState('');
    const [error, setError] = useState('');

    const handleSubmit = async (e) => {
        e.preventDefault();
        try {
            const response = await login(idCardNumber, password);
            onLoginSuccess(response.data);
        } catch (error) {
            setError('ID Card Number or Password incorrect');
        }
    };

    return (
        <Layout>
            {/* <form onSubmit={handleSubmit}>
                <input type="text" value={idCardNumber} onChange={(e) => setIdCardNumber(e.target.value)} placeholder="ID Card Number" />
                <input type="password" value={password} onChange={(e) => setPassword(e.target.value)} placeholder="Password" />
                <button type="submit">Login</button>
                {error && <div>{error}</div>}
            </form> */}


            <main>
                <header className="jumbotron">
                    <div className="container text-center">
                        <h1 className="display-4">Job Seekers Platform</h1>
                    </div>
                </header>

                <div className="container">
                    <div className="row justify-content-center">
                        <div className="col-md-6">
                            <form className="card card-default" onSubmit={handleSubmit}>
                                {/* form content */}
                                <div class="card-header">
                                    <h4 class="mb-0">Login</h4>
                                </div>
                                <div class="card-body">
                                    <div style={{ textAlign: 'center', color: 'red' }}>
                                        {error && <div>{error}</div>}
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <div class="col-4 text-right">ID Card Number</div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" value={idCardNumber} onChange={(e) => setIdCardNumber(e.target.value)} placeholder="ID Card Number" />
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <div class="col-4 text-right">Password</div>
                                        <div class="col-8">
                                            <input type="password" class="form-control" value={password} onChange={(e) => setPassword(e.target.value)} placeholder="Password" />
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center mt-4">
                                        <div class="col-4"></div>
                                        <div class="col-8">
                                            <button class="btn btn-primary" type='submit'>Login</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </Layout>
    );
};

export default Login;
