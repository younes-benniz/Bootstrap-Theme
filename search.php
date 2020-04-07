<?php get_header();?>
	<section class="page-wrap">	
		<div class="container">
			<ul class="list-unstyled">	
				<h1>Search results for '<?php echo get_search_query();?>'</h1>
				<?php if(have_posts() ): while( have_posts() ): the_post();?>
					<li class="media">
						<div class="media-body">

								<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
								<div class="container p-3 my-3 bg-primary text-white">
									<?php the_excerpt();?>
										<p><?php echo get_the_date();?></p>
									<a href="<?php the_permalink();?>" class="btn btn-success">Read more</a><br>
								</div>
								
						</div>
					</li>
				<?php endwhile;?>
			</ul>
			 <?php else:?>
    			</style><h2>No Search results found</h2>

				<?php endif;?>
    	</div>
    </section>
    	
    	
<?php get_footer();?>