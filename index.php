<?php
/**
 * Main theme file
 * 
 * @package galbalith
 */


 $cover_image = get_template_directory() . '/assets/img/cover.png';

 
 get_header();

 ?>

 <div class="main">
    <img src="<?php echo esc_url( $cover_image ); ?>" alt="cover">
    <p>Ahora en desarrollo</p>
 </div>


 <?php get_footer();