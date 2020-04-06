<?php get_header();?>
	<section class="page-wrap">	
		<div class="container">
			<h1><?php echo single_cat_title();?></h1>


			<?php if(have_posts() ): while( have_posts() ): the_post();?>
				<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
				<?php the_excerpt();?>

				<a href="<?php the_permalink();?>" class="btn btn-success">Read more</a>

    		<?php endwhile; else: endif;?>
    	</div>
    </section>
    	
    	
<?php get_footer();?>