<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\HomeContentController;
use App\Http\Controllers\Admin\CategorySpecificationController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/quote', [HomeController::class, 'quote'])->name('quote');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/articles', [HomeController::class, 'articlesIndex'])->name('articles.index');
Route::get('/articles/{article}', [HomeController::class, 'articlesShow'])->name('articles.show');
Route::get('/brands/{brand}', [HomeController::class, 'showBrand'])->name('brand.show');
Route::get('/services/{category}', [HomeController::class, 'showServices'])->name('services.show');
Route::post('/contact', [ContactController::class, 'store'])->name('frontend.contact.store');
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
Route::post('/testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');

Route::middleware('auth')->group(
    function () {
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        Route::put('/profile/update-data', [ProfileController::class, 'updateData'])->name('profile.update.data');

        // admin
        Route::middleware('role:admin')->group(function () {
            Route::prefix('admin')->name('admin.')->group(function () {
                Route::get('/home-contents', [HomeContentController::class, 'index'])->name('home-contents.index');
                Route::post('/home-contents/{id}', [HomeContentController::class, 'update'])->name('home-contents.update');
            });

            Route::prefix('admin')->name('admin.')->group(function () {
                Route::get('/media', [MediaController::class, 'index'])->name('media.index');
                Route::post('/media', [MediaController::class, 'store'])->name('media.store');
                Route::patch('/media/{id}', [MediaController::class, 'update'])->name('media.update');
                Route::delete('/media/{id}', [MediaController::class, 'destroy'])->name('media.destroy');
            });

            Route::prefix('admin')->name('admin.')->group(function () {
                Route::resource('faqs', FaqController::class);
            });

            Route::prefix('admin')->name('admin.')->group(function () {
                Route::resource('statistics', StatisticController::class);
            });

            Route::prefix('settings')->name('settings.')->group(function () {
                Route::get('/settings', [SettingsController::class, 'index'])->name('index');
                Route::post('/settings/{id}', [SettingsController::class, 'update'])->name('update');
            });

            Route::prefix('admin')->name('admin.')->group(function () {
                Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
                Route::get('/testimonials/create', [TestimonialController::class, 'create'])->name('testimonials.create');
                Route::post('/testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');
                Route::get('/testimonials/{id}/edit', [TestimonialController::class, 'edit'])->name('testimonials.edit');
                Route::put('/testimonials/{id}', [TestimonialController::class, 'update'])->name('testimonials.update');
                Route::put('/testimonials/{id}/status', [TestimonialController::class, 'updateStatus'])->name('testimonials.update-status');
                Route::delete('/testimonials/{id}', [TestimonialController::class, 'destroy'])->name('testimonials.destroy');
                Route::resource('articles', ArticleController::class);
            });

            Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
                Route::resource('brands', BrandController::class);
                Route::resource('categories', CategoryController::class);
                Route::get('categories/{category}/specifications', [CategorySpecificationController::class, 'index'])->name('categories.specifications.index');
                Route::get('categories/{category}/specifications/create', [CategorySpecificationController::class, 'create'])->name('categories.specifications.create');
                Route::post('categories/{category}/specifications', [CategorySpecificationController::class, 'store'])->name('categories.specifications.store');
                Route::get('specifications/{specification}/edit', [CategorySpecificationController::class, 'edit'])->name('specifications.edit');
                Route::put('specifications/{specification}', [CategorySpecificationController::class, 'update'])->name('specifications.update');
                Route::delete('specifications/{specification}', [CategorySpecificationController::class, 'destroy'])->name('specifications.destroy');
                Route::resource('portfolios', PortfolioController::class);
                Route::resource('contacts', ContactController::class)->except(['create', 'edit', 'update', 'show']);
                Route::get('contacts/{contact}/read', [ContactController::class, 'markAsRead'])->name('contacts.read');
                Route::resource('careers', CareerController::class);
            });
        });

        // admin + supervisor
        Route::middleware('role:admin,sales')->group(function () {
            Route::get('/reservations', [ReservationController::class, 'index'])
                ->name('reservations.index');

            Route::patch('/reservations/{id}/confirm', [ReservationController::class, 'confirmStatus'])
                ->name('reservations.confirm');

            Route::patch('/reservations/{id}/complete', [ReservationController::class, 'completeStatus'])
                ->name('reservations.complete');
            Route::delete('/reservations/{id}', [ReservationController::class, 'destroy'])
                ->name('reservations.destroy');

            Route::post('/reservations/{id}/archive-action', [ReservationController::class, 'moveToArchive'])
                ->name('reservations.moveToArchive');

            Route::get('/reservations/archive', [ReservationController::class, 'archive'])
                ->name('reservations.archive');

            Route::patch('/reservations/{id}/restore', [ReservationController::class, 'restore'])
                ->name('reservations.restore');
        });
    }
);

Route::get('/u/{theme_id}/{slug}', [ProfileController::class, 'show'])->name('profile.show');
require __DIR__ . '/auth.php';
