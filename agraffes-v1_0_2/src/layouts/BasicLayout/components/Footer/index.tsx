import React from 'react';
import styles from './index.module.scss';

export default function Footer() {
  return (
    <p className={styles.footer}>
      <span className={styles.logo}>Agraffes</span>
      <br />
      <span className={styles.copyright}>Copyright © 2021 Agraffes Innovation</span>
    </p>
  );
}
