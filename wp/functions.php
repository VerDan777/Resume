
<?php
if ( !is_admin() ) {
    function register_my_js() {
        wp_enqueue_script( 'my-script', get_bloginfo( 'template_directory' ).'/script.js', array( 'jquery' ), '1.0', true );
        wp_enqueue_script('animateNumber',get_bloginfo('template_directory').'/libs/animateNumber/jquery.animateNumber.min.js',array('jquery'),'1.0',true);
    }
    add_action('init', 'register_my_js');
}
?>