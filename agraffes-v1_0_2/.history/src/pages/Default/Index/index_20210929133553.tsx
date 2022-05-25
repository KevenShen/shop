import React, { useState } from 'react';
import { Overlay, Box, Typography, Button } from '@alifd/next';
import Banner from './component/Banner';
import ProductShow from './component/ProductShow';
import Featured from './component/Featured';
import Promo from './component/Promo';
import DynamicVideo from './component/DynamicVideo';
import BestSeller from './component/BestSeller';
import JoinPromotion from './component/JoinPromotion';
import styles from './index.module.scss';
import pageStore from './store';


const FirstDiglog = (props) => {
  const [visible, setVisible] = useState(false);
  const [bannerState, bannerDispatchers] = pageStore.useModel('banner');
  console.log(bannerState);

  return (
    <Overlay
      visible={visible}
      align="cc cc"
      hasMask
      canCloseByEsc
      canCloseByMask
      needAdjust
    >
      <div className={styles.firstOverlay}>
        <Box>
          <Box>
            <Typography.H1>You will receive our special discount promotion. </Typography.H1>
            <Typography component='article'>
              Enter you email to claim weekly flyer/promotional
            </Typography>
            <input />
            <Button>
              SUBSCRIBE
            </Button>
          </Box>
          <Box></Box>
        </Box>
      </div>
    </Overlay>
  )
}


const slides = [
  {
    "id": 1,
    "imgUrl": "https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/files/FANZ-BANNER_1800x500.jpg?v=1627415205",
    "URL": "/index",
    "text": "Tape Player Skin Design Competition"
  },
  {
    "id": 2,
    "imgUrl": "https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/files/FANZ-BANNER_1800x500.jpg?v=1627415205",
    "URL": "Tape Player Skin Design Competition",
    "text": "Mobile Phone Taobao Skin Call"
  },
  {
    "id": 3,
    "imgUrl": "https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/files/FANZ-BANNER_1800x500.jpg?v=1627415205",
    "URL": "Tape Player Skin Design Competition",
    "text": "Design Enabling Public Welfare"
  },
  {
    "id": 4,
    "imgUrl": "https://cdn.shopifycdn.net/s/files/1/0528/5888/0181/files/FANZ-BANNER_1800x500.jpg?v=1627415205",
    "URL": "Tape Player Skin Design Competition",
    "text": "Amoy Doll Design Competition"
  }
]


const Index = (props) => {


  return (
    <div>
      <FirstDiglog />
      <Banner slides={slides} />
      <ProductShow className={styles.featured_collection_section} />
      <Featured />
      <Promo />
      <BestSeller />
      <DynamicVideo />
      <JoinPromotion />
    </div>
  )
}


export default Index;
