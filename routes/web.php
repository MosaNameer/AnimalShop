<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\Home\Main as Home;
use App\Http\Livewire\Pages\Category\Main as Category;
use App\Http\Livewire\Pages\AboutUs\Main as About;
use App\Http\Livewire\Pages\Category\ShowCategory;
use App\Http\Livewire\Pages\Pet\Main as Pet;
use App\Http\Livewire\Pages\Pet\ShowPet;

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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});




Route::get("/", Home::class)->name("home");
Route::get("/category", Category::class)->name("category");
Route::get("/about", About::class)->name("about");
Route::get("/pet", Pet::class)->name("pet");
Route::get("/pet/{id}", ShowPet::class)->name("showPet");
Route::get("/category/{id}", ShowCategory::class)->name("showCategory");
Route::get("/category/{id}/pets", ShowCategory::class)->name("showCategoryPet");
