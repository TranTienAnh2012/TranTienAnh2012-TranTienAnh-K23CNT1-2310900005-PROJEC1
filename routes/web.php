<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TTa2controller;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//lad1
Route::get('/view1', function() {
    return view('tta-view1', ['name'=>'Devmaster Academy']);
});
//lad2
Route::get('/view2', function() {
    return view('tta-view2',['name'=> 'Devmaste Academy',
                                'arr'=>[1,4,7,2,9],                        
]);
});
// lad3
Route::get('/view3', function() {
    return view('tta-view3',['name'=> ["Devmaster", "Academy", "Tien", "Anh"],
                              'arr'=>[10,15,12,1,22,30],
                              'users'=>[],
]);
});
// lad4
Route::get('/', [TTa2controller::class,'index']);
