import index from '@/services/index';
export default {
  // 定义 model 的初始 state
  state: {
    banner: [{ id: '', imgUrl: '', URL: '', text: '' }],
    productShowSlides: [{ id: '', productImg: '', price: '', title: '', productUrl: '' }],
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
      dispatch.index.update({
        banner: data.banner,
        productShow: data.productShow,
      });
    },
  }),
};
