import React from 'react';
import { Box, Typography } from '@alifd/next';
import styles from './index.module.scss';
const { H2 } = Typography
const count = 0;

function Account() {
  return (
    <Box>
      <Box className={styles.account_page}>
        <Box className={styles.account_page_masthead}>
          <H2 className={styles.account_page_title}>My Account</H2>
        </Box>
      </Box>
      <Box className={styles.account_page_content}>
        <Box className={styles.account_page_two_column} direction="column">
          <Box className={styles.account_page_olumn_large}>
            <Box className={styles.account_order_history}>
              <H2 className={styles.account_page_subtitle}>Order history</H2>

            </Box>
            {count ? "NUm" : <Box className={styles.empty}></Box>}
          </Box>
          <Box className={styles.account_page_column_small} direction="column">
            <Box className={styles.account_info_block}>
              <H2 className={styles.account_page_subtitle}></H2>
            </Box>
          </Box>
        </Box>
        <Box ></Box>
      </Box>
    </Box >
  );
}

export default Account;
