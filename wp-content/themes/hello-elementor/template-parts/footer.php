<?php
/**
 * The template for displaying footer.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- <footer id="site-footer" class="site-footer" role="contentinfo"> -->
	<?php // footer. ?>
<!-- </footer> -->



<div class="l-container">
    <div class="site-footer">

        <a href="http://berdanrealestate.com/" class="site-footer__logo"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 135.81 40.59"><title>logo</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M.3,31.36H4.21a3.59,3.59,0,0,1,2.59.91,2.51,2.51,0,0,1,.7,1.79v0A2.66,2.66,0,0,1,5,36.74l2.8,3.72H6.56L3.92,36.92H1.32v3.54H.3ZM4.12,36c1.36,0,2.34-.7,2.34-1.87v0c0-1.12-.86-1.79-2.33-1.79H1.32V36Z" style="fill:#231f20"/><path d="M14.39,31.36H21v.94H15.41V35.4h5v.94h-5v3.19H21v.94H14.39Z" style="fill:#231f20"/><path d="M31.16,31.29h1l4.15,9.17H35.16L34.1,38.05h-5l-1.08,2.41H27Zm2.54,5.82-2.07-4.63-2.08,4.63Z" style="fill:#231f20"/><path d="M42.75,31.36h1v8.15H48.9v.95H42.75Z" style="fill:#231f20"/><path d="M64.09,31.36h6.58v.94H65.11V35.4h5v.94h-5v3.19h5.62v.94H64.09Z" style="fill:#231f20"/><path d="M76.89,39.13l.64-.75a4.33,4.33,0,0,0,3.12,1.29c1.22,0,2-.65,2-1.55v0c0-.84-.46-1.33-2.37-1.73-2.09-.45-3.05-1.13-3.05-2.63v0c0-1.43,1.26-2.48,3-2.48a4.74,4.74,0,0,1,3.2,1.12l-.6.79a4,4,0,0,0-2.62-1c-1.18,0-1.94.65-1.94,1.47v0c0,.86.47,1.34,2.47,1.77s3,1.18,3,2.57v0c0,1.56-1.3,2.57-3.11,2.57A5.32,5.32,0,0,1,76.89,39.13Z" style="fill:#231f20"/><path d="M92.71,32.31H89.66v-.95h7.15v.95H93.75v8.15h-1Z" style="fill:#231f20"/><path d="M105.62,31.29h1l4.15,9.17h-1.11l-1.06-2.41h-5l-1.08,2.41h-1.05Zm2.54,5.82-2.07-4.63L104,37.12Z" style="fill:#231f20"/><path d="M118.45,32.31H115.4v-.95h7.15v.95h-3.05v8.15h-1Z" style="fill:#231f20"/><path d="M129.16,31.36h6.58v.94h-5.55V35.4h5v.94h-5v3.19h5.62v.94h-6.64Z" style="fill:#231f20"/><path d="M23.31.16H38.75V1.64H24.92v8.53H37.36v1.49H24.92v8.71h14v1.49H23.31Z" style="fill:#231f20"/><path d="M45,.16h9.12a8.55,8.55,0,0,1,6.11,2.14,5.72,5.72,0,0,1,1.64,4v.06c0,3.63-2.7,5.71-6.36,6.2l7.16,9.27h-2l-6.91-9h-7.1v9H45Zm8.93,11.25c3.63,0,6.33-1.83,6.33-5V6.39C60.27,3.47,58,1.64,54,1.64H46.62v9.77Z" style="fill:#231f20"/><path d="M68.35.16h7.22c6.82,0,11.53,4.68,11.53,10.79V11c0,6.11-4.71,10.85-11.53,10.85H68.35ZM70,1.64V20.37h5.61c6,0,9.86-4.12,9.86-9.3V11c0-5.15-3.81-9.36-9.86-9.36Z" style="fill:#231f20"/><path d="M106.83,14.33,101.12,1.77,95.39,14.33l-.68,1.46-2.76,6.08H90.27L100.38,0h1.55L112,21.86h-1.77l-2.76-6.08Z" style="fill:#231f20"/><path d="M117.55.16h1.52L134,19V.16h1.55v21.7h-1.21L119.1,2.57V21.86h-1.55Z" style="fill:#231f20"/><path d="M12.31,10.7A5.36,5.36,0,0,0,16,5.55V5.49a4.67,4.67,0,0,0-1.4-3.41A7.89,7.89,0,0,0,9,.16H0V8H1.5V1.64H8.93c3.47,0,5.43,1.61,5.43,4v.06c0,2.88-2.33,4.46-5.58,4.46H0v1.49H9c4.28,0,6.6,1.55,6.6,4.22v.06c0,2.73-2.36,4.43-6.08,4.43h-8V13.93H0v6.44H0v1.49H9.43c4.68,0,7.78-2.3,7.78-5.92v-.06C17.21,12.87,14.91,11.38,12.31,10.7Z" style="fill:#231f20"/></g></g></svg>          </a>

        <div class="site-footer__social-and-signup">

            <nav class="site-footer__social">
                <?php if( get_theme_mod( 'instagram_link' ) ){ ?>
                <a href="<?php echo get_theme_mod( 'instagram_link' ); ?>" target="_blank" class="instagram"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.86 20.86"><title>instagram</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M10.43,1.88c2.79,0,3.12,0,4.22.06a5.77,5.77,0,0,1,1.94.36,3.23,3.23,0,0,1,1.2.78,3.23,3.23,0,0,1,.78,1.2,5.77,5.77,0,0,1,.36,1.94c.05,1.1.06,1.43.06,4.22s0,3.12-.06,4.22a5.77,5.77,0,0,1-.36,1.94,3.46,3.46,0,0,1-2,2,5.77,5.77,0,0,1-1.94.36c-1.1.05-1.43.06-4.22.06s-3.12,0-4.22-.06a5.77,5.77,0,0,1-1.94-.36,3.23,3.23,0,0,1-1.2-.78,3.24,3.24,0,0,1-.78-1.2,5.78,5.78,0,0,1-.36-1.94c-.05-1.1-.06-1.43-.06-4.22s0-3.12.06-4.22A5.78,5.78,0,0,1,2.3,4.28a3.23,3.23,0,0,1,.78-1.2,3.23,3.23,0,0,1,1.2-.78,5.77,5.77,0,0,1,1.94-.36c1.1-.05,1.43-.06,4.22-.06m0-1.88C7.6,0,7.24,0,6.13.06A7.66,7.66,0,0,0,3.6.55a5.11,5.11,0,0,0-1.85,1.2A5.12,5.12,0,0,0,.55,3.6,7.66,7.66,0,0,0,.06,6.13C0,7.24,0,7.6,0,10.43s0,3.19.06,4.3a7.66,7.66,0,0,0,.48,2.53,5.11,5.11,0,0,0,1.2,1.85,5.11,5.11,0,0,0,1.85,1.2,7.66,7.66,0,0,0,2.53.48c1.11.05,1.47.06,4.3.06s3.19,0,4.3-.06a7.66,7.66,0,0,0,2.53-.48,5.34,5.34,0,0,0,3.05-3.05,7.66,7.66,0,0,0,.48-2.53c.05-1.11.06-1.47.06-4.3s0-3.19-.06-4.3a7.66,7.66,0,0,0-.48-2.53,5.12,5.12,0,0,0-1.2-1.85A5.11,5.11,0,0,0,17.26.55,7.66,7.66,0,0,0,14.73.06C13.62,0,13.26,0,10.43,0Z" style="fill:#323232"/><path d="M10.43,5.07a5.36,5.36,0,1,0,5.36,5.36A5.36,5.36,0,0,0,10.43,5.07Zm0,8.83a3.48,3.48,0,1,1,3.48-3.48A3.48,3.48,0,0,1,10.43,13.91Z" style="fill:#323232"/><circle cx="16" cy="4.86" r="1.25" style="fill:#323232"/></g></g></svg>              </a>
                <?php } ?>
                <?php if( get_theme_mod( 'facebook_link' ) ){ ?>
                <a href="<?php echo get_theme_mod( 'facebook_link' ); ?>" target="_blank" class="facebook"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.79 22.02"><title>facebook</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M9,11H6.12V22H2.45V11H0V7.34H2.45V4.26A4,4,0,0,1,6.44,0H9.79V3.67H7.16a1,1,0,0,0-1,1V7.34H9.41Z" style="fill:#323232"/></g></g></svg></a>
                <?php } ?>
                <?php if( get_theme_mod( 'linkedin_link' ) ){ ?>
                <a href="<?php echo get_theme_mod( 'linkedin_link' ); ?>" target="_blank" class="linkedin"><svg xmlns="http://www.w3.org/2000/svg" height="22px" width="23px" viewBox="0 0 23 22"><title>linkedin</title><path d="M22,13.3V21H17.5V13.8c0-1.8-.6-3.1-2.3-3.1a2.5,2.5,0,0,0-2.3,1.6,3.1,3.1,0,0,0-.1,1.1V21H8.3s.1-12.2,0-13.5h4.5V9.4h0a4.5,4.5,0,0,1,4-2.2c3,0,5.2,1.9,5.2,6.1ZM3.6,1a2.3,2.3,0,1,0-.1,4.7h0A2.3,2.3,0,1,0,3.6,1ZM1.3,21H5.8V7.5H1.3Zm0,0"/></svg></a>
                <?php } ?>
            </nav>

            <?php if( get_theme_mod( 'footer_contacts_link' ) ){ ?>
            <div href="/" class="site-footer__signup">
                <a class="link t-body" href="<?php echo get_theme_mod( 'footer_contacts_link' ); ?>" target="_blank"><?php echo get_theme_mod( 'footer_contacts_title', 'Contact us' ); ?></a>
            </div>
            <?php } ?>

        </div>

        <div class="site-footer__copyright-etc">
            <div>
                <?php echo get_theme_mod( 'footer_copyright', '©2020 Berdan Real Estate' ); ?>
            </div>
        </div>

    </div>

</div>