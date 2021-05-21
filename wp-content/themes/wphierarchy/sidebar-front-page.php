<?php
//common practice for sidebars- if sidebar is not present, do not run the rest of this page's code
if( !is_active_sidebar( 'front-page-sidebar' ) ) {
    return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
    <?php dynamic_sidebar( 'front-page-sidebar' ); ?>
</aside>