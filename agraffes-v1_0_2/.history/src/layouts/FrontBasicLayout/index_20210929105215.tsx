import React, { useState } from 'react';
import { ConfigProvider, Grid } from '@alifd/next';
import Logo from './component/Logo';
import GlobalSearch from './component/GlobalSearch';
import Cart from './component/Cart';
import Category from './component/Category';
import Login from './component/Login';
import Footer from './component/Footer';
import styles from './index.module.scss';

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

  return (
    <ConfigProvider device={device}>
      <div>
        <div className={styles.header}>
          <Row justify="center">
            <Col span="2"><Logo /></Col>
            <Col span="20" align="center"><GlobalSearch /></Col>
            <Col span="2"><Cart /></Col>
          </Row>
        </div>

        <Row className={styles.content}>
          <Col><Category /></Col>
          <Col fixedSpan="16"><Login /></Col>
        </Row>
        {children}
        <Row className={styles.footer}>
          <Col><Footer /></Col>
        </Row>
      </div>
    </ConfigProvider>
  );
}
