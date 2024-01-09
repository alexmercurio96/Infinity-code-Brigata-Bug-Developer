<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AnnouncementController;

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

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');
Route::get('/category/{category}', [PublicController::class, 'categoryShow'])->name('categoryShow');

Route::get('/create/announcement', [AnnouncementController::class, 'createAnnouncement'])->name('announcements.create');

Route::get('/detail/announcement/{announcement}', [AnnouncementController::class,'showAnnouncement'])->name ('announcements.show');

Route::get('/all/announcement/', [AnnouncementController::class,'indexAnnouncement'])->name ('announcements.index');


