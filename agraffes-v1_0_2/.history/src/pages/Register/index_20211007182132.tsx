import React from 'react';
import { Box, Typography, Input, Button } from '@alifd/next';
import { Link } from 'ice';
import styles from './index.module.scss';
const { H2 } = Typography


function Register() {
  return (
    <Box direction="column" justify="center" align="center" className={styles.account_page}>
      <Box className={styles.account_page_masthead}>
        <H2 className={styles.account_page_title}>create accout</H2>
      </Box>
      <Box >
        <Box direction="row" justify="center" className={styles.account_page_content}>
          <Box className={styles.form_field}><Input className={styles.form_field_input} placeholder="First Name"></Input></Box>
          <Box className={styles.form_field}><Input className={styles.form_field_input} placeholder="Last Name"></Input></Box>
          <Box className={styles.form_field}><Input className={styles.form_field_input} placeholder="Email"></Input></Box>
          <Box className={styles.form_field}><Input className={styles.form_field_input} placeholder="Password"></Input></Box>
        </Box>
        <Box direction="row" justify="center" className={styles.form_action_row}>
          <Box><Button className={styles.button_primary}>Create</Button></Box>
          <Box className={styles.form_action_row_helper}><span className={styles.form_action_row_helper_item}>Returning customer?</span><Link to="/login">Sign in</Link></Box>
        </Box>
      </Box>
    </Box>
  );
}

export default Register;
