<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Manager::index');

$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/(:num)', 'Admin::detail/$1', ['filter' => 'role:admin']);

$routes->get('/manager', 'Manager::index', ['filter' => 'role:manager']);
$routes->get('/manager/index', 'Manager::index', ['filter' => 'role:manager']);

$routes->get('/produksi', 'Produksi::index', ['filter' => 'role:produksi']);
$routes->get('/produksi/index', 'Produksi::index', ['filter' => 'role:produksi']);

//PENJUALAN
$routes->get('/penjualan', 'Penjualan::index', ['filter' => 'role:manager']);
$routes->get('/penjualan/index', 'Penjualan::index', ['filter' => 'role:manager']);
//PENJUALAN -> Master Sales
$routes->get('/penjualan/masterSales', 'Penjualan::masterSales', ['filter' => 'role:manager']);
$routes->get('/penjualan/tambahMasterSales', 'Penjualan::tambahMasterSales', ['filter' => 'role:manager']);
$routes->add('/penjualan/simpanMasterSales', 'Penjualan::simpanMasterSales', ['filter' => 'role:manager']);
$routes->add('/penjualan/editMasterSales/(.*)', 'Penjualan::editMasterSales/$1', ['filter' => 'role:manager']);
$routes->put('/penjualan/updateMasterSales/(.*)', 'Penjualan::updateMasterSales/$1', ['filter' => 'role:manager']);
$routes->delete('/penjualan/deleteMasterSales/(.*)', 'Penjualan::deleteMasterSales/$1');
//PENJUALAN -> Master Customer
$routes->get('/penjualan/masterCustomer', 'Penjualan::masterCustomer', ['filter' => 'role:manager']);
$routes->get('/penjualan/tambahMasterCustomer', 'Penjualan::tambahMasterCustomer', ['filter' => 'role:manager']);
$routes->add('/penjualan/simpanMasterCustomer', 'Penjualan::simpanMasterCustomer', ['filter' => 'role:manager']);
$routes->add('/penjualan/editMasterCustomer/(.*)', 'Penjualan::editMasterCustomer/$1', ['filter' => 'role:manager']);
$routes->put('/penjualan/updateMasterCustomer/(.*)', 'Penjualan::updateMasterCustomer/$1', ['filter' => 'role:manager']);
$routes->delete('/penjualan/deleteMasterCustomer/(.*)', 'Penjualan::deleteMasterCustomer/$1');
//PENJUALAN -> Parameter Biaya
$routes->get('/penjualan/parameterBiaya', 'Penjualan::parameterBiaya', ['filter' => 'role:manager']);
$routes->get('/penjualan/tambahParameterBiaya', 'Penjualan::tambahParameterBiaya', ['filter' => 'role:manager']);
$routes->add('/penjualan/simpanParameterBiaya', 'Penjualan::simpanParameterBiaya', ['filter' => 'role:manager']);
$routes->add('/penjualan/editParameterBiaya/(.*)', 'Penjualan::editParameterBiaya/$1', ['filter' => 'role:manager']);
$routes->put('/penjualan/updateParameterBiaya/(.*)', 'Penjualan::updateParameterBiaya/$1', ['filter' => 'role:manager']);
$routes->delete('/penjualan/deleteParameterBiaya/(.*)', 'Penjualan::deleteParameterBiaya/$1');
//PENJUALAN -> Hitung Harga
$routes->get('/penjualan/hitungHarga', 'Penjualan::hitungHarga', ['filter' => 'role:manager']);
$routes->get('/penjualan/tambahHitungHarga', 'Penjualan::tambahHitungHarga', ['filter' => 'role:manager']);
$routes->add('/penjualan/simpanHitungHarga', 'Penjualan::simpanHitungHarga', ['filter' => 'role:manager']);
$routes->add('/penjualan/editHitungHarga/(.*)', 'Penjualan::editHitungHarga/$1', ['filter' => 'role:manager']);
$routes->put('/penjualan/updateHitungHarga/(.*)', 'Penjualan::updateHitungHarga/$1', ['filter' => 'role:manager']);
$routes->delete('/penjualan/deleteHitungHarga/(.*)', 'Penjualan::deleteHitungHarga/$1');
//PENJUALAN -> Penawaran Harga
$routes->get('/penjualan/penawaranHarga', 'Penjualan::penawaranHarga', ['filter' => 'role:manager']);
$routes->get('/penjualan/tambahPenawaranHarga', 'Penjualan::tambahPenawaranHarga', ['filter' => 'role:manager']);
$routes->add('/penjualan/simpanPenawaranHarga', 'Penjualan::simpanPenawaranHarga', ['filter' => 'role:manager']);
$routes->add('/penjualan/editPenawaranHarga/(.*)', 'Penjualan::editPenawaranHarga/$1', ['filter' => 'role:manager']);
$routes->put('/penjualan/updatePenawaranHarga/(.*)', 'Penjualan::updatePenawaranHarga/$1', ['filter' => 'role:manager']);
$routes->delete('/penjualan/deletePenawaranHarga/(.*)', 'Penjualan::deletePenawaranHarga/$1');
//PENJUALAN -> Sales Order
$routes->get('/penjualan/salesOrder', 'Penjualan::salesOrder', ['filter' => 'role:manager']);
$routes->get('/penjualan/tambahSalesOrder/(.*)', 'Penjualan::tambahSalesOrder/$1', ['filter' => 'role:manager']);
$routes->add('/penjualan/simpanSalesOrder', 'Penjualan::simpanSalesOrder', ['filter' => 'role:manager']);
$routes->put('/penjualan/updateSalesOrder/(.*)', 'Penjualan::updateSalesOrder/$1', ['filter' => 'role:manager']);
$routes->add('/penjualan/editSalesOrder/(.*)', 'Penjualan::editSalesOrder/$1', ['filter' => 'role:manager']);
$routes->delete('/penjualan/deleteSalesOrder/(.*)', 'Penjualan::deleteSalesOrder/$1');
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
