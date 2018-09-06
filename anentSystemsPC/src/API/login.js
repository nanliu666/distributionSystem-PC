import axios from 'axios';

function doLogin(params) {
    return axios.post('/account/login', params)
}

export default {
    doLogin
}