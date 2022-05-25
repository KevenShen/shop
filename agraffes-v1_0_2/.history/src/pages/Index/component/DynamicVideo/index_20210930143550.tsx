import React from 'react';
import { Box, Typography } from '@alifd/next';
import styles from './index.module.scss';
const { H2 } = Typography

function DynamicVideo() {
  return (
    <Box>
      <H2>2021 PPAI Virtual Trade Show</H2>
      <Box>
        <Box>
          <iframe className={styles.dynamicVideo} allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" width="1400" height="850" src="https://www.youtube.com/embed/aZoQVV2nR7g?modestbranding=true&amp;showinfo=false&amp;controls=false&amp;loop=0&amp;rel=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fwww.agraffes.com&amp;widgetid=1" id="widget2"></iframe>
        </Box>
      </Box>
    </Box>
  );
}

export default DynamicVideo;
