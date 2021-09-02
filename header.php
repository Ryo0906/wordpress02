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
	<button id="hamburger" class="header-button">
		<span class="icon"></span>
	</button>
	<nav class="header-gnav">
		<ul>
			<li>
				<a href="index.html">トップページ</a>
			</li>
			<li>
				<a href="list.html">NEWS</a>
			</li>
			<li>
				<a href="faq.html">よくある質問</a>
			</li>
			<li>
				<a href="contact.html">お問い合わせ</a>
			</li>
		</ul>
	</nav>
</header>