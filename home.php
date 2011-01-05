<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

			<div id="column-2">


<!--ACTUS-->
<?php query_posts($query_string . '&category_name=actus&showposts=3'); ?>
<?php get_template_part( 'loop', 'index' );?>
<?php	rewind_posts(); ?>

<!--VIDAL et VOUS-->
<?php query_posts($query_string . '&category_name=vidal-et-vous-home&showposts=1'); ?>
<?php get_template_part( 'loop', 'minimal' ); ?>
<?php rewind_posts(); ?>

			</div><!-- #column-2-->
			<div id="column-3">

<!--EUREKA-->
<?php query_posts($query_string . '&category_name=eureka-home&showposts=1'); ?>
<?php get_template_part( 'loop', 'minimal' ); ?>
<?php rewind_posts(); ?>

<!-- ZOOM-RECOS -->
<?php query_posts($query_string . '&category_name=zoom-recos-home&showposts=1&orderby=rand'); ?>
<?php get_template_part( 'loop', 'minimal' ); ?>
<?php	rewind_posts(); ?>

<!-- FAQ -->
<ul>
<?php wp_list_categories('child_of=19&title_li=FAQ');?>  
</ul>
			</div><!-- #column-3-->

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
