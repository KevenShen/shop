import React from 'react';
import store from '@/store';

function Default() {
  const [userState, userDispatchers] = store.useModel('user');
  return (
    <div>
      Default
    </div>
  );
}

export default Default;
