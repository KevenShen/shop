import { request } from 'ice';

export default {
  async getBase() {
    return await request('/api/base');
  },
};
