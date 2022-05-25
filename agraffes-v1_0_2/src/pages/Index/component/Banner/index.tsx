import React from 'react';
import { Slider, ResponsiveGrid } from '@alifd/next';
import { Link } from 'ice';
import styles from './index.module.scss';

const { Cell } = ResponsiveGrid;




const Banner = (props) => {
  const { slides } = props

  const itemNodes = slides.map((item) => (
    <div key={item.id} className={styles.slider_img_wrapper}>
      <Link to={item.URL} >
        <img draggable={false} src={item.imgUrl} alt={item.text} />
      </Link>
    </div >
  ));
  return (
    <ResponsiveGrid>
      <Cell colSpan={12}>
        <Slider>{itemNodes}</Slider>
      </Cell>
    </ResponsiveGrid>

  )
}


export default Banner;
