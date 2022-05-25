import React from 'react';
import { Box, Collapse, Typography } from '@alifd/next';
import styles from './index.module.scss';
const { Panel } = Collapse
const { H3 } = Typography


const CateGoryFooter = props => {
  const { dataSource, ...others } = props;
  console.log(dataSource);
  return (
    <div className="my-custom-content3" {...others}>
      <ul>
        {dataSource.map((item) => {
          return (
            <li><a href={item.link}>{item.title}</a></li>
          )
        })}
      </ul>
    </div>
  );
};

function Footer(props) {
  const { dataSource } = props


  return (
    <Box className={styles.footer}>
      <Box>
        <Box>
          <Collapse defaultExpandedKeys={["one"]}>
            <Panel title="Main-menu" key="one">
              <CateGoryFooter dataSource={dataSource} />
            </Panel>
          </Collapse>
        </Box>
        <Box>
          <Collapse defaultExpandedKeys={["two"]}>
            <Panel title="simple tile" key="two">
              <H3> Follow us</H3>
              <ul>
                <li>
                  <a href="" alt="Find us on E-mail"></a>
                </li>
              </ul>

            </Panel>
          </Collapse></Box></Box>
      <p>Copyright © 2021 Agraffes Innovation.</p>
    </Box >
  );
}

export default Footer;
