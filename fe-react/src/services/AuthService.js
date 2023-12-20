// src/services/AuthService.js
import axios from 'axios';

const API_URL = 'http://localhost/api'; // Replace with your API URL

export const login = (idCardNumber, password) => {
    return axios.post(`${API_URL}/v1/auth/login`, { id_card_number: idCardNumber, password });
};

export const logout = (token) => {
    return axios.post(`${API_URL}/v1/auth/logout`, { token });
};

