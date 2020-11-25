<?php get_header(); ?>

<div class="row headerImageIndex">
	<div class="col-12">
		<img src="<?php echo get_template_directory_uri(); ?>/images/blog_home_img.png" alt="SetPatrol Header">
		<h1>BLOG</h1>
	</div>
</div>



<div class="container-fluid">
<div class="row entryRow ">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<a href="<?php the_permalink() ?>">
		<div class="col-lg-4 col-md-6 col-sm-6 col-12 postCol">
		
		<div class="entryPost" >
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<?php echo first_image(); ?>
				<h2><?php the_title(); ?></h2>
				<p><?php echo wp_trim_words( get_the_content(), 20 );?></p>


		</div>
		<div class="metaOuter">
		<div class="indexMeta">
				  <p><em>Posted on: <?php the_time('F jS, Y') ?></em>
					<em>by <?php the_author() ?></em></p>
				</div>
			</div>
	</div>
	
	
				</a>
</div>

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

	</div>

</div>

<?php get_footer(); ?>