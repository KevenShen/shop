import React from 'react';
// import PageHeader from '@/components/PageHeader';
import AllCategory from './component/AllCategory';
import pageStore from './store';

function Collections() {
  const [userState, userDispatchers] = pageStore.useModel('user');
  return (
    <div>
      <AllCategory></AllCategory>
    </div>
  );
}

export default Collections;
