<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <header class="entry-header">

    <!-- Use the post ID to dynamically generate the corresponding icon for the post-->
    <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID ); ?>"></span>
    

        <?php the_title( '<h1>', '</h1>' );?>
        <div class="byline">
            <?php esc_html_e( 'Author:' );?> <?php the_author(); ?>
        </div>
    </header>

    <div class="entry-content">
        <?php the_content( '<h1>', '</h1>' );?>
    </div>

    <?php if ( comments_open() ) : ?>

        <?php comments_template(); ?>

    <?php endif; ?>

</article>