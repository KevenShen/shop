import React from 'react';
import { Box, Collapse, Typography, ResponsiveGrid } from '@alifd/next';
import styles from './index.module.scss';
import classnames from 'classnames'
const { Panel } = Collapse
const { H3 } = Typography
const { Cell } = ResponsiveGrid;


const CateGoryFooter = props => {
  const { dataSource, ...others } = props;
  return (
    <div className="my-custom-content3" {...others}>
      <ul>
        {dataSource.map((item) => {
          return (
            <li><a href={item.link}>{item.title}</a></li>
          )
        })}
      </ul>
    </div>
  );
};

function Footer(props) {
  const { dataSource, copyright } = props
  return (
    // <Box>
    //   <Box >
    //     <Box className={styles.site_footer_item} direction="row" wrap>
    //       <Box className={classnames(styles.site_footer_blocks, styles.site_footer_block_menu)}>
    //         <Collapse defaultExpandedKeys={["one"]} >
    //           <Panel title="Main-menu" key="one" className={styles.site_footer_block_title}>
    //             <CateGoryFooter dataSource={dataSource} />
    //           </Panel>
    //         </Collapse>
    //       </Box>
    //       <Box className={classnames(styles.site_footer_blocks, styles.site_footer_block_social_accounts)}>
    //         <Collapse defaultExpandedKeys={["two"]} >
    //           <Panel title="simple tile" key="two">
    //             <H3> Follow us</H3>
    //             <ul>
    //               <li>
    //                 <a href="" title="Find us on Youtube">Find us on E-mail</a>
    //               </li>
    //               <li>
    //                 <a href="" title="Find us on E-mail">Find us on E-mail</a>
    //               </li>
    //               <li>
    //                 <a href="" title="Find us on E-mail">Find us on E-mail</a>
    //               </li>
    //             </ul>

    //           </Panel>
    //         </Collapse>
    //       </Box>
    //     </Box>
    //     <Box>
    //     </Box>
    //   </Box>
    //   <p className={styles.copyright}>{copyright}</p>
    // </Box >
    <Box aria-label="footer" role="contentinfo">

      <footer role="contentinfo" aria-label="Footer">
        <section class="site-footer-wrapper">

          <div class="site-footer-item">
            <div class="site-footer-blocks column-count-2">
              <div class="site-footer-block-item  site-footer-block-menu  has-accordion" >


                <h2 class="site-footer-block-title" data-accordion-trigger>
                  Main-menu

                  <span class="site-footer-block-icon accordion--icon">
                    <svg
                      aria-hidden="true"
                      focusable="false"
                      role="presentation"
                      width="14"
                      height="8"
                      viewBox="0 0 14 8"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path class="icon-chevron-down-left" d="M7 6.75L12.5 1.25" stroke="currentColor" stroke-width="1.75" stroke-linecap="square" />
                      <path class="icon-chevron-down-right" d="M7 6.75L1.5 1.25" stroke="currentColor" stroke-width="1.75" stroke-linecap="square" />
                    </svg>

                  </span>
                </h2>

                <div class="site-footer-block-content">












                  <ul
                    class="navmenu navmenu-depth-1 "
                    data-navmenu
                    data-accordion-content


                  >










                    <li
                      class="navmenu-item navmenu-id-new-arrivals"
                    >
                      <a
                        class="navmenu-link "
                        href="/collections/new-arrivals"
                      >
                        New Arrivals
                      </a>
                    </li>











                    <li
                      class="navmenu-item navmenu-id-backpack-bag"
                    >
                      <a
                        class="navmenu-link "
                        href="/collections/pouch-bag"
                      >
                        Backpack & Bag
                      </a>
                    </li>











                    <li
                      class="navmenu-item navmenu-id-beauty-accessories"
                    >
                      <a
                        class="navmenu-link "
                        href="/collections/beauty-accessories"
                      >
                        Beauty Accessories
                      </a>
                    </li>











                    <li
                      class="navmenu-item navmenu-id-drinkware"
                    >
                      <a
                        class="navmenu-link "
                        href="/collections/drinkware"
                      >
                        Drinkware
                      </a>
                    </li>











                    <li
                      class="navmenu-item navmenu-id-fun-promotion"
                    >
                      <a
                        class="navmenu-link "
                        href="/collections/fun-promotion"
                      >
                        Fun Promotion
                      </a>
                    </li>











                    <li
                      class="navmenu-item navmenu-id-home-pets-accessories"
                    >
                      <a
                        class="navmenu-link "
                        href="/collections/home-pets-accessories"
                      >
                        Home & Pets Accessories
                      </a>
                    </li>











                    <li
                      class="navmenu-item navmenu-id-office-supplies"
                    >
                      <a
                        class="navmenu-link "
                        href="/collections/office-supply"
                      >
                        Office Supplies
                      </a>
                    </li>











                    <li
                      class="navmenu-item navmenu-id-personal-protective-equipment"
                    >
                      <a
                        class="navmenu-link "
                        href="/collections/personal-protection-equipment"
                      >
                        Personal Protective Equipment
                      </a>
                    </li>











                    <li
                      class="navmenu-item navmenu-id-phone-accessories"
                    >
                      <a
                        class="navmenu-link "
                        href="/collections/phone-accessoeries"
                      >
                        Phone Accessories
                      </a>
                    </li>











                    <li
                      class="navmenu-item navmenu-id-sports-outdoors"
                    >
                      <a
                        class="navmenu-link "
                        href="/collections/outdoors"
                      >
                        Sports & Outdoors
                      </a>
                    </li>











                    <li
                      class="navmenu-item navmenu-id-technology"
                    >
                      <a
                        class="navmenu-link "
                        href="/collections/electronic-product"
                      >
                        Technology
                      </a>
                    </li>











                    <li
                      class="navmenu-item navmenu-id-all-collections"
                    >
                      <a
                        class="navmenu-link "
                        href="/collections"
                      >
                        All Collections
                      </a>
                    </li>


                  </ul>

                </div>


              </div>
              <div class="site-footer-block-item  site-footer-block-social-accounts  " >


                <h2 class="site-footer-block-title">
                  Follow us
                </h2>

                <div class="site-footer-block-content">












                  <div class="social-icons">


                    <a
                      class="social-link"
                      title="Facebook"
                      href="https://www.facebook.com/Agraffes"
                      target="_blank">
                      <svg aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"    >      <path fill="currentColor" fill-rule="evenodd" d="M16.913 13.919h-2.17v7.907h-3.215V13.92H10v-2.794h1.528V9.316c0-1.294.601-3.316 3.245-3.316l2.38.01V8.72h-1.728c-.282 0-.68.145-.68.762v1.642h2.449l-.281 2.794z" />    </svg>
                      <span class="visually-hidden">Find us on Facebook</span>
                    </a>




                    <a
                      class="social-link"
                      title="Youtube"
                      href="https://www.youtube.com/channel/UCRC4TR8aswMir_6drGpK_WA"
                      target="_blank">
                      <svg aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"    >      <path fill="currentColor" fill-rule="evenodd" d="M11.958 16.23v-4.22l4.058 2.117-4.058 2.102zm8.91-4.951s-.147-1.035-.597-1.491c-.571-.598-1.211-.601-1.505-.636C16.664 9 13.512 9 13.512 9h-.006s-3.153 0-5.254.152c-.294.035-.934.038-1.505.636-.45.456-.597 1.49-.597 1.49S6 12.495 6 13.71v1.14c0 1.215.15 2.43.15 2.43s.147 1.035.597 1.49c.571.599 1.322.58 1.656.643 1.201.115 5.106.15 5.106.15s3.155-.004 5.257-.156c.294-.035.934-.038 1.505-.636.45-.456.597-1.49.597-1.49s.15-1.216.15-2.431v-1.14c0-1.215-.15-2.43-.15-2.43z" />    </svg>
                      <span class="visually-hidden">Find us on Youtube</span>
                    </a>






                    <a
                      class="social-link"
                      title="E-mail"
                      href="mailto:sales@agraffes.com"
                      target="_blank">
                      <svg aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"    >      <path fill="currentColor" fill-rule="evenodd" d="M21.924 9H7.076l7.424 5.372L21.924 9zM14.5 15.891L7 10.449v8.347h15v-8.347l-7.5 5.442z" />    </svg>
                      <span class="visually-hidden">Find us on E-mail</span>
                    </a>

                  </div>


                </div>


              </div>

            </div>
          </div>


          <div class="site-footer-item">
            <div class="site-footer-information">
              <div class="site-footer-left">



                <p class="site-footer-credits">

                  Copyright &copy; 2021 Agraffes Innovation.
                </p>

                <p class="site-footer-credits">
                  <a target="_blank" rel="nofollow" href="https://www.shopify.com?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore"> </a>
                </p>
              </div><div class="site-footer-right">

                <form method="post" action="/localization" id="localization_form" accept-charset="UTF-8" class="shopify-localization-form" enctype="multipart/form-data"><input type="hidden" name="form_type" value="localization" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="_method" value="put" /><input type="hidden" name="return_to" value="/" />



                </form>



              </div></div>
          </div>
        </section>
      </footer>
    </Box>
  );
}

export default Footer;
