<?php
/**
 * Template Name: Download
 *
 * The template for the page builder full-width.
 *
 * It contains header, footer and 100% content width.
 *
 * @package Hestia
 * @since Hestia 1.1.24
 * @author Themeisle
 */

get_header(); ?>

<?php do_action( 'hestia_page_builder_blank_before_content' ); ?>


<?php /** SECTION ABOUT HEADER **/ ?>
<div class="div_hd_generic">
  <img class="img_hd_generic" src="../wp-content/uploads/2022/content/smartphone-road-less.jpg">
  <!--<div class="make-image-live"></div>-->
  <div class="writable-zone">
    <div class="generic-title">
      <h1>Application</h1>
      <p class="generic-under">Vous voulez nous essayer ?</p>
    </div>
  </div>
</div>



<?php /** SECTION ABOUT THE CONTENT OF THE PAGE **/ ?>


  <div class="background-app">
    <div class="writable-zone">
      	<?php
      	if ( have_posts() ) :
      		while ( have_posts() ) :
      			the_post();
      			get_template_part( 'template-parts/content', 'pagebuilder' );
      		endwhile;
      	endif;
      	?>
    </div>
  </div>

<?php do_action( 'hestia_page_builder_blank_after_content' ); ?>

<div class="newsletter_shortcode">
  <?php echo do_shortcode("[mc4wp_form id=1194]"); ?>
</div>

<?php get_footer(); ?>
