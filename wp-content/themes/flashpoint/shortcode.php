<?
add_shortcode( 'custom_posts', 'tcb_sc_custom_posts' );
function tcb_sc_custom_posts( $atts ){
  global $post;
  $default = array(
    'type'      => 'post',
    'post_type' => 'teams',
    'status'    => 'publish'
  );
  $r = shortcode_atts( $default, $atts );
  extract( $r );

  if( empty($post_type) )
    $post_type = $type;

  $post_type_ob = get_post_type_object( $post_type );
  if( !$post_type_ob )
    return '<div class="warning"><p>No such post type <em>' . $post_type . '</em> found.</p></div>';

  $return = '<h3>' . $post_type_ob->name . '</h3>';

  $args = array(
    'post_type'   => $post_type,
    'numberposts' => $limit,
    'post_status' => $status,
  );

  $posts = get_posts( $args );
  if( count($posts) ):
    $return .= '<ul>';
    foreach( $posts as $post ): setup_postdata( $post );
      $return .= '<li>' . get_the_title() . '</li>';
    endforeach; wp_reset_postdata();
    $return .= '</ul>';
  else :
    $return .= '<p>No posts found.</p>';
  endif;

  return $return;
}