<?php get_header(); ?>
	<section class="o-hero --resources --small" id="parallax">
		<div class="hero-bg parallax"></div>
		<div class="wrapper">
			<span class="o-hero__title --memberships">Fitness Resources</span>
		</div>
	</section><!-- hero -->

  <main class="wrapper group" id="resources" role="main">
	<div id="search">
		<?php get_search_form(); ?>
		</div>
		<?php get_sidebar(); ?>
		<div class="col col-lrg right ">
		<h2><?php single_cat_title(); ?></h2>
			
		<div class="posts">
			<?php get_template_part('loop'); ?>
		</div>
			
		
		<div class="article-nav">
		<?php
			// next_posts_link() usage with max_num_pages
			next_posts_link( '← Older Entries', $the_query->max_num_pages );
			previous_posts_link( 'Newer Entries →' );
			?>
		</div>
	</div><!-- col-large -->
  </main>

<?php get_footer(); ?>


