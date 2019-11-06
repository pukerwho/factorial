<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="container mx-auto mb-10">
		<div class="flex wrapper">
			<div class="sidebar hidden md:block w-1/3 bg-white shadow-lg mr-0 md:mr-3 py-6 px-6">
				<?php get_template_part('blocks/sidebar') ?>
			</div>
			<div class="main w-full md:w-2/3 bg-white shadow-lg ml-0 md:ml-3 py-6 px-6">
				<div class="title text-2xl border-b pb-4 mb-4">
					<?php the_title(); ?>
				</div>
				<div class="content">
					<?php the_content(); ?>	
				</div>
			</div>
		</div>
	</div>
<?php endwhile; else: ?>
	<p><?php _e('Ничего не найдено'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>