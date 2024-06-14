<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\DessertController;
use App\Http\Controllers\BrowniesController;
use App\Http\Controllers\CookiesController;
use App\Http\Controllers\ContactUsController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [DashboardController::class, 'index'])->name('index');

Route::get('catalogSendsweet', [CatalogController::class, 'catalogSendsweet'])->name('catalogSendsweet');
Route::get('showAll', [CatalogController::class, 'showAll'])->name('showAll');

Route::get('showDessertBox', [DessertController::class, 'showDessertBox'])->name('showDessertBox');

Route::get('showBrownies', [BrowniesController::class, 'showBrownies'])->name('showBrownies');

Route::get('showCookies', [CookiesController::class, 'showCookies'])->name('showCookies');
Route::get('showCookies2', [CookiesController::class, 'showCookies2'])->name('showCookies2');

Route::get('contactUS', [ContactUsController::class, 'contactUS'])->name('contactUS');
