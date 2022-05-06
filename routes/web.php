<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdsController;
use App\Http\Controllers\Admin\ZonesController;
use App\Http\Controllers\Admin\ComplaintsController;
use App\Http\Controllers\Admin\CitiesController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\PharController;
use App\Http\Controllers\Admin\PaymentMethodsCotroller;
use App\Http\Controllers\Admin\AccountsController;
use App\Http\Controllers\Admin\NotificationsController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RequestsController;

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

    // Admin Routes
    

        // Admin Dashboard
        Route::get('/_admin/', [AdminController::class,'index'])->name('admin-dashboard');


        Route::get('/_admin/profile', [AdminController::class, 'showProfile'])->name('admin-profile');
        Route::get('/_admin/edit_profile', [AdminController::class, 'editProfile'])->name('admin-edit_profile');
        Route::post('/_admin/edit_profile/image', [AdminController::class, 'doUpdataImage'])->name('admin-edit_profile-image');
        Route::get('/_admin/zones', [AdminController::class, 'showZones'])->name('admin-zones');


        Route::get('/_admin/show_ads', [AdsController::class, 'showAds'])->name('admin-show_ads');
        Route::get('/_admin/add_ads', [AdsController::class, 'addAds'])->name('admin-add_ads');
        Route::get('/_admin/edit_ads', [AdsController::class, 'editAds'])->name('admin-edit_ads');


        Route::get('/_admin/show_Complaints', [ComplaintsController::class, 'showComplaints'])->name('admin-show_Complaints');
        Route::get('/_admin/add_Complaints', [ComplaintsController::class, 'addComplaints'])->name('admin-add_Complaints');
        Route::get('/_admin/edit_Complaints', [ComplaintsController::class, 'editComplaints'])->name('admin-edit_Complaints');


        Route::get('/_admin/show_Zones', [ZonesController::class, 'showZones'])->name('admin-show_Zones');
        Route::get('/_admin/add_Zones', [ZonesController::class, 'addZones'])->name('admin-add_Zones');
        Route::get('/_admin/edit_Zones', [ZonesController::class, 'editZones'])->name('admin-edit_Zones');


        Route::get('/_admin/show_Cities', [CitiesController::class, 'showCities'])->name('admin-show_Cities');
        Route::get('/_admin/add_Cities', [CitiesController::class, 'addCities'])->name('admin-add_Cities');
        Route::get('/_admin/edit_Cities/{id}', [CitiesController::class, 'editCities'])->name('admin-edit_Cities');


        Route::get('/_admin/show_Customers', [CustomerController::class, 'showCustomers'])->name('admin-show_Customer');
        Route::get('/_admin/add_Customers', [CustomerController::class, 'addCustomers'])->name('admin-add_Customers');
        Route::get('/_admin/edit_Customers/{id}', [CustomerController::class, 'editCustomers'])->name('admin-edit_Customers');

        Route::get('/_admin/show_Phars', [PharController::class, 'showPhars'])->name('admin-show_Phars');
        Route::get('/_admin/add_Phars', [PharController::class, 'addPhars'])->name('admin-add_Phars');
        Route::get('/_admin/edit_Phars/{id}', [PharController::class, 'editPhars'])->name('admin-edit_Phars');


        Route::get('/_admin/show_PaymentMethods', [PaymentMethodsCotroller::class, 'showPaymentMethods'])->name('admin-show_PaymentMethods');
        Route::get('/_admin/add_PaymentMethods', [PaymentMethodsCotroller::class, 'addPaymentMethods'])->name('admin-add_PaymentMethods');
        Route::get('/_admin/edit_PaymentMethods', [PaymentMethodsCotroller::class, 'editPaymentMethods'])->name('admin-edit_PaymentMethods');


        Route::get('/_admin/show_Accounts', [AccountsController::class, 'showAccounts'])->name('admin-show_[Accounts');
        Route::get('/_admin/add_Accounts', [AccountsController::class, 'addAccounts'])->name('admin-add_[Accounts');
        Route::get('/_admin/edit_Accounts', [AccountsController::class, 'editAccounts'])->name('admin-edit_[Accounts');


        Route::get('/_admin/show_Requests', [RequestsController::class, 'showRequests'])->name('admin-show_Requests');
        Route::get('/_admin/add_Requests', [RequestsController::class, 'addRequests'])->name('admin-add_Requests');
        Route::get('/_admin/edit_Requests', [RequestsController::class, 'editRequests'])->name('admin-edit_Requests');
        Route::get('/_admin/show_RequestDetails', [RequestsController::class, 'showRequestDetails'])->name('admin-show_RequestDetails');


        Route::get('/_admin/show_Notifications', [NotificationsController::class, 'showNotifications'])->name('admin-show_[Notifications');
        Route::get('/_admin/add_Notifications', [NotificationsController::class, 'addNotifications'])->name('admin-add_[Notifications');
        Route::get('/_admin/edit_Notifications', [NotificationsController::class, 'editNotifications'])->name('admin-edit_[Notificati0ns');

        Route::get('/_admin/show_Permissions', [PermissionsController::class, 'showPermissions'])->name('admin-show_[Permissions');


    

    // Logout
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');



