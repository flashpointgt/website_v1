<?php
/*
Plugin Name: Global Posts Ordering
Plugin URI: http://wordpress.org/extend/plugins/global-posts-ordering/
Description: Adjust the global order of posts from various post types via simple drag and drop.
Version: 0.9.4
Author: BASICS09
Author URI: http://www.basics09.de/
License: GPL

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

*/
/*
////////////////////////////////////////////////////////////////////////////////////////////////////////////
// INSTALLATION INSTRUCTIONS
//
// To Initiate this plugin, you have to write the following in the file functions.php of your theme:

if ( class_exists("global_posts_ordering") )
	$global_posts_ordering = new global_posts_ordering(array("post_type_1", "post_type_2", "post_type_3"));
	
*/

class global_posts_ordering {
	
	function global_posts_ordering($post_types = array()) {
		if(!is_admin()) return;
		
		$this->given_post_types = $post_types;
		$this->sortable_post_types = array();
		
		add_action( 'admin_init' , array( $this, 'admin_init' ) );
		add_action( 'admin_menu' , array( $this, 'admin_menu_link') ); //add admin menu under management tab
		add_action( 'wp_ajax_global_posts_ordering', array( $this, 'ajax_global_posts_ordering' ) );
		add_filter('plugin_row_meta', array($this, 'row_meta'), 10, 2 );
	}
	function remove_invalid_post_types(){
		foreach($this->given_post_types as $post_type){
			$post_type_object = get_post_type_object($post_type);
			if(isset($post_type_object)){
				array_push($this->sortable_post_types, $post_type);
			}
		}
	}
	function row_meta($links, $file){
		if ($file == plugin_basename(__FILE__)){
			$link_title = __("Installation Instructions", "global-posts-ordering");
			$link_text = __("Instructions", "global-posts-ordering");
			$settings_link = "<a target='blank' title='{$link_title}' href='http://wordpress.org/extend/plugins/global-posts-ordering/installation/'>{$link_text}</a>";
	 		array_push($links, $settings_link);
		}
		return $links;
	}
	function admin_init(){
		$this->remove_invalid_post_types();
		
		// Check if on options Page and if capabilities are correct
		if(!isset($_GET["page"]) || $_GET["page"] != "global_posts_ordering" || !current_user_can('edit_pages')) return;
		
		wp_enqueue_script( 'global-posts-ordering', plugin_dir_url( __FILE__ ) . 'global-posts-ordering.js', array('jquery-ui-sortable'), '0.9.7', true );
		wp_enqueue_style( 'global-posts-ordering', plugin_dir_url( __FILE__ ) . 'global-posts-ordering.css');
		$js_trans = array(
			'msg1' => __("Test Message", 'global-posts-ordering')
		);
		wp_localize_script( 'global-posts-ordering', 'global_posts_ordering_l10n', $js_trans );
	}
	function admin_menu_link(){
		if(!current_user_can('edit_pages')) return;
		if(count($this->given_post_types) == 1){
			$page_title = __("Global Posts Ordering", "global-posts-ordering");
			$menu_title = __("Re-Order", "global-posts-ordering");
			$capability = "publish_posts";
			$menu_slug = "global_posts_ordering";
			$function = array($this, "options_page");
			$icon_url = "";
			$position = "";
			
			$post_type = $this->given_post_types[0];
			$post_type_string = "";
			if($post_type != "post") $post_type_string = "?post_type=" . $post_type;
			$page = add_submenu_page("edit.php".$post_type_string, $page_title, $menu_title, $capability, $menu_slug, $function);
		} else {
			$page_title = __("Global Posts Ordering", "global-posts-ordering");
			$menu_title = __("Posts Order", "global-posts-ordering");
			$capability = "publish_posts";
			$menu_slug = "global_posts_ordering";
			$function = array($this, "options_page");
			$icon_url = "";
			$position = "";
			$page = add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, 9);
		}
		
	}
	function options_page(){ ?>
		<div id="global_posts_ordering_wrap" class="wrap">
			<div id="icon-edit-pages" style="background: url('<?php echo plugin_dir_url(__FILE__) ?>icon32.png') -4px -5px;" class="icon32"></div>
			<h2><?php _e("Posts Order", "global-posts-ordering") ?></h2>
			<p style="margin-top:15px;">
				<?php if(count($this->sortable_post_types) == 0): ?>
					<?php _e("For this plugin to work, you have to include some post types. You have to initiate it in the functions.php of your theme like the following:", "global-posts-ordering") ?><br /><br />
					<code style="display: block; padding: 10px; border-radius: 3px;">
						if ( class_exists("global_posts_ordering") ){<br />
							&nbsp;&nbsp;&nbsp;$global_posts_ordering = new global_posts_ordering(array("my_post_type_1", "my_post_type_2", "my_post_type_3"));<br />
						}
					</code>
				<?php else: ?>
					<!--<?php _e("Here you can change the global order of", "global-posts-ordering") ?> <?php $this->the_supported_post_type_names(); ?>.-->
				<?php endif; ?>
			</p>
			<?php
				$args = array(
					"post_type"=>$this->sortable_post_types,
					"numberposts"=>-1
				);
				
				$posts = get_posts($args);
				
				// Sort the posts first by date and then by menu order
				usort($posts, array($this,"sort_date_and_menu_order"));
				
				if (count($this->sortable_post_types) && $posts == true){
					$count = 0; ?>
					<table id="global_posts_ordering_list" class="wp-list-table widefat fixed posts" cellspacing="0">
						<thead>
							<tr>
								<th scope='col' class='manage-column menu_order_head'>
									<div class='menu_order_content'><?php _e("Nr", "global-posts-ordering"); ?></div>
								</th>
								<th scope='col' class='manage-column post-title'>
									<?php _e("Title", "global-posts-ordering"); ?>
								</th>
								<th scope='col' class='manage-column post_type'>
									<?php _e("Post Type", "global-posts-ordering"); ?>
								</th>
							</tr>
						</thead>
						<tbody id="the-list">
							<?php foreach ($posts as $post): ?>
								<?php
									$count ++;
								?>
								<tr id="post-<?php echo $post->ID; ?>" <?php //if($count % 2 == 1) echo "class='alternate'"; ?>valign="top">
									<th class="menu_order">
										<div class='menu_order_content'><?php echo $count; ?></div>
									</th>
									<td class="title post-title page-title column-title">
										<strong><?php echo $post->post_title; ?></strong>
										<span style='display:none;' class='post_id'><?php echo $post->ID; ?></span>
									</td>
									<td class="post_type"><?php echo $this->get_post_type_name($post); ?></td>
								</tr>
							<?php endforeach; ?>
							
						</tbody>
						<tfoot>
							<tr>
								<th scope='col' class='manage-column menu_order_head'>
									<div class='menu_order_content'><?php _e("Nr", "global-posts-ordering"); ?></div>
								</th>
								<th scope='col' class='manage-column post-title'>
									<?php _e("Title", "global-posts-ordering"); ?>
								</th>
								<th scope='col' class='manage-column post_type'>
									<?php _e("Post Type", "global-posts-ordering"); ?>
								</th>
							</tr>
						</tfoot>
					</table>
					
					<?php return true;
				} else if(count($this->sortable_post_types)) {
					$msg_head = __("Sorry, no posts to available yet!", "global-posts-ordering");
					$msg_body = __("Of course, you have to create some posts first, before you can set their order ;)", "global-posts-ordering");
					echo "<h3>{$msg_head}</h3>";
					echo "<p>{$msg_body}</p>";
					return false;
				}
			?>
		</div>
		<br style='clear:both;' />
	<?php }
	function sort_date_and_menu_order($a, $b){
		if ($a->menu_order != $b->menu_order) {
			return ((float)$a->menu_order > (float)$b->menu_order) ? 1 : -1;
		}
		$a_date = strtotime($a->post_date_gmt);
		$b_date = strtotime($b->post_date_gmt);
		if ($a_date != $b_date) {
			return ((float)$a_date > (float)$b_date) ? -1 : 1;
		}
	}
	function get_post_type_name($post){
		$pt_object = get_post_type_object(get_post_type($post));
		return $pt_object->labels->menu_name;
	}
	function the_supported_post_type_names(){
		$amount = count($this->sortable_post_types);
		$count = 0;
		
		foreach($this->sortable_post_types as $post_type){
			$post_type_object = get_post_type_object($post_type);
			if(isset($post_type_object)){
				echo "<strong>{$post_type_object->labels->name}</strong>";
				if($count == $amount-1) continue;
				
				if($count == $amount-2) {
					echo " and ";
				} else {
					echo ", ";
				}
				$count ++;
			}
		}
	}
	
	function ajax_global_posts_ordering(){
		if ( !current_user_can('edit_pages') )
			die(-1);
		
		// real post?
		if ( ! $post = get_post( $_POST['id'] ) )
			die(-1);
		
		$previd = isset( $_POST['previd'] ) ? $_POST['previd'] : false;
		$nextid = isset( $_POST['nextid'] ) ? $_POST['nextid'] : false;
		$new_pos = array(); // store new positions for ajax
		
		$siblings = get_posts(array( 
			'depth' => 1, 
			'numberposts' => -1, 
			'post_type' => $this->sortable_post_types, 
			'post_status' => 'publish,pending,draft,future,private',
			'post_parent' => $post->post_parent, 
			'orderby' => 'menu_order title', 
			'order' => 'ASC', 
			'exclude' => $post->ID 
		)); // fetch all the siblings (relative ordering)
		
		$menu_order = 0;
			
		foreach( $siblings as $sibling ) :
		
			// if this is the post that comes after our repositioned post, set our repositioned post position and increment menu order
			if ( $nextid == $sibling->ID ) {
				wp_update_post(array( 'ID' => $post->ID, 'menu_order' => $menu_order ));
				$new_pos[$post->ID] = $menu_order;
				$menu_order++;
			}
			
			// if repositioned post has been set, and new items are already in the right order, we can stop
			if ( isset( $new_pos[$post->ID] ) && $sibling->menu_order >= $menu_order )
				break;
			
			// set the menu order of the current sibling and increment the menu order
			wp_update_post(array( 'ID' => $sibling->ID, 'menu_order' => $menu_order ));
			$new_pos[$sibling->ID] = $menu_order;
			$menu_order++;
			
			if ( ! $nextid && $previd == $sibling->ID ) {
				wp_update_post(array( 'ID' => $post->ID, 'menu_order' => $menu_order ));
				$new_pos[$post->ID] = $menu_order;
				$menu_order++;
			}
			
		endforeach;

		die( json_encode($new_pos) );
	}
}

?>