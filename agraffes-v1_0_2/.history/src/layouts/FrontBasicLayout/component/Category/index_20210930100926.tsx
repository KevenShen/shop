import React from 'react';
import { ResponsiveGrid, Menu, Box } from '@alifd/next';
import styles from './index.module.scss';
const { Item, SubMenu, Divider } = Menu
import { Link } from 'ice';

const dataSource = [
  {
    id: '1',
    title: "库存管理",
    link: "/",
    children: [
      {
        id: '10',
        title: "部门库存管理",
        link: "",
        children: [
          {
            id: '110',
            title: "部门库存管理",
            link: ""
          },
          {
            id: '111',
            title: "小二库存管理",
            link: ""
          }
        ]
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

const CateGoryMenu = props => {
  const { dataSource, ...others } = props;
  return (
    <div className="my-custom-content3" {...others}>
      <Box direction="row">
        <Menu
          direction="hoz"
          mode="popup"
          className="my-hoz-menu"
          popupClassName="my-hoz-menu"
          popupAutoWidth
        >
          {dataSource.map((item, i) => {
            if (item.children) {
              return (
                <Link to={item.link}>
                  <SubMenu label={item.title} >
                    {
                      item.children.map((child, j) => {
                        return (
                          <Item key={child.id}>{child.title}</Item>
                        )

                      })
                    }
                  </SubMenu>
                </Link>
              )
            }
            return (
              <Item key={item.id}>{item.title}</Item>
            );
          })}
        </Menu>
      </Box>
    </div>
  );
};


const { Cell } = ResponsiveGrid;
function Category() {
  return (
    <ResponsiveGrid gap={50} className={styles.site_navigation}>
      <Cell colSpan={12}>
        <CateGoryMenu dataSource={dataSource} />
      </Cell>
    </ResponsiveGrid>

  );
}

export default Category;
