<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TTa2controller;
use App\Http\Controllers\View4controller;
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
//lad5
Route::get('/home',function(){
    return view('tta-index');
});
Route::get('/about-us',function(){
    return view('tta-about');
});
Route::get('/contact',function(){
    return view('tta-contact');
});
//lad6
Route::get('/menu',function(){
    return view('__tta-layout1.tta-header');
    });
    Route::get('/about-is',function(){
    return view('__tta-layout1.tta-navbar');
    });
    Route::get('/open-contact',function(){
    return view('__tta-layout1.tta-footer');
    });

//lession04-view
//lad1
 Route::get('/view-1', function() {
    return view('lession04-view.tta-view1');
 });
 //lad2
 Route::get('/view-2', function() {
    return view('lession04-view.tta-view2',['name'=>'Welcome to, TTA Devmaster']);
 });

 //lad3
 Route::get('/view-3', function() {
    return view('lession04-view.tta-view3',['name'=>'Quản trị nội dung']);
 });
//lad4
 Route::get('view-4', [View4controller::class, 'view4'])->name('viewdemo.view4');
//lad5
Route::get('view-5', [View4controller::class, 'view5'])->name('viewdemo.view5');
//lad6
Route::get('view-6', function() {
    return view('lession04-view.tta-view6');
});