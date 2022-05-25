import React from 'react';
import { Box, Collapse } from '@alifd/next';
import styles from './index.module.scss';
const { Panel } = Collapse

function Footer() {
  return (
    <Box className={styles.footer}>
      <Box>
        <Box>
          <Collapse defaultExpandedKeys="simple tile">
            <Panel title="simple tile">
              <ul>
                <li>Backpack & Bag</li>
                <li>Backpack & Bag</li>
                <li>Backpack & Bag</li>
                <li>Backpack & Bag</li>
                <li>Backpack & Bag</li>
                <li>Backpack & Bag</li>
                <li>Backpack & Bag</li>
                <li>Backpack & Bag</li>
                <li>Backpack & Bag</li>
                <li>Backpack & Bag</li>
                <li>Backpack & Bag</li>
                <li>Backpack & Bag</li>
              </ul>
            </Panel>
          </Collapse>
        </Box>
        <Box>Follow us</Box></Box>
      <p>Copyright © 2021 Agraffes Innovation.</p>
    </Box >
  );
}

export default Footer;
