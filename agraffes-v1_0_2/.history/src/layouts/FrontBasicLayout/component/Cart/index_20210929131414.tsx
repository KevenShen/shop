import React from 'react';
import styles from './index.module.scss';
import { Link } from 'ice';

function Cart() {
  return (
    <Link to='/courses?sort=name' >
      <div className={styles.cart}>
        cart
      </div>
    </Link >
  );
}

export default Cart;
