import React from 'react';
import store from './store';

function Default() {
  const [demoState, demoDispatchers] = store.useModel('demo');
  return (
    <div>
      Default
    </div>
  );
}

export default Default;
