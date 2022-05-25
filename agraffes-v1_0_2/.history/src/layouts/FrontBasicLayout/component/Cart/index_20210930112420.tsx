import React from 'react';
import styles from './index.module.scss';
import { Link } from 'ice';
import { Box } from '@alifd/next';

function Cart() {
  return (
    <Link to='/cart' >
      <Box className={styles.cart}>
        cart
      </B>
    </Link >
  );
}

export default Cart;
