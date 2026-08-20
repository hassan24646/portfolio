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

// Admin route to view contact messages securely
Route::get('/messages', function (\Illuminate\Http\Request $request) {
    if ($request->query('key') !== 'hassan123') {
        abort(403, 'Unauthorized access.');
    }
    $messages = \App\Models\ContactMessage::latest()->get();
    return view('messages', compact('messages'));
});

