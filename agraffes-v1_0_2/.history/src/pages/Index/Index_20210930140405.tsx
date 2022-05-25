import React, { useState, useEffect } from 'react';
import { Overlay, Box, Typography, Button } from '@alifd/next';
import Banner from './component/Banner';
import ProductShow from './component/ProductShow';
import Featured from './component/Featured';
import Promo from './component/Promo';
import DynamicVideo from './component/DynamicVideo';
import BestSeller from './component/BestSeller';
import JoinPromotion from './component/JoinPromotion';
import styles from './index.module.scss';
import store from '@/store';



const FirstDiglog = (props) => {
  const [visible, setVisible] = useState(false);

  return (
    <Overlay
      visible={visible}
      align="cc cc"
      hasMask
      canCloseByEsc
      canCloseByMask
      needAdjust
    >
      <div>
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



const Index = (props) => {
  const [indexState, indexDispatchers] = store.useModel('index');
  useEffect(() => {
    indexDispatchers.getIndexInfo()
  }, []);
  return (
    <div>
      <FirstDiglog />
      <Banner slides={indexState.banner} />
      <ProductShow productShowSlides={indexState.productShowSlides} className={styles.featured_collection_section} />


      console.log(indexState);

      {/* <Featured featured={indexState.featured} /> */}
      <Promo />
      <BestSeller />
      {/* <DynamicVideo /> */}
      <JoinPromotion />
    </div>
  )
}


export default Index;
