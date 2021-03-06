	<?php get_header(); ?>
<?php get_template_part('index', 'banner'); ?>
<div class="space-sep20"></div>
<div class="content-wrapper">
	<div class="body-wrapper">
		<div class="container">
			<div class="row">
				<?php the_post(); ?>
				<div class="col-md-9 col-sm-9">
						<!-- Blog Post -->
						<?php get_template_part('content'); ?>

					<?php previous_post_link('<span class="prev pull-left">« %link</span>'); ?>
					<?php next_post_link('<span class="next pull-right">%link »</span>'); ?>

					<!-- Blog Post -->
						<!-- Comments -->				
					<?php comments_template('',true); ?>

				</div>   
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>