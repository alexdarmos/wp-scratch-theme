<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP for WordPress</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>
<body>

  <header id="masthead">
    <h1><a href="#">PHP for WordPress</a></h1>
  </header>

  <div id="content">

  <!-- have_posts is a specific WP function -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  //Start the loop here ?>

      <!-- Display the_title and the_content here -->
      <h1><?php the_title() ?></h1>
      <div><?php the_content() ?></div>

    <?php endwhile; else:  // End while and start else ?>

      <!-- Display a 404 message here -phpforwp is the text domain found in the stylesheet- -->
      <p><?php _e('404 page not found!', 'phpforwp') ?></p>

    <?php endif; // End if ?>

  </div>

</body>
</html>
