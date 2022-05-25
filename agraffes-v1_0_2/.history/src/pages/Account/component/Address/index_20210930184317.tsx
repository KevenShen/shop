import React from 'react';
import { Box, Typography } from '@alifd/next';
import styles from './index.module.scss';
const { H1 } = Typography;

function Address() {
  return (
    <Box className={styles.account_page_addresse} direction="column">
      <Box className={styles.account_page_masthead}>
        <H1 className={styles.account_page_title}>My Addresses</H1>
      </Box>

    </Box>
  );
}

export default Address;
