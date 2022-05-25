import { IRouterConfig } from 'ice';
import FrontBasicLayout from '@/layouts/FrontBasicLayout';
import Index from '@/pages/Default/Index/Index';
import Collections from '@/pages/Default/Collections';

const routerConfig: IRouterConfig[] = [
  {
    path: '/',
    component: FrontBasicLayout,
    children: [
      {
        path: '/index.html',
        // exact: true,
        component: Index,
      },
      {
        path: '/coll.html',
        // exact: true,
        component: Collections,
      },
    ],
  },
  {
    path: '/coll',
    // exact: true,
    component: FrontBasicLayout,
    children: [
      {
        path: '/index',
        // exact: true,
        component: Collections,
      },
    ],
  },
];
export default routerConfig;
