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
        path: '/admin/b',
      },
      {
        name: '转移',
        path: '/admin/c',
      },
      {
        name: '产品系列',
        path: '/admin/d',
      },
      {
        name: '礼品卡',
        path: '/admin/e',
      },
    ],
  },
  {
    name: '客户',
    path: '/admin/h',
    icon: 'calendar',
  },
  {
    name: '资金',
    path: '/admin/ha',
    icon: 'warning',
  },
  {
    name: '分析',
    path: '/admin/hhh',
    icon: 'set',
  },
  {
    name: '营销',
    path: '/admin/sshhh',
    icon: 'set',
  },
  {
    name: '折扣',
    path: '/admin/sshsshh',
    icon: 'set',
  },
  {
    name: '登录&注册',
    path: '/admin',
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
