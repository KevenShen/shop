import category from '../service/category';
export default {
  // 定义 model 的初始 state
  state: {
    allCat: [],
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
    async getCategoryInfo() {
      const { data } = await category.getCollections();
      console.log(data);

      dispatch.collections.update({
        allCat: data.allCat,
      });
    },
  }),
};
