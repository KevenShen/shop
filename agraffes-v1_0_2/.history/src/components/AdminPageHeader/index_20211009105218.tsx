import React from 'react';
import { Box, Typography } from '@alifd/next';
import styles from './index.module.scss';

const { H1 } = Typography;

export interface AdminPageHeader {
  title?: string;
  menuArr?: Array<{ name: string; path?: string, iscurrent?: boolean }>;
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
        {
          title && title != undefined ? (
            <H1>{title}</H1>
          ) : null
        }
      </Box>
      <Box>
        {
          menuArr && menuArr.length > 0 ? (

          ): null
        }
      </Box>
    </Box>
  )
};

export default AdminPageHeader;
