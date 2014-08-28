<?php
/*
Template Name: Profile
*/
$loc = "profile";
get_header(); ?>

<section class="main-content">
        
    	<article>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        	 <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
		<?php endwhile; endif; ?>
        </article>
        
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>