import React from 'react';
import AdminPageHeader from '@/components/AdminPageHeader';
import { Box, ResponsiveGrid } from '@alifd/next';
const { Cell } = ResponsiveGrid

function Admin() {
  return (
    <ResponsiveGrid gap={20}>
      <Cell colSpan={12}>
        <PageHeader
          title="官方推荐方案"
          description="包括状态管理方案、多语言切换的示例"
          breadcrumbs={[]}
        />
      </Cell>

      <Cell colSpan={12}>
        <Tasks />
      </Cell>

      <Cell colSpan={12}>
        <UserInfo />
      </Cell>

      <Cell colSpan={12}>
        <SelectLang />
      </Cell>
    </ResponsiveGrid>
  );
}

export default Admin;
