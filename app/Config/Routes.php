<?php

namespace Config;

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).s
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/Home', 'Home::index');
// ini routes untuk user
$routes->group('user', ['namespace' => "App\Controllers\user", 'filter' => 'auth_filter'], function ($user) {
    $user->get('/', "PagesController::index");
    $user->get('home', "PagesController::home");

    $user->get('contact', "PagesController::contact");
    $user->post('contact', "PagesController::simpanPelayanan");

    $user->get('shop', "PagesController::shop");
    $user->get('shop/(:any)', "PagesController::shopDesc/$1");


    $user->get("payment/(:num)", "PagesController::payment/$1");
    $user->post("daftar/(:num)", "PagesController::daftar/$1");


    // $user->get("keranjang", "PagesController::keranjang");
    // $user->post("cart/(:any)", "PagesController::addCart/$1");
    // $user->get("clear", "PagesController::clear");
    // $user->post("cart/(:any)", "PagesController::updateCart/$1");
    // $user->delete("delateCart/(:any)", "PagesController::delateCart/$1");

    // $user->get("cart", "PagesController::cart");
    

});
// ini routes untuk admin
$routes->group('admin', ['namespace' => "App\Controllers\admin", 'filter' => 'auth_filter'], function ($admin) {
    $admin->get("/", "TicketController::index");
    $admin->get("dashboard", "TicketController::dashboard");

    $admin->get("daftar", "TicketController::daftar");
    $admin->delete("daftar/(:any)", "TicketController::hapusPendaftar/$1");
    $admin->get('daftar/(:any)', "TicketController::detailDaftar/$1");

    // $admin->get('formeditDaftar/(:any)', "TicketController::formeditDaftar/$1");
    // $admin->patch('formeditDaftar/(:any)', "TicketController::updatedataDaftar/$1");

    $admin->get("Tiket", "TicketController::Tiket");
    $admin->delete("Tiket/(:any)", "TicketController::hapusTiket/$1");
    $admin->get('Tiket/(:any)', "TicketController::detailTiket/$1");

    $admin->get('formeditTiket/(:any)', 'TicketController::formeditTiket/$1');
    $admin->post('formeditTiket/(:any)', 'TicketController::updatedataTiket/$1');
    

    $admin->get("upload", "TicketController::upload");
    $admin->post("upload", "TicketController::uploadTiket");

    $admin->get("pelayanan", "TicketController::pelayanan");
    $admin->delete("pelayanan/(:any)", "TicketController::hapusPelayanan/$1");
    $admin->get('pelayanan/(:any)', "TicketController::detailPelayanan/$1");

    $admin->get("grafik", "TicketController::grafik");
    $admin->add("print", "TicketController::print");
    $admin->add("chart", "TicketController::chart");

    $admin->add('laporanByDate', 'TicketController::laporanByDate');
    
});

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
