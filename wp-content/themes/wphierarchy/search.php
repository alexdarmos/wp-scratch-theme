<!-- Search page template defaults to index.php - Should only need this if you have way to much content for a nav to cover -->
<?php get_header('splash'); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            
            <!-- Shows the search query -->
            <h1>
                <?php esc_html_e( 'Searching For:', 'wphierarchy'); ?>
                "<?php echo get_search_query(); ?>"
            </h1>

            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

                <!-- Retrieves the content.php file from template-parts folder -->
                <?php get_template_part( 'template-parts/content', 'search' )?>


            <?php endwhile; else : ?>

                <!-- Retrieves the content-none.php file from template-parts folder. Note that the file is split because of its name content-none.php -->
                <?php get_template_part( 'template-parts/content', 'none'); ?>
            <?php endif; ?>

                <p>Template: search.php</p>

        </main>

    </div>

    <?php get_sidebar(); ?>

    <?php get_footer(); ?>