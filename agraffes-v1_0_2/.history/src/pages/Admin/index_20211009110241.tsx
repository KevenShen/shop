import React from 'react';
import AdminPageHeader from '@/components/AdminPageHeader';
import { Box, ResponsiveGrid } from '@alifd/next';
const { Cell } = ResponsiveGrid

function Admin() {
  return (
    <ResponsiveGrid gap={20}>
      <Cell colSpan={12}>
        <AdminPageHeader
          title="官方推荐方案"
        />
      </Cell>
    </ResponsiveGrid>
  );
}

export default Admin;
