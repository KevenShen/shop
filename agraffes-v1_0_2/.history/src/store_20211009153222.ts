import { createStore } from 'ice';
import global from '@/models/base';
import index from './models/index';

const store = createStore({ global, index });

export default store;
