import { request } from 'ice';

export default {
  async getIndex() {
    return await request('/getIndex');
  },
};
