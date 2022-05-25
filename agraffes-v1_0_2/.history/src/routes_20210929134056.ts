import { IRouterConfig } from 'ice';
import FrontBasicLayout from '@/layouts/FrontBasicLayout';
import Index from '@/pages/Default/Index/Index';
import Collections from '@/pages/Default/Collections';
import Cart from '@/pages/Default/Cart';
import Login from '@/pages/Default/Login';
import Default from '@/pages/Default';

const routerConfig: IRouterConfig[] = [
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
        component: Login,
      },
      {
        path: '/',
        // exact: true,
        component: Index,
      },
    ],
  },
];
export default routerConfig;
