<?php
$author_display = get_theme_mod( 'display_post_author' );
$date_display   = get_theme_mod( 'display_post_date' );

if ( $author_display == 'hide' && $date_display == 'hide' ) {
	return;
}

$author = "<a class='author' href='" . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . "'>" . get_the_author() . "</a>";
$date   = "<a class='date' href='" . esc_url( get_month_link( get_the_date( 'Y' ), get_the_date( 'n' ) ) ) . "'>" . date_i18n( get_option( 'date_format' ), strtotime( get_the_date( 'r' ) ) ) . "</a>";

	if ( $author_display == 'hide' ) {
		printf( _x( 'Publié le %s', 'This blog post was published on some date', 'period' ), $date );
	} elseif ( $date_display == 'hide' ) {
		printf( _x( 'Publié le %s', 'This blog post was published by some author', 'period' ), $author );
	} else {
		printf( _x( 'Publié le %1$s par ', 'This blog post was published on some date by some author', 'period' ), $date );
	}
