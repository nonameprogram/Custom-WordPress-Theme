<?php remove_filter( 'the_excerpt', 'wpautop' );
add_theme_support( 'post-thumbnails' ); 


function customtheme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Popular Reviews', 'customtheme' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

}

function my_post_queries( $query ) {
    // do not alter the query on wp-admin pages and only alter it if it's the main query
    if (!is_admin() && $query->is_main_query()){
  
      // alter the query for the home and category pages 
  
      if(is_home()){
        $query->set('posts_per_page', 3);
      }
  
    }
  }
  add_action( 'pre_get_posts', 'my_post_queries' );
?>