import axios from "axios";

const client = axios.create({
    baseURL: "http://localhost/api/",
    params: {
        token: localStorage.getItem("token"),
    },
});

export default client;
