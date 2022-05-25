import React from 'react';
import styles from './index.module.scss';
import { Box } from '@alifd/next';

function Featured() {
  return (
    <Box direction="row" className={styles.promo_mosaic_container} justify="center">
      <Box className={styles.promo_block_index_1}>
        <img src="https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/files/What_is_Hot_1767x1360.png?v=1620315303" alt="" style={{ width: 953, }} />
      </Box>
      <Box className={styles.promo_block_index_2}>
        <Box>
          <img src="https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/files/2021_catalog_500x370.png?v=1620124279" alt="" />
        </Box>
        <Box>
          <img src="https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/files/3_500x370.png?v=1620123328" alt="" />
        </Box>
      </Box>
    </Box>
  );
}

export default Featured;
