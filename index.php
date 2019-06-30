<?php 
/*
Plugin Name: ONL REPEATER ADD ON
Plugin URI:  https://github.com/
Description: registration repeater for form #11
Version:     1.0
Author:      Tom Woodward
Author URI:  http://bionicteaching.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: my-toolset

*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


// add_action('wp_enqueue_scripts', 'prefix_load_scripts');

// function prefix_load_scripts() {                           
//     $deps = array('jquery');
//     $version= '1.0'; 
//     $in_footer = true;    
//     wp_enqueue_script('prefix-main-js', plugin_dir_url( __FILE__) . 'js/prefix-main.js', $deps, $version, $in_footer); 
//     wp_enqueue_style( 'prefix-main-css', plugin_dir_url( __FILE__) . 'css/prefix-main.css');
// }


// Adjust your form ID
    //REMBER TO CHANGE THIS TO ID 1
add_filter( 'gform_form_post_get_meta_11', 'add_my_field' );
function add_my_field( $form ) {
 
    // Create a Single Line text field for the title
    $name = GF_Fields::create( array(
        'type'   => 'name',
        'id'     => 1002, // The Field ID must be unique on the form
        'formId' => $form['id'],
        'label'  => 'Name',
        'pageNumber'  => 1, // Ensure this is correct
    ) );
 
    // Create a category for the evidence
    $country = GF_Fields::create( array(
        'type'   => 'select',
        'id'     => 1001, // The Field ID must be unique on the form
        'formId' => $form['id'],
        'label'  => 'Country',
        'choices' =>  array(
                array(
                    'text' => esc_html__( 'my first choice', 'sometextdomain' ),
                    'value' => '1'
                ),
                array(
                    'text' => esc_html__( 'my second choice', 'sometextdomain' ),
                    'value' => '2'
                )
            ),
        'pageNumber'  => 1, // Ensure this is correct        
    ) );

    $email = GF_Fields::create( array(
        'type'   => 'email',
        'id'     => 1003, // The Field ID must be unique on the form
        'formId' => $form['id'],
        'label'  => 'Email',
        'pageNumber'  => 1, // Ensure this is correct        
    ) );
 	
 	$gmail = GF_Fields::create( array(
        'type'   => 'email',
        'id'     => 1004, // The Field ID must be unique on the form
        'formId' => $form['id'],
        'label'  => 'Google Account',
        'description' => 'This does not neccessarily have to be a @gmail.com e-mail address. You can create a google account and access google drive without a @gmail.com e-mail address. If you do not have a google account <a href="https://accounts.google.com/signup/v2/webcreateaccount?flowName=GlifWebSignIn&amp;flowEntry=SignUp&amp;nogm=true" target="_blank">sign up for one here</a>.',
        'pageNumber'  => 1, // Ensure this is correct        
    ) );

    $meeting = GF_Fields::create( array(
        'type'   => 'checkbox',
        'id'     => 1005, // The Field ID must be unique on the form
        'formId' => $form['id'],
        'label'  => 'Preferred meeting time',
        'choices' =>  array(
                array(
                    'text' => esc_html__( 'Morning', 'sometextdomain' ),
                    'value' => 'Morning'
                ),
                array(
                    'text' => esc_html__( 'Afternoon', 'sometextdomain' ),
                    'value' => 'Afternoon'
                ),
                array(
                    'text' => esc_html__( 'Evening', 'sometextdomain' ),
                    'value' => 'Evening'
                ),
                array(
                    'text' => esc_html__( 'No preference', 'sometextdomain' ),
                    'value' => 'No preference'
                ),
                array(
                    'text' => esc_html__( 'Will change from week to week', 'sometextdomain' ),
                    'value' => 'Changes from week to week'
                ),
                array(
                    'text' => esc_html__( 'Other', 'sometextdomain' ),
                    'value' => 'Other'
                )
            ),
        'pageNumber'  => 1, // Ensure this is correct        
    ) );

     $timezone = GF_Fields::create( array(
        'type'   => 'select',
        'id'     => 1006, // The Field ID must be unique on the form
        'formId' => $form['id'],
        'label'  => 'Time zone',
        'choices' =>  array(
                array( 'text' => esc_html__( '(GMT -12:00) Eniwetok, Kwajalein', 'sometextdomain' ), 'value' => '(GMT -12:00) Eniwetok, Kwajalein'), array( 'text' => esc_html__( '(GMT -11:00) Midway Island, Samoa', 'sometextdomain' ), 'value' => '(GMT -11:00) Midway Island, Samoa'), array( 'text' => esc_html__( '(GMT -10:00) Hawaii', 'sometextdomain' ), 'value' => '(GMT -10:00) Hawaii'), array( 'text' => esc_html__( '(GMT -9:00) Alaska', 'sometextdomain' ), 'value' => '(GMT -9:00) Alaska'), array( 'text' => esc_html__( '(GMT -8:00) Pacific Time (US &amp; Canada)', 'sometextdomain' ), 'value' => '(GMT -8:00) Pacific Time (US &amp; Canada)'), array( 'text' => esc_html__( '(GMT -7:00) Mountain Time (US &amp; Canada)', 'sometextdomain' ), 'value' => '(GMT -7:00) Mountain Time (US &amp; Canada)'), array( 'text' => esc_html__( '(GMT -6:00) Central Time (US &amp; Canada), Mexico City', 'sometextdomain' ), 'value' => '(GMT -6:00) Central Time (US &amp; Canada), Mexico City'), array( 'text' => esc_html__( '(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima', 'sometextdomain' ), 'value' => '(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima'), array( 'text' => esc_html__( '(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz', 'sometextdomain' ), 'value' => '(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz'), array( 'text' => esc_html__( '(GMT -3:30) Newfoundland', 'sometextdomain' ), 'value' => '(GMT -3:30) Newfoundland'), array( 'text' => esc_html__( '(GMT -3:00) Brazil, Buenos Aires, Georgetown', 'sometextdomain' ), 'value' => '(GMT -3:00) Brazil, Buenos Aires, Georgetown'), array( 'text' => esc_html__( '(GMT -2:00) Mid-Atlantic', 'sometextdomain' ), 'value' => '(GMT -2:00) Mid-Atlantic'), array( 'text' => esc_html__( '(GMT -1:00 hour) Azores, Cape Verde Islands', 'sometextdomain' ), 'value' => '(GMT -1:00 hour) Azores, Cape Verde Islands'), array( 'text' => esc_html__( '(GMT) Western Europe Time, London, Lisbon, Casablanca', 'sometextdomain' ), 'value' => '(GMT) Western Europe Time, London, Lisbon, Casablanca'), array( 'text' => esc_html__( '(GMT +1:00 hour) Brussels, Copenhagen, Madrid, Paris', 'sometextdomain' ), 'value' => '(GMT +1:00 hour) Brussels, Copenhagen, Madrid, Paris'), array( 'text' => esc_html__( '(GMT +2:00) Kaliningrad, South Africa', 'sometextdomain' ), 'value' => '(GMT +2:00) Kaliningrad, South Africa'), array( 'text' => esc_html__( '(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg', 'sometextdomain' ), 'value' => '(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg'), array( 'text' => esc_html__( '(GMT +3:30) Tehran', 'sometextdomain' ), 'value' => '(GMT +3:30) Tehran'), array( 'text' => esc_html__( '(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi', 'sometextdomain' ), 'value' => '(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi'), array( 'text' => esc_html__( '(GMT +4:30) Kabul', 'sometextdomain' ), 'value' => '(GMT +4:30) Kabul'), array( 'text' => esc_html__( '(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent', 'sometextdomain' ), 'value' => '(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent'), array( 'text' => esc_html__( '(GMT +5:30) Bombay, Calcutta, Madras, New Delhi', 'sometextdomain' ), 'value' => '(GMT +5:30) Bombay, Calcutta, Madras, New Delhi'), array( 'text' => esc_html__( '(GMT +5:45) Kathmandu', 'sometextdomain' ), 'value' => '(GMT +5:45) Kathmandu'), array( 'text' => esc_html__( '(GMT +6:00) Almaty, Dhaka, Colombo', 'sometextdomain' ), 'value' => '(GMT +6:00) Almaty, Dhaka, Colombo'), array( 'text' => esc_html__( '(GMT +7:00) Bangkok, Hanoi, Jakarta', 'sometextdomain' ), 'value' => '(GMT +7:00) Bangkok, Hanoi, Jakarta'), array( 'text' => esc_html__( '(GMT +8:00) Beijing, Perth, Singapore, Hong Kong', 'sometextdomain' ), 'value' => '(GMT +8:00) Beijing, Perth, Singapore, Hong Kong'), array( 'text' => esc_html__( '(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk', 'sometextdomain' ), 'value' => '(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk'), array( 'text' => esc_html__( '(GMT +9:30) Adelaide, Darwin', 'sometextdomain' ), 'value' => '(GMT +9:30) Adelaide, Darwin'), array( 'text' => esc_html__( '(GMT +10:00) Eastern Australia, Guam, Vladivostok', 'sometextdomain' ), 'value' => '(GMT +10:00) Eastern Australia, Guam, Vladivostok'), array( 'text' => esc_html__( '(GMT +11:00) Magadan, Solomon Islands, New Caledonia', 'sometextdomain' ), 'value' => '(GMT +11:00) Magadan, Solomon Islands, New Caledonia'), array( 'text' => esc_html__( '(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka', 'sometextdomain' ), 'value' => '(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka'), 
            ),
        'pageNumber'  => 1, // Ensure this is correct        
    ) );

    // Create a repeater for the team members and add the name and email fields as the fields to display inside the repeater.
    $evidence = GF_Fields::create( array(
        'type'             => 'repeater',
        //'description'      => 'No max',
        'id'               => 1000, // The Field ID must be unique on the form
        'formId'           => $form['id'],
        'label'            => '',
        'addButtonText'    => 'Add item', // Optional
        'removeButtonText' => 'Remove item', // Optional
        'pageNumber'       => 1, // Ensure this is correct
        'fields'           => array( $name, $country, $email, $gmail, $meeting, $timezone ), // Add the fields here.
    ) );
 
    $form['fields'][] = $evidence;
 
    return $form;
}
 
// Remove the field before the form is saved. Adjust your form ID
    //REMBER TO CHANGE THIS TO ID 1
add_filter( 'gform_form_update_meta_11', 'remove_my_field', 10, 3 );
function remove_my_field( $form_meta, $form_id, $meta_name ) {
 
    if ( $meta_name == 'display_meta' ) {
        // Remove the Repeater field: ID 1000
        $form_meta['fields'] = wp_list_filter( $form_meta['fields'], array( 'id' => 1000 ), 'NOT' );
    }
 
    return $form_meta;
}

