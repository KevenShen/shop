import { createStore } from 'ice';
import index from '@/models/index';
import user from './models/user';

const store = createStore({ user, index });

export default store;
