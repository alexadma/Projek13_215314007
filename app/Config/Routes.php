<?php

namespace Config;

use App\Controllers\News;
use App\Controllers\Pages;
use App\Controllers\AsistenController;
use App\Controllers\login;
use App\Controllers\loginAsisten;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'ToDoList::index');

// $routes->get('/home', 'Home::index');


// $routes->get('news/(:segment)', [News::class, 'view']);
// $routes->get('news', [News::class, 'index']);
// $routes->get('pages', [Pages::class, 'index']);
// $routes->get('(:segment)', [Pages::class, 'view']);

// $routes->get('/', 'Home::index');
// $routes->get('/biodata', 'Biodata::index');
// $routes->get('/input_message', 'Message::index');
// $routes->get('/input_message/show_message', 'Message::index');

$routes->get('/', 'Home::index');
$routes->get('/Asisten', 'AsistenController::index');

$routes->match(['get', 'post'],'asisten/simpan',[AsistenController::class, 'simpan']);
$routes->match(['get', 'post'],'asisten/update',[AsistenController::class, 'edit']);
$routes->match(['get', 'post'],'asisten/delete',[AsistenController::class, 'delete']);
$routes->match(['get', 'post'],'asisten/search',[AsistenController::class, 'search']);
$routes->match(['get', 'post'],'asisten/check',[loginAsisten::class, 'check']);

$routes->get('/login', [loginAsisten::class, 'index']);
$routes->get('/login/home', [loginAsisten::class, 'home']);
$routes->get('/login/logout', [loginAsisten::class, 'logout']);



// $routes->match(['get', 'post'], 'news/create', [News::class, 'create']);
// $routes->get('news/(:segment)', [News::class, 'view']);
// $routes->get('news', [News::class, 'index']);
// $routes->get('pages', [Pages::class, 'index']);
// $routes->get('(:segment)', [Pages::class, 'view']);


// $routes->get('/', 'Home::index');
// $routes->get('/biodata', 'Biodata::index');
// $routes->get('/input_message', 'Message::index');
// $routes->get('/input_message/show_message', 'Message::index');
// $routes->match(['get','post'],'login/check',[login::class,'check']);
// $routes->get('login/home',[login::class,'home']);
// $routes->get('login/logout',[login::class,'logout']);
// $routes->get('login','Login::index');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
