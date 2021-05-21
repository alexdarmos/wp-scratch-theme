<?php get_header('splash'); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

                <!-- Retrieves the content.php file from template-parts folder -->
                <?php get_template_part( 'template-parts/content' )?>


            <?php endwhile; else : ?>

                <!-- Retrieves the content-none.php file from template-parts folder. Note that the file is split because of its name content-none.php -->
                <?php get_template_part( 'template-parts/content', 'none'); ?>
            <?php endif; ?>

                <p>Template: index.php</p>

        </main>

    </div>

    <?php get_sidebar(); ?>

    <?php get_footer(); ?>