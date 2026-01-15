<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/appointments', function () {
    return view('appointments');
})->name('appointments');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

// Admin routes using AdminController
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/appointments/{id}', [AdminController::class, 'getAppointment'])->name('admin.appointment.get');
Route::put('/admin/appointments/{id}', [AdminController::class, 'updateAppointment'])->name('admin.appointment.update');
Route::delete('/admin/appointments/{id}', [AdminController::class, 'deleteAppointment'])->name('admin.appointment.delete');

