import React, { useState, useEffect } from 'react';
import { Box, ConfigProvider, Grid } from '@alifd/next';
import Logo from './component/Logo';
import GlobalSearch from './component/GlobalSearch';
import Cart from './component/Cart';
import Category from './component/Category';
import Login from './component/Login';
import Footer from './component/Footer';
import styles from './index.module.scss';
import store from '@/store';

const { Row, Col } = Grid;

interface IGetDevice {
  (width: number): 'phone' | 'tablet' | 'desktop';
}
export default function BasicLayout({ children }: { children: React.ReactNode }) {
  const getDevice: IGetDevice = (width) => {
    const isPhone = typeof navigator !== 'undefined' && navigator && navigator.userAgent.match(/phone/gi);

    if (width < 680 || isPhone) {
      return 'phone';
    } else if (width < 1280 && width > 680) {
      return 'tablet';
    } else {
      return 'desktop';
    }
  };

  const [device, setDevice] = useState(getDevice(NaN));

  if (typeof window !== 'undefined') {
    window.addEventListener('optimizedResize', (e) => {
      const deviceWidth = (e && e.target && (e.target as Window).innerWidth) || NaN;
      setDevice(getDevice(deviceWidth));
      console.log(1);

    });
  }

  const [globalState, globalDispatchers] = store.useModel('global');
  useEffect(() => {
    globalDispatchers.getGlobalInfo();
  }, []);

  return (
    <ConfigProvider device={device}>
      <Box direction="column" >
        <Box className={styles.header} direction="column">
          <Row justify="center" className={styles.site_header_main}>
            <Box className={styles.site_header_main_content} direction="row">
              <Col span="2" className={styles.site_header_logo}><Logo image={globalState.global.logoImgUrl} url={globalState.global.logoUrl} /></Col>
              <Col span="20" align="center" className={styles.live_search}><GlobalSearch /></Col>
              <Col span="2" className={styles.site_header_cart}><Cart /></Col>
            </Box>
          </Row>

          {/* <Row className={styles.site_main}>
            <Col className={styles.ite_navigation_wrapper}><Category dataSource={globalState.dataSource} /></Col>
            <Col fixedSpan="16"><Login /></Col>
          </Row> */}
        </Box>
        {children}
        {/* <Row className={styles.footer}>
          <Col><Footer dataSource={globalState.dataSource} copyright={globalState.copyright} /></Col>
        </Row> */}
      </Box>
    </ConfigProvider>
  );
}
