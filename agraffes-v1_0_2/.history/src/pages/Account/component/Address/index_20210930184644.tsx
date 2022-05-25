import React from 'react';
import { Box, Typography, List } from '@alifd/next';
import styles from './index.module.scss';
const { H1, H2 } = Typography;
const { Item } = List;

function Address() {
  return (
    <Box className={styles.account_page_addresse} direction="column">
      <Box className={styles.account_page_masthead}>
        <H1 className={styles.account_page_title}>My Addresses</H1>
      </Box>
      <Box className={styles.account_page_content}>
        <Box className={styles.account_page_two_column} direction="row">
          <Box className={styles.account_page_column_half}>
            <H2 className={styles.account_page_subtitle}>
              Addresses
            </H2>

          </Box>
          <Box className={styles.account_page_column_half}>

          </Box>
        </Box>
      </Box>
    </Box>
  );
}

export default Address;
