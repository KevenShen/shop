import { request } from 'ice';

export default {
  async getdemo() {
    return await request('/demo');
  },
};
