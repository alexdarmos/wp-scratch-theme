
    
    </div> <!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
        
        <?php get_sidebar( 'footer' ); ?>

        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wphierarchy' ) ); ?>">
            <?php printf( esc_hutml__( 'Proudly powered by %s', 'wphierarchy' ), 'Wordpress' ); ?>
        </a>

    </footer>
    
    </div> <!-- #page -->

<?php wp_footer(); ?>

</body>
</html>