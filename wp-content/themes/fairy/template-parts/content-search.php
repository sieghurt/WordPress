<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fairy
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="card card-blog-post card-full-width">
		<figure class="card_media">
			<?php fairy_post_thumbnail(); ?>
		</figure>

		<div class="card_body">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php
				fairy_posted_on();
				fairy_posted_by();
				?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
			
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
            <?php
            global $fairy_theme_options;
            if(($fairy_theme_options['fairy-content-show-from'] == 'excerpt') && (!is_singular())){
                $read_more_text = esc_html($fairy_theme_options['fairy-read-more-text']);

                if(!empty($read_more_text)){
                    ?>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">
                        <?php
                        echo esc_html($read_more_text);
                        ?>
                    </a>
                    <?php

                }
            }
            ?>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
