import React from 'react';
import { Box, Typography } from '@alifd/next';
import styles from './index.module.scss';

const { H1 } = Typography

function GoodDetails() {
  return (
    <Box className={styles.product_section}>
      <Box className={styles.product_container}>
        <Box className={styles.product_outer} direction="row" justify="space-around">
          <Box className={styles.product_gallery} direction="column">
            <Box className={styles.product_gallery_viewer}></Box>
            <Box className={styles.product_gallery_media}></Box>
          </Box>
          <Box className={styles.product_main}>
            <Box className={styles.product_details}>
              <H1 className={styles.product_title}>E-Click Golf Score Counter</H1>
              <Box className={styles.product_ratings}>
              </Box>
              <Box className={styles.product_pricing}></Box>

            </Box>
          </Box>
          <Box ></Box>
        </Box>
      </Box>
    </Box>
  );
}

export default GoodDetails;
