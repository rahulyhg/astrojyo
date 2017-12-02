<?php
/**
 * @package astrojyo
 * -------------------------
 * PAGINATION ASTRO THEME
 * -------------------------
 */

function astro_pagination( $pages = '', $range = 2 ) {
	$showitems = ( $range * 2 ) + 1;

	global $paged;
	if ( empty( $paged ) ) {
		$paged = 1;
	}

	if ( $pages == '' ) {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if ( ! $pages ) {
			$pages = 1;
		}
	}

	if ( 1 != $pages ) {
		echo '<ul class="uk-pagination uk-flex-center" uk-margin>';
		if ( $paged > 1 && $showitems < $pages ) {
			echo '<li class="pagination-arrow"><a href="' . get_pagenum_link( $paged - 1 ) . '"><span uk-pagination-previous></span></a></li>';
		}
		if ( $paged > 2 && $paged > $range + 1 && $showitems < $pages ) {
			echo '<li><a href="' . get_pagenum_link( 1 ) . '">1</a></li>';
		}

		for ( $i = 1; $i <= $pages; $i ++ ) {
			if ( 1 != $pages && ( ! ( $i >= $paged + $range || $i <= $paged - $range ) || $pages <= $showitems ) ) {
				echo ( $paged == $i ) ? '<li class="uk-active"><span>' . $i . '</span></li>' : '<li><a href="' . get_pagenum_link( $i ) . '">' . $i . '</a></li>';
			} elseif ( ! ( $i >= $paged + $range + 1 || $i <= $paged - $range - 1 ) ) {
				echo '<li class="uk-disabled"><a href="#">...</a></li>';
			}
		}
		if ( $paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages ) {
			echo '<li><a href="' . get_pagenum_link( $pages ) . '">' . $pages . '</a></li>';
		}
		if ( $paged < $pages && $showitems < $pages ) {
			echo '<li class="pagination-arrow"><a href="' . get_pagenum_link( $paged + 1 ) . '"><span uk-pagination-next></span></a></li>';
		}
		echo "</ul>\n";
	}
}