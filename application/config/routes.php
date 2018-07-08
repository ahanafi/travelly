<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'front';
$route['404_override'] = 'errors/_show404';
$route['translate_uri_dashes'] = TRUE;

/* ==================================
		FRONT END ROUTES
================================== */
$route['profile'] = 'front/profile';
$route['visi-misi'] = 'front/visi_misi';
$route['product/(:any)'] = 'front/product/$1';
$route['product'] = 'front/product';
$route['search'] = 'front/search';

/* ==================================
		ADMINISTRATOR ROUTES
================================== */

//Auth controller
$route['dashboard/logout'] = 'auth/logout';

//Profile Route
$route['dashboard/profile'] = 'profile/index';
$route['dashboard/profile/create'] = 'profile/create';
$route['dashboard/profile/edit/([0-9])'] = 'profile/edit/$1';
$route['dashboard/profile/update/([0-9])'] = 'profile/update/$1';
$route['dashboard/profile/delete/([0-9])'] = 'profile/delete/$1';

//Visi Misi Route
$route['dashboard/visi-misi'] = 'visimisi/index';
$route['dashboard/visi-misi/create'] = 'visimisi/create';
$route['dashboard/visi-misi/edit/([0-9])'] = 'visimisi/edit/$1';
$route['dashboard/visi-misi/update/([0-9])'] = 'visimisi/update/$1';
$route['dashboard/visi-misi/delete/([0-9])'] = 'visimisi/delete/$1';

//Product Route
$route['dashboard/product'] = 'product/index';
$route['dashboard/product/create'] = 'product/create';
$route['dashboard/product/edit/([0-9])'] = 'product/edit/$1';
$route['dashboard/product/update/([0-9])'] = 'product/update/$1';
$route['dashboard/product/delete/([0-9])'] = 'product/delete/$1';

//User Route
$route['dashboard/users'] = 'users/index';
$route['dashboard/users/create'] = 'users/create';
$route['dashboard/users/edit/([0-9])'] = 'users/edit/$1';
$route['dashboard/users/update/([0-9])'] = 'users/update/$1';
$route['dashboard/users/delete/([0-9])'] = 'users/delete/$1';

$route['product/index'] = function() {
	redirect(base_url('/'));
};