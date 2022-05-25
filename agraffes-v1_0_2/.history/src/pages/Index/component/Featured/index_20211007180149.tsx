import React from 'react';
import styles from './index.module.scss';
import { Box, Typography } from '@alifd/next';
import { Link } from 'ice';
const { H1, H2 } = Typography

function Featured(props) {
  const { featured } = props;
  return (
    <Box direction="column">
      <Box><H2><Link to="/">
        Shop New Arrivals Collection</Link></H2></Box>

      <Box direction="row" className={styles.promo_mosaic_container} justify="center">
        <Box className={styles.promo_block_index_1}>
          <img src={featured[0].imgurl} alt="" style={{ width: 953, }} />
          <H1>{featured[0].title}</H1>
        </Box>
        <Box className={styles.promo_block_index_2}>
          <Box>
            <img src={featured[1].imgurl} alt="" />
            <H1>{featured[1].title}</H1>
          </Box>
          <Box>
            <img src={featured[2].imgurl} alt="" />
            <H1>{featured[2].title}</H1>
          </Box>
        </Box>
      </Box>
    </Box>
  );
}

// function Featured(props) {
//   const { featured } = props;
//   return (
//     <Box direction="row" className={styles.promo_mosaic_container} justify="center">
//       <Box className={styles.promo_block_index_1}>
//         <Link to={featured[0]}>
//           <img src="https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/files/What_is_Hot_1767x1360.png?v=1620315303" alt="" style={{ width: 953, }} />
//         </Link>

//       </Box>
//       <Box className={styles.promo_block_index_2}>
//         <Box>
//           <img src="https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/files/2021_catalog_500x370.png?v=1620124279" alt="" />
//         </Box>
//         <Box>
//           <img src="https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/files/3_500x370.png?v=1620123328" alt="" />
//         </Box>
//       </Box>
//     </Box>
//   );
// }

export default Featured;
