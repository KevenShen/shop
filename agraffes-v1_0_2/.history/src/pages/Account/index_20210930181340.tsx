import React from 'react';
import { Box, Typography } from '@alifd/next';
import styles from './index.module.scss';
const { H2 } = Typography

function Account() {
  return (
    <Box>
      <Box className={styles.account_page}>
        <Box className={styles.account_page_masthead}>
          <H2>My Account</H2>
        </Box>
      </Box>
    </Box>
  );
}

export default Account;
