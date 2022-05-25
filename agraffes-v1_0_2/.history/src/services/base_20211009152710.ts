import { request } from 'ice';

export default {
  async getbase() {
    return await request('/api/base');
  },
};
