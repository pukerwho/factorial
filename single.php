<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="container mx-auto mb-10">
		<div class="flex wrapper">
			<div class="sidebar hidden md:block w-1/3 bg-white shadow-lg mr-0 md:mr-3 py-6 px-6">
				<?php get_template_part('blocks/sidebar') ?>
			</div>
			<div class="main w-full md:w-2/3 bg-white shadow-lg ml-0 md:ml-3 py-6 px-6">
				<!-- Главная ссылка -->
				<div class="flex justify-between relative items-center border-b pb-5 mb-5">
						<div class="flex items-center pr-6">
							<div class="file mr-3" data-link-file="link-<?php echo get_the_ID(); ?>">
								<img src="<?php bloginfo('template_url') ?>/img/word.svg" alt="" width="25px" class="file_img doc_img">
								<img src="<?php bloginfo('template_url') ?>/img/excel.svg" alt="" width="25px" class="file_img excel_img">
								<img src="<?php bloginfo('template_url') ?>/img/pdf.svg" alt="" width="25px" class="file_img pdf_img">
							</div>
							<div class="info">
								<div class="font-semibold">
									<?php the_title(); ?>	
								</div>
								<a href="<?php echo carbon_get_the_post_meta('crb_post_file') ?>" class="link_url" data-link-url="link-<?php echo get_the_ID(); ?>">
									<div class="font-thin">
										скачать
									</div>
								</a>
							</div>
						</div>
						<div id="copy-<?php echo get_the_ID(); ?>" class="copy_link relative cursor-pointer" data-clipboard-text="<?php echo carbon_get_the_post_meta('crb_post_file') ?>">
							<img src="<?php bloginfo('template_url') ?>/img/copy.svg" alt="Копировать" width="25px">
						</div>
						<span class="copy_success success_copy-<?php echo get_the_ID(); ?> absolute right-0 text-sm bg-green-200 opacity-75 p-2">Ссылка скопирована</span>
					</div>
				<?php 
					$current_term = wp_get_post_terms(  get_the_ID() , 'category', array( 'parent' => 0 ) );
					foreach ($current_term as $myterm); {
						$current_term_slug = $myterm->slug;
						$current_term_name = $myterm->name;
					} 
				?>
				<?php 
					$current_id = get_the_ID();
					$custom_query = new WP_Query( array( 
						'post_type' => 'post', 
						'posts_per_page' => -1,
						'post__not_in' => array($current_id),
						'tax_query' => array(
					    array(
				        'taxonomy' => 'category',
						    'terms' => $current_term_slug,
				        'field' => 'slug',
				        'include_children' => true,
				        'operator' => 'IN'
					    )
						),
					));
					if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
					<div class="flex justify-between relative items-center mb-5">
						<div class="flex items-center pr-6">
							<div class="file mr-3" data-link-file="link-<?php echo get_the_ID(); ?>">
								<img src="<?php bloginfo('template_url') ?>/img/word.svg" alt="" width="25px" class="file_img doc_img">
								<img src="<?php bloginfo('template_url') ?>/img/excel.svg" alt="" width="25px" class="file_img excel_img">
								<img src="<?php bloginfo('template_url') ?>/img/pdf.svg" alt="" width="25px" class="file_img pdf_img">
							</div>
							<div class="info">
								<div class="font-semibold">
									<?php the_title(); ?>	
								</div>
								<a href="<?php echo carbon_get_the_post_meta('crb_post_file') ?>" class="link_url" data-link-url="link-<?php echo get_the_ID(); ?>">
									<div class="font-thin">
										скачать
									</div>
								</a>
							</div>
						</div>
						<div id="copy-<?php echo get_the_ID(); ?>" class="copy_link relative cursor-pointer" data-clipboard-text="<?php echo carbon_get_the_post_meta('crb_post_file') ?>">
							<img src="<?php bloginfo('template_url') ?>/img/copy.svg" alt="Копировать" width="25px">
						</div>
						<span class="copy_success success_copy-<?php echo get_the_ID(); ?> absolute right-0 text-sm bg-green-200 opacity-75 p-2">Ссылка скопирована</span>
					</div>
				<?php endwhile; endif; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
<?php endwhile; else: ?>
	<p><?php _e('Ничего не найдено'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>