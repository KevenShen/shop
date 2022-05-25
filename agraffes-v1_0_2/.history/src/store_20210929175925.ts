import { createStore } from 'ice';
import global from '@/models/global';
import index from './models/index';

const store = createStore({ global, index });

export default store;
