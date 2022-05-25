import React from 'react';
// import PageHeader from '@/components/PageHeader';
import AllCategory from './component/AllCategory';
import pageStore from './store';

function Collections() {
  const [collectionsState, collectionsDispatchers] = pageStore.useModel('collections');
  return (
    <div>
      <AllCategory></AllCategory>
    </div>
  );
}

export default Collections;
