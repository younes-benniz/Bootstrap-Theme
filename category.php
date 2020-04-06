<?php get_header();?>
	<section class="page-wrap">
		<div class="container">
			<h2><?php echo single_cat_title();?></h2>
			<?php if(have_posts() ): while( have_posts() ): the_post();?>

				<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
								<?php the_excerpt();?>
				<a href="<?php the_permalink();?>" class="btn btn-success">Read more</a>
								
			 <?php endwhile; else: endif;?>

			 <?php previous_posts_link();?>
			 <?php next_posts_link();?>


		</div>
	</section>

<?php get_footer();?>






