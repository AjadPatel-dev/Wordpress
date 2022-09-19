<?php 
/* Template Name: My Custom Template  */
get_header();

// get_sidebar();

$params = array('posts_per_page' => 10, 'post_type' => 'product');
$wc_query = new WP_Query($params);
?>

     <?php if ($wc_query->have_posts()) : ?>
     <?php while ($wc_query->have_posts()) :
                $wc_query->the_post(); ?>
 
          <h3>
               <a href="<?php the_permalink(); ?>">
               <?php the_title(); ?>
               </a>
          </h3>
          <?php the_post_thumbnail(); ?>
          <?php the_excerpt(); ?>
   
     <?php endwhile; ?>
     <?php wp_reset_postdata(); ?>
     <?php else:  ?>

          <?php _e( 'No Products' ); ?>

     <?php endif; ?>





<?php




get_footer(); 
 ?>