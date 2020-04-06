<?php get_header();?>


	<section class="page-wrap">
		<div class="container">
			<?php if(has_post_thumbnail()):?>

				<img src="<?php the_post_thumbnail_url();?>" class="img-fluid img-thumbnail">


			<?php endif;?>

			<h2><?php the_title();?></h2>
			<?php if(have_posts() ): while( have_posts() ): the_post();?>

					<?php echo get_the_date();?>

					<?php the_content();?>


			<?php
			$F_name = get_the_author_meta('first_name');
			$L_name = get_the_author_meta('last_name');
			?>

			<h6>Created by <?php echo $F_name;?> <?php echo $L_name;?></h6>

			<?php 
			$tags = get_the_tags();
			foreach ($tags as $tag):?>

				<a href="<?php echo get_tag_link($tag->term_id);?>" class="badge badge-success">
					<?php echo $tag->name?>
				</a>

			<?php endforeach;?>

    		<?php endwhile; else: endif;?>


    	</div>
    </section>



<?php get_footer();?>