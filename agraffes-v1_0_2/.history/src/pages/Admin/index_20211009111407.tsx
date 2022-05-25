import React from 'react';
import AdminPageHeader from '@/components/AdminPageHeader';
import { Box, ResponsiveGrid } from '@alifd/next';
const { Cell } = ResponsiveGrid

function Admin() {
  return (
    <ResponsiveGrid gap={20}>
      <Cell colSpan={12}>
        <AdminPageHeader
          title="产品"
          menuArr={[{ iscurrent: true, name: "导入" }, { iscurrent: true, name: "导出" }]}
        />
      </Cell>
    </ResponsiveGrid>
  );
}

export default Admin;
