import React from 'react';
import { Box, Typography, Input, Button } from '@alifd/next';
import { Link } from 'ice';
import styles from './index.module.scss';
const { H2 } = Typography


function Login() {
  return (
    <Box direction="column" justify="center" align="center" className={styles.site_main}>
      <Box className={styles.account_page}>
        <Box className={styles.account_page_masthead}>
          <H2>Login</H2>
        </Box>
        <Box direction="column" className={styles.account_page_content}>
          <Box className={styles.form_field}>
            <Input placeholder="Email" className={styles.form_field_input}></Input>
          </Box>
          <Box className={styles.form_field}>
            <Input.Password className={styles.form_field_input}></Input.Password>
          </Box>
        </Box>
        <Box direction="row" className={styles.form_action_row}>
          <Box>
            <Button className={styles.button_primary}>Sign in</Button>
          </Box>
          <Box direction="column" className={styles.form_action_row_helper}>
            <Box direction="row" className={styles.form_action_row_helper_item}><span>New Customer?</span><Link to="/register">Create account</Link></Box>
            <Box className={styles.form_action_row_helper_item}><Link to="/forgot">Forgot your password?</Link></Box>
          </Box>
        </Box>
      </Box>
    </Box>
  );
}

export default Login;
