import React from 'react';
import { Link } from 'ice';
import { Slider, Card, Button } from '@alifd/next';
import styles from './index.module.scss';




const ProductShow = (props) => {
  const { productShowSlides } = props
  const slides = productShowSlides.map((item) => (
    <div className={styles.productitem_emphasis} >
      <Card free className={styles.productitem}>
        <Link to={item.link} >
          <Card.Media className={styles.productitem_image_link}>
            <img src={item.productImg} />
          </Card.Media>
          <div className={styles.productitem_info}>
            <Card.Header
              title={item.price} className={styles.productitem_price}
            />
            <Card.Content className={styles.productitem_title}>
              {item.title}
            </Card.Content>
          </div>
        </Link>
        <Card.Actions className={styles.productitem_action}>
          <Button type="primary" key="action1" text className={styles.productitem_action_trigger}>
            Quick shop
          </Button>
          <Button type="primary" key="action2" text>
            Choose options
          </Button>
        </Card.Actions>
      </Card>
    </div >
  ));
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
