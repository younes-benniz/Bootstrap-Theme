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
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="mx-auto d-md-block mb-3 " src="http://localhost/wordpress/wp-content/uploads/2020/04/chicago.jpg" alt="First slide">
						<div class="carousel-caption d-none d-md-block">
						<a href="#"><h5>First Post</h5></a>
						<p>Hello ther!</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="mx-auto d-block mb-3" src="http://localhost/wordpress/wp-content/uploads/2020/04/la.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="mx-auto d-block mb-3"  src="http://localhost/wordpress/wp-content/uploads/2020/04/ny.jpg"  class="rounded" alt="Third slide">
					</div>
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