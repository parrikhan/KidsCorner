<?php
function add_theme_scripts() {
    /********** Including StyleSheet of theme ***********/
        wp_enqueue_style( 'main_style_file', get_stylesheet_uri());
    /********** Including all.min css file  ***********/
         wp_enqueue_style( 'minified_file', get_template_directory_uri() .'/css/all.min.css', array(), '1.1', 'all');
      /********** Including style css file  ***********/
        wp_enqueue_style( 'style', get_template_directory_uri() .'/css/style.css', array(), '1.1', 'all');
      /********* Including bootstrap file ************/  
        wp_enqueue_style( 'bootstrap_file', get_template_directory_uri() .'/css/bootstrap.min.css', array (),'1.1', 'all'); 
      //********* Including script files  ************/
        wp_enqueue_script( $handle, get_template_directory_uri().'/js/bootstrap.min.js', array(), '1.1' , true );        
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

/********** Registering Navigation Menu ************/
function register_my_menu() {
    register_nav_menu('header-menu',__( 'Top_Menu' ));
  }
  add_action( 'init', 'register_my_menu' );

  function my_register_sidebars() {

    /* Register dynamic sidebar 'new_sidebar' */
        register_sidebar(
            array(
            'id' => 'bootom_footer_left',
            'name' => __( 'Column_1' ),
            'description' => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
        );
        register_sidebar(
            array(
            'id' => 'bootom_footer_right',
            'name' => __( 'Column_2' ),
            'description' => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
        ); 
        register_sidebar(
          array(
          'id' => 'header-logo',
          'name' => __( 'header-logo' ),
          'description' => __( 'KidsCorner.' ),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h3 class="widget-title">',
          'after_title' => '</h3>'
      )
      );
      register_sidebar(
        array(
        'id' => 'contact-us',
        'name' => __( 'contact-us' ),
        'description' => __( 'ContactUs' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    )
    );
    register_sidebar(
      array(
      'id' => 'contact-form',
      'name' => __( 'contact-form' ),
      'description' => __( 'ContactUs' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>'
  )
  );
  register_sidebar(
    array(
    'id' => 'address',
    'name' => __( 'address' ),
    'description' => __( 'address' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'
  )
  );
register_sidebar(
  array(
  'id' => 'email',
  'name' => __( 'email' ),
  'description' => __( 'email' ),
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<h3 class="widget-title">',
  'after_title' => '</h3>'
)
);
register_sidebar(
  array(
  'id' => 'phone',
  'name' => __( 'phone' ),
  'description' => __( 'phone' ),
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<h3 class="widget-title">',
  'after_title' => '</h3>'
)
);
register_sidebar(
  array(
  'id' => 'contact',
  'name' => __( 'contact' ),
  'description' => __( 'contact' ),
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<h3 class="widget-title">',
  'after_title' => '</h3>'
)
);
register_sidebar(
  array(
  'id' => 'mail',
  'name' => __( 'mail' ),
  'description' => __( 'mail' ),
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<h3 class="widget-title">',
  'after_title' => '</h3>'
)
);
register_sidebar(
  array(
  'id' => 'road',
  'name' => __( 'road' ),
  'description' => __( 'road' ),
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<h3 class="widget-title">',
  'after_title' => '</h3>'
)
);
register_sidebar(
  array(
  'id' => 'android',
  'name' => __( 'android' ),
  'description' => __( 'android' ),
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<h3 class="widget-title">',
  'after_title' => '</h3>'
)
);
}
    
    add_action( 'widgets_init', 'my_register_sidebars' );

    /*
* Creating a function to create our CPT
*/
 
function custom_post_type() {
 
  // Set UI labels for Custom Post Type
      $labels = array(
          'name'                => _x( 'Baby', 'Post Type General Name', 'KidsCorner' ),
          'singular_name'       => _x( 'Baby', 'Post Type Singular Name', 'KidsCorner' ),
          'menu_name'           => __( 'Baby Store', 'KidsCorner' ),
          'parent_item_colon'   => __( 'Parent Of Baby', 'KidsCorner' ),
          'all_items'           => __( 'All Cart Items', 'KidsCorner' ),
          'view_item'           => __( 'View Cart Items', 'KidsCorner' ),
          'add_new_item'        => __( 'Add New Cart Item', 'KidsCorner' ),
          'add_new'             => __( 'Add New', 'KidsCorner' ),
          'edit_item'           => __( 'Edit Cart Item', 'KidsCorner' ),
          'update_item'         => __( 'Update Cart Item', 'KidsCorner' ),
          'search_items'        => __( 'Search Cart Item', 'KidsCorner' ),
          'not_found'           => __( 'Not Found', 'KidsCorner' ),
          'not_found_in_trash'  => __( 'Not found in Trash', 'KidsCorner' ),
      );
       
  // Set other options for Custom Post Type
       
      $args = array(
          'label'               => __( 'BabyStore', 'KidsCorner' ),
          'description'         => __( 'Shop For Your Sweet Ones', 'KidsCorner' ),
          'labels'              => $labels,
          // Features this CPT supports in Post Editor
          'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
          // You can associate this CPT with a taxonomy or custom taxonomy. 
          'taxonomies'          => array( 'genres' ),
          /* A hierarchical CPT is like Pages and can have
          * Parent and child items. A non-hierarchical CPT
          * is like Posts.
          */ 
          'hierarchical'        => false,
          'public'              => true,
          'show_ui'             => true,
          'show_in_menu'        => true,
          'show_in_nav_menus'   => true,
          'show_in_admin_bar'   => true,
          'menu_position'       => 5,
          'can_export'          => true,
          'has_archive'         => true,
          'exclude_from_search' => false,
          'publicly_queryable'  => true,
          'capability_type'     => 'post',
          'show_in_rest' => true,
   
      );
       
      // Registering your Custom Post Type
      register_post_type( 'movies', $args );
   
  }
   
  /* Hook into the 'init' action so that the function
  * Containing our post type registration is not 
  * unnecessarily executed. 
  */
   
  add_action( 'init', 'custom_post_type', 0 );
  
?>