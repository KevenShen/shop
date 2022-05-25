import index from '@/services/index';
export default {
  // 定义 model 的初始 state
  state: {
    config: {
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
    async getIndexInfo() {
      const { data } = await index.getIndex();
      console.log(data);
      dispatch.index.config.update({
        logoImgUrl: data.config.logoImgUrl,
        logoUrl: data.config.logoUrl,
      });
    },
  }),
};
