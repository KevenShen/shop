import React from 'react';
import { Box } from '@alifd/next';
import styles from './index.module.scss';

function GoodDetails() {
  return (
    <Box className={styles.product_section}>
      <Box className={styles.product_container}>
        <Box className={styles.product_outer} direction="row" justify="space-around">
          <Box className={styles.product_gallery} direction="column">
            <Box className={styles.product_gallery_viewer}></Box>
            <Box className={styles.product_gallery_media}></Box>
          </Box>
          <Box ></Box>
          <Box ></Box>
        </Box>
      </Box>
    </Box>
  );
}

export default GoodDetails;
