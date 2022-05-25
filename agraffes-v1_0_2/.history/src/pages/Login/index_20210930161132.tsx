import React from 'react';
import { Box, Typography, Input, Button } from '@alifd/next';
import { Link } from 'ice';
import styles from './index.module.scss';
const { H2 } = Typography


function Login() {
  return (
    <Box direction="column" justify="center" align="center">
      <Box>
        <H2>Login</H2>
      </Box>
      <Box>
        <Input></Input>
      </Box>
      <Box>
        <Input></Input>
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
  );
}

export default Login;
