import React from 'react';
import { Card, Box } from '@alifd/next';
import styles from './index.module.scss';

function BestSeller() {
  return (
    <Box className={styles.bestSeller} direction="row" wrap>
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

export default BestSeller;
