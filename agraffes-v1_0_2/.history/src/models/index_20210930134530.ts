import index from '@/services/index';
export default {
  // 定义 model 的初始 state
  state: {
    banner: [{ id: '', imgUrl: '', URL: '', text: '' }],
    productShowSlides: [{ id: '', productImg: '', price: '', title: '', productUrl: '' }],
    featured: [],
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
      console.log(featured);
      
      dispatch.index.update({
        banner: data.banner,
        productShowSlides: data.productShow,
        featured: data.featured,
      });
    },
  }),
};
