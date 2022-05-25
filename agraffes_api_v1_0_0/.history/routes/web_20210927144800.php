<?php

use Illuminate\Support\Facades\Route;
use App\Models\Goods;
use App\Repositories\CategoryRepository;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    // $Category=new CategoryRepository()
    return Goods::all();
});
