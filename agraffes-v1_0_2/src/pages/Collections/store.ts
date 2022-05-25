import { createStore } from 'ice';
import collections from './models/collections';

const store = createStore({ collections });

export default store;
