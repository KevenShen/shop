import React from 'react';
import { Box, Form, Typography, Button, Select } from '@alifd/next';
import { Link } from 'ice';
import styles from './index.module.scss';

const { H1, H2, Paragraph } = Typography;

function Cart() {
  return (
    <Box className={styles.site_main}>
      <Form>
        <Box className={styles.shopify_section_static_cart} direction="column">
          <Box className={styles.cart_title} direction="row" justify="space-around" align="center">
            <Box className={styles.cart_title_left} direction="column">
              <H1>Your cart</H1>
              <Paragraph className={styles.cart_title_total_small}>
                <div className={styles.cart_title_total}>
                  Subtotal <span className={styles.money}>$3.07</span>
                </div>
              </Paragraph>
            </Box>
            <Box className={styles.cart_title_right}>
              <Button className={styles.cart_title_button} style={{ backgroundColor: '#0076de', color: '#FFF' }}>
                Checkout
              </Button>
            </Box>
          </Box>
          <Box className={styles.cartitems_container} justify="space-around" align="center" direction="row">
            <Box className={styles.cart_item_image_wrapper}>
              <a href="/">
                <img
                  src="https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/products/all_5278f8e2-6d04-4350-8e0b-703b49988988_360x360.jpg?v=1615769738"
                  alt=""
                />
              </a>
            </Box>
            <Box className={styles.cart_item_inner} direction="column">
              <Box className={styles.cart_item_inner} direction="column">
                <H2 className={styles.cart_item_content_title}>
                  <Link to="/">2IN1 Auge Phone Stand</Link>
                </H2>
                <Paragraph className={styles.cart_item_product_options}>
                  <span className={styles.cart_item_option_name}>Quantity & Price(c)</span>
                  100
                </Paragraph>
                <Paragraph className={styles.cart_item_product_options}>
                  <span className={styles.cart_item_option_name}>Model Number</span>
                  AG-OKS
                </Paragraph>
                <Paragraph className={styles.cart_item_content_price}>
                  <span className={styles.cart_item_price_title}>$3.07</span>
                </Paragraph>
              </Box>
              <Box className={styles.cart_item_info} direction="column">
                <Box className={styles.cart_item_quantity}>
                  <Box className={styles.form_field}>
                    <Box className={styles.form_field_select_wrapper}>
                      <label className={styles.form_field_title}>Quantity</label>
                      <Select className={styles.form_field_select}>
                        <Select.Option value="1"></Select.Option>
                      </Select>
                    </Box>
                  </Box>
                </Box>
                <Box direction="row" justify="space-around">
                  <Box className={styles.cart_item_total} justify="flex-start">
                    <Paragraph className={styles.money}>
                      <span className={styles.visually_hidden}>Total line price</span>$3.07
                    </Paragraph>
                  </Box>
                  <Box className={styles.cart_item_remove}>
                    <a href="/">*</a>
                  </Box>
                </Box>
              </Box>
            </Box>
          </Box>
          <Box className={styles.cart_total} direction="column">
            <Box className={styles.cart_final_total} direction="column" justify="space-around">
              <Box direction="row" justify="space-between" className={styles.cart_subtotal}>
                <span>Subtotal</span>
                <span className={styles.money}>$3.07</span>
              </Box>
            </Box>
            <Box className={styles.cart_shipping}>
              <Paragraph>Taxes calculated at checkout</Paragraph>
              <Paragraph className={styles.cart_shippingcalc_nonene}>Your cart does not require shipping.</Paragraph>
            </Box>
            <Box className={styles.cart_checkout} direction="column">
              <Button className={styles.mdc_ripple_surface} style={{ backgroundColor: '#0076de', color: '#FFF' }}>
                Checkout
              </Button>
              <Link to="/" className={styles.cart_continue}>
                Continue shopping
              </Link>
            </Box>
          </Box>
        </Box>
      </Form>
    </Box>
  );
}

export default Cart;
