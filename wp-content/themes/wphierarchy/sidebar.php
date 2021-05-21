<?php
//common practice for sidebars- if sidebar is not present, do not run the rest of this page's code
if( !is_active_sidebar( 'main-sidebar' ) ) {
    return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
    <?php dynamic_sidebar( 'main-sidebar' ); ?>
</aside>