import React from 'react';
import { Box } from '@alifd/next';
import { Link } from 'ice';

function AllCategory() {
  return (
    <Box>
      <Box>
        <Box>
          <Link to="/">
            <Box direction="column" justify="center" align="center">

              <img src="https://cdn.shopify.com/s/files/1/0528/5888/0181/products/ClearShopppingBag-AU-OBBER_1_684x684.jpg?v=1623741136" alt="" />
              <span>AirPods & AirTag Case</span>

            </Box>
          </Link>
        </Box>
      </Box>
    </Box>
  );
}

export default AllCategory;
