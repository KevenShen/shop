import React from 'react';
import { Box, Typography } from '@alifd/next';
import { Link } from 'ice';
import styles from './index.module.scss';
const { H2 } = Typography;

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
                    <Box className={styles.productitem_image_link}>
                      <Link to="/" className={styles.productitem_image}>
                        <img src="https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/products/GolfScoreCounter_1_410x410.jpg?v=1624915008" alt="" />
                      </Link>
                    </Box>
                    <Box className={styles.productitem_info} direction="column">
                      <H2>
                        <Link to="/">
                          E-Click Golf Score Counter
                        </Link>
                      </H2>

                    </Box>
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
