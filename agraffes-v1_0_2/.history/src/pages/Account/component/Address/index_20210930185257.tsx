import React from 'react';
import { Box, Typography, List, Input } from '@alifd/next';
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
            <List className={styles.account_address_wrapper}>
              <Item className={styles.account_address}></Item>
            </List>
          </Box>
          <Box className={styles.account_page_column_half}>
            <Box className={styles.account_address_form}>
              <H2 className={styles.account_page_subtitle}>
                Add a new Address
              </H2>
              <Box className={styles.form_fields_columns}>
                <Box className={styles.form_field}></Box>
                <Box className={styles.form_field}></Box>
              </Box>
            </Box>
          </Box>
        </Box>
      </Box>
    </Box>
  );
}

export default Address;
