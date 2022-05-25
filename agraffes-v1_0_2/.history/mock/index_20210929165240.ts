import * as Mock from 'mockjs';
export default {
  //   'GET /api/list': (req, res) => {
  //     const list = Mock.mock({
  //       'list|1-10': [
  //         {
  //           'id|+1': 1,
  //         },
  //       ],
  //     });
  //     res.send({
  //       status: 'SUCCESS',
  //       data: {
  //         list,
  //       },
  //     });
  //   },
  'GET /api/list': (req, res) => {
    const data = {
      config: {
        logoImgUrl:
          'https://cdn.shopify.com/s/files/1/0528/5888/0181/files/ag_square_logo_-_Copy_abe0626a-18fe-4271-8632-cd27b1f3d6ea_195x195.jpg?v=1611211847',
        logoUrl: '/',
      },
    };
    res.send({
      status: 'SUCCESS',
      data: {
        list,
      },
    });
  },
  'GET /api/index': (req, res) => {
    const list = { title: 'aaa' };
    res.send({
      status: 'SUCCESS',
      data: {
        list,
      },
    });
  },
};
