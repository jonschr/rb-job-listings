<?php 

add_action( 'wp_head', 'rbjl_check_if_archive', 50 );
function rbjl_check_if_archive() {
	if ( !is_archive( 'job-listings' ) ) {
		do_action( 'rbjl_banner' );
		// echo 'check passed.';
	}
}

add_action( 'rbjl_banner', 'rbjl_add_banner' );
function rbjl_add_banner() {
	?>
	<div class="banner">
		<p>Looking for a job? <a href="/joblistings">View current listings!</a></p>
	</div>
	<?php
}