import { IRouterConfig } from 'ice';
import FrontBasicLayout from '@/layouts/FrontBasicLayout';
import Index from '@/pages/Index/Index';
import Collections from '@/pages/Collections';
import Cart from '@/pages/Cart';
import Login from '@/pages/Login';

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
        path: '/',
        // exact: true,
        component: Index,
      },
    ],
  },
];
export default routerConfig;
