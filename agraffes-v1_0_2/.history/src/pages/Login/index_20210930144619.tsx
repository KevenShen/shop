import React from 'react';
import { Box, Typography, Input, Button } from '@alifd/next';
import { Link } from 'ice';
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
          <Box>New Customer?<Link to="/reg">Create account</Link></Box>
        </Box>
      </Box>
    </Box>
  );
}

export default Login;
