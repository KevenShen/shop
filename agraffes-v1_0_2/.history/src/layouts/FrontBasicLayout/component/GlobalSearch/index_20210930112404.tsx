import React from 'react';
import { Select, Search, Box } from '@alifd/next';
import styles from './index.module.scss';

export interface IData {
  label: string;
  value: string;
}

const dataSource = [
  "Lucy King",
  "Lily King",
  "Jim Green",
];

const onChange = v => {
  console.log(v);
};

function GlobalSearch() {
  return (
    <Box className={styles.globalSearchContainer} direction="row">
      <Select.AutoComplete
        autoHighlightFirstItem={false}
        onChange={onChange}
        dataSource={dataSource}
        className={styles.select}
      />
      <Search type="primary" placeholder="primary" className={styles.search} />
    </Box>
  );
}

export default GlobalSearch;
