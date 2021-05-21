<!-- 404 template is used when page is not found, fallback is page.php-->

<?php get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            
          

                <!-- Retrieves the content-none.php file from template-parts folder. Note that the file is split because of its name content-none.php -->
                <?php get_template_part( 'template-parts/content', 'none'); ?>
            

                <p>Template: 404.php</p>

        </main>

    </div>

    <?php get_sidebar( 'page' ); ?>

    <?php get_footer(); ?>