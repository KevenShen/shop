import { IRouterConfig } from 'ice';
import FrontBasicLayout from '@/layouts/FrontBasicLayout';
import Index from '@/pages/Default/Index/Index';
import Collections from '@/pages/Default/Collections';

const routerConfig: IRouterConfig[] = [
  {
    path: '/index',
    component: FrontBasicLayout,
    children: [
      {
        path: '/',
        // exact: true,
        component: Index,
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
