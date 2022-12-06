<?php

/**
 * Social bar group
 * @package flat-responsive
 * @since 1.0.0
 */
?>

<?php if( get_theme_mod( 'hide_social' ) == '') { ?>
		<?php $options = get_theme_mods();						
			echo '<div id="social-icons"><ul>';										
			if (!empty($options['twitter_uid'])) echo '<li><a title=" '. esc_attr('Twitter', 'flat-responsive').' " href="' . esc_url($options['twitter_uid']) . '" target="_blank"><div class="twitter icomoon icon-twitter"></div></a></li>';
			if (!empty($options['facebook_uid'])) echo '<li><a title="'. esc_attr('Facebook', 'flat-responsive').'" href="' . esc_url($options['facebook_uid']) . '" target="_blank"><div class="facebook icomoon icon-facebook3"></div></a></li>';
			if (!empty($options['google_uid'])) echo '<li><a title="'. esc_attr('Google+', 'flat-responsive').'" href="' . esc_url($options['google_uid']) . '" target="_blank"><div class="google icomoon icon-google-plus2"></div></a></li>';			
			if (!empty($options['linkedin_uid'])) echo '<li><a title="'. esc_attr('Linkedin', 'flat-responsive').'" href="' . esc_url($options['linkedin_uid']) . '" target="_blank"><div class="linkedin icomoon icon-linkedin"></div></a></li>';
			if (!empty($options['pinterest_uid'])) echo '<li><a title="'. esc_attr('Pinterest', 'flat-responsive').'" href="' . esc_url($options['pinterest_uid']) . '" target="_blank"><div class="pinterest icomoon icon-pinterest"></div></a></li>';
			if (!empty($options['flickr_uid'])) echo '<li><a title="'. esc_attr('Flickr', 'flat-responsive').'" href="' . esc_url($options['flickr_uid']) . '" target="_blank"><div class="flickr icomoon icon-flickr"></div></a></li>';
			if (!empty($options['youtube_uid'])) echo '<li><a title="'. esc_attr('Youtube', 'flat-responsive').'" href="' . esc_url($options['youtube_uid']) . '" target="_blank"><div class="youtube icomoon icon-youtube"></div></a></li>';
			if (!empty($options['vimeo_uid'])) echo '<li><a title="'. esc_attr('Vimeo', 'flat-responsive').'" href="' . esc_url($options['vimeo_uid']) . '" target="_blank"><div class="vimeo icomoon icon-vimeo2"></div></a></li>';		
			if (!empty($options['instagram_uid'])) echo '<li><a title="'. esc_attr('Instagram', 'flat-responsive').'" href="' . esc_url($options['instagram_uid']) . '" target="_blank"><div class="instagram icomoon icon-instagram"></div></a></li>';		
			if (!empty($options['reddit_uid'])) echo '<li><a title="'. esc_attr('Reddit', 'flat-responsive').'" href="' . esc_url($options['reddit_uid']) . '" target="_blank"><div class="reddit icomoon icon-reddit"></div></a></li>';
			if (!empty($options['picassa_uid'])) echo '<li><a title="'. esc_attr('Picassa', 'flat-responsive').'" href="' . esc_url($options['picassa_uid']) . '" target="_blank"><div class="picassa icomoon icon-picassa2"></div></a></li>';
			if (!empty($options['stumbleupon_uid'])) echo '<li><a title="'. esc_attr('stumbleupon', 'flat-responsive').'" href="' . esc_url($options['stumbleupon_uid']) . '" target="_blank"><div class="stumbleupon icomoon icon-stumbleupon2"></div></a></li>';	
			if (!empty($options['wp_uid'])) echo '<li><a title="'. esc_attr('WordPress', 'flat-responsive').'" href="' . esc_url($options['wp_uid']) . '" target="_blank"><div class="wordpress icomoon icon-wordpress2"></div></a></li>';	
			if (!empty($options['github_uid'])) echo '<li><a title="'. esc_attr('Github', 'flat-responsive').'" href="' . esc_url($options['github_uid']) . '" target="_blank"><div class="github icomoon icon-github3"></div></a></li>';
			if (!empty($options['dribbble_uid'])) echo '<li><a title="'. esc_attr('Dribble', 'flat-responsive').'" href="' . esc_url($options['dribbble_uid']) . '" target="_blank"><div class="dribbble icomoon icon-dribbble"></div></a></li>';		
			if (!empty($options['rss_uid'])) echo '<li><a title="'. esc_attr('Rss', 'flat-responsive').'" href="' . esc_url($options['rss_uid']) . '" target="_blank"><div class="rss icomoon icon-feed2"></div></a></li>';	
	        if (!empty($options['cart_uid'])) echo '<li><a title="'. esc_attr('Cart', 'flat-responsive').'" href="' . esc_url($options['cart_uid']) . '" target="_blank"><div class="cart icomoon icon-cart"></div></a></li>';	
			if (!empty($options['email_uid'])) echo '<li><a title="'. esc_attr('Email', 'flat-responsive').'" href="' . esc_url($options['email_uid']) . '"><div class="email icomoon icon-envelope"></div></a></li>';		 
		echo '</ul></div>';		
}
?>