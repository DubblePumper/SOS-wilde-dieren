<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/wie-zijn-wij', [PageController::class, 'about'])->name('about');
Route::get('/wat-doen-wij', [PageController::class, 'work'])->name('work');
Route::get('/hoe-helpen', [PageController::class, 'help'])->name('help');
Route::get('/op-bezoek', [PageController::class, 'visit'])->name('visit');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->middleware('throttle:contact')->name('contact.store');

Route::get('/robots.txt', [PageController::class, 'robots'])->name('robots');
Route::get('/sitemap.xml', [PageController::class, 'sitemap'])->name('sitemap');

Route::redirect('/content/wie-zijn-wij', '/wie-zijn-wij', 301);
Route::redirect('/node/4', '/wat-doen-wij', 301);
Route::redirect('/node/9', '/hoe-helpen', 301);
Route::redirect('/content/op-bezoek-0', '/op-bezoek', 301);
Route::redirect('/node/11', '/hoe-helpen', 301);
Route::redirect('/content/contact', '/contact', 301);
Route::redirect('/content/help-ik-vind-een-dier', '/contact', 301);
Route::redirect('/frontpage', '/', 301);
