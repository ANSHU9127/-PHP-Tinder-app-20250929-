
import axios from 'axios';
export const api = axios.create({ baseURL: 'http://localhost:8000/api' });

export const getPeople = async (page=1)=> (await api.get('/people?page='+page)).data;
export const likePerson = async (id)=> (await api.post('/people/'+id+'/like')).data;
export const dislikePerson = async (id)=> (await api.post('/people/'+id+'/dislike')).data;
export const getLiked = async ()=> (await api.get('/liked')).data;
