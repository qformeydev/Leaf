<?php
/**
 * The template for displaying all single posts and attachments.
 *
 * @package Hestia
 * @since Hestia 1.0
 */

get_header(); ?>

<?php do_action( 'hestia_page_builder_blank_before_content' ); ?>


<?php /** SECTION ABOUT HEADER **/ ?>
<div class="div_hd_generic">
  <img class="img_hd_generic" src="../wp-content/uploads/2022/content/night-neon-road-less.jpg">
  <!--<div class="make-image-live"></div>-->
  <div class="writable-zone">
    <div class="generic-title">
      <h1>Actualités</h1>
      <p class="generic-under">Retrouvez ici toutes nos actualités !</p>
    </div>
  </div>
</div>


<?php /** SECTION ABOUT SINGLE NEWS **/ ?>

<div class="single-news-bg">
  <div class="single-news-block">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'single' );
				endwhile;
				else :
					get_template_part( 'template-parts/content', 'none' );
			endif;
				?>
				<div class="btn-return_all_news">
					<a href="https://leaftoeveryone.fr/actualites/" class="">Retour aux Actus</a>
				</div>
		</div>
	</div>


	<div class="newsletter_shortcode">
	  <?php echo do_shortcode("[mc4wp_form id=1194]"); ?>
	</div>


<?php get_footer(); ?>
