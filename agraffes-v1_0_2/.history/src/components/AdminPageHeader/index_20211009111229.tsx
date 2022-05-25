import React from 'react';
import { Box, Typography } from '@alifd/next';
import { Link } from 'ice';
import styles from './index.module.scss';

const { H1 } = Typography;

export interface AdminPageHeader {
  title?: string;
  menuArr?: Array<{ iscurrent?: boolean, name: string; path?: string }>;
}

const AdminPageHeader = (props) => {
  const { title, menuArr, ...others } = props
  return (
    <Box spacing={8} direction="row" justify="space-between" className={styles.PageHeader}>
      <Box>
        {
          title && title != undefined ? (
            <H1>{title}</H1>
          ) : null
        }
      </Box>
      <Box>
        {
          menuArr && menuArr.length > 0 ? (
            <Box direction="row">
              {menuArr.map((item, idx) => {
                item.iscurrent ? (
                  <Box><span>{item.name}</span></Box>
                ) : (
                  <Box><Link to={item.path}><span>{item.name}</span></Link></Box>
                )
              })}
            </Box>
          ) : null
        }
      </Box>
    </Box>
  )
};

export default AdminPageHeader;
