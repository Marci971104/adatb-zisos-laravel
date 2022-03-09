<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudalController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Site;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get("about", function(){
    return view ("about",[
        "page"=>"Rólunk"
    ]);
});

Route::get("about-us", function(){
    return view ("admin.about-us",[

        "names"=> ["Béla","Géza","Kata"]
    ]);
});

Route::get("/products",function(){
    return view("products",[
        "page"=> "Termékek"
    ],[
        "name"=>["Ragasztó","Ceruza"] 
    ]);
});


Route::get("/kapcsolat", function(){
    return view ("kapcsolat",[

        "message"=>"Laravel@laravel.hu"
    ]);
    
      
});

// Route::get("/form",[StudalController::class,"myForm"]);
// Route::post("/submit-studal",[StudalController::class,"submitStudal"]);

// Route::match(["get","post"],"/add-studal",[StudalController::class,"myForm"]);


Route::match(["get","post"],"/add-product",[ProductsController::class,"addProduct"]);


// Route::get("/add-studal",[StudalController::class,"addStudal"]);
// Route::post("/submit-studal",[StudalController::class,"submitStudal"]);


// Route::get("/get-students",[Site::class,"getStudents"]);
// Route::get("/add-students",[Site::class,"insertStudent"]);
// Route::get("/update-students",[Site::class,"updateStudent"]);
// Route::get("/delete-students",[Site::class,"deleteStudent"]);


Route::get("/list-student",[StudalController::class,"listStudent"]);
Route::get("/insert-student",[StudalController::class,"insertStudent"]);
Route::get("/update-student",[StudalController::class,"updateCourse"]);
Route::get("/delete-student",[StudalController::class,"deleteCourse"]);


