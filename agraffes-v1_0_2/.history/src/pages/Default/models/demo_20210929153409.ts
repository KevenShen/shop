
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
      const data = await userService.getUser();
      dispatch.user.update(data);
    },
  }),
};
