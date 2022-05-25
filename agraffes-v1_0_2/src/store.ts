import { createStore } from 'ice';
import base from '@/models/base';
import index from './models/index';

const store = createStore({ base, index });

export default store;
