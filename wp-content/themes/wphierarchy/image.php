<!-- image.php is used for image attachment page, attachment.php is the fallback -->

<?php get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                
                <header class="entry-header">
                
                    <?php the_title( '<h1>', '</h1>' );?>
            
                </header>

                <div class="entry-content">
                    <p><img src="<?php echo esc_url( $post->guid ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>"/></p>

                    <?php the_content( '<h1>', '</h1>' );?>
                </div>

                <?php if ( comments_open() ) : ?>

                    <?php comments_template(); ?>

                <?php endif; ?>

            </article>


            <?php endwhile; else : ?>

                <!-- Retrieves the content-none.php file from template-parts folder. Note that the file is split because of its name content-none.php -->
                <?php get_template_part( 'template-parts/content', 'none'); ?>
            <?php endif; ?>

                <p>Template: image.php</p>

        </main>

    </div>

    <?php get_sidebar( ); ?>

    <?php get_footer(); ?>