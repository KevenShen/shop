import { IRouterConfig } from 'ice';
import FrontBasicLayout from '@/layouts/FrontBasicLayout';
import Index from '@/pages/Default/Index/Index';

const routerConfig: IRouterConfig[] = [
  {
    path: '/',
    component: FrontBasicLayout,
    children: [
      {
        path: '/',
        // exact: true,
        component: Index,
      },
    ],
  },
];
export default routerConfig;
