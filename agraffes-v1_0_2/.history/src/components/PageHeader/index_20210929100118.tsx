import React from 'react';
import { Breadcrumb, Box, Typography } from '@alifd/next';
import styles from './index.module.scss';

export interface PageHeaderProps {
  breadcrumbs?: Array<{ name: string; path?: string }>;
  title?: string;
}

const PageHeader = (props) => {
  const { breadcrumbs, title, ...others } = props;
  return (
    <Box spacing={8} className={styles.PageHeader} {...others}>
      {
        breadcrumbs && breadcrumbs.length > 0 ? (
          <Breadcrumb className={styles.Breadcrumbs} separator=" > ">
            {
              breadcrumbs.map((item, idx) => (
                <Breadcrumb.Item key={idx} link={item.path}>{item.name}</Breadcrumb.Item>
              ))
            }
          </Breadcrumb>
        ) : null
      }

      {
        title && (
          <Typography.Text className={styles.Title}>{title}</Typography.Text>
        )
      }
    </Box>
  );
};

export default PageHeader;
