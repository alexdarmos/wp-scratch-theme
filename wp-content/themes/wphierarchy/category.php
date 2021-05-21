<!-- Category.php is for your category pages- -->

<?php get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <h1><?php the_archive_title('');?></h1>

            <p> <?php echo category_description(); ?> </p>

            <hr>
            
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

                <!-- Retrieves the content.php file from template-parts folder -->
                <?php get_template_part( 'template-parts/content-posts', get_post_format() );?>


            <?php endwhile; else : ?>

                <!-- Retrieves the content-none.php file from template-parts folder. Note that the file is split because of its name content-none.php -->
                <?php get_template_part( 'template-parts/content', 'none'); ?>
            
            <?php endif; ?>

            <?php echo paginate_links(); ?>

                <p>Template: category.php</p>

        </main>

    </div>

    <?php get_sidebar(); ?>

    <?php get_footer(); ?>