<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/about-us', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact-us', function () {
    return view('pages.contact');
})->name('contact');

Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.store');

Route::get('/sitemap', function () {
    return Redirect::to(asset('/sitemap.xml'));
})->name('sitemap');

// Served by the app because Vapor keeps web manifests off the asset CDN
// and browsers require them to be same-origin.
Route::get('/site.webmanifest', function () {
    return response()->json([
        'name' => 'Land Planning Associates Inc.',
        'short_name' => 'LPA',
        'icons' => [
            ['src' => asset('favicons/android-chrome-192x192.png'), 'sizes' => '192x192', 'type' => 'image/png'],
            ['src' => asset('favicons/android-chrome-512x512.png'), 'sizes' => '512x512', 'type' => 'image/png'],
        ],
        'theme_color' => '#ffffff',
        'background_color' => '#ffffff',
        'display' => 'standalone',
    ], 200, ['Content-Type' => 'application/manifest+json'], JSON_UNESCAPED_SLASHES);
})->name('manifest');
