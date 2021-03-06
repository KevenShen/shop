import React from 'react';
import { Link } from 'ice';
import styles from './index.module.scss';

export interface ILogoProps {
  image?: string;
  url?: string;
}

const Logo = ({ image, url }: ILogoProps) => {

  return (<div className="logo">
    <Link to={url || '/'} className={styles.logo}>
      {image && <img src={image} alt="logo" />}
    </Link>
  </div>)
}



export default Logo
