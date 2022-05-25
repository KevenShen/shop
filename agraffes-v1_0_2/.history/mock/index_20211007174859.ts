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
      dataSource: [
        {
          id: '1',
          title: '库存管理',
          link: '/',
          children: [
            {
              id: '10',
              title: '部门库存管理',
              link: '',
              children: [
                {
                  id: '110',
                  title: '部门库存管理',
                  link: '',
                },
                {
                  id: '111',
                  title: '小二库存管理',
                  link: '',
                },
              ],
            },
            {
              id: '11',
              title: '小二库存管理',
              link: '',
            },
          ],
        },
        {
          id: '1',
          title: '库存管理',
          link: '/',
          children: [
            {
              id: '10',
              title: '部门库存管理',
              link: '',
              children: [
                {
                  id: '110',
                  title: '部门库存管理',
                  link: '',
                },
                {
                  id: '111',
                  title: '小二库存管理',
                  link: '',
                },
              ],
            },
            {
              id: '11',
              title: '小二库存管理',
              link: '',
            },
          ],
        },
        {
          id: '1',
          title: '库存管理',
          link: '/',
          children: [
            {
              id: '10',
              title: '部门库存管理',
              link: '',
              children: [
                {
                  id: '110',
                  title: '部门库存管理',
                  link: '',
                },
                {
                  id: '111',
                  title: '小二库存管理',
                  link: '',
                },
              ],
            },
            {
              id: '11',
              title: '小二库存管理',
              link: '',
            },
          ],
        },
        {
          id: '1',
          title: '库存管理',
          link: '/',
          children: [
            {
              id: '10',
              title: '部门库存管理',
              link: '',
              children: [
                {
                  id: '110',
                  title: '部门库存管理',
                  link: '',
                },
                {
                  id: '111',
                  title: '小二库存管理',
                  link: '',
                },
              ],
            },
            {
              id: '11',
              title: '小二库存管理',
              link: '',
            },
          ],
        },
        {
          id: '1',
          title: '库存管理',
          link: '/',
          children: [
            {
              id: '10',
              title: '部门库存管理',
              link: '',
              children: [
                {
                  id: '110',
                  title: '部门库存管理',
                  link: '',
                },
                {
                  id: '111',
                  title: '小二库存管理',
                  link: '',
                },
              ],
            },
            {
              id: '11',
              title: '小二库存管理',
              link: '',
            },
          ],
        },
        {
          id: '1',
          title: '库存管理',
          link: '/',
          children: [
            {
              id: '10',
              title: '部门库存管理',
              link: '',
              children: [
                {
                  id: '110',
                  title: '部门库存管理',
                  link: '',
                },
                {
                  id: '111',
                  title: '小二库存管理',
                  link: '',
                },
              ],
            },
            {
              id: '11',
              title: '小二库存管理',
              link: '',
            },
          ],
        },
        {
          id: '1',
          title: '库存管理',
          link: '/',
          children: [
            {
              id: '10',
              title: '部门库存管理',
              link: '',
              children: [
                {
                  id: '110',
                  title: '部门库存管理',
                  link: '',
                },
                {
                  id: '111',
                  title: '小二库存管理',
                  link: '',
                },
              ],
            },
            {
              id: '11',
              title: '小二库存管理',
              link: '',
            },
          ],
        },
        {
          id: '1',
          title: '库存管理',
          link: '/',
          children: [
            {
              id: '10',
              title: '部门库存管理',
              link: '',
              children: [
                {
                  id: '110',
                  title: '部门库存管理',
                  link: '',
                },
                {
                  id: '111',
                  title: '小二库存管理',
                  link: '',
                },
              ],
            },
            {
              id: '11',
              title: '小二库存管理',
              link: '',
            },
          ],
        },
        {
          id: '1',
          title: '库存管理',
          link: '/',
          children: [
            {
              id: '10',
              title: '部门库存管理',
              link: '',
              children: [
                {
                  id: '110',
                  title: '部门库存管理',
                  link: '',
                },
                {
                  id: '111',
                  title: '小二库存管理',
                  link: '',
                },
              ],
            },
            {
              id: '11',
              title: '小二库存管理',
              link: '',
            },
          ],
        },
        {
          id: '1',
          title: '库存管理',
          link: '/',
          children: [
            {
              id: '10',
              title: '部门库存管理',
              link: '',
              children: [
                {
                  id: '110',
                  title: '部门库存管理',
                  link: '',
                },
                {
                  id: '111',
                  title: '小二库存管理',
                  link: '',
                },
              ],
            },
            {
              id: '11',
              title: '小二库存管理',
              link: '',
            },
          ],
        },
        {
          id: '1',
          title: '库存管理',
          link: '/',
          children: [
            {
              id: '10',
              title: '部门库存管理',
              link: '',
              children: [
                {
                  id: '110',
                  title: '部门库存管理',
                  link: '',
                },
                {
                  id: '111',
                  title: '小二库存管理',
                  link: '',
                },
              ],
            },
            {
              id: '11',
              title: '小二库存管理',
              link: '',
            },
          ],
        },
        {
          id: '1',
          title: '库存管理',
          link: '/',
          children: [
            {
              id: '10',
              title: '部门库存管理',
              link: '',
              children: [
                {
                  id: '110',
                  title: '部门库存管理',
                  link: '',
                },
                {
                  id: '111',
                  title: '小二库存管理',
                  link: '',
                },
              ],
            },
            {
              id: '11',
              title: '小二库存管理',
              link: '',
            },
          ],
        },
        {
          id: '1',
          title: '库存管理',
          link: '/',
          children: [
            {
              id: '10',
              title: '部门库存管理',
              link: '',
              children: [
                {
                  id: '110',
                  title: '部门库存管理',
                  link: '',
                },
                {
                  id: '111',
                  title: '小二库存管理',
                  link: '',
                },
              ],
            },
            {
              id: '11',
              title: '小二库存管理',
              link: '',
            },
          ],
        },
        {
          id: '1',
          title: '库存管理',
          link: '/',
          children: [
            {
              id: '10',
              title: '部门库存管理',
              link: '',
              children: [
                {
                  id: '110',
                  title: '部门库存管理',
                  link: '',
                },
                {
                  id: '111',
                  title: '小二库存管理',
                  link: '',
                },
              ],
            },
            {
              id: '11',
              title: '小二库存管理',
              link: '',
            },
          ],
        },
        {
          id: '1',
          title: '库存管理',
          link: '/',
          children: [
            {
              id: '10',
              title: '部门库存管理',
              link: '',
              children: [
                {
                  id: '110',
                  title: '部门库存管理',
                  link: '',
                },
                {
                  id: '111',
                  title: '小二库存管理',
                  link: '',
                },
              ],
            },
            {
              id: '11',
              title: '小二库存管理',
              link: '',
            },
          ],
        },
        {
          id: '1',
          title: '库存管理',
          link: '/',
          children: [
            {
              id: '10',
              title: '部门库存管理',
              link: '',
              children: [
                {
                  id: '110',
                  title: '部门库存管理',
                  link: '',
                },
                {
                  id: '111',
                  title: '小二库存管理',
                  link: '',
                },
              ],
            },
            {
              id: '11',
              title: '小二库存管理',
              link: '',
            },
          ],
        },
        {
          id: '1',
          title: '库存管理',
          link: '/',
          children: [
            {
              id: '10',
              title: '部门库存管理',
              link: '',
              children: [
                {
                  id: '110',
                  title: '部门库存管理',
                  link: '',
                },
                {
                  id: '111',
                  title: '小二库存管理',
                  link: '',
                },
              ],
            },
            {
              id: '11',
              title: '小二库存管理',
              link: '',
            },
          ],
        },
        {
          id: '2',
          title: '库存管理1',
          link: '',
        },
      ],
      copyright: 'Copyright © 2021 Agraffes Innovation.',
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
      featured: [
        {
          id: '1',
          title: 'what is hot',
          imgurl: 'https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/files/What_is_Hot_1767x1360.png?v=1620315303',
          link: '/cat',
        },
        {
          id: '2',
          imgurl: 'https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/files/2021_catalog_500x370.png?v=1620124279',
          title: 'what is hot',
          link: '/cat',
        },
        {
          id: '3',
          imgurl: 'https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/files/3_500x370.png?v=1620123328',
          title: 'what is hot',
          link: '/cat',
        },
        {
          id: '1',
          title: 'what is hot',
          imgurl: 'https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/files/What_is_Hot_1767x1360.png?v=1620315303',
          link: '/cat',
        },
        {
          id: '2',
          imgurl: 'https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/files/2021_catalog_500x370.png?v=1620124279',
          title: 'what is hot',
          link: '/cat',
        },
        {
          id: '3',
          imgurl: 'https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/files/3_500x370.png?v=1620123328',
          title: 'what is hot',
          link: '/cat',
        },
      ],
      bestSellerCatgory: [
        {
          id: '1',
          imgUrl: 'https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/products/PUAS_574x574.jpg?v=1612069069',
          title: 'Puzzle',
        },
        {
          id: '2',
          imgUrl: 'https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/files/SAGE_ASI_574x574.jpg?v=1619759941',
          title: 'LED Selfie Light',
        },
        {
          id: '3',
          imgUrl: 'https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/files/BHNQ-1_574x574.jpg?v=1619759790',
          title: 'Bluetooth Earbuds',
        },
        {
          id: '4',
          imgUrl: 'https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/products/KTFM_1_574x574.jpg?v=1629933711',
          title: 'Sport Water Bottle',
        },
      ],
    };
    res.send({
      status: 'SUCCESS',
      data,
    });
  },
  'GET /api/collections': (req, res) => {
    const data = {
      allCat: [
        {
          id: '1',
          imgUrl:
            'https://cdn.shopify.com/s/files/1/0528/5888/0181/p…ts/SiliconeAirtagcover_4_684x684.jpg?v=1621375970',
          title: 'AirPods & AirTag Case',
        },
        {
          id: '2',
          imgUrl:
            'https://cdn.shopify.com/s/files/1/0528/5888/0181/p…ts/SiliconeAirtagcover_4_684x684.jpg?v=1621375970',
          title: 'AirPods & AirTag Case',
        },
        {
          id: '3',
          imgUrl:
            'https://cdn.shopify.com/s/files/1/0528/5888/0181/p…ts/SiliconeAirtagcover_4_684x684.jpg?v=1621375970',
          title: 'AirPods & AirTag Case',
        },
        {
          id: '4',
          imgUrl:
            'https://cdn.shopify.com/s/files/1/0528/5888/0181/p…ts/SiliconeAirtagcover_4_684x684.jpg?v=1621375970',
          title: 'AirPods & AirTag Case',
        },
        {
          id: '5',
          imgUrl:
            'https://cdn.shopify.com/s/files/1/0528/5888/0181/p…ts/SiliconeAirtagcover_4_684x684.jpg?v=1621375970',
          title: 'AirPods & AirTag Case',
        },
      ],
    };

    res.send({
      status: 'SUCCESS',
      data,
    });
  },
  'GET /api/collections/:id': (req, res) => {
    const { id } = req.params;
    const data = {
      demo: `${id}`,
    };

    res.send({
      status: 'SUCCESS',
      data,
    });
  },
};
