const headerMenuConfig = [];

const asideMenuConfig = [
  {
    name: '主页',
    path: '/admin',
    icon: 'chart-pie',
  },
  {
    name: '订单',
    path: '/admin',
    icon: 'copy',
  },
  {
    name: '产品',
    path: '/admin',
    icon: 'chart-bar',
    children: [
      {
        name: '所有产品',
        path: '/admin/a',
      },
      {
        name: '库存',
        path: '/admin',
      },
      {
        name: '转移',
        path: '/admin',
      },
      {
        name: '产品系列',
        path: '/admin',
      },
      {
        name: '礼品卡',
        path: '/admin',
      },
    ],
  },
  {
    name: '详情页面',
    path: '/',
    icon: 'calendar',
    children: [
      {
        name: '基础详情',
        path: '/detail/basic',
      },
      {
        name: '高级详情',
        path: '/detail/advanced',
      },
    ],
  },
  {
    name: '结果&缺省',
    path: '/',
    icon: 'warning',
    children: [
      {
        name: '成功页面',
        path: '/feedback/success',
      },
      {
        name: '失败页面',
        path: '/feedback/fail',
      },
      {
        name: '403',
        path: '/feedback/403',
      },
      {
        name: '404',
        path: '/feedback/404',
      },
      {
        name: '500',
        path: '/feedback/500',
      },
    ],
  },
  {
    name: '设置页面',
    path: '/',
    icon: 'set',
    children: [
      {
        name: '系统设置',
        path: '/settings',
      },
      {
        name: '个人设置',
        path: '/person',
      },
    ],
  },
  {
    name: '登录&注册',
    path: '/',
    icon: 'account',
    children: [
      {
        name: '登录',
        path: '/user/login',
      },
      {
        name: '注册',
        path: '/user/register',
      },
    ],
  },
];

export { headerMenuConfig, asideMenuConfig };
