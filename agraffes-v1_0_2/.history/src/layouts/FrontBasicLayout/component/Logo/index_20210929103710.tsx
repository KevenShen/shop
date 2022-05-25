import React from 'react';
import { Link } from 'ice';
import styles from './index.module.scss';

export interface ILogoProps {
  image?: string;
  url?: string;
}

const Logo = ({ image, url }: ILogoProps) => {
  return (<div className="logo">
    <Link to={url || '/index'} className={styles.logo}>
      {image && <img src={image} alt="logo" />}
    </Link>
  </div>)
}

Logo.defaultProps = {
  image: "https://cdn.shopify.com/s/files/1/0528/5888/0181/files/ag_square_logo_-_Copy_abe0626a-18fe-4271-8632-cd27b1f3d6ea_195x195.jpg?v=1611211847",
  url: "/"
}

export default Logo
