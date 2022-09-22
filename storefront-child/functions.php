<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;
if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION

    if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'oceanwp-woo-mini-cart','font-awesome','simple-line-icons','oceanwp-style','oceanwp-woocommerce','oceanwp-woo-star-font','oceanwp-woo-quick-view' ) );
        wp_enqueue_script('custom-script',get_stylesheet_directory_uri() . '/assets/js/custom.js');

        wp_enqueue_style('custom-css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
    }
    endif;
    add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

    function insert(){
        global $wpdb;
            $first_name = $_POST['u_firstname'];
            $last_name = $_POST['u_lastname'];
            $user_email = $_POST['u_email'];
            $user_age = $_POST['u_age'];
            $user_cource = $_POST['u_cource'];
            $user_address = $_POST['u_address'];
            $user_password = $_POST['u_password'];
            $u_image = $_FILES['file']['name'];
            $u_image_temp = $_FILES['file']['tmp_name'];
            $final_image = $u_image;
            $uploads_dir =$_SERVER['DOCUMENT_ROOT'].'/Ajad/wordpress2/wordpress/wp-content/themes/storefront-child/images/'.$final_image;
            $image_name = $_POST['img'];
            $uplod_status = move_uploaded_file($u_image_temp,$uploads_dir);
            // echo "<pre>";
            // print_r($_POST);
            // print_r($_FILES);
            // exit;
            $query= $wpdb->query("INSERT INTO wp_insertdata (fname,lname,email,age,cource,address,password,image) VALUES('$first_name','$last_name','$user_email','$user_age','$user_cource','$user_address','$user_password','$final_image')");
            if($query){
                echo "Done";
            }else{
                echo " Not Done";
            }


    }

    add_action( 'wp_ajax_nopriv_insert_data', 'insert' );
    add_action( 'wp_ajax_insert_data', 'insert' );




?>



