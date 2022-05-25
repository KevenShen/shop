import { request } from 'ice';

export default {
  async getGlobal() {
    return await request('/api/global');
  },
};
