<?php
// Add custom Theme Functions here


// Polylang Shortcode - https://wordpress.org/plugins/polylang/
// Add this code in your functions.php
// Put shortcode [polylang] to post/page for display flags

function polylang_shortcode() {
	ob_start();
	pll_the_languages(array('show_flags'=>1,'show_names'=>0));
	$flags = ob_get_clean();
	return $flags;
}
add_shortcode( 'polylang', 'polylang_shortcode' );