import React from 'react';
import { Box, Collapse, Typography, ResponsiveGrid } from '@alifd/next';
import styles from './index.module.scss';
import classnames from 'classnames'
const { Panel } = Collapse
const { H3 } = Typography
const { Cell } = ResponsiveGrid;


const CateGoryFooter = props => {
  const { dataSource, ...others } = props;
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
  const { dataSource, copyright } = props
  return (
    <Box>
        <Box className={styles.site_footer_item} direction="row" wrap>
          <Box style={{"Width":58}}>
            <Collapse defaultExpandedKeys={["one"]}  className={styles.test}>
              <Panel title="Main-menu" key="one" className={styles.site_footer_block_title}>
                <CateGoryFooter dataSource={dataSource} />
              </Panel>
            </Collapse>
          </Box>
          <Box >
            <Collapse defaultExpandedKeys={["two"]} >
              <Panel title="simple tile" key="two">
                <H3> Follow us</H3>
                <ul>
                  <li>
                    <a href="" title="Find us on Youtube">Find us on E-mail</a>
                  </li>
                  <li>
                    <a href="" title="Find us on E-mail">Find us on E-mail</a>
                  </li>
                  <li>
                    <a href="" title="Find us on E-mail">Find us on E-mail</a>
                  </li>
                </ul>

              </Panel>
            </Collapse>
          </Box>
        </Box>
        <Box>
      </Box>
      <p className={styles.copyright}>{copyright}</p>
    </Box >
  );
}

export default Footer;
