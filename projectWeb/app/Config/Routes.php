<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Pages');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Pages::index', ['filter' => 'authFilter']);
$routes->get('/dashboard', 'Pages::dashboard');

$routes->get('/signin', 'user::signin');
$routes->get('/signup', 'user::signup');
$routes->get('/user/login', 'user::login');
$routes->get('/user/edit/(:num)', 'user::edit/$1');
$routes->match(['get', 'post'], '/user/login', 'user::login');
$routes->match(['get', 'post'], '/user/regis', 'user::regis');

$routes->get('/about', 'Pages::about');
$routes->get('/news', 'Pages::news');
$routes->get('/user/subject', 'Pages::subject');
// $routes->get('/user/subject', 'Pages::subject' ['filter' => 'authFilter']);
$routes->get('/user/science', 'Pages::science');
$routes->get('/user/social', 'Pages::social');
$routes->get('/science/math', 'Science::math');
$routes->get('/science/physics', 'Science::physics');
$routes->get('/science/chemistry', 'Science::chemistry');
$routes->get('/science/biology', 'Science::biology');

$routes->get('/user/language', 'Language::index');
$routes->get('/social/economics', 'Social::economics');
$routes->get('/social/history', 'Social::history');
$routes->get('/social/geography', 'Social::geography');
$routes->get('/social/sociology', 'Social::sociology');

$routes->get('/math/chapter1', 'Math::chapter1');
$routes->get('/math/chapter2', 'Math::chapter2');
$routes->get('/math/chapter3', 'Math::chapter3');
$routes->get('/math/chapter4', 'Math::chapter4');
$routes->get('/math/chapter5', 'Math::chapter5');

$routes->get('/physics/chapter1', 'Physics::chapter1');
$routes->get('/physics/chapter2', 'Physics::chapter2');
$routes->get('/physics/chapter3', 'Physics::chapter3');
$routes->get('/physics/chapter4', 'Physics::chapter4');
$routes->get('/physics/chapter5', 'Physics::chapter5');

$routes->get('/chemistry/chapter1', 'Chemistry::chapter1');
$routes->get('/chemistry/chapter2', 'Chemistry::chapter2');
$routes->get('/chemistry/chapter3', 'Chemistry::chapter3');
$routes->get('/chemistry/chapter4', 'Chemistry::chapter4');
$routes->get('/chemistry/chapter5', 'Chemistry::chapter5');

$routes->get('/biology/chapter1', 'Biology::chapter1');
$routes->get('/biology/chapter2', 'Biology::chapter2');
$routes->get('/biology/chapter3', 'Biology::chapter3');
$routes->get('/biology/chapter4', 'Biology::chapter4');
$routes->get('/biology/chapter5', 'Biology::chapter5');

$routes->get('/economics/chapter1', 'Economics::chapter1');
$routes->get('/economics/chapter2', 'Economics::chapter2');
$routes->get('/economics/chapter3', 'Economics::chapter3');
$routes->get('/economics/chapter4', 'Economics::chapter4');
$routes->get('/economics/chapter5', 'Economics::chapter5');

$routes->get('/history/chapter1', 'History::chapter1');
$routes->get('/history/chapter2', 'History::chapter2');
$routes->get('/history/chapter3', 'History::chapter3');
$routes->get('/history/chapter4', 'History::chapter4');
$routes->get('/history/chapter5', 'History::chapter5');

$routes->get('/geography/chapter1', 'Geography::chapter1');
$routes->get('/geography/chapter2', 'Geography::chapter2');
$routes->get('/geography/chapter3', 'Geography::chapter3');
$routes->get('/geography/chapter4', 'Geography::chapter4');
$routes->get('/geography/chapter5', 'Geography::chapter5');

$routes->get('/sociology/chapter1', 'Sociology::chapter1');
$routes->get('/sociology/chapter2', 'Sociology::chapter2');
$routes->get('/sociology/chapter3', 'Sociology::chapter3');
$routes->get('/sociology/chapter4', 'Sociology::chapter4');
$routes->get('/sociology/chapter5', 'Sociology::chapter5');

$routes->get('/english/chapter1', 'English::chapter1');
$routes->get('/english/chapter2', 'English::chapter2');
$routes->get('/english/chapter3', 'English::chapter3');
$routes->get('/english/chapter4', 'English::chapter4');
$routes->get('/english/chapter5', 'English::chapter5');

$routes->get('/indonesia/chapter1', 'Indonesian::chapter1');
$routes->get('/indonesia/chapter2', 'Indonesian::chapter2');
$routes->get('/indonesia/chapter3', 'Indonesian::chapter3');
$routes->get('/indonesia/chapter4', 'Indonesian::chapter4');
$routes->get('/indonesia/chapter5', 'Indonesian::chapter5');
/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
