import React from 'react';
import { Box, Typography, Input } from '@alifd/next';
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
    </Box>
  );
}

export default Login;
