<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php echo esc_attr( bloginfo( 'charset' ) ); ?>">
  <meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'top' ); ?>>
<header>
  <div class="header-logo">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php
			if ( has_custom_logo() ) {
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$image = wp_get_attachment_image_src( $custom_logo_id, 'full' );
				$html = '<img src="' . $image[0] . '"';
				$html .= ' width="' . $image[1] . '';
				$html .= ' height="' . $image[2] . '"';
				$html .= ' alt="' . esc_attr( get_bloginfo( 'name' ) ) . '">';
				echo $html;
			}
			?>
    </a>
  </div>
	<?php if( has_nav_menu( 'global' ) ) : ?>
      <button id="hamburger" class="header-button">
        <span class="icon"></span>
      </button>
      <nav class="header-gnav">
        <?php
        $args = array(
          // container falseで囲っていたdivタグを消す
          'container'      => false,
          // items_wrap　でulタグ内についていた不要なidとclassを消す
          'items_wrap'      => '<ul>%3$s</ul>',
          'theme_location' => 'global'
        );
        wp_nav_menu( $args );
        ?>
      </nav>
	<?php endif; ?>
</header>