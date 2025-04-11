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

//$route['admin'] = 'admin/dashboard';
$route['default_controller'] = 'homeservice';
$route['contact'] = 'homeservice/contact';
$route['about'] = 'homeservice/about';
$route['service'] = 'homeservice/service';
$route['our_team'] = 'homeservice/our_team';
$route['term_condition'] = 'homeservice/term_condition';
$route['privacy_policy'] = 'homeservice/privacy_policy';
$route['blog'] = 'homeservice/blog';
$route['our_team']='homeservice/our_team';
$route['blog_description'] = 'homeservice/blog_description';
$route['serviceorder'] = 'homeservice/serviceorder';
$route['serviceorders'] = 'homeservice/serviceorders';
$route['leavereply'] = 'homeservice/leavereply';
$route['contactsave'] = 'homeservice/contactsave';
$route['admission_news'] = 'homeservice/admission_news';
$route['filters'] = 'homeservice/fetch';

// /////////////////////////////////////////

// $route['cookie_policy'] = 'homeservice/cookie_policy';
// $route['refund_policy'] = 'homeservice/refund_policy';

$route['admin'] = 'admin/login';
$route['user'] = 'admin/login/user';
$route['user/franchise_order_list'] = 'admin/login/franchise_order_list';
$route['user/frachise_order_add'] = 'admin/login/frachise_order_add';

$route['logout']= 'homeservice/userlogout';
$route['myorder']= 'homeservice/myorder';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
