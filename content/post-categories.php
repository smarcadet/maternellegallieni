<?php

$categories = get_the_category( $post->ID );
$separator  = ', ';
$output     = '';

if ( $categories ) {

	foreach ( $categories as $category ) {
		// if it's the last and not the first (only) category, pre-prend with "and"
		if ( $category === end( $categories ) && $category !== reset( $categories ) ) {
			$output = rtrim( $output, ", " ); // remove trailing comma
			$output .= '<span> et </span>';
		}
		$output .= '<span>Publié par </span><a class="category" href="' . esc_url( get_category_link( $category->term_id ) ) . '" title="' . esc_attr( sprintf( __( "View all posts in %s", 'period' ), $category->name ) ) . '">' . esc_html( $category->cat_name ) . '</a>' . $separator;
	}
	echo trim( $output, $separator );
}