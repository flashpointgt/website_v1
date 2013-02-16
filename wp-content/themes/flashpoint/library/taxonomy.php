<? 
// Register Sessions Taxonomy
function session()  {
	$labels = array(
		'name'                       => _x( 'Sessions', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Session', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Session', 'text_domain' ),
		'all_items'                  => __( 'All Sessions', 'text_domain' ),
		'parent_item'                => __( '', 'text_domain' ),
		'parent_item_colon'          => __( '', 'text_domain' ),
		'new_item_name'              => __( 'New Session Name', 'text_domain' ),
		'add_new_item'               => __( 'Add Session', 'text_domain' ),
		'edit_item'                  => __( 'Edit Session', 'text_domain' ),
		'update_item'                => __( 'Update Session', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate sessions with commas', 'text_domain' ),
		'search_items'               => __( 'Search sessions', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove sessions', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used sessions', 'text_domain' ),
	);

	$rewrite = array(
		'slug'                       => 'sessions',
		'with_front'                 => true,
		'hierarchical'               => true,
	);

	$capabilities = array(
		'manage_terms'               => 'manage_categories',
		'edit_terms'                 => 'manage_categories',
		'delete_terms'               => 'manage_categories',
		'assign_terms'               => 'edit_posts',
	);

	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
		'query_var'                  => 'session',
		'rewrite'                    => $rewrite,
		'capabilities'               => $capabilities,
	);

	register_taxonomy( 'session', 'teams', $args );
}

// Hook into the 'init' action
add_action( 'init', 'session', 0 );