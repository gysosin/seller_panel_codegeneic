<?php

use Illuminate\Support\Facades\Route;

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
//contact route start
Route::get('/dashboard-contactforissue', function () {
    return view('dashboard/contact/contactforissue');
});
Route::get('/dashboard-contactissue', function () {
    return view('dashboard/user_utility/contact_issue');
});
//contact route ends
//////////////////////////////////////////////////////////////////////////
//dashboard route start
Route::get('/dashboard', function () {
    return view('dashboard/maindashboard');
});
//dashboard routes end

//orders route start

Route::get('/dashboard-orderview', function () {
    return view('dashboard.orders.orderview');
});
Route::get('/dashboard-allorders', function () {
    return view('dashboard/orders/allOrders');
});
Route::get('/dashboard-deliveredorders', function () {
    return view('dashboard/orders/deliveredorders');
});
Route::get('/dashboard-failedorders', function () {
    return view('dashboard/orders/failedorders');
});
Route::get('/dashboard-pendingorders', function () {
    return view('dashboard/orders/pendingorders');
});
Route::get('/dashboard-processingorders', function () {
    return view('dashboard/orders/processingorder');
});
Route::get('/dashboard-returnedorders', function () {
    return view('dashboard/orders/returnedorders');
});
//order routes ends

//products route starts
Route::get('/dashboard-productoverview', function () {
    return view('dashboard/products/productoverview');
});
Route::get('/dashboard-productreview', function () {
    return view('dashboard/products/productreview');
});
Route::get('/dashboard-bulkimport', function () {
    return view('dashboard/products/bulkimport');
});
Route::get('/dashboard-bulkexport', function () {
    return view('dashboard/products/bulkimport');
});
Route::get('/dashboard-addproduct', function () {
    return view('dashboard/products/addproduct');
});
Route::get('/dashboard-allproducts', function () {
    return view('dashboard/products/allproducts');
});
Route::get('/dashboard-editproduct', function () {
    return view('dashboard/products/editproduct');
});
//product routes ends

//transactions routes starts
Route::get('/dashboard-sellinghistory', function () {
    return view('dashboard/transactions/sellinghistory');
});
Route::get('/dashboard-alltransactions', function () {
    return view('dashboard/transactions/transactions');
});


//trasnaction routes ends
//login register routes starts

Route::get('/register', function () {
    return view('auth/registration');
});

Route::get('/', function () {
    return view('auth/login');
});
Route::get('/editprofile', function () {
    return view('auth/profile');
});

Route::get('/verify', function () {
    return view('auth/verify');
});
Route::get('/forgotpass', function () {
    return view('auth/forgotpass');
});
//login register routes ends

Route::get('/dashboard-cancellation', function () {
    return view('dashboard/user_utility/cancellation');
});
Route::get('/dashboard-purchasehistory', function () {
    return view('dashboard/user_utility/purchasehistory');
});
