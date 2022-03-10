<?php
/**
 * Template Name: Homepage Only
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
<div class="div_hd_home">
  <img class="img_hd_home" src="wp-content/uploads/2022/content/car-backseat2-less.jpg">
  <!--<div class="make-image-live"></div>-->
  <div class="writable-zone">
    <div class="header-banner-block">
      <h1>En route vers la confiance et l'écologie</h1>
      <p class="under-the-title">Récupérez dès à présent votre QR Code à scanner pour télécharger l'application
        en fonction du système d'exploitation de votre téléphone</p>
      <p class="banner-links">
        <a class="download-banner" href="https://leaftoeveryone.fr/download/">Téléchargez l'application maintenant</a><br>
        <a class="discover-banner" href="https://leaftoeveryone.fr/a-propos/#link-for-cars">Découvrez les véhicules disponibleS</a>
      </p>
    </div>
  </div>
</div>




<?php /** SECTION ABOUT THREE LAST NEWS **/ ?>

<div class="recent-news-bg">
  <div class="recent-news-block">
    <div class="title-recent">
      <h2>Dernières actualités</h2>
      <p>Besoin d'un petit brin de nouveautés</p>
    </div>
      <div class="recents_are_here">
        <?php
        $recentPosts = new WP_Query();
        $recentPosts->query('showposts=3');
        ?>
        <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
          <article class="news-here">
            <div class="post-inner">
              <div class="img_cover">
                                 <?php
                                     if ( has_post_thumbnail() ) {
                                         the_post_thumbnail('full', array( 'class' => 'custom_img' ));
                                     }
                                     else {
                                         echo '<img src="wp-content/uploads/2022/content/placeholder-news.jpg">';
                                     }
                                 ?>
              </div>
              <div class="all-content-news">
                <div class="header_post">
                  <p class="news_tag"><?php $post_tag = get_the_category();
                    if ( ! empty($post_tag)){
                      echo esc_html($post_tag[0]->name);
                    }
                  ?></p>
                	<p class="news_date"><?php $post_date = get_the_date( 'j/m/Y' ); echo $post_date; ?></p>
                </div>
                <div class="para-news">
                  <h3 class="news_title"><?php echo wp_trim_words( get_the_title() , 6, ' [...]' ); ?></h3>
                  <?php
                  echo '<div class="entry-content">';
                  echo wp_trim_words( get_the_content() , 22, ' [...]' );
                  echo '</div>';
                  ?>
                  <a class="link-go-article" href="<?php the_permalink() ?>" rel="bookmark">Lire la suite</a>
                </div>
              </div>
            </div>
          </article>
        <?php endwhile; ?>
				<div class="btn-go_all_news">
					<a href="https://leaftoeveryone.fr/actualites/" class="">Voir toutes les actus</a>
				</div>
    </div>
  </div>
</div>


<?php /** SECTION ABOUT THE CONTENT OF THE PAGE **/ ?>
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'pagebuilder' );
		endwhile;
	endif;
	?>


<?php do_action( 'hestia_page_builder_blank_after_content' ); ?>

<div class="newsletter_shortcode">
  <?php echo do_shortcode("[mc4wp_form id=1194]"); ?>
</div>

<?php get_footer(); ?>
