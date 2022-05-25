import React from 'react';
import { Box, Typography, List } from '@alifd/next';
import styles from './index.module.scss';
const { H2, Paragraph } = Typography
const { Item } = List
const count = 0;


function Account() {
  return (
    <Box className={styles.site_main}>
      <Box className={styles.account_page} direction="column">
        <Box className={styles.account_page_masthead}>
          <H2 className={styles.account_page_title}>My Account</H2>
        </Box>
        <Box className={styles.account_page_content}>
          <Box className={styles.account_page_two_column} direction="row" justify="space-between">
            <Box className={styles.account_page_olumn_large} direction="column" justify="flex-start" align="flex-start">
              <H2 className={styles.account_page_subtitle}>Order history</H2>
              {count ? "NUm" : <Box className={styles.empty}>You have no orders</Box>}
            </Box>
            <Box className={styles.account_page_column_small} direction="column">
              <Box className={styles.account_info_block}>
                <H2 className={styles.account_page_subtitle}>keven shen</H2>
                <Paragraph className={styles.account_info_item}>
                  <a href="">649401566@qq.com</a>
                </Paragraph>
              </Box>
              <Box className={styles.account_info_block}>
                <H2 className={styles.account_page_subtitle}>Default address</H2>
                <List className={styles.account_address_list}>
                  <Item title="keven shen"></Item>
                  <Item title="中国"></Item>
                  <Item title="1, 1"></Item>
                  <Item title="广州, AL"></Item>
                  <Item title="United States "></Item>
                  <Item title="13760844506"></Item>
                </List>
                <Paragraph className={styles.account_address_item}>
                  <a href="">View addresses (1)</a>
                </Paragraph>
              </Box>
            </Box>
          </Box>
          <Box ></Box>
        </Box>
      </Box>
    </Box >
  );
}

export default Account;
