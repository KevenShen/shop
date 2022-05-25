import { createStore } from 'ice';
import global from '@/models/global';
// import user from './models/user';

const store = createStore({ global });

export default store;
