<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require 'admin.php';
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::view('/admin', 'admin.dashboard.index');
// Route::view('/blankpage', 'admin.dashboard.blank-page');
// Route::view('/charts', 'admin.dashboard.charts');
// Route::view('/fcomponentes', 'admin.dashboard.form-components');
// Route::view('/fcustom', 'admin.dashboard.form-custom');
// Route::view('/fnotifications', 'admin.dashboard.form-notifications');
// Route::view('/fsamples', 'admin.dashboard.form-samples');
// Route::view('/puser', 'admin.dashboard.page-user');
// Route::view('/perror', 'admin.dashboard.page-error');
// Route::view('/pinvoice', 'admin.dashboard.page-invoice');
// Route::view('/pmailbox', 'admin.dashboard.page-mailbox');
// Route::view('/pcalender', 'admin.dashboard.pages-calender');
// Route::view('/tbasic', 'admin.dashboard.table-basic');
// Route::view('/tdata', 'admin.dashboard.table-data-table');
// Route::view('/uicards', 'admin.dashboard.ui-cards');
// Route::view('/widgest', 'admin.dashboard.widgest');

Route::view('/home-user', 'user.pages.index');
Route::view('/cart-user', 'user.pages.cart');
Route::view('/catalog-list-user', 'user.pages.catalog-list-page');
Route::view('/checkout-user', 'user.pages.checkout');
Route::view('/product-detail-user', 'user.pages.product-detail');
Route::view('/register-user', 'user.pages.register');
// Route::get('/homeuser', function () {
//     return view('guast.pages.index');
// });

