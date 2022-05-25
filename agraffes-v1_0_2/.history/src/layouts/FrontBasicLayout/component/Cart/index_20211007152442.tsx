import React from 'react';
import styles from './index.module.scss';
import { Box, Icon, Badge } from '@alifd/next';
import { Link } from 'ice';


function Cart() {
  return (
    <Box className={styles.site_header_cart} align="center" justify="flex-end">
      <Badge>
        <Link to='/cart'>
          <Icon type="atm" />
        </Link>
      </Badge>
    </Box>
  );
}

export default Cart;
