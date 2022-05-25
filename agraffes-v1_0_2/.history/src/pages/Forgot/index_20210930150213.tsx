import React from 'react';
import { Box, Typography } from '@alifd/next';
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
      </Box>
    </Box>
  );
}

export default Forgot;
