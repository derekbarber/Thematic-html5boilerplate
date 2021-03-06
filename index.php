<?php
/**
 * @package WordPress
 * @subpackage Thematic PFT
 */

get_header(); ?>

<?php get_sidebar(); ?>
		<!-- was id="primary"  -->
		<section class="main">

			<?php 
				// create the navigation above the content
				thematic_navigation_above();
				
				// calling the widget area 'index-top'
				get_sidebar('index-top');
				
				// action hook for placing content above the index loop
				thematic_above_indexloop();
				
				// action hook creating the index loop
				thematic_indexloop();
				
				// action hook for placing content below the index loop
				thematic_below_indexloop();
				
				// calling the widget area 'index-bottom'
				get_sidebar('index-bottom');
				
				// create the navigation below the content
				thematic_navigation_below();
			?>

		</section><!-- #main -->
<?php get_footer(); ?>