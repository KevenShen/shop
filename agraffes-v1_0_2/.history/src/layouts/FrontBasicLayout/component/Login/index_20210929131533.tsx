import React from 'react';
import { Link } from 'ice';


function Login() {
  return (
    <Link to='/courses?sort=name'>
      <div>
        Login
      </div>
    </Link>
  );
}

export default Login;
