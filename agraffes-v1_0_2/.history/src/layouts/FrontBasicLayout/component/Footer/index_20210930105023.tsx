import React from 'react';
import { Box, Collapse, Menu } from '@alifd/next';
import styles from './index.module.scss';
const { Panel } = Collapse

const CateGoryFooter = props => {
  const { dataSource, ...others } = props;
  return (
    <div className="my-custom-content3" {...others}>
      <ul>
        {dataSource.map((item) => {
          <li><a href={item.link}>{item.title}</a></li>
        })}
      </ul>
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
