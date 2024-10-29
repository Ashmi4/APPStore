<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'StarAdmin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['Contact'] = 'StarAdmin/contact';
$route['Apps'] = 'StarAdmin/apps';
//$route['App/(:any)'] = 'StarAdmin/apps/$1';
$route['StarAdmin/index'] = 'StarAdmin/Home';
$route['Wishlist'] = 'StarAdmin/favourite';
$route['Myaccount'] = 'StarAdmin/myaccount_edit_form';
$route['Register'] = 'StarAdmin/register';
$route['Search'] = 'StarAdmin/search';
$route['Apps/topdownload'] = 'StarAdmin/top_down';
$route['Apps/new'] = 'StarAdmin/new_releses';
$route['Apps/top'] = 'StarAdmin/top_rating';
$route['How-to-install-apk'] = 'StarAdmin/apk_how_install';
$route['Forgot-password'] = 'StarAdmin/forget_pass';
$route['Login'] = 'StarAdmin/login';
$route['Verify'] = 'StarAdmin/Saveforget_pass';
$route['Verify1'] = 'StarAdmin/Saveforget_pass11';
$route['Verify_token'] = 'StarAdmin/forget_pass1';
$route['Verify_token1'] = 'StarAdmin/Saveforget_pass1';
$route['Reset_password'] = 'StarAdmin/forget_pass2';
$route['LoginCheck'] = 'StarAdmin/LoginCheck';
$route['Logout'] = 'StarAdmin/Logout';
$route['Logout1'] = 'StarAdmin/Logout1';
$route['loginn/(:any)'] = 'StarAdmin/loginn/$1';
$route['Apps/top/collection'] = 'StarAdmin/top_rating';
$route['Apps/topdownload/collection'] = 'StarAdmin/top_down';
$route['Apps/collection'] = 'StarAdmin/down_user';
$route['Apps/details/(:any)'] = 'StarAdmin/preview/$1';
$route['Category/(:any)'] = 'StarAdmin/cat_app/$1';
$route['DeleteWish/(:any)'] = 'StarAdmin/DeleteWish/$1';
$route['loginn1'] = 'StarAdmin/savedownload';
$route['Apk/(:any)'] = 'StarAdmin/apk/$1';
$route['Register/(:any)'] = 'StarAdmin/registerr/$1';
$route['Myaccount_edit/(:any)'] = 'StarAdmin/myaccount_edit_formm/$1';
 $route['Forgot_password/(:any)'] = '/StarAdmin/Saveforget_pass_a/$1';
 $route['Reset-password/(:any)'] = '/StarAdmin/Saveforget_pass_a1/$1';
 $route['Wrong-password/(:any)'] = '/StarAdmin/Saveforget_pass_a11/$1';
