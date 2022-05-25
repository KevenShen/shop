import React, { useEffect } from 'react';
import store from './store';

function Default() {
  const [demoState, demoDispatchers] = store.useModel('demo');
  useEffect(() => {
    effect
    return () => {
      cleanup
    };
  }, [input]);
  return (
    <div>
      {demoState.title}
      Default
    </div>
  );
}

export default Default;
