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
* Layout
*
*/
$config['BACKEND_EDIT_WIDTH'] = 'col-md-10 col-md-offset-1';


/**
* Languages
*
*/
$config['SITE_LANGUAGES_DEFAULT'] = 'de';
$config['SITE_LANGUAGES_ENABLED'] = array('de','en');



/**
* Company information
*
*/
$config['COMPANY_NAME'] = "JS App";
$config['COMPANY_ADDRESS_1'] = "Route de Geneve 14"; 
$config['COMPANY_ADDRESS_2'] = "CH-1003 Lausanne";
$config['COMPANY_PHONE'] = "+418888888";
$config['COMPANY_SITE'] = "http://company.ch";
$config['COMPANY_EMAIL'] = "mail@loz.ch";
$config['YEAR'] = date('Y');


/**
 * Database Table Constants - these constants
 * hold the names of all the database tables used
 * in the script.
 */
$config['TBL_USERS'] = "app_users";
$config['TBL_ACTIVE_USERS'] =  "app_active_users";
$config['TBL_ACTIVE_GUESTS'] = "app_active_guests";
$config['TBL_BANNED_USERS'] =  "app_banned_users";

/**
 * Special Names and Level Constants - the admin
 * page will only be accessible to the user with
 * the admin name and also to those users at the
 * admin user level. Feel free to change the names
 * and level constants as you see fit, you may
 * also add additional level specifications.
 * Levels must be digits between 0-9.
 */
$config['ADMIN_NAME'] = "webmaster";
$config['GUEST_NAME'] = "Guest";
$config['ADMIN_LEVEL'] = 9;
$config['BOSS_LEVEL'] = 3;
$config['MANAGER_LEVEL'] = 2;
$config['USER_LEVEL'] = 1;
$config['GUEST_LEVEL'] = 0;

/**
 * This boolean constant controls whether or
 * not the script keeps track of active users
 * and active guests who are visiting the site.
 */
$config['TRACK_VISITORS'] = true;

/**
 * Timeout Constants - these constants refer to
 * the maximum amount of time (in minutes) after
 * their last page fresh that a user and guest
 * are still considered active visitors.
 */
$config['USER_TIMEOUT'] = 10;
$config['GUEST_TIMEOUT'] = 5;

/**
 * Cookie Constants - these are the parameters
 * to the setcookie function call, change them
 * if necessary to fit your website. If you need
 * help, visit www.php.net for more info.
 * <http://www.php.net/manual/en/function.setcookie.php>
 */
// $config['COOKIE_EXPIRE'] = 60*60*24*100;  //100 days by defaut
// $config['COOKIE_PATH'] = "/";  //Avaible in whole doman

/**
 * Email Constants - these specify what goes in
 * the from field in the emails that the script
 * sends to users, and whether to send a
 * welcome email to newly registered users.
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
 * This constant forces all users to have
 * lowercase usernames, capital letters are
 * converted automatically.
 */
$config['ALL_LOWERCASE'] = false;


/**
 * The code to input for registering
 * 
 * 
 */
$config['AUTH_WORK_CODE'] = "1234";

/**
* Social Media
*
*
*/
$config['FACEBOOK_PAGE'] ="http://www.facebook.com/";
$config['TWITTER_PAGE'] ="https://twitter.com/";



/* End of file site_config.php */
/* Location: ./application/config/config.php */
