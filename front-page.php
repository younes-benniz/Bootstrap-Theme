<?php get_header();?>
	<section class="page-wrap">
		<div class="container"> 
			<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
			<?php if(have_posts() ): while( have_posts() ): the_post();?>
				<?php the_content();?>
		    <?php endwhile; else: endif;?>
		</div>
	</section>

<?php get_footer();?>