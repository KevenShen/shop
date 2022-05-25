import React from 'react';
import { Box, Typography, Form, Button, Icon } from '@alifd/next';
import styles from './index.module.scss';

const { H1 } = Typography

function GoodDetails() {
  return (
    <Box className={styles.product_section}>
      <Box className={styles.product_container}>
        <Box className={styles.product_outer} direction="row" justify="space-around">
          <Box className={styles.product_gallery} direction="column">
            <Box className={styles.product_gallery_viewer}>
              <Button className={styles.product_gallery_expand}>
                <span className={styles.click_text}>Click to expand</span>
                <figure className={styles.product_gallery_media}>
                  <Box className={styles.product_gallery_image_background}>
                    <img src="https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/products/CAOM_2_1000x1000.jpg?v=1630571990" alt="" className={styles.product_gallery_loaded_image} />
                  </Box>
                </figure>
              </Button>
            </Box>
            <Box className={styles.product_gallery_navigation}>
              <Box className={styles.gallery_navigation_scroller}>
                <Button className={styles.product_gallery_media_thumbnail}>
                  <span className={styles.product_gallery_media_thumbnail_img_wrapper}>
                    <img src="https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/products/CAOM_2_150x150_crop_center.jpg?v=1630571990" alt="" className={styles.product_gallery_media_thumbnail_img} />
                  </span>
                </Button>
              </Box>
            </Box>
          </Box>
          <Box className={styles.product_main} >
            <Box className={styles.product_details} direction="column">
              <H1 className={styles.product_title}>E-Click Golf Score Counter</H1>
              <Box className={styles.product_ratings}>
                <span className={styles.shopify_product_reviews_badge}>
                  <span className={styles.spr_badge}>
                    <span className={styles.spr_starrating}>
                      <Icon className={styles.spr_icon}></Icon>
                    </span>
                  </span>
                </span>
              </Box>
              <Box className={styles.product_pricing}>
                <span className={styles.product_badge}>Sale</span>
                <Box className={styles.product_price}>
                  <Box className={styles.price_main}>
                    <span className={styles.money}>$4.24</span>
                  </Box>
                </Box>
              </Box>

            </Box>
            <Box className={styles.product_description}>
              <p data-mce-fragment="1">E-Click Golf Score Counter made out of plastic with ball chain attached, easy attached to your glove, belt or golf bag and convenient to carry. Mini size and light weight design can be use anywhere at any time. Number count from 0 to 9, automatically pop-up while pressing the buttons. Large imprint area good for spot color &amp; full color imprint.</p>
              <p data-mce-fragment="1"><strong data-mce-fragment="1">Product size:</strong>&nbsp;2.68" x 1.42" x 0.51"</p>
              <p data-mce-fragment="1"><strong data-mce-fragment="1">Imprint Size: </strong>1.67" x 0.67"</p>
              <p data-mce-fragment="1"><strong>Set up</strong><span>&nbsp;$31.25(v)</span></p>
              <p data-mce-fragment="1">Standard Price include free 1 color imprint on 1 location, free virtual proof. free shipping to 1 location within 48 states.</p>
              <p data-mce-fragment="1">Additional&nbsp;color imprint set up $25 (v) per&nbsp;color</p>
              <p data-mce-fragment="1"><span data-mce-fragment="1">Additional</span><span data-mce-fragment="1">&nbsp;color&nbsp;</span>running charge $0.25(v) per color</p>
              <p data-mce-fragment="1">Full color imprint set up $37.50 (v) per logo</p>
              <p data-mce-fragment="1">Full color imprint set up $37.50 (v) per logo</p>
              <p data-mce-fragment="1"><span data-mce-fragment="1" mce-data-marked="1">Full</span><span data-mce-fragment="1">&nbsp;color imprint&nbsp;</span><span data-mce-fragment="1">running charge $1.05(v) per location</span></p>
              <p data-mce-fragment="1"><strong data-mce-fragment="1">Production time:</strong>&nbsp;5 working days</p>
              <p data-mce-fragment="1"><strong data-mce-fragment="1">Material:</strong>&nbsp;Plastic</p>
              <p data-mce-fragment="1"><strong data-mce-fragment="1">Material:</strong>&nbsp;Plastic</p>
              <p data-mce-fragment="1"><strong data-mce-fragment="1">Color:</strong> Blue, Yellow, Red</p>
            </Box>
          </Box>
          <Box className={styles.product_form_alt}>
            <Box>
              <Form className={styles.smart_payment_enabled}>
                <Box direction="column">
                  <Box></Box>
                  <Box></Box>
                  <Box></Box>
                  <Box></Box>
                </Box>
              </Form>
            </Box>
          </Box>
        </Box>
      </Box>
    </Box>
  );
}

export default GoodDetails;
