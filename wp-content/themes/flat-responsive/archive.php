<?php
/**
 * The template for displaying Archive, tag, and category pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 * @package flat-responsive
 * @since 1.0.0
 */

get_header(); ?>

<?php get_sidebar( 'top' ); ?>

<section id="fr-content-area" class="fr-content" role="main">
	<div class="container">
    <div class="row">
      <div class="col-md-12">
        <header class="entry-header">
          <?php
          the_archive_title( '<h1 class="entry-title">', '</h1>' );
          the_archive_description( '<div class="taxonomy-description">', '</div>' );
          ?>
        </header>
      </div>
    </div>
  </div>

 <?php $blogstyle = get_theme_mod( 'blog_style', 'blogright' );

	switch ($blogstyle) {
		// Right Column
		case "blogright" :
			echo '<div class="container"><div class="row"><div class="col-md-8"><div id="fr-content" role="main">';
			// get all the posts
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					// get the article layout
					get_template_part( 'content', get_post_format() );
				endwhile;
					// get the pagination
					flat_responsive_paging_nav();
				else :
					// if no posts
					get_template_part( 'content', 'none' );
				endif;
			echo '</div></div><div class="col-md-4 right_sidebar"><aside id="fr-right" role="complementary">';
				get_sidebar( 'right' );
			echo '</aside></div></div></div>';
		break;


		// Left Column
		case "blogleft" :
			echo '<div class="container"><div class="row"><div class="col-md-4 left_sidebar"><aside id="fr-left" role="complementary">';
				get_sidebar( 'left' );
			echo '</aside></div>';
			echo '<div class="col-md-8"><div id="fr-content" role="main">';
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );
				endwhile;
					flat_responsive_paging_nav();
				else :
					get_template_part( 'content', 'none' );
				endif;
			echo '</div></div></div></div>';
		break;


		// Left and Right Column
		case "blogleftright" :
			echo '<div class="container"><div class="row"><div class="col-md-4 left_sidebar"><aside id="fr-left" role="complementary">';
				get_sidebar( 'left' );
			echo '</aside></div>';
			echo '<div class="col-md-4"><div id="fr-content" role="main">';
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );
				endwhile;
					flat_responsive_paging_nav();
				else :
					get_template_part( 'content', 'none' );
				endif;
			echo '</div></div><div class="col-md-4 right_sidebar"><aside id="fr-right" role="complementary">';
				get_sidebar( 'right' );
			echo '</aside></div></div></div>';
		break;


		// Wide Column
		case "blogwide" :

			echo '<div class="container"><div class="row"><div class="col-md-12"><div id="fr-content" role="main">';
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );
				endwhile;
					flat_responsive_paging_nav();
				else :
					get_template_part( 'content', 'none' );
				endif;

			echo '</div></div></div></div>';
		break;

	}
?>

</section><!-- #primary -->


<?php get_footer(); ?>
