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
  'GET /api/global': (req, res) => {
    const data = {
      global: {
        logoImgUrl:
          'https://cdn.shopify.com/s/files/1/0528/5888/0181/files/ag_square_logo_-_Copy_abe0626a-18fe-4271-8632-cd27b1f3d6ea_195x195.jpg?v=1611211847',
        logoUrl: '/',
      },
    };
    res.send({
      status: 'SUCCESS',
      data,
    });
  },
  'GET /api/index': (req, res) => {
    const data = {
      banner: [
        {
          id: 1,
          imgUrl: 'https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/files/FANZ-BANNER_1800x500.jpg?v=1627415205',
          URL: '/index',
          text: 'Tape Player Skin Design Competition',
        },
        {
          id: 2,
          imgUrl: 'https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/files/FANZ-BANNER_1800x500.jpg?v=1627415205',
          URL: 'Tape Player Skin Design Competition',
          text: 'Mobile Phone Taobao Skin Call',
        },
        {
          id: 3,
          imgUrl: 'https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/files/FANZ-BANNER_1800x500.jpg?v=1627415205',
          URL: 'Tape Player Skin Design Competition',
          text: 'Design Enabling Public Welfare',
        },
        {
          id: 4,
          imgUrl: 'https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/files/FANZ-BANNER_1800x500.jpg?v=1627415205',
          URL: 'Tape Player Skin Design Competition',
          text: 'Amoy Doll Design Competition',
        },
      ],
      productShow: [
        {
          id: '1',
          productImg: 'https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/products/CAOM_2_512x512.jpg?v=1630571990',
          price: 'from $5.24',
          title: 'Lorem ipsum dolor sit amet, est viderer iuvaret perfec',
          productUrl: '/courses?sort=name',
        },
      ],
    };
    res.send({
      status: 'SUCCESS',
      data,
    });
  },
};
