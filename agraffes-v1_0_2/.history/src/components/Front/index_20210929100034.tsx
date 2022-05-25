import React from 'react';
import { Slider, Box, Card } from '@alifd/next';

const slides = [1, 2, 3].map(item => (
  <Card className="media-card" free>
    <Card.Media>
      <img src="https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/products/CAOM_2_512x512.jpg?v=1630571990" />
    </Card.Media>
    <Card.Header
      title="Title"
      subTitle="Sub Title"
    />
  </Card>
));

function Lovely() {
  return (
    <div>
      <Box direction="row" wrap>{slides}</Box>
    </div>
  );
}

export default Lovely;
