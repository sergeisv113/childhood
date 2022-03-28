  <?php
//   add_action('wp_enqueue_scripts', 'childhood_styles');
//   add_action('wp_enqueue_scripts', 'childhood_scripts');
//   function childhood_styles() {
//     wp_enqueue_style('childhood-style', get_stylesheet_uri() );
//     // wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/styles/main.min.css' ); дополнит файл
//     // wp_enqueue_style('animate-style', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' ); из инета
//  };

//     function childhood_scripts() {
//     wp_enqueue_script('childhood_scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true );

//   };
  
add_action('wp_enqueue_scripts', 'childhood_scripts');

  function childhood_scripts() {
  wp_enqueue_script('childhood_scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true );
  wp_enqueue_style('childhood-style', get_stylesheet_uri() );
};

add_theme_support( 'custom-logo' );
// add logo
  ?>


