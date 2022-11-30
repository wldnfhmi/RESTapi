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
|	https://codeigniter.com/userguide3/general/routing.html
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
| When you set this option to TRUE, it will replace ALL dashes with
| underscores in the controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['api/mahasiswa']='api/GetMahasiswa/index';
$route['api/mahasiswa/nim/(:any)']='api/GetMahasiswa/MahasiswaById/$1';
$route['api/mahasiswa/add']='api/GetMahasiswa/AddMahasiswa';
$route['api/mahasiswa/update/(:any)']='api/GetMahasiswa/UpdateMahasiswa/$1';
$route['api/mahasiswa/delete/(:any)']='api/GetMahasiswa/DeleteMahasiswa/$1';

// ------------------------------------------------------------------------
$route['api/penduduk']='api/GetPenduduk/index';
$route['api/penduduk/nik/(:any)']='api/GetPenduduk/PendudukByNik/$1';
$route['api/penduduk/nama/(:any)']='api/GetPenduduk/PendudukByNama/$1';
$route['api/penduduk/kelahiran/(:any)']='api/GetPenduduk/PendudukByKelahiran/$1';
$route['api/penduduk/gender/(:any)']='api/GetPenduduk/PendudukByGender/$1';
$route['api/penduduk/rt/(:any)']='api/GetPenduduk/PendudukByRt/$1';
$route['api/penduduk/agama/(:any)']='api/GetPenduduk/PendudukByAgama/$1';


$route['api/penduduk/add']='api/GetPenduduk/AddPenduduk';


$route['api/penduduk/update/(:any)']='api/GetPenduduk/UpdatePenduduk/$1';


$route['api/penduduk/delete/(:any)']='api/GetPenduduk/DeletePenduduk/$1';