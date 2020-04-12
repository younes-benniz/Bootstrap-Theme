<?php get_header();?>
	<section class="page-wrap">
		<div class="container">
			<h2><?php echo single_cat_title();?></h2>

						<?php if(have_posts() ): while( have_posts() ): the_post();?>
				<div class="container p-3 my-3 bg-light text-black">
					
							<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
											<?php the_excerpt();?>
							<a href="<?php the_permalink();?>" class="btn btn-success">Read more</a>
					
				</div>
											
						<?php endwhile; else: endif;?>

						<div class = "previous" >
							<div class="btn btn-outline-primary">
								<?php previous_posts_link();?>
							</div>
						</div>

						<div class = "next">
							<div class="btn btn-outline-primary">
								<?php next_posts_link();?>
							</div>
						</div>


		</div>
	</section>

<?php get_footer();?>






