import React from 'react';
import { Box } from '@alifd/next';
import styles from './index.module.scss';

function GoodDetails() {
  return (
    <Box className={styles.product_section}>
      <Box className={styles.product_container}>
        <Box className={styles.product_outer} direction="row" justify="space-around">

        </Box>
      </Box>
    </Box>
  );
}

export default GoodDetails;
