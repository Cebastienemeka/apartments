<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about_us', 'About::index');
$routes->get('apartment', 'Apartment::index');
$routes->get('contact', 'Contact::index');
$routes->post('submit', 'Contact::submit');
$routes->get('register_apartment', 'Register_Apart::index');
$routes->post('register_apart', 'Register_Apart::register_apart');
$routes->get('register_apart', 'Register_Apart::register_apart');
$routes->get('login', 'Login::index');
$routes->post('login', 'Login::login');
$routes->get('user/profiledash', 'Profile::index');
$routes->post('process-payment', 'Profile::index');
$routes->get('search_view', 'Search::index');
$routes->get('search/searchData', 'Search::searchData');
// $routes->get('user/profiledash/(:num)', 'Profile::index/$1');



