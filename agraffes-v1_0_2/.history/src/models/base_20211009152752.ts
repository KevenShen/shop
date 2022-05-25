import base from '@/services/base';
export default {
  // 定义 model 的初始 state
  state: {
    global: {
      logoImgUrl: '',
      logoUrl: '',
    },
    dataSource: [],
    copyright:""
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
      const { data } = await global.getBase();
      dispatch.global.update({
        global: data.global,
        dataSource: data.dataSource,
        copyright:data.copyright
      });
    },
  }),
};
