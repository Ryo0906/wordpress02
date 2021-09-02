<?php
get_header();
?>
<?php if ( shortcode_exists( 'wp-structuring-markup-breadcrumb' ) ) : ?>
	<nav class="breadcrumb">
    <?php echo do_shortcode( '[wp-structuring-markup-breadcrumb]' ); ?>
	</nav>
<?php endif; ?>
	<main>
		<?php
		if( have_posts() ) :
			while( have_posts() ) :
				the_post();
				the_title( '<h1 class="heading-title">', '</h1>' );
				the_content();
			endwhile;
		endif;
		?>
	</main>
<?php
get_footer();