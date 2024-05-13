<?php function filter_projects_callback() {
	$term_id = isset($_POST['term_id']) ? $_POST['term_id'] : '';
	$current_language = pll_current_language();
    $build_folder = get_template_directory_uri() . '/assets/';

	$args = array(
		'post_type'      => 'projects',
		'posts_per_page' => -1,
		'lang'           => $current_language,
	);

	if (!empty($term_id) && $term_id != 'all') {
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'project_category',
				'field'    => 'term_id',
				'terms'    => intval($term_id)
			)
		);
	}

	$query = new WP_Query( $args );

	while ( $query->have_posts() ): $query->the_post();
		$link  = get_permalink() ?>
        <li class="project-list__item">
            <a href="<?php echo esc_url( $link ); ?>" class="project" data-name="<?php the_title(); ?>">
				<?php if ( has_post_thumbnail() ): ?>
					<?php the_post_thumbnail(); ?>
				<?php else: ?>
                    <img src="<?php echo esc_url( $build_folder ); ?>/img/no-image.png" alt="no_image">
				<?php endif; ?>
            </a>
        </li>
	<?php endwhile;
	wp_die();
}

add_action( 'wp_ajax_filter_projects', 'filter_projects_callback' );
add_action( 'wp_ajax_nopriv_filter_projects', 'filter_projects_callback');


function blog_posts_func(){
	ob_start();

	require_once 'blog-posts.php';

	$content = ob_get_clean();
	return $content;
}

add_shortcode('blog_posts', 'blog_posts_func');