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
| $route['translate_uri_dashes'] = FALSE;
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
$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//Customs

/*==== Controller: User ====*/
$route['sign-in'] 			= 'user/signin';
$route['forgot-password'] 	= 'user/forgot_password';
$route['my-profile'] 		= 'user/my_profile';

/*==== Controller: Kagiatan ====*/
$route['daftar-kegiatan'] 				= 'kegiatan';
$route['ubah-data-kegiatan/(:num)'] 	= 'kegiatan/edit_kegiatan/$1';
$route['daftar-sub-kegiatan'] 			= 'kegiatan/sub_kegiatan';
$route['ubah-data-kabupaten/(:num)']	= 'location/edit_kabupaten/$1';
$route['daftar-kecamatan'] 				= 'location/kecamatan';
$route['daftar-desa'] 					= 'location/desa';

/*==== Controller: Location ====*/
$route['daftar-provinsi'] 				= 'location/provinsi';
$route['ubah-data-provinsi/(:num)'] 	= 'location/edit_provinsi/$1';
$route['daftar-kabupaten'] 				= 'location/kabupaten';
$route['ubah-data-kabupaten/(:num)']	= 'location/edit_kabupaten/$1';
$route['daftar-kecamatan'] 				= 'location/kecamatan';
$route['daftar-desa'] 					= 'location/desa';

/*==== Controller: Employee ====*/
$route['daftar-pegawai'] 				= 'employee/list_employee';
$route['rincian-pegawai/(:num)/(:num)'] = 'employee/detail_employee/$1/$2';
$route['tambah-pegawai'] 				= 'employee/add_employee';
$route['hak-akses-pegawai'] 			= 'employee/user_group';
$route['ubah-hak-akses-pegawai/(:num)']	= 'employee/edit_user_group/$1';

/*==== Controller: Proposal ====*/
$route['daftar-proposal'] 				= 'proposal';
$route['rincian-proposal/(:any)/(:num)']= 'proposal/detail/$1/$2';
$route['tambah-proposal'] 				= 'proposal/create_proposal';
$route['draft-proposal'] 				= 'proposal/list_proposal_draft';
$route['draft-proposal/berkas/(:num)'] 	= 'proposal/upload_approval/$1';