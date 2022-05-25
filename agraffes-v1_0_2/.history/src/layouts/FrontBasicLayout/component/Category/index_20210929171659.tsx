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
    ,
  }]

{ dataSource.map((item, i) => { 
  return(
    
  )
}}
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
          <Item key="1" className={styles.item}>New Arrivals</Item>
          <Item key="2">New Arrivals</Item>
          <SubMenu label="New Arrivals">
            <Item key="sub-12">New Arrivals</Item>
            <Item key="sub-22">New Arrivals</Item>
          </SubMenu>
          <SubMenu label="New Arrivals">
            <Item key="sub-1">New Arrivals</Item>
            <Item key="sub-2">New Arrivals</Item>
          </SubMenu>
          <Item key="3">New Arrivals</Item>
          <Item key="1">New Arrivals</Item>
          <Item key="2">New Arrivals</Item>
          <SubMenu label="New Arrivals">
            <Item key="sub-12">New Arrivals</Item>
            <Item key="sub-22">New Arrivals</Item>
          </SubMenu>
          <SubMenu label="New Arrivals">
            <Item key="sub-1">New Arrivals</Item>
            <Item key="sub-2">New Arrivals</Item>
          </SubMenu>
          <Item key="3">New Arrivals</Item>
          <Item key="1">New Arrivals</Item>
          <Item key="2">New Arrivals</Item>
          <SubMenu label="New Arrivals">
            <Item key="sub-12">New Arrivals</Item>
            <Item key="sub-22">New Arrivals</Item>
          </SubMenu>
          <SubMenu label="New Arrivals">
            <Item key="sub-1">New Arrivals</Item>
            <Item key="sub-2">New Arrivals</Item>
          </SubMenu>
          <Item key="3">New Arrivals</Item>
          <Item key="1">New Arrivals</Item>
          <Item key="2">New Arrivals</Item>
          <SubMenu label="New Arrivals">
            <Item key="sub-12">New Arrivals</Item>
            <Item key="sub-22">New Arrivals</Item>
          </SubMenu>
          <SubMenu label="New Arrivals">
            <Item key="sub-1">New Arrivals</Item>
            <Item key="sub-2">New Arrivals</Item>
          </SubMenu>
          <Item key="3">New Arrivals</Item>
          <Item key="1">New Arrivals</Item>
          <Item key="2">New Arrivals</Item>
          <SubMenu label="New Arrivals">
            <Item key="sub-12">New Arrivals</Item>
            <Item key="sub-22">New Arrivals</Item>
          </SubMenu>
          <SubMenu label="New Arrivals">
            <Item key="sub-1">New Arrivals</Item>
            <Item key="sub-2">New Arrivals</Item>
          </SubMenu>
          <Item key="3">New Arrivals</Item>
        </Menu>
      </Cell>
    </ResponsiveGrid>

  );
}

export default Category;
