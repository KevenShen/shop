import React from 'react';
import { Box } from '@alifd/next';
import styles from './index.module.scss';

function Category() {
  return (
    <Box className={styles.site_main}>
      <Box className={styles.shopify_section_static_collection}>
        <Box className={styles.productgrid_outer} direction="column">
          <Box className={styles.productgrid_masthead}>
          </Box>
        </Box>
      </Box>
    </Box>
  );
}

export default Category;
