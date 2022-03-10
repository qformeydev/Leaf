<?php
/**
 * The default template for displaying content
 *
 * Used for single posts.
 *
 * @package Hestia
 * @since Hestia 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" class="section section-text single-post">
	<div class="post-inner">
		<div class="img_cover-single-post">
											 <?php
													 if ( has_post_thumbnail() ) {
															 the_post_thumbnail('full', array( 'class' => 'custom_img' ));
													 }
													 else {
															 echo '<img src="../wp-content/uploads/2022/content/placeholder-news.jpg">';
													 }
											 ?>
		</div>
		<div class="all-content-news-single-post">
			<div class="para-news-single-post">
				<h3 class="news_title-single-post"><?php echo the_title(); ?></h3>
				<?php
				echo '<div class="entry-content-single-post">';
				echo the_content();
				echo '</div>';
				?>
				<div class="tag_date_single">
					<p class="news_tag-single-post"><?php $post_tag = get_the_category();
						if ( ! empty($post_tag)){
							echo esc_html($post_tag[0]->name);
						}
					?></p>
					<p class="news_date-single-post"><?php $post_date = get_the_date( 'j/m/Y' ); echo $post_date; ?></p>
			</div>
			</div>
		</div>
	</div>
</article>
