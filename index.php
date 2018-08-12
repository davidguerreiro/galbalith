<?php
/**
 * Main theme file
 * 
 * @package galbalith
 */


 $cover_image = get_template_directory_uri() . '/assets/img/web_cover.png';

 
 get_header();

 ?>

    <img src="<?php echo esc_url( $cover_image ); ?>" alt="cover" class="main__cover-image">
    <h2 class="main__notification"> - Ahora en desarrollo - </h2>


 <?php get_footer();