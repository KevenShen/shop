import React from 'react';
import { ResponsiveGrid, Menu } from '@alifd/next';
import styles from './index.module.scss';
const { Item, SubMenu } = Menu

const dataSource = [
  {
    title: "库存管理",
    link: "",
    children: [
      {
        title: "部门库存管理",
        link: ""
      },
      {
        title: "小二库存管理",
        link: ""
      }
    ]
  }]


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
