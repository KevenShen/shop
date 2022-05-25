import { IRouterConfig } from 'ice';
import FrontBasicLayout from '@/layouts/FrontBasicLayout';
import Index from './pages/Default/Index';

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
    ],
  },
];
export default routerConfig;
