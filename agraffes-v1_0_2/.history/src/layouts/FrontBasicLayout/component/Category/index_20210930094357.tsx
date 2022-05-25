import React from 'react';
import { ResponsiveGrid, Menu } from '@alifd/next';
import styles from './index.module.scss';
const { Item, SubMenu } = Menu

const dataSource = [
  {
    id: '1',
    title: "库存管理",
    link: "/",
    children: [
      {
        id: '10',
        title: "部门库存管理",
        link: ""
      },
      {
        id: '11',
        title: "小二库存管理",
        link: ""
      }
    ]
  },
  {
    id: '2',
    title: "库存管理1",
    link: "",
    children: [
      {
        id: '20',
        title: "部门库存管理",
        link: ""
      },
      {
        id: '30',
        title: "小二库存管理",
        link: ""
      }
    ]
  },
]


const { Cell } = ResponsiveGrid;
function Category() {
  return (
    <ResponsiveGrid gap={50} className={styles.site_navigation}>
      <Cell colSpan={12}>
        <Menu
          direction="hoz"
          mode="popup"
          popupAutoWidth
          triggerType="hover"
          className={styles.categoryMenu}
        >

        </Menu>
      </Cell>
    </ResponsiveGrid>

  );
}

export default Category;
