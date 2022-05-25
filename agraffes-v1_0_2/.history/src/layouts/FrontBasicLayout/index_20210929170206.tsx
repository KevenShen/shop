import React, { useState, useEffect } from 'react';
import { ConfigProvider, Grid } from '@alifd/next';
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
  const [indexState, indexDispatchers] = store.useModel('index');
  useEffect(() => {
    indexDispatchers.getIndexInfo();
  }, []);
  return (
    <ConfigProvider device={device}>
      <div>
        <div className={styles.header}>
          <Row justify="center" className={styles.site_header_main}>
            <div className={styles.site_header_main_content}>
              <Col span="4" className={styles.site_header_logo}><Logo image={indexState.config.logoImgUrl} url={indexState.config.logoUrl} /></Col>
              <Col span="20" align="center" className={styles.live_search}><GlobalSearch /></Col>
              <Col span="4" className={styles.site_header_cart}><Cart /></Col>
            </div>
          </Row>

          <Row className={styles.site_main}>
            <Col className={styles.ite_navigation_wrapper}><Category /></Col>
            <Col fixedSpan="16"><Login /></Col>
          </Row>
        </div>
        {children}
        <Row className={styles.footer}>
          <Col><Footer /></Col>
        </Row>
      </div>
    </ConfigProvider>
  );
}
