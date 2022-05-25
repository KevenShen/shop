import React from 'react';
import { Box, Typography, Input,Button } from '@alifd/next';
const { H2, H4, Paragraph } = Typography;

function Forgot() {
  return (
    <Box direction="column" justify="center" align="center">
      <Box>
        <H2>Login</H2>
      </Box>
      <Box>
        <H4>Reset your password</H4>
        <Paragraph>We will send you an email to reset your password.</Paragraph>
        <Box>
          <Input></Input>
        </Box>
        <Box direction="row">
          <Box><Button>Submit</Button></Box>
          <Box><Button>Cannel</Button></Box>
        </Box>
      </Box>
    </Box>
  );
}

export default Forgot;
