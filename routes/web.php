<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PlatterController;
use App\Http\Controllers\SpecialController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventManageController;
//use App\Http\Controllers\SpecialController;
use App\Http\Controllers\SliderController;

Route::get('/',[HomeController::class,'index'])->name('home');
//Home Controller
Route::get('/allproducts',[HomeController::class,'allProdducts'])->name('all-products');
Route::get('/product-details/{id}',[HomeController::class,'productDetails'])->name('product-details');
Route::post('/add-cart/{id}',[HomeController::class,'addCart'])->name('add-cart');
Route::post('/delete-cart/{id}',[HomeController::class,'delCart'])->name('delete-cart');
Route::get('/show-cart/',[HomeController::class,'showCart'])->name('show-cart');
Route::get('/cash-order/',[HomeController::class,'cashOrder'])->name('cash-order');
Route::get('/show-order/',[HomeController::class,'showOrder'])->name('show-order');
Route::post('/cancel-order/{id}',[HomeController::class,'cancelOrder'])->name('cancel-order');


Route::get('/pakages-view',[HomeController::class,'pakagesView'])->name('pakages-view');


//Join
Route::get('/join',[HomeController::class,'join'])->name('join');
Route::post('/join-str',[HomeController::class,'joinStr'])->name('join-str');

//Contact
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/contact-us/',[HomeController::class,'contactUs'])->name('contact-us');


//Menu Order
Route::post('/menu-cart/{id}',[HomeController::class,'menuCart'])->name('menu-cart');
Route::get('/show-menu-cart/',[HomeController::class,'showMenuCart'])->name('show-menu-cart');
Route::post('/delete-menu-cart/{id}',[HomeController::class,'delMenuCart'])->name('delete-menu-cart');
Route::get('/cash-order-platter/',[HomeController::class,'cashOrderPlatter'])->name('cash-order-platter');
Route::get('/show-menu-order/',[HomeController::class,'showMenuOrder'])->name('show-menu-order');
Route::post('/cancel-menu-order/{id}',[HomeController::class,'cancelMenuOrder'])->name('cancel-menu-order');

//Package Cart
Route::post('/package-cart/{id}',[HomeController::class,'packageCart'])->name('package-cart');
Route::get('/show-pkg-cart/',[HomeController::class,'showPkgCart'])->name('show-pkg-cart');
Route::post('/delete-pkg-cart/{id}',[HomeController::class,'delPkgCart'])->name('delete-pkg-cart');
Route::get('/cash-order-package/',[HomeController::class,'cashOrderPlackage'])->name('cash-order-package');
Route::get('/show-package-order/',[HomeController::class,'showPackageOrder'])->name('show-package-order');
Route::post('/cancel-package-order/{id}',[HomeController::class,'cancelPkgOrder'])->name('cancel-package-order');

Route::post('/custom-store',[HomeController::class,'customStore'])->name('custom-store');
Route::get('/mycustom-order-show',[HomeController::class,'myCustomOrder'])->name('mycustom-order-show');


Route::post('/review/{id}',[HomeController::class,'review'])->name('review');

//Event
Route::post('/event-store',[HomeController::class,'eventStore'])->name('event-store');
Route::get('/book',[HomeController::class,'book'])->name('book');
Route::get('/myevent-show',[HomeController::class,'myeventShow'])->name('myevent-show');



Route::get('/cheff',[HomeController::class,'cheff'])->name('cheff');



Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
});

Route::get('/redirect',[HomeController::class,'redirect']);
Route::resource('users',UserController::class);
Route::resource('office',OfficeController::class);
Route::resource('products',ProductController::class);
Route::resource('package',PackageController::class);
Route::resource('platter',PlatterController::class);
Route::resource('special',SpecialController::class);
Route::resource('chef',ChefController::class);
Route::resource('event',EventController::class);
Route::resource('eventmanage',EventManageController::class);
Route::resource('slider',SliderController::class);

//Product
//Category
Route::get('/viewcategory',[AdminController::class,'viewCategory'])->name('view-category');
Route::post('/storecategory',[AdminController::class,'stoteCategory'])->name('store-category');
Route::get('/editcategory/{id}',[AdminController::class,'editCategory'])->name('edit-category');
Route::post('/deletecategory/{id}',[AdminController::class,'deleteCategory'])->name('delete-category');
Route::post('/updatecategory/{id}',[AdminController::class,'categoryUpdate'])->name('category.updatecat');


//Order
Route::get('/order',[AdminController::class,'order'])->name('order');
Route::get('/deliver/{id}',[AdminController::class,'deliver'])->name('deliver');
Route::get('/print_pdf/{id}',[AdminController::class,'printPdf'])->name('print_pdf');


Route::get('/menu-order',[AdminController::class,'menuOrder'])->name('menu-order');
Route::get('/deliverPlatter/{id}',[AdminController::class,'deliverPlatter'])->name('deliverPlatter');
Route::get('/print_Platter_pdf/{id}',[AdminController::class,'printPlatterPdf'])->name('print_Platter_pdf');

Route::get('/pkg-order',[AdminController::class,'pkgOrder'])->name('pkg-order');
Route::get('/deliver-Package/{id}',[AdminController::class,'deliverPackage'])->name('deliver-Package');
Route::get('/print_Package_pdf/{id}',[AdminController::class,'printPkPdf'])->name('print_Package_pdf');

Route::get('/custom-show',[AdminController::class,'customShow'])->name('custom-show');


Route::get('/contact-show',[AdminController::class,'showContact'])->name('contact-show');
//Route::post('/deliver-query/{id}}',[AdminController::class,'deliverQuery'])->name('deliver-query');
Route::get('/deliver-query/{id}', [AdminController::class, 'deliverQuery'])->name('deliver-query');



Route::get('/event-show',[AdminController::class,'eventShow'])->name('event-show');
Route::get('/deliver-event/{id}', [AdminController::class, 'deliverEvent'])->name('deliver-event');



Route::get('/join-request',[AdminController::class,'joinRequest'])->name('join-request');
