import React from 'react';
import { Box, Typography, List, Input, Button } from '@alifd/next';
import styles from './index.module.scss';
const { H1, H2, Text } = Typography;
const { Item } = List;


function Address() {
  return (
    <Box className={styles.site_main}>
      <Box className={styles.account_page_addresse} direction="column">
        <Box className={styles.account_page_masthead}>
          <H1 className={styles.account_page_title}>My Addresses</H1>
        </Box>
        <Box className={styles.account_page_content} justify="center" align="center">
          <Box className={styles.account_page_two_column} direction="row">
            <Box className={styles.account_page_column_half} justify="flex-start" align="flex-start">
              <H2 className={styles.account_page_subtitle}>
                Addresses
              </H2>
              <Box className={styles.account_address_wrapper}>
                <List className={styles.account_address} divider={false}>
                  <Box className={styles.account_address_list}>
                    <Item title="keven shen" style={{ margin: 0 }}></Item>
                    <Item title="中国"></Item>
                    <Item title="1, 1"></Item>
                    <Item title="广州, AL"></Item>
                    <Item title="United States "></Item>
                    <Item title="13760844506"></Item>
                  </Box>
                  <Text className={styles.account_address_item_default}>Default address</Text>
                  <Box className={styles.account_address_list_footer} direction="row" justify="space-around">
                    <Button className={styles.button_primary} style={{ color: "#fff", backgroundColor: "#0076de", border: "1px solid #0076de" }}>Edit</Button>
                    <Button className={styles.button_secondary} style={{ color: "#0076de", backgroundColor: "#fff", border: "1px solid #ddd" }}>Delete</Button>
                  </Box>
                </List>
              </Box>
            </Box>
            <Box className={styles.account_page_column_half}>
              <Box className={styles.account_address_form}>
                <H2 className={styles.account_page_subtitle}>
                  Add a new Address
                </H2>
                <Box className={styles.form_fields_columns} direction="row">
                  <Box className={styles.form_field}><Input placeholder="First name" /></Box>
                  <Box className={styles.form_field}><Input placeholder="Last name" /></Box>
                </Box>
                <Box className={styles.form_field}>
                  <Input placeholder="Company"></Input>
                </Box>
                <Box className={styles.form_field}>
                  <Input placeholder="Address1"></Input>
                </Box>
                <Box className={styles.form_field}>
                  <Input placeholder="Address2"></Input>
                </Box>
                <Box className={styles.form_fields_columns} direction="row">
                  <Box className={styles.form_field}><Input placeholder="City" /></Box>
                  <Box className={styles.form_field}><Input placeholder="Country" /></Box>
                </Box>
                <Box className={styles.form_fields_columns} direction="row">
                  <Box className={styles.form_field}><Input placeholder="State/Province" /></Box>
                  <Box className={styles.form_field}><Input placeholder="Zip/Postal Code" /></Box>
                </Box>
                <Box className={styles.form_fields_columns} direction="row">
                  <Box className={styles.form_field}><Input placeholder="Phone" /></Box>
                  <Box className={styles.form_field}><Input placeholder="Zip/Postal Code" /></Box>
                </Box>
              </Box>
            </Box>
          </Box>
        </Box>
      </Box>
    </Box>
  );
}

export default Address;
