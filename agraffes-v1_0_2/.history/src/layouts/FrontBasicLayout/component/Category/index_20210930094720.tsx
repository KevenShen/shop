import React from 'react';
import { ResponsiveGrid, Menu, Box } from '@alifd/next';
import styles from './index.module.scss';
const { Item, SubMenu, Divider } = Menu

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
        {dataSource.map((item, i) => {
          return (
            <Menu embeddable key={item.id}>
              <Menu.Item>
                <div className="title">{item.title}</div>
              </Menu.Item>
              <Divider />
              {/* {item.dataSource.map((child, g) => {
                const a =
                  child.children &&
                  child.children.map((c, j) => {
                    return (
                      <Menu.Item key={j}>
                        <a href={c.link}>{c.title}</a>
                      </Menu.Item>
                    );
                  });
                return [
                  <div className="sub-title" key={`title-${g}`}>
                    {child.title}
                  </div>,
                  ...a
                ];
              })} */}
            </Menu>
          );
        })}
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
