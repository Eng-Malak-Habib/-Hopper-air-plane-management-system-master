<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PilotController;
use App\Http\Controllers\userscontroller;
use Illuminate\Support\Facades\Route;

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




Route::middleware('auth:admin')->group(function()
{
Route::post('addpilot',[AdminController::class,'addpilot']);
Route::post('addflight',[AdminController::class,'addflight']);
Route::post('addplane',[AdminController::class,'addplane']);
Route::post('adminlogout',[AdminController::class,'logout']);

});
Route::middleware('auth:web')->group(function()
{
     Route::get('profile',[userscontroller::class,'show_ticket']);
     Route::get('find_fligh/{id}',[userscontroller::class,'find_fligh']);
     Route::post('book_flight',[userscontroller::class,'book_flight']);
     Route::post('userlogout',[userscontroller::class,'userlogout']);

});
Route::middleware('auth:pilot')->group(function()
{
     Route::get('profile',[PilotController::class,'show_ticket']);
   //  Route::post('userlogout',[userscontroller::class,'userlogout']);

});
Route::middleware('guest')->group(function()
{

 //clint or user
    Route::get('userregisterationform',[userscontroller::class,'userregisterationform']);
    Route::get('userloginform',[userscontroller::class,'userloginform']);
    Route::post('userlogin',[userscontroller::class,'userlogin']);
    Route::post('userregisteration',[userscontroller::class,'userregisteration']);
//admin
Route::get('adminregisterform',[AdminController::class,'adminregisterationform']);
Route::get('adminloginform',[AdminController::class,'adminloginform'])->name('login');
Route::post('adminlogin',[AdminController::class,'login']);
Route::post('adminregisteration',[AdminController::class,'registeration']);

Route::get('Pilotloginform',[PilotController::class,'Pilotloginform']);
Route::post('Pilotlogin',[PilotController::class,'Pilotlogin']);



}); 
