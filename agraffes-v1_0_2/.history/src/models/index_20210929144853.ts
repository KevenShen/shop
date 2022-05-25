export default {
  // 定义 model 的初始 state
  state: {
    config: {
      logoImgUrl: 'https://cdn.shopify.com/s/files/1/0528/5888/0181/files/ag_square_logo_-_Copy_abe0626a-18fe-4271-8632-cd27b1f3d6ea_195x195.jpg?v=1611211847',
      logoUrl: '/',
    },
  },

  // 定义改变该模型状态的纯函数
  reducers: {
    update(prevState, payload) {
      return {
        ...prevState,
        ...payload,
      };
    },
  },

  // 定义处理该模型副作用的函数
  effects: (dispatch) => ({
    async getUserInfo() {
      dispatch.user.update({
        name: 'taobao',
        id: '123',
      });
    },
  }),
};
