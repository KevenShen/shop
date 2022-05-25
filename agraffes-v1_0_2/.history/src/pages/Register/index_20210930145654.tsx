import React from 'react';
import { Box, Typography, Input, Button } from '@alifd/next';
import { Link } from 'ice';
const { H2 } = Typography


function Register() {
  return (
    <Box direction="column" justify="center" align="center">
      <Box>
        <H2>create accout</H2>
      </Box>
      <Box>
        <Box direction="row" justify="center">
          <Box><Input></Input></Box>
          <Box><Input></Input></Box>
        </Box>
        <Box direction="row" justify="center">
          <Box><Input></Input></Box>
          <Box><Input></Input></Box>
        </Box>
        <Box direction="row" justify="center">
          <Box><Button></Button></Box>
          <Box>Returning customer?<Link to="/login">Sign in</Link></Box>
        </Box>
      </Box>
    </Box>
  );
}

export default Register;
