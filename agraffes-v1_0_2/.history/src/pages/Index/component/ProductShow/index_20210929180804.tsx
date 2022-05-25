import React from 'react';
import { Slider, Card, Button, ResponsiveGrid } from '@alifd/next';
import styles from './index.module.scss';
const { Cell } = ResponsiveGrid;


const slides = [1, 2, 3, 4, 5, 6, 7, 8, 9].map((item, i) => (
  <div className={styles.productitem_emphasis} >
    <Card free className={styles.productitem}>
      <Card.Media className={styles.productitem_image_link}>
        <img src="https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/products/CAOM_2_512x512.jpg?v=1630571990" />
      </Card.Media>
      <div className={styles.productitem_info}>
        <Card.Header
          title="from $5.24" className={styles.productitem_price}
        />
        <Card.Content className={styles.productitem_title}>
          Lorem ipsum dolor sit amet, est viderer iuvaret perfec
        </Card.Content>
      </div>
      <Card.Actions className={styles.productitem_action}>
        <Button type="primary" key="action1" text className={styles.productitem_action_trigger}>
          Quick shop
        </Button>
        <Button type="primary" key="action2" text>
          Choose options
        </Button>
      </Card.Actions>
    </Card>
  </div>

));

const ProductShow = (props) => {

  return (
    <div className={styles.featured_collection_container}>
      <Slider className={styles.featured_collection_content}
        slidesToShow={4}
        slidesToScroll={4}
        arrowPosition="outer"
        lazyLoad
        dots={false}
      >
        {slides}
      </Slider>
    </div>

  )
}


export default ProductShow;
