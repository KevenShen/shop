import React from 'react';
import { Typography, Input, Button } from '@alifd/next';
const { H2, Paragraph } = Typography

function JoinPromotion() {
  return (
    <Typography component='article'>
      <H2> Join the promotion</H2>
      <Paragraph>
        Subscribe to receive coupon specials, updates and tips on buying great promos.
      </Paragraph>
      <Paragraph>
        <Input
          size="medium"
          placeholder="Large"
          // onChange={onChange}
          aria-label="Large"
        />
        <Button type="primary">Sign up</Button>
      </Paragraph>
    </Typography>
  );
}

export default JoinPromotion;
