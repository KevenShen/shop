import global from '@/services/global';
export default {
  // 定义 model 的初始 state
  state: {
    global: {
      logoImgUrl: '',
      logoUrl: '',
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
    async getGlobalInfo() {
      const { data } = await global.getGlobal();

      dispatch.global.update({
        global: data.global,
      });
    },
  }),
};
