<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get("/", function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\TicketController::class,'filter'])->name('home')->middleware("auth");



//....Booking....//
//..view..
Route::get("/booksview", [App\Http\Controllers\BookingController::class,'index'])->middleware("auth");;
//..filter..
Route::post("/add/bookfilter", [App\Http\Controllers\BookingController::class,'filterbooking'])->name('filter-book')->middleware("auth");;
//...edit
Route::get("/add/bookedit/{id}", [App\Http\Controllers\BookingController::class,'edit'])->name ('edit')->middleware("auth");;
//...update
Route::post("/update/book/{id}", [App\Http\Controllers\BookingController::class,'update'])->name('update-book')->middleware("auth");;
//..add
Route::get("/add/book/{id}", [App\Http\Controllers\BookingController::class,'create'])->name('add-book')->middleware("auth");;
//...store
Route::post("/create/book/{id}", [App\Http\Controllers\BookingController::class,'store'])->name('create-book')->middleware("auth");;
//...delete
Route::get("/delete/{id}", [App\Http\Controllers\BookingController::class,'destroy'])->name('delete_book')->middleware("auth");;


//........ticket....//

//..filter
Route::post("/filter/ticket", [App\Http\Controllers\TicketController::class,'show'])->name('filtered-ticket')->middleware("auth");;
//..add
Route::get("/addtick", [App\Http\Controllers\TicketController::class,'create'])->middleware("auth");;
//...store
Route::post("/creat/tick", [App\Http\Controllers\TicketController::class,'store'])->name('creat-tick')->middleware("auth");;
//..delete
Route::get("/deletetick/{id}", [App\Http\Controllers\TicketController::class,'destroy'])->name('delete')->middleware("auth");;



//........company..//

//..view..
Route::get("/compview", [App\Http\Controllers\CompanyController::class,'index'])->name('company_view')->middleware("auth");
//..viewbyticket
Route::get("/compview/tick/{id}", [App\Http\Controllers\CompanyController::class,'showbyticket'])->name('company_view_by_ticket')->middleware("auth");

//...searc
Route::post("/compfilter", [App\Http\Controllers\CompanyController::class,'filter'])->name('compfilter')->middleware("auth");
//...edit..
Route::get("/editcomp/{id}", [App\Http\Controllers\CompanyController::class,'edit'])->name ('edit_company')->middleware("auth");;
//..update..
Route::post("/updatecomp/{id}", [App\Http\Controllers\CompanyController::class,'update'])->name('update-company')->middleware("auth");;
//..delete
Route::get("/deletecomp/{id}", [App\Http\Controllers\CompanyController::class,'destroy'])->name('delete_company')->middleware("auth");;
//..add
Route::get("/addcomp", [App\Http\Controllers\CompanyController::class,'create'])->name('add_company')->middleware("auth");;
// //...store
 Route::post("/creat/comp", [App\Http\Controllers\CompanyController::class,'store'])->name('creat-company')->middleware("auth");;

