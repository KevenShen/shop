import React from 'react';
import { Slider, Card, Button, ResponsiveGrid } from '@alifd/next';
import styles from './index.module.scss';
const { Cell } = ResponsiveGrid;
// const slides = [1, 2, 3, 4, 5, 6, 7, 8, 9].map(item => (
//   <div style={{ width: "25%" }} key={item}>
//     <h4 className="h4">{item}</h4>
//   </div>
// ));

const slides1 = [1, 2, 3, 4, 5, 6, 7, 8, 9].map(item => (
  <Card className={styles.media_card} free>
    <Card.Media>
      <img src="https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/products/CAOM_2_512x512.jpg?v=1630571990" />
    </Card.Media>
    <Card.Header
      title="from $5.24"
    />
    <Card.Content>
      Lorem ipsum dolor sit amet, est viderer iuvaret perfec
    </Card.Content>
    <Card.Actions>
      <Button type="primary" key="action1" text>
        Action 1
      </Button>
      <Button type="primary" key="action2" text>
        Action 2
      </Button>
    </Card.Actions>
  </Card>
));

const ProductShow = (props) => {

  return (
    <Slider className={styles.slider}
      slidesToShow={4}
      slidesToScroll={4}
      arrowPosition="outer"
      lazyLoad
      dots={false}
    >
      {slides1}
    </Slider>

  )
}


export default ProductShow;
