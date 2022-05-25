import React from 'react';
import styles from './index.module.scss';
import { Box, Icon } from '@alifd/next';
import { Link } from 'ice';


function Cart() {
  return (
    <Box className={styles.cart} align="center" justify="center">
      <Link to='/cart'>
        <Icon type="atm" />
      </Link>
    </Box>
  );
}

export default Cart;
