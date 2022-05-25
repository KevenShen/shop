import React from 'react';
import styles from './index.module.scss';
import { Link } from 'ice';

function Cart() {
  return (
    <Link to='/courses?sort=name' /></Link>
    <div className={styles.cart}>
      cart
    </div>
  );
}

export default Cart;
