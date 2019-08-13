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
        'type'   => 'text',
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
                array( 'text' => esc_html__( 'Afghanistan', 'sometextdomain' ), 'value' => 'Afghanistan'), array( 'text' => esc_html__( 'Åland Islands', 'sometextdomain' ), 'value' => 'Åland Islands'), array( 'text' => esc_html__( 'Albania', 'sometextdomain' ), 'value' => 'Albania'), array( 'text' => esc_html__( 'Algeria', 'sometextdomain' ), 'value' => 'Algeria'), array( 'text' => esc_html__( 'American Samoa', 'sometextdomain' ), 'value' => 'American Samoa'), array( 'text' => esc_html__( 'Andorra', 'sometextdomain' ), 'value' => 'Andorra'), array( 'text' => esc_html__( 'Angola', 'sometextdomain' ), 'value' => 'Angola'), array( 'text' => esc_html__( 'Anguilla', 'sometextdomain' ), 'value' => 'Anguilla'), array( 'text' => esc_html__( 'Antarctica', 'sometextdomain' ), 'value' => 'Antarctica'), array( 'text' => esc_html__( 'Antigua and Barbuda', 'sometextdomain' ), 'value' => 'Antigua and Barbuda'), array( 'text' => esc_html__( 'Argentina', 'sometextdomain' ), 'value' => 'Argentina'), array( 'text' => esc_html__( 'Armenia', 'sometextdomain' ), 'value' => 'Armenia'), array( 'text' => esc_html__( 'Aruba', 'sometextdomain' ), 'value' => 'Aruba'), array( 'text' => esc_html__( 'Australia', 'sometextdomain' ), 'value' => 'Australia'), array( 'text' => esc_html__( 'Austria', 'sometextdomain' ), 'value' => 'Austria'), array( 'text' => esc_html__( 'Azerbaijan', 'sometextdomain' ), 'value' => 'Azerbaijan'), array( 'text' => esc_html__( 'Bahamas', 'sometextdomain' ), 'value' => 'Bahamas'), array( 'text' => esc_html__( 'Bahrain', 'sometextdomain' ), 'value' => 'Bahrain'), array( 'text' => esc_html__( 'Bangladesh', 'sometextdomain' ), 'value' => 'Bangladesh'), array( 'text' => esc_html__( 'Barbados', 'sometextdomain' ), 'value' => 'Barbados'), array( 'text' => esc_html__( 'Belarus', 'sometextdomain' ), 'value' => 'Belarus'), array( 'text' => esc_html__( 'Belgium', 'sometextdomain' ), 'value' => 'Belgium'), array( 'text' => esc_html__( 'Belize', 'sometextdomain' ), 'value' => 'Belize'), array( 'text' => esc_html__( 'Benin', 'sometextdomain' ), 'value' => 'Benin'), array( 'text' => esc_html__( 'Bermuda', 'sometextdomain' ), 'value' => 'Bermuda'), array( 'text' => esc_html__( 'Bhutan', 'sometextdomain' ), 'value' => 'Bhutan'), array( 'text' => esc_html__( 'Bolivia', 'sometextdomain' ), 'value' => 'Bolivia'), array( 'text' => esc_html__( 'Bonaire, Sint Eustatius and Saba', 'sometextdomain' ), 'value' => 'Bonaire, Sint Eustatius and Saba'), array( 'text' => esc_html__( 'Bosnia and Herzegovina', 'sometextdomain' ), 'value' => 'Bosnia and Herzegovina'), array( 'text' => esc_html__( 'Botswana', 'sometextdomain' ), 'value' => 'Botswana'), array( 'text' => esc_html__( 'Bouvet Island', 'sometextdomain' ), 'value' => 'Bouvet Island'), array( 'text' => esc_html__( 'Brazil', 'sometextdomain' ), 'value' => 'Brazil'), array( 'text' => esc_html__( 'British Indian Ocean Territory', 'sometextdomain' ), 'value' => 'British Indian Ocean Territory'), array( 'text' => esc_html__( 'Brunei Darrussalam', 'sometextdomain' ), 'value' => 'Brunei Darrussalam'), array( 'text' => esc_html__( 'Bulgaria', 'sometextdomain' ), 'value' => 'Bulgaria'), array( 'text' => esc_html__( 'Burkina Faso', 'sometextdomain' ), 'value' => 'Burkina Faso'), array( 'text' => esc_html__( 'Burundi', 'sometextdomain' ), 'value' => 'Burundi'), array( 'text' => esc_html__( 'Cambodia', 'sometextdomain' ), 'value' => 'Cambodia'), array( 'text' => esc_html__( 'Cameroon', 'sometextdomain' ), 'value' => 'Cameroon'), array( 'text' => esc_html__( 'Canada', 'sometextdomain' ), 'value' => 'Canada'), array( 'text' => esc_html__( 'Cape Verde', 'sometextdomain' ), 'value' => 'Cape Verde'), array( 'text' => esc_html__( 'Cayman Islands', 'sometextdomain' ), 'value' => 'Cayman Islands'), array( 'text' => esc_html__( 'Central African Republic', 'sometextdomain' ), 'value' => 'Central African Republic'), array( 'text' => esc_html__( 'Chad', 'sometextdomain' ), 'value' => 'Chad'), array( 'text' => esc_html__( 'Chile', 'sometextdomain' ), 'value' => 'Chile'), array( 'text' => esc_html__( 'China', 'sometextdomain' ), 'value' => 'China'), array( 'text' => esc_html__( 'Christmas Island', 'sometextdomain' ), 'value' => 'Christmas Island'), array( 'text' => esc_html__( 'Cocos Islands', 'sometextdomain' ), 'value' => 'Cocos Islands'), array( 'text' => esc_html__( 'Colombia', 'sometextdomain' ), 'value' => 'Colombia'), array( 'text' => esc_html__( 'Comoros', 'sometextdomain' ), 'value' => 'Comoros'), array( 'text' => esc_html__( 'Congo, Democratic Republic of the', 'sometextdomain' ), 'value' => 'Congo, Democratic Republic of the'), array( 'text' => esc_html__( 'Congo, Republic of the', 'sometextdomain' ), 'value' => 'Congo, Republic of the'), array( 'text' => esc_html__( 'Cook Islands', 'sometextdomain' ), 'value' => 'Cook Islands'), array( 'text' => esc_html__( 'Costa Rica', 'sometextdomain' ), 'value' => 'Costa Rica'), array( 'text' => esc_html__( 'Côte dIvoire', 'sometextdomain' ), 'value' => 'Côte dIvoire'), array( 'text' => esc_html__( 'Croatia', 'sometextdomain' ), 'value' => 'Croatia'), array( 'text' => esc_html__( 'Cuba', 'sometextdomain' ), 'value' => 'Cuba'), array( 'text' => esc_html__( 'Curaçao', 'sometextdomain' ), 'value' => 'Curaçao'), array( 'text' => esc_html__( 'Cyprus', 'sometextdomain' ), 'value' => 'Cyprus'), array( 'text' => esc_html__( 'Czech Republic', 'sometextdomain' ), 'value' => 'Czech Republic'), array( 'text' => esc_html__( 'Denmark', 'sometextdomain' ), 'value' => 'Denmark'), array( 'text' => esc_html__( 'Djibouti', 'sometextdomain' ), 'value' => 'Djibouti'), array( 'text' => esc_html__( 'Dominica', 'sometextdomain' ), 'value' => 'Dominica'), array( 'text' => esc_html__( 'Dominican Republic', 'sometextdomain' ), 'value' => 'Dominican Republic'), array( 'text' => esc_html__( 'Ecuador', 'sometextdomain' ), 'value' => 'Ecuador'), array( 'text' => esc_html__( 'Egypt', 'sometextdomain' ), 'value' => 'Egypt'), array( 'text' => esc_html__( 'El Salvador', 'sometextdomain' ), 'value' => 'El Salvador'), array( 'text' => esc_html__( 'Equatorial Guinea', 'sometextdomain' ), 'value' => 'Equatorial Guinea'), array( 'text' => esc_html__( 'Eritrea', 'sometextdomain' ), 'value' => 'Eritrea'), array( 'text' => esc_html__( 'Estonia', 'sometextdomain' ), 'value' => 'Estonia'), array( 'text' => esc_html__( 'Eswatini (Swaziland)', 'sometextdomain' ), 'value' => 'Eswatini (Swaziland)'), array( 'text' => esc_html__( 'Ethiopia', 'sometextdomain' ), 'value' => 'Ethiopia'), array( 'text' => esc_html__( 'Falkland Islands', 'sometextdomain' ), 'value' => 'Falkland Islands'), array( 'text' => esc_html__( 'Faroe Islands', 'sometextdomain' ), 'value' => 'Faroe Islands'), array( 'text' => esc_html__( 'Fiji', 'sometextdomain' ), 'value' => 'Fiji'), array( 'text' => esc_html__( 'Finland', 'sometextdomain' ), 'value' => 'Finland'), array( 'text' => esc_html__( 'France', 'sometextdomain' ), 'value' => 'France'), array( 'text' => esc_html__( 'French Guiana', 'sometextdomain' ), 'value' => 'French Guiana'), array( 'text' => esc_html__( 'French Polynesia', 'sometextdomain' ), 'value' => 'French Polynesia'), array( 'text' => esc_html__( 'French Southern Territories', 'sometextdomain' ), 'value' => 'French Southern Territories'), array( 'text' => esc_html__( 'Gabon', 'sometextdomain' ), 'value' => 'Gabon'), array( 'text' => esc_html__( 'Gambia', 'sometextdomain' ), 'value' => 'Gambia'), array( 'text' => esc_html__( 'Georgia', 'sometextdomain' ), 'value' => 'Georgia'), array( 'text' => esc_html__( 'Germany', 'sometextdomain' ), 'value' => 'Germany'), array( 'text' => esc_html__( 'Ghana', 'sometextdomain' ), 'value' => 'Ghana'), array( 'text' => esc_html__( 'Gibraltar', 'sometextdomain' ), 'value' => 'Gibraltar'), array( 'text' => esc_html__( 'Greece', 'sometextdomain' ), 'value' => 'Greece'), array( 'text' => esc_html__( 'Greenland', 'sometextdomain' ), 'value' => 'Greenland'), array( 'text' => esc_html__( 'Grenada', 'sometextdomain' ), 'value' => 'Grenada'), array( 'text' => esc_html__( 'Guadeloupe', 'sometextdomain' ), 'value' => 'Guadeloupe'), array( 'text' => esc_html__( 'Guam', 'sometextdomain' ), 'value' => 'Guam'), array( 'text' => esc_html__( 'Guatemala', 'sometextdomain' ), 'value' => 'Guatemala'), array( 'text' => esc_html__( 'Guernsey', 'sometextdomain' ), 'value' => 'Guernsey'), array( 'text' => esc_html__( 'Guinea', 'sometextdomain' ), 'value' => 'Guinea'), array( 'text' => esc_html__( 'Guinea-Bissau', 'sometextdomain' ), 'value' => 'Guinea-Bissau'), array( 'text' => esc_html__( 'Guyana', 'sometextdomain' ), 'value' => 'Guyana'), array( 'text' => esc_html__( 'Haiti', 'sometextdomain' ), 'value' => 'Haiti'), array( 'text' => esc_html__( 'Heard and McDonald Islands', 'sometextdomain' ), 'value' => 'Heard and McDonald Islands'), array( 'text' => esc_html__( 'Holy See', 'sometextdomain' ), 'value' => 'Holy See'), array( 'text' => esc_html__( 'Honduras', 'sometextdomain' ), 'value' => 'Honduras'), array( 'text' => esc_html__( 'Hong Kong', 'sometextdomain' ), 'value' => 'Hong Kong'), array( 'text' => esc_html__( 'Hungary', 'sometextdomain' ), 'value' => 'Hungary'), array( 'text' => esc_html__( 'Iceland', 'sometextdomain' ), 'value' => 'Iceland'), array( 'text' => esc_html__( 'India', 'sometextdomain' ), 'value' => 'India'), array( 'text' => esc_html__( 'Indonesia', 'sometextdomain' ), 'value' => 'Indonesia'), array( 'text' => esc_html__( 'Iran', 'sometextdomain' ), 'value' => 'Iran'), array( 'text' => esc_html__( 'Iraq', 'sometextdomain' ), 'value' => 'Iraq'), array( 'text' => esc_html__( 'Ireland', 'sometextdomain' ), 'value' => 'Ireland'), array( 'text' => esc_html__( 'Isle of Man', 'sometextdomain' ), 'value' => 'Isle of Man'), array( 'text' => esc_html__( 'Israel', 'sometextdomain' ), 'value' => 'Israel'), array( 'text' => esc_html__( 'Italy', 'sometextdomain' ), 'value' => 'Italy'), array( 'text' => esc_html__( 'Jamaica', 'sometextdomain' ), 'value' => 'Jamaica'), array( 'text' => esc_html__( 'Japan', 'sometextdomain' ), 'value' => 'Japan'), array( 'text' => esc_html__( 'Jersey', 'sometextdomain' ), 'value' => 'Jersey'), array( 'text' => esc_html__( 'Jordan', 'sometextdomain' ), 'value' => 'Jordan'), array( 'text' => esc_html__( 'Kazakhstan', 'sometextdomain' ), 'value' => 'Kazakhstan'), array( 'text' => esc_html__( 'Kenya', 'sometextdomain' ), 'value' => 'Kenya'), array( 'text' => esc_html__( 'Kiribati', 'sometextdomain' ), 'value' => 'Kiribati'), array( 'text' => esc_html__( 'Kuwait', 'sometextdomain' ), 'value' => 'Kuwait'), array( 'text' => esc_html__( 'Kyrgyzstan', 'sometextdomain' ), 'value' => 'Kyrgyzstan'), array( 'text' => esc_html__( 'Lao Peoples Democratic Republic', 'sometextdomain' ), 'value' => 'Lao Peoples Democratic Republic'), array( 'text' => esc_html__( 'Latvia', 'sometextdomain' ), 'value' => 'Latvia'), array( 'text' => esc_html__( 'Lebanon', 'sometextdomain' ), 'value' => 'Lebanon'), array( 'text' => esc_html__( 'Lesotho', 'sometextdomain' ), 'value' => 'Lesotho'), array( 'text' => esc_html__( 'Liberia', 'sometextdomain' ), 'value' => 'Liberia'), array( 'text' => esc_html__( 'Libya', 'sometextdomain' ), 'value' => 'Libya'), array( 'text' => esc_html__( 'Liechtenstein', 'sometextdomain' ), 'value' => 'Liechtenstein'), array( 'text' => esc_html__( 'Lithuania', 'sometextdomain' ), 'value' => 'Lithuania'), array( 'text' => esc_html__( 'Luxembourg', 'sometextdomain' ), 'value' => 'Luxembourg'), array( 'text' => esc_html__( 'Macau', 'sometextdomain' ), 'value' => 'Macau'), array( 'text' => esc_html__( 'Macedonia', 'sometextdomain' ), 'value' => 'Macedonia'), array( 'text' => esc_html__( 'Madagascar', 'sometextdomain' ), 'value' => 'Madagascar'), array( 'text' => esc_html__( 'Malawi', 'sometextdomain' ), 'value' => 'Malawi'), array( 'text' => esc_html__( 'Malaysia', 'sometextdomain' ), 'value' => 'Malaysia'), array( 'text' => esc_html__( 'Maldives', 'sometextdomain' ), 'value' => 'Maldives'), array( 'text' => esc_html__( 'Mali', 'sometextdomain' ), 'value' => 'Mali'), array( 'text' => esc_html__( 'Malta', 'sometextdomain' ), 'value' => 'Malta'), array( 'text' => esc_html__( 'Marshall Islands', 'sometextdomain' ), 'value' => 'Marshall Islands'), array( 'text' => esc_html__( 'Martinique', 'sometextdomain' ), 'value' => 'Martinique'), array( 'text' => esc_html__( 'Mauritania', 'sometextdomain' ), 'value' => 'Mauritania'), array( 'text' => esc_html__( 'Mauritius', 'sometextdomain' ), 'value' => 'Mauritius'), array( 'text' => esc_html__( 'Mayotte', 'sometextdomain' ), 'value' => 'Mayotte'), array( 'text' => esc_html__( 'Mexico', 'sometextdomain' ), 'value' => 'Mexico'), array( 'text' => esc_html__( 'Micronesia', 'sometextdomain' ), 'value' => 'Micronesia'), array( 'text' => esc_html__( 'Moldova', 'sometextdomain' ), 'value' => 'Moldova'), array( 'text' => esc_html__( 'Monaco', 'sometextdomain' ), 'value' => 'Monaco'), array( 'text' => esc_html__( 'Mongolia', 'sometextdomain' ), 'value' => 'Mongolia'), array( 'text' => esc_html__( 'Montenegro', 'sometextdomain' ), 'value' => 'Montenegro'), array( 'text' => esc_html__( 'Montserrat', 'sometextdomain' ), 'value' => 'Montserrat'), array( 'text' => esc_html__( 'Morocco', 'sometextdomain' ), 'value' => 'Morocco'), array( 'text' => esc_html__( 'Mozambique', 'sometextdomain' ), 'value' => 'Mozambique'), array( 'text' => esc_html__( 'Myanmar', 'sometextdomain' ), 'value' => 'Myanmar'), array( 'text' => esc_html__( 'Namibia', 'sometextdomain' ), 'value' => 'Namibia'), array( 'text' => esc_html__( 'Nauru', 'sometextdomain' ), 'value' => 'Nauru'), array( 'text' => esc_html__( 'Nepal', 'sometextdomain' ), 'value' => 'Nepal'), array( 'text' => esc_html__( 'Netherlands', 'sometextdomain' ), 'value' => 'Netherlands'), array( 'text' => esc_html__( 'New Caledonia', 'sometextdomain' ), 'value' => 'New Caledonia'), array( 'text' => esc_html__( 'New Zealand', 'sometextdomain' ), 'value' => 'New Zealand'), array( 'text' => esc_html__( 'Nicaragua', 'sometextdomain' ), 'value' => 'Nicaragua'), array( 'text' => esc_html__( 'Niger', 'sometextdomain' ), 'value' => 'Niger'), array( 'text' => esc_html__( 'Nigeria', 'sometextdomain' ), 'value' => 'Nigeria'), array( 'text' => esc_html__( 'Niue', 'sometextdomain' ), 'value' => 'Niue'), array( 'text' => esc_html__( 'Norfolk Island', 'sometextdomain' ), 'value' => 'Norfolk Island'), array( 'text' => esc_html__( 'North Korea', 'sometextdomain' ), 'value' => 'North Korea'), array( 'text' => esc_html__( 'Northern Mariana Islands', 'sometextdomain' ), 'value' => 'Northern Mariana Islands'), array( 'text' => esc_html__( 'Norway', 'sometextdomain' ), 'value' => 'Norway'), array( 'text' => esc_html__( 'Oman', 'sometextdomain' ), 'value' => 'Oman'), array( 'text' => esc_html__( 'Pakistan', 'sometextdomain' ), 'value' => 'Pakistan'), array( 'text' => esc_html__( 'Palau', 'sometextdomain' ), 'value' => 'Palau'), array( 'text' => esc_html__( 'Palestine, State of', 'sometextdomain' ), 'value' => 'Palestine, State of'), array( 'text' => esc_html__( 'Panama', 'sometextdomain' ), 'value' => 'Panama'), array( 'text' => esc_html__( 'Papua New Guinea', 'sometextdomain' ), 'value' => 'Papua New Guinea'), array( 'text' => esc_html__( 'Paraguay', 'sometextdomain' ), 'value' => 'Paraguay'), array( 'text' => esc_html__( 'Peru', 'sometextdomain' ), 'value' => 'Peru'), array( 'text' => esc_html__( 'Philippines', 'sometextdomain' ), 'value' => 'Philippines'), array( 'text' => esc_html__( 'Pitcairn', 'sometextdomain' ), 'value' => 'Pitcairn'), array( 'text' => esc_html__( 'Poland', 'sometextdomain' ), 'value' => 'Poland'), array( 'text' => esc_html__( 'Portugal', 'sometextdomain' ), 'value' => 'Portugal'), array( 'text' => esc_html__( 'Puerto Rico', 'sometextdomain' ), 'value' => 'Puerto Rico'), array( 'text' => esc_html__( 'Qatar', 'sometextdomain' ), 'value' => 'Qatar'), array( 'text' => esc_html__( 'Réunion', 'sometextdomain' ), 'value' => 'Réunion'), array( 'text' => esc_html__( 'Romania', 'sometextdomain' ), 'value' => 'Romania'), array( 'text' => esc_html__( 'Russia', 'sometextdomain' ), 'value' => 'Russia'), array( 'text' => esc_html__( 'Rwanda', 'sometextdomain' ), 'value' => 'Rwanda'), array( 'text' => esc_html__( 'Saint Barthélemy', 'sometextdomain' ), 'value' => 'Saint Barthélemy'), array( 'text' => esc_html__( 'Saint Helena', 'sometextdomain' ), 'value' => 'Saint Helena'), array( 'text' => esc_html__( 'Saint Kitts and Nevis', 'sometextdomain' ), 'value' => 'Saint Kitts and Nevis'), array( 'text' => esc_html__( 'Saint Lucia', 'sometextdomain' ), 'value' => 'Saint Lucia'), array( 'text' => esc_html__( 'Saint Martin', 'sometextdomain' ), 'value' => 'Saint Martin'), array( 'text' => esc_html__( 'Saint Pierre and Miquelon', 'sometextdomain' ), 'value' => 'Saint Pierre and Miquelon'), array( 'text' => esc_html__( 'Saint Vincent and the Grenadines', 'sometextdomain' ), 'value' => 'Saint Vincent and the Grenadines'), array( 'text' => esc_html__( 'Samoa', 'sometextdomain' ), 'value' => 'Samoa'), array( 'text' => esc_html__( 'San Marino', 'sometextdomain' ), 'value' => 'San Marino'), array( 'text' => esc_html__( 'Sao Tome and Principe', 'sometextdomain' ), 'value' => 'Sao Tome and Principe'), array( 'text' => esc_html__( 'Saudi Arabia', 'sometextdomain' ), 'value' => 'Saudi Arabia'), array( 'text' => esc_html__( 'Senegal', 'sometextdomain' ), 'value' => 'Senegal'), array( 'text' => esc_html__( 'Serbia', 'sometextdomain' ), 'value' => 'Serbia'), array( 'text' => esc_html__( 'Seychelles', 'sometextdomain' ), 'value' => 'Seychelles'), array( 'text' => esc_html__( 'Sierra Leone', 'sometextdomain' ), 'value' => 'Sierra Leone'), array( 'text' => esc_html__( 'Singapore', 'sometextdomain' ), 'value' => 'Singapore'), array( 'text' => esc_html__( 'Sint Maarten', 'sometextdomain' ), 'value' => 'Sint Maarten'), array( 'text' => esc_html__( 'Slovakia', 'sometextdomain' ), 'value' => 'Slovakia'), array( 'text' => esc_html__( 'Slovenia', 'sometextdomain' ), 'value' => 'Slovenia'), array( 'text' => esc_html__( 'Solomon Islands', 'sometextdomain' ), 'value' => 'Solomon Islands'), array( 'text' => esc_html__( 'Somalia', 'sometextdomain' ), 'value' => 'Somalia'), array( 'text' => esc_html__( 'South Africa', 'sometextdomain' ), 'value' => 'South Africa'), array( 'text' => esc_html__( 'South Georgia', 'sometextdomain' ), 'value' => 'South Georgia'), array( 'text' => esc_html__( 'South Korea', 'sometextdomain' ), 'value' => 'South Korea'), array( 'text' => esc_html__( 'South Sudan', 'sometextdomain' ), 'value' => 'South Sudan'), array( 'text' => esc_html__( 'Spain', 'sometextdomain' ), 'value' => 'Spain'), array( 'text' => esc_html__( 'Sri Lanka', 'sometextdomain' ), 'value' => 'Sri Lanka'), array( 'text' => esc_html__( 'Sudan', 'sometextdomain' ), 'value' => 'Sudan'), array( 'text' => esc_html__( 'Suriname', 'sometextdomain' ), 'value' => 'Suriname'), array( 'text' => esc_html__( 'Svalbard and Jan Mayen Islands', 'sometextdomain' ), 'value' => 'Svalbard and Jan Mayen Islands'), array( 'text' => esc_html__( 'Sweden', 'sometextdomain' ), 'value' => 'Sweden'), array( 'text' => esc_html__( 'Switzerland', 'sometextdomain' ), 'value' => 'Switzerland'), array( 'text' => esc_html__( 'Syria', 'sometextdomain' ), 'value' => 'Syria'), array( 'text' => esc_html__( 'Taiwan', 'sometextdomain' ), 'value' => 'Taiwan'), array( 'text' => esc_html__( 'Tajikistan', 'sometextdomain' ), 'value' => 'Tajikistan'), array( 'text' => esc_html__( 'Tanzania', 'sometextdomain' ), 'value' => 'Tanzania'), array( 'text' => esc_html__( 'Thailand', 'sometextdomain' ), 'value' => 'Thailand'), array( 'text' => esc_html__( 'Timor-Leste', 'sometextdomain' ), 'value' => 'Timor-Leste'), array( 'text' => esc_html__( 'Togo', 'sometextdomain' ), 'value' => 'Togo'), array( 'text' => esc_html__( 'Tokelau', 'sometextdomain' ), 'value' => 'Tokelau'), array( 'text' => esc_html__( 'Tonga', 'sometextdomain' ), 'value' => 'Tonga'), array( 'text' => esc_html__( 'Trinidad and Tobago', 'sometextdomain' ), 'value' => 'Trinidad and Tobago'), array( 'text' => esc_html__( 'Tunisia', 'sometextdomain' ), 'value' => 'Tunisia'), array( 'text' => esc_html__( 'Turkey', 'sometextdomain' ), 'value' => 'Turkey'), array( 'text' => esc_html__( 'Turkmenistan', 'sometextdomain' ), 'value' => 'Turkmenistan'), array( 'text' => esc_html__( 'Turks and Caicos Islands', 'sometextdomain' ), 'value' => 'Turks and Caicos Islands'), array( 'text' => esc_html__( 'Tuvalu', 'sometextdomain' ), 'value' => 'Tuvalu'), array( 'text' => esc_html__( 'Uganda', 'sometextdomain' ), 'value' => 'Uganda'), array( 'text' => esc_html__( 'Ukraine', 'sometextdomain' ), 'value' => 'Ukraine'), array( 'text' => esc_html__( 'United Arab Emirates', 'sometextdomain' ), 'value' => 'United Arab Emirates'), array( 'text' => esc_html__( 'United Kingdom', 'sometextdomain' ), 'value' => 'United Kingdom'), array( 'text' => esc_html__( 'United States', 'sometextdomain' ), 'value' => 'United States'), array( 'text' => esc_html__( 'Uruguay', 'sometextdomain' ), 'value' => 'Uruguay'), array( 'text' => esc_html__( 'US Minor Outlying Islands', 'sometextdomain' ), 'value' => 'US Minor Outlying Islands'), array( 'text' => esc_html__( 'Uzbekistan', 'sometextdomain' ), 'value' => 'Uzbekistan'), array( 'text' => esc_html__( 'Vanuatu', 'sometextdomain' ), 'value' => 'Vanuatu'), array( 'text' => esc_html__( 'Venezuela', 'sometextdomain' ), 'value' => 'Venezuela'), array( 'text' => esc_html__( 'Vietnam', 'sometextdomain' ), 'value' => 'Vietnam'), array( 'text' => esc_html__( 'Virgin Islands, British', 'sometextdomain' ), 'value' => 'Virgin Islands, British'), array( 'text' => esc_html__( 'Virgin Islands, U.S.', 'sometextdomain' ), 'value' => 'Virgin Islands, U.S.'), array( 'text' => esc_html__( 'Wallis and Futuna', 'sometextdomain' ), 'value' => 'Wallis and Futuna'), array( 'text' => esc_html__( 'Western Sahara', 'sometextdomain' ), 'value' => 'Western Sahara'), array( 'text' => esc_html__( 'Yemen', 'sometextdomain' ), 'value' => 'Yemen'), array( 'text' => esc_html__( 'Zambia', 'sometextdomain' ), 'value' => 'Zambia'), array( 'text' => esc_html__( 'Zimbabwe', 'sometextdomain' ), 'value' => 'Zimbabwe'), 
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
        'inputs' => array (
               array(  
                  "id" => "1005.1",
                  "label" => "Morning",
                  "name" => "Morning"
               ),
               array(   
                  "id" => "1005.2",
                  "label" => "Afternoon",
                  "name" => "Afternoon"
               ),
               array(   
                  "id" => "1005.3",
                  "label" => "Evening",
                  "name" => "Evening"
               ),
               array(   
                  "id" => "1005.4",
                  "label" => "No preference",
                  "name" => ""
               ),
               array(   
                  "id" => "1005.5",
                  "label" => "Will change from week to week",
                  "name" => ""
               ),
               array(   
                  "id" => "1005.6",
                  "label" => "Other",
                  "name" => ""
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
        'addButtonText'    => 'Add participant', // Optional
        'removeButtonText' => 'Remove participant', // Optional
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

/*
****************RETRIEVE DATA
*/

function get_gform_data(){
    $search_criteria = array(
    'status'        => 'active',
);
 
  $sorting         = array();
  $paging          = array( 'offset' => 0, 'page_size' => 200);
  $total_count     = 0;
 
  $entries = GFAPI::get_entries(11, $search_criteria, $sorting, $paging, $total_count );
  $raw = "";
  $gf_data = [];
  $html = '<table class="registered"><tr><th>Name</th><th>Location</th><th>Institute</th><th></th></tr>';
  foreach ($entries as $key => $value) { 
     $individuals = $value[1000];
     $school = $value[4];
        print("<pre>".print_r($value,true)."</pre>");

     foreach ($individuals as $key => $person){
       $location = $person[1001];
       $name = $person[1003];
       $time = array();
            // $person[1005.1], 
            // $person[1005.2], 
            // $person[1005.3],
            // $person[1005.4],  
            // $person[1005.5], 
            // $person[1005.6], 
            // $person[1005.7]    
       //$time = $person[1005.1];                      
       $time_string =  $person[1005.1]; //implode(", ",$time);
       $html .= '<tr><td>' . $name . '</td><td>' . $location . '</td><td>' . $school . '</td><td>'.$time_string.'</td></tr>';
     }
    
  }
      return $html . '</table>';

     //return $tag_data;
}

add_shortcode( 'gf_data', 'get_gform_data' );
