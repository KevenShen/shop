import React from 'react';
import { Card, Box, Typography } from '@alifd/next';
import styles from './index.module.scss';
const { H2 } = Typography

const CardData = (props) => {
  const { baseSellerCatData } = props
  baseSellerCatData.map((item) => {
    <Card free className={styles.bestSelleitem}>
      <Card.Media>
        <img src={item.imgUrl} />
      </Card.Media>
      <Card.Header
        title={item.title}
      />
    </Card>
  })
}

function BestSellerCatgory() {
  return (
    <Box className={styles.bestSeller} direction="row" wrap>
      <H2 className={styles.home_section_title}>Best Seller Category</H2>
      <Card free className={styles.bestSelleitem}>
        <Card.Media>
          <img src="https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/products/CAOM_2_512x512.jpg?v=1630571990" />
        </Card.Media>
        <Card.Header
          title="Puzzle"
        />
      </Card>
      <Card free className={styles.bestSelleitem}>
        <Card.Media>
          <img src="https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/products/CAOM_2_512x512.jpg?v=1630571990" />
        </Card.Media>
        <Card.Header
          title="Puzzle"
        />
      </Card>
      <Card free className={styles.bestSelleitem}>
        <Card.Media>
          <img src="https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/products/CAOM_2_512x512.jpg?v=1630571990" />
        </Card.Media>
        <Card.Header
          title="Puzzle"
        />
      </Card>
      <Card free className={styles.bestSelleitem}>
        <Card.Media>
          <img src="https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/products/CAOM_2_512x512.jpg?v=1630571990" />
        </Card.Media>
        <Card.Header
          title="Puzzle"
        />
      </Card>
    </Box>

  );
}

export default BestSellerCatgory;
