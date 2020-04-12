<?php get_header();?>
	<section class="page-wrap">
		<div class="container"> 
			<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
			
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
						<?php $slider = get_posts(array('post_type' => 'slider', 'posts_per_page' => 3)); ?>
						<?php $count = 0; ?>
						<?php foreach($slider as $slide): ?>
						<div class="carousel-item <?php echo ($count == 0) ? 'active' : ''; ?>">
							<img class="mx-auto d-block mb-3" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>"/>
						</div>
						<?php $count++; ?>
						<?php endforeach; ?>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
				<?php if(have_posts() ): while( have_posts() ): the_post();?>
				<?php the_content();?>
		    <?php endwhile; else: endif;?>
		</div>
	</section>
<?php get_footer();?>