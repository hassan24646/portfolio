<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index');
});
Route::view('home', 'index')->name('home');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Vercel helper route to run migrations
Route::get('/migrate', function () {
    try {
        \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
        return 'Migrations completed successfully!<br><pre>' . \Illuminate\Support\Facades\Artisan::output() . '</pre>';
    } catch (\Exception $e) {
        return 'Migration error: ' . $e->getMessage();
    }
});
