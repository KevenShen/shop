import React from 'react';
import { Box, Collapse, Menu } from '@alifd/next';
import styles from './index.module.scss';
const { Panel } = Collapse

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

function Footer() {
  return (
    <Box className={styles.footer}>
      <Box>
        <Box>
          <Collapse defaultExpandedKeys={["aaa"]}>
            <Panel title="simple tile" key="aaa">
              <ul>
                <li>Backpack & Bag</li>
                <li>Backpack & Bag</li>
                <li>Backpack & Bag</li>
                <li>Backpack & Bag</li>
                <li>Backpack & Bag</li>
              </ul>
            </Panel>
          </Collapse>
        </Box>
        <Box>
          <Collapse>
            <Panel title="simple tile">
              <ul>
                <li>Backpack & Bag</li>
                <li>Backpack & Bag</li>
              </ul>
            </Panel>
          </Collapse></Box></Box>
      <p>Copyright © 2021 Agraffes Innovation.</p>
    </Box >
  );
}

export default Footer;
