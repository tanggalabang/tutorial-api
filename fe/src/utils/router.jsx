import axios from "axios";

const client = axios.create({
    baseURL: "http://localhost/api/v1/auth/",
    params: {
        token: localStorage.getItem("token"),
    },
});

// client.interceptors.response((response) => {
//     response.error
// })

export default client;
