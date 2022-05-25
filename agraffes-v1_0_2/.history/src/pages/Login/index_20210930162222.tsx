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
        <Box direction="column">
          <Box>
            <Input placeholder="Email"></Input>
          </Box>
          <Box>
            <Input.Password></Input.Password>
          </Box>
        </Box>
        <Box direction="row">
          <Box>
            <Button>Sign in</Button>
          </Box>
          <Box direction="column">
            <Box>New Customer?<Link to="/register">Create account</Link></Box>
            <Box><Link to="/forgot">Forgot your password?</Link></Box>
          </Box>
        </Box>
      </Box>
    </Box>
  );
}

export default Login;
