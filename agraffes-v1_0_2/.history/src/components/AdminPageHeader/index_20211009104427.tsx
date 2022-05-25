import React from 'react';
import { Typography } from '@alifd/next';
import styles from './index.module.scss';

const { H1 } = Typography;

export interface PageHeaderProps {
  breadcrumbs?: Array<{ name: string; path?: string }>;
  title?: string;
}

const AdminPageHeader = (props) => {
  // const { breadcrumbs, title, ...others } = props;
  // return (
  //   <Box spacing={8} className={styles.PageHeader} {...others}>
  //     {
  //       breadcrumbs && breadcrumbs.length > 0 ? (
  //         <Breadcrumb className={styles.Breadcrumbs} separator=" > ">
  //           {
  //             breadcrumbs.map((item, idx) => (
  //               <Breadcrumb.Item key={idx} link={item.path}>{item.name}</Breadcrumb.Item>
  //             ))
  //           }
  //         </Breadcrumb>
  //       ) : null
  //     }

  //     {
  //       title && (
  //         <Typography.Text className={styles.Title}>{title}</Typography.Text>
  //       )
  //     }
  //   </Box>
  // );
  const { title, menuArr, ...others } = props
  return (
    <Box direction="row" justify="space-between">
      <Box>
        { }
      </Box>
      <Box></Box>
    </Box>
  )
};

export default AdminPageHeader;
