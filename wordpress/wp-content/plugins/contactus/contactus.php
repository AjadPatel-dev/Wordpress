<?php
/**
 * Plugin Name: Contactus
 * Description: Contactus lead your visitors directly to the apps you’re offering as contact options: Facebook Messenger, WhatsApp, Telegram, and Viber.
 * Version: 1.0
 * Author: Nikba Creative Studio
 * Author URI: https://contactus.nikba.com
 */

#Plugin Setup
function contactus_setup() {
	
	#Admin Menu Params
	$page_title = 'Contactus - Setup';   
	$menu_title = 'Contactus';   
	$capability = 'manage_options';   
	$menu_slug  = basename(__FILE__);   
	$function   = 'contactus_settings';   
	$icon_url   = htmlspecialchars(get_contactus_icon_url());   
	$position   = 65;
    
    #Add Plugin in Admin Menu
    add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position); 
    
    #Regiter Plugin Settings
    register_setting('contactus', 'contactus-code');
}

#Display settings page
function contactus_settings() {
    $contactusLogo = htmlspecialchars(get_contactus_logo_url());
    $contactusSite = htmlspecialchars(get_contactus_url());

echo <<<EOTEXT
     <a href="{$contactusSite}" target="_blank">
     <img src="{$contactusLogo}" style="max-width: 250px;"></a>
EOTEXT;

#Check if Code is install
if (get_option('contactus-code')) {
echo <<<EOTEXT
	<p>
		Check your <a href="/" target="_blank">website</a> to see if the Contactus is present. 
		<br>
		You can always get a new code at <a href="{$contactusSite}" target="_blank">contactus</a> and paste it in the form below.
	</p>
EOTEXT;
} 

#Install New Code
else {
        echo <<<EOTEXT
	<h3>Step 1: Get button code</h3>
	<p>
		To install Contactus, please go to  <strong><a href="{$contactusSite}" target="_blank">contactus</a></strong> and get the button code.
	</p>
	<h3>Step 2: Paste the code</h3>
	<p>Copy and paste button code into the form below:</p>
EOTEXT;
    }

    echo '<form action="options.php" method="POST">';
    settings_fields('contactus');
    do_settings_sections('contactus');
    echo '<textarea cols="80" rows="14" name="contactus-code">' . esc_attr(get_option('contactus-code')) . '</textarea>';
    submit_button();
    echo '</form>';
}

#Get Contactus URL
function get_contactus_url(){
    return 'https://contactus.nikba.com/?utm_campaign=wordpress_plugin&utm_medium=widget&utm_source=wordpress';
}

#Get Contactus Logo
function get_contactus_logo_url(){
    return plugin_dir_url(__FILE__) . 'img/contactus_logo.png';
}

#Get Contactus Menu Icon
function get_contactus_icon_url(){
    return plugin_dir_url(__FILE__) . 'img/menu_icon.png';
}

#Add Contactus Code
function add_contactus_code(){
    echo get_option('contactus-code');
}

#Add settings page and register settings with WordPress
add_action('admin_menu', 'contactus_setup'); 


#Add the code to footer
add_action('wp_footer', 'add_contactus_code');

