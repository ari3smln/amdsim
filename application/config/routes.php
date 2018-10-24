<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['Halaman_Utama'] = 'dashboard/index';

$route['cara-login'] = 'login/index';
$route['logout'] = 'login/logout';

//modul surat masuk
$route['surat_masuk'] = 'surat_masuk/index';
$route['surat_masuk/add'] = 'surat_masuk/add';
$route['surat_masuk/edit/:any'] = 'surat_masuk/edit/$1';
$route['surat_masuk/delete/:any'] = 'surat_masuk/delete/$1';

//modul surat keluar
$route['surat_keluar'] = 'surat_keluar/index';
$route['surat_keluar/add'] = 'surat_keluar/add';
$route['surat_keluar/edit/:any'] = 'surat_keluar/edit/$1';
$route['surat_keluar/delete/:any'] = 'surat_keluar/delete/$1';

//modul draft
$route['draft'] = 'draft/index';
$route['draft/add'] = 'draft/add';
$route['draft/edit/:any'] = 'draft/edit/$1';
$route['draft/delete/:any'] = 'draft/delete/$1';


//modul jenis surat
$route['jenis_surat'] = 'jenis_surat/index';
$route['jenis_surat/add'] = 'jenis_surat/add';
$route['jenis_surat/edit/:any'] = 'jenis_surat/edit/$1';
$route['jenis_surat/delete/:any'] = 'jenis_surat/delete/$1';

//modul laporan surat masuk
$route['lap_surat_masuk'] = 'laporan/surat_masuk';

//modul laporan surat keluar
$route['lap_surat_keluar'] = 'laporan/surat_keluar';

//modul kelola users
$route['kelola_user'] = 'kelola_user/index';
$route['kelola_user/add'] = 'kelola_user/add';
$route['kelola_user/edit/:any'] = 'kelola_user/edit/$1';
$route['kelola_user/delete/:any'] = 'kelola_user/delete/$1';