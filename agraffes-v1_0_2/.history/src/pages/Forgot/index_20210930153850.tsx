import React from 'react';
import { Box, Typography, Input, Button } from '@alifd/next';
const { H2, H4, Paragraph } = Typography;
import styles from './index.module.scss';

function Forgot() {
  return (
    <Box direction="column" justify="center" align="center" className={styles.account_page}>
      <Box className={styles.account_page_masthead}>
        <H2 className={styles.account_page_title}>Login</H2>
      </Box>
      <Box className={styles.account_page_content}>
        <Box className={styles.account_recovery}>
          <H4 className={styles.account_page_subtitle}>Reset your password</H4>
          <Paragraph>We will send you an email to reset your password.</Paragraph>
          <Box className={styles.form_field}>
            <Input className={styles.form_field_input} placeholder="Email"></Input>
          </Box>
          <Box direction="row" className={styles.form_action_row}>
            <Box><Button className={styles.button_primary}>Submit</Button></Box>
            <Box><Button className={styles.button_secondary}>Cannel</Button></Box>
          </Box>
        </Box>
      </Box>
    </Box>
  );
}

export default Forgot;
