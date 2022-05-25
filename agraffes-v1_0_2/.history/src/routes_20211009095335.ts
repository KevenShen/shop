import { IRouterConfig } from 'ice';
import FrontBasicLayout from '@/layouts/FrontBasicLayout';
import Index from '@/pages/Index/Index';
import Collections from '@/pages/Collections';
import Cart from '@/pages/Cart';
import Login from '@/pages/Login';
import Default from '@/pages/Default';
import Register from '@/pages/Register';
import Forgot from '@/pages/Forgot';
import Account from '@/pages/Account';
import Address from '@/pages/Account/component/Address';
import Admin from '@/pages/Admin';

import Category from '@/pages/Collections/component/Category';

const routerConfig: IRouterConfig[] = [
  {
    path: '/admin',
    component: Admin,
  },
  {
    path: '/',
    component: FrontBasicLayout,
    children: [
      {
        path: '/index',
        // exact: true,
        component: Index,
      },
      {
        path: '/coll',
        // exact: true,
        component: Collections,
      },
      {
        path: '/cart',
        // exact: true,
        component: Cart,
      },
      {
        path: '/login',
        // exact: true,
        component: Login,
      },
      {
        path: '/default',
        // exact: true,
        component: Default,
      },
      {
        path: '/register',
        // exact: true,
        component: Register,
      },
      {
        path: '/forgot',
        // exact: true,
        component: Forgot,
      },
      {
        path: '/collections',
        // exact: true,
        component: Collections,
      },
      {
        path: '/account',
        // exact: true,
        component: Account,
      },
      {
        path: '/address',
        // exact: true,
        component: Address,
      },
      {
        path: '/tcate',
        component: Category,
      },

      // {
      //   path: '/',
      //   // exact: true,
      //   component: Index,
      // },
    ],
  },
];
export default routerConfig;
