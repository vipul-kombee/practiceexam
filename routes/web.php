<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;    
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CustomerController;
 
use App\Http\Controllers\UserRoleController;

// Route::get('/', function () {
//     return view('welcome');
// });

//this code created for user role controller at 14:55 2802202
// use App\Http\Controllers\RoleController;
// use App\Http\Controllers\UserRoleController;

Route::resource('roles', RoleController::class);
Route::get('/users', [UserController::class, 'index']);

Route::get('users', [UserRoleController::class, 'index'])->name('users.index');
Route::post('users/{user}/assign-role', [UserRoleController::class, 'assignRole'])->name('users.assignRole');
Route::delete('users/{user}/remove-role/{role}', [UserRoleController::class, 'removeRole'])->name('users.removeRole');


//till here
Route::resource('users', UserController::class);
Route::get('cities/{state_id}', [CityController::class, 'getCities']);
Route::get('states', [StateController::class, 'index']);


Route::get('/get-cities', [UserController::class, 'getCities'])->name('get.cities');
Route::get('send-mail', [MailController::class, 'sendEmail']);
Route::get('/users/{id}/registration-pdf', [UserController::class, 'generateRegistrationPdf'])->name('users.registration');

Route::get('/users/export/csv', [UserController::class, 'exportCsv'])->name('users.export.csv');
Route::get('/users/export/excel', [UserController::class, 'exportExcel'])->name('users.export.excel');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Route::resource('roles', RoleController::class);



Route::resource('roles', RoleController::class);
Route::post('roles/{role}/attach', [RoleController::class, 'attachUser'])->name('roles.attach');
Route::post('roles/{role}/detach', [RoleController::class, 'detachUser'])->name('roles.detach');
Route::resource('suppliers', SupplierController::class);
Route::resource('customers', CustomerController::class);

//Routes for supplier and customer related 
Route::resource('suppliers', SupplierController::class);
Route::resource('customers', CustomerController::class);


Route::resource('suppliers', SupplierController::class)
    ->middleware('role.permission:view_suppliers');
Route::resource('customers', CustomerController::class)
    ->middleware('role.permission:view_customers');
  
    
Route::resource('roles', RoleController::class);
Route::post('/users/{user}/roles', [UserRoleController::class, 'assignRole'])->name('users.assignRole');
Route::delete('/users/{user}/roles/{role}', [UserRoleController::class, 'removeRole'])->name('users.removeRole');
    