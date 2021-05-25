<!-- Custom taxonomy page for specific taxonomy skill PHP, fallback taxonomy.php then archive.php -->

<?php get_header( 'splash' ); ?>

    <div id="primary" class="content-area extended">

        <main id="main" class="site-main" role="main">

            <h1><?php the_archive_title();?></h1>
            
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

                <!-- Retrieves the content.php file from template-parts folder -->
                <?php get_template_part( 'template-parts/content', 'portfolio' );?>


            <?php endwhile; else : ?>

                <!-- Retrieves the content-none.php file from template-parts folder. Note that the file is split because of its name content-none.php -->
                <?php get_template_part( 'template-parts/content', 'none'); ?>
            
            <?php endif; ?>

            <?php echo paginate_links(); ?>
            <div style="clear:both;">
            <p>Template: taxonomy-skills-php.php</p>
            </div>
        </main>
        
    </div>
    
    <?php get_footer(); ?>
    