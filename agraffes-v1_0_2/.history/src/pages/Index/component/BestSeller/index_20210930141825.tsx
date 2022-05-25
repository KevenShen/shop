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

function BestSellerCatgory(props) {
  const { baseSellerCatData } = props;
  return (
    <Box className={styles.bestSeller} direction="row" wrap>
      <H2 className={styles.home_section_title}>Best Seller Category</H2>
      <CardData
    </Box>

  );
}

export default BestSellerCatgory;
