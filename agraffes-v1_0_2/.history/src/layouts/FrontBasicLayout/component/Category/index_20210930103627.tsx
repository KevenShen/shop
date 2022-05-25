import React from 'react';
import { ResponsiveGrid, Menu, Box } from '@alifd/next';
import styles from './index.module.scss';
const { Item, SubMenu, Divider } = Menu
import { Link } from 'ice';



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
          triggerType="hover"
        >
          {dataSource.map((item, i) => {
            if (item.children) {
              return (
                <SubMenu label={item.title} >
                  {
                    item.children.map((child, j) => {
                      if (child.children) {
                        return (
                          <SubMenu label={child.title} >
                            {
                              child.children.map((c, j) => {
                                return (
                                  <Item key={c.id}><a href={c.link}>{c.title}</a></Item>
                                )
                              })
                            }
                          </SubMenu>
                        )
                      }
                      return (
                        <Item key={child.id}><a href={child.link}>{child.title}</a></Item>
                      )
                    })
                  }
                </SubMenu>

              )
            }
            return (
              <Item key={item.id}><a href={item.link}>{item.title}</a></Item>
            );
          })}
        </Menu>
      </Box>
    </div>
  );
};


const { Cell } = ResponsiveGrid;
function Category(props) {
  return (
    <ResponsiveGrid gap={50} className={styles.site_navigation}>
      <Cell colSpan={12}>
        <CateGoryMenu dataSource={props.dataSource} />
      </Cell>
    </ResponsiveGrid>

  );
}

export default Category;
