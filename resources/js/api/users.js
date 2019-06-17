import axios from 'axios';

export default {
    all() {
        return axios.get('/api/users');
    },
    paginated(page) {
        return axios.get('/api/users', page);
    },
    find(id) {
        return axios.get(`/api/users/${id}`);
    },
    edit(id, data) {
        return axios.put(`/api/users/${id}`, data);
    },
    delete(id) {
        return axios.delete(`/api/users/${id}`);
    }
};
