import demo from '../service/demo';

export default {
  state: {
    title: 'Hello',
  },
  reducers: {
    update(prevState, payload) {
      return { ...prevState, ...payload };
    },
  },
  effects: (dispatch) => ({
    async fetchUserInfo() {
      const data = await demo.getdemo();
      console.log(data);
      dispatch.demo.update(data);
    },
  }),
};
