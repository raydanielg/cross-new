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

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Routes
Route::prefix('admin')->middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard');

    // User Management
    Route::get('/users', function () { return view('admin.users.index'); })->name('admin.users');
    Route::get('/users/cyclists', function () { return view('admin.users.index'); })->name('admin.cyclists');
    Route::get('/users/roles', function () { return view('admin.users.roles'); })->name('admin.roles');

    // Events
    Route::get('/events', function () { return view('admin.events.index'); })->name('admin.events');

    // Routes & Locations
    Route::get('/routes', function () { return view('admin.routes.index'); })->name('admin.routes');

    // Registrations
    Route::get('/registrations', function () { return view('admin.registrations.index'); })->name('admin.registrations');

    // Payments
    Route::get('/payments', function () { return view('admin.payments.index'); })->name('admin.payments');

    // Sponsors
    Route::get('/sponsors', function () { return view('admin.sponsors.index'); })->name('admin.sponsors');

    // Volunteers
    Route::get('/volunteers', function () { return view('admin.volunteers.index'); })->name('admin.volunteers');

    // Communications
    Route::get('/communications', function () { return view('admin.communications.announcements'); })->name('admin.communications');

    // Blog
    Route::get('/blog', function () { return view('admin.blog.index'); })->name('admin.blog');

    // Reports
    Route::get('/reports', function () { return view('admin.reports.index'); })->name('admin.reports');

    // Settings & Security
    Route::get('/settings', function () { return view('admin.settings.general'); })->name('admin.settings');
    Route::get('/security', function () { return view('admin.security.logins'); })->name('admin.security');
    Route::get('/support', function () { return view('admin.support.index'); })->name('admin.support');
});
