<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Site specific configuration
|--------------------------------------------------------------------------
|
| Contact constants, phone, email, etc.
|
*/
date_default_timezone_set('Europe/Berlin');


/**
* Company information
*
*/
$config['SITE_TITLE'] = "App";
$config['SITE_DESCRIPTION'] = "App description";


$config['COMPANY_NAME'] = "JS App";
$config['COMPANY_ADDRESS_1'] = "Route de Geneve 14"; 
$config['COMPANY_ADDRESS_2'] = "CH-1003 Lausanne";
$config['COMPANY_PHONE'] = "+418888888";
$config['COMPANY_SITE'] = "http://company.ch";
$config['COMPANY_EMAIL'] = "mail@loz.ch";
$config['YEAR'] = date('Y');


/**
 * Email Constants - these specify what goes in
 * the from field in the emails that the script
 * sends to users.
 */
$config['EMAIL_FROM_NAME'] = "App";
$config['EMAIL_FROM_ADDR'] = "info@webdesignandphoto.com";
$config['EMAIL_SMTP_HOST'] = "mail.webdesignandphoto.com";
$config['EMAIL_SMTP_PORT'] = 587;
$config['EMAIL_SMTP_SECURE'] = "tls";
$config['EMAIL_SMTP_USERNAME'] = "info@webdesignandphoto.com";
$config['EMAIL_SMTP_PASSWORD'] = "OttoVonLozan87...W";
$config['EMAIL_WELCOME'] = true;//set this false if you do not want your users to receive a welcome Email after registratin


/**
* Languages
*
*/
$config['SITE_LANGUAGES_DEFAULT'] = 'de';
$config['SITE_LANGUAGES_ENABLED'] = array('de','en');


/*
* Google analytics code
* 
*/
$config['GOOGLE_ANALYTICS'] = 'UA-44278524-1';


/**
* Social Media
*
*
*/
$config['FACEBOOK_PAGE'] ="http://www.facebook.com/";
$config['TWITTER_PAGE'] ="https://twitter.com/";



/**
* Layout
*
*/
$config['BACKEND_MAIN_CONTENT_WIDTH'] = 'col-md-10 col-md-offset-1';
$config['BACKEND_MAIN_CONTENT_WIDTH_SIDEBAR'] = 'col-md-9';
$config['BACKEND_SIDEBAR_WIDTH'] = 'col-md-2';

/**
* Buttons
*
*/
$config['NEW_TXT'] = 'New';
$config['NEW_BTN'] = 'btn btn btn-success';
$config['NEW_ICON'] = '<span class="glyphicon glyphicon-plus"></span>';

$config['EDIT_TXT'] = 'Edit';
$config['EDIT_BTN'] = 'btn btn-sm btn-info';
$config['EDIT_ICON'] = '<span class="glyphicon glyphicon-pencil"></span>';

$config['SAVE_TXT'] = 'Save';
$config['SAVE_BTN'] = 'btn btn-success';
$config['SAVE_ICON'] = '<span class="glyphicon glyphicon-ok"></span>';

$config['CANCEL_TXT'] = 'Cancel';
$config['CANCEL_BTN'] = 'btn btn-default';

$config['DEL_TXT'] = 'Delete';
$config['DEL_BTN'] = 'btn btn-danger';
$config['DEL_ICON'] = '<span class="glyphicon glyphicon-trash"></span>';


/* End of file site_config.php */
/* Location: ./application/config/config.php */
