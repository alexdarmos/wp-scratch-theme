<article id="post-<?php the_ID(); ?>" class="post" >
    <header class="entry-header">

    <!-- Use the post ID to dynamically generate the corresponding icon for the post-->
    <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID ); ?>"></span>
    

        <h2 class="search-title">
            <a href="<?php the_permalink(); ?>">
                <?php echo get_post_type( $post ) ?>:
                <?php the_title(); ?>
            </a>
        </h2>

        <div class="byline">
        <!-- returns the author name linked -->
            <?php esc_html_e( 'Author:' );?> <?php the_author_posts_link(); ?>
        </div>
    </header>

    <div class="entry-content">
        <?php the_excerpt( '<h1>', '</h1>' );?>
    </div>


</article>