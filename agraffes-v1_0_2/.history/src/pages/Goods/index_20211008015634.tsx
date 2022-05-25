import React from 'react';
import { Box } from '@alifd/next';
import { styles } from './index.module.scss';

function Goods() {
  return (
    <Box className={styles.site_main} direction="row">
      <Box></Box>
      <Box className={styles.product_section}>
        <Box className={styles.product_container}>
          <Box className={styles.product_outer} direction="row">
            <Box className={styles.product_gallery} direction="column">
              <Box className={styles.product_gallery_viewer}></Box>
              <Box className={styles.product_gallery_media}></Box>
            </Box>
            <Box className={styles.product_main} direction="column">
              
            </Box>
          </Box>
        </Box>
      </Box>
    </Box>
  );
}

export default Goods;
