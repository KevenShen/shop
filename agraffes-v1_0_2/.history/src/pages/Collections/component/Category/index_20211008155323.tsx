import React from 'react';
import { Box, Typography, Button } from '@alifd/next';
import { Link } from 'ice';
import styles from './index.module.scss';
const { H2, Paragraph } = Typography;


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
                      <Box className={styles.productitem_description} direction="column">
                        <Paragraph>E-Click Golf Score Counter made out of plastic with ball chain attached, easy attached to your glove, belt or golf bag and convenient to carry. Min...</Paragraph>
                        <Link to="" className={styles.productitem_link}>
                          View full details
                        </Link>
                      </Box>

                    </Box>
                  </Box>
                </Box>
              </Box>
            </Box>
            {/* <Box className={styles.productitem_actions} direction="column">
              <Box className={styles.productitem_listview_price}>
                <Box className={styles.productitem_price}>
                  <Box className={styles.price_main}>
                    <span className={styles.price_label}>from</span>
                    <span className={styles.money}>$3.47 </span>
                  </Box>
                </Box>
              </Box>
              <Box className={styles.quickshop_button}>
                <Button className={styles.productitem_action_trigger}>Quick shop</Button>
              </Box>
              <Box className={styles.atc_button}>
                <Button className={styles.productitem_action_trigger}>Choose options</Button>
              </Box>
            </Box> */}
          </Box>
        </Box>
      </Box>
    </Box>
  );
}

export default Category;
