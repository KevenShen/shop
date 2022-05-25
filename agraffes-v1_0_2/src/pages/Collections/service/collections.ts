import { request } from 'ice';

export default {
  async getCollections() {
    return await request('/api/collections');
  },
};
