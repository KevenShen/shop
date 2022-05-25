import { IRouterConfig } from 'ice';
import FrontBasicLayout from '@/layouts/FrontBasicLayout';

const routerConfig: IRouterConfig[] = [
  {
    path: '/i',
    component: FrontBasicLayout,
    children: [
      {
        path: '/index',
        // exact: true,
        component: Index,
      },
      {
        path: '/Collections',
        // exact: true,
        component: Collections,
      },
    ],
  },
];
export default routerConfig;
