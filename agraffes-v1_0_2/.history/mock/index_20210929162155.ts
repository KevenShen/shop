export default {
  // 同时支持 GET 和 POST
  '/api/default/1': {
    data: {
      demo: 1,
    },
  },
  '/api/foo/bar': {
    data: {
      demo: 2,
    },
  },

  // 支持标准 HTTP
  'GET /api/users': { users: [1, 2] },
  'DELETE /api/users': { users: [1, 2] },

  // 支持参数
  'POST /api/users/:id': (req, res) => {
    const { id } = req.params;
    res.send({ id: id });
  },
};
