import React from 'react';
import { Box, Typography } from '@alifd/next';
import styles from './index.module.scss';
const { H2 } = Typography

function Account() {
  return (
    <Box>
      <Box className={styles.account_page}>
        <Box className={styles.account_page_masthead}>
          <H2 className={styles.account_page_title}>My Account</H2>
        </Box>
      </Box>
      <Box className={styles.account_page_content}>
        <Box className={styles.account_page_two_column}>
          <Box className={styles.account_order_history}>
            <H2 className={styles.account_page_subtitle}>Order history</H2>
          </Box>
          <Box className={styles.}></Box>
        </Box>
      </Box>
    </Box>
  );
}

export default Account;
