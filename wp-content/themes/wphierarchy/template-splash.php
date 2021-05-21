<!-- Custom template used for pages, fallback is page.php
Note: The comment below in the php tags allows for this template to be identified by wordpress.
We need to do it this way because the naming convention is different from what wordpress expects
-->
<?php 
// Template Name: Splash Page
// Template Post Type: post, page, 
?>

<?php get_header( 'splash' ); ?>

    <div id="primary" class="content-area extended">
        <main id="main" class="site-main" role="main">
            
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

                <!-- Retrieves the content.php file from template-parts folder -->
                <?php get_template_part( 'template-parts/content', 'page' )?>


            <?php endwhile; else : ?>

                <!-- Retrieves the content-none.php file from template-parts folder. Note that the file is split because of its name content-none.php -->
                <?php get_template_part( 'template-parts/content', 'none'); ?>
            <?php endif; ?>

                <p>Template: template-splash.php</p>

        </main>

    </div>

    <?php get_footer( 'splash' ); ?>