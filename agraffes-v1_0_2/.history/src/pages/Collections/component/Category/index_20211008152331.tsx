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
          <Box direction="row">
            <Box className={styles.productgrid_sidebar}></Box>
            <Box className={styles.productgrid_wrapper} direction="column">
              <Box className={styles.productgrid_utils} direction="row">
                <Box className={styles.productgrid_utils}></Box>
                <Box className={styles.productgrid_utils}></Box>
              </Box>
              <Box className={styles.productgrid_items}>
                <Box className={styles.productgrid_item}>
                  <Box className={styles.productitem} direction="row">
                      <Box className={styles.productitem_image_link}></Box>
                  </Box>
                </Box>
              </Box>
            </Box>
          </Box>
        </Box>
      </Box>
    </Box>
  );
}

export default Category;
