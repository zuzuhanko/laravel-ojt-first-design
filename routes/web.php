<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstController;



// Route::get('/',function(){
//     return view('welcome');
// });



Route::get('hello',function(){
    return view('testing');
});

Route::get('/',[firstController::class,'index'])->name('index');


Route::get('admission',[firstController::class,'admission'])->name('admission');

Route::get('about',[firstController::class,'about'])->name('about');

Route::get('contact',[firstController::class,'contact'])->name('contact');

Route::get('why', [firstController::class,'why'])->name('why');


