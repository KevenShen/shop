import * as Mock from 'mockjs';
export default {
  'GET /api/list': (req, res) => {
    const list = Mock.mock({
      'list|1-10': [
        {
          'id|+1': 1,
        },
      ],
    });
    res.send({
      status: 'SUCCESS',
      data: {
        list,
      },
    });
  },
};
