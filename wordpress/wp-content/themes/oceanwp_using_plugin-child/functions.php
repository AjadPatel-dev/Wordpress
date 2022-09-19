<?php
    //get_header(); 
    if ( !defined( 'ABSPATH' ) ) exit;
    if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
        $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
    endif;
    add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

    if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'oceanwp-woo-mini-cart','font-awesome','simple-line-icons','oceanwp-style','oceanwp-woocommerce','oceanwp-woo-star-font','oceanwp-woo-quick-view' ) );
        wp_enqueue_script('custom-script',get_stylesheet_directory_uri() . '/assets/js/custom.js');

        wp_enqueue_style('custom-css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
    }
    endif;
    add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );
    //get_footer(); 

    function login_users(){
        global $wpdb;
        $us_email = $_POST['u_email'];
        $us_pass = md5($_POST['u_password']);

        $creds = array();
        $creds['user_login'] = isset( $_POST['u_email'] ) ? $_POST['u_email'] : '';
        $creds['user_password'] = isset( $_POST['u_password'] ) ? $_POST['u_password'] : '';
        $creds['remember'] = isset( $_POST['rememberme'] ) ? true : false;
        $user = wp_signon( $creds, false );
        echo "<pre>";
        print_r($user);
        die;
        if ( is_wp_error( $user ) ) {
            error_log( $user->get_error_message() );
            echo "User email are password not match";
        }else{
       

                echo "User name and password are not match";


        } 
    }
    add_action( 'wp_ajax_nopriv_login_user', 'login_users' );
    add_action( 'wp_ajax_login_user', 'login_users' );

    function admin_default_page() {
        return '/new-dashboard-url';
    }
    add_filter('login_redirect', 'admin_default_page');
?>






