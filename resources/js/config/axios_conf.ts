import axios from 'axios';


const axiosInstance = axios.create({
    baseURL: 'http://localhost:8000/api/',
    timeout: 1000,
    headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json',
        'Authorization': 'Bearer ' + localStorage.getItem('token'),
    },
    withCredentials: true,
});


export default axiosInstance;

