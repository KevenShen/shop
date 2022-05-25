import { IRouterConfig } from 'ice';

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
