import React from 'react';
import styles from './index.module.scss';

function DynamicVideo() {
  return (
    // <div>
    //   <video width="1450" height="800" controls className={styles.dynamicVideo} src="https://www.youtube.com/embed/aZoQVV2nR7g?modestbranding=true&showinfo=false&controls=false&loop=0&rel=0&enablejsapi=1&origin=https%3A%2F%2Fwww.agraffes.com&widgetid=1" autoPlay>
    //   </video>
    // </div>
    <iframe className={styles.dynamicVideo} allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" width="1400" height="850" src="https://www.youtube.com/embed/aZoQVV2nR7g?modestbranding=true&amp;showinfo=false&amp;controls=false&amp;loop=0&amp;rel=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fwww.agraffes.com&amp;widgetid=1" id="widget2"></iframe>
  );
}

export default DynamicVideo;
