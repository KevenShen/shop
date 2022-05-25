import React from 'react';
import styles from './index.module.scss';
import { Box, Icon } from '@alifd/next';

function Cart() {
  return (
    <Box className={styles.cart} justify="center">
      <Icon type="atm"/>
    </Box>
  );
}

export default Cart;
